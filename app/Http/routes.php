<?php

$app->get('/', function () use ($app){
    return $app->version();
});

$app->group([
    'prefix' => 'api/clientes',
    'namespace' => 'App\Http\Controllers'
], function () use ($app){
    $app->get('', 'ClientesController@index')
});
