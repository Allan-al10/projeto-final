<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Floral Terra</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="box">
        <h2>Cadastro de novo cliente</h2>
        <form action="cadastra.php" method="POST">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome completo:</label><br>
                <input type="text" id="nome" name="nome" required>
            </div>
            <div class="mb-3">
                <label for="cpf" class="form-label">CPF:</label><br>
                <input type="text"  id="cpf" name="cpf" pattern="\d{11}" title="Digite apenas os números do CPF" required>
            </div>
            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone(celular):</label><br>
                <input type="text"  id="telefone" name="telefone" pattern="\d{10,11}" title="Digite apenas os números do telefone" required>
            </div>
            <div class="mb-3">
                <label for="aniversario">Data de Aniversário:</label>
                <input type="date" id="aniversario" name="aniversario">
            </div>
            <div class="mb-3">
                <label for="senha" class="form-label">Senha:</label><br>
                <input type="password" id="senha" name="senha" required><br>
            </div>
            Caso tenha conta: <a href="logar.php">Logar</a><br>
            <button type="submit" class="form-control">Cadastrar</button>
        </form>
        <form action="index.php" method="POST" class="mt-3">
            <button type="submit" class="form-control">Voltar</button>
        </form>
    </div>
</div>
</body>
</html>