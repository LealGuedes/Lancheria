<?php
require_once"../class/BancoDados.class.php";
require_once"../class/Pessoa.class.php";
require_once"../class/PessoaDao.class.php";
require_once"../class/InterfacePessoa.class.php";

if(isset($_POST["editar"])){

$objPessoa = new Pessoa();
$objPessoaDao = new PessoaDao();

$codigoOculto=$_POST["codigooculto"];
$nome=$_POST["nome"];
$email=$_POST["email"];
$senha=$_POST["senha"];

$objPessoa->Cadastrar($nome,$email,$senha);

if($objPessoaDao->Update($objPessoa)==true){

	echo"Dados alterados com sucesso!!";
}else{

	echo"Erro ao tentar efetuar Atualização!!";
}
}
?>