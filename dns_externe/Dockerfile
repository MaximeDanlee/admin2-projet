FROM ubuntu:bionic
RUN apt update && apt upgrade -y && apt install bind9 bind9utils -y && apt install dnsutils -y

COPY ./named.conf /etc/bind/
COPY ./named.conf.options /etc/bind/
COPY ./named.conf.default_zones /etc/bind/
COPY ./named.conf.local /etc/bind/
COPY ./named.conf.log /etc/bind/

COPY ./db.tl2-2.ephec-ti.be /etc/bind/zones/
COPY ./dnssec_key.sh /etc/bind/zones/

CMD chmod a+x /etc/bind/zones/dnssec_key.sh ; /etc/bind/zones/dnssec_key.sh ; rm /etc/bind/zones/dnssec_key.sh

# EXPOSE 53
