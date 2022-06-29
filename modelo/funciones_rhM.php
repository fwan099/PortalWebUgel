<?php 

require_once "../../admin/modelos/ConexionBD.php";


class FuncionesM extends ConexionDB{

	static public function MostrarFuncionesM($tablaDB){

		$pdo = ConexionDB::cDB()->prepare("SELECT  funcion FROM $tablaDB ORDER BY id DESC LIMIT 0,10 ");

		$pdo->execute();


		return $pdo->fetchAll();

		$pdo->close();
	}



}


 ?>