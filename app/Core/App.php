<?php
namespace App\Core;

final class App
{
    private static array $env = [];

    public static function init(array $env): void
    {
        self::$env = $env;
        if (self::env('APP_ENV', 'local') === 'production') {
            ini_set('display_errors', '0');
            error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT);
        }
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    public static function env(string $key, $default = null)
    {
        return self::$env[$key] ?? $default;
    }
}
