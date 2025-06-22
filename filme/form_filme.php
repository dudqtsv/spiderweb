<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="salvarFilme.php" method="POST" enctype="multipart/form-data">
        Nome: <input type="text" name="nome">
        Ano de lançamento: <input type="number" name="ano">
        Foto: <input type="file" name="foto">
        <input type="submit">

    </form>
</body>
</html>