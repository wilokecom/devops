#!/usr/bin/env bash
curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
chmod +x wp-cli.phar
./wp-cli.phar core download --allow-root --path=wp
./wp-cli.phar core config --allow-root --dbname=wordpress --dbuser=wordpress --dbhost=127.0.0.1 --dbpassword=wordpress
--path=wp
./wp-cli.phar core install --allow-root --admin_name=admin --admin_password=admin --admin_email=admin@example.com
--url=${WP_HOST} --title=WordPress --path=wp
