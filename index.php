<?php
session_start();

// includes manuais (sem composer)
require __DIR__ . '/app/Core/App/App.php';
require __DIR__ . '/app/Core/Router/Router.php';
require __DIR__ . '/app/Core/Auth/Auth.php';
require __DIR__ . '/app/Core/Security/Security.php';
require __DIR__ . '/app/Core/Helpers/Helpers.php';

use App\Core\App\App;

App::run();
