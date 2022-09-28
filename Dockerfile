FROM php:7.2-apache
COPY ./phpScripts /usr/src/myapp
COPY ./paginaWeb /var/www/html
WORKDIR /usr/src/myapp

