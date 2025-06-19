<?php
require_once "conexao.php";

$login = $_POST['login'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM tb_usuario WHERE login = '$login' and senha = '$senha'";
$resultados = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultados) == 0) {
    // usuário não cadastrado
    // ou informou dados errados.
    header("Location: index.php");
} else {
    // pode acessar
    
    // pegar o ID do cara que logou?
    // nome do cara que logou?
    
    $user = mysqli_fetch_assoc($resultados);
    $id_usuario = $user['id_usuario'];
    session_start();
    $_SESSION['username'] = $login;
    $_SESSION['id_usuario'] = $id_usuario;
    header("Location: home.php");
}
?>
