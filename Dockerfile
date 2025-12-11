FROM php:8.1-fpm

# Install system dependencies + nginx
RUN apt-get update && apt-get install -y \
    nginx \
    git \
    unzip \
    zip \
    libzip-dev \
    libpng-dev \
    libjpeg-dev \
    libonig-dev \
    curl \
    && rm -rf /var/lib/apt/lists/*

# PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy composer files
COPY composer.json composer.lock ./

RUN composer install --no-dev --optimize-autoloader --prefer-dist --no-interaction

# Copy application
COPY . .

# Permissions
RUN chown -R www-data:www-data /var/www && \
    chmod -R 775 storage bootstrap/cache

# Cache config/routes/views
RUN php artisan config:cache
