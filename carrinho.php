<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head id = "carrinho">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <title>Document</title>
    
</head>
<body id = "carrinho">
    
    <h2 class = "title">Produtos:</h2>
    <div class = "carrinho-container">

<?php

    $items = array(['nome' => 'Produto1','imagem'=>'imagem1.jpg', 'preco' => '200'],
                ['nome' => 'Produto2','imagem'=>'imagem2.jpg', 'preco' => '300'],
                ['nome' => 'Produto3','imagem'=>'imagem3.jpg', 'preco' => '400']);
        /* adicionar na sua pasta as imagens com os mesmos nomes acima*/
    foreach ($items as $key => $value){

?>
    <div class="produto">
        <img src = "<?php echo $value['imagem'] ?>" />
        <a href="?adicionar=<?php echo $key ?>">Adicionar ao carrinho!</a>
    </div>

<?php
    }
?>
    </div> <!--carrinho-container-->

    <?php
        if(isset($_GET['adicionar'])){
            //vamos adicionar ao carrinho
            $idProduto = (int) $_GET['adicionar'];
            if(isset($items[$idProduto])){
                if(isset($_SESSION['carrinho'][$idProduto])){
                    
                    $_SESSION['carrinho'][$idProduto]['quantidade']++;
                } else{
                    
                    $_SESSION['carrinho'][$idProduto] = array('quantidade' => 1, 'nome' => $items[$idProduto]['nome'],'preco'=>$items[$idProduto]['preco']);

                }
                echo '<script>alert("O item foi adicionado ao carrinho.");</script>';
            } else {
                die ('Você não pode adionar um item qua não existe.');
            }
        }
        ?>
    <h2 class = "title">Carrinho: </h2>

    <?php
    
        if(isset($_GET['removeruni'])){
            //vamos remover uma unidade do carrinho
            $idProduto = (int) $_GET['removeruni'];

            if(isset($items[$idProduto])){
                    $_SESSION['carrinho'][$idProduto]['quantidade']--;
                } 
            /*echo '<script>alert("Unidade removida do carrinho.");</script>';*/
        }
        if(isset($_GET['remover'])){
                //vamos remover o item do carrinho
                $idProduto = (int) $_GET['remover'];

                if(isset($items[$idProduto])){
                        unset($_SESSION['carrinho'][$idProduto]);
                    } 
                echo '<script>alert("O item foi removido do carrinho.");</script>';
                }
                
        if(isset($_SESSION['carrinho'])){
        foreach($_SESSION['carrinho'] as $key => $value){
            
            echo '<div class="carrinho-item">';
            echo '<p>Nome: '.$value['nome'].' | Quantidade: '.$value['quantidade'].' | Preço: R$ '.($value['preco']*$value['quantidade']).' | <a href="?removeruni=' .$key.'">Remover uma unidade!</a> | <a href="?remover=' .$key.'">Remover do carrinho!</a></p>';
          
            echo '</div>';
        }
    }
    
    ?>
</body>
</html>