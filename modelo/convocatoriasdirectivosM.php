<?php 

require_once "ConexionBD.php";


class ConvocatoriasDirectivosM extends ConexionBD{

	static public function MostrarConvocatoriasDirectivosM($tablaDB){

		$pdo = ConexionBD::cDB()->prepare(" SELECT * FROM $tablaDB ORDER BY id DESC");

		$pdo->execute();


		return $pdo->fetchAll();

		$pdo->close();
	}





}


 ?>