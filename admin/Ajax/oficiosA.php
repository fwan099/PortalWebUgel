<?php 

require_once "../Controladores/oficiosC.php";
require_once "../Modelos/oficiosM.php";

class OficiosA{

	public $Oid;

	public function EditarOficiosA(){

		$item ="id";
		$valor = $this->Oid;

		$respuesta = OficiosC::VerOficiosC($item, $valor);

		echo json_encode($respuesta);  

	}

}

if(isset($_POST["Oid"])){

	$editarO = new OficiosA();

	$editarO->Oid = $_POST["Oid"];

	$editarO->EditarOficiosA();

	
}



 ?>