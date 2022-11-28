<?php
    include_once 'dados_login.php';
    $logged = $_SESSION['logged'] ?? NULL;
    if (!$logged) die ('Não autorizado!');
?>
    <?php include_once 'menu.php'; ?>

    <p> Conteúdo restrito da página 1. </p>