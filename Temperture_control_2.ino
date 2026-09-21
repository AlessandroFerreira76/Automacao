#include <WiFi.h>
#include <WebServer.h>
#include <HTTPClient.h>
#include <Update.h>
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

// --- DADOS DO CALLMEBOT ---
String phoneNumber = "554198291490";
String apiKey = "2935011";
bool alarmeMensagemEnviada = false;

// Configuração OTA / Firmware
const String VERSAO_ATUAL = "1.0.0";
const char* firmwareUrl = "https://raw.githubusercontent.com/AlessandroFerreira76/Automacao/Aquecedor/Temperture_control_2.bin";

// Configuração NTP (Horário de Brasília: UTC-3 = -10800s)
const char* ntpServer1 = "a.st1.ntp.br";
const char* ntpServer2 = "pool.ntp.org";
const long  gmtOffset_sec = -10800;
const int   daylightOffset_sec = 0;

// Sensor DHT11
#define DHTPIN 4
#define DHTTYPE DHT11
DHT dht(DHTPIN, DHTTYPE);

// Pinos dos Relés
#define RELAY_PIN         18   
#define EMERGENCY_RELAY   21   
#define ALARM_RELAY_PIN   19   

#define RELAY_ON          LOW
#define RELAY_OFF         HIGH

#ifndef LED_BUILTIN
  #define LED_BUILTIN 2
#endif

Preferences prefs;

float tempAtual = 0.0;
float umidAtual = 0.0;
float tempMin   = 22.0;
float tempMax   = 26.0;
int tempoAlarmeMinutos = 5; 
bool aquecedorLigado = false;
bool emergencyActive = false; 
bool alarmeLigado = false;
char ultimaAtualizacao[20] = "--:--:--";

unsigned long tempoForaDaFaixa = 0;
bool monitorandoEstabilizacao = false;

float somaTempMinuto = 0.0;
int contAmostrasMinuto = 0;

const int HIST_SIZE = 1440;
float histTemp[HIST_SIZE];
char histHora[HIST_SIZE][6];
int histIndex = 0;
int histCount = 0;

WebServer server(8080);

unsigned long prevLoopMillis = 0;
const unsigned long sensorInterval = 2500;  

unsigned long prevHistMillis = 0;
const unsigned long histInterval = 60000;   

unsigned long prevLedMillis = 0;
const unsigned long ledInterval = 500;
bool ledState = false;

void executarAtualizacaoOTA();
void enviarWhatsApp(String mensagem);

void setAquecedor(bool ligar) {
  aquecedorLigado = ligar;
  if (!emergencyActive) {
    digitalWrite(RELAY_PIN, ligar ? RELAY_ON : RELAY_OFF);
  } else {
    digitalWrite(RELAY_PIN, RELAY_OFF);
  }
}

void setEmergencyAquecedor(bool ligar) {
  emergencyActive = ligar;
  digitalWrite(EMERGENCY_RELAY, ligar ? RELAY_ON : RELAY_OFF);
  if (ligar) {
    digitalWrite(RELAY_PIN, RELAY_OFF);
  }
}

void setAlarme(bool ligar) {
  if (alarmeLigado != ligar) {
    alarmeLigado = ligar;
    digitalWrite(ALARM_RELAY_PIN, ligar ? RELAY_ON : RELAY_OFF);

    if (ligar) {
      if (!alarmeMensagemEnviada) {
        String msg = "🚨 ALERTA: O alarme do termostato foi acionado! Temperatura atual: " + String(tempAtual, 1) + "°C";
        enviarWhatsApp(msg);
        alarmeMensagemEnviada = true;
      }
    } else {
      // Reseta a trava quando o alarme for desligado/normalizado
      alarmeMensagemEnviada = false;
    }
  }
}

