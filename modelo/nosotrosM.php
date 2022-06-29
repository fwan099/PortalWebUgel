<?php

require_once "../../admin/Modelos/ConexionBD.php";

class NosotrosM extends ConexionDB{

	static public function MostrarNosotrosM($tablaBD){

		$pdo = ConexionDB::cDB()->prepare("SELECT mision, vision, imagen FROM $tablaBD");

		$pdo->execute();

		return $pdo->fetch();

		$pdo -> close();

	}

}