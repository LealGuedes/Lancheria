<nav id="menu-principal" class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div id="container-menu-principal" class="container">
            <a class="navbar-brand" href="#" >ÂndersonLanches</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div   class="collapse navbar-collapse" id="navbarCollapse">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" js-scroll-trigger href="#" >Home <span class="sr-only">(current)</span></a>
                </li>
              </ul>
              <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Cardápio
                  </a>
                  <div class="dropdown-menu" js-scroll-trigger aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#cachorro">cachorros</a>
                    <a class="dropdown-item" href="#pizzas">pizzas</a>
                  </div>
                </li>
                <!--<li class="nav-item">
                  <a class="nav-link" js-scroll-trigger href="#cardapio">Cardápio</a>
                </li>-->
                 <!--<li class="nav-item">
                  <a class="nav-link " href="#" data-toggle="modal" data-target="#Modal-cadastro">Cadastrar</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" data-toggle="modal" data-target="#Modal-login" disabled>Login</a>
                </li>-->
                <?php
                    if(isset($_SESSION["carrinho"])){

                        $soma=0;
                        $qtd =count($_SESSION['carrinho']);
                        foreach($_SESSION['carrinho'] as $meu_carrinho){
                                            

                                            $soma=$soma+$meu_carrinho;
                        }
                         echo"<li class='nav-item'>

                                  <a class='nav-link' href='./inc/carrinho.inc.php?acao=visualiza-no-carrinho'>Meu Carrinho<span class='badge badge-danger ml-1'>".$qtd."<span></a>
                              </li>";
                    }else{
                          echo"<li class='nav-item desable'><a class='nav-link' href='./inc/carrinho.inc.php' >Meu Carrinho:<span class='badge badge-danger ml-1'>0</span></a>
                          </li>";
                    }
                ?>
              </ul>
            </div>
        </div>
  </nav>
