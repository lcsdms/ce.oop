<?php

class Cliente
{

    private $nome;
    private $telefone;
    private $endereco;
    private $cpf;

    public function __construct($nome,$telefone,$endereco,$cpf)
    {
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->endereco = $endereco;
        $this->cpf = $cpf;
    }

    /**
     * @return array
     * retorna array com 10 objetos clientes
     */
    public static function cria10Clientes(){

        $cliente1 = new Cliente("Andre","1234-5678","Rua 1 do Brasil","456.654.652.31");
        $cliente2 = new Cliente("Paulo","1234-5678","Rua 2 do Brasil","456.654.652.31");
        $cliente3 = new Cliente("Marina","1234-5678","Rua 3 do Brasil","456.654.652.31");
        $cliente4 = new Cliente("Lucas","1234-5678","Rua 4 do Brasil","456.654.652.31");
        $cliente5 = new Cliente("Debora","1234-5678","Rua 5 do Brasil","456.654.652.31");
        $cliente6 = new Cliente("Scofield","1234-5678","Rua 6 do Brasil","456.654.652.31");
        $cliente7 = new Cliente("Mark","1234-5678","Rua 7 do Brasil","456.654.652.31");
        $cliente8 = new Cliente("Chloe Price","1234-5678","Rua 8 do Brasil","456.654.652.31");
        $cliente9 = new Cliente("Jefferson","1234-5678","Rua 9 do Brasil","456.654.652.31");
        $cliente10 = new Cliente("Maxine Caulfield","1234-5678","Rua 10 do Brasil","456.654.652.31");

        $arrayClientes = [$cliente1,$cliente2,$cliente3,$cliente4,$cliente5,$cliente6,$cliente7,$cliente8,$cliente9,$cliente10];

        return $arrayClientes;
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
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param mixed $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }



}