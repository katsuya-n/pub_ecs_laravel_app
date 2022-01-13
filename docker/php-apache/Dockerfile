FROM php:8.0-apache

RUN apt-get update \
    && apt-get install -y git emacs \
    && docker-php-ext-install pdo_mysql


COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# mod_rewirteの有効化(/hogeとかが404になる)
# https://hara-chan.com/it/infrastructure/docker-laravel-fail-routing-without-index/#_mod_rewrite
# https://qiita.com/Y-Kanoh/items/42af3c2f635653c4eaf7
#RUN  a2enmod rewrite

WORKDIR /var/www/html