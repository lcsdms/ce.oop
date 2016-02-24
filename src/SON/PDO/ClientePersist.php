<?php


namespace SON\PDO;


use SON\Cliente\ClienteAbstract;
use SON\Cliente\Types\PessoaFisicaType;
use SON\Cliente\Types\PessoaJuridicaType;

class ClientePersist
{
    private $pdo;
    private $clientes;

    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function buscaTodosClientes(){
        $query = "SELECT * FROM CLIENTES";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        $arrayClientesPdo = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        if(count($arrayClientesPdo) > 0){
            foreach($arrayClientesPdo as $cliente){
                if($cliente["tipo_cliente"] == "PF"){
                    $clientes[] = new PessoaFisicaType($cliente["nome"],$cliente["telefone"],$cliente["endereco"],$cliente["documento"],$cliente["id"]);
                }else{
                    $clientes[] = new PessoaJuridicaType($cliente["nome"],$cliente["telefone"],$cliente["endereco"],$cliente["documento"],$cliente["id"]);
                }
            }
        }
        return $clientes;
    }

    public function buscaClientePorId($idCliente){
        $query = "SELECT * FROM CLIENTES WHERE ID = :idCliente";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindValue(":idCliente",$idCliente);
        $stmt->execute();
        $clientePDO = $stmt->fetch(\PDO::FETCH_ASSOC);
        if(count($clientePDO > 0)){
            if($clientePDO["tipo_cliente"] == "PF") {
                return new PessoaFisicaType($clientePDO["nome"], $clientePDO["telefone"], $clientePDO["endereco"], $clientePDO["documento"]);
            }else{
                return new PessoaJuridicaType($clientePDO["nome"], $clientePDO["telefone"], $clientePDO["endereco"], $clientePDO["documento"]);
            }
        }
    }

    public function persist(ClienteAbstract $cliente){
        $this->clientes[] = $cliente;
    }

    private function bindingClientes(\PDOStatement $statement, ClienteAbstract $cliente){
        $statement->bindValue(":nome", $cliente->getNome());
        $statement->bindValue(":telefone",$cliente->getTelefone());
        $statement->bindValue(":endereco",$cliente->getEndereco());
        if($cliente instanceof PessoaFisicaType){
            $statement->bindValue(":documento", $cliente->getCpf());
            $statement->bindValue(":tipo_cliente", "PF");
        }else{
            $statement->bindValue(":documento", $cliente->getCnpj());
            $statement->bindValue(":tipo_cliente", "PJ");
        }
    }

    public function flush(){

        if(count($this->clientes) > 0){
            $query = "INSERT INTO CLIENTES (NOME,TELEFONE,ENDERECO,DOCUMENTO,TIPO_CLIENTE) VALUES (:nome,:telefone,:endereco,:documento, :tipo_cliente)";

            $stmt = $this->pdo->prepare($query);

                foreach ($this->clientes as $cliente) {
                    $this->bindingClientes($stmt , $cliente);
                    $stmt->execute();
                }
        }else{
            throw new \InvalidArgumentException('Não foram incluidos objetos do tipo Cliente na lista para gravação no banco de dados');
        }
    }
}