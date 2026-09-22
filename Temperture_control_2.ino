#include <WiFi.h>
#include <WebServer.h>
#include <Preferences.h>
#include <ArduinoOTA.h>
#include <DHT.h>
#include <time.h>

// Credenciais Wi-Fi
const char* ssid     = "Alessandro_2G";
const char* password = "Van@1981";

// Configuração de IP Fixo
IPAddress local_IP(172, 16, 0, 51);
IPAddress gateway(172, 16, 0, 1);
IPAddress subnet(255, 255, 255, 0);
IPAddress primaryDNS(8, 8, 8, 8);
IPAddress secondaryDNS(1, 1, 1, 1);

// Configuração NTP (Horário de Brasília: UTC-3 = -10800s, sem horário de verão = 0s)
const char* ntpServer1 = "a.st1.ntp.br";
const char* ntpServer2 = "pool.ntp.org";
const long  gmtOffset_sec = -10800;
const int   daylightOffset_sec = 0;

// Sensor DHT11
#define DHTPIN 4
#define DHTTYPE DHT11
DHT dht(DHTPIN, DHTTYPE);

// Pino do Relé (IN1)
#define RELAY_PIN 18
#define RELAY_ON  LOW
#define RELAY_OFF HIGH

// Pino do LED indicador
#ifndef LED_BUILTIN
  #define LED_BUILTIN 2
#endif

// Armazenamento permanente NVS
Preferences prefs;

// Variáveis de temperatura, controle e horário
float tempAtual = 0.0;
float umidAtual = 0.0;
float tempMin   = 22.0;
float tempMax   = 26.0;
bool aquecedorLigado = false;
char ultimaAtualizacao[20] = "--:--:--";

// Variáveis para cálculo da média no período de 1 minuto
float somaTempMinuto = 0.0;
int contAmostrasMinuto = 0;

// Buffer circular de 24 horas (1 amostra média por minuto = 1440 amostras)
const int HIST_SIZE = 1440;
float histTemp[HIST_SIZE];
int histIndex = 0;
int histCount = 0;

WebServer server(8080);

// Temporizadores independentes
unsigned long prevLoopMillis = 0;
const unsigned long sensorInterval = 2500;  // Leitura rápida / controle a cada 2.5s

unsigned long prevHistMillis = 0;
const unsigned long histInterval = 60000;   // Fechamento da média a cada 60s (1 min)

// Temporizador do LED Heartbeat
unsigned long prevLedMillis = 0;
const unsigned long ledInterval = 500;      // Inverte o estado a cada 500ms (1 Hz)
bool ledState = false;

void setAquecedor(bool ligar) {
  aquecedorLigado = ligar;
  digitalWrite(RELAY_PIN, ligar ? RELAY_ON : RELAY_OFF);
}

void processarTermostato() {
  if (tempAtual <= tempMin && !aquecedorLigado) {
    setAquecedor(true);
  } else if (tempAtual >= tempMax && aquecedorLigado) {
    setAquecedor(false);
  }
}

void registrarHistorico(float tMedia) {
  histTemp[histIndex] = tMedia;
  histIndex = (histIndex + 1) % HIST_SIZE;
  if (histCount < HIST_SIZE) histCount++;
}

void atualizarTimestamp() {
  struct tm timeinfo;
  if (getLocalTime(&timeinfo, 10)) {
    strftime(ultimaAtualizacao, sizeof(ultimaAtualizacao), "%d/%m %H:%M:%S", &timeinfo);
  }
}

