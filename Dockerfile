FROM php:8.2-fpm-alpine

# Встановлюємо залежності для PHP
RUN apk add --no-cache \
    bash \
    curl \
    unzip \
    git \
    icu-dev \
    libxml2-dev \
    oniguruma-dev \
    mysql-client \
    zlib-dev \
    libzip-dev \
    && docker-php-ext-install pdo pdo_mysql mbstring intl xml zip \
    && curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer

COPY docker/php/upload.ini /usr/local/etc/php/conf.d/upload.ini

WORKDIR /var/www/html

# Команда за замовчуванням
CMD ["php-fpm"]
