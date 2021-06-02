<?php
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
                                    2=>'img/cao-simples.jpg',
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
                                    5=>'Molho, codorna,salaminho, cebola.',
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
$qtdlanches=count($array_lanches["id"]);
echo"<h1>Cachorros</h1>";
for($i=1;$i<=$qtdlanches; $i++){

          echo"<div class='col-md-4'>";
          echo"<div class='card mb-4 shadow-sm'>";
            echo"<img class='bd-placeholder-img card-img-top' width='100%' height='225' src=".$array_lanches['imagens'][$i]." preserveAspectRatio='xMidYMid slice' focusable='false' role='img' aria-label='Placeholder: Thumbnail'></img>";
              echo"<div class='card-body'>";
                echo"<h5>".$array_lanches['nomes'][$i]."</h5>";
                echo"<p class='card-text'>".$array_lanches['ingredientes'][$i]."</p>";
                echo"<div class='d-flex justify-content-between align-items-center'>";
                  echo"<h1 class='card-title pricing-card-title'>$".$array_lanches['preco'][$i]."<small class='text-muted'></small></h1>";
                  echo"<div class='btn-group'>";
                  //echo"<button type='button'class='btn btn-sm btn-outline-secondary'>View</button>";
                  echo"<form action='#' method='get'><a type='submit' class='btn btn-sm btn-outline-secondary' name='inserir-no-carrinho' href='./index.php?acao=inserir-no-carrinho&codigo_oculto=".$array_lanches['id'][$i]."'>Inserir no Carrinho</a></form>";
                  echo"</div>";
                echo"</div>";
               echo"</div>";
              echo"</div>";
          echo"</div>";  
}

?>