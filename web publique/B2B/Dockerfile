FROM php:7-fpm
RUN apt update 
RUN apt upgrade -y 
RUN apt install -y php-fpm
RUN apt install -y php-mysql


COPY ./index.php /etc/nginx/html/b2b/index.php
COPY ./process.php /etc/nginx/html/b2b/process.php