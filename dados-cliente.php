<?php
require_once ("classes/Cliente.php");
require_once("classes/PessoaFisica.php");
require_once("classes/PessoaJuridica.php");

if(isset($_GET['id'])){
    $idcliente = $_GET['id'];

    $arrayClientes = Cliente::cria10Clientes();

    if(array_key_exists($idcliente,$arrayClientes)){
        $cliente = $arrayClientes[$idcliente];
        echo "<h2>Dados do Cliente:</h2>";
        echo "<ul>";
        echo "<li>Nome: {$cliente->getNome()}</li>";
        echo "<li>Telefone: {$cliente->getTelefone()}</li>";
        echo "<li>Endereço: {$cliente->getEndereco()}</li>";
        //TODO fazer verificação de get CPF ou CNPJ de acordo com o tipo de cliente
        echo "<li>CPF: {$cliente->getCpf()}</li>";
        echo "</ul>";
        echo "<a href='home'>Voltar para a listagem de clientes</a>";
    }


}