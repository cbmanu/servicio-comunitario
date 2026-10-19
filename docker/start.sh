
#!/bin/sh
set -eu

mkdir -p /run/nginx

echo "Starting PHP-FPM..."
php-fpm -D

echo "Starting Nginx..."
exec nginx -g "daemon off;"
