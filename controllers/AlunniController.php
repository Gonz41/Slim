<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

include("../Classe.php");
include("../Alunno.php");

class AlunniApiController{
    function index(Request $request, Response $response, AppFactory $app){
        $c5DIA = new Classe("5DIA",array(new Alunno("Alessandro","Gonzalez",20,"cfag"), new Alunno("Matteo","Falli",17,"cfmf"), new Alunno("Alessio","Pitone",18,"cfap")));
        $response->getBody()->write($c5DIA->toString());
        return $response;
    }

    function getAlunno( Request $request, Response $response, $args){
        $c5DIA = new Classe("5DIA",array(new Alunno("Alessandro","Gonzalez",20,"cfag"), new Alunno("Matteo","Falli",17,"cfmf"), new Alunno("Alessio","Pitone",18,"cfap")));
        $alunno =$c5DIA->getAlunno($args["codice"]);
        if($alunno === null){
            $string = "Alunno inesistente";
        }else{
            $string = $alunno->toString();
        }
        return $response->getBody()->write($string);
    }
}