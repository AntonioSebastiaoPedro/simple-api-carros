<?php
namespace App\Controllers;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class CarController
{
    public function getAll(ServerRequestInterface $request, ResponseInterface $response)
    {
        $response->getBody()->write('{ "name": "António Pedro" }');
        return $response->withStatus(200)
                        ->withHeader('Content-Type', 'application/json');
    }
}