<?php
    require_once "../conexao.php"; 
    
    $login = $_GET['login'];
    $senha = $_GET['senha'];
    $nome = $_GET['nome'];

    if (empty($login) || empty($senha) || empty($nome)) {
        header("Location: erro.html");
        exit();
}
    
    // INSERT INTO tb_livro VALUES (null, 'Harry Potter', 'Ficção', 1990)       
    $sql = "INSERT INTO tb_usuario VALUES (null, ?, ?, ?)";
    $comando = mysqli_prepare($conexao, $sql);

    // letra s -> varchar, date, datetime, char
    // letra i -> int
    // letra d -> float, decimal
    mysqli_stmt_bind_param($comando, 'sss', $login, $senha, $nome);

    mysqli_stmt_execute($comando);

    mysqli_stmt_close($comando);

    header("Location: ../index.php");
?>