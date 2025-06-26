<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/lista.css">
    <link rel="shortcut icon" href="../img/rosto.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personagens</title>
    <link rel="stylesheet" href="style.css">
    <style>
        h2 {
            color: antiquewhite;
        }
    </style>
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
            echo "<div class='card'>";
            echo "<p class='coisa'><img src='../fotos/$foto'></p>";
            echo "<p class='coisa'>$nome</p>";
            echo "<p class='coisa'>$descricao</p>";
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
            echo "<p id='coisa'><img src='../fotos/$foto'></p>";
            echo "<p id='coisa'>$nome</p>";
            echo "<p id='coisa'>$descricao</p>";
            echo "</div>";
        }
        mysqli_stmt_close($comando);  
    ?>
</body>
</html>
</body>
</html>