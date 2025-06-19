<?php
    require_once "conexao.php";
    session_start();
    $username = $_SESSION['username'];
    echo $username;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <a href="aparicao">Aparições</a>
        <a href="filme">Filmes</a>
        <a href="personagem">Personagens</a>
    </div>
</body>
</html>