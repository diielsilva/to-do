<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/ConcluirAtividade.css">
    <title>Concluir Atividade</title>
</head>
<body>
    
    <section class="concluir-atividades">
    <header>
        <h1>Bem-Vindo(a)</h1>
    </header>
        <fieldset>
            <legend>Concluir Atividades</legend>
            <?php
                session_start();
                if(isset($_SESSION["atividade-pendente"])){
                    echo "<form action='../controle/AtualizarAtividade.php' method=post> ";
                    echo "<table border='1'>";
                    echo "<tr>";
                    echo "<td>ID</td>";
                    echo "<td>Descrição</td>";
                    echo "<td>Data</td>";
                    echo "<td>Status</td>";
                    echo "<td>Concluir</td>";
                    echo "</tr>";

                    for($x=0;$x<sizeof($_SESSION["atividade-pendente"]);$x++){
                        echo "<tr>";
                        echo "<td>".$_SESSION["atividade-pendente"][$x]["id"]."</td>";
                        echo "<td>".$_SESSION["atividade-pendente"][$x]["descricao"]."</td>";
                        echo "<td>".$_SESSION["atividade-pendente"][$x]["data_atividade"]."</td>";
                        echo "<td>".$_SESSION["atividade-pendente"][$x]["status_atividade"]."</td>";
                        echo "<td><input type=checkbox name='concluir-atividade[]' value=$x></td>";
                        echo "</tr>";
                    }

                    /*o checkbox concluir-atividade vai armazenar as posições do array session[atividade-pendente] que foram selecionadas*/

                    echo "</table>";
                    echo "<input type=submit value='Concluir'>";
                    echo "</form>";
                    if(isset($_SESSION["editado"])){
                        echo "<p>".$_SESSION["editado"]."</p>";
                        unset($_SESSION["editado"]);
                    }
                    else if(isset($_SESSION["erro-editado"])){
                        echo "<p>".$_SESSION["erro-editado"]."</p>";
                        unset($_SESSION["erro-editado"]);
                    }
                }
            ?>
            <a href="../index.php"><button>Voltar</button></a>
        </fieldset>
    </section>
</body>
</html>