void enviarWhatsApp(String mensagem) {
  if (WiFi.status() == WL_CONNECTED) {
    HTTPClient http;
    mensagem.replace(" ", "+");
    
    String url = "https://api.callmebot.com/whatsapp.php?phone=" + phoneNumber + "&text=" + mensagem + "&apikey=" + apiKey;
    
    http.begin(url);
    int httpCode = http.GET();
    
    if (httpCode > 0) {
      Serial.println("Mensagem de WhatsApp enviada com sucesso!");
    } else {
      Serial.println("Erro ao enviar WhatsApp: " + http.errorToString(httpCode));
    }
    http.end();
  } else {
    Serial.println("WiFi desconectado. Não foi possível enviar o WhatsApp.");
  }
}

void processarTermostato() {
  unsigned long currentMillis = millis();
  unsigned long tempoLimiteMs = (unsigned long)tempoAlarmeMinutos * 60000UL;

  bool abaixoDoMinimo = (tempAtual < tempMin);

  if (abaixoDoMinimo) {
    if (!monitorandoEstabilizacao) {
      monitorandoEstabilizacao = true;
      tempoForaDaFaixa = currentMillis;
    } else {
      if ((currentMillis - tempoForaDaFaixa >= tempoLimiteMs) && !emergencyActive) {
        setEmergencyAquecedor(true);
        setAlarme(true);
      }
    }
  } else {
    if (tempAtual >= tempMin && monitorandoEstabilizacao && !emergencyActive) {
      monitorandoEstabilizacao = false;
    }
  }

  if (!emergencyActive) {
    if (tempAtual <= tempMin && !aquecedorLigado) {
      setAquecedor(true);
    } else if (tempAtual >= tempMax && aquecedorLigado) {
      setAquecedor(false);
      if (monitorandoEstabilizacao) {
        monitorandoEstabilizacao = false;
      }
    }
  }
}

void registrarHistorico(float tMedia) {
  // Registra apenas se a temperatura estiver fora dos limites programados
  if (tMedia < tempMin || tMedia > tempMax) {
    histTemp[histIndex] = tMedia;
    
    struct tm timeinfo;
    if (getLocalTime(&timeinfo, 5)) {
      strftime(histHora[histIndex], sizeof(histHora[histIndex]), "%H:%M", &timeinfo);
    } else {
      strcpy(histHora[histIndex], "--:--");
    }

    histIndex = (histIndex + 1) % HIST_SIZE;
    if (histCount < HIST_SIZE) histCount++;
  }
}

void atualizarTimestamp() {
  struct tm timeinfo;
  if (getLocalTime(&timeinfo, 10)) {
    strftime(ultimaAtualizacao, sizeof(ultimaAtualizacao), "%d/%m %H:%M:%S", &timeinfo);
  }
}

// Interface Web Principal
const char index_html[] PROGMEM = 
"<!DOCTYPE html>"
"<html lang='pt-BR'>"
"<head>"
"<meta charset='UTF-8'>"
"<meta name='viewport' content='width=device-width, initial-scale=1.0'>"
"<title>Termostato ESP32 - Alertas & OTA</title>"
"<style>"
"body { font-family: Arial, sans-serif; background: #121212; color: #eee; margin: 0; padding: 15px; text-align: center; }"
"h1 { color: #ff9800; font-size: 22px; margin-bottom: 12px; }"
".card { background: #1e1e1e; border-radius: 8px; padding: 15px; margin: 12px auto; max-width: 480px; box-shadow: 0 4px 10px rgba(0,0,0,0.5); }"
".val { font-size: 34px; font-weight: bold; color: #00e676; margin: 5px 0; }"
".badge { display: inline-block; padding: 6px 16px; border-radius: 16px; font-weight: bold; font-size: 14px; margin-top: 5px; }"
".on { background: #d32f2f; color: #fff; }"
".off { background: #424242; color: #bbb; }"
".emergency-banner { background: #b71c1c; color: #fff; padding: 12px; border-radius: 6px; font-weight: bold; margin-bottom: 10px; display: none; }"
".field { margin: 10px 0; display: flex; justify-content: space-between; align-items: center; }"
"input[type=number] { width: 85px; padding: 6px; font-size: 16px; text-align: center; border-radius: 4px; border: 1px solid #444; background: #2a2a2a; color: #fff; }"
".btn { width: 100%; padding: 10px; font-size: 15px; font-weight: bold; border: none; border-radius: 5px; cursor: pointer; background: #ff9800; color: #121212; margin-top: 10px; }"
".btn-reset { background: #d32f2f; color: #fff; }"
".btn-reset:hover { background: #b71c1c; }"
".btn-ota { background: #2196F3; color: #fff; }"
".btn-ota:hover { background: #1976D2; }"
".btn-popup { background: #00bcd4; color: #121212; }"
".btn-popup:hover { background: #00acc1; }"
".timestamp { font-size: 12px; color: #777; margin-top: 6px; }"
"</style>"
"</head>"
"<body>"

