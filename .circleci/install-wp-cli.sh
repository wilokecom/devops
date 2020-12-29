#!/usr/bin/env bash
curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
chmod +x wp-cli.phar
mkdir wp
./wp-cli.phar core download --allow-root --path=${WP_PATH}
./wp-cli.phar core config --allow-root --dbname=${MYSQL_DATABASE} --dbuser=${MYSQL_USER} --dbhost=${WP_HOST} --path=${WP_PATH}
./wp-cli.phar core install --allow-root --admin_name=admin --admin_password=admin --admin_email=admin@example.com
--url=${WP_HOST} --title=WordPress --path=${WP_PATH}
