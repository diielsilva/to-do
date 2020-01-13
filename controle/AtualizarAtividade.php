<?php
include_once("../classes/Atividade.php");
include_once("../op_banco/OperacoesBanco.php");

session_start();
$atividade = new Atividade;
$op_banco = new OperacoesBanco;
if (isset($_POST)) {
    $resultado = $_POST["concluir-atividade"];

    if (sizeof($resultado) > 0) {
        /*percorra a variavel resultado(que possui as posiçoes do array que se deseja editar)*/
        for ($x = 0; $x < sizeof($resultado); $x++) {
            /*para cada posição de X, o id do objeto atividade vai receber o id que está armazenado na session[atividade-pendente]
            [valor que esta armazenado na variavel resultado no indice x]*/
            $atividade->setId($_SESSION["atividade-pendente"][$resultado[$x]]["id"]);
            $op_banco->AtualizarAtividade($atividade);
        }
        $_SESSION["editado"] = "Atividade(s) concluidas com sucesso";
        header("location: ../telas/ConcluirAtividade.php");
    } else {
        $_SESSION["erro-editado"] = "Erro ao concluir atividades, tente novamente";
        header("location: ../telas/ConcluirAtividade.php");
    }
} else {
    $_SESSION["erro-editado"] = "Erro ao concluir atividades, tente novamente";
    header("location: ../telas/ConcluirAtividade.php");
}
