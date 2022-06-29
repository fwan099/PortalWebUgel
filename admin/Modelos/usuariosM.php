<?php 
require_once "ConexionBD.php";

class UsuariosM extends ConexionDB{

	static public function IngresarUsuariosM($datosC, $tablaDB){

		$pdo = ConexionDB::cDB()->prepare("SELECT nombres,apellidos,usuario, clave, foto, rol, id FROM $tablaDB WHERE usuario=:usuario");

		$pdo ->bindParam(":usuario",$datosC["usuario"],PDO::PARAM_STR);

		$pdo->execute();

		return $pdo ->fetch();

		$pdo->close();
	}

	// ver usuarios

	static public function VerUsuariosM($tablaDB){

		$pdo = ConexionDB::cDB()->prepare("SELECT id,nombres,apellidos, usuario, clave, foto, rol FROM $tablaDB");

		$pdo->execute();

		return $pdo->fetchAll();

		$pdo->close;
	}

	//Crear Usuarios

	static public function CrearUsuariosM($tablaDB,$datosC){

		$pdo = ConexionDB::cDB()->prepare("INSERT INTO $tablaDB (nombres,apellidos,usuario,clave,rol,foto) VALUES (:nombres,:apellidos,:usuario, :clave, :rol, :foto)");

		$pdo->bindParam(":nombres",$datosC["nombres"],PDO::PARAM_STR);
		$pdo->bindParam(":apellidos",$datosC["apellidos"],PDO::PARAM_STR);
		$pdo->bindParam(":usuario",$datosC["usuario"],PDO::PARAM_STR);
		$pdo->bindParam(":clave",$datosC["clave"],PDO::PARAM_STR);
		$pdo->bindParam(":rol",$datosC["rol"],PDO::PARAM_STR);
		$pdo->bindParam(":foto",$datosC["foto"],PDO::PARAM_STR);

		if($pdo->execute()){
			return true;
		}else{
			return false;
		}

		$pdo->close();
	}

	//borrar usuarios

	static public function BorrarUsuariosM($tablaDB,$datosC){

		$pdo = ConexionDB::cDB()->prepare("DELETE FROM $tablaDB WHERE id = :id");

		$pdo ->bindParam(":id",$datosC,PDO::PARAM_INT);

		if($pdo->execute()){
			return true;
		}else{
			return false;
		}

		$pdo->close();

	}

	// LLamar datos para editarlos

	static public function EUsuariosM($tablaDB,$item,$valor){

		if($item!=null){
			$pdo = ConexionDB::cDB()->prepare("SELECT id,nombres,apellidos, usuario, clave, foto, rol FROM $tablaDB WHERE $item = :$item ");
			$pdo ->bindParam(":".$item,$valor,PDO::PARAM_STR);

			$pdo->execute();


			return $pdo->fetch();


		}else{

			$pdo = ConexionDB::cDB()->prepare("SELECT id,nombres,apellidos, usuario, clave, foto, rol  FROM $tablaDB  ");
		

			$pdo->execute();

			return $pdo->fetchAll();


		}

		$pdo->close();
	}


	//Actualizar Usuarios
	static public function ActualizarUsuariosM($tablaDB,$datosC){

		$pdo = ConexionDB::cDB()->prepare("UPDATE $tablaDB SET nombres=:nombres, apellidos=:apellidos, usuario =:usuario, clave=:clave, rol=:rol, foto=:foto WHERE id=:id");

		$pdo->bindParam(":id", $datosC["id"],PDO::PARAM_INT);
		$pdo->bindParam(":nombres", $datosC["nombres"],PDO::PARAM_STR);
		$pdo->bindParam(":apellidos", $datosC["apellidos"],PDO::PARAM_STR);
		$pdo->bindParam(":usuario", $datosC["usuario"],PDO::PARAM_STR);
		$pdo->bindParam(":clave", $datosC["clave"],PDO::PARAM_STR);
		$pdo->bindParam(":rol", $datosC["rol"],PDO::PARAM_STR);
		$pdo->bindParam(":foto", $datosC["foto"],PDO::PARAM_STR);

		if($pdo->execute()){
			return true;
		}else{
			return false;
		}

		$pdo->close();

	}

	//Ver prefil del usuario

	static public function VerPerfilM($tablaDB,$id){

		$pdo = ConexionDB::cDB()->prepare("SELECT id, nombres, apellidos, usuario, clave, foto FROM $tablaDB WHERE id=:id");

		$pdo->bindParam(":id",$id,PDO::PARAM_INT);

		$pdo->execute();

		return $pdo->fetch();

		$pdo->close;
	}


}


 ?>