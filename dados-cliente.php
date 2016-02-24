<?php

use SON\Cliente\ClienteAbstract;
use SON\Cliente\Types\PessoaFisicaType;
use SON\Cliente\Types\PessoaJuridicaType;

if(isset($_GET['id'])){
    $idcliente = $_GET['id'];

    $clienteps = new \SON\PDO\ClientePersist(\SON\PDO\PdoFactory::criaPDO());
    $cliente = $clienteps->buscaClientePorId($idcliente);

    if($cliente){
        echo "<h2>Dados do Cliente:</h2>";
        echo "<ul>";
        echo "<li>Nome: {$cliente->getNome()}</li>";
        echo "<li>Telefone: {$cliente->getTelefone()}</li>";
        echo "<li>Endereço: {$cliente->getEndereco()}</li>";
        if(is_a($cliente,'\SON\Cliente\Types\PessoaFisicaType')){
            echo "<li>CPF: {$cliente->getCpf()}</li>";
        }else{
            echo "<li>CNPJ: {$cliente->getCnpj()}</li>";
        }

        echo "</ul>";
        echo "<a href='home'>Voltar para a listagem de clientes</a>";
    }else{
        echo "Cliente não existe!";
    }


}