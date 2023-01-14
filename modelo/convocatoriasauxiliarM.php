<?php 

require_once "ConexionBD.php";


class ConvocatoriasAuxiliarM extends ConexionBD{

	static public function MostrarConvocatoriasAuxiliarM($tablaDB){

		$pdo = ConexionBD::cDB()->prepare(" SELECT * FROM $tablaDB ORDER BY id DESC");

		$pdo->execute();


		return $pdo->fetchAll();

		$pdo->close();
	}





}


 ?>