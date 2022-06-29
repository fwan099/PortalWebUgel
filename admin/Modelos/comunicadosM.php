<?php 

 require_once "ConexionBD.php";

 class ComunicadosM extends ConexionDB{

        //Crear Comunicados

 	static public function CrearComunicadosM($tablaDB,$datosC){

 		$pdo = ConexionDB::cDB()->prepare("INSERT INTO $tablaDB (titulo,fecha, documento) VALUES (:titulo,:fecha, :documento)");

 		$pdo->bindParam(":titulo",$datosC["titulo"],PDO::PARAM_STR);
 		$pdo->bindParam(":fecha",$datosC["fecha"],PDO::PARAM_STR);
 		$pdo->bindParam(":documento",$datosC["documento"],PDO::PARAM_STR);


 		if ($pdo->execute()) {
 			
 			return true;
 		}else{

 			return false;
 		}

 		$pdo->close();
 	}

 	//ver comunicados

 	static public function VerComunicadosM($tablaDB, $item, $valor){

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

 	//actualizar comunicados
 	static public function ActualizarComunicadosM($tablaDB,$datosC){

 		$pdo= ConexionDB::cDB()->prepare("UPDATE $tablaDB SET titulo=:titulo, fecha =:fecha, documento=:documento WHERE id=:id");

        $pdo->bindParam(":id",$datosC["id"],PDO::PARAM_INT);
        $pdo->bindParam(":titulo",$datosC["titulo"],PDO::PARAM_STR);
        $pdo->bindParam(":fecha",$datosC["fecha"],PDO::PARAM_STR);
        $pdo->bindParam(":documento",$datosC["documento"],PDO::PARAM_STR);

        if ($pdo->execute()) {
            
            return true;
        }else{

            return false;
        }

        $pdo->close();
 	}

    // eliminar comunicados

    static public function BorrarComunicadosM($tablaDB,$id){

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