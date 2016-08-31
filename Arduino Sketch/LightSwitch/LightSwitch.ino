
void setup()
{

	Serial.begin(9600);
	pinMode(2, OUTPUT);
	pinMode(3, OUTPUT);
}

void loop()
{

	while (Serial.available()){
		String swt = Serial.readString();
    
		if (swt == "1")
			digitalWrite(3, HIGH);

		else
			digitalWrite(3, LOW);
    
	}
}


