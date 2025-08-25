<?php

namespace App\Core\App;

use App\Core\Router\Router;

class App
{
  public static function run(): void
  {
    $r = new Router();
    /** @var Router $r */                 // $r fica disponível dentro do routes.php
    require __DIR__ . '/../../Config/Routes/routes.php';
    $r->dispatch();
  }
}
