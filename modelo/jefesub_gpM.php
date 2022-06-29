<?php 

require_once "../../admin/modelos/ConexionBD.php";


class JefeSubM extends ConexionDB{

	static public function MostrarJefeSub1M($tablaDB){

		$pdo = ConexionDB::cDB()->prepare("SELECT  nombres, celular, correo, whatsapp, foto FROM $tablaDB WHERE id=1 ");

		$pdo->execute();


		return $pdo->fetch();

		$pdo->close();
	}


	static public function MostrarJefeSub2M($tablaDB){

		$pdo = ConexionDB::cDB()->prepare("SELECT  nombres, celular, correo, whatsapp, foto FROM $tablaDB WHERE id=2 ");

		$pdo->execute();


		return $pdo->fetch();

		$pdo->close();
	}

	static public function MostrarJefeSub3M($tablaDB){

		$pdo = ConexionDB::cDB()->prepare("SELECT  nombres, celular, correo, whatsapp, foto FROM $tablaDB WHERE id=3 ");

		$pdo->execute();


		return $pdo->fetch();

		$pdo->close();
	}


	static public function MostrarJefeSub4M($tablaDB){

		$pdo = ConexionDB::cDB()->prepare("SELECT  nombres, celular, correo, whatsapp, foto FROM $tablaDB WHERE id=4 ");

		$pdo->execute();


		return $pdo->fetch();

		$pdo->close();
	}





}


 ?>