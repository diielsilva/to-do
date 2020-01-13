<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/ListarPendente.css">
    <title>Listar Pendentes</title>
</head>
<body>
   
    <section class="secao-pendente">
    <header>
        <h1>Bem-Vindo(a)</h1>
    </header>
        <fieldset>
            <legend>Atividades Pendentes</legend>
                
                <?php

                    session_start();
                    if(isset($_SESSION["resultado-pendente"])){
                        echo "<table border='1'>";
                        echo "<tr>";
                        echo "<td>ID</td>";
                        echo "<td>Descrição</td>";
                        echo "<td>Data</td>";
                        echo "<td>Status</td>";
                        echo "</tr>";

                        for($x=0;$x<sizeof($_SESSION["resultado-pendente"]);$x++){
                            echo "<tr>";
                            echo "<td>".$_SESSION["resultado-pendente"][$x]["id"]."</td>";
                            echo "<td>".$_SESSION["resultado-pendente"][$x]["descricao"]."</td>";
                            echo "<td>".$_SESSION["resultado-pendente"][$x]["data_atividade"]."</td>";
                            echo "<td>".$_SESSION["resultado-pendente"][$x]["status_atividade"]."</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                        unset($_SESSION["resultado-pendente"]);
                    }
                    else{
                        echo "<p> Nenhuma atividade pendente</p>";
                    }
                ?>
            
            <a href="../index.php"><button>Voltar</button></a>
        </fieldset>
    </section>
</body>
</html>