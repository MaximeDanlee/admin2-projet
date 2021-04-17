FROM ubuntu:latest
RUN apt update && apt upgrade -y && apt install -y nginx && apt install php-fpm php-mysql -y


RUN mkdir /etc/nginx/html
RUN mkdir /etc/nginx/html/b2b
RUN mkdir /etc/nginx/html/www

COPY ./B2B/index.php /etc/nginx/html/b2b/index.php
COPY ./www/index.php /etc/nginx/html/www/index.php

COPY ./nginx.conf /etc/nginx/nginx.conf
