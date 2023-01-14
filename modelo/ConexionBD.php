<?php 
class ConexionBD{

	public static function cDB(){
		$db = new PDO("mysql:host=localhost;dbname=ugel","root","");

		$db->exec("set names utf8");

		return $db;
	}
}

 ?>