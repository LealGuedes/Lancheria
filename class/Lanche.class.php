<?php
require_once"BancoDados.class.php";
require_once"interfaceLanche.class.php";
class Lanche extends BancoDados implements interfaceLanche {
	
	private $codigo;
	private $fotoLanche;
	private $ingredientes;
	private $categoriaLanche;
	private $preco;
	
	//construct
	function __construct(){

	}

	//setters
	public function setCodigo($v){

		$this->codigo=$v;
	}
	public function setFotoLanche($v){

		$this->fotoLanche=$v;
	}
	public function setIngredientes($v){

		$this->ingredientes=$v;
	}
	public function setpreco($v){

		$this->preco=$v;
	}
	public function setCategoriaLanche($v){

		$this->categoriaLanche=$v;
	}
	//getters

	public function getCodigo(){

		return $this->codigo;
	}
	public function getFotoLanche(){

		return $this->fotoLanche;
	}
	public function setIngredientes(){

		return $this->ingredientes;
	}
	public function setpreco(){

		return $this->preco;
	}
	public function setCategoriaLanche(){

		return $this->categoriaLanche;
	}
	//metodos

	public function CadastraLanche($f,$c,$i,$p){

		$this->setFotoLanche($f);
		$this->setCategoriaLanche($c);
		$this->setIngredientes($i);
		$this->setpreco($p);
	}
	public function AlterarLanche(){//busca o Lanche para alterar

		return $this->getCodigo();
	}
	public function AtualizaLanche($c,$i,$p){

			$this->CadastraLanche($c,$i,$p);
	}
	public function RemoveLanche(){

			return $this->getCodigo();
	}
}
?>