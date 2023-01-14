<?php 

 require_once "ConexionBD.php";

 class ConvocatoriasCapM extends ConexionDB{

    //Crear Convocatorias

 	static public function CrearConvocatoriasCapM($tablaDB,$datosC){

 		$pdo = ConexionDB::cDB()->prepare("INSERT INTO $tablaDB (titulo,bases,cv1,reclamos,cv2,entrevista,final,estado, fecha) VALUES (:titulo,:bases,:cv1,:reclamos,:cv2,:entrevista,:final,:estado,:fecha)");

 		$pdo->bindParam(":titulo",$datosC["titulo"],PDO::PARAM_STR);
        $pdo->bindParam(":bases",$datosC["bases"],PDO::PARAM_STR);
        $pdo->bindParam(":cv1",$datosC["cv1"],PDO::PARAM_STR);
        $pdo->bindParam(":reclamos",$datosC["reclamos"],PDO::PARAM_STR);
        $pdo->bindParam(":cv2",$datosC["cv2"],PDO::PARAM_STR);
        $pdo->bindParam(":entrevista",$datosC["entrevista"],PDO::PARAM_STR);
        $pdo->bindParam(":final",$datosC["final"],PDO::PARAM_STR);
        $pdo->bindParam(":estado",$datosC["estado"],PDO::PARAM_STR);
 		$pdo->bindParam(":fecha",$datosC["fecha"],PDO::PARAM_STR);
 		


 			if ($pdo->execute()) {
 			
 			return true;
 		}else{

 			return false;
 		}

 		$pdo->close();
 	}

 	//ver comunicados

 	static public function VerConvocatoriasCapM($tablaDB, $item, $valor){

 		  if($item != null){

            $pdo = ConexionDB::cDB()->prepare(" SELECT * FROM $tablaDB WHERE $item=:$item");

            $pdo ->bindParam(":".$item, $valor,PDO::PARAM_STR);

            $pdo->execute();

            return $pdo->fetch();



        }else{

            $pdo = ConexionDB::cDB()->prepare(" SELECT * FROM $tablaDB ORDER BY id DESC");

           // $pdo ->bindParam(":".$item, $valor,PDO::PARAM_STR);

            $pdo->execute();

            return $pdo->fetchAll();


        }

        $pdo->close();
 	}

 	//actualizar convocatorias
 	static public function ActualizarConvocatoriasCapM($tablaDB,$datosC){

 		$pdo= ConexionDB::cDB()->prepare("UPDATE $tablaDB SET titulo=:titulo, bases=:bases, cv1=:cv1, reclamos=:reclamos, cv2=:cv2, entrevista=:entrevista, final=:final, estado=:estado, fecha =:fecha WHERE id=:id");

        $pdo->bindParam(":id",$datosC["id"],PDO::PARAM_INT);
        $pdo->bindParam(":titulo",$datosC["titulo"],PDO::PARAM_STR);
        $pdo->bindParam(":bases",$datosC["bases"],PDO::PARAM_STR);
        $pdo->bindParam(":cv1",$datosC["cv1"],PDO::PARAM_STR);
        $pdo->bindParam(":reclamos",$datosC["reclamos"],PDO::PARAM_STR);
        $pdo->bindParam(":cv2",$datosC["cv2"],PDO::PARAM_STR);
        $pdo->bindParam(":entrevista",$datosC["entrevista"],PDO::PARAM_STR);
        $pdo->bindParam(":final",$datosC["final"],PDO::PARAM_STR);
        $pdo->bindParam(":estado",$datosC["estado"],PDO::PARAM_STR);
        $pdo->bindParam(":fecha",$datosC["fecha"],PDO::PARAM_STR);

        if ($pdo->execute()) {
            
            return true;
        }else{

            return false;
        }

        $pdo->close();
 	}

   // eliminar comunicados

    static public function BorrarConvocatoriasCapM($tablaDB,$id){

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