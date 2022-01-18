<?php
    include_once('conexao.php');
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $msg = $_POST['msg'];
    $queryInserirDados = "INSERT INTO `contato`(`nome`, `sobrenome`, `email`, `assunto`, `mensagem`) VALUES ('$nome','$sobrenome','$email','$assunto','$msg')";
    $resultado_msg_contato = mysqli_query($conexao, $queryInserirDados) or die(mysqli_error($conexao));
    echo "success";
?>