<?php namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Controllers\BaseController;

class BaresController extends BaseController{
    public function getAll($request, $response, $args){
        
        $pdo = $this->container->get('db');

        $query = $pdo->query("SELECT * FROM bar");
        
        //echo '<pre>';
        //var_dump($query->fetchAll());
        //echo '</pre>';

        $response->getBody()->write(json_encode($query->fetchAll()));
        return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
    }
}

?>