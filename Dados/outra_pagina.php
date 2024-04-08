<!DOCTYPE html>
<html>
<head>
    <title>Bem-vindo</title>
</head>
<body>
    <?php
    // Verifica se o parâmetro 'nome' está presente na URL
    if (isset($_GET['nome'])) {
        // Recupera o nome do usuário da URL
        $nome = $_GET['nome'];
        // Exibe a mensagem de boas-vindas
        echo "<h1>Olá, $nome!</h1>";
    } else {
        // Se o parâmetro 'nome' não estiver presente na URL, exibe uma mensagem genérica
        echo "<h1>Bem-vindo!</h1>";
    }
    ?>
</body>
</html>
    