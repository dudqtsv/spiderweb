<?php
        session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../img/rosto.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentários</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Comentários</h1>

    <a href="../filme">Voltar</a> <br>
    <p>Tem uma opinião? <a href="form_comentario.php">Comente-a</a>!</p> 
    <?php
            require_once "../conexao.php";

        $sql = "SELECT * FROM tb_comentario INNER JOIN tb_usuario ON tb_comentario.id_usuario = tb_usuario.id_usuario INNER JOIN tb_filme on tb_comentario.id_filme = tb_filme.id_filme;";
        $comando = mysqli_prepare($conexao, $sql);

        mysqli_stmt_execute($comando);
        
        $resultados = mysqli_stmt_get_result($comando);
        while ($comentario = mysqli_fetch_assoc($resultados)) {

            $id_filme = $_SESSION['id_filme'];
            $texto = $comentario['texto'];
            $nome_filme = $comentario[''];
            $username = $comentario['login'];
            echo "<div>";
            echo "<p id='usuario'>$usuario</p>";
            echo "<p id='texto'>$texto</p>";
            echo "<p id='infos'>$nome_filme</p>";
            echo "</div>";
        }
        mysqli_stmt_close($comando);    
?>
</body>
</html>
</body>
</html>