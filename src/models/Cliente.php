<?php
    namespace src\models;
    
    class Cliente{
        private $nomeCliente;
        private $emailCliente;
        private $telefone;
        private $senha;

        public function __construct($nomeCliente, $emailCliente, $telefone, $senha){
            $this->nomeCliente = $nomeCliente;
            $this->emailCliente = $emailCliente;
            $this->telefone = $telefone;
            $this->senha = $senha;
        }

        public function getNome(){
            return $this->nomeCliente;
        }

        public function getEmail(){
            return $this->emailCliente;
        }

        public function getTelefone(){
            return $this->telefone;
        }

        public function getSenha(){
            return $this->senha;
        }
    }
?>