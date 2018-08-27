FROM nascom/php:7.1-fpm-alpine

RUN apk add --no-cache autoconf make g++ \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && apk del --no-cache autoconf make g++ \
    && rm -rf /tmp/*

COPY xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini
