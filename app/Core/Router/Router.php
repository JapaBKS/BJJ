<?php

namespace App\Core\Router;

class Router
{
  private array $routes = ['GET' => [], 'POST' => []];

  public function get(string $path, callable $h): void
  {
    $this->routes['GET'][$this->normalize($path)]  = $h;
  }
  public function post(string $path, callable $h): void
  {
    $this->routes['POST'][$this->normalize($path)] = $h;
  }

  public function dispatch(): void
  {
    $method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
    $uri    = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
    $base   = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '')), '/');

    // remove o prefixo da pasta do projeto (/BJJ)
    if ($base && $base !== '/') {
      $uri = preg_replace('#^' . preg_quote($base, '#') . '#', '', $uri);
    }

    $path = $this->normalize($uri);
    $handler = $this->routes[$method][$path] ?? null;

    // DEBUG opcional (liga colocando APP_DEBUG=true no .env)
    if ((getenv('APP_DEBUG') ?: 'false') === 'true') {
      error_log("[ROUTER] method=$method base=$base uri=$uri path=$path");
    }

    if (is_callable($handler)) {
      echo call_user_func($handler);
      return;
    }
    http_response_code(404);
    echo '404 - Rota não encontrada';
  }

  private function normalize(string $p): string
  {
    $p = '/' . ltrim($p, '/');
    if ($p !== '/' && str_ends_with($p, '/')) $p = rtrim($p, '/');
    return $p;
  }
}
