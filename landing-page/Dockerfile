FROM alpine:3.12

RUN apk update && apk upgrade

RUN apk add --no-cache --repository http://dl-cdn.alpinelinux.org/alpine/edge/community php \ 
    mysql-client \
    curl wget \
    tzdata \
    apache2 \
    php7-apache2 \
    php7-cli \
    php7-phar \
    php7-zlib \
    php7-zip \
    php7-bz2 \
    php7-ctype \
    php7-curl \
    php7-pdo_mysql \
    php7-mysqli \
    php7-json \
    php7-mcrypt \
    php7-xml \
    php7-dom \
    php7-iconv \
    php7-xdebug \
    php7-session \
    php7-intl \
    php7-gd \
    php7-mbstring \
    php7-apcu \
    php7-opcache \
    php7-tokenizer \
    php7-simplexml \
    php7-gettext \
    bzip2 \ 
    ssmtp \ 
    bash \
    nano

WORKDIR /var/www/localhost/htdocs

EXPOSE 80

CMD ["-D","FOREGROUND"]

ENTRYPOINT ["/usr/sbin/httpd"]