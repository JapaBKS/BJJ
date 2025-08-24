<?php

namespace App\Repositories;

use PDO;
use App\Core\App;

final class Db
{
    public static function pdo(): PDO
    {
        static $pdo = null;
        if ($pdo) return $pdo;
        $host = App::env('DB_HOST', '127.0.0.1');
        $db   = App::env('DB_NAME', 'shiaiflow');
        $user = App::env('DB_USER', 'root');
        $pass = App::env('DB_PASS', '');
        $dsn  = "mysql:host=$host;dbname=$db;charset=utf8mb4";
        $pdo  = new PDO($dsn, $user, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        return $pdo;
    }
}
