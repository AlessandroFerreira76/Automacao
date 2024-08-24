
#include <WiFi.h>      //ESP32 Core WiFi Library   
#include <HTTPClient.h>

//needed for library
#include <DNSServer.h> //Local DNS Server used for redirecting all requests to the configuration portal ( https://github.com/zhouhan0126/DNSServer---esp32 )
#include <WebServer.h> //Local WebServer used to serve the configuration portal ( https://github.com/zhouhan0126/WebServer-esp32 )
#include <WiFiManager.h>   // WiFi Configuration Magic ( https://github.com/zhouhan0126/WIFIMANAGER-ESP32 ) >> https://github.com/tzapu/WiFiManager (ORIGINAL)

// Include required libraries
#include "Arduino.h"
#include "Audio.h"
 
// Define I2S connections
#define I2S_DOUT  22
#define I2S_BCLK  26
#define I2S_LRC   25
 
// Define volume control pot connection
// ADC3 is GPIO 39
const int volControl = 35;
 
// Integer for volume level
int volume = 10;
 
// Create audio object
Audio audio;

// Endereço do Streaming Web
char* streaming = "http://listen.livestreamingservice.com/181-themix_128k.mp3";
char* nova;

//flag para indicar se foi salva uma nova configuração de rede
bool shouldSaveConfig = false;

//pino do botão
const int PIN_AP = 2;
const int BT_TROCA = 5;

void setup() {
  Serial.begin(9600);
  pinMode(PIN_AP, INPUT);
  pinMode(BT_TROCA, INPUT);

  //declaração do objeto wifiManager
  WiFiManager wifiManager;

  //utilizando esse comando, as configurações são apagadas da memória
  //caso tiver salvo alguma rede para conectar automaticamente, ela é apagada.
//  wifiManager.resetSettings();

//por padrão as mensagens de Debug vão aparecer no monitor serial, caso queira desabilitá-la
//utilize o comando setDebugOutput(false);
//  wifiManager.setDebugOutput(false);

//caso queira iniciar o Portal para se conectar a uma rede toda vez, sem tentar conectar 
//a uma rede salva anteriormente, use o startConfigPortal em vez do autoConnect
//  wifiManager.startConfigPortal(char const *apName, char const *apPassword = NULL);

  //setar IP fixo para o ESP (deve-se setar antes do autoConnect)
//  setAPStaticIPConfig(ip, gateway, subnet);
//  wifiManager.setAPStaticIPConfig(IPAddress(192,168,16,2), IPAddress(192,168,16,1), IPAddress(255,255,255,0)); //modo AP

//  setSTAStaticIPConfig(ip, gateway, subnet);
//  wifiManager.setSTAStaticIPConfig(IPAddress(192,168,0,99), IPAddress(192,168,0,1), IPAddress(255,255,255,0)); //modo estação

//callback para quando entra em modo de configuração AP
  wifiManager.setAPCallback(configModeCallback); 
//callback para quando se conecta em uma rede, ou seja, quando passa a trabalhar em modo estação
  wifiManager.setSaveConfigCallback(saveConfigCallback); 

  wifiManager.autoConnect("ESP_AP","12345678"); //cria uma rede sem senha
//wifiManager.autoConnect(); //gera automaticamente o SSID com o chip ID do ESP e sem senha

//  wifiManager.setMinimumSignalQuality(10); // % minima para ele mostrar no SCAN

//wifiManager.setRemoveDuplicateAPs(false); //remover redes duplicadas (SSID iguais)

//wifiManager.setConfigPortalTimeout(10); //timeout para o ESP nao ficar esperando para ser configurado para sempre

// Connect MAX98357 I2S Amplifier Module
  audio.setPinout(I2S_BCLK, I2S_LRC, I2S_DOUT);
 
  // Set the volume
  audio.setVolume(volume);
 
  // Connect to an Internet radio station (select one as desired)
  //audio.connecttohost("http://vis.media-ice.musicradio.com/CapitalMP3");
  //audio.connecttohost("mediaserv30.live-nect MAX98357 I2S Amplifier Module
  //audio.connecttohost("www.surfmusic.de/m3u/100-5-das-hitradio,4529.m3u");
  //audio.connecttohost("stream.1a-webradio.de/deutsch/mp3-128/vtuner-1a");
  //audio.connecttohost("www.antenne.de/webradio/antenne.m3u");
  
  //audio.connecttohost("http://listen.livestreamingservice.com/181-themix_128k.mp3");
  audio.connecttohost(streaming);

}

