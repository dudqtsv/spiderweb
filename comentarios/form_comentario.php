<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input {
            height: 100px;
        }
        select {
            width: 100px;
        }
    </style>
</head>
<body>
    <form action="salvarComentario.php" method="POST">
        Texto: <input type="text" name="texto">
        Filme: <select name="filme">
            <?php
            require_once "../conexao.php";

            $sql = "SELECT * FROM tb_filme";
            $comando = mysqli_prepare($conexao, $sql);
    
            mysqli_stmt_execute($comando);
    
            $resultados = mysqli_stmt_get_result($comando);
            while ($filme = mysqli_fetch_assoc($resultados)) {
                $nome = $filme['nome'];
                echo "<option value='$nome'>$nome</option>";
            }
            ?>
        </select>
        <input type="submit">
    </form>
</body>
</html>