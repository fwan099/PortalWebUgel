<?php 

require_once "../Controladores/comunicadosC.php";
require_once "../Modelos/comunicadosM.php";

class ComunicadosA{

	public $Cid;

	public function EditarComunicadosA(){

		$item ="id";
		$valor = $this->Cid;

		$respuesta = ComunicadosC::VerComunicadosC($item, $valor);

		echo json_encode($respuesta);  

	}

}

if(isset($_POST["Cid"])){

	$editarC = new ComunicadosA();

	$editarC->Cid = $_POST["Cid"];

	$editarC->EditarComunicadosA();

	
}



 ?>