<?php 
require_once "ConexionBD.php";

class NosotrosM extends ConexionDB{

	//ver nosostros

	static public function VerNosotrosM($tablaDB){

		$pdo = ConexionDB::cDB()->prepare("SELECT id, mision, vision, imagen FROM $tablaDB ");
		$pdo->execute();

		return $pdo->fetch();

		$pdo->close();

		
	}

	//editar nosotros

	static public function EditarNosotrosM($tablaDB,$id){

		$pdo =  ConexionDB::cDB()->prepare("SELECT id, mision, vision, imagen FROM $tablaDB WHERE id = :id ");

		$pdo->bindParam(":id",$id,PDO::PARAM_INT);

		$pdo->execute();

		return $pdo->fetch();

		$pdo->close();

	}

	// Actualizar nosostros

	static public function ActualizarNosotrosM($tablaDB,$datosC){

		$pdo= ConexionDB::cDB()->prepare("UPDATE $tablaDB SET mision=:mision, vision=:vision,imagen=:imagen WHERE id=:id");

		$pdo->bindParam(":id",$datosC["id"],PDO::PARAM_INT);
        $pdo->bindParam(":mision",$datosC["mision"],PDO::PARAM_STR);
        $pdo->bindParam(":vision",$datosC["vision"],PDO::PARAM_STR);
        $pdo->bindParam(":imagen",$datosC["imagen"],PDO::PARAM_STR);

        if ($pdo->execute()) {
            
            return true;
        }else{

            return false;
        }

        $pdo->close();

	}


}


 ?>