<?php

if (isset($_POST)) {
    $opcao_menu = $_POST["opcao"];

    if ($opcao_menu == "cadastrar-atividade") {
        header("location: ../telas/CadastrarAtividade.php");
    }

    else if($opcao_menu == "listar-atividade"){
        header("location: ListarAtividade.php");
    }

    else if($opcao_menu == "listar-pendente"){
        header("location: ListarPendente.php");
    }

    else if($opcao_menu == "listar-concluido"){
        header("location: ListarConcluido.php");
    }

    else if($opcao_menu == "concluir-atividade"){
        header("location: ConcluirAtividade.php");
    }

    else if($opcao_menu == "remover-atividade"){
        header("location: ../telas/RemoverAtividade.php");
    }
}
