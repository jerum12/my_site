FROM php:8.1-cli

# (system deps as in your file...)
RUN apt-get update \
  && apt-get install -y --no-install-recommends \
    git unzip zip libzip-dev libpng-dev libjpeg-dev libonig-dev curl \
  && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

WORKDIR /var/www

COPY composer.json composer.lock ./
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN COMPOSER_MEMORY_LIMIT=-1 composer install --no-dev --optimize-autoloader --prefer-dist --no-interaction --no-scripts -vvv
COPY . .

# Ensure directories are writable
RUN chmod -R 775 storage bootstrap/cache

EXPOSE 8080
CMD php artisan serve --host=0.0.0.0 --port=${PORT:-8080}
