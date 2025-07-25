<?php
    namespace src\services;
    use src\repository\ClienteRepository;
    use src\models\Cliente;

    class ClienteService{
        private $repository;
        public function __construct(){
            $this->repository = new ClienteRepository();
        }

        public function criar($nomeCliente, $emailCliente, $telefone, $senha){
            $hash = password_hash($senha, PASSWORD_ARGON2ID);
            $cliente = new Cliente($nomeCliente, $emailCliente, $telefone, $hash);
            return $this->repository->save($cliente);
        }
    }
?>