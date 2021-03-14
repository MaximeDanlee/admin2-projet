FROM ubuntu:latest
RUN apt update && apt upgrade -y && apt install -y nginx


RUN mkdir /etc/nginx/html
RUN mkdir /etc/nginx/html/B2B

COPY ./B2B/index.html /etc/nginx/html/B2B/index.html
COPY ./default.conf /etc/nginx/conf.d/default.conf

