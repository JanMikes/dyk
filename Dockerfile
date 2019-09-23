FROM php:7.3-apache as production

ENV COMPOSER_ALLOW_SUPERUSER 1

WORKDIR /var/www

COPY ./.docker/apache/apache.conf /etc/apache2/sites-available/000-default.conf

RUN apt-get update && apt-get install -y \
        default-mysql-client \
        git \
        unzip \
        g++ \
        zlib1g-dev \
        libicu-dev \
        libzip-dev \
        default-mysql-client \
    && docker-php-ext-install pdo_mysql \
    && pecl -q install \
        zip \
    && docker-php-ext-enable zip

# Installing composer and prestissimo globally
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer global require "hirak/prestissimo:^0.3" --prefer-dist --no-progress --no-suggest --classmap-authoritative --no-plugins --no-scripts

COPY . .

RUN composer install --no-scripts --no-suggest
