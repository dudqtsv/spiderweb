<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../styles/form.css">
    <link rel="shortcut icon" href="../img/rosto.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aparição</title>
    <style>
        h1 {
            padding-top:15%;
        }
    </style>
</head>
<body>
    <a href="index.php">Voltar</a>
    <div>
        <h1>Aparição</h1>
        <form action="salvo.php" method="POST" enctype="multipart/form-data">
        <p>Foto</p><input type="file" name="foto">
        <p>Local</p><input type="text" name="local">
        <p>Descrição</p><input type="text" name="descricao">
        <input id="submit" type="submit">
        </form>
    </div>
</body>
</html>