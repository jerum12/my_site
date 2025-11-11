# Vendor / build stage using php so PHP extensions are available
FROM php:8.1-cli AS vendor

ARG user=www-data
ARG uid=1000

# Install system deps required by some PHP extensions and git
RUN apt-get update \
  && apt-get install -y --no-install-recommends \
    git \
    unzip \
    zip \
    libzip-dev \
    libpng-dev \
    libjpeg-dev \
    libonig-dev \
    curl \
  && rm -rf /var/lib/apt/lists/*

# Install PHP extensions required by many Laravel apps
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

WORKDIR /var/www

# copy composer files for caching
COPY composer.json composer.lock ./

# Install composer (if you prefer composer:2 image, you can copy the binary instead)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Run composer (add -vvv for debugging)
# Use unlimited memory just in case
RUN COMPOSER_MEMORY_LIMIT=-1 composer install --no-dev --optimize-autoloader --prefer-dist --no-interaction -vvv

# Copy the rest of the application files (to keep vendor cached earlier)
COPY . .
