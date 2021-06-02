<?php
require_once"BancoDados.class.php";
require_once"interfaceCategoriaBebida.class.php";

class  CategoriaBebida extends BancoDados implements interfaceCategoriaBebida {

	private $codigo;
	private $descricao;
	//construct

	function __construct(){

	}

	//setters

	public function setCodigo($v){

		$this->codigo=$v;

	}
	public function setDescricao($v){

		$this->descricao=$v;

	}
	//getters

	public function getCodigo(){

		return $this->codigo;

	}
	public function setDescricao(){

		return $this->descricao;

	}
	//Metodos
	
	public function CadastraCategoriaBebida($d){

			$this->setDescricao($d);
	}
	public function AtualizaBebida(){

			return $this->getCodigo();
	}
	public function DeletaBebida(){

			return $this->getCodigo();
	}

}
?>