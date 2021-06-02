<?php
interface interfacePedido{
	
	public function CadastrarPedido($objLanche,$objBebida);
	public function DeletarPedido();
	public function AlterarLanche();
	public function AtualizaLanche($objLanche);
	public function AlterarBebida();
	public function AtualizaBebida($objBebida);
	public function RemoveLanche();
	public function RemoveBebida();
}
?>