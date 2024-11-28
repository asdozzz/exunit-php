# syntax=docker/dockerfile:1
FROM php:8.0-fpm

WORKDIR /app

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

COPY composer.json composer.json
COPY composer.lock composer.lock

ENV COMPOSER_HOME=/tmp/composer
ENV COMPOSER_ALLOW_SUPERUSER=1

RUN --mount=type=bind,target=/app,rw \
    --mount=type=cache,id=cache,target=$COMPOSER_HOME/cache \
     composer install --classmap-authoritative && \
    cp -r /app /build

COPY . .
RUN cp -r /build/vendor ./vendor
