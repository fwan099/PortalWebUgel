<?php 

require_once "ConexionBD.php";


class OficiosM extends ConexionBD{

	static public function MostrarOficiosM($tablaDB){

		$pdo = ConexionBD::cDB()->prepare("SELECT  titulo, documento , DATE_FORMAT(fecha,'%d-%m-%Y') AS niceDate FROM $tablaDB ORDER BY fecha DESC LIMIT 0,5 ");

		$pdo->execute();


		return $pdo->fetchAll();

		$pdo->close();
	}



}


 ?>