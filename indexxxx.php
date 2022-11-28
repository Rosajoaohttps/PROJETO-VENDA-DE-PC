<?php
    include_once 'dados_login.php';

?>

<!DOCTYPE html>
<html>
<head>
</heade>

<body>
    <div>
        <?php include_once 'menu.php'; ?>

        <?php
            if(!$_SESSION['logged']){
                include_once "dados_login.php";
                
            }else{
                include_once "conteudo_restrito.php";                  
            }
            ?>
    </div>
</body>
</html>