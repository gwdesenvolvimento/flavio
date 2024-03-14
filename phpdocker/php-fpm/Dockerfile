FROM phpdockerio/php:8.1-fpm
WORKDIR "/application"

RUN apt-get update \
    && apt-get -y --no-install-recommends install \
        php8.1-bcmath \ 
        php8.1-bz2 \ 
        php8.1-gd \ 
        php8.1-gmagick \ 
        php8.1-http \ 
        php8.1-mcrypt \ 
        php8.1-memcached \ 
        php8.1-mysql \ 
        php8.1-raphf \ 
        php8.1-redis \ 
        php8.1-xdebug \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*
