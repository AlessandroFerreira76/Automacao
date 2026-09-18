#include <WiFi.h>
#include <WebServer.h>
#include <HTTPClient.h>
#include <Update.h>
#include <Preferences.h>
#include <ArduinoOTA.h>
#include <DHT.h>
#include <time.h>

// Credenciais Wi-Fi
const char* ssid     = "Your_ssid";
const char* password = "Your_password";

// Configuração de IP Fixo
IPAddress local_IP(172, 16, 0, 51);
IPAddress gateway(172, 16, 0, 1);
IPAddress subnet(255, 255, 255, 0);
IPAddress primaryDNS(8, 8, 8, 8);
IPAddress secondaryDNS(1, 1, 1, 1);

// Configuração OTA / Firmware
const String VERSAO_ATUAL = "1.0.1";
const char* firmwareUrl = "https://raw.githubusercontent.com/AlessandroFerreira76/Automacao/Aquecedor/Chocadeira3.ino.esp32.bin";

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
  alarmeLigado = ligar;
  digitalWrite(ALARM_RELAY_PIN, ligar ? RELAY_ON : RELAY_OFF);
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

void atualizarTimestamp() {
  struct tm timeinfo;
  if (getLocalTime(&timeinfo, 10)) {
    strftime(ultimaAtualizacao, sizeof(ultimaAtualizacao), "%d/%m %H:%M:%S", &timeinfo);
  }
}

