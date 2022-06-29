<?php 

require_once "ConexionBD.php";


class ComunicadosM extends ConexionBD{

	static public function MostrarComunicadosM($tablaDB){

		$pdo = ConexionBD::cDB()->prepare(" SELECT titulo, documento , DATE_FORMAT(fecha,'%d-%m-%Y') AS niceDate FROM $tablaDB ORDER BY fecha DESC");

		$pdo->execute();


		return $pdo->fetchAll();

		$pdo->close();
	}





}


 ?>