<?php
require_once"../class/BancoDados.class.php";
require_once"../class/Pessoa.class.php";
require_once"../class/PessoaDao.class.php";
require_once"../class/InterfacePessoa.class.php";

if(isset($_POST["cadastrar"])){

$objPessoa = new Pessoa();
$objPessoaDao = new PessoaDao();

$nome=$_POST["nome"];
$email=$_POST["email"];
$senha=$_POST["senha"];

$objPessoa->Cadastrar($nome,$email,$senha);

if($objPessoaDao->Insert($objPessoa)){

		$objPessoa->mostraStatus();
}else{

	echo"Nao foi possivel fetuar a insercao!";
}
}

?>