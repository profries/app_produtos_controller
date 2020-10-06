<?php
use Slim\Factory\AppFactory;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

include_once('ProdutoController.php');

require __DIR__ . '/vendor/autoload.php';

$app = AppFactory::create();

$app->group('/api/produtos', function($app){
    $app->get('', 'ProdutoController:listar');
    $app->get('/search','ProdutoController:buscarPorQuery');
    $app->post('', 'ProdutoController:inserir');
    $app->get('/{id}', 'ProdutoController:buscarPorId');    
    $app->put('/{id}', 'ProdutoController:atualizar');
    $app->delete('/{id}', 'ProdutoController:deletar');
});

$app->run();
?>