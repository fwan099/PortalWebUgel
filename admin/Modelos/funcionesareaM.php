<?php 

 require_once "ConexionBD.php";

class FuncionesAreaM{

	static public function CrearFuncionesAreaM($tablaDB,$datosC){


 		$pdo = ConexionDB::cDB()->prepare("INSERT INTO $tablaDB (funcion) VALUES (:funcion)");

 		$pdo->bindParam(":funcion",$datosC["funcion"],PDO::PARAM_STR);

 		if ($pdo->execute()) {
 			
 			return true;
 		}else{

 			return false;
 		}

 		$pdo->close();

	}

	//Ver funciones del area

	static public function VerFuncionesAreaM($tablaDB, $item, $valor){
		 if($item != null){

            $pdo = ConexionDB::cDB()->prepare(" SELECT * FROM $tablaDB WHERE $item=:$item");

            $pdo ->bindParam(":".$item, $valor,PDO::PARAM_STR);

            $pdo->execute();

            return $pdo->fetch();



        }else{

            $pdo = ConexionDB::cDB()->prepare(" SELECT * FROM $tablaDB ORDER BY id DESC");

            $pdo ->bindParam(":".$item, $valor,PDO::PARAM_STR);

            $pdo->execute();

            return $pdo->fetchAll();


        }

        $pdo->close();
	}

	//actualizar funciones del area

	static public function ActualizarFuncionesAreaM($tablaDB,$datosC){

		$pdo= ConexionDB::cDB()->prepare("UPDATE $tablaDB SET funcion=:funcion WHERE id=:id");

		$pdo->bindParam(":id",$datosC["id"],PDO::PARAM_INT);
        $pdo->bindParam(":funcion",$datosC["funcion"],PDO::PARAM_STR);

        if ($pdo->execute()) {
            
            return true;
        }else{

            return false;
        }

        $pdo->close();


	}

	//elimianr funcion

	static public function BorrarFuncionesAreaM($tablaDB, $id){
		 $pdo = ConexionDB::cDB()->prepare("DELETE FROM $tablaDB WHERE id=:id");

		 $pdo->bindParam(":id",$id,PDO::PARAM_INT);

        if ($pdo->execute()) {
            
            return true;
        }else{

            return false;
        }

        $pdo->close();
	}
}

 ?>