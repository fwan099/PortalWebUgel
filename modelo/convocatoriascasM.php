<?php 

require_once "ConexionBD.php";


class ConvocatoriasCasM extends ConexionBD{

	static public function MostrarConvocatoriasCasM($tablaDB){

		$pdo = ConexionBD::cDB()->prepare(" SELECT * FROM $tablaDB ORDER BY id DESC");

		$pdo->execute();


		return $pdo->fetchAll();

		$pdo->close();
	}





}


 ?>