void troca() {
  HTTPClient http;
String url = "https://gabd.com.br/tudoale/musica.php";
http.begin(url);
int httpCode = http.GET();                                        //Make the request
  
    if (httpCode > 0) { //Check for the returning code
  
        String payload = http.getString();
        if(payload != streaming)  {
          Serial.println(payload);
          int str_len = payload.length() + 1;
          // Prepare the character array (the buffer) 
          char nova[str_len];
          payload.toCharArray(nova, str_len);          
          //streaming = nova;
          audio.connecttohost(nova);
          Serial.println(nova);
        }
        //audio.connecttohost(payload);
    }
    http.end(); //Free the resources
    delay(5000);
}

void loop() {
  WiFiManager wifiManager;
  //se o botão foi pressionado
   if ( digitalRead(PIN_AP) == HIGH ) {
      Serial.println("resetar"); //tenta abrir o portal
      if(!wifiManager.startConfigPortal("ESP_AP", "12345678") ){
        Serial.println("Falha ao conectar");
        delay(2000);
        ESP.restart();
        delay(1000);
      }
      Serial.println("Conectou ESP_AP!!!");
   }

  //se o botão foi pressionado
    if (digitalRead(BT_TROCA) == LOW) {
      troca();
    }

// Run audio player
// Run audio player______________________________________________________________-Play Audio
 
 audio.loop();
 
  // Get the volume level
  volume = map ((analogRead(volControl)), 0, 4095, 0 , 20);
  
  // Set the volume
  audio.setVolume(volume);   

}

//callback que indica que o ESP entrou no modo AP
void configModeCallback (WiFiManager *myWiFiManager) {  
//  Serial.println("Entered config mode");
  Serial.println("Entrou no modo de configuração");
  Serial.println(WiFi.softAPIP()); //imprime o IP do AP
  Serial.println(myWiFiManager->getConfigPortalSSID()); //imprime o SSID criado da rede

}

//callback que indica que salvamos uma nova rede para se conectar (modo estação)
void saveConfigCallback () {
//  Serial.println("Should save config");
  Serial.println("Configuração salva");
  Serial.println(WiFi.softAPIP()); //imprime o IP do AP
}

// Audio status functions
 
void audio_info(const char *info) {
  Serial.print("info        "); Serial.println(info);
}
void audio_id3data(const char *info) { //id3 metadata
  Serial.print("id3data     "); Serial.println(info);
}
void audio_eof_mp3(const char *info) { //end of file
  Serial.print("eof_mp3     "); Serial.println(info);
}
void audio_showstation(const char *info) {
  Serial.print("station     "); Serial.println(info);
}
void audio_showstreaminfo(const char *info) {
  Serial.print("streaminfo  "); Serial.println(info);
}
void audio_showstreamtitle(const char *info) {
  Serial.print("streamtitle "); Serial.println(info);
}
void audio_bitrate(const char *info) {
  Serial.print("bitrate     "); Serial.println(info);
}
void audio_commercial(const char *info) { //duration in sec
  Serial.print("commercial  "); Serial.println(info);
}
void audio_icyurl(const char *info) { //homepage
  Serial.print("icyurl      "); Serial.println(info);
}
void audio_lasthost(const char *info) { //stream URL played
  Serial.print("lasthost    "); Serial.println(info);
}
void audio_eof_speech(const char *info) {
  Serial.print("eof_speech  "); Serial.println(info);
}
