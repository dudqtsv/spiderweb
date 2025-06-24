<?php
    require_once "../conexao.php"; 
    
    $texto = $_POST['texto'];
    $filme = $_POST['filme'];

    session_start();
    $_SESSION['nome_filme'] = $filme;
    $username = $_SESSION['username'];
    $id_usuario = $_SESSION['id_usuario'];

    if (empty($texto)){
    header("Location: erro.html");
    exit();
    }

    $sql = "SELECT id_filme FROM tb_filme WHERE nome = '$filme'";
    $comando = mysqli_prepare($conexao, $sql);

        mysqli_stmt_execute($comando);

        $resultados = mysqli_stmt_get_result($comando);

        while ($filmeid = mysqli_fetch_assoc($resultados)) {
            $id_filme = $filmeid['id_filme'];
        }

    
    // INSERT INTO tb_livro VALUES (null, 'Harry Potter', 'Ficção', 1990)       
    $sql = "INSERT INTO tb_comentario (texto, id_usuario, id_filme) VALUES (?, ?, ?)";
    $comando = mysqli_prepare($conexao, $sql);

    // letra s -> varchar, date, datetime, char
    // letra i -> int
    // letra d -> float, decimal
    mysqli_stmt_bind_param($comando, 'sii', $texto, $id_usuario, $id_filme);

    mysqli_stmt_execute($comando);

    mysqli_stmt_close($comando);

    header("Location: index.php");
?>