FROM php:8.3-fpm

RUN apt-get update && apt-get install -y \
    default-mysql-client \
    && docker-php-ext-install pdo pdo_mysql mysqli

RUN pecl install xdebug
RUN docker-php-ext-enable xdebug

WORKDIR /var/www/wordpress-education