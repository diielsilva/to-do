<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" href="../css/CadastrarAtividade.css">
    <title>Cadastrar Atividade</title>
</head>
<body>
    
    <section class="secao-cadastro">
    <header>
        <h1>Bem-Vindo(a)</h1>
    </header>
        <fieldset>
            <legend>Cadastrar Atividade</legend>
            <form action="../controle/CadastrarAtividade.php" method="POST">
                <p>Descrição:</p>
                <textarea name="descricao" cols="30" rows="10" required placeholder="Insira a descrição da atividade..."></textarea>
                <p>Data:</p>
                <input type="date" name="data" required>
                <input type="submit" value="Cadastrar">
            </form>
            <?php
                session_start();
                if(isset($_SESSION["erro-cadastro"])){
                    echo "<p>".$_SESSION["erro-cadastro"]."</p>";
                    unset($_SESSION["erro-cadastro"]);
                }
                else if(isset($_SESSION["sucesso-cadastro"])){
                    echo "<p>".$_SESSION["sucesso-cadastro"]."</p>";
                    unset($_SESSION["sucesso-cadastro"]);
                }
            ?>
            <a href="../index.php"><button>Voltar</button></a>
        </fieldset>
    </section>
</body>
</html>