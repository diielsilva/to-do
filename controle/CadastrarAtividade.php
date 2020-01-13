<?php

    include_once("../classes/Atividade.php");
    include_once("../op_banco/OperacoesBanco.php");

    if(isset($_POST)){
        session_start();
        $atividade = new Atividade;
        $op_banco = new OperacoesBanco;
        $atividade->setDescricao($_POST["descricao"]);
        $atividade->setData($_POST["data"]);
        $op_banco->cadastrarAtividade($atividade);
    }