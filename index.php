<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/index.css">
    <title>Home</title>
</head>

<body>
    <section class="secao-menu">
    <header>
        <h1>Bem-Vindo(a)</h1>
    </header>
    
        <fieldset>
            <legend>Atividades</legend>
            <form action="controle/OpcaoMenu.php" method="POST">
                <h3>Escolha sua opção:</h3>
                <select name="opcao" required>
                    <option value="" selected disabled>Atividades</option>
                    <option value="cadastrar-atividade">Cadastrar</option>
                    <option value="listar-atividade">Listar Todas</option>
                    <option value="listar-pendente">Listar Pendentes</option>
                    <option value="listar-concluido">Listar Concluidas</option>
                    <option value="concluir-atividade">Concluir Atividade</option>
                    <option value="remover-atividade">Remover</option>
                </select>
                <input type="submit" value="Confirmar">
            </form>
        </fieldset>
        <footer>
            Teste&copy;
        </footer>
    </section>
</body>

</html>