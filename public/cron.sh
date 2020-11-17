#!/bin/sh
while /bin/true; do
  php /var/www/html/bb-cron.php
  sleep 300
done &
