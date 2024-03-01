<?php 
require __DIR__ . '/../vendor/autoload.php';

use Slim\Factory\AppFactory;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;

$app = AppFactory::create();
$app->addErrorMiddleware(true, true, true);
$app->get('/', function (ServerRequestInterface $request, ResponseInterface $response) {
    $response->getBody()->write('Hello, World');
    $response->withStatus(200);

    return $response;
});
$app->run();