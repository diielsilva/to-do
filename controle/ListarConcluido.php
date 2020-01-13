<?php
    include_once("../op_banco/OperacoesBanco.php");
    $op_banco = new OperacoesBanco;
    $op_banco->listarConcluidos();