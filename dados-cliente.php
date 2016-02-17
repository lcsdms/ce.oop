<?php

use SON\Cliente\ClienteAbstract;
use SON\Cliente\Types\PessoaFisicaType;
use SON\Cliente\Types\PessoaJuridicaType;
use SON\Cliente\Utils\ClienteUtils;

if(isset($_GET['id'])){
    $idcliente = $_GET['id'];

    $arrayClientes = ClienteUtils::cria10Clientes();

    if(array_key_exists($idcliente,$arrayClientes)){
        $cliente = $arrayClientes[$idcliente];
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
    }


}