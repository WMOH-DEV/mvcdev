<?php

namespace App\routes;

class RouteDispatcher
{
  protected $match;
  protected $controller;
  protected $method;

  public function __construct(\AltoRouter $router)
  {
    $this->match        = $router->match();
    $this->controller   = $this->match['target'];
    $this->method       = $this->match['params'];
  }


}
