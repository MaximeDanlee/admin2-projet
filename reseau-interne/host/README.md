# Machine d'un Employer

## Build l'image

En êtant dans le dossier ou se trouve le Dockerfile de l'image, lancer la commande suivante

```bash
docker build -t host .
```

## Lancement de l'image

Premièrement, créer un réseau docker s'il n'existe pas encore avec la commande suivante

```bash
docker network create --subnet 172.16.128.0/24 --gateway 172.16.128.254 <nom-du-réseau>
```

Puis, lancer le conteneur dans ce réseau avec la commande suivante

```bash
docker run -it --rm -d --network <nom-du-réseau> --ip 172.16.128.5 --dns 172.16.128.3 --name host host
```

## Tester avec dig

Entrer dans le conteneur à l'aide de la commande suivante

```bash
docker exec -it host bash
```

Installer la commande dig à l'aide de la commande suivante

```bash
apt install dnsutils
```

Lancer un dig à l'aide de la commande dig

```bash
dig @<ip-serveur-dns> <nom-de-domaine>
```

## Sources

* <https://opensource.com/article/17/4/build-your-own-name-server>
