<?php
namespace App\Core;

final class View
{
    public static function render(string $view, array $data = [], ?string $layout = 'layouts/main'): void
    {
        $viewFile = BASE_PATH . '/app/Views/' . trim($view, '/') . '.php';
        if (!file_exists($viewFile)) {
            http_response_code(500);
            echo "View '$view' não encontrada.";
            return;
        }

        extract($data, EXTR_OVERWRITE);
        ob_start();
        include $viewFile;
        $content = ob_get_clean();

        if ($layout) {
            $layoutFile = BASE_PATH . '/app/Views/' . trim($layout, '/') . '.php';
            if (file_exists($layoutFile)) {
                include $layoutFile;
                return;
            }
        }
        echo $content;
    }
}

function e(string $str): string {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}
