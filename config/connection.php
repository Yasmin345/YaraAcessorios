<?php
    namespace config;

    use PDO;
    use PDOException;
    class Connection{
        private $name = 'root';
        private $password = '';
        private $hostname = 'localhost';
        private $db_name = 'db_acessorios';
        public $conn;

        // pegando a conexão
        public function getConnection(){
            // tratativa de erro
            try{
                // utilizando PDO
                $this->conn = new PDO("mysql:host=$this->hostname;dbname=$this->db_name", $this->name, $this->password);
                $this->conn->exec("set names utf8");
            }catch(PDOException $error){
                echo "Erro: ".$error->getMessage();
            }
            return $this->conn;
        }
    }
?>