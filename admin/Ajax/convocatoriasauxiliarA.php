<?php 

require_once "../Controladores/convocatoriaauxiliarC.php";
require_once "../Modelos/convocatoriaauxiliarM.php";

class ConvocatoriasAuxiliarA{

	public $Cid;

	public function EditarConvocatoriasAuxiliarA(){

		$item ="id";
		$valor = $this->Cid;

		$respuesta = ConvocatoriasAuxiliarC::VerConvocatoriasAuxiliarC($item, $valor);

		echo json_encode($respuesta);  

	}

}

if(isset($_POST["Cid"])){

	$editarC = new ConvocatoriasAuxiliarA();

	$editarC->Cid = $_POST["Cid"];

	$editarC->EditarConvocatoriasAuxiliarA();

	
}



 ?>