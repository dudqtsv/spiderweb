<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../styles/lista.css">
    <link rel="shortcut icon" href="../img/rosto.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img src="../img/aranha.png" alt="">
    <h1>Filmes</h1>
    <a id="voltar" href="../home.php">Voltar</a> 
    <p id="comentario">Seu filme favorito não está cadastrado? <a href="form_filme.php">Cadastre-o</a>!</p> 
    <p><a href='../comentarios/' id='comentarios'>Comentários</a></p>
    <?php
        require_once "../conexao.php";

        // SELECT * FROM tb_livro;
        $sql = "SELECT * FROM tb_filme";
        $comando = mysqli_prepare($conexao, $sql);

        mysqli_stmt_execute($comando);

        $resultados = mysqli_stmt_get_result($comando);

        while ($filme = mysqli_fetch_assoc($resultados)) {
            $id_filme = $filme['id_filme'];
            $nome = $filme['nome'];
            $ano = $filme['ano'];
            $foto = $filme['foto'];
        
            echo "<div class='card'>";
                echo "<p id='coisa'><img src='../fotos/$foto'></p>";
                echo "<p id='coisa'>$nome - $ano</p>";
            echo "</div>";
        }
       // $_SESSION['id_filme'] = $id_filme;
        mysqli_stmt_close($comando);    
    ?>
</body>
</html>
</body>
</html>