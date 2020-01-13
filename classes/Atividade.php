<?php

    class Atividade{

        private $data;
        private $descricao;
        private $status;
        private $id;

        public function setData($data){
            $this->data = $data;
        }

        public function getData(){
            return $this->data;
        }

        public function setDescricao($descricao){
            $this->descricao = $descricao;
        }

        public function getDescricao(){
            return $this->descricao;
        }

        public function setStatus($status){
            $this->status = $status;
        }

        public function getStatus(){
            return $this->status;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function getId(){
            return $this->id;
        }
    }