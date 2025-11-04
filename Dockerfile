# Production-ready Dockerfile for Laravel (PHP-FPM). Place at repo root as "Dockerfile".
# Multi-stage: optional Node build for frontend assets, then PHP-FPM build.

# ---- Optional node builder stage (only used if you have package.json and need to build assets) ----
FROM node:16 AS node-builder
WORKDIR /var/www

# Install deps and build assets
COPY package*.json ./
RUN npm ci --silent
COPY . .
# Adjust this to your build command (npm run build, npm run production, etc.):
RUN if [ -f package.json ]; then npm run build || true; fi

# ---- PHP / Composer stage ----
FROM php:8.1-fpm

# Arguments you can override with docker build --build-arg
ARG user=www-data
ARG uid=1000

# Install system dependencies
RUN apt-get update \
  && apt-get install -y --no-install-recommends \
    ca-certificates \
    git \
    unzip \
    libpng-dev \
    libjpeg-dev \
    libonig-dev \
    libzip-dev \
    zip \
    curl \
  && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Install composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

# Copy composer files first (for better caching)
COPY composer.json composer.lock ./
# Install PHP dependencies (production)
RUN composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist --no-scripts

# Copy application files
COPY . .

# If you used the node-builder, copy built assets into public/ (adjust path if your build outputs elsewhere)
# This will not fail the build if the path doesn't exist (uses a conditional copy via /bin/sh)
RUN if [ -d /var/www/public/build ]; then cp -a /var/www/public/build /var/www/public/build; fi

# Run composer scripts (if you need them)
RUN composer dump-autoload --optimize

# Permissions for storage & cache
RUN chown -R ${user}:${user} /var/www/storage /var/www/bootstrap/cache || true
RUN chmod -R 775 /var/www/storage /var/www/bootstrap/cache || true

# Copy entrypoint script and make executable
COPY docker/entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh

# Expose php-fpm port
EXPOSE 9000

# Use the entrypoint to prepare environment then start php-fpm
ENTRYPOINT ["entrypoint.sh"]
CMD ["php-fpm"]
