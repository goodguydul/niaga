<?php 
return array (
  'debug' => false,
  'salt' => '3f8d3d577ab3fd8b925b06969da4cf85',
  'url' => getenv('BASE_URL', true) ?: getenv('BASE_URL'),
  'admin_area_prefix' => '/superuser',
  'sef_urls' => false,
  'timezone' => 'UTC',
  'locale' => 'en_US',
  'locale_date_format' => '%A, %d %B %G',
  'locale_time_format' => ' %T',
  'path_data' => '/var/www/html/bb-data',
  'path_logs' => '/var/www/html/bb-data/log/application.log',
  'log_to_db' => true,
  'db' => 
  array (
    'type' => 'mysql',
    'host' => getenv('DB_HOST', true) ?: getenv('DB_HOST'),
    'name' => getenv('DB_NAME', true) ?: getenv('DB_NAME'),
    'user' => getenv('DB_USER', true) ?: getenv('DB_USER'),
    'password' => getenv('DB_PASS', true) ?: getenv('DB_PASS'),
  ),
  'twig' => 
  array (
    'debug' => true,
    'auto_reload' => true,
    'cache' => '/var/www/html/bb-data/cache',
  ),
  'api' => 
  array (
    'require_referrer_header' => false,
    'allowed_ips' => 
    array (
    ),
    'rate_span' => 3600,
    'rate_limit' => 1000,
  ),
);