<?php
namespace SON\PDO;

class PdoFactory
{

    public static function criaPDO(){
        $dbconfig = array(
            'dbinfo' => array(
                'host' => 'localhost',
                'dbname' => 'pdo',
                'user' => 'root',
                'password' => 'root',
            )
        );
        try{
            if (!isset($dbconfig['dbinfo'])){
                throw new \InvalidArgumentException("Configuração de banco de dados não existe!");
            }else{
                $host = (isset($dbconfig['dbinfo']['host'])) ? $dbconfig['dbinfo']['host'] : null;
                $dbname = (isset($dbconfig['dbinfo']['dbname'])) ? $dbconfig['dbinfo']['dbname'] : null;
                $user = (isset($dbconfig['dbinfo']['user'])) ? $dbconfig['dbinfo']['user'] : null;
                $password = (isset($dbconfig['dbinfo']['password'])) ? $dbconfig['dbinfo']['password'] : null;
                return new \PDO("mysql:host={$host};dbname={$dbname}",$user,$password);
            }
        }catch(\PDOException $e) {
            echo "Erro de conexão com o banco de dados! Erro Código: ".$e->getCode()."\n";
            echo "Stack trace do erro:".$e->getTraceAsString()."\n";
        }
    }
}