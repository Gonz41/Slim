<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';

include("Classe.php");
include("Alunno.php");

$app = AppFactory::create();



$app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Hello world!");
    return $response;
});

$app->get('/alunni', function (Request $request, Response $response, $args) {
    $c5DIA = new Classe("5DIA",array(new Alunno("Alessandro","Gonzalez",20,"cfag"), new Alunno("Matteo","Falli",17,"cfmf"), new Alunno("Alessio","Pitone",18,"cfap")));
    $response->getBody()->write($c5DIA->toString());
    return $response;
});

$app->get('/alunni/{codice}', function (Request $request, Response $response, $args) {
    $c5DIA = new Classe("5DIA",array(new Alunno("Alessandro","Gonzalez",20,"cfag"), new Alunno("Matteo","Falli",17,"cfmf"), new Alunno("Alessio","Pitone",18,"cfap")));
    $response->getBody()->write($c5DIA->getPersona($args["codice"]));
    return $response;
});

$app->run();
