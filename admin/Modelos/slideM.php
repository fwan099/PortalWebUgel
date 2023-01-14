<?php 
 require_once "ConexionBD.php";

 class SlideM extends ConexionDB{

    // Crear Slider

 	static public function CrearSlideM($tablaDB,$datosC){


 		$pdo = ConexionDB::cDB()->prepare("INSERT INTO $tablaDB (orden, imagen) VALUES (:orden, :imagen)");

 		$pdo->bindParam(":orden",$datosC["orden"],PDO::PARAM_STR);
 		$pdo->bindParam(":imagen",$datosC["imagen"],PDO::PARAM_STR);

 		if ($pdo->execute()) {
 			
 			return true;
 		}else{

 			return false;
 		}

 		$pdo->close();

 	}

    //Ver slider

    static public function VerSlideM($tablaDB, $item, $valor){

        if($item != null){

            $pdo = ConexionDB::cDB()->prepare(" SELECT id, orden,imagen FROM $tablaDB WHERE $item=:$item");

            $pdo ->bindParam(":".$item, $valor,PDO::PARAM_STR);

            $pdo->execute();

            return $pdo->fetch();



        }else{

            $pdo = ConexionDB::cDB()->prepare(" SELECT id,orden,imagen FROM $tablaDB ORDER BY orden ASC");


            $pdo->execute();

            return $pdo->fetchAll();


        }

        $pdo->close();


    }

    //Actualizar slide

    static public function ActualizarSlideM($tablaDB,$datosC){

        $pdo= ConexionDB::cDB()->prepare("UPDATE $tablaDB SET orden=:orden, imagen=:imagen WHERE id=:id");

        $pdo->bindParam(":id",$datosC["id"],PDO::PARAM_INT);
        $pdo->bindParam(":orden",$datosC["orden"],PDO::PARAM_STR);
        $pdo->bindParam(":imagen",$datosC["imagen"],PDO::PARAM_STR);

        if ($pdo->execute()) {
            
            return true;
        }else{

            return false;
        }

        $pdo->close();
    }


    //borrar slide

    static public function BorrarSlideM($tablaDB,$id){
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