<?php 

require_once "ConexionBD.php";


class ComunicadosM extends ConexionDB{

	static public function MostrarComunicadosM($tablaDB){

		$pdo = ConexionDB::cDB()->prepare("SELECT  titulo, documento , DATE_FORMAT(fecha,'%d-%m-%Y') AS niceDate FROM $tablaDB ORDER BY fecha DESC LIMIT 0,5 ");

		$pdo->execute();


		return $pdo->fetchAll();

		$pdo->close();
	}



}


 ?>