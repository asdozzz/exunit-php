FROM php:8.0-fpm

RUN apt-get update && apt-get install -y \
    git \
    zip unzip \
    libpq-dev \
    wget \
    zlib1g-dev \
    libmcrypt-dev \
    libzip-dev
RUN docker-php-ext-install zip

COPY --from=docker.io/composer:latest /usr/bin/composer /usr/local/bin/composer

WORKDIR /symfony
