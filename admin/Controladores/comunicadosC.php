<?php 

 class ComunicadosC{

 	//crear comunicados
 	public function CrearComunicadosC(){

 		if(isset($_POST["fechaN"])){

 			$rutaPdf="";

 			if(isset($_FILES["documentoN"]["tmp_name"]) && !empty($_FILES["documentoN"]["tmp_name"])){

 				if($_FILES["documentoN"]["type"] == "application/pdf"){

 					$nombre = mt_rand(10,999);
 					$rutaPdf = "Vistas/files/comunicados/C".$nombre.".pdf";
 					$documento = $_FILES["documentoN"]["tmp_name"];

 					move_uploaded_file($documento,$rutaPdf);


 				}
 			}

 			$tablaDB = "comunicados";
 			$datosC = array("titulo"=>$_POST["tituloN"],"fecha"=>$_POST["fechaN"],"documento"=>$rutaPdf);

 			$respuesta = ComunicadosM::CrearComunicadosM($tablaDB,$datosC);

 			if($respuesta == true){

				echo ' <script>

					window.location = "comunicados";

				</script>';
			}else{

				echo 'ERROR AL CREAR COMUNICADO';
			}

 		}
 	}

 	// ver comunicados

 	static public function VerComunicadosC($item, $valor){

 		$tablaDB = "comunicados";
 		$respuesta = ComunicadosM::VerComunicadosM($tablaDB, $item, $valor);
 		return $respuesta;
 	}

 	// actulizar comunicados

 	public function ActualizarComunicadosC(){

 			if(isset($_POST["Cid"])){

 				

	 		$rutaPdf = $_POST["DocumentoActual"];

	 		if(isset($_FILES["documentoE"]["tmp_name"]) &&!empty($_FILES["documentoE"]["tmp_name"])){

	 			if(!empty($_POST["DocumentoActual"])){

	 				unlink($_POST["DocumentoActual"]);
	 			}else{
	 				mkdir($direc,0755);
	 			}

	 			if($_FILES["documentoE"]["type"]=="application/pdf"){

	 				$nombre = mt_rand(10,999);

					$rutaPdf = "Vistas/files/comunicados/C".$nombre.".pdf";

					$documento = $_FILES["documentoE"]["tmp_name"];

 					move_uploaded_file($documento,$rutaPdf);
	 			}

	 			
	 		}


	 		$tablaDB = "comunicados";

	 		$datosC = array("id"=>$_POST["Cid"],"titulo"=>$_POST["tituloE"],"fecha"=>$_POST["fechaE"],"documento"=>$rutaPdf);

	 		$respuesta = ComunicadosM::ActualizarComunicadosM($tablaDB,$datosC);

	 		if($respuesta == true){

				echo ' <script>

					window.location = "comunicados";

				</script>';
			}else{

				echo 'ERROR AL ACTUALIZAR  COMUNICADO';
			}


	 	}
 	}

 	// eliminar comunicados

 	public function BorrarComunicadosC(){

 		if(isset($_GET["Cid"])){
			$tablaDB = "comunicados";

			$id = $_GET["Cid"];

			if($_GET["documentoComunicados"]!=""){

				unlink($_GET["documentoComunicados"]);
			}

			$respuesta = ComunicadosM::BorrarComunicadosM($tablaDB,$id);

			if($respuesta == true){

				echo ' <script>

					window.location = "comunicados";

				</script>';
			}else{

				echo 'ERROR AL ELIMINAR  COMUNICADO';
			}

		}
 	}





 }

 ?>