<?php 

require_once "../../admin/modelos/ConexionBD.php";


class JefeAreaM extends ConexionDB{

	static public function MostrarJefeAreaM($tablaDB){

		$pdo = ConexionDB::cDB()->prepare("SELECT  nombres, celular, correo, whatsapp, foto FROM $tablaDB ");

		$pdo->execute();


		return $pdo->fetchAll();

		$pdo->close();
	}



}


 ?>