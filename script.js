function divMenu(el) {
    var display = document.getElementById(el).style.display;
    if (display == "none")
      document.getElementById(el).style.display = 'block';
    else
      document.getElementById(el).style.display = 'none';
  }

  function TrocarTema (tema)
  {
    document.body.classList.remove('Preto');
    document.body.classList.remove('branco');
   
    document.body.classList.add(tema);
    }
    


    /* POP PAGINA HOME */

    function myFunction() {
      var popup = document.getElementById("myPopup");
      popup.classList.toggle("show");
    }

    /* POP UP PAGINA Cadastro Abaixo */

    function myFunctionCadastro() {
      var papupCadastro = document.getElementById("myPapupCadastro");
      papupCadastro.classList.toggle("show");
    }