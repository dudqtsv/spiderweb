<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../img/rosto.png" type="image/x-icon">
    <link rel="stylesheet" href="../styles/form.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
        div {
            height:400px;
        }
        h1 {
            margin-bottom:-5%;
            margin-top: 2%;
        }
        #submit {

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