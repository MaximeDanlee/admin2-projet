FROM php:7-fpm
RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable pdo_mysql

COPY ./index.php /etc/nginx/html/b2b/index.php
COPY ./process.php /etc/nginx/html/b2b/process.php