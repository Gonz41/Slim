<?php
class Classe{
    private $nome;
    private $alunni;

    function __construct($nome, $alunni){
        $this->nome = $nome;
        $this->alunni = $alunni;
    }

    function getNome(){
        return $this->nome;
    }

    function getAlunno($codice){
        foreach($this->alunni as $alunni){
            if($alunni->getCodiceFiscale() === $codice){
                return $alunni->toString();
            }
        }
        return "Alunno non presente";
    }

    function addAlunno($alunno){
        array_push($this->alunni,$alunno);
    }

    function toString(){
        $string = $this->nome . " : ";
        foreach($this->alunni as $alunno){
            $string .= $alunno->toString()." ; ";
        }
        return $string;
    }

}

?>