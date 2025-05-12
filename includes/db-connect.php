<?php

$db_config = [
  'host' => 'mysql-8.4',
  'db_name' => 'guest_book',
  'user' => 'root',
  'password' => '',
];

$db_options = [
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

$dsn = "mysql:dbname={$db_config['db_name']};host={$db_config['host']}";

$db = new PDO($dsn, $db_config['user'], $db_config['password'], $db_options);
