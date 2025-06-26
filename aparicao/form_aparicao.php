<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
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
        <p><input id="submit" type="submit"></p>
        </form>
    </div>
</body>
</html>