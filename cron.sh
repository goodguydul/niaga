#!/bin/sh
set -e

while /bin/true; do
 	sleep 150
  	php /var/www/html/bb-cron.php
  	sleep 150
done &

exec "$@"