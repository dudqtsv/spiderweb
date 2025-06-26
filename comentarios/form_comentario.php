<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
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