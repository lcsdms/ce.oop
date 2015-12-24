<?php
/* Função para verificação de rotas com built-in server */
function verificaRotas(){
    /* Verificação de rotas */
  /*Pega as informações da URL*/
 $rota = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
 /* Passa o path da URL para validação, removendo a primeira barra */
 $path = preg_replace("/^\/{1}/","",$rota['path']);

 if ($path == ""){
   $path = "home.php";
 }else{
	    $path .= ".php";

	    if(!file_exists($path)){
	          http_response_code(404);
	          $path = "404.php";
	    }
	}
 return $path;
}
 ?>