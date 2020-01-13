<?php

    include_once("../classes/Atividade.php");
    include_once("../conexao/Conexao.php");

     class OperacoesBanco{

        private $connection;
        private $resultado;
        private $statement;
        private $sql;
        private $ob_con;

        public function cadastrarAtividade(Atividade $a1){
            $atividade = $a1;
            $this->ob_con = new Conexao;
            $this->connection = $this->ob_con->abrirConexao();
            $this->sql = "INSERT INTO atividade(id,descricao,data_atividade,status_atividade) values (?,?,?,?)";
            $this->statement = $this->connection->prepare($this->sql);
            $this->statement->bindValue(1, null);
            $this->statement->bindValue(2, $atividade->getDescricao());
            $this->statement->bindValue(3, $atividade->getData());
            $this->statement->bindValue(4, "Pendente");
            $this->statement->execute();
            $this->resultado = $this->statement->rowCount();

            if($this->resultado == 0){
                session_start();
                $_SESSION["erro-cadastro"] = "Não foi possível inserir a atividade, tente novamente";
                header("location: ../telas/CadastrarAtividade.php");
            }
            else{
                session_start();
                $_SESSION["sucesso-cadastro"] = "Atividade cadastrada com sucesso";
                header("location: ../telas/CadastrarAtividade.php");
            }
        }

        public function listarAtividades(){
            session_start();
            $this->ob_con = new Conexao;
            $this->connection = $this->ob_con->abrirConexao();
            $this->sql = "SELECT * FROM atividade";
            $this->statement = $this->connection->prepare($this->sql);
            $this->statement->execute();
            $this->resultado = $this->statement->fetchAll();
        
            if(sizeof($this->resultado) > 0){
                $_SESSION["resultado"] = $this->resultado;
            }

            header("location: ../telas/ListarAtividade.php");
        }

        public function listarPendentes(){
            session_start();
            $this->ob_con = new Conexao;
            $this->connection = $this->ob_con->abrirConexao();
            $this->sql = "SELECT * FROM atividade WHERE status_atividade='Pendente'";
            $this->statement = $this->connection->prepare($this->sql);
            $this->statement->execute();
            $this->resultado = $this->statement->fetchAll();

            if(sizeof($this->resultado) > 0){
                $_SESSION["resultado-pendente"] = $this->resultado;
            }
            
            header("location: ../telas/ListarPendente.php");
        }

        public function listarConcluidos(){
            session_start();
            $this->ob_con = new Conexao;
            $this->connection = $this->ob_con->abrirConexao();
            $this->sql = "SELECT * FROM atividade WHERE status_atividade='Concluido'";
            $this->statement = $this->connection->prepare($this->sql);
            $this->statement->execute();
            $this->resultado = $this->statement->fetchAll();

            if(sizeof($this->resultado) > 0){
                $_SESSION["resultado-concluido"] = $this->resultado;
            }

            header("location: ../telas/ListarConcluido.php");
        }

        public function concluirAtividade(){
            session_start();
            $this->ob_con = new Conexao;
            $this->connection = $this->ob_con->abrirConexao();
            $this->sql = "SELECT * FROM atividade WHERE status_atividade='Pendente'";
            $this->statement = $this->connection->prepare($this->sql);
            $this->statement->execute();
            $this->resultado = $this->statement->fetchAll();

            if(sizeof($this->resultado) > 0){
                $_SESSION["atividade-pendente"] = $this->resultado;
            }
            
            header("location: ../telas/ConcluirAtividade.php");
        }

        public function AtualizarAtividade(Atividade $a1){
            $atividade = $a1;
            session_start();
            $this->ob_con = new Conexao;
            $this->connection = $this->ob_con->abrirConexao();
            $this->sql = "UPDATE atividade set status_atividade='Concluido' WHERE id=?";
            $this->statement = $this->connection->prepare($this->sql);
            $this->statement->bindValue(1, $atividade->getId());
            $this->statement->execute();
        }

        public function removerAtividades(Atividade $a1){
            $atividade = $a1;
            session_start();
            $this->ob_con = new Conexao;
            $this->connection = $this->ob_con->abrirConexao();
            $this->sql = "DELETE FROM atividade WHERE id=?";
            $this->statement = $this->connection->prepare($this->sql);
            $this->statement->bindValue(1, $atividade->getId());
            $this->statement->execute();
            $this->resultado = $this->statement->rowCount();

            if($this->resultado == 0){
                $_SESSION["erro-exclusao"] = "Erro ao excluir, atividade não encontrada, tente novamente";
                header("location: ../telas/RemoverAtividade.php");
            }
            else{
                $_SESSION["sucesso-exclusao"] = "Atividade excluida com sucesso";
                header("location: ../telas/RemoverAtividade.php");
            }
        }
    }