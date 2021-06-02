<?php
require_once"../class/BancoDados.class.php";
require_once"../class/Pessoa.class.php";
require_once"../class/PessoaDao.class.php";
require_once"../class/InterfacePessoa.class.php";

if(isset($_POST["deletar"])){

$objPessoa = new Pessoa();
$objPessoaDao = new PessoaDao();
$codigoOculto=$_POST["codigooculto"];

if($objPessoaDao->Delete($codigoOculto)==true){

	echo"Exclusao efetuada com sucesso!!";
}else{

	echo"Erro ao tentar efetuar exclusao!!";
}
}
?>