FROM php:8.2-fpm-alpine

WORKDIR /var/www/html

RUN apk update && apk add --no-cache \
  git \
  curl \
  zip \
  unzip \
  supervisor \
  oniguruma-dev \
  libzip-dev

RUN docker-php-ext-install pdo pdo_mysql  bcmath zip

RUN pecl install redis \
&& docker-php-ext-enable redis

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY . .
RUN composer install --no-interaction --optimize-autoloader

RUN php artisan key:generate

EXPOSE 9000
CMD ["php-fpm"]