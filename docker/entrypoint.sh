#!/bin/sh
set -e

# Replace ${PORT} in nginx template with environment variable $PORT (fallback to 80)
if [ -f /etc/nginx/conf.d/default.conf.template ]; then
  envsubst '$PORT' < /etc/nginx/conf.d/default.conf.template > /etc/nginx/conf.d/default.conf
  echo "Wrote nginx conf with PORT=${PORT:-80}"
fi

cd /var/www

# Ensure .env exists (copy example if absent). In production you should set env vars in Render.
if [ ! -f .env ] && [ -f .env.example ]; then
  cp .env.example .env
  echo "Copied .env.example -> .env"
fi

# Run migrations or other boot tasks optionally
# COMPOSER_MEMORY_LIMIT=-1 php artisan migrate --force || true

# Generate APP_KEY if not provided (safer to set APP_KEY in Render secrets for production)
if [ -z "$APP_KEY" ] && [ -f artisan ]; then
  php artisan key:generate --force || true
  echo "Generated APP_KEY"
fi

# Ensure storage & cache permission
chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache || true
chmod -R 775 /var/www/storage /var/www/bootstrap/cache || true

# Make sure vendor is present; if composer install was run with --no-scripts earlier, run discovery now
if [ -d vendor ] && [ -f artisan ]; then
  echo "Running artisan package discovery..."
  php artisan package:discover --ansi || true
fi

# Start php-fpm as a background process (daemon) so nginx can run in foreground.
# Try to daemonize first; fallback to backgrounding.
if command -v php-fpm >/dev/null 2>&1; then
  # Try to run php-fpm in background (-D). If not supported, run it and background via &.
  php-fpm -D 2>/dev/null || (php-fpm &)
  echo "Started php-fpm (background)"
fi

# Exec the main process (nginx) in the foreground so container PID 1 stays alive
# If Dockerfile CMD is ["nginx", "-g", "daemon off;"], exec "$@" will run it.
echo "Starting foreground process: $@"
exec "$@"
