<?php
namespace SON\Cliente\Types;

use SON\Cliente\ClienteAbstract;

class PessoaJuridicaType extends ClienteAbstract
{
    private $cnpj;

    public function __construct($nome, $telefone, $endereco,$cnpj,$id = null)
    {
        parent::__construct($nome, $telefone, $endereco,$id);
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