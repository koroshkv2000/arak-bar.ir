#!/bin/sh
set -eu

mkdir -p \
    storage/app \
    storage/framework/cache/data \
    storage/framework/sessions \
    storage/framework/views \
    storage/logs \
    bootstrap/cache

if [ "${DB_CONNECTION:-sqlite}" = "sqlite" ]; then
    database_path="${DB_DATABASE:-/var/www/html/storage/app/database.sqlite}"

    if [ ! -f "$database_path" ]; then
        mkdir -p "$(dirname "$database_path")"

        if [ -f /var/www/html/database/database.sqlite ]; then
            cp /var/www/html/database/database.sqlite "$database_path"
        else
            touch "$database_path"
        fi
    fi
fi

chown -R www-data:www-data storage bootstrap/cache

php artisan config:cache
php artisan view:cache

if [ "${RUN_MIGRATIONS:-true}" = "true" ]; then
    php artisan migrate --force
fi

exec "$@"
