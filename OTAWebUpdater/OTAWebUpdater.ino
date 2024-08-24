#include <WiFi.h>
#include <WiFiClient.h>
#include <WebServer.h>
#include <ESPmDNS.h>
#include <Update.h>
#include <HTTPClient.h> //needed for library

const char* host = "esp32";
const char* ssid = "ALHN-F5C2";
const char* password = "KVjTA3W!5B";

// constants won't change. They're used here to set pin numbers:
const int RELE1 = 15;     // the number of the RELE1 pin
const int RELE2 = 4;     // the number of the RELE2 pin
const int RELE3 = 5;     // the number of the RELE3 pin
const int RELE4 = 18;     // the number of the RELE4 pin
const int RELE5 = 19;    // the number of the RELE5 pin
const int RELE6 = 21;    // the number of the RELE6 pin
const int RELE7 = 22;    // the number of the RELE7 pin
const int RELE8 = 23;    // the number of the RELE8 pin

// variables will change:
int buttonState = 0;         // variable for reading the pushbutton status

WebServer server(80);
WiFiClient client;
/*
 * Login page
 */

const char* loginIndex =
 "<form name='loginForm'>"
    "<table width='20%' bgcolor='A09F9F' align='center'>"
        "<tr>"
            "<td colspan=2>"
                "<center><font size=4><b>ESP32 Login Page</b></font></center>"
                "<br>"
            "</td>"
            "<br>"
            "<br>"
        "</tr>"
        "<tr>"
             "<td>Username:</td>"
             "<td><input type='text' size=25 name='userid'><br></td>"
        "</tr>"
        "<br>"
        "<br>"
        "<tr>"
            "<td>Password:</td>"
            "<td><input type='Password' size=25 name='pwd'><br></td>"
            "<br>"
            "<br>"
        "</tr>"
        "<tr>"
            "<td><input type='submit' onclick='check(this.form)' value='Login'></td>"
        "</tr>"
    "</table>"
"</form>"
"<script>"
    "function check(form)"
    "{"
    "if(form.userid.value=='admin' && form.pwd.value=='admin')"
    "{"
    "window.open('/serverIndex')"
    "}"
    "else"
    "{"
    " alert('Error Password or Username')/*displays error message*/"
    "}"
    "}"
"</script>";

/*
 * Server Index Page
 */

const char* serverIndex =
"<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>"
"<form method='POST' action='#' enctype='multipart/form-data' id='upload_form'>"
   "<input type='file' name='update'>"
        "<input type='submit' value='Update'>"
    "</form>"
 "<div id='prg'>progress: 0%</div>"
 "<script>"
  "$('form').submit(function(e){"
  "e.preventDefault();"
  "var form = $('#upload_form')[0];"
  "var data = new FormData(form);"
  " $.ajax({"
  "url: '/update',"
  "type: 'POST',"
  "data: data,"
  "contentType: false,"
  "processData:false,"
  "xhr: function() {"
  "var xhr = new window.XMLHttpRequest();"
  "xhr.upload.addEventListener('progress', function(evt) {"
  "if (evt.lengthComputable) {"
  "var per = evt.loaded / evt.total;"
  "$('#prg').html('progress: ' + Math.round(per*100) + '%');"
  "}"
  "}, false);"
  "return xhr;"
  "},"
  "success:function(d, s) {"
  "console.log('success!')"
 "},"
 "error: function (a, b, c) {"
 "}"
 "});"
 "});"
 "</script>";

/*
 * setup function
 */
