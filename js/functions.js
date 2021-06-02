$(function(){  

    alert("entrei na função js que age nas exclusões!!!!");

    var btnClicado = document.getElementsByTagName("button"); //recupera todos os botoes da pagina

   for(var i=0; i< btnClicado.length; i++){ //percorre por todos os botoes 

           btnClicado[i].addEventListener("click",function(){ //verifica qual dos botoes foi clicado
                        
                
                        //alert("cliquei no botao"+this.innerText);
                        //alert("O botão possui o atributo"+this.getAttribute("class"));

                        //console.log(this.parentNode.parentNode);
                if(this.getAttribute("name")=="remover"){ //verifica se o botao clicado possui a classe:'btn-danger', neste caso será o botao de excluir

                        alert("O botao possui a classe para efetuar a exclusao!!");
                        var confirm =window.confirm("Tem certeza que voce deseja EXCLUIR ESTE PRODUTO DO CARRINHO?");
                        if(confirm == true){

                            this.parentNode.parentNode.parentNode.remove();
                        
                        }else{

                                alert("O botao nao possui a classe esperada!!"+this.getAttribute("name"));
                        }        
                }

                });
        }
});

