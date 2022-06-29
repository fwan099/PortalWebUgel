<?php

require_once "../../admin/Modelos/ConexionBD.php";

class DireccionM extends ConexionDB{

	static public function MostrarDireccionM($tablaBD){

		$pdo = ConexionDB::cDB()->prepare("SELECT nombres, celular, correo, whatsapp, foto FROM $tablaBD");

		$pdo->execute();

		return $pdo->fetch();

		$pdo -> close();

	}

}