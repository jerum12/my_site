# Multi-stage Dockerfile: composer build stage -> runtime with php-fpm + nginx
FROM composer:2 AS vendor
WORKDIR /app

COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist

# copy source for build stage so we can preserve vendor in final image quickly if needed
COPY . .

FROM php:8.1-fpm-bullseye

ARG user=www-data
ARG uid=1000

# Install system packages and nginx (and envsubst via gettext-base)
RUN apt-get update \
  && apt-get install -y --no-install-recommends \
    nginx \
    gettext-base \
    zip \
    unzip \
    git \
    libpng-dev \
    libjpeg-dev \
    libonig-dev \
    libzip-dev \
    curl \
  && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip \
  && rm -rf /var/lib/apt/lists/*

# Copy application files (including vendor from previous stage)
COPY --from=vendor /app /var/www

WORKDIR /var/www

# Ensure storage & cache exist and permissions
RUN mkdir -p /var/www/storage /var/www/bootstrap/cache \
  && chown -R ${user}:${user} /var/www/storage /var/www/bootstrap/cache || true \
  && chmod -R 775 /var/www/storage /var/www/bootstrap/cache || true

# Copy nginx config template and entrypoint
COPY docker/nginx/default.conf.template /etc/nginx/conf.d/default.conf.template
COPY docker/entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh

# Expose default HTTP port (not strictly required by Render, but helpful)
EXPOSE 80

# Entrypoint does substitution then starts php-fpm (background) + nginx (foreground)
ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]
CMD ["nginx", "-g", "daemon off;"]
