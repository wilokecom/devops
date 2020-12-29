#!/usr/bin/env bash

# Install WordPress
vendor/bin/wp config create --path="${WP_CORE_DIR}" --dbhost="127.0.0.1" --dbname="circle_test" --dbuser="root"
vendor/bin/wp core install --path="${WP_CORE_DIR}" --url="http://${WP_HOST}" --title="Wiloke DevOps"
--admin_user="admin" --admin_password="password" --admin_email="admin@example.com"
vendor/bin/wp rewrite structure --path="${WP_CORE_DIR}" '/%postname%/'

# Copy our plugin to WordPress directory
cp -r ./ ${WP_CORE_DIR}/wp-content/plugins/${WP_ORG_PLUGIN_NAME}

# Activate our plugin
vendor/bin/wp plugin activate --path="${WP_CORE_DIR}" ${WP_ORG_PLUGIN_NAME}
