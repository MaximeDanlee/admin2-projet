FROM ubuntu:latest
RUN apt update && apt upgrade -y && apt install bind9 bind9utils -y && apt-get update && apt-get install iputils-ping && apt install dnsutils -y


COPY ./named.conf.local /etc/bind/named.conf.local
COPY ./named.conf.options /etc/bind/named.conf.options

CMD named -c /etc/bind/named.conf -g 