<?php

class PessoaJuridica extends Cliente
{
    private $cnpj;

    //TODO Incluir cnpj no construct da pessoa Juridica
    public function __construct($nome, $telefone, $endereco)
    {
        parent::__construct($nome, $telefone, $endereco);
    }
}