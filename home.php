<?php
    require_once "conexao.php";
    session_start();
    $username = $_SESSION['username'];
    $nome = $_SESSION['nome_usuario'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/reset.css">
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/rosto.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SpiderWeb</title>
    <style>
        body {
            font-weight: bold;
            background-color: #b30000;
            color: #f0f0f0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }
        img {
            max-width: 700px;
            height: auto;
            margin-bottom: 20px;
        }
        p {
            text-align: center;
            font-size: 18px;
            padding-left: 15px;
            padding-right: 15px;
            padding-top: 15px;
            padding-bottom: 15px;
            margin-top: -8%;
            margin-bottom: 20%;
            border-radius: 10px;
        }
        .coisa {
            scale: 1.2;
            width: 20vh;
            color: antiquewhite;
            background-color:rgba(0, 0, 0, 0.58);
            padding-left: 15px;
            padding-right: 15px;
            padding-top: 15px;
            padding-bottom: 15px;
            margin-top: -8%;
            margin-bottom: 20%;
            text-decoration: none;
            border-radius: 8px;
            display: flex;
            justify-content: center;
        }
        .coisa:hover {
            background-color:rgba(0, 0, 0, 0.83);
        }

        #sair {
            padding-left: 15px;
            padding-right: 15px;
            padding-top: 10px;
            padding-bottom: 10px;
            border-radius: 6px;
            color: white;
            text-decoration: none;
        }

        #sair:hover {
            background-color:rgba(0, 0, 0, 0.44);
        }
        #eu {
            color: antiquewhite;
            text-decoration:none;
        }
        #eu:hover {
            color: #b30000;
        }
        footer {
            color: antiquewhite;
            position: fixed;
            bottom: 0;
            left: 0;
            height: 3%;
            width: 100%;
            background-color:rgba(0, 0, 0, 0.58);
            text-align: center;
            padding-left: 15px;
            padding-right: 15px;
            padding-top: 15px;
        }
    </style>
</head>
<body>
    <header>
        <img src="img/logo.png">
    </header>
    <?php
    echo"<div>";
        echo"<p>Olá $nome! Seja bem vindo(a). 🕸️🕷️</p>";
    echo"</div>";
    ?>
    <nav>
        <a class="coisa" href="aparicao/">Aparições</a>
        <a class="coisa" href="filme/">Filmes</a>
        <a class="coisa" href="personagem/">Personagens</a>
    </nav>
    <a id ="sair" href="logout.php">Sair</a>
    <footer>
        Feito com ♡ por <a id="eu" target="_blank" href="https://www.instagram.com/dudqtsv">Maria</a>.
    </footer>
</body>
</html>