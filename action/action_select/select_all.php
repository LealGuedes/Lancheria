<?php
require_once"../class/BancoDados.class.php";
require_once"../class/Pessoa.class.php";
require_once"../class/PessoaDao.class.php";
require_once"../class/InterfacePessoa.class.php";

if(isset($_POST["select"])){
$objPessoaDao = new PessoaDao();

		if($objPessoaDao->selectAll()!=false){
		$array_retornado =$objPessoaDao->selectAll();
		$qtd_obj=count($array_retornado);
				if($qtd_obj==1){

					echo"CODIGO".$array_retornado[0]->codigo."<br/>";
					echo"NOME:".$array_retornado[0]->nome."<br/>";
					echo"EMAIL:".$array_retornado[0]->email."<br/>";
					echo"SENHA:".$array_retornado[0]->senha."<br/>";
					echo"STATUS".$array_retornado[0]->status."<br/>";	
				}else{
					foreach($array_retornado as $obj_retornado){

									echo"CODIGO".$obj_retornado->codigo."<br/>";
									echo"NOME:".$obj_retornado->nome."<br/>";
									echo"EMAIL:".$obj_retornado->email."<br/>";
									echo"SENHA:".$obj_retornado->senha."<br/>";
									echo"STATUS".$obj_retornado->status."<br/>";
									echo"<br/>";			
					}
				}
		}else{

			echo"Houve um erro na consulta!!!";
		}
}
?>