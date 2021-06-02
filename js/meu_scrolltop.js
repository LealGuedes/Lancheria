  $(function(){  //scrol com animate funcionando

              var link_clicado = $("nav#menu-principal div#container-menu-principal div#navbarCollapse li a");//recupera o link que for clicado

          link_clicado.on("click",function(){//quando este link for clicado dispara a funcao
              
              var href_link = $(this).attr("href");//recupera o 'href' do link clicado
              
              $("html, body").animate({scrollTop:$(href_link).offset().top},2000);/*animando o 'body' e 'html', para ficar um scroll animado, porisso '$().animate()'.O 'scrollTop:' inidica que o scroll em relacao ao topo será ativado.O paramentro '$(href_link).offset().top' é para onde será feito o scroll, em que posicao o local direcionado se encontra, e o parametro '2000' é o tempo de animacao:2segundos.*/

          })
      });

//meuscrolltop