<?php 
require_once "ConexionBD.php";

class JefeSubM extends ConexionDB{

	//ver nosostros

	static public function VerJefeSubM($tablaDB,$item,$valor){

		 if($item != null){

            $pdo = ConexionDB::cDB()->prepare(" SELECT * FROM $tablaDB WHERE $item=:$item");

            $pdo ->bindParam(":".$item, $valor,PDO::PARAM_STR);

            $pdo->execute();

            return $pdo->fetch();



        }else{

            $pdo = ConexionDB::cDB()->prepare(" SELECT * FROM $tablaDB ORDER BY id ASC");


            $pdo->execute();

            return $pdo->fetchAll();


        }

        $pdo->close();

		
	}

	//editar nosotros

	static public function EditarJefeSubM($tablaDB,$id){

		$pdo =  ConexionDB::cDB()->prepare("SELECT id, nombres, celular, correo, whatsapp, foto FROM $tablaDB WHERE id = :id ");

		$pdo->bindParam(":id",$id,PDO::PARAM_INT);

		$pdo->execute();

		return $pdo->fetch();

		$pdo->close();

	}

	// Actualizar nosostros

	static public function ActualizarJefeSubM($tablaDB,$datosC){

		$pdo= ConexionDB::cDB()->prepare("UPDATE $tablaDB SET nombres=:nombres, celular=:celular,correo=:correo, whatsapp=:whatsapp, foto=:foto WHERE id=:id");

		$pdo->bindParam(":id",$datosC["id"],PDO::PARAM_INT);
        $pdo->bindParam(":nombres",$datosC["nombres"],PDO::PARAM_STR);
        $pdo->bindParam(":celular",$datosC["celular"],PDO::PARAM_STR);
        $pdo->bindParam(":correo",$datosC["correo"],PDO::PARAM_STR);
        $pdo->bindParam(":whatsapp",$datosC["whatsapp"],PDO::PARAM_STR);
        $pdo->bindParam(":foto",$datosC["foto"],PDO::PARAM_STR);

        if ($pdo->execute()) {
            
            return true;
        }else{

            return false;
        }

        $pdo->close();

	

	}


}


 ?>