<?php
session_start();
if(isset($_GET["acao"])&&($_GET["acao"]=="inserir-no-carrinho")){

        
          $codigo_oculto = $_GET["codigo_oculto"];
        if(!(isset($_SESSION["carrinho"]))){//verifica se nao há um carrinho criado.Se nao estiver criamos.

      
              $_SESSION["carrinho"] = array();    
          }

          if(!isset($_SESSION["carrinho"][$codigo_oculto])){

            /*verifica se existe um arra carrinho com o indice 'codigo_oculto'.Se nao existir cria inserindo a quantidade 1*/

                $_SESSION["carrinho"][$codigo_oculto]=1;

          }else{

                $_SESSION["carrinho"][$codigo_oculto]+=1;           
          }        
}

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--<meta name="viewport" content="width=378">-->
    <!-- Bootstrap CSS -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:wght@100;500&display=swap" rel="stylesheet">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <link rel="stylesheet" href="css/pricing.css">
    <title>Lancheria</title>
  </head>
  <body>
    <?php

          //require_once"class/";
          //require_once"action/";
          //ATENÇÂO:TODAS AS CLASSES E INTERFACES DO SISTEMA CRIADAS.ARQUIVOS ATUALIZADOS:25/04/20
    ?>
    <header>
    <?php
        include"./inc/menu-principal.inc.php";
     ?>
    </header>
    <section>
       <?php

        include"./inc/carousel.inc.php";

        ?>
    </section>
    <main class="main">
      <div class="album py-5 bg-light">
          <div class="container">
            <h1 class='my-5 category' id="cachorro" style='border-left:15px solid rgba(255,69,0,0.9);padding-left:10px;'>Cachorros</h1>
            <div class="row row-content">
                 <?php

                  include"./inc/caos.inc.php";

                ?>    
              </div>
              <h1 class='my-5 category' id="pizzas" style='border-left:15px solid rgba(255,69,0,0.9);padding-left:10px;'>Pizzas</h1>
              <div class="row row-content" >
                <?php

                  include"./inc/pizzas.inc.php";

                ?> 
              </div>
          </div>
      </div>
              <?php

                  include"./inc/modal-cadastro.inc.php";

                ?>
                <?php

                  include"./inc/modal-login.inc.php";

                ?>      
     </main>
     
 <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
     <!--<script src="js/jquery.easing.min.js"></script>-->
     <!--<script src="js/scrolling-nav.js"></script>-->
    <script src="js/meu_scrolltop.js"></script>
    <!--<script src="js/responsive.js"></script>-->
  </body>
</html>