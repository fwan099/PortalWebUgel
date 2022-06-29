<?php 

require_once "../Controladores/funcionesareaC.php";
require_once "../Modelos/funcionesareaM.php";



class FuncionesAreaA{

	public $Fid;
	public $tabla;

	public function EditarFuncionesAreaA(){

		$item ="id";
		$valor = $this->Fid;
	    $tabla = $this->tabla;

		$respuesta = FuncionesAreaC::VerFuncionesAreaC($item, $valor, $tabla);

		echo json_encode($respuesta);  

	}

}

if(isset($_POST["Fid"])){

	$editarC = new FuncionesAreaA();

	$editarC->Fid = $_POST["Fid"];
	$editarC->tabla = $_POST["tabla"];

	$editarC->EditarFuncionesAreaA();

	
}



 ?>