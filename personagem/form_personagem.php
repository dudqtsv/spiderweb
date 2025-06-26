<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../img/rosto.png" type="image/x-icon">
    <link rel="stylesheet" href="../styles/form.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
        div {
            height: 520px;
        }
        h1 {
            margin-bottom:-5%;
            margin-top: 2%;
        }
    </style>
</head>
<body>
    <div>
        <h1>Cadastro de personagem</h1>
        <form action="salvarPersonagem.php" method="POST" enctype="multipart/form-data">
            <p>Tipo de personagem: <input type="radio" name="alimigo" value="aliado"> Aliado
            <input type="radio" name="alimigo" value="inimigo"> Inimigo
            <p>Nome:</p><input type="text" name="nome">
            <p>Descrição:</p><input type="text" name="descricao">
            <p>Foto:</p><input type="file" name="foto">
            <input id="submit" type="submit">
        </form>
    </div>
    <a href="index.php">Cancelar</a>
</body>
</html>