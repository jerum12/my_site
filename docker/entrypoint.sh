#!/bin/sh
set -e

# Move to app directory
cd /var/www

# If .env does not exist, copy from example
if [ ! -f .env ]; then
  if [ -f .env.example ]; then
    cp .env.example .env
    echo "Copied .env.example -> .env"
  fi
fi

# If APP_KEY not present in environment and not set in .env, generate one
if [ -z "$APP_KEY" ]; then
  # Only generate if artisan exists (i.e., it's a Laravel app)
  if [ -f artisan ]; then
    php artisan key:generate --force --ansi
    echo "Generated APP_KEY"
  fi
fi

# Fix folder permissions
chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache || true
chmod -R 775 /var/www/storage /var/www/bootstrap/cache || true

# Run migrations on demand
if [ "$RUN_MIGRATIONS" = "true" ]; then
  if [ -f artisan ]; then
    php artisan migrate --force
  fi
fi

# Execute passed command (defaults to php-fpm in Dockerfile CMD)
exec "$@"
