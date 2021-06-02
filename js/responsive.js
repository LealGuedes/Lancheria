$(function(){


    $(window).resize(function() {
        
        var largura =window.innerWidth;

        if((largura>0)&&(largura<=332)){

                    alert("A largura eh:"+largura);
                    $(".btn-danger").addClass("btn-lg btn-block");
                    $(".bg-btn-alterar").addClass("btn-lg btn-block");
        }else{

            $(".btn-danger").removeClass("btn-lg btn-block");
            $(".bg-btn-alterar").removeClass("btn-lg btn-block");
        }
      });

});