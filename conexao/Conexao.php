<?php

    class Conexao{

        private $conexao;

        public function abrirConexao(){
            try{
                $this->conexao = new PDO("mysql:host=localhost;dbname=todo","diel","45775863");
                return $this->conexao;
            }

            catch(PDOException $ex){
                echo "Não foi possível conectar ao banco de dados";
            }
        }
    }