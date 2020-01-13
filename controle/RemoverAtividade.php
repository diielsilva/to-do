<?php
    include_once("../classes/Atividade.php");
    include_once("../op_banco/OperacoesBanco.php");

    $atividade = new Atividade;
    $atividade->setId($_POST["id-remocao"]);
    $op_banco = new OperacoesBanco;
    $op_banco->removerAtividades($atividade);