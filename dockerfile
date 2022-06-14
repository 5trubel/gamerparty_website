FROM registry.kevingaab.de:5000/base:web

#Clean
RUN apt update -y && apt autoremove -y
RUN apt install php-curl curl -y
# #Install Webserver + PHP
# RUN apt install apache2 -y && service apache2 stop
# RUN apt install -y libapache2-mod-php php php-gmp php-mysql

#Cleanup
RUN apt clean

#Config Stuff
# RUN mkdir /root/temp/
# COPY ./ /root/temp/
# RUN ls /root/temp/
# RUN chmod 777 -R /root/temp/

# #Remove and Install Apache2 Configs
# RUN rm -rf /etc/apache2/
# RUN echo $BRANCH
# #RUN mv /root/temp/config/apache_dev/ /etc/apache2;
# RUN mv /root/temp/config/apache/ /etc/apache2/;

# #Remove and Install Apache2 Configs
# RUN rm -rf /etc/php/
# RUN mv /root/temp/config/php/ /etc/php/

#Remove Websites and install  GP Websites
RUN rm -rf /var/www/ && mkdir /var/www/
#RUN mv /root/temp/web/ /var/www/gamerparty/
COPY web/main /var/www/html
RUN rm -rf /var/www/html/.git

EXPOSE 80
ENTRYPOINT ["apachectl","-D","FOREGROUND" ]