"<div class='card'>"
"<div id='emergenciaBanner' class='emergency-banner'>🚨 EMERGÊNCIA: Lâmpada Principal Falhou! Lâmpada de Emergência Ativa.</div>"
"<div style='color: #aaa;'>Temperatura Atual</div>"
"<div class='val'><span id='temp'>--</span> °C</div>"
"<div style='color: #888; font-size: 13px;'>Umidade: <span id='umid'>--</span> %</div>"
"<div><span id='status' class='badge off'>DESLIGADO</span></div>"
"<div style='margin-top: 8px;'><span id='alarmeStatus' class='badge off' style='font-size: 12px;'>ALARME: OK</span></div>"
"<div style='margin-top: 15px;'><button class='btn btn-reset' onclick='resetarSistema()'>Resetar / Normalizar Sistema</button></div>"
"<div class='timestamp'>Última leitura: <span id='hora' style='color: #bbb;'>--:--:--</span></div>"
"</div>"

"<div class='card'>"
"<h3 style='margin: 5px 0 10px 0; font-size: 16px;'>Registros Anômalos</h3>"
"<p style='font-size: 13px; color: #aaa;'>Visualize apenas os momentos em que a temperatura saiu dos limites programados.</p>"
"<button class='btn btn-popup' onclick='window.open(\"/registros\", \"_blank\")'>Ver Registros Fora da Faixa</button>"
"</div>"

"<div class='card'>"
"<h3 style='margin: 5px 0 10px 0; font-size: 16px;'>Configuração NVS / Flash</h3>"
"<div class='field'><span>Mínima (Ligar):</span><input type='number' id='t_min' step='0.5'></div>"
"<div class='field'><span>Máxima (Desligar):</span><input type='number' id='t_max' step='0.5'></div>"
"<div class='field'><span>Tempo Alarme (min):</span><input type='number' id='t_alarme' step='1' min='1'></div>"
"<button class='btn' onclick='salvarLimites()'>Salvar na Memória</button>"
"</div>"

"<div class='card'>"
"<h3 style='margin: 5px 0 10px 0; font-size: 16px;'>Atualização de Firmware (OTA)</h3>"
"<p style='font-size: 14px; color: #aaa;'>Versão Atual: <b style='color: #fff;' id='versaoAtualTxt'>--</b></p>"
"<form action='/update' method='POST' onsubmit='return confirm(\"Deseja atualizar o firmware agora via GitHub?\");'>"
"<button type='submit' class='btn btn-ota'>Atualizar Agora (GitHub)</button>"
"</form>"
"</div>"

