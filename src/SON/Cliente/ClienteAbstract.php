<?php

namespace SON\Cliente;

use SON\Interfaces\GrauImportanciaClienteInterface;
use SON\Interfaces\EnderecoCobrancaInterface;

abstract class ClienteAbstract implements GrauImportanciaClienteInterface,EnderecoCobrancaInterface
{
    private $nome;
    private $telefone;
    private $endereco;
    private $enderecoCobranca;
    private $grauimportancia;

    public function __construct($nome,$telefone,$endereco)
    {
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->endereco = $endereco;
    }

    public function classificaCliente($nivelGrau){
        if($nivelGrau >= 0 || $nivelGrau <= 5){
           $this->setGrauimportancia($nivelGrau);
        }
    }


    /**
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @param mixed $telefone
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param mixed $endereco
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    /**
     * @return mixed
     */
    public function getGrauimportancia()
    {
        return $this->grauimportancia;
    }

    /**
     * @param mixed $grauimportancia
     */
    public function setGrauimportancia($grauimportancia)
    {
        $this->grauimportancia = $grauimportancia;
    }


    public function setEnderecoCobranca($endereco)
    {
        $this->enderecoCobranca = $endereco;
    }

    public function getEnderecoCobranca()
    {
        return $this->enderecoCobranca;
    }
}