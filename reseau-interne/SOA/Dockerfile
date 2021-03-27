FROM ubuntu:latest
RUN apt update && apt upgrade -y && apt install -y nginx && apt install bind9 bind9utils -y

COPY ./named.conf.local /etc/bind/named.conf.local
COPY ./named.conf.options /etc/bind/named.conf.options

RUN mkdir /etc/bind/master

COPY ./master/woodytoys.be /etc/bind/master/woodytoys.be
COPY ./master/0.168.192.in-addr.arpa /etc/bind/master/0.168.192.in-addr.arpa
