FROM php:8-alpine

RUN curl -sS https://getcomposer.org/installer | php && mv composer.phar /usr/local/bin/composer

#RUN apk --no-cache add postgresql-dev
#RUN docker-php-ext-install pdo pdo_pgsql
