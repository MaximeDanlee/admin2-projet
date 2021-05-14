# SOA Interne

## Build l'image

En êtant dans le dossier ou se trouve le Dockerfile de l'image, lancer la commande suivante

```bash
docker build -t soa .
```

## Lancement de l'image

Premièrement, créer un réseau docker s'il n'existe pas encore avec la commande suivante

```bash
docker network create --subnet 172.16.128.0/24 --gateway 172.16.128.254 reseau-intern
```

Puis, lancer le conteneur dans ce réseau avec la commande suivante

```bash
docker run -it --rm -d --network reseau-intern --ip 172.16.128.2 --name soa soa
```

## Sources

* <https://opensource.com/article/17/4/build-your-own-name-server>
