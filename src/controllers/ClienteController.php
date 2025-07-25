<?php
    namespace src\controllers;
    use src\services\ClienteService;
    
    class ClienteController{
        private $service;
        public function __construct(){
            $this->service = new ClienteService();
        }

        public function save(){
            // recebe os dados do formulario
            $nomeCliente = $_POST['nomeCliente'] ?? null;
            $emailCliente = $_POST['emailCliente'] ?? null;
            $telefone = $_POST['telefoneCliente'] ?? null;
            $senha = $_POST ['senha'] ?? null;

            if(!$nomeCliente || !$emailCliente || !$telefone || !$senha){
                echo "Preencha todos os dados";
                return;
            }

            $resultado = $this->service->criar($nomeCliente, $emailCliente, $telefone, $senha);
            if($resultado){
                echo "Cliente cadastrado com sucesso";
            }else{
                echo "Erro ao cadastrar cliente";
            }
        }
    }
?>