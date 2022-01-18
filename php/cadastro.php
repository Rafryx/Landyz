<?php
include_once('conexao.php'); //conexão com o BD
$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$senha = mysqli_real_escape_string($conexao, trim($_POST['senha']));

$queryVerificarEmail = mysqli_query($conexao,"SELECT * FROM usuarios WHERE email='$email'");
$rowsEmails = mysqli_num_rows($queryVerificarEmail);
if($rowsEmails <=0){
    $queryInserirDados = "INSERT INTO `usuarios`(`nome`,`email`,`senha`) VALUES ('$nome','$email','$senha')";
    $resultado_cadastro = mysqli_query($conexao, $queryInserirDados) or die(mysqli_error($conexao));
    echo "success";
}else{
    echo "existente";
}
?>