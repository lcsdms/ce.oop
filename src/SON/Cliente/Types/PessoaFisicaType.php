<?php
namespace SON\Cliente\Types;

use SON\Cliente\ClienteAbstract;

class PessoaFisicaType extends ClienteAbstract
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