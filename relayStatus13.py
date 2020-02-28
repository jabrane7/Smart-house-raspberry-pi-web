import RPi.GPIO as GPIO

def getStatus():

    GPIO.setmode(GPIO.BCM)
    GPIO.setwarnings(False)

    pin = 13

    GPIO.setup(pin, GPIO.OUT)

    if(GPIO.input(pin) == 1):
        print("1")
        return "1"
    else:
        print("0")
        return "0"
      
if(__name__ == "__main__"):
    getStatus()


