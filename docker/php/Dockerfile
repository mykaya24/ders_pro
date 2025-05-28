FROM php:8.2-fpm

WORKDIR /var/www/html

# Gerekli bağımlılıkları yükle
RUN apt-get update && apt-get install -y \
    libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql

CMD ["php-fpm"]


