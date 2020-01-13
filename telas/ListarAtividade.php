<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/ListarAtividade.css">
    <title>Listar Atividades</title>
</head>

<body>

    <section class="secao-listar">
        <header>
            <h1>Bem-Vindo(a)</h1>
        </header>
        <fieldset>
            <legend>Atividades</legend>

            <?php
            session_start();
            if (isset($_SESSION["resultado"])) {
                echo "<table border='1'>";
                echo "<tr>";
                echo "<td>ID</td>";
                echo "<td>Descrição</td>";
                echo "<td>Data</td>";
                echo "<td>Status</td>";
                echo "</tr>";

                for ($x = 0; $x < sizeof($_SESSION["resultado"]); $x++) {
                    echo "<tr>";
                    echo "<td>" . $_SESSION["resultado"][$x]["id"] . "</td>";
                    echo "<td>" . $_SESSION["resultado"][$x]["descricao"] . "</td>";
                    echo "<td>" . $_SESSION["resultado"][$x]["data_atividade"] . "</td>";
                    echo "<td>" . $_SESSION["resultado"][$x]["status_atividade"] . "</td>";
                    echo "</td>";
                }

                echo "</table>";
                unset($_SESSION["resultado"]);
            } else {
                echo "<p> Nenhuma atividade registrada, insira uma atividade </p>";
            }
            ?>

            <a href="../index.php"><button>Voltar</button></a>
        </fieldset>
    </section>
</body>

</html>