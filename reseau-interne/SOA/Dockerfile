FROM ubuntu:latest
RUN apt update && apt upgrade -y && apt install bind9 bind9utils -y && apt-get update && apt-get install iputils-ping && apt install dnsutils -y

COPY ./named.conf.local /etc/bind/named.conf.local
COPY ./named.conf.options /etc/bind/named.conf.options

RUN mkdir /etc/bind/master

COPY ./master/woodytoys.intern /etc/bind/master/woodytoys.intern
COPY ./master/128.16.172.in-addr.arpa /etc/bind/master/128.16.172.in-addr.arpa
COPY ./test.log /etc/bind/test.log

CMD named -g
