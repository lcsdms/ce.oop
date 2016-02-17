<?php

use SON\PDO\PdoFactory;
use SON\Cliente\Types\PessoaFisicaType;
use SON\Cliente\Types\PessoaJuridicaType;


$pdo = PdoFactory::criaPDO();

echo "Dropando tabelas <br>";
$pdo->query("DROP TABLE IF EXISTS clientes");

$pdo->query("CREATE TABLE clientes (
					id INT NOT NULL AUTO_INCREMENT,
					nome VARCHAR(45) CHARACTER SET 'utf8' NOT NULL,
					telefone VARCHAR(13) CHARACTER SET 'utf8' NOT NULL,
					endereco VARCHAR(1000) CHARACTER SET 'utf8' NOT NULL,
					documento VARCHAR(15) CHARACTER SET 'utf8' NOT NULL,
					tipo_cliente VARCHAR(2) CHARACTER SET 'utf8' NOT NULL,
					PRIMARY KEY (id)
					)");

echo "Criada tabela de clientes com sucesso! <br>";

echo "Inserindo registros na base de dados.<br>";

try {
$clientesGravacao = new \SON\PDO\ClientePersist($pdo);

$clientesGravacao->persist(new PessoaFisicaType("Andre","1234-5678","Rua 1 do Brasil","456.654.652.31","123.456.789-7"));
$clientesGravacao->persist(new PessoaFisicaType("Paulo","1234-5678","Rua 2 do Brasil","456.654.652.31","123.456.789-7"));
$clientesGravacao->persist(new PessoaFisicaType("Marina","1234-5678","Rua 3 do Brasil","456.654.652.31","123.456.789-7"));
$clientesGravacao->persist(new PessoaFisicaType("Lucas","1234-5678","Rua 4 do Brasil","456.654.652.31","123.456.789-7"));
$clientesGravacao->persist(new PessoaFisicaType("Debora","1234-5678","Rua 5 do Brasil","456.654.652.31","123.456.789-7"));
$clientesGravacao->persist(new PessoaJuridicaType("Scofield","1234-5678","Rua 6 do Brasil","456.654.652.31","123.456.789-7"));
$clientesGravacao->persist(new PessoaJuridicaType("Mark","1234-5678","Rua 7 do Brasil","456.654.652.31","123.456.789-7"));
$clientesGravacao->persist(new PessoaJuridicaType("Chloe Price","1234-5678","Rua 8 do Brasil","456.654.652.31","123.456.789-7"));
$clientesGravacao->persist(new PessoaJuridicaType("Jefferson","1234-5678","Rua 9 do Brasil","456.654.652.31","123.456.789-7"));
$clientesGravacao->persist(new PessoaJuridicaType("Maxine Caulfield","1234-5678","Rua 10 do Brasil","456.654.652.31","123.456.789-7"));

$clientesGravacao->flush();

    echo "Registros inseridos com sucesso. <br>";

}catch(Exception $e){
    echo "Ocorreu um erro ao tentar realizar a gravação dos clientes no banco de dados. ",$e->getMessage();
}
