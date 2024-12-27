FROM php:8.3-apache

# Instale as extensões necessárias do PHP
RUN docker-php-ext-install mysqli pdo pdo_mysql

COPY . /var/www/html/
