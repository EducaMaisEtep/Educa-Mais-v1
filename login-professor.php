<!DOCTYPE html>
<html>
<head>
    <style>
        #erro{
            background-color: #ffa1b0;
            border: 1px solid #cc102e;
        }
    </style>
    <link rel="stylesheet" href="Algoritimos/estilo.css">
    <link rel="shortcut icon" href="Imagens/Logo.png" type="image/x-icon">
    <script src="Algoritimos/header-script.js"></script>
    <title>E.M.E login</title>
</head>
<body>
<?php
if(isset($_POST['submit'])){
    $senha = $_POST['senha'];
    $confirmar_senha = $_POST['confirmar_senha'];
    
    if($senha == $confirmar_senha){
        header('Location: login-gestao.php');
        exit();
    } else {
        echo "<h1 id='erro'>As senhas não coincidem. Por favor, tente novamente</h1>";
    }
}
?>
    <header>
        <h1 class="logo">Educa Mais Etep</h1>
    </header>
    <div id="conteudo">
        <div id="login">
            <form method='post'>
                <h2>Login</h2>
                <div class="input-group">
                    <label for="name">Nome ou CPF:</label>
                    <input type="text" id="name" placeholder="Seu nome">
                </div>    
                <div class="input-group">
                    <label for="senha">Senha:</label>
                    <input name='senha' type="password" id="senha" placeholder="Crie uma senha">
                </div>
                <input id='enviar' type="submit" name="submit" value="Enviar">
            </form>
    </div>
 
    <footer>
    <p>&copy;Educa Mais Etep | Feito em 2024 | Criadores: Ravi Moraes, Luis Felipe Graça, Filipe Sansoni, Henrique Pereira</p>
    </footer>
    <script src="Algoritimos/body-script.js"></script>
    <script>
        var nome = localStorage.getItem("codigo"); // Obtém o nome da localStorage
        if (nome) {
            document.getElementById("welcomeText").textContent = nome;
        } else {
            document.getElementById("welcomeText").textContent = "Olá, visite de cpf para inserir seu CPF e ser salvo.";
        }
    </script>
</body>
</html>

