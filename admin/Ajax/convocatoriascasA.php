<?php 

require_once "../Controladores/convocatoriacasC.php";
require_once "../Modelos/convocatoriacasM.php";

class ConvocatoriasCasA{

	public $Cid;

	public function EditarConvocatoriasCasA(){

		$item ="id";
		$valor = $this->Cid;

		$respuesta = ConvocatoriasCasC::VerConvocatoriasCasC($item, $valor);

		echo json_encode($respuesta);  

	}

}

if(isset($_POST["Cid"])){

	$editarC = new ConvocatoriasCasA();

	$editarC->Cid = $_POST["Cid"];

	$editarC->EditarConvocatoriasCasA();

	
}



 ?>