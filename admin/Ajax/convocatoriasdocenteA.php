<?php 

require_once "../Controladores/convocatoriadocenteC.php";
require_once "../Modelos/convocatoriadocenteM.php";

class ConvocatoriasDocenteA{

	public $Cid;

	public function EditarConvocatoriasDocenteA(){

		$item ="id";
		$valor = $this->Cid;

		$respuesta = ConvocatoriasDocenteC::VerConvocatoriasDocenteC($item, $valor);

		echo json_encode($respuesta);  

	}

}

if(isset($_POST["Cid"])){

	$editarC = new ConvocatoriasDocenteA();

	$editarC->Cid = $_POST["Cid"];

	$editarC->EditarConvocatoriasDocenteA();

	
}



 ?>