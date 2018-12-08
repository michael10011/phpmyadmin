FROM php:7.2-fpm

RUN apt-get update \
  && apt-get install --yes --no-install-recommends vim libpq-dev zlib1g-dev \
  && docker-php-ext-install pdo_pgsql pdo_mysql mysqli zip \
  && docker-php-ext-enable mysqli pdo_mysql

RUN apt-get install -my wget mysql-client

# Composer install
RUN curl -sS https://getcomposer.org/installer | php && mv composer.phar /usr/local/bin/composer

# Install Xdebug (but don't enable)
RUN pecl install -o -f xdebug

RUN mkdir /app

WORKDIR /app

CMD ["php-fpm", "-F"]
