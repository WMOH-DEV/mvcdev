<?php

use Dotenv\Dotenv;

require_once __DIR__ . '/../../vendor/autoload.php';


define('BASE_PATH', realpath(__DIR__ . '/../../'));


$dotenv = Dotenv::createImmutable(BASE_PATH);
$dotenv->Load();
