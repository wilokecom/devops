#!/usr/bin/env bash
curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
chmod +x wp-cli.phar
./wp-cli.phar core download --path=./../wordpress
./wp-cli.phar config create --dbname=wordpress --dbuser=root --dbhost=127.0.0.1 --dbpass='' --path=./../wordpress --skip-check
./wp-cli.phar core install --admin_name=admin --admin_password=admin --admin_email=admin@example.com --url=http://localhost:8000 --title=WordPress --path=./../wordpress
