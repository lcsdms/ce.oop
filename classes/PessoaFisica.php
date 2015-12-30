<?php

class PessoaFisica extends Cliente
{
    private $cpf;

    //TODO Incluir cnpj no construct da pessoa fisica
    public function __construct($nome, $telefone, $endereco)
    {
        parent::__construct($nome, $telefone, $endereco);
    }
}