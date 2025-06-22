<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="biblioteca.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aparições</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Filmes</h1>

    <a href="../home.php">Voltar</a> <br>
    <p>Seu filme favorito não está cadastrado? <a href="form_filme.php">Cadastre-o</a>!</p> 
    <a href='../comentarios/' id='comentarios'>Comentários</a>
    <?php
        require_once "../conexao.php";

        // SELECT * FROM tb_livro;
        $sql = "SELECT * FROM tb_filme";
        $comando = mysqli_prepare($conexao, $sql);

        mysqli_stmt_execute($comando);

        $resultados = mysqli_stmt_get_result($comando);

        // echo $resultados;
        // print_r($resultados);

        while ($filme = mysqli_fetch_assoc($resultados)) {
            $id_filme = $filme['id_filme'];
            $_SESSION['id_filme'] = $id_filme;
            $foto = $filme['foto'];
            $nome = $filme['nome'];
            $_SESSION['nome_filme'] = $nome;
            $ano = $filme['ano'];
            echo "<div>";
            echo "<p id='id'>$id_filme</p>";
            echo "<p id='foto'>$foto</p>";
            echo "<p id='infos'>$nome - $ano</p>";
            echo "</div>";
        }
        mysqli_stmt_close($comando);    
    ?>
</body>
</html>
</body>
</html>