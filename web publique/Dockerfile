FROM nginx:latest
RUN apt update 
RUN apt upgrade -y 
RUN apt install -y nginx-full

RUN mkdir /etc/nginx/html
RUN mkdir /etc/nginx/html/b2b
RUN mkdir /etc/nginx/html/www

COPY ./B2B/index.php /etc/nginx/html/b2b/index.php
COPY ./www/index.html /etc/nginx/html/www/index.html

COPY ./nginx.conf /etc/nginx/nginx.conf
