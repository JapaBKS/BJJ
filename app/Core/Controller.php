<?php
namespace App\Core;

class Controller
{
    protected function view(string $view, array $data = [], ?string $layout = 'layouts/main'): void
    {
        View::render($view, $data, $layout);
    }

    protected function json($payload, int $status = 200): void
    {
        http_response_code($status);
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($payload, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
    }

    protected function redirect(string $to): void
    {
        header('Location: ' . $to);
        exit;
    }
}
