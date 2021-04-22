FROM ubuntu:latest
RUN apt update 
RUN apt upgrade -y 
RUN apt install snapd nginx php-fpm php-mysql -y

RUN service snapd start
RUN snap install core
RUN snap refresh core
RUN apt-get remove certbot
RUN snap install --classic certbot
RUN ln -s /snap/bin/certbot /usr/bin/certbot

RUN mkdir /etc/nginx/html
RUN mkdir /etc/nginx/html/b2b
RUN mkdir /etc/nginx/html/www

COPY ./B2B/index.php /etc/nginx/html/b2b/index.php
COPY ./www/index.php /etc/nginx/html/www/index.php

COPY ./nginx.conf /etc/nginx/nginx.conf

RUN sudo certbot --nginx
