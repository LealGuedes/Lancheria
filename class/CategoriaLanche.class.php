<?php
require_once"BancoDados.class.php";
require_once"interfaceCategoriaLanche.class.php";

class  CategoriaLanche extends BancoDados implements interfaceCategoriaLanche {

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
	
	public function CadastraCategoriaLanche($d){

			$this->setDescricao($d);
	}
	public function AtualizaLanche(){

			return $this->getCodigo();
	}
	public function DeletaLanche(){

			return $this->getCodigo();
	}

}
?>