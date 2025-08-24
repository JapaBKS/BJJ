<?php
namespace App\Controllers;

use App\Core\Controller;

class AuthController extends Controller
{
    public function showLogin(): void
    {
        $this->view('auth/login', ['titulo' => 'Entrar']);
    }

    public function login(): void
    {
        // Stub simples: autenticação fake para demonstrar fluxo
        $_SESSION['user'] = ['id' => 1, 'nome' => 'Admin', 'role' => 'admin'];
        $this->redirect('/dashboard');
    }
}
