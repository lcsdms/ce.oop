<?php
namespace SON\Cliente\Types;

use SON\Cliente\ClienteAbstract;

class PessoaFisicaType extends ClienteAbstract
{
    private $cpf;

    public function __construct($nome, $telefone, $endereco,$cpf, $id = null)
    {
        parent::__construct($nome, $telefone, $endereco,$id);
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