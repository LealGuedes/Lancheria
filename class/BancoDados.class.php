<?php

class BancoDados{
	
private $pdo;


public function conexaoPdo(){
	
	try{

		$this->pdo=new PDO("mysql:host=localhost;dbname=teste","root","");

		//echo"banco de dados conectado com sucesso!!";
		$con = $this->pdo;
		return $con;

	}catch(PDOException $e){

				echo$e->getMessage();
				echo$e->getCode();

	}
}

}

?>