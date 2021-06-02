<?php
require_once"BancoDados.class.php";
require_once"interfaceBebida.class.php";

class Bebida extends BancoDados implements interfaceBebida {

	private $codigo;
	private $fotoBebida;
	private $categoriaBebida;
	private $preco;

	//construct

	function __construct(){

	}

	//setters

	public function setCodigo($v){

		$this->codigo=$v;

	}
	public function setFotoBebida($v){

		$this->fotoBebida=$v;

	}
	public function setCategoBebida($v){

		$this->categoriaBebida=$v;

	}
	public function setPreco($v){

		$this->preco=$v;

	}

	//getters

	public function getCodigo(){

		return $this->codigo;

	}
	public function getFotoBebida(){

		return $this->fotoBebida;

	}
	public function getCategoBebida(){

		return $this->categoriaBebida;

	}
	public function getPreco(){

		return $this->preco;

	}

	//Metodos
	
	public function CadastraBebida($f,$c,$p){

			$this->setFotoBebida($f);
			$this->setCategoBebida($c);
			$this->setPreco($p);
	}
	public function AtualizaBebida(){

			return $this->getCodigo();
	}
	public function DeletaBebida(){

			return $this->getCodigo();
	}
}
?>