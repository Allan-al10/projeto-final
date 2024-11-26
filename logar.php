<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Floral Terra</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="box2">
            <h2>Insira suas Informações para Entrar</h2>
            <form action="login.php" method="POST">
                <label for="nome" class="form-label">CPF:</label><br>
                <input type="text" name="cpf" required><br><br>
                <label for="senha" class="form-label">Senha:</label><br>
                <input type="password" name="senha" required><br><br>
                Caso não tenha uma conta: <a href="cadastrar.php">Cadastrar-se</a><br>
                Logar como: <a href="administrador.php">administrador</a><br>
                <input type="submit" class="form-control" value="Entrar"><br>
            </form>
            <form action="index.php" method="post">
                <input type="submit" class="form-control" value="Voltar">
            </form>
        </div>
    </div>
</body>
</html>