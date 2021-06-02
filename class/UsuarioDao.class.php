<?php
require_once"Usuario.class.php";
require_once"interfaceUsuario.class.php";
class UsuarioDao extends Usuario{
	
	//Metodos
   public  function Insert(Pessoa $obj){
   		
   		$pdo=parent::conexaoPdo();
		try{

			$sql="INSERT INTO usuarios(nome,email,senha,status)VALUES(?,?,?,?)";
			$insert=$pdo->prepare($sql);
			$insert->bindValue(1,$obj->getNome());
			$insert->bindValue(2,$obj->getEmail());
			$insert->bindValue(3,$obj->getSenha());
			$insert->bindValue(4,$obj->getStatus());
			if($insert->execute()){

				return true;
			}else{

				return false;
			}

		}catch(PDOException $e){
        
            		echo$e->getMessage();
            		echo$e->getCode();
        }
	}
	public function selectAll(){

		$pdo=parent::conexaoPdo();

			$sql="SELECT * FROM usuarios";
			$select=$pdo->prepare($sql);
			$res=array();

			if($select->execute()){
				$qtd = $select->rowCount();
				if($qtd == 1){//se for só um objeto

					$res[0] = $pdo->fetch(PDO::FETCH_OBJ);

					return $res[0];

				}else{//se for mais de um objeto
						
					for($i=0;$i<$qtd;$i++){

								$res[$i]=$select->fetch(PDO::FETCH_OBJ); 							
					}

					return $res;
				}
			}else{
				return false;
			}
	}
	public function Delete($val){

		$pdo=parent::conexaoPdo();
		try{

			$sql="DELETE FROM usuarios WHERE codigo =?";
			$delete=$pdo->prepare($sql);
			$delete->bindValue(1,$val);
			if($delete->execute()){

				return true;
			}else{

				return false;
			}

		}catch(PDOException $e){
        
            		echo$e->getMessage();
            		echo$e->getCode();
        }

	}
	public function Update(Pessoa $obj){

		$pdo=parent::conexaoPdo();
		$sql="UPDATE set nome=?, email=?,senha=?,tipo=? FROM usuarios WHERE codigo =?";
		$update=$pdo->prepare($sql);
		$update->bindValue(1,$obj->getNome());
		$update->bindValue(2,$obj->getEmail());
		$update->bindValue(3,$obj->getSenha());
		$update->bindValue(4,$obj->getStatus());

		if($update->execute()){

			return true;
		}else{

			return false;
		}

	}
}
?>