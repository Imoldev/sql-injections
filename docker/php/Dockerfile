FROM php:8.4-fpm
RUN docker-php-ext-install pdo pdo_mysql
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN apt update && apt install -y git zip unzip
WORKDIR /var/www
