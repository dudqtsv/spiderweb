<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/rosto.png" type="image/x-icon">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/form.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        #eu {
            color: antiquewhite;
            text-decoration:none;
        }
        #eu:hover {
            color:rgba(156, 0, 0, 0.71);
        }
        footer {
            color:antiquewhite;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: rgba(112, 0, 0, 0.09);
            text-align: center;
            padding: 15px;
        }
    </style>
    <title>SpiderWeb</title>
</head>
<body>
    <div>
        <img src="img/rosto.png">
        <form method="post" action="login.php">
            <h1>Login</h1>
            <p>Username</p><input type="text" name="login" required>
            <p>Senha</p><input type="password" name="senha" required>
            <p><input type="submit" id="submit" value="Entrar"></p>
            <p>Ainda não possui um acesso?
            <a href="cadastro/form_cadastro.html">Cadastre-se</a>!</p>
        </form>
    </div>
    <footer>
        <p>Feito com ♡ por <a id="eu" target="_blank" href="https://www.instagram.com/dudqtsv">Maria</a>.</p>
    </footer>
</body>
</html>