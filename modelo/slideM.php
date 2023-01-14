<?php 

require_once "ConexionBD.php";

class SlideM extends ConexionBD{

	static public function MostrarSlideM($tablaDB){

		$pdo = ConexionBD::cDB()->prepare("SELECT orden, imagen FROM $tablaDB ORDER BY orden ASC");

		$pdo->execute();


		return $pdo->fetchAll();

		$pdo->close();
	}



}


 ?>