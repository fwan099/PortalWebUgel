<?php 

 class OficiosC{

 	//crear Oficios
 	public function CrearOficiosC(){

 		if(isset($_POST["fechaN"])){

 			$rutaPdf="";

 			if(isset($_FILES["documentoN"]["tmp_name"]) && !empty($_FILES["documentoN"]["tmp_name"])){

 				if($_FILES["documentoN"]["type"] == "application/pdf"){

 					$nombre = mt_rand(10,999);
 					$rutaPdf = "Vistas/files/oficios/O".$nombre.".pdf";
 					$documento = $_FILES["documentoN"]["tmp_name"];

 					move_uploaded_file($documento,$rutaPdf);


 				}
 			}

 			$tablaDB = "oficios";
 			$datosC = array("titulo"=>$_POST["tituloN"],"fecha"=>$_POST["fechaN"],"documento"=>$rutaPdf);

 			$respuesta = OficiosM::CrearOficiosM($tablaDB,$datosC);

 			if($respuesta == true){

				echo ' <script>

					window.location = "oficios";

				</script>';
			}else{

				echo 'ERROR AL CREAR OFICIO';
			}

 		}
 	}

 	// ver comunicados

 	static public function VerOficiosC($item, $valor){

 		$tablaDB = "oficios";
 		$respuesta = OficiosM::VerOficiosM($tablaDB, $item, $valor);
 		return $respuesta;
 	}

 	// actulizar oficios

 	public function ActualizarOficiosC(){

 			if(isset($_POST["Oid"])){

 				

	 		$rutaPdf = $_POST["DocumentoActual"];

	 		if(isset($_FILES["documentoE"]["tmp_name"]) &&!empty($_FILES["documentoE"]["tmp_name"])){

	 			if(!empty($_POST["DocumentoActual"])){

	 				unlink($_POST["DocumentoActual"]);
	 			}else{
	 				mkdir($direc,0755);
	 			}

	 			if($_FILES["documentoE"]["type"]=="application/pdf"){

	 				$nombre = mt_rand(10,999);

					$rutaPdf = "Vistas/files/oficios/O".$nombre.".pdf";

					$documento = $_FILES["documentoE"]["tmp_name"];

 					move_uploaded_file($documento,$rutaPdf);
	 			}

	 			
	 		}


	 		$tablaDB = "oficios";

	 		$datosC = array("id"=>$_POST["Oid"],"titulo"=>$_POST["tituloE"],"fecha"=>$_POST["fechaE"],"documento"=>$rutaPdf);

	 		$respuesta = OficiosM::ActualizarOficiosM($tablaDB,$datosC);

	 		if($respuesta == true){

				echo ' <script>

					window.location = "oficios";

				</script>';
			}else{

				echo 'ERROR AL ACTUALIZAR  OFICIO';
			}


	 	}
 	}

 	// eliminar comunicados

 	public function BorrarOficiosC(){

 		if(isset($_GET["Oid"])){
			$tablaDB = "oficios";

			$id = $_GET["Oid"];

			if($_GET["documentoOficios"]!=""){

				unlink($_GET["documentoOficios"]);
			}

			$respuesta = OficiosM::BorrarOficiosM($tablaDB,$id);

			if($respuesta == true){

				echo ' <script>

					window.location = "oficios";

				</script>';
			}else{

				echo 'ERROR AL ELIMINAR  OFICIO';
			}

		}
 	}





 }

 ?>