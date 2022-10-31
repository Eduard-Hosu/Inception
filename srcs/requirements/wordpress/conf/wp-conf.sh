cp -r /tmp/wordpress/* /var/www/html
cp /tmp/wp-config.php /var/www/html
exec /usr/sbin/php-fpm7 -F