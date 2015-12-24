<?php

/* Definição da classe Pessoa */
class Pessoa {

    /* Atributos */
    public $nome;
    public $idade;

    /* Construtor */
    public function __construct($nome,$idade)
    {
        /* Atribuição de valores para os atributos da classe */
        $this->nome = $nome;
        $this->idade = $idade;
    }

    /* Métodos */
    public function correr($km){

        echo $this->nome." está correndo!";
        for($i = 0; $km > $i; $i++){
            echo ".";
        }
        echo $this->nome." terminou de correr!";
    }

}