void setup(void) {
  Serial.begin(115200);

  // initialize the LED pin as an output:
  pinMode(RELE1, OUTPUT);
  pinMode(RELE2, OUTPUT);
  pinMode(RELE3, OUTPUT);
  pinMode(RELE4, OUTPUT);
  pinMode(RELE5, OUTPUT);
  pinMode(RELE6, OUTPUT);
  pinMode(RELE7, OUTPUT);
  pinMode(RELE8, OUTPUT);
  // initialize the pushbutton pin as an input:
  

  // Connect to WiFi network
  WiFi.begin(ssid, password);
  Serial.println("");

  // Wait for connection
  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }
  Serial.println("");
  Serial.print("Connected to ");
  Serial.println(ssid);
  Serial.print("IP address: ");
  Serial.println(WiFi.localIP());

  /*use mdns for host name resolution*/
  if (!MDNS.begin(host)) { //http://esp32.local
    Serial.println("Error setting up MDNS responder!");
    while (1) {
      delay(1000);
    }
  }
  Serial.println("mDNS responder started");
  /*return index page which is stored in serverIndex */
  server.on("/", HTTP_GET, []() {
    server.sendHeader("Connection", "close");
    server.send(200, "text/html", loginIndex);
  });
  server.on("/serverIndex", HTTP_GET, []() {
    server.sendHeader("Connection", "close");
    server.send(200, "text/html", serverIndex);
  });
  /*handling uploading firmware file */
  server.on("/update", HTTP_POST, []() {
    server.sendHeader("Connection", "close");
    server.send(200, "text/plain", (Update.hasError()) ? "FAIL" : "OK");
    ESP.restart();
  }, []() {
    HTTPUpload& upload = server.upload();
    if (upload.status == UPLOAD_FILE_START) {
      Serial.printf("Update: %s\n", upload.filename.c_str());
      if (!Update.begin(UPDATE_SIZE_UNKNOWN)) { //start with max available size
        Update.printError(Serial);
      }
    } else if (upload.status == UPLOAD_FILE_WRITE) {
      /* flashing firmware to ESP*/
      if (Update.write(upload.buf, upload.currentSize) != upload.currentSize) {
        Update.printError(Serial);
      }
    } else if (upload.status == UPLOAD_FILE_END) {
      if (Update.end(true)) { //true to set the size to the current progress
        Serial.printf("Update Success: %u\nRebooting...\n", upload.totalSize);
      } else {
        Update.printError(Serial);
      }
    }
  });
  server.begin();
}

void loop(void) {
  server.handleClient();
  delay(1);
 
    // ----------------------------------------------------------------------------------------------------
    // ----------------------------##############################------------------------------------------
    // ----------------------------------------------------------------------------------------------------
    //----------------------------- LOCAL ONDE CONSULTA OS DADOS-------------------------------------------
    // ----------------------------------------------------------------------------------------------------
    HTTPClient http;
    String url = "https://gabd.com.br/alessandroferreira/AUTO_LOCAL/frame.php";   
    http.begin(url);    
    int httpCode = http.GET();  //Make the request
    
    if (httpCode > 0)  //Check for the returning code
    {
      String payload = http.getString();      
      
     
     if(payload[7] == 49){
       digitalWrite(RELE1, HIGH);
     }else{
      digitalWrite(RELE1, LOW);
     }

     if(payload[6] == 49){
       digitalWrite(RELE2, HIGH);
     }else{
      digitalWrite(RELE2, LOW);
     }

     if(payload[5] == 49){
       digitalWrite(RELE3, HIGH);
     }else{
      digitalWrite(RELE3, LOW);
     }

     if(payload[4] == 49){
       digitalWrite(RELE4, HIGH);
     }else{
      digitalWrite(RELE4, LOW);
     }

     if(payload[3] == 49){
       digitalWrite(RELE5, HIGH);
     }else{
      digitalWrite(RELE5, LOW);
     }

     if(payload[2] == 49){
       digitalWrite(RELE6, HIGH);
     }else{
      digitalWrite(RELE6, LOW);
     }

     if(payload[1] == 49){
       digitalWrite(RELE7, HIGH);
     }else{
      digitalWrite(RELE7, LOW);
     }

     if(payload[0] == 49){
       digitalWrite(RELE8, HIGH);
     }else{
      digitalWrite(RELE8, LOW);
     }
     
  
    http.end();  //Free the resources
  }
  // -------------------------------------------------------------------------
  
  delay(100);
}// End Loop

/*Serial.print(payload[0]);
      Serial.print(payload[1]);
      Serial.print(payload[2]);
      Serial.print(payload[3]);
      Serial.print(payload[4]);
      Serial.print(payload[5]);
      Serial.print(payload[6]);
      Serial.println(payload[7]);*/
