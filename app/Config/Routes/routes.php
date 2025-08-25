<?php

use App\Core\Router\Router;

/** @var Router $r */
$r->get('/',            fn() => require __DIR__ . '/../../../public/views/Painel/painel.php');
$r->get('/login',       fn() => require __DIR__ . '/../../../public/views/Autenticacao/login.php');
$r->get('/perfil',      fn() => require __DIR__ . '/../../../public/views/PerfilAtleta/perfil.php');
$r->get('/academias',   fn() => require __DIR__ . '/../../../public/views/Academias/academias.php');
$r->get('/competicoes', fn() => require __DIR__ . '/../../../public/views/Competicoes/competicoes.php');
$r->get('/inscricao',   fn() => require __DIR__ . '/../../../public/views/Inscricoes/inscricao.php');
$r->get('/chaveamento', fn() => require __DIR__ . '/../../../public/views/Chaveamento/chaveamento.php');
$r->get('/mesario',     fn() => require __DIR__ . '/../../../public/views/Mesario/mesario.php');
$r->get('/relatorios',  fn() => require __DIR__ . '/../../../public/views/Relatorios/relatorios.php');
