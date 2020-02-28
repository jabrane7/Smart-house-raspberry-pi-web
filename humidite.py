import Adafruit_DHT
sensor = Adafruit_DHT.DHT22
pin = 4
humidity,temperature = Adafruit_DHT.read_retry(sensor, pin)

if humidity is not None and temperature is not None:
   print ("{1:0.1f} %".format(temperature, humidity))
else:
   print("Failed to obtain a reading. Try again!") 

