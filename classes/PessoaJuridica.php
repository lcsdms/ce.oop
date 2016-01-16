<?php

class PessoaJuridica extends Cliente
{
    private $cnpj;

    public function __construct($nome, $telefone, $endereco,$cnpj)
    {
        parent::__construct($nome, $telefone, $endereco);
        $this->cnpj=$cnpj;
    }

    public function getCnpj()
    {
        return $this->cnpj;
    }

    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
    }
}