<?php 

require_once "../Controladores/convocatoriacapC.php";
require_once "../Modelos/convocatoriacapM.php";

class ConvocatoriasCapA{

	public $Cid;

	public function EditarConvocatoriasCapA(){

		$item ="id";
		$valor = $this->Cid;

		$respuesta = ConvocatoriasCapC::VerConvocatoriasCapC($item, $valor);

		echo json_encode($respuesta);  

	}

}

if(isset($_POST["Cid"])){

	$editarC = new ConvocatoriasCapA();

	$editarC->Cid = $_POST["Cid"];

	$editarC->EditarConvocatoriasCapA();

	
}



 ?>