// Interface Web (HTML + SVG nativo com média das últimas 24h)
const char index_html[] PROGMEM = R"rawliteral(
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Termostato ESP32 - 24 Horas</title>
  <style>
    body { font-family: Arial, sans-serif; background: #121212; color: #eee; margin: 0; padding: 15px; text-align: center; }
    h1 { color: #ff9800; font-size: 22px; margin-bottom: 12px; }
    .card { background: #1e1e1e; border-radius: 8px; padding: 15px; margin: 12px auto; max-width: 480px; box-shadow: 0 4px 10px rgba(0,0,0,0.5); }
    .val { font-size: 34px; font-weight: bold; color: #00e676; margin: 5px 0; }
    .badge { display: inline-block; padding: 6px 16px; border-radius: 16px; font-weight: bold; font-size: 14px; margin-top: 5px; }
    .on { background: #d32f2f; color: #fff; }
    .off { background: #424242; color: #bbb; }
    .field { margin: 10px 0; display: flex; justify-content: space-between; align-items: center; }
    input[type=number] { width: 85px; padding: 6px; font-size: 16px; text-align: center; border-radius: 4px; border: 1px solid #444; background: #2a2a2a; color: #fff; }
    .btn { width: 100%; padding: 10px; font-size: 15px; font-weight: bold; border: none; border-radius: 5px; cursor: pointer; background: #ff9800; color: #121212; margin-top: 10px; }
    svg { background: #181818; border-radius: 6px; border: 1px solid #333; width: 100%; height: 180px; }
    .grid { stroke: #2a2a2a; stroke-width: 1; stroke-dasharray: 4; }
    .stats { display: flex; justify-content: space-around; font-size: 12px; color: #aaa; margin-top: 6px; }
    .timestamp { font-size: 12px; color: #777; margin-top: 6px; }
  </style>
</head>
<body>
  <h1>Controle de Aquecedor</h1>

  <div class="card">
    <div style="color: #aaa;">Temperatura Atual</div>
    <div class="val"><span id="temp">--</span> °C</div>
    <div style="color: #888; font-size: 13px;">Umidade: <span id="umid">--</span> %</div>
    <div><span id="status" class="badge off">DESLIGADO</span></div>
    <div class="timestamp">Última leitura: <span id="hora" style="color: #bbb;">--:--:--</span></div>
  </div>

  <div class="card">
    <div style="display: flex; justify-content: space-between; align-items: baseline; margin-bottom: 6px;">
      <h3 style="margin: 0; font-size: 16px;">Histórico (Médias por Minuto - 24h)</h3>
      <span style="font-size: 11px; color: #888;" id="amostras">0 min</span>
    </div>
    
    <svg id="grafico" viewBox="0 0 450 180">
      <line x1="45" y1="20" x2="440" y2="20" class="grid" />
      <line x1="45" y1="90" x2="440" y2="90" class="grid" />
      <line x1="45" y1="160" x2="440" y2="160" class="grid" />

      <polyline id="linha" fill="none" stroke="#00e676" stroke-width="2" points="" />

      <text id="lblMax" x="40" y="24" fill="#888" font-size="11" text-anchor="end">--</text>
      <text id="lblMed" x="40" y="94" fill="#666" font-size="11" text-anchor="end">--</text>
      <text id="lblMin" x="40" y="164" fill="#888" font-size="11" text-anchor="end">--</text>

      <text x="50" y="176" fill="#666" font-size="10">-24h</text>
      <text x="240" y="176" fill="#666" font-size="10">-12h</text>
      <text x="415" y="176" fill="#666" font-size="10">Agora</text>
    </svg>

    <div class="stats">
      <span>Mín: <strong id="stMin">--</strong>°C</span>
      <span>Méd: <strong id="stMed">--</strong>°C</span>
      <span>Máx: <strong id="stMax">--</strong>°C</span>
    </div>
  </div>

  <div class="card">
    <h3 style="margin: 5px 0 10px 0; font-size: 16px;">Configuração NVS / Flash</h3>
    <div class="field">
      <span>Mínima (Ligar):</span>
      <input type="number" id="t_min" step="0.5">
    </div>
    <div class="field">
      <span>Máxima (Desligar):</span>
      <input type="number" id="t_max" step="0.5">
    </div>
    <button class="btn" onclick="salvarLimites()">Salvar na Memória</button>
  </div>

  <script>
    let inicializado = false;

    function renderizarGrafico(hist) {
      if (!hist || hist.length < 2) return;

      document.getElementById('amostras').innerText = hist.length + ' min (' + (hist.length / 60).toFixed(1) + 'h)';

      let min = Math.min(...hist);
      let max = Math.max(...hist);
      let soma = hist.reduce((a, b) => a + b, 0);
      let med = soma / hist.length;

      document.getElementById('stMin').innerText = min.toFixed(1);
      document.getElementById('stMed').innerText = med.toFixed(1);
      document.getElementById('stMax').innerText = max.toFixed(1);

      const yMin = min - 0.5;
      const yMax = max + 0.5;
      const range = (yMax - yMin) === 0 ? 1 : (yMax - yMin);

      document.getElementById('lblMax').textContent = yMax.toFixed(1);
      document.getElementById('lblMed').textContent = ((yMax + yMin) / 2).toFixed(1);
      document.getElementById('lblMin').textContent = yMin.toFixed(1);

      const w = 450;
      const padLeft = 45;
      const padRight = 10;
      const padTop = 20;
      const padBottom = 25;
      const plotHeight = 180 - padTop - padBottom;
      const plotWidth = w - padLeft - padRight;

      const stepX = plotWidth / (hist.length - 1);

      let pts = "";
      for (let i = 0; i < hist.length; i++) {
        const x = padLeft + (i * stepX);
        const y = (180 - padBottom) - ((hist[i] - yMin) / range) * plotHeight;
        pts += x.toFixed(1) + "," + y.toFixed(1) + " ";
      }

      document.getElementById('linha').setAttribute('points', pts.trim());
    }

    function carregarHistorico() {
      fetch('/history').then(r => r.json()).then(dados => {
        renderizarGrafico(dados);
      });
    }

    function atualizarStatus() {
      fetch('/status').then(r => r.json()).then(d => {
        document.getElementById('temp').innerText = d.temperatura.toFixed(1);
        document.getElementById('umid').innerText = d.umidade.toFixed(1);
        document.getElementById('hora').innerText = d.hora;

        const st = document.getElementById('status');
        if (d.aquecedor) {
          st.innerText = "AQUECENDO (LIGADO)";
          st.className = "badge on";
        } else {
          st.innerText = "STANDBY (DESLIGADO)";
          st.className = "badge off";
        }

        if (!inicializado) {
          document.getElementById('t_min').value = d.t_min.toFixed(1);
          document.getElementById('t_max').value = d.t_max.toFixed(1);
          inicializado = true;
          carregarHistorico();
        }
      });
    }

    function salvarLimites() {
      const min = parseFloat(document.getElementById('t_min').value);
      const max = parseFloat(document.getElementById('t_max').value);

      if (min >= max) {
        alert("A temperatura mínima precisa ser menor que a máxima!");
        return;
      }

      fetch(`/config?min=${min}&max=${max}`)
        .then(r => r.text())
        .then(() => alert("Limites gravados na Flash!"));
    }

    setInterval(atualizarStatus, 2500);
    setInterval(carregarHistorico, 60000);
    window.onload = atualizarStatus;
  </script>
</body>
</html>
)rawliteral";

void handleRoot() {
  server.send_P(200, "text/html", index_html);
}

void handleStatus() {
  String json = "{";
  json += "\"temperatura\":" + String(tempAtual, 1) + ",";
  json += "\"umidade\":" + String(umidAtual, 1) + ",";
  json += "\"t_min\":" + String(tempMin, 1) + ",";
  json += "\"t_max\":" + String(tempMax, 1) + ",";
  json += "\"aquecedor\":" + String(aquecedorLigado ? "true" : "false") + ",";
  json += "\"hora\":\"" + String(ultimaAtualizacao) + "\"";
  json += "}";
  server.send(200, "application/json", json);
}

void handleHistory() {
  String json = "[";
  if (histCount > 0) {
    int start = (histCount == HIST_SIZE) ? histIndex : 0;
    for (int i = 0; i < histCount; i++) {
      int idx = (start + i) % HIST_SIZE;
      json += String(histTemp[idx], 1);
      if (i < histCount - 1) json += ",";
    }
  }
  json += "]";
  server.send(200, "application/json", json);
}

void handleConfig() {
  if (server.hasArg("min") && server.hasArg("max")) {
    float nMin = server.arg("min").toFloat();
    float nMax = server.arg("max").toFloat();

    if (nMin < nMax) {
      tempMin = nMin;
      tempMax = nMax;

      prefs.begin("termostato", false);
      prefs.putFloat("tempMin", tempMin);
      prefs.putFloat("tempMax", tempMax);
      prefs.end();

      processarTermostato();
      server.send(200, "text/plain", "OK");
      return;
    }
  }
  server.send(400, "text/plain", "Valores invalidos");
}

void setupOTA() {
  ArduinoOTA.setHostname("esp32-aquecedor");
  ArduinoOTA.begin();
}

void setup() {
  Serial.begin(115200);

  pinMode(RELAY_PIN, OUTPUT);
  digitalWrite(RELAY_PIN, RELAY_OFF);

  pinMode(LED_BUILTIN, OUTPUT);
  digitalWrite(LED_BUILTIN, LOW);

  // Recupera configurações salvas
  prefs.begin("termostato", false);
  tempMin = prefs.getFloat("tempMin", 22.0);
  tempMax = prefs.getFloat("tempMax", 26.0);
  prefs.end();

  dht.begin();

  // Conexão Wi-Fi com IP Fixo
  WiFi.config(local_IP, gateway, subnet, primaryDNS, secondaryDNS);
  WiFi.mode(WIFI_STA);
  WiFi.begin(ssid, password);

  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }

  Serial.println("\nWi-Fi Conectado!");

  // Inicialização e sincronização com servidor NTP
  configTime(gmtOffset_sec, daylightOffset_sec, ntpServer1, ntpServer2);
  Serial.println("Sincronizando relógio via NTP...");

  Serial.print("Painel HTTP: http://");
  Serial.println(WiFi.localIP());

  setupOTA();

  server.on("/", HTTP_GET, handleRoot);
  server.on("/status", HTTP_GET, handleStatus);
  server.on("/history", HTTP_GET, handleHistory);
  server.on("/config", HTTP_GET, handleConfig);

  server.begin();
}

void loop() {
  ArduinoOTA.handle();
  server.handleClient();

  unsigned long currentMillis = millis();

  // Heartbeat do LED
  if (currentMillis - prevLedMillis >= ledInterval) {
    prevLedMillis = currentMillis;
    ledState = !ledState;
    digitalWrite(LED_BUILTIN, ledState ? HIGH : LOW);
  }

  // 1. Loop rápido: lê sensor, atualiza hora da leitura e atua no relé (a cada 2.5s)
  if (currentMillis - prevLoopMillis >= sensorInterval) {
    prevLoopMillis = currentMillis;

    float t = dht.readTemperature();
    float h = dht.readHumidity();

    if (!isnan(t) && !isnan(h)) {
      tempAtual = t;
      umidAtual = h;

      atualizarTimestamp();

      somaTempMinuto += t;
      contAmostrasMinuto++;

      processarTermostato();
    }
  }

  // 2. Loop de fechamento do minuto: calcula a média e insere no buffer de 24h (a cada 60s)
  if (currentMillis - prevHistMillis >= histInterval) {
    prevHistMillis = currentMillis;

    if (contAmostrasMinuto > 0) {
      float mediaMinuto = somaTempMinuto / contAmostrasMinuto;
      registrarHistorico(mediaMinuto);

      somaTempMinuto = 0.0;
      contAmostrasMinuto = 0;
    }
  }
}
