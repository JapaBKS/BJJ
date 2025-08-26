<?php

use App\Core\Router\Router;

/** @var Router $r */
$r->get('/painel',            fn() => require __DIR__ . '/../../../public/views/Painel/painel.php');
$r->get('/login',       fn() => require __DIR__ . '/../../../public/views/Autenticacao/login.php');
$r->get('/perfil',      fn() => require __DIR__ . '/../../../public/views/PerfilAtleta/perfil.php');
$r->get('/academias',   fn() => require __DIR__ . '/../../../public/views/Academias/academias.php');
$r->get('/competicoes', fn() => require __DIR__ . '/../../../public/views/Competicoes/competicoes.php');
$r->get('/inscricao',   fn() => require __DIR__ . '/../../../public/views/Inscricoes/inscricao.php');
$r->get('/chaveamento', fn() => require __DIR__ . '/../../../public/views/Chaveamento/chaveamento.php');
$r->get('/mesario',     fn() => require __DIR__ . '/../../../public/views/Mesario/mesario.php');
$r->get('/relatorios',  fn() => require __DIR__ . '/../../../public/views/Relatorios/relatorios.php');
$r->get('/categorias', fn() => require __DIR__ . '/../../../public/views/Competicoes/categorias.php');
$r->get('/pesagem', fn() => require __DIR__ . '/../../../public/views/Competicoes/pesagem_uniforme.php');
$r->get('/lutas', fn() => require __DIR__ . '/../../../public/views/Lutas/detalhe.php');
$r->get('/ranking', fn() => require __DIR__ . '/../../../public/views/Ranking/ranking.php');
$r->get('/notificacoes', fn() => require __DIR__ . '/../../../public/views/Notificacoes/notificacoes.php');
$r->get('/historico', fn() => require __DIR__ . '/../../../public/views/PerfilAtleta/historico.php');
$r->get('/', fn()=> require __DIR__.'/../../../public/views/index.php');
