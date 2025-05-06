<?php
require __DIR__ . '/vendor/autoload.php';
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

$app = AppFactory::create();

$app->post('/orders', function (Request $request, Response $response) {
    // TODO: Ajouter une commande
    $response->getBody()->write(json_encode(["message" => "Commande ajoutée"]));
    return $response->withHeader('Content-Type', 'application/json');
});

$app->get('/status', function (Request $request, Response $response) {
    // TODO: Retourner l'état
    $response->getBody()->write(json_encode(["status" => "ok"]));
    return $response->withHeader('Content-Type', 'application/json');
});

$app->post('/control', function (Request $request, Response $response) {
    // TODO: Piloter le processus
    $response->getBody()->write(json_encode(["message" => "Contrôle reçu"]));
    return $response->withHeader('Content-Type', 'application/json');
});

$app->run();