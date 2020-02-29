# Smart-house-raspberry-pi-web
 je vous montre dans cet article comment prendre les choses en main et construire votre propre dispositif Smart Home, et en agrandir selon vos envies, à l'aide du Raspberry Pi.
 https://www.youtube.com/watch?v=KqyNg35dCR8                                                                          
0-ci joint le montage des relais,capteur DHT22 et Raspberry pi                                            

1-installation PHP et appache2:

sudo apt update                                                                           
sudo apt upgrade                                                                               
sudo apt install apache2                                                                       

sudo apt install php php-mbstring                                                                   

sudo visudo                                                                                            
et ajouter a la fin                                                                            
www-data ALL=NOPASSWD: ALL                                                                       

2-installation de l'application                                                                                

mkdir /var/www/html/smart                                                                                      
sudo chown -R pi:www-data /var/www/html/smart                                                                   
sudo chmod -R 770 /var/www/html/smart 

git clone https://github.com/jabrane7/Smart-house-raspberry-pi-web  /var/www/html/smart                             
                                                                             

3-install DHT22                                                                                                        

sudo apt-get install build-essential python-dev python-openssl                                            


git clone https://github.com/adafruit/Adafruit_Python_DHT.git && cd Adafruit_Python_DHT                              

sudo python setup.py install                                                                               

4-ouvrir le navigateur web http://adressipraspberrypi/smart/house.php                                                      

5) fixer adresse ip                                                                                                                                                                               
sudo nano /etc/dhcpcd.conf                                                                                           
interface wlan0                                                                                                  
static ip_address=192.168.1.10/24                                                                                        
static routers=192.168.1.1                                                                                                  
static domain_name_servers=192.168.1.1 8.8.8.8                                                                              

interface eth0                                                                                                            
static ip_address=192.168.1.10/24                                                                                            
static routers=192.168.1.1                                                                                               
static domain_name_servers=192.168.1.1 8.8.8.8                                                                              
for question : jabran.benmahmoud@outlook.com                                                      
