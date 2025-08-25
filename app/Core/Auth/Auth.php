<?php
namespace App\Core\Auth; class Auth{ public static function check(): bool { return isset($_SESSION['user_id']); } }
