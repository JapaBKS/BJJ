<?php
namespace App\Core\Helpers; function view_path(string $rel): string { return __DIR__.'/../../../public/views/'.ltrim($rel,'/'); }
