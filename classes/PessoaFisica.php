<?php

class PessoaFisica extends Cliente
{
    private $cpf;

    public function __construct($nome, $telefone, $endereco,$cpf)
    {
        parent::__construct($nome, $telefone, $endereco);
        $this->cpf = $cpf;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }
}