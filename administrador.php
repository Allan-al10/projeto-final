<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="box2">
            <h2>Faça login</h2>
            <form action="admin.php" method="POST">
                <label for="cpf" class="form-label">CPF:</label><br>
                <input type="text" name="cpf" required><br><br>
                <label for="senha" class="form-label">Senha:</label><br>
                <input type="password" name="senha" required><br><br>
                Logar como: <a href="logar.php">Cliente</a><br>
                <input type="submit" class="form-control" value="Entrar"><br>
            </form>
            <form action="index.php" method="post">
                <input type="submit" class="form-control" value="Voltar">
            </form>
        </div>
    </div>
</body>

</html>