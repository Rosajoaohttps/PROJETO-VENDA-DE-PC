<?php
include_once('conexao.php');

$email=$_POST['email'];
$senha=$_POST['senha'];
$acessar=$_POST['acessar'];


if($acessar == "Acessar Conta"){
    $acessar = "SELECT email_conta,senha_conta FROM criar_conta WHERE email_conta='$email' AND senha_conta='$senha'";
    $logar = mysqli_query ($conexao, $acessar);



    header('location: home.html');
  
}

?>