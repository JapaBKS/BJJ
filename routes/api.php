<?php
/** @var \App\Core\Router $router */
$router->group(['prefix' => '/api'], function($r) {
    $r->get('/ping', function() {
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode(['ok' => true, 'app' => 'ShiaiFlow', 'ts' => time()]);
    });
});

$router->get('/chaveamentos/{categoria_id}', 'ChaveamentoController@getJson');
