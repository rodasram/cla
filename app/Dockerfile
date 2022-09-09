# Desarrollo
# FROM ubuntu:18.04 AS development
FROM php:7.4-fpm AS development

WORKDIR /var/www/html

# Instalo php y nginx
RUN apt-get update -y
RUN apt-get upgrade -y
RUN apt-get install -y nginx curl vim nmap software-properties-common

# Complementos de php
RUN apt-get update -y && apt-get install -y  libfreetype6-dev libjpeg62-turbo-dev git libzip-dev zip unzip libpng-dev
RUN docker-php-ext-configure zip
RUN docker-php-ext-install pdo pdo_mysql mysqli zip gd bcmath


# Instalo nodejs 
RUN curl -sL https://deb.nodesource.com/setup_12.x | bash -
RUN apt-get install -y nodejs

# Instalo composer
COPY --from=composer:2.1 /usr/bin/composer /usr/local/bin/composer

