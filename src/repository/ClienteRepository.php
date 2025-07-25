<?php
    namespace src\repository;

    use src\models\Cliente;
    use config\Connection;

    class ClienteRepository{
        public $conn;
        public function __construct(){
            $database =  new Connection();
            $this->conn = $database->getConnection();
        }

        public function save(Cliente $cliente){
            $sql = "INSERT INTO cliente (nomeCliente, emailCliente, telefone, senha)
                    VALUES (:nomeCliente, :emailCliente, :telefone, :senha)";
            $stmt = $this->conn-> prepare($sql);
            return $stmt->execute([
                'nomeCliente'=>$cliente->getNome(),
                'emailCliente'=>$cliente->getEmail(),
                'telefone'=>$cliente->getTelefone(),
                'senha'=>$cliente->getSenha()
            ]);
        }
    }
?>