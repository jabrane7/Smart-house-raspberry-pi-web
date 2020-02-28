import RPi.GPIO as GPIO
import sys
import time
import relayStatus13

GPIO.setmode(GPIO.BCM)
GPIO.setwarnings(False)

pin = 13

GPIO.setup(pin, GPIO.OUT)

def turnOn():

    GPIO.output(pin, GPIO.HIGH)
    
def turnOff():
    GPIO.output(pin, GPIO.LOW)
    GPIO.cleanup()
    

def run():
    
    try:
        if(relayStatus13.getStatus() == "0"):
            turnOn()
        else:
            turnOff()

    except KeyboardInterrupt:
        GPIO.cleanup()
        print("Quit")

if(__name__ == "__main__"):
    run()

