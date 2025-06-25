<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../img/rosto.png" type="image/x-icon">
    <link rel="stylesheet" href="../styles/form.css">
    <style>
        h1 {
            padding-top: 5%
        }
        </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <div>
        <h1>Cadastrar filme</h1>
        <form action="salvarFilme.php" method="POST" enctype="multipart/form-data">
            <p>Nome:</p> <input type="text" name="nome">
            <p>Ano de lançamento:</p><input type="number" name="ano">
            <p>Foto:</p> <input type="file" name="foto">
            <input id="submit" type="submit">
        </form>
    </div>
    <a href="index.php">Cancelar</a>
</body>
</html>