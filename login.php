<?php
require_once "conexao.php";

$login = $_POST['login'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM tb_usuario WHERE login = '$login' and senha = '$senha'";
$resultados = mysqli_query($conexao, $sql);
$tudo = mysqli_fetch_assoc($resultados);
$id = $tudo['id_usuario'];

if (mysqli_num_rows($resultados) == 0) {
    // usuário não cadastrado
    // ou informou dados errados.
    header("Location: index.php");
} else {
    // pode acessar
    
    // pegar o ID do cara que logou?
    // nome do cara que logou?
    session_start();
    $_SESSION['username'] = $login; //trocar
    $_SESSION['id_usuario'] = $id;
    header("Location: home.php");
}
?>
