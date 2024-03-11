<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';

include("./controllers/AlunniApiController.php");
include("./controllers/AlunniController.php");
include("./controllers/IndexController.php");

$app = AppFactory::create();

$app->get('/', "IndexController:index");

$app->get('/alunni', "AlunniController:index");

$app->get('/alunni/{codice}', "AlunniController:getAlunno");

$app->get("/api/alunni","AlunniApiController:getJsonClasse");

$app->get("/api/alunni/{codice}","AlunniApiController:getJsonAlunno");

$app->run();

?>
