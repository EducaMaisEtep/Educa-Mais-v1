<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Código</title>
    <style>
        #erro{
            background-color: #ffa1b0;
            border: 1px solid #cc102e;
        }
    </style>
    <link rel="stylesheet" href="Algoritimos/estilo.css">
    <link rel="shortcut icon" href="Imagens/Logo.png" type="image/x-icon">
    <script src="Algoritimos/header-script.js"></script>
</head>
<body>
    <header>
        <h1 class="logo">Educa Mais Etep</h1>
    </header>
    <div id="conteudo">
        <div id="inserir-codigo">
            <div id="bloco-codigo">
            <form id="myForm" method='post'>
                <div class='codigo'>
                    <label for="codigo">Insira seu CPF para prosseguir:</label><br>
                    <input type="text" id="codigoInput" name="codigo">
                    <button onclick="verificar()">Enviar</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    <div class="g-recaptcha" data-sitekey="SEU_SITE_KEY"></div>

    <footer>
    <p>&copy;Educa Mais Etep | Feito em 2024 | Criadores: Ravi Moraes, Luis Felipe Graça, Filipe Sansoni, Henrique Pereira</p>
    </footer>

    <script src='Algoritimos/body-script.js'>

    </script>
</body>
</html>
