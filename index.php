<?php
require_once("rotas.php");
$path = verificaRotas(); ?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gestão de Clientes</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Estilo alterado da pagina -->
    <link href="css/estilo.css" rel="stylesheet">

  </head>
  <body>

      <?php require_once("menu.php") ?>

    <div class="row">

      <?php
          require_once($path);
        ?>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


    <?php require_once("rodape.php") ?>
  </body>
</html>