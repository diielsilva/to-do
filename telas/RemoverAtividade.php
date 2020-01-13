<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/RemoverAtividade.css">
    <title>Remover Atividade</title>
</head>

<body>

    <section class="secao-remocao">
        <header>
            <h1>Bem-Vindo(a)</h1>
        </header>
        <fieldset>
            <legend>Remover Atividade</legend>
            <form action="../controle/RemoverAtividade.php" method="POST">
                <p>Insira o ID:</p>
                <input type="number" name="id-remocao" required>
                <input type="submit" value="Remover">
            </form>
            <?php

            session_start();
            if (isset($_SESSION["erro-exclusao"])) {
                echo "<p>" . $_SESSION["erro-exclusao"] . "</p>";
                unset($_SESSION["erro-exclusao"]);
            } else if (isset($_SESSION["sucesso-exclusao"])) {
                echo "<p>" . $_SESSION["sucesso-exclusao"] . "</p>";
                unset($_SESSION["sucesso-exclusao"]);
            }

            ?>
            <a href="../index.php"><button>Voltar</button></a>
        </fieldset>
    </section>
</body>

</html>