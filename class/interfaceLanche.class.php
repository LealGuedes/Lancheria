<?php
interface interfaceLanche{

 abstract function CadastraLanche($f,$c,$i,$p);
 abstract function AlterarLanche();
 abstract function AtualizaLanche($c,$i,$p);
 abstract function RemoveLanche();	
}
?>