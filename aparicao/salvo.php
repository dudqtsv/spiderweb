<?php
    require_once "../conexao.php"; 
    
    $local = $_POST['local'];
    $descricao = $_POST['descricao'];

    session_start();
    $username = $_SESSION['username'];
    $id_usuario = $_SESSION['id_usuario'];

    if (empty($local) || empty($descricao)){
    header("Location: erro.html");
    exit();
}


    $nome_arquivo = $_FILES['foto']['name'];
    $caminho_temporario = $_FILES['foto']['tmp_name'];

    //pegar a extensao do arquivo 
    $extensao = pathinfo($nome_arquivo, PATHINFO_EXTENSION);

    //gerar novo nome 
    $novo_nome = uniqid() . "." . $extensao;

    //lembre-se de criar a pasta e de ajustar as permissoes
    $caminho_destino = "../fotos/" . $novo_nome;

    move_uploaded_file($caminho_temporario, $caminho_destino);
    
    // INSERT INTO tb_livro VALUES (null, 'Harry Potter', 'Ficção', 1990)       
    $sql = "INSERT INTO tb_aparicao (foto, local, descricao, id_usuario) VALUES (?, ?, ?, ?)";
    $comando = mysqli_prepare($conexao, $sql);

    // letra s -> varchar, date, datetime, char
    // letra i -> int
    // letra d -> float, decimal
    mysqli_stmt_bind_param($comando, 'sssi', $novo_nome, $local, $descricao, $id_usuario);

    mysqli_stmt_execute($comando);

    mysqli_stmt_close($comando);

    header("Location: index.php");
?>