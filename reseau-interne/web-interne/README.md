# Web Interne

## Créer et lancer iamge docker

Premièrement, créer un réseau docker à l'aide de la coommande suivante

```bash
docker network create --subnet 172.16.128.0/24 --gateway 172.16.128.254 reseau-intern
```

Puis, lancer les commandes suivantes

```bash
docker build -t webserver-intern .
docker run -it --rm -d --network reseau-intern --ip 172.16.128.4 --name web-intern webserver-intern
```

## Tester serveur nginx

Lancer les commandes suivantes

```bash
docker exec -it web-intern nginx -t
docker exec -it web-intern service nginx restart
```

## Tester php

Lancer les commandes suivantes

```bash
docker exec -it web-intern php-fpm7.4 -t 
docker exec -it web-intern service php7.4-fpm restart
```

## Sources

* <https://www.digitalocean.com/community/tutorials/how-to-install-linux-nginx-mysql-php-lemp-stack-on-ubuntu-20-04-fr>
