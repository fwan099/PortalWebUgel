<?php 

require_once "../Controladores/convocatoriadirectivoC.php";
require_once "../Modelos/convocatoriadirectivoM.php";

class ConvocatoriasDirectivosA{

	public $Cid;

	public function EditarConvocatoriasDirectivosA(){

		$item ="id";
		$valor = $this->Cid;

		$respuesta = ConvocatoriasDirectivosC::VerConvocatoriasDirectivosC($item, $valor);

		echo json_encode($respuesta);  

	}

}

if(isset($_POST["Cid"])){

	$editarC = new ConvocatoriasDirectivosA();

	$editarC->Cid = $_POST["Cid"];

	$editarC->EditarConvocatoriasDirectivosA();

	
}



 ?>