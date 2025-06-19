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
    <h1>Aparições do Homem aranha</h1>

    <a href="../home.php">Voltar</a> <br>
    <p>Viu o Homem Aranha por aí? <a href="form_aparicao.php">Faça sua postagem</a>!</p> 
    <?php

        require_once "../conexao.php";

        // SELECT * FROM tb_livro;
        $sql = "SELECT * FROM tb_aparicao";
        $comando = mysqli_prepare($conexao, $sql);

        mysqli_stmt_execute($comando);

        $resultados = mysqli_stmt_get_result($comando);

        // echo $resultados;
        // print_r($resultados);

        while ($aparicao = mysqli_fetch_assoc($resultados)) {
            $id_aparicao = $aparicao['id_aparicao'];
            $foto = $aparicao['foto'];
            $local = $aparicao['local'];
            $descricao = $aparicao['descricao'];
            $id_usuario = $aparicao['id_usuario'];
            
            // echo "$id_livro - $nome<br>";

            echo "<div>";
            echo "<p id='id'>$id_aparicao</p>";
            echo "<p id='foto'><img src='fotos/$foto'></p>";
            echo "<p id='local'>$local</p>";
            echo "<p id='descricao'>$descricao</p>";
            echo "</div>";


        }
        echo "</table>";



        mysqli_stmt_close($comando);    
    ?>
</body>
</html>