"<script>"
"let inicializado = false;"
"function atualizarStatus() {"
"  fetch('/status').then(r => r.json()).then(d => {"
"    document.getElementById('temp').innerText = d.temperatura.toFixed(1);"
"    document.getElementById('umid').innerText = d.umidade.toFixed(1);"
"    document.getElementById('hora').innerText = d.hora;"
"    document.getElementById('versaoAtualTxt').innerText = d.versao;"
"    const st = document.getElementById('status');"
"    if (d.emergencia) {"
"      st.innerText = 'LÂMPADA DE EMERGÊNCIA ATIVA';"
"      st.className = 'badge on';"
"      document.getElementById('emergenciaBanner').style.display = 'block';"
"    } else if (d.aquecedor) {"
"      st.innerText = 'AQUECENDO (LIGADO)';"
"      st.className = 'badge on';"
"      document.getElementById('emergenciaBanner').style.display = 'none';"
"    } else {"
"      st.innerText = 'STANDBY (DESLIGADO)';"
"      st.className = 'badge off';"
"      document.getElementById('emergenciaBanner').style.display = 'none';"
"    }"
"    const al = document.getElementById('alarmeStatus');"
"    if (d.alarme) {"
"      al.innerText = 'ALARME SONORO ATIVO!';"
"      al.className = 'badge on';"
"    } else {"
"      al.innerText = 'ALARME: OK';"
"      al.className = 'badge off';"
"    }"
"    if (!inicializado) {"
"      document.getElementById('t_min').value = d.t_min.toFixed(1);"
"      document.getElementById('t_max').value = d.t_max.toFixed(1);"
"      document.getElementById('t_alarme').value = d.t_alarme;"
"      inicializado = true;"
"    }"
"  });"
"}"
"function salvarLimites() {"
"  const min = parseFloat(document.getElementById('t_min').value);"
"  const max = parseFloat(document.getElementById('t_max').value);"
"  const alarmeMin = parseInt(document.getElementById('t_alarme').value);"
"  if (min >= max) {"
"    alert('A temperatura mínima precisa ser menor que a máxima!');"
"    return;"
"  }"
"  if (isNaN(alarmeMin) || alarmeMin < 1) {"
"    alert('O tempo do alarme deve ser de pelo menos 1 minuto!');"
"    return;"
"  }"
"  fetch('/config?min=' + min + '&max=' + max + '&alarme=' + alarmeMin)"
"    .then(r => r.text())"
"    .then(() => alert('Limites gravados na Flash!'));"
"}"
"function resetarSistema() {"
"  if (confirm('Deseja realmente normalizar o sistema e desligar o alarme/emergência?')) {"
"    fetch('/reset').then(r => r.text()).then(() => {"
"      alert('Sistema normalizado com sucesso!');"
"      atualizarStatus();"
"    });"
"  }"
"}"
"window.onload = () => {"
"  atualizarStatus();"
"};"
"setInterval(atualizarStatus, 2500);"
"</script>"
"</body>"
"</html>";

// Página HTML separada para exibir os registros fora da faixa
const char registros_html[] PROGMEM = 
"<!DOCTYPE html>"
"<html lang='pt-BR'>"
"<head>"
"<meta charset='UTF-8'>"
"<meta name='viewport' content='width=device-width, initial-scale=1.0'>"
"<title>Registros de Temperatura Fora da Faixa</title>"
"<style>"
"body { font-family: Arial, sans-serif; background: #121212; color: #eee; margin: 0; padding: 20px; text-align: center; }"
"h2 { color: #ff9800; }"
"table { width: 100%; max-width: 500px; margin: 20px auto; border-collapse: collapse; background: #1e1e1e; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 10px rgba(0,0,0,0.5); }"
"th, td { padding: 12px; border-bottom: 1px solid #333; text-align: center; }"
"th { background: #2a2a2a; color: #ff9800; }"
".abaixo { color: #2196F3; font-weight: bold; }"
".acima { color: #d32f2f; font-weight: bold; }"
".btn-voltar { background: #333; color: #fff; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; font-size: 14px; margin-top: 15px; }"
".btn-voltar:hover { background: #444; }"
"</style>"
"</head>"
"<body>"
"<h2>Registros Fora dos Limites Programados</h2>"
"<p>Apenas leituras abaixo do mínimo ou acima do máximo.</p>"
"<table>"
"<thead><tr><th>Horário</th><th>Temperatura</th><th>Status</th></tr></thead>"
"<tbody id='tabelaRegistros'><tr><td colspan='3'>Carregando...</td></tr></tbody>"
"</table>"
"<button class='btn-voltar' onclick='window.close()'>Fechar Janela</button>"
"<script>"
"function carregarRegistros() {"
"  fetch('/history').then(r => r.json()).then(dados => {"
"    const tbody = document.getElementById('tabelaRegistros');"
"    tbody.innerHTML = '';"
"    if (!dados || dados.length === 0) {"
"      tbody.innerHTML = '<tr><td colspan=\"3\">Nenhum registro fora da faixa até o momento.</td></tr>';"
"      return;"
"    }"
"    dados.forEach(item => {"
"      let tr = document.createElement('tr');"
"      let classeStatus = item.t < item.minRef ? 'abaixo' : 'acima';"
"      let textoStatus = item.t < item.minRef ? 'Abaixo do Mínimo' : 'Acima do Máximo';"
"      tr.innerHTML = '<td>' + item.h + '</td><td>' + item.t.toFixed(1) + ' °C</td><td class=\"' + classeStatus + '\">' + textoStatus + '</td>';"
"      tbody.appendChild(tr);"
"    });"
"  });"
"}"
"window.onload = carregarRegistros;"
"</script>"
"</body>"
"</html>";

