<?php
session_start();
$soma=0;
$array_lanches = array(

                      'id'=>array(

                                    1=>1,
                                    2=>2,
                                    3=>3,
                                    4=>4,
                                    5=>5,
                                    6=>6,
                                  ),
                      'nomes'=>array(

                                    1=>'Dog  Simples',
                                    2=>'Dog  Completo',
                                    3=>'Dogao da casa',
                                    4=>'Pizza de Morango ',
                                    5=>'Pizza de Codorna',
                                    6=>'Pizza de Molho Branco',
                      ),
                      'imagens'=>array(

                                    1=>'img/cao-simples.jpg',
                                    2=>'img/cao-completo.jpg',
                                    3=>'img/cao02.png',
                                    4=>'img/pizza01.png',
                                    5=>'img/pizza02.png',
                                    6=>'img/pizza01.png',
                          ),
                      'ingredientes'=>array(

                                    1=>'Molho, salsicha.',
                                    2=>'Molho, 2 salsicha,presunto, queijo.',
                                    3=>'Molho, Salsicha, tomate, beterraba, bata palha.',
                                    4=>'Morango,calda com Leite consensado.',
                                    5=>'Molho, cordona,salaminho, cebola.',
                                    6=>'Molho branco, Pimenta vermelha, alecrim.',
                      
                      ),
                      'preco'=>array(

                                    1=>7.0,
                                    2=>12.0,
                                    3=>9.0,
                                    4=>22.00,
                                    5=>19.00,
                                    6=>15.00,
                      )         
);


/*
$array_de_imagens_produtos=array(1=>"../img/cao-simples.jpg",2=>"../img/cao-simples.jpg",3=>"../img/cao02.png",4=>"../img/pizza01.png",5=>"../img/pizza02.png",6=>"../img/pizza01.png");*/
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/main.css">
     <link rel="stylesheet" href="../css/style-cads.css">
    <link rel="stylesheet" href="../css/carousel.css">
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
      #menu-carrinho{

      	background-color:rgba(255,69,0,0.9); 
      }
    </style>
    <link rel="stylesheet" href="../css/pricing.css">
    <title>Carrinho-Compras</title>
  </head>
  <body>
  	<nav id="menu-carrinho" class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  		
        <div id="container-menu-principal" class="container">
        	<a class="navbar-brand" href="#" >Meu Carrinho</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div   class="collapse navbar-collapse" id="navbarCollapse">
              <ul class="navbar-nav ml-auto">
                 <li class="nav-item">
                  <a class="nav-link" href="../index.php">retornar</a>
                </li>
            </div>
        </div>
  </nav>
  		<section class="container">
		  				<?php

              if((isset($_GET["acao"]))&&($_GET["acao"]=="visualiza-no-carrinho")){

                  $controlaqtd=count($_SESSION["carrinho"]);                  
                if(count($_SESSION["carrinho"])==0){


                                        echo"<div class='card text-white bg-danger mt-3' style='max-width: 100vw;'>
                                              <div class='card-header'>Alerta!</div>
                                              <div class='card-body'>
                                                <h5 class='card-title'>Prezado usuário</h5>
                                                <p class='card-text'>Você nao possui produtos no seu carrinho, retorne para inseri-los!.</p>
                                              </div>";

                }

                                   foreach ($_SESSION["carrinho"] as $indiceproduto => $qtdproduto){   

                                      echo"<div class='card right-left mt-3'>";
                                                echo"<div class='row '>";
                                                     echo"<div class='col-sm-5'>";
                                                echo"<img class='d-block' src=../".$array_lanches["imagens"][$indiceproduto]."  width='100%' height='225'>";
                                            echo"</div>";
                                                  echo"<div class='col-sm-7'>";
                                                    echo"<div class='card-block'>";
                                                echo"<form action='alterar_remover_finalizar_pedido.inc.php' method='post'>";
                                                               echo"<h3 class='card-title text-center'>".$array_lanches["nomes"][$indiceproduto]."</h3>";
                                                                echo"<h4 class='card-title'>Ingredientes:</h4>";
                                                   echo"<p>".$array_lanches["ingredientes"][$indiceproduto]."</p>";
                                                   echo"<p><h4 class='card-title'>Quantidade:".$qtdproduto."</h4>";
                                                      echo"<h4 class='card-title pricing-card-title'>$".$array_lanches["preco"][$indiceproduto]."<small class='text-muted'></small></h4>";
                                                      echo"<input type='hidden' class='form-control' id='qtdE' value=".$controlaqtd."></input>";
                                                      echo"<input type='hidden' class='form-control' id='codOcultoProd' name='codOcultoProd'  value=".$indiceproduto."></input>";
                                                       echo"<button type='submit' class='btn bg-btn-alterar mr-1 mt-1' name='alterar'>Alterar produto</button>";

                                                       echo"<button type='submit' class='btn btn-danger mt-1' name='remover' id='remover'  qtd-elemento='".$controlaqtd."' >Remover do carrinho</button>";
                                             echo"</form>";
                                                   echo"</div>";
                                                  echo"</div>";
                                                echo"</div>";
                                           echo"</div>";
                                    }
                         
               }elseif((!isset($_GET["acao"]))){

                      echo"<div class='card text-white bg-danger mt-3' style='max-width: 100vw;'>
                      <div class='card-header'>Alerta!</div>
                      <div class='card-body'>
                        <h5 class='card-title'>Prezado usuário</h5>
                        <p class='card-text'>Você nao possui produtos no seu carrinho, retorne para inseri-los!.</p>
                      </div>";
               } 
?>

  		</section>
  	 <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js"></script>
     <!--<script src="js/jquery.easing.min.js"></script>-->
     <!--<script src="js/scrolling-nav.js"></script>-->
    <!--<script src="../js/meu_scrolltop.js"></script>-->
  <!--<script src="../js/responsive.js"></script>-->
  </body>
</html>