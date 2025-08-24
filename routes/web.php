<?php

/** @var \App\Core\Router $router */
$router->get('/', 'CompeticaoController@index');
$router->get('/login', 'AuthController@showLogin');
$router->post('/login', 'AuthController@login');
$router->get('/dashboard', 'CompeticaoController@index');

// Atletas (cadastro mínimo)
$router->get('/atletas/create', 'AtletaController@create');
$router->post('/atletas', 'AtletaController@store');

// Inscrições (RF4/RF5)
$router->get('/inscricoes/nova', 'InscricaoController@create');
$router->post('/inscricoes', 'InscricaoController@store');

// Pesagem (RF6)
$router->get('/pesagens/nova', 'PesagemController@create');
$router->post('/pesagens', 'PesagemController@store');

$router->get('/chaveamentos/gerar/{categoria_id}', 'ChaveamentoController@gerar');
$router->get('/chaveamentos/{categoria_id}', 'ChaveamentoController@show');