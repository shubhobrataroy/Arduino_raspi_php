﻿import serial
import time
ser = serial.Serial('COM3', 9600)
time.sleep(2)
ser.write('1')




