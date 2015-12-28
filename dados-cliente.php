<?php
require_once ("classes/Cliente.php");

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
        echo "<li>CPF: {$cliente->getCpf()}</li>";
        echo "</ul>";
        echo "<a href='home'>Voltar para a listagem de clientes</a>";
    }


}