void handleRoot() {
  server.send_P(200, "text/html", index_html);
}

void handleRegistrosPage() {
  server.send_P(200, "text/html", registros_html);
}

void handleStatus() {
  String json = "{";
  json += "\"temperatura\":" + String(tempAtual, 1) + ",";
  json += "\"umidade\":" + String(umidAtual, 1) + ",";
  json += "\"t_min\":" + String(tempMin, 1) + ",";
  json += "\"t_max\":" + String(tempMax, 1) + ",";
  json += "\"t_alarme\":" + String(tempoAlarmeMinutos) + ",";
  json += "\"aquecedor\":" + String(aquecedorLigado ? "true" : "false") + ",";
  json += "\"emergencia\":" + String(emergencyActive ? "true" : "false") + ",";
  json += "\"alarme\":" + String(alarmeLigado ? "true" : "false") + ",";
  json += "\"versao\":\"" + VERSAO_ATUAL + "\",";
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
      json += "{\"t\":" + String(histTemp[idx], 1) + ",\"h\":\"" + String(histHora[idx]) + "\",\"minRef\":" + String(tempMin, 1) + "}";
      if (i < histCount - 1) json += ",";
    }
  }
  json += "]";
  server.send(200, "application/json", json);
}

void handleConfig() {
  if (server.hasArg("min") && server.hasArg("max") && server.hasArg("alarme")) {
    float nMin = server.arg("min").toFloat();
    float nMax = server.arg("max").toFloat();
    int nAlarme = server.arg("alarme").toInt();

    if (nMin < nMax && nAlarme > 0) {
      tempMin = nMin;
      tempMax = nMax;
      tempoAlarmeMinutos = nAlarme;

      prefs.begin("termostato", false);
      prefs.putFloat("tempMin", tempMin);
      prefs.putFloat("tempMax", tempMax);
      prefs.putInt("tAlarme", tempoAlarmeMinutos);
      prefs.end();

      processarTermostato();
      server.send(200, "text/plain", "OK");
      return;
    }
  }
  server.send(400, "text/plain", "Valores invalidos");
}

void handleReset() {
  emergencyActive = false;
  setEmergencyAquecedor(false);
  setAlarme(false);
  monitorandoEstabilizacao = false;
  server.send(200, "text/plain", "OK");
}

void handleUpdate() {
  server.send(200, "text/html", "<h3 style='font-family:Arial; text-align:center; margin-top:50px;'>Atualizando... O ESP32 vai reiniciar em instantes se o download der certo. Acompanhe o Monitor Serial!</h3>");
  delay(1000);
  executarAtualizacaoOTA();
}

