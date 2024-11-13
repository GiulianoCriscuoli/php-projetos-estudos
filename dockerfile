# Use a imagem oficial do PHP 8.3 com Apache
FROM php:8.3-apache

# Instale as extensões necessárias do PHP
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copie o código da aplicação para o diretório padrão do Apache
COPY . /var/www/html/
