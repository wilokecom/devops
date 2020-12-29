#!/usr/bin/env bash
curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
chmod +x wp-cli.phar
./wp-cli.phar core download --path=wp
./wp-cli.phar config create --dbname=wordpress --dbuser=wordpress --dbhost=mysql --dbpass=wordpress --path=wp --skip-check
./wp-cli.phar core install --admin_name=admin --admin_password=admin --admin_email=admin@example.com --url=${WP_HOST} --title=WordPress --path=wp