void executarAtualizacaoOTA() {
  Serial.println("Verificando atualizações no GitHub...");

  HTTPClient http;
  http.begin(firmwareUrl);
  int httpCode = http.GET();

  if (httpCode > 0) {
    if (httpCode == HTTP_CODE_OK) {
      int contentLength = http.getSize();
      Serial.printf("Tamanho do firmware na nuvem: %d bytes\n", contentLength);

      if (contentLength <= 0) {
        Serial.println("Erro: Tamanho do arquivo inválido.");
        http.end();
        return;
      }

      bool canBegin = Update.begin(contentLength);

      if (canBegin) {
        Serial.println("Iniciando atualização OTA...");
        WiFiClient *client = http.getStreamPtr();
        
        size_t written = Update.writeStream(*client);

        if (written == contentLength) {
          Serial.println("Firmware baixado e escrito com sucesso.");
        } else {
          Serial.println("Atenção: Bytes escritos divergem do total: " + String(written) + "/" + String(contentLength));
        }

        if (Update.end()) {
          Serial.println("Atualização concluída com sucesso!");
          if (Update.isFinished()) {
            Serial.println("Reiniciando o ESP32...");
            ESP.restart();
          } else {
            Serial.println("Erro: Atualização não finalizada.");
          }
        } else {
          Serial.println("Erro no Update.end(): " + String(Update.getError()));
        }
      } else {
        Serial.println("Erro: Sem espaço suficiente na flash.");
      }
    } else {
      Serial.printf("Servidor respondeu com HTTP: %d\n", httpCode);
    }
  } else {
    Serial.println("Falha na conexão HTTP: " + http.errorToString(httpCode));
  }
  http.end();
}

void setupOTA() {
  ArduinoOTA.setHostname("esp32-aquecedor");
  ArduinoOTA.begin();
}

void setup() {
  Serial.begin(115200);

  pinMode(RELAY_PIN, OUTPUT);
  digitalWrite(RELAY_PIN, RELAY_OFF);

  pinMode(EMERGENCY_RELAY, OUTPUT);
  digitalWrite(EMERGENCY_RELAY, RELAY_OFF);

  pinMode(ALARM_RELAY_PIN, OUTPUT);
  digitalWrite(ALARM_RELAY_PIN, RELAY_OFF);

  pinMode(LED_BUILTIN, OUTPUT);
  digitalWrite(LED_BUILTIN, LOW);

  prefs.begin("termostato", false);
  tempMin = prefs.getFloat("tempMin", 22.0);
  tempMax = prefs.getFloat("tempMax", 26.0);
  tempoAlarmeMinutos = prefs.getInt("tAlarme", 5);
  prefs.end();

  dht.begin();

  WiFi.config(local_IP, gateway, subnet, primaryDNS, secondaryDNS);
  WiFi.mode(WIFI_STA);
  WiFi.begin(ssid, password);

  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }

  Serial.println("\nWi-Fi Conectado!");

  configTime(gmtOffset_sec, daylightOffset_sec, ntpServer1, ntpServer2);
  Serial.println("Sincronizando relógio via NTP...");

  Serial.print("Painel HTTP: http://");
  Serial.println(WiFi.localIP());

  setupOTA();

  server.on("/", HTTP_GET, handleRoot);
  server.on("/registros", HTTP_GET, handleRegistrosPage);
  server.on("/status", HTTP_GET, handleStatus);
  server.on("/history", HTTP_GET, handleHistory);
  server.on("/config", HTTP_GET, handleConfig);
  server.on("/reset", HTTP_GET, handleReset);
  server.on("/update", HTTP_POST, handleUpdate);

  server.begin();
  Serial.println("Servidor Web iniciado na porta 8080!");
}

void loop() {
  ArduinoOTA.handle();
  server.handleClient();

  unsigned long currentMillis = millis();

  if (currentMillis - prevLedMillis >= ledInterval) {
    prevLedMillis = currentMillis;
    ledState = !ledState;
    digitalWrite(LED_BUILTIN, ledState ? HIGH : LOW);
  }

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
