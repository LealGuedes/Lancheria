<?php
require_once"BancoDados.class.php";
require_once"interfacePedido.class.php";
class Pedido extends BancoDados implements interfacePedido {
	
	private $codigo;
	private $bebida;
	private $lanche;
	private $horas;
	private $totalPedido;
	private $situacaotelentrega;
	private $endereco;

	//construct
	function __construct(){

	}

	//setters
	public function setCodigo($v){

		$this->codigo=$v;
	}

	public function setBebida($v){

		$this->bebida=$v;
	}
	public function setLanche($v){

		$this->lanche=$v;
	}
	public function setHoras($v){

		$this->horas=$v;
	}
	public function setTotalPedido($v){

		$this->totalPedido = $v;
	}
	public function setSituacaoTelentrega($v){

		$this->situacaotelentrega=$v;
	}
	public function setEndereco($v){

			$this->endereco=$v;
	}

	//getters

	public function getCodigo(){

		return $this->codigo;
	}

	public function getBebida(){

		return $this->bebida;
	}
	public function getLanche(){

		return $this->lanche;
	}
	public function getHoras(){

		return $this->horas;
	}
	public function getTotalPedido(){

		return $this->totalPedido;
	}
	public function getSituacaoTelentrega(){

		return $this->situacaotelentrega;
	}
	public function getEndereco(){

			return $this->endereco;
	}

	//metodos

	public function CadastrarPedido($objLanche,$objBebida){

			$this->setLanche($objLanche);
			$this->setBebida($objBebida);	
	}
	public function DeletarPedido(){

			return $this->getCodigo();	
	}
	public function AlterarLanche(){//busca o Lanche para alterar

		return $this->getLanche();
	}
	public function AtualizaLanche($objLanche){

			$this->setLanche($objLanche);
	}
	public function AlterarBebida(){//busca o Lanche para alterar

		return $this->getBebida();
	}
	public function AtualizaBebida($objBebida){

			$this->setBebida($objBebida);
	}
	public function RemoveLanche(){

			return $this->getLanche();
	}
	public function RemoveBebida(){

			return $this->getBebida();
	}

}
?>