<?php

include_once 'conexao.php';
?>





<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="./Estilo/home.css" />
    <title> Oldin</title>
    <link rel="shortcut icon" href="logo.png" type="image/x-icon" />
    <script src="script.js"></script>
</head>

<body class="inicial">
    <div class="cabeçalho-cima">
        <div class="div-logo-cabeçalho"><img class="logo-cabeçalho" src="./imagens/logo-pichau-2021.png" alt=""></div>
           <div class="conta">
              <img class="contasimbolo" src="./imagens/icon-cabeçalho2.png" alt="">
              <div class="minhaconta">MINHA CONTA</div>
              <div class="entrarcadastro">ENTRAR / CADASTRO</div>
           </div>
           <div class="home-cabeçalho-atendimetno">
              <img class="atendimentosimbolo" src="./imagens/iconquestion-removebg-preview.png" alt="">
              <div class="cabeçalho-atendimento">ATENDIMENTO</div>
              <div class="cabeçalho-aocliente">AO CLIENTE</div>
           </div>
           <div class="home-cabeçalho-modoescuro">
              <img class="cabeçalho-modoclarosimbolo" src="./imagens/eclipseicon.png" alt="">
              <div class="cabeçalho-modoclaro1">MODO</div>
              <div class="cabeçalho-modoclaro2">CLARO</div>
           </div>
           <button class="divBotãoCarrinhoCabeçalhoCima">
              <!-- <button class="BotãoCarrinhoCabeçalhoCima"> -->
                 <img class="BotãoCarrinhoCabeçalhoCimaImagem" src="./imagens/carrinho.png" alt="">
                 <div class="BotãoCarrinhoCabeçalhoCimaCarrinho">Carrinho</div>
                 <div class="BotãoCarrinhoCabeçalhoCimaProduto">0 produtos</div>
              <!-- </button> -->
           </button>
        <br><br><br>
     </div>
     <div class="cabeçalho-baixo">
        <div class="popup" onclick="myFunction()">
           <span class="popuptext" id="myPopup"> 
              <img class="logoPopUp" src="./imagens/logo-pichau-2021-dark.png" alt="">
              <div class="PopUpTexto">
                 <div class="PopUpTextoCategorias">Categorias</div>
                 <div class="PopUpTextoHardware PopUpTexto">Hardware</div>
                 <div class="PopUpTexto" class="PopUpTextoPeriféricos">Periféricos</div>
                 <div class="PopUpTexto" class="PopUpTextoComputadores">Computadores</div>
                 <div class="PopUpTexto" class="PopUpTextoKitUpgrade">Kit Upgrade</div>
                 <div class="PopUpTexto" class="PopUpTextoMonitores">Monitores</div>
                 <div class="PopUpTexto" class="PopUpTextoCadeiraseMesasGamer">Cadeiras e Mesas Gamer</div>
                 <div class="PopUpTexto" class="PopUpTextoEletronicos">Eletronicos</div>
                 <div class="PopUpTexto" class="PopUpTextoNotebooksePortáteis">Notebooks e Portáteis</div>
                 <div class="PopUpTexto" class="PopUpTextoRedes&Wireless">Redes & Wireless</div>
                 <div class="PopUpTexto" class="PopUpTextoRealidade Virtual">Realidade Virtual</div>
                 <div class="PopUpTexto" class="PopUpTextoCasaInteligente">Casa Inteligente</div>
                 <div class="PopUpTexto" class="PopUpTextoMundoGeek">Mundo Geek</div>
                 <div class="PopUpTexto" class="PopUpTextoOpenBox">OpenBox</div>
                 <div class="PopUpTexto" class="PopUpTextoCasaeLazer">Casa e Lazer</div>
                 <div class="PopUpTexto" class="PopUpTextoVideoGames">Video Games</div>
           <br>
                 <div class="PopUpTextoAjudaeConfigurações">Ajuda e Configurações</div>
                 <div class="PopUpTexto" class="PopUpTextoMinhaConta">Minha Conta</div>
                 <div class="PopUpTexto" class="PopUpTextoQuemSomos">Quem Somos</div>
                 <div class="PopUpTexto" class="PopUpTextoAtendimentoAoCliente">Atendimento ao Cliente</div>
                 <div class="PopUpTexto" class="PopUpTextoComoComprar">Como Comprar</div> 
              </div>
           </span>
              <button class="botão-menu">
                 <img class="BotãoMenuCabeçalhoBaixoImagem" src="./imagens/menu-aberto.png" alt="">
                 <div class="BotãoMenuCabeçalhoBaixoAcesse">Acesse todos os</div>
                 <div class="BotãoMenuCabeçalhoBaixoDepartamentos">DEPARTAMENTOS</div>
              </button>
        </div>
        <div class="div-inputInicio"><input class="pesquisaInicioHome" type="text" placeholder="Digite o que você procura..."></div>
     </div>
  </div>

        <!-- Fim do cabeçalho -->        <!-- Fim do cabeçalho -->        <!-- Fim do cabeçalho -->        <!-- Fim do cabeçalho -->
<div class="tudocadastro">
   <img class="imagemcriarconta" src="./imagens/profile plus.png" alt="">
   <div class="CriarMinhaConta">Criar minha conta</div>
   <div class="InformeOsSeusDadosAbaixo">informe os seus dados abaixo para criar a sua conta</div>
   <div class="Div01TudoCadastro">
   <form action="cadastro_banco.php" method="post">   
      <input class="NomeCriarConta" type="text" placeholder="Nome" name="nome">
      <input class="SobrenomeCriarConta" type="text" placeholder="Sobrenome" name="sobrenome">
   </div>
   <div class="Div02TudoCadastro">
      
         <input class="CPFCriarConta" type="text" placeholder="CPF*" name="cpf">
         <input class="RGCriarConta" type="text" placeholder="RG" name="rg">
      </div>
         <input class="E-MailCriarConta" type="text" placeholder="E-mail*" name="email">
      <br>
         <input class="SenhaCriarConta" type="text" placeholder="Senha" name="senha">
      
   <div>
      <input class="AceitoReceberMarketingOldin" type="submit" value="entrar">
      Aceito receber Markeging da Oldin por e-mail
   </div>
   <div>
      <input class="EstouCienteeConcordoComOsTermosDeUso" type="checkbox">
      Estou ciente e CONCORDO com os termos de uso e políticas de privacidade
   </div>
   <div class="VocêDeveAceitarOsTermosDeUso">você deve aceitar os termos da Oldin para criar sua conta</div>
   <input type="submit" value="Criar Conta" name="cadastrar" class="CriarContaTudoCadastro">
   </form>
   <br>   
   <a class="VoltarParaoLogin" href="cadastro.html">Voltar para o Login</a>
</div>

 

</body>
<script src="script.js"></script>
</html>