<?php
require_once"BancoDados.class.php";
require_once"interfaceUsuario.class.php";

class Usuario extends BancoDados implements interfaceUsuario {
	
	private $codigo;
	private $nome;
	private $email;
	private $senha;
	private $status;

	//construct
	public function __construct(){

		//
	}
	
	//setters
	public function setCodigo($c){

		$this->codigo=$c;
	}
	public function setNome($n){

		$this->nome=$n;
	}
	public function setEmail($e){

		$this->email=$e;
	}
	public function setSenha($s){

		$this->senha=$s;
	}
	public function setStatus(){

		$this->status="com";
	}
	
	//getters

	public function getCodigo(){

		return $this->codigo;
	}
	public function getNome(){

		return $this->nome;
	}
	public function getEmail(){

		return $this->email;
	}
	public function getSenha(){

		return $this->senha;
	}

	public function getStatus(){

		return $this->status;
	}
	//metodos
	public  function Cadastrar($n,$e,$s){

		$this->setNome($n);
		$this->setEmail($e);
		$this->setSenha($s);
		$this->setStatus();
	}
	 public function mostraStatus(){

   	echo"<h1>Os Dados da Pessoa Inserida foi:</h1></br>";
   	echo"NOME:".$this->getNome()."</br>";
   	echo"EMAL:".$this->getEmail()."</br>";
   }
}
?>