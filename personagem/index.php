<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../img/rosto.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personagens</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Personagens</h1>

    <a href="../home.php">Voltar</a> <br>
    <p>Seu personagem favorito não está cadastrado? <a href="form_personagem.php">Cadastre-o</a>!</p> 
    <h2>Aliados</h2>
    <?php
        require_once "../conexao.php";

        // ALIADOSSSSSS
        $sql = "SELECT * FROM tb_aliado";
        $comando = mysqli_prepare($conexao, $sql);

        mysqli_stmt_execute($comando);

        $resultados = mysqli_stmt_get_result($comando);

        while ($aliado = mysqli_fetch_assoc($resultados)) {
            $id_aliado = $aliado['id_aliado'];
            $nome = $aliado['nome'];
            $foto = $aliado['foto'];
            $descricao = $aliado['descricao'];
            echo "<div>";
            echo "<p id='foto'><img src='../fotos/$foto'></p>";
            echo "<p id='nome'>$nome</p>";
            echo "<p id='infos'>$descricao</p>";
            echo "</div>";
        }
        mysqli_stmt_close($comando);  

        ?>
<h2>Inimigos</h2>
<?php
        
        // INIMIGOSSSS
        $sql = "SELECT * FROM tb_inimigo";
        $comando = mysqli_prepare($conexao, $sql);

        mysqli_stmt_execute($comando);

        $resultados = mysqli_stmt_get_result($comando);

        while ($inimigo = mysqli_fetch_assoc($resultados)) {
            $id_inimigo = $inimigo['id_inimigo'];
            $nome = $inimigo['nome'];
            $foto = $inimigo['foto'];
            $descricao = $inimigo['descricao'];
            echo "<div>";
            echo "<p id='foto'><img src='../fotos/$foto'></p>";
            echo "<p id='nome'>$nome</p>";
            echo "<p id='infos'>$descricao</p>";
            echo "</div>";
        }
        mysqli_stmt_close($comando);  
    ?>
</body>
</html>
</body>
</html>