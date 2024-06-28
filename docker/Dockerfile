FROM php:8.0-apache as base
RUN composer require phpmailer/phpmailer
COPY . /var/www/html/
WORKDIR /var/www/html/
EXPOSE 80

