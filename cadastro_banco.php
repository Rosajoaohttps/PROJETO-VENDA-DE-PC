<?php
include_once('conexao.php');

if(!empty ($_POST['nome'])){
    $nome=$_POST['nome'];
}

$sobrenome=$_POST['sobrenome'];
$cpf=$_POST['cpf'];
$rg=$_POST['rg'];
$email=$_POST['email'];
$senha=$_POST['senha'];
$cadastrar=$_POST['cadastrar'];

if($cadastrar == "Criar Conta"){
$comando = "INSERT INTO  criar_conta  (nome_conta, sobrenome_conta, cpf_conta, rg_conta, email_conta, senha_conta)
    VALUES ('$nome',   '$sobrenome', '$cpf', '$rg', '$email', '$senha')";

    $inserir = mysqli_query ($conexao, $comando);

    header('location: cadastro.html');
}


?>