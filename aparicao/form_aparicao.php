<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php">Voltar</a>
    <form action="salvo.php" method="POST" enctype="multipart/form-data">
    <p>Foto</p><input type="file" name="foto">
    <p>Local</p><input type="text" name="local">
    <p>Descrição</p><input type="text" name="descricao">
    <input type="submit">
    </form>
</body>
</html>