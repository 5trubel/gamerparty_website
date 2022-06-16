FROM registry.kevingaab.de:5000/base:web

#Clean
RUN apt update -y && apt autoremove -y
RUN apt install php-curl curl -y

#Remove Websites and install  GP Websites
RUN rm -rf /var/www/ && mkdir /var/www/
COPY web/main /var/www/html
RUN rm -rf /var/www/html/.git

EXPOSE 80

COPY /startup.sh /startup.sh
RUN chmod +x /startup.sh
ENTRYPOINT ["/startup.sh"]
