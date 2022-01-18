FROM webdevops/php:8.0-alpine

RUN pecl config-set php_ini /opt/docker/etc/php/php.ini \
  && pear config-set php_ini /opt/docker/etc/php/php.ini \
  && apk upgrade --update \
  && apk add curl nano

RUN chmod +r /app

WORKDIR /app
