<?php 

require_once "ConexionBD.php";


class ConvocatoriasCapM extends ConexionBD{

	static public function MostrarConvocatoriasCapM($tablaDB){

		$pdo = ConexionBD::cDB()->prepare(" SELECT * FROM $tablaDB ORDER BY id DESC");

		$pdo->execute();


		return $pdo->fetchAll();

		$pdo->close();
	}





}


 ?>