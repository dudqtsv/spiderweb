<?php
    require_once "conexao.php";
    session_start();
    $username = $_SESSION['username'];
    $nome = $_SESSION['nome_usuario'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/rosto.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SpiderWeb</title>
    <style>
        header {
            background-color: black;
        }
        img {
            width: 100%;
            height: 300px;
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
        <a href="aparicao/">Aparições</a>
        <a href="filme/">Filmes</a>
        <a href="personagem/">Personagens</a>
    </nav>
    <a href="logout.php">Sair</a>
</body>
</html>