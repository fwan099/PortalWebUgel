<?php 

require_once "../../admin/modelos/ConexionBD.php";


class JefeSubM extends ConexionDB{

	static public function MostrarJefeSub1M($tablaDB){

		$pdo = ConexionDB::cDB()->prepare("SELECT  nombres, celular, correo, whatsapp, foto FROM $tablaDB WHERE id=1 ");

		$pdo->execute();


		return $pdo->fetch();

		$pdo->close();
	}


	





}


 ?>