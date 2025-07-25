<?php
    namespace routes;

    class Routes{
        private $routes = [];

        public function add($method,$path,$action){
            $this->routes[]=[
                'method'=>$method,
                'path'=>$path,
                'action'=>$action
            ];
            error_log("Rota registrada");
        }

        public function handleRequest(){
            $method = $_SERVER['REQUEST_METHOD'];
        }
    }

    
    
?>