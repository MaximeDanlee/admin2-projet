FROM ubuntu:bionic
RUN apt update && apt upgrade -y && apt install bind9 bind9utils -y

COPY named.conf /etc/bind/
COPY named.conf.options /etc/bind/
COPY named.conf.default_zones /etc/bind/
COPY named.conf.local /etc/bind/
COPY named.conf.log /etc/bind/

COPY db.tl2-2.ephec-ti.be /etc/bind/zones/

CMD named -g

# EXPOSE 53