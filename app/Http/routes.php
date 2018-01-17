<?php

print_r($router);
die();

$router->get('/', function () use ($router) {
    return $router->app->version();

});
$router->get('/api/clientes/', ['uses' => 'ClientesController@index']);
/*

$router->get('/', ['uses' => 'ClientesController@index']);


$router->get('/', ['uses' => 'ClientesController@index']);

$router->group([
    'prefix' => 'api/clientes',
    'namespace' => 'App\Http\Controllers'
], function () use ($router){
    $router->get('', 'ExampleController@index');
});

*/