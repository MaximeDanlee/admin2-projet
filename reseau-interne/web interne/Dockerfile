FROM ubuntu:latest
RUN apt update && apt upgrade -y && apt install -y nginx


RUN mkdir /etc/nginx/html
RUN mkdir /etc/nginx/html/erp

COPY ./erp/index.php /etc/nginx/html/erp/index.php

COPY ./default.conf /etc/nginx/conf.d/default.conf
