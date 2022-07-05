FROM phpdockerio/php80-fpm:latest
WORKDIR "/application"

RUN curl -fsSL https://deb.nodesource.com/setup_lts.x | bash -; \
    apt-get update; \
    apt-get -y --no-install-recommends install \
        git \ 
        php8.0-gd \
        php8.0-memcached \ 
        php8.0-mysql \
        php8.0-xdebug; \
    apt-get clean; \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*
