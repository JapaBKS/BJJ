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

// Mesa do mesário (RF10–RF13)
$router->get('/mesa/{luta_id}', 'MesaController@show');
$router->post('/mesa/{luta_id}/iniciar', 'MesaController@iniciar');

// Endpoints de ação da luta
$router->post('/lutas/{luta_id}/evento', 'MesaController@pontuar');   // ponto/vantagem/punição
$router->get('/lutas/{luta_id}/placar', 'MesaController@placar');     // polling do placar
$router->post('/lutas/{luta_id}/finalizar', 'MesaController@finalizar');

// Pódio (RF14)
$router->get('/podio/gerar/{categoria_id}', 'PodioController@gerar');
$router->get('/podio/{categoria_id}',        'PodioController@show');

// Ranking (RF15)
$router->get('/ranking/{competicao_id}',     'RankingController@show');

// Relatórios (RF16)
$router->get('/relatorios/inscricoes/{competicao_id}', 'RelatorioController@inscricoes');
$router->get('/relatorios/resultados/{competicao_id}', 'RelatorioController@resultados');
