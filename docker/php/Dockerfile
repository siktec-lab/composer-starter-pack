
FROM php:8.2-apache

# Install php extensions with pecl and docker-php-ext-install
# redis
RUN pecl install redis && docker-php-ext-enable redis

VOLUME /var/www/html

EXPOSE 80
