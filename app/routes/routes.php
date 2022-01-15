<?php

use App\Controllers\IndexController;

$router = new AltoRouter();


  $router->map('GET', '/', 'App\Controllers\IndexController@index', 'home');

if ($match = $router->match()) {
    $index = new IndexController();
    $index->index();
} else {
    header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
    echo '404 Not Found';
}
