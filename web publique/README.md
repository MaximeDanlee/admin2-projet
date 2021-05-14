# Web Publique

## Lancement du Conteneur Docker

Créer un réseau docker

```bash
docker network create --subnet 172.16.129.0/24 --gateway 172.16.129.254 zone_dmz
```

Créer un fichier docker-compose.yml avec le contenu suivant

```yml
services:
    web_publique:
        image: adminprojet123/web_public:latest
        restart: always
        ports:
            - "80:80"
            - "443:443"
        volumes:
            - ./nginx/logs/nginx.log:/etc/nginx/main_access.log
            - ./certbot/conf:/etc/nginx/ssl
            - ./certbot/data:/var/www/certbot
        networks:
            default:
                ipv4_address: 172.16.129.4
        command: "/bin/sh -c 'while :; do sleep 6h & wait $${!}; nginx -s reload; done & nginx -g \"daemon off;\"'"

    php:
        image: adminprojet123/php_service:latest
        networks:
            default:
                ipv4_address: 172.16.129.9
        volumes:
            - ./nginx/mysql.ini:/etc/nginx/html/b2b/mysql.ini

    certbot:
        image: certbot/certbot:latest
        entrypoint: "/bin/sh -c 'trap exit TERM; while :; do certbot renew; sleep 12h & wait $${!}; done;'"
        volumes:
            - ./certbot/conf:/etc/letsencrypt
            - ./certbot/logs:/var/log/letsencrypt
            - ./certbot/data:/var/www/certbot

networks:
    default:
        external:
            name: zone_dmz

```

Tout en restant dans le même dosier lancer la commande suivante

```bash
docker-compose up
```

## Arrêter les Conteneurs pour une Mise à Jour

D'abord, arrêter les conteneurs à l'aide de la commande suivante

```bash
docker-compose stop
```

Ensuite, suprimmer les conteneurs à mettre à jour et leurs images correspondantes de la machine à l'aide des commandes suvantes

```bash
docker rm <container-id>
docker image rm <container-id>
```

Pour pull les nouvelles images, lancer la commande

```bash
docker-compose up
```
