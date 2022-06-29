<?php 

require_once "admin/modelos/ConexionBD.php";

class SlideM extends ConexionDB{

	static public function MostrarSlideM($tablaDB){

		$pdo = ConexionDB::cDB()->prepare("SELECT orden, imagen FROM $tablaDB ORDER BY orden ASC");

		$pdo->execute();


		return $pdo->fetchAll();

		$pdo->close();
	}



}


 ?>