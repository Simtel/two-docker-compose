FROM php:8.0-fpm

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin/ --filename=composer

RUN usermod -u 1000 www-data

WORKDIR /var/www/html

USER www-data