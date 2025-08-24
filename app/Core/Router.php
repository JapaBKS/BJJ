<?php

namespace App\Core;

class Router
{
    private array $routes = [
        'GET' => [],
        'POST' => [],
        'PUT' => [],
        'DELETE' => [],
    ];

    private array $groupStack = [];

    public function get(string $path, $handler): void
    {
        $this->add('GET', $path, $handler);
    }
    public function post(string $path, $handler): void
    {
        $this->add('POST', $path, $handler);
    }
    public function put(string $path, $handler): void
    {
        $this->add('PUT', $path, $handler);
    }
    public function delete(string $path, $handler): void
    {
        $this->add('DELETE', $path, $handler);
    }

    public function resource(string $prefix, string $controller): void
    {
        $this->get($prefix, $controller . '@index');
        $this->get($prefix . '/create', $controller . '@create');
        $this->post($prefix, $controller . '@store');
        $this->get($prefix . '/{id}', $controller . '@show');
        $this->get($prefix . '/{id}/edit', $controller . '@edit');
        $this->put($prefix . '/{id}', $controller . '@update');
        $this->delete($prefix . '/{id}', $controller . '@destroy');
    }

    public function group(array $opts, callable $callback): void
    {
        $this->groupStack[] = $opts;
        $callback($this);
        array_pop($this->groupStack);
    }

    private function add(string $method, string $path, $handler): void
    {
        $prefix = '';
        $middleware = [];
        foreach ($this->groupStack as $g) {
            $prefix .= $g['prefix'] ?? '';
            if (!empty($g['middleware'])) {
                $middleware = array_merge($middleware, (array)$g['middleware']);
            }
        }
        $route = [
            'path' => $prefix . $path,
            'handler' => $handler,
            'middleware' => $middleware,
        ];
        $this->routes[$method][] = $route;
    }

    public function dispatch(string $method, string $uri): void
    {
        $routes = $this->routes[$method] ?? [];
        foreach ($routes as $route) {
            $pattern = preg_replace('#\{([\w_]+)\}#', '(?P<$1>[^/]+)', $route['path']);
            $pattern = '#^' . $pattern . '$#';
            if (preg_match($pattern, $uri, $matches)) {
                $params = array_filter($matches, 'is_string', ARRAY_FILTER_USE_KEY);

                // TODO: aplicar middlewares se necessário
                $handler = $route['handler'];

                if (is_callable($handler)) {
                    call_user_func_array($handler, $params);
                    return; // sem valor
                }

                if (is_string($handler) && strpos($handler, '@') !== false) {
                    [$controller, $action] = explode('@', $handler, 2);
                    $class = 'App\\Controllers\\' . $controller;

                    if (!class_exists($class)) {
                        http_response_code(500);
                        echo "Controller '$class' não encontrado.";
                        return;
                    }

                    $instance = new $class();

                    if (!method_exists($instance, $action)) {
                        http_response_code(500);
                        echo "Ação '$action' não encontrada em $class.";
                        return;
                    }

                    call_user_func_array([$instance, $action], $params);
                    return; // sem valor
                }
            }
        }
        http_response_code(404);
        echo "404 - Rota não encontrada";
    }
}
