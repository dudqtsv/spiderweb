<?php
session_start(); //precisa ser a PRIMEIRA coisa no arquivo

require_once "../conexao.php";

// SELECT * FROM tb_livro;
$sql = "SELECT * FROM tb_aparicao INNER JOIN tb_usuario ON tb_aparicao.id_usuario = tb_usuario.id_usuario";
$comando = mysqli_prepare($conexao, $sql);
mysqli_stmt_execute($comando);
$resultados = mysqli_stmt_get_result($comando);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/lista.css">
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../img/rosto.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aparições</title>
    <link rel="stylesheet" href="style.css">
</head>

<img src="../img/aranha.png" alt="">
<h1>Aparições do Homem Aranha</h1>
<a id="voltar" href='../home.php'>Voltar</a> <br>
<p>Viu o Homem Aranha por aí? <a href='form_aparicao.php'>Faça sua postagem</a>!</p>

</body>
<?php
while ($aparicao = mysqli_fetch_assoc($resultados)) {
    $foto = $aparicao['foto'];
    $local = $aparicao['local'];
    $descricao = $aparicao['descricao'];
    $id_usuario = $aparicao['id_usuario'];
    $username = $aparicao['login'];
    echo "<div class='card'>";
        echo "<p class='coisa'><img src='../fotos/$foto'></p>";
        echo "<p class='coisa'>Local: $local</p>";
        echo "<p class='coisa'>Descrição:$descricao</p>";
        echo "<p class='coisa'>User: $username</p>";
    echo "</div>";
}

mysqli_stmt_close($comando);
?>
</html>
