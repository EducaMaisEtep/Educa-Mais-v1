<?php
// Conexão com o banco de dados MySQL
$servername = "localhost";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "seu_banco_de_dados";

// Estabelece a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

// Verifica se os dados do formulário foram enviados
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['name'];
    $sobrenome = $_POST['sobrename'];
    $ra = $_POST['ra'];
    $profissao = $_POST['profissao'];
    $senha = $_POST['senha'];
    $confirmar_senha = $_POST['confirmar'];

    // Aqui você deve realizar as validações necessárias, como verificar se os campos estão preenchidos corretamente e se as senhas coincidem.
    
    // Prepara e executa a query SQL para inserir os dados
    $sql = "INSERT INTO Usuarios (nome, sobrenome, ra, profissao, senha) VALUES ('$nome', '$sobrenome', '$ra', '$profissao', '$senha')";

    if ($conn->query($sql) === TRUE) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro ao cadastrar: " . $conn->error;
    }
}
if ($conn->query($sql) === TRUE) {
    // Redireciona o usuário para outra página com o nome como parâmetro na URL
    header("Location: outra_pagina.php?nome=$nome");
    exit();
} else {
    echo "Erro ao cadastrar: " . $conn->error;
}

// Fecha a conexão com o banco de dados
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <p>oi</p>
   <img src="../imagens/Logo.png" alt=""> 
</body>
</html>
