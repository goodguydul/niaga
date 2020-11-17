<?php
echo $_SERVER['SERVER_NAME'];
$test = array (
    'type' => 'mysql',
    'host' => getenv('DB_HOST'),
    'name' => getenv('DB_NAME'),
    'user' => getenv('DB_USER'),
    'password' => getenv('DB_PASS'),
  );
print_r($test);