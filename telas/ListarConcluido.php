<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/ListarConcluido.css">
    <title>Listar Concluidos</title>
</head>

<body>

    <section class="secao-concluido">
        <header>
            <h1>Bem-Vindo(a)</h1>
        </header>
        <fieldset>
            <legend>Lista de Concluidos</legend>
            <?php
            session_start();
            if (isset($_SESSION["resultado-concluido"])) {
                echo "<table border='1'>";
                echo "<tr>";
                echo "<td>ID</td>";
                echo "<td>Descrição</td>";
                echo "<td>Data</td>";
                echo "<td>Status</td>";
                echo "</tr>";
                for ($x = 0; $x < sizeof($_SESSION["resultado-concluido"]); $x++) {
                    echo "<tr>";
                    echo "<td>" . $_SESSION["resultado-concluido"][$x]["id"] . "</td>";
                    echo "<td>" . $_SESSION["resultado-concluido"][$x]["descricao"] . "</td>";
                    echo "<td>" . $_SESSION["resultado-concluido"][$x]["data_atividade"] . "</td>";
                    echo "<td>" . $_SESSION["resultado-concluido"][$x]["status_atividade"] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                unset($_SESSION["resultado-concluido"]);
            } else {
                echo "<p> Nenhuma atividade concluida </p>";
            }

            ?>
            <a href="../index.php"><button>Voltar</button></a>
        </fieldset>
    </section>
</body>

</html>