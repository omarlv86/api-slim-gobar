<?php

use Slim\Routing\RouteCollectorProxy;

$app->group('/apiv1', function(RouteCollectorProxy $group){
    $group->get('/bares', 'App\Controllers\BaresController:getAll');
});

?>