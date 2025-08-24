<?php
namespace App\Controllers;

use App\Core\Controller;

class CompeticaoController extends Controller
{
    public function index(): void
    {
        $this->view('competicao/index', [
            'titulo' => 'ShiaiFlow • Dashboard',
        ]);
    }
}
