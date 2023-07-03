FROM php:7.2-apache

RUN a2enmod rewrite
COPY apache-config.conf /etc/apache2/sites-available/000-default.conf

COPY /. /var/www/html/


RUN apt-get update && apt-get install -y \
    vim \
    libjpeg-dev \
    libpng-dev \
    libfreetype6-dev \
    libzip-dev \
    && docker-php-ext-configure gd --with-jpeg-dir=/usr/include/ --with-freetype-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd mysqli zip

EXPOSE 80

CMD ["apache2-foreground"]


