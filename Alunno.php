<?php
class Alunno{
    private $nome;
    private $cognome;
    private $eta;
    private $cf;

    function __construct($nome, $cognome, $eta, $cf){
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->eta = $eta;
        $this->cf = $cf;
    }

    function getNome(){
        return $this->nome;
    }

    function getCognome(){
        return $this->cognome;
    }

    function getEta(){
        return $this->eta;
    }

    function getCF(){
        return $this->cf;
    }

    function toString(){
        return $this->nome . ", " . $this->cognome . ", " . $this->eta . ", " . $this->cf;
    }
}

?>