// Interface Web limpa sem crases para evitar conflitos na IDE antiga do Arduino
const char index_html[] PROGMEM = 
"<!DOCTYPE html>"
"<html lang='pt-BR'>"
"<head>"
"<meta charset='UTF-8'>"
"<meta name='viewport' content='width=device-width, initial-scale=1.0'>"
"<title>Termostato ESP32 - 24 Horas & OTA</title>"
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
".svg-container { position: relative; width: 100%; }"
"svg { background: #181818; border-radius: 6px; border: 1px solid #333; width: 100%; height: 180px; cursor: crosshair; display: block; }"
".grid { stroke: #2a2a2a; stroke-width: 1; stroke-dasharray: 4; }"
".stats { display: flex; justify-content: space-around; font-size: 12px; color: #aaa; margin-top: 6px; }"
".timestamp { font-size: 12px; color: #777; margin-top: 6px; }"
".hours-grid { display: grid; grid-template-columns: repeat(6, 1fr); gap: 5px; margin-top: 10px; }"
".hour-btn { background: #2a2a2a; color: #aaa; border: 1px solid #444; padding: 6px 0; font-size: 11px; border-radius: 4px; cursor: pointer; transition: 0.2s; }"
".hour-btn:hover { background: #ff9800; color: #121212; border-color: #ff9800; }"
".btn-back { background: #333; color: #fff; margin-top: 8px; display: none; }"
".btn-back:hover { background: #444; }"
"#tooltip { position: absolute; background: rgba(0, 0, 0, 0.85); border: 1px solid #ff9800; color: #fff; padding: 4px 8px; font-size: 11px; border-radius: 4px; pointer-events: none; display: none; white-space: nowrap; z-index: 10; }"
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
"<div style='display: flex; justify-content: space-between; align-items: baseline; margin-bottom: 6px;'>"
"<h3 id='tituloGrafico' style='margin: 0; font-size: 16px;'>Histórico (24h)</h3>"
"<span style='font-size: 11px; color: #888;' id='amostras'>0 min</span>"
"</div>"
"<div class='svg-container' id='containerSvg'>"
"<div id='tooltip'></div>"
"<svg id='grafico' viewBox='0 0 450 180' onmousemove='moverMouse(event)' onmouseleave='sairMouse()'>"
"<line x1='45' y1='20' x2='440' y2='20' class='grid' />"
"<line x1='45' y1='90' x2='440' y2='90' class='grid' />"
"<line x1='45' y1='160' x2='440' y2='160' class='grid' />"
"<polyline id='linha' fill='none' stroke='#00e676' stroke-width='2' points='' />"
"<line id='cursorLinha' x1='0' y1='20' x2='0' y2='155' stroke='#ff9800' stroke-width='1' stroke-dasharray='2' style='display:none;' />"
"<circle id='cursorCirculo' cx='0' cy='0' r='3.5' fill='#ff9800' style='display:none;' />"
"<text id='lblMax' x='40' y='24' fill='#888' font-size='11' text-anchor='end'>--</text>"
"<text id='lblMed' x='40' y='94' fill='#666' font-size='11' text-anchor='end'>--</text>"
"<text id='lblMin' x='40' y='164' fill='#888' font-size='11' text-anchor='end'>--</text>"
"<text x='50' y='176' fill='#666' font-size='10' id='txtEsq'>-24h</text>"
"<text x='240' y='176' fill='#666' font-size='10' id='txtCentro'>-12h</text>"
"<text x='415' y='176' fill='#666' font-size='10' id='txtDir'>Agora</text>"
"</svg>"
"</div>"
"<div class='hours-grid' id='botoesHoras'></div>"
"<button class='btn btn-back' id='btnVoltar' onclick='mostrarVisaoCompleta()'>Mostrar 24h (Gráfico Completo)</button>"
"<div class='stats' style='margin-top: 10px;'>"
"<span>Mín: <strong id='stMin'>--</strong>°C</span>"
"<span>Méd: <strong id='stMed'>--</strong>°C</span>"
"<span>Máx: <strong id='stMax'>--</strong>°C</span>"
"</div>"
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
"let dadosGlobais = [];"
"let horaSelecionada = null;"
"function criarBotoesHoras() {"
"  const container = document.getElementById('botoesHoras');"
"  container.innerHTML = '';"
"  for (let i = 0; i < 24; i++) {"
"    let horaStr = (i < 10 ? '0' : '') + i + 'h';"
"    let btn = document.createElement('button');"
"    btn.className = 'hour-btn';"
"    btn.innerText = horaStr;"
"    btn.onclick = () => filtrarPorHora(i);"
"    container.appendChild(btn);"
"  }"
"}"
"function filtrarPorHora(h) {"
"  horaSelecionada = h;"
"  document.getElementById('btnVoltar').style.display = 'block';"
"  let horaStr = (h < 10 ? '0' : '') + h + ':00';"
"  document.getElementById('tituloGrafico').innerText = 'Detalhe da Hora: ' + horaStr + ' às ' + h + ':59';"
"  renderizarGrafico(dadosGlobais);"
"}"
"function mostrarVisaoCompleta() {"
"  horaSelecionada = null;"
"  document.getElementById('btnVoltar').style.display = 'none';"
"  document.getElementById('tituloGrafico').innerText = 'Histórico (Médias por Minuto - 24h)';"
"  renderizarGrafico(dadosGlobais);"
"}"
"function renderizarGrafico(dados) {"
"  if (!dados || dados.length === 0) return;"
"  dadosGlobais = dados;"
"  let dadosFiltrados = dados;"
"  if (horaSelecionada !== null) {"
"    dadosFiltrados = dados.filter(d => {"
"      if (!d.h || d.h === '--:--') return false;"
"      let hItem = parseInt(d.h.split(':')[0]);"
"      return hItem === horaSelecionada;"
"    });"
"  }"
"  if (dadosFiltrados.length === 0) {"
"    document.getElementById('amostras').innerText = 'Nenhum dado nesta hora';"
"    document.getElementById('linha').setAttribute('points', '');"
"    return;"
"  }"
"  let hist = dadosFiltrados.map(d => d.t);"
"  document.getElementById('amostras').innerText = dadosFiltrados.length + ' min';"
"  let min = Math.min(...hist);"
"  let max = Math.max(...hist);"
"  let soma = hist.reduce((a, b) => a + b, 0);"
"  let med = soma / hist.length;"
"  document.getElementById('stMin').innerText = min.toFixed(1);"
"  document.getElementById('stMed').innerText = med.toFixed(1);"
"  document.getElementById('stMax').innerText = max.toFixed(1);"
"  const yMin = min - 0.5;"
"  const yMax = max + 0.5;"
"  const range = (yMax - yMin) === 0 ? 1 : (yMax - yMin);"
"  document.getElementById('lblMax').textContent = yMax.toFixed(1);"
"  document.getElementById('lblMed').textContent = ((yMax + yMin) / 2).toFixed(1);"
"  document.getElementById('lblMin').textContent = yMin.toFixed(1);"
"  if (horaSelecionada !== null) {"
"    document.getElementById('txtEsq').textContent = horaSelecionada + ':00';"
"    document.getElementById('txtCentro').textContent = horaSelecionada + ':30';"
"    document.getElementById('txtDir').textContent = horaSelecionada + ':59';"
"  } else {"
"    document.getElementById('txtEsq').textContent = '-24h';"
"    document.getElementById('txtCentro').textContent = '-12h';"
"    document.getElementById('txtDir').textContent = 'Agora';"
"  }"
"  const w = 450;"
"  const padLeft = 45;"
"  const padRight = 10;"
"  const padTop = 20;"
"  const padBottom = 25;"
"  const plotHeight = 180 - padTop - padBottom;"
"  const plotWidth = w - padLeft - padRight;"
"  const stepX = dadosFiltrados.length > 1 ? plotWidth / (dadosFiltrados.length - 1) : 0;"
"  let pts = '';"
"  for (let i = 0; i < dadosFiltrados.length; i++) {"
"    const x = padLeft + (i * stepX);"
"    const y = (180 - padBottom) - ((dadosFiltrados[i].t - yMin) / range) * plotHeight;"
"    pts += x.toFixed(1) + ',' + y.toFixed(1) + ' ';"
"  }"
"  document.getElementById('linha').setAttribute('points', pts.trim());"
"}"
"function moverMouse(evt) {"
"  if (!dadosGlobais || dadosGlobais.length < 2) return;"
"  const svg = document.getElementById('grafico');"
"  const pt = svg.createSVGPoint();"
"  pt.x = evt.clientX;"
"  pt.y = evt.clientY;"
"  const svgPoint = pt.matrixTransform(svg.getScreenCTM().inverse());"
"  const padLeft = 45;"
"  const padRight = 10;"
"  const padTop = 20;"
"  const padBottom = 25;"
"  const plotWidth = 450 - padLeft - padRight;"
"  if (svgPoint.x < padLeft || svgPoint.x > (450 - padRight)) {"
"    sairMouse();"
"    return;"
"  }"
"  let dadosFiltrados = dadosGlobais;"
"  if (horaSelecionada !== null) {"
"    dadosFiltrados = dadosGlobais.filter(d => {"
"      if (!d.h || d.h === '--:--') return false;"
"      return parseInt(d.h.split(':')[0]) === horaSelecionada;"
"    });"
"  }"
"  if (dadosFiltrados.length < 2) return;"
"  const stepX = plotWidth / (dadosFiltrados.length - 1);"
"  let index = Math.round((svgPoint.x - padLeft) / stepX);"
"  if (index < 0) index = 0;"
"  if (index >= dadosFiltrados.length) index = dadosFiltrados.length - 1;"
"  const item = dadosFiltrados[index];"
"  let hist = dadosFiltrados.map(d => d.t);"
"  let min = Math.min(...hist);"
"  let max = Math.max(...hist);"
"  const yMin = min - 0.5;"
"  const yMax = max + 0.5;"
"  const range = (yMax - yMin) === 0 ? 1 : (yMax - yMin);"
"  const plotHeight = 180 - padTop - padBottom;"
"  const xCoord = padLeft + (index * stepX);"
"  const yCoord = (180 - padBottom) - ((item.t - yMin) / range) * plotHeight;"
"  document.getElementById('cursorLinha').setAttribute('x1', xCoord);"
"  document.getElementById('cursorLinha').setAttribute('x2', xCoord);"
"  document.getElementById('cursorLinha').style.display = 'block';"
"  document.getElementById('cursorCirculo').setAttribute('cx', xCoord);"
"  document.getElementById('cursorCirculo').setAttribute('cy', yCoord);"
"  document.getElementById('cursorCirculo').style.display = 'block';"
"  const tooltip = document.getElementById('tooltip');"
"  tooltip.innerHTML = '<b>Hora:</b> ' + item.h + '<br><b>Temp:</b> ' + item.t.toFixed(1) + ' °C';"
"  tooltip.style.display = 'block';"
"  const rectSvg = svg.getBoundingClientRect();"
"  const scaleX = rectSvg.width / 450;"
"  const scaleY = rectSvg.height / 180;"
"  const screenX = (xCoord * scaleX) + 10;"
"  const screenY = (yCoord * scaleY) - 35;"
"  tooltip.style.left = screenX + 'px';"
"  tooltip.style.top = screenY + 'px';"
"}"
"function sairMouse() {"
"  document.getElementById('cursorLinha').style.display = 'none';"
"  document.getElementById('cursorCirculo').style.display = 'none';"
"  document.getElementById('tooltip').style.display = 'none';"
"}"
"function carregarHistorico() {"
"  fetch('/history').then(r => r.json()).then(dados => renderizarGrafico(dados));"
"}"
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
"      carregarHistorico();"
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
"  criarBotoesHoras();"
"  atualizarStatus();"
"};"
"setInterval(atualizarStatus, 2500);"
"setInterval(carregarHistorico, 60000);"
"</script>"
"</body>"
"</html>";

void handleRoot() {
  server.send_P(200, "text/html", index_html);
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
      json += "{\"t\":" + String(histTemp[idx], 1) + ",\"h\":\"" + String(histHora[idx]) + "\"}";
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
