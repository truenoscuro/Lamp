FROM php:7.2-apache
COPY ./phpScripts /usr/src/myapp
COPY ./paginaWeb /var/www/html
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN apt-get update && apt-get upgrade -y
WORKDIR /usr/src/myapp

