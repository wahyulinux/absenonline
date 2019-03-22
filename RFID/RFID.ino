#include <Ethernet.h>

#include <SPI.h>


//#include "DHT.h"
//#define DHTPIN 9
//#define DHTTYPE DHT22
//DHT dht(DHTPIN, DHTTYPE);
#include <MFRC522.h>
#define SS_PIN 9
#define RST_PIN 8
MFRC522 mfrc522(SS_PIN, RST_PIN);   // Create MFRC522 instance.
byte mac[] = { 0xDE, 0xAD, 0xBE, 0xEF, 0xFE, 0xED };
byte ip[] = {192, 168, 1, 177 }; //Enter the IP of ethernet shield
byte serv[] = {192, 168, 1, 45}; //Enter the IPv4 address
EthernetClient cliente;
void setup() {
Serial.begin(9600); //setting the baud rate at 9600
Ethernet.begin(mac, ip);
//dht.begin();
mfrc522.PCD_Init();   // Initiate MFRC522
  Serial.println("Approximate your card to the reader...");
  Serial.println();

}
void loop() {
//float hum = dht.readHumidity(); //Reading the humidity and storing in hum
//float temp = dht.readTemperature(); //Reading the temperature as Celsius and storing in temp
//float fah = dht.readTemperature(true); //reading the temperature in Fahrenheit
//float heat_index = dht.computeHeatIndex(fah, hum); //Reading the heat index in Fahrenheit
//float heat_indexC = dht.convertFtoC(heat_index); //Converting the heat index in Celsius
// Look for new cards
  if ( ! mfrc522.PICC_IsNewCardPresent()) 
  {
    return;
  }
  // Select one of the cards
  if ( ! mfrc522.PICC_ReadCardSerial()) 
  {
    return;
  }
  //Show UID on serial monitor
  //Serial.print("UID tag :");
  String temp;
  for (byte i = 0; i < mfrc522.uid.size; i++) 
  {
     //Serial.print(mfrc522.uid.uidByte[i] < 0x10 ? " 0" : " ");
    // Serial.print(mfrc522.uid.uidByte[i], HEX);
     //temp.concat(String(mfrc522.uid.uidByte[i] < 0x10 ? " 0" : " "));
     temp.concat(String(mfrc522.uid.uidByte[i], HEX));
  }
 
 
 if (cliente.connect(serv, 80)) { //Connecting at the IP address and port we saved before
Serial.println("connected");
cliente.print("GET /absen/arduino_api.php?"); //Connecting and Sending values to database
cliente.print("UID=");
cliente.print(temp);
cliente.print("&humidity=");
cliente.print(0);
cliente.print("&heat_index=");
cliente.println(0);
//Printing the values on the serial monitor
Serial.print("id= ");
Serial.println(temp);
Serial.print("Humidity= ");
Serial.println(0);
Serial.print("Heat Index= ");
Serial.println(0);
cliente.stop(); //Closing the connection
}
else {
// if you didn't get a connection to the server:
Serial.println("connection failed");
}
delay(5000);
}
