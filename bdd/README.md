# Utilisation de la Base de Données

## Créer et lancer iamge docker

```bash
docker build -t bdd .
docker run -it --rm -d -p 3306:3306 --network test-reseau --ip 172.16.128.10 --name bdd bdd
```

## Connecter au Réseau

```bash
docker network connect --ip 172.16.129.10 zone_dmz bdd
docker inspect -f '{{range.NetworkSettings.Networks}}{{.IPAddress}}{{end}}' bdd
```

## Cofiguration de mysql

```bash
docker exec -it web-intern service mysql restart
```

### Rendre mysql server accessible

Modifier le fichier /etc/mysql/mysql.conf.d/mysqld.cnf
ajouter la ligne

```mysqld.cnf
bind adress : 172.16.0.0
```

### Sécirité

Lancer la commande

```bash
mysql_secure_installation
```

mettre oui
niveau du mot de passe : 1
Password : < mot de passe >
mettre oui au reste

## Création des tables nécessaires

Entrer dans la ligne de commande mysql grâce à la commande suivante

```bash
mysql
```

Entrer les lignes de commandes SQL suivantes

```sql
CREATE DATABASE example_database;
CREATE USER 'b2b'@'172.16.129.4' IDENTIFIED WITH mysql_native_password BY 'P@sswordMysql123';
GRANT ALL ON example_database.* TO 'test'@'172.16.128.4';

CREATE TABLE example_database.todo_list (
    item_id INT AUTO_INCREMENT,
    content VARCHAR(255),
    PRIMARY KEY(item_id)
);

INSERT INTO example_database.todo_list (content) VALUES ("My first important item");
```

## Sources

* <https://www.digitalocean.com/community/tutorials/how-to-install-linux-nginx-mysql-php-lemp-stack-on-ubuntu-20-04-fr>
* connecter mysql à distance : <https://notes-de-cours.com/web/blogue/62/se-connecter-a-un-serveur-externe-mysql>
