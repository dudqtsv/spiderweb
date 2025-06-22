<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="salvarPersonagem.php" method="POST" enctype="multipart/form-data">
    <div>Tipo de personagem: <input type="radio" name="alimigo" value="aliado"> Aliado
    <input type="radio" name="alimigo" value="inimigo"> Inimigo</div>
    <div>Nome: <input type="text" name="nome"></div>
    <div>Descrição: <input type="text" name="descricao"></div>
    <div>Foto: <input type="file" name="foto"></div>
    <div><input type="submit"></div>

    </form>
</body>
</html>