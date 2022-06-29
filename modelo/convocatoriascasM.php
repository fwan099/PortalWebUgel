<?php 

require_once "../../admin/modelos/ConexionBD.php";


class ConvocatoriasCasM extends ConexionDB{

	static public function MostrarConvocatoriasCasM($tablaDB){

		$pdo = ConexionDB::cDB()->prepare(" SELECT * FROM $tablaDB ORDER BY id DESC");

		$pdo->execute();


		return $pdo->fetchAll();

		$pdo->close();
	}





}


 ?>