#!/bin/sh
set -e

# Replace ${PORT} in nginx template with environment variable $PORT (fallback to 80)
if [ -f /etc/nginx/conf.d/default.conf.template ]; then
  envsubst '$PORT' < /etc/nginx/conf.d/default.conf.template > /etc/nginx/conf.d/default.conf
  echo "Wrote nginx conf with PORT=${PORT:-80}"
fi

cd /var/www

# If vendor exists but package discovery hasn't run, run it now.
# Use --ansi and ignore errors to avoid failing container start in odd edge cases.
if [ -f artisan ] && [ -d vendor ]; then
  echo "Running artisan package discovery..."
  php artisan package:discover --ansi || true
fi



# If .env does not exist, copy example (avoid committing real secrets; override in Render env)
if [ ! -f .env ] && [ -f .env.example ]; then
  cp .env.example .env
  echo "Copied .env.example -> .env"
fi

# Generate APP_KEY if missing (only if not provided via environment)
if [ -z "$APP_KEY" ] && [ -f artisan ]; then
  php artisan key:generate --force || true
  echo "Generated APP_KEY"
fi

# Ensure correct permissions for runtime folders
chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache || true
chmod -R 775 /var/www/storage /var/www/bootstrap/cache || true

# Start php-fpm as a background daemon so nginx can run in foreground
# Attempt to daemonize, fallback to running php-fpm which may run in foreground in some images.
if command -v php-fpm >/dev/null 2>&1; then
  php-fpm -D || php-fpm || true
  echo "Started php-fpm"
fi

# Execute CMD (usually nginx in foreground)
exec "$@"
