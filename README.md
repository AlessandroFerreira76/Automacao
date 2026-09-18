# 🌡️ Termostato Inteligente ESP32 (Chocadeira / Aquecedor)

Firmware avançado desenvolvido em C++ (Arduino IDE) para o **ESP32**, projetado para o controle de temperatura e umidade com alta confiabilidade. O sistema conta com um painel web integrado, controle de relés redundantes para segurança, histórico gráfico de 24 horas e atualização de firmware via OTA (Over-The-Air) direto pelo GitHub.

---

## 🚀 Principais Funcionalidades

* **Controle Termostático Preciso:** Monitoramento contínuo de temperatura e umidade através do sensor **DHT11**.
* **Sistema de Segurança e Emergência:** 
  * Se a temperatura cair abaixo do limite mínimo por um tempo configurável (ex: falha na lâmpada principal), o sistema aciona automaticamente uma **lâmpada/aquecedor de emergência** e um **alarme sonoro**.
* **Interface Web Embutida (Dashboard):** Acesso local via navegador na porta `8080` com design moderno (Dark Mode).
* **Gráfico de Histórico (24h):** Armazena as médias por minuto das últimas 24 horas, permitindo visualizar o comportamento térmico com filtros por hora e interatividade por cursor (Tooltip).
* **Persistência de Dados (NVS):** Os limites de temperatura mínimo, máximo e tempo de alarme são salvos na memória Flash do ESP32, não se perdendo ao reiniciar.
* **Sincronização NTP:** Horário oficial de Brasília (UTC-3) sincronizado automaticamente via servidores NTP.
* **Atualização OTA via GitHub:** Capacidade de buscar e atualizar o firmware diretamente de um repositório remoto no GitHub.

---

## 🛠️ Hardware Utilizado

* **Microcontrolador:** ESP32 NodeMCU
* **Sensor:** DHT11 (Temperatura e Umidade)
* **Atuadores:** 
  * Relé 1: Aquecedor Principal (`GPIO 18`)
  * Relé 2: Aquecedor de Emergência (`GPIO 21`)
  * Relé 3: Alarme Sonoro (`GPIO 19`)
* **Conectividade:** Wi-Fi com IP Fixo configurável.

---

## 💻 Painel Web (Dashboard)

O ESP32 hospeda um servidor web interno que exibe:
1. **Status Atual:** Temperatura, umidade, estado do aquecedor e avisos de emergência em tempo real.
2. **Gráfico Interativo:** Visualização de 24h com estatísticas de Mínima, Média e Máxima.
3. **Configurações Rápidas:** Alteração dos limites de temperatura e tempo de acionamento do alarme direto pela tela, salvando na memória interna.
4. **Atualização OTA:** Botão para disparar o update do sistema remotamente.

---

## ⚙️ Configuração e Instalação

1. **Dependências (Bibliotecas da Arduino IDE):**
   Certifique-se de ter as seguintes bibliotecas instaladas:
   * `DHT sensor library` (Adafruit)
   * `WebServer` (Nativa do ESP32)
   * `Preferences` (Nativa do ESP32)
   * `HTTPClient` e `Update`

2. **Parâmetros de Rede:**
   No início do código, ajuste as credenciais do seu roteador e o IP Fixo desejado:
   ```cpp
   const char* ssid     = "SEU_SSID";
   const char* password = "SUA_SENHA";
