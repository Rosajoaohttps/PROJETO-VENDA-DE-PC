<?php
session_start();

if (isset($_GET['logout']) && $_GET['logout']==1){
    $_SESSION = array();
    session_destroy();
    header('Location: /Teste/CriarConta.php');
}

$_SESSION['logged'] = $_SESSION['logged'] ?? False;

//base de dados


$p_usuario = $_POST['email'] ?? NULL;
$p_senha = $_POST['senha'] ?? NULL;

if ($p_usuario == $usuario_db && $p_senha == $senha_db){
    $_SESSION['usuario'] = $usuario_db;
    $_SESSION['senha'] = $senha_db;
    $_SESSION['logged'] = True;
    $_SESSION['id'] = $id_db;
}

?>