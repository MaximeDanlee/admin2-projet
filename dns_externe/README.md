# DNS public, commandes

## Créer l'image

```bash
docker build -t adminprojet123/dns_public:latest .
```

## Push l'image sur GitHub

### avec les builds automatisés

```bash
git add .
git commit -m "message du commit"
git push
```

### push directement sur dockerhub

```bash
docker push adminprojet123/dns_public:latest
```

## Lancer le conteneur docker

```bash
docker run -d 
    --publish 53:53/tcp \ 
    --publish 53:53/udp \
    --name ns \
    --net zone_dmz \
    --ip 172.16.129.1 \
    --network-alias ns \
    adminprojet123/dns_public:latest
```

## Commentaire

Ne pas oublier de suprimmer l'image précédente si on veur relancer le serveur dns à partir d'une image mise à jour. Pour remove l'ancienne image et pull la nouvelle :

```bash
docker stop ns
docker rm adminprojet123/dns_public:latest
docker image rm adminprojet123/dns_public:latest
docker pull adminprojet123/dns_public:latest
```
