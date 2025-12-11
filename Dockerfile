# Use PHP 8.1 FPM for production
FROM php:8.1-fpm

# System dependencies
RUN apt-get update \
  && apt-get install -y --no-install-recommends \
    git unzip zip libzip-dev libpng-dev libjpeg-dev libonig-dev curl libonig-dev \
  && rm -rf /var/lib/apt/lists/*

# PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy composer files and install
COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader --prefer-dist --no-interaction

# Copy app
COPY . .

# Permissions
RUN chown -R www-data:www-data /var/www \
    && chmod -R 775 /var/www/storage /var/www/bootstrap/cache

# Cache config/routes/views
RUN php artisan config:cache \
    && php artisan route:cache \
    && php artisan view:cache

EXPOSE 9000

# Use PHP-FPM in prod
CMD ["php-fpm"]
