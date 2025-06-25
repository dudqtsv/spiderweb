<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../img/rosto.png" type="image/x-icon">
    <link rel="stylesheet" href="../styles/form.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentar</title>
    <style>
        h1{
            margin-top:1%;
        }
        #text {
            height: 100px;
        }
        select {
            width: 100px;
        }
        option {
            width: 100px;
        }
    </style>
</head>
<body>
    <div>
        <h1>Comentar</h1>
        <form action="salvarComentario.php" method="POST">
            <p>Texto:</p><input id="text" type="text" name="texto">
            <p>Filme:</p><select name="filme">
                <?php
                require_once "../conexao.php";

                $sql = "SELECT * FROM tb_filme";
                $comando = mysqli_prepare($conexao, $sql);
        
                mysqli_stmt_execute($comando);
        
                $resultados = mysqli_stmt_get_result($comando);
                while ($filme = mysqli_fetch_assoc($resultados)) {
                    $nome = $filme['nome'];
                    echo "<option id='option' value='$nome'>$nome</option>";
                }
                ?>
            </select>
            <p><input id="submit" type="submit"></p>
        </form>
    </div>
    <a href="index.php">Cancelar</a>
</body>
</html>