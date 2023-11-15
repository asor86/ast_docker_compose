FROM phpdockerio/php:8.1-fpm

RUN apt-get update && apt-get -y --no-install-recommends install \
    php-pear \
    php8.1-dev \
	build-essential \	
    php8.1-gd \
    php8.1-imagick \
    php8.1-intl \
    php8.1-interbase \
    php8.1-mbstring \
    php8.1-mcrypt \
    php8.1-memcache \
    php8.1-memcached \
    php8.1-mysql \
    php8.1-opcache \
    php8.1-soap \
    php8.1-zip \
	php8.1-xdebug \
    php-pear \
    make \
    && pecl install mongodb \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/* \
    && apt-get -y autoremove && apt-get clean


COPY ./php.ini /etc/php/8.1/fpm/conf.d/90-php.ini
COPY ./php.ini /etc/php/8.1/cli/conf.d/90-php.ini
COPY ./xdebug.ini /etc/php/8.1/fpm/conf.d/20-xdebug.ini
COPY ./xdebug.ini /etc/php/8.1/cli/conf.d/20-xdebug.in

RUN usermod -u 1000 www-data

WORKDIR "/var/www/bitrix"

EXPOSE 9000
