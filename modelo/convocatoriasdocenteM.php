<?php 

require_once "ConexionBD.php";


class ConvocatoriasDocenteM extends ConexionBD{

	static public function MostrarConvocatoriasDocenteM($tablaDB){

		$pdo = ConexionBD::cDB()->prepare(" SELECT * FROM $tablaDB ORDER BY id DESC");

		$pdo->execute();


		return $pdo->fetchAll();

		$pdo->close();
	}





}


 ?>