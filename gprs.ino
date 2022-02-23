void loop() {
  // put your main code here, to run repeatedly:
  if(started){
    if(inet.attachGPRS("claro.pe","claro", "claro")){
        int celsius=temperatura();
        char buffer[150];
        char cadena[]="/in_datos.php?dato=";
        sprintf(buffer,"%s%d", cadena, celsius);

        numdata=inet.httpGET("inventalo.pe", 80, buffer, msg, 50);
        Serial.println(buffer);
        delay(15000);
    }else{
        Serial.println("Status=Error");
    }
}

}