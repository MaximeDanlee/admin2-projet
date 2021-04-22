FROM ubuntu:latest
RUN apt update 
RUN apt upgrade -y 
RUN apt install nginx php-fpm php-mysql -y

RUN mkdir /etc/nginx/html
RUN mkdir /etc/nginx/html/b2b
RUN mkdir /etc/nginx/html/www

COPY ./B2B/index.php /etc/nginx/html/b2b/index.php
COPY ./www/index.html /etc/nginx/html/www/index.html

COPY ./nginx.conf /etc/nginx/nginx.conf

