<?php


use eftec\bladeone\BladeOne;

function view($path, $data = [])
{
    $views = __DIR__ . '/../../resources/views';
    $cache = __DIR__ . '/../../bootstrap/cache';
    $blade = new BladeOne($views, $cache, BladeOne::MODE_AUTO);

//    echo $blade->setView($path)->share($data)->run();
    echo $blade->run($path,$data);
}
