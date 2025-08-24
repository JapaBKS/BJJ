<?php

declare(strict_types=1);

// Caminhos base
define('BASE_PATH', dirname(__DIR__));
define('APP_PATH', BASE_PATH . '/app');

// Exibir erros em ambiente local
ini_set('display_errors', '1');
error_reporting(E_ALL);

// Autoload do Composer (se existir), senão fallback PSR-4 simples
$composer = BASE_PATH . '/vendor/autoload.php';
if (file_exists($composer)) {
    require $composer;
} else {
    spl_autoload_register(function ($class) {
        $prefix = 'App\\';
        $base_dir = APP_PATH . '/';
        $len = strlen($prefix);
        if (strncmp($prefix, $class, $len) !== 0) {
            return;
        }
        $relative_class = substr($class, $len);
        $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
        if (file_exists($file)) {
            require $file;
        }
    });
}

use App\Core\App;
use App\Core\Router;

// Carrega .env simples (ou usa vlucas/phpdotenv se disponível)
$env = [];
$envFile = BASE_PATH . '/.env';
if (file_exists($envFile)) {
    $env = parse_ini_file($envFile, true, INI_SCANNER_TYPED) ?: [];
}
App::init($env);

// Router
$router = new Router();
require BASE_PATH . '/routes/web.php';
require BASE_PATH . '/routes/api.php';

// Despacha
$method = $_SERVER['REQUEST_METHOD'] ?? 'GET';

// Caminho solicitado (apenas path, sem query string)
$requestPath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);

// Base path onde o index.php está (ex.: /BJJ/public)
$scriptDir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? ''));
$basePath  = rtrim($scriptDir, '/');

// Remove o basePath do começo da URL, se existir
if ($basePath !== '' && str_starts_with($requestPath, $basePath)) {
    $requestPath = substr($requestPath, strlen($basePath));
}

// Garante que sempre comece com "/"
$uri = '/' . ltrim($requestPath, '/');
if ($uri === '') {
    $uri = '/';
}

// Calcula baseUrl absoluto para usar nos assets/links
$scheme   = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host     = $_SERVER['HTTP_HOST'] ?? 'localhost';
$baseUrl  = rtrim($scheme . '://' . $host . $basePath, '/');

// Disponibiliza para as views
$GLOBALS['__baseUrl'] = $baseUrl;

$router->dispatch($method, $uri);
