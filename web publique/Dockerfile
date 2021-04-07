FROM ubuntu:latest
RUN apt update && apt upgrade -y && apt install -y nginx && apt install php-fpm php-mysql -y && apt install mysql-server -y


RUN mkdir /etc/nginx/html
RUN mkdir /etc/nginx/html/b2b
RUN mkdir /etc/nginx/html/www

COPY ./B2B/index.html /etc/nginx/html/b2b/index.html
COPY ./www/index.html /etc/nginx/html/www/index.html

COPY ./nginx.conf /etc/nginx/nginx.conf
