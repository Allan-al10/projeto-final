<?php
$servername = "localhost";
$username = "root";
$password = "Cefet123";
$dbname = "bd_pf";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
$cpf = $_POST['cpf'];
$senha = $_POST['senha'];
$query = "SELECT * FROM usuarios WHERE cpf = '$cpf' AND senha = '$senha'";
$result = $conn->query($query);
if ($result->num_rows == 1) {
    echo "<div class=container><div class=box><h1>Login bem-sucedido!<br><br> Seja bem vindo: $cpf</h1></div></div>";
} else {
    echo "<div class=container><div class=box><h1>cpf de usuário ou senha incorretos.</h1></div></div>";
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
<div class="container">
<div class="box">
    <input type="button" value="Voltar" class="homebutton" id="btnHome" 
    onClick="document.location.href='index.php'" />
</div>
</div>
</body>
</html>