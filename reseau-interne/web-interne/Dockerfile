FROM ubuntu:latest
RUN apt update && apt upgrade -y && apt install -y nginx && apt install php-fpm php-mysql -y && apt install mysql-server -y


RUN mkdir /etc/nginx/html
RUN mkdir /etc/nginx/html/erp

COPY ./erp/index.php /etc/nginx/html/erp/index.php

COPY ./nginx.conf /etc/nginx/nginx.conf

COPY ./erp/process.php /etc/nginx/html/erp/process.php

RUN rm /var/www/html/index.nginx-debian.html


#COPY ./default.conf /etc/nginx/conf.d/default.conf
