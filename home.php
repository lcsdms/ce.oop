<h2>Bem vindo a Página Inicial da gestão de clientes!</h2>

<?php

use SON\Cliente\ClienteAbstract;
use SON\Cliente\Types\PessoaFisicaType;
use SON\Cliente\Types\PessoaJuridicaType;
use SON\Cliente\Utils\ClienteUtils;

function verificaTipoCliente($cliente){
    if(is_a($cliente,'\SON\Cliente\Types\PessoaFisicaType')){
        return "PF";
    }else{
        return "PJ";
    }
}

$array = ClienteUtils::cria10Clientes();

if (isset($_GET['order'])) {
    if ($_GET['order'] == "asc") {
        ksort($array);
    } elseif ($_GET['order'] == "desc") {
        krsort($array);
    }
}

function listaClientes($arrayClientes)
{
    foreach ($arrayClientes as $key => $cliente) {
        $tipo = verificaTipoCliente($cliente);
        echo "Cliente {$key} - <a href='dados-cliente?id={$key}'>{$cliente->getNome()}</a> - Tipo:{$tipo}<br>";
    }
}

?>

<h3>Listagem de Clientes</h3>
<div class="ordenacao">
    <p>Ordenação de clientes</p>
    <a href="home?order=asc">Ordem Crescente</a> <a href="home?order=desc">Ordem Decrescente</a>
</div>
<div class="lista_clientes">
    <?php listaClientes($array); ?>
</div>