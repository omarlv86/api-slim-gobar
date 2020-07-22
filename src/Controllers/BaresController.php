<?php namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Controllers\BaseController;

class BaresController extends BaseController{
    public function getAll($request, $response, $args){
        
        $configuraciones = $this->container->get('db_settings');

        echo '<pre>';
        var_dump($configuraciones);
        echo '</pre>';

        $response->getBody()->write("Hello world Bares!");
        return $response;
    }
}

?>