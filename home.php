<h2>Bem vindo a Página Inicial da gestão de clientes!</h2>

<?php require_once("classes/Cliente.php");


$array = Cliente::cria10Clientes();

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
        echo "Cliente {$key} - <a href='dados-cliente?id={$key}'>{$cliente->getNome()}</a><br>";
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