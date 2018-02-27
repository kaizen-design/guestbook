<?php

require_once '../vendor/autoload.php';

echo "Hello World!";

// Using Medoo namespace
use Medoo\Medoo;

$database = new Medoo([
    'database_type' => 'sqlite',
    'database_file' => '../storage/database.db'
]);

dump($database);