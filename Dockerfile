FROM php:7.4-fpm-alpine

WORKDIR /var/www/html

RUN apk update && apk add --no-cache --repository http://dl-cdn.alpinelinux.org/alpine/edge/community build-base shadow vim curl \
php7 \
php7-fpm \
php7-common \
php7-mcrypt \
php7-mbstring \
php7-xml \
php7-openssl \
php7-json \
php7-phar \
php7-zip \
php7-gd \
php7-dom \
php7-session \
php7-zlib \
php7-cli \
php7-bz2 \
php7-ctype \
php7-curl \
php7-iconv \
php7-xdebug \
php7-intl \
php7-apcu \
php7-opcache \
php7-tokenizer \
php7-simplexml \
php7-gettext \
bzip2 \
ssmtp \
bash \
nano

RUN docker-php-ext-install pdo pdo_mysql mysqli
RUN docker-php-ext-enable pdo_mysql

RUN rm -rf /var/cache/apk/*

#--- CRON for bb-cron.php

ADD cron.sh /cron.sh
RUN chmod 755 /cron.sh

#---

RUN usermod -u 1000 www-data

COPY --chown=www-data:www-data . /var/www/html

USER www-data

EXPOSE 9000

ENTRYPOINT ["/cron.sh"]

CMD ["php-fpm"]
