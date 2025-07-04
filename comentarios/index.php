<?php
        session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../styles/lista.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentários</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentários</title>
    <link rel="shortcut icon" href="../img/rosto.png" type="image/x-icon">
    <link rel="stylesheet" href="../styles/lista.css">
</head>
<body>
    <h1>Comentários</h1>

    <a id="voltar" href="../filme">Voltar</a> <br>
    <p>Tem uma opinião? <a href="form_comentario.php">Comente-a</a>!</p> 
    <?php
            require_once "../conexao.php";

        $sql = "SELECT 
            tb_comentario.*, 
            tb_usuario.login AS username,
            tb_filme.nome AS nome_filme
            FROM tb_comentario
            INNER JOIN tb_usuario ON tb_comentario.id_usuario = tb_usuario.id_usuario
            INNER JOIN tb_filme ON tb_comentario.id_filme = tb_filme.id_filme;
            ";
        $comando = mysqli_prepare($conexao, $sql);

        mysqli_stmt_execute($comando);
        
        $resultados = mysqli_stmt_get_result($comando);
        while ($comentario = mysqli_fetch_assoc($resultados)) {
            // $id_filme = $_SESSION['id_filme'];
            $texto = $comentario['texto'];
            $usuario = $comentario['username'];
            $nome_filme = $comentario['nome_filme'];
            echo "<div class='card'>";
                echo "<p id='coisa'>$usuario comentou:</p>";
                echo "<p id='coisa'>$texto.</p>";
                echo "<p id='coisa'>sobre o filme: $nome_filme</p>";
            echo "</div>";
        }
        mysqli_stmt_close($comando);    
?>
</body>
</html>
</body>
</html>