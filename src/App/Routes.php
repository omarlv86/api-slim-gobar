<?php

use Slim\Routing\RouteCollectorProxy;

$app->group('/apiv1', function(RouteCollectorProxy $group){
    $group->get('/bares', 'App\Controllers\BaresController:getAll');
});

//$app->get('/', function (Request $request, Response $response, $args) {
//    $response->getBody()->write("Hello world!");
//    return $response;
//});

$app->group('/', function(RouteCollectorProxy $group){
    $group->get('', 'App\Controllers\BaresController:inicio');
});

?>