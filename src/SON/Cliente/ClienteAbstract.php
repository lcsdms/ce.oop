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

    //TODO Remover este metodo da classe e incluir na aplicacao ao inves da classe
    public static function cria10Clientes(){

        $cliente1 = new PessoaFisicaType("Andre","1234-5678","Rua 1 do Brasil","456.654.652.31","123.456.789-7");
        $cliente2 = new PessoaFisicaType("Paulo","1234-5678","Rua 2 do Brasil","456.654.652.31","123.456.789-7");
        $cliente3 = new PessoaFisicaType("Marina","1234-5678","Rua 3 do Brasil","456.654.652.31","123.456.789-7");
        $cliente4 = new PessoaFisicaType("Lucas","1234-5678","Rua 4 do Brasil","456.654.652.31","123.456.789-7");
        $cliente5 = new PessoaFisicaType("Debora","1234-5678","Rua 5 do Brasil","456.654.652.31","123.456.789-7");
        $cliente6 = new PessoaJuridicaType("Scofield","1234-5678","Rua 6 do Brasil","456.654.652.31","123.456.789-7");
        $cliente7 = new PessoaJuridicaType("Mark","1234-5678","Rua 7 do Brasil","456.654.652.31","123.456.789-7");
        $cliente8 = new PessoaJuridicaType("Chloe Price","1234-5678","Rua 8 do Brasil","456.654.652.31","123.456.789-7");
        $cliente9 = new PessoaJuridicaType("Jefferson","1234-5678","Rua 9 do Brasil","456.654.652.31","123.456.789-7");
        $cliente10 = new PessoaJuridicaType("Maxine Caulfield","1234-5678","Rua 10 do Brasil","456.654.652.31","123.456.789-7");

        $arrayClientes = [$cliente1,$cliente2,$cliente3,$cliente4,$cliente5,$cliente6,$cliente7,$cliente8,$cliente9,$cliente10];

        return $arrayClientes;
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