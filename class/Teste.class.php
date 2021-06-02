<?php
class Teste{
	
	public $nome;
	public $email;
	public $senha;
	private $cpf;

 public function ExibirEstatus(){

 	echo"NOME:".$this->nome."<br/>";
 	echo"EMAIL:".$this->email."<br/>";
 	echo"SENHA:".$this->senha."<br/>";
 	echo"CPF:".$this->cpf."<br/>";
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
 public function getCpf(){

 	return $this->cpf;
 }

 //setters

  public function setNome($val){

 	$this->nome =$val;
 }
 public function setEmail($val){

 	$this->email =$val;
 }
 public function setSenha($val){

 	$this->senha=$val;
 }
 public function setCpf($val){

 	 $this->cpf =$val;
 }

}
?>