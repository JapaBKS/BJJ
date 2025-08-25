<?php
namespace App\Core\Security; class Security{ public static function s(string $v): string { return htmlspecialchars(trim($v), ENT_QUOTES, 'UTF-8'); } }
