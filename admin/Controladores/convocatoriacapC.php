<?php 

 class ConvocatoriasCapC{

 	//crear convocatorias cas 
 	public function CrearConvocatoriasCapC(){

 		if(isset($_POST["fechaN"])){

 			$rutaPdf1="";
 			$rutaPdf2="";
 			$rutaPdf3="";
 			$rutaPdf4="";
 			$rutaPdf5="";
 			$rutaPdf6="";

 			if(isset($_FILES["documentoN1"]["tmp_name"]) && !empty($_FILES["documentoN1"]["tmp_name"])){

 				if($_FILES["documentoN1"]["type"] == "application/pdf"){

 					$nombre = mt_rand(10,999);
 					$rutaPdf1 = "Vistas/files/convocatoriascap/C".$nombre.".pdf";
 					$documento = $_FILES["documentoN1"]["tmp_name"];

 					move_uploaded_file($documento,$rutaPdf1);


 				}
 			}
 			if(isset($_FILES["documentoN2"]["tmp_name"]) && !empty($_FILES["documentoN2"]["tmp_name"])){

 				if($_FILES["documentoN2"]["type"] == "application/pdf"){

 					$nombre = mt_rand(10,999);
 					$rutaPdf2 = "Vistas/files/convocatoriascap/C".$nombre.".pdf";
 					$documento = $_FILES["documentoN2"]["tmp_name"];

 					move_uploaded_file($documento,$rutaPdf2);


 				}
 			}
 			if(isset($_FILES["documentoN3"]["tmp_name"]) && !empty($_FILES["documentoN3"]["tmp_name"])){

 				if($_FILES["documentoN3"]["type"] == "application/pdf"){

 					$nombre = mt_rand(10,999);
 					$rutaPdf3 = "Vistas/files/convocatoriascap/C".$nombre.".pdf";
 					$documento = $_FILES["documentoN3"]["tmp_name"];

 					move_uploaded_file($documento,$rutaPdf3);


 				}
 			}
 			if(isset($_FILES["documentoN4"]["tmp_name"]) && !empty($_FILES["documentoN4"]["tmp_name"])){

 				if($_FILES["documentoN4"]["type"] == "application/pdf"){

 					$nombre = mt_rand(10,999);
 					$rutaPdf4 = "Vistas/files/convocatoriascap/C".$nombre.".pdf";
 					$documento = $_FILES["documentoN4"]["tmp_name"];

 					move_uploaded_file($documento,$rutaPdf4);


 				}
 			}
 			if(isset($_FILES["documentoN5"]["tmp_name"]) && !empty($_FILES["documentoN5"]["tmp_name"])){

 				if($_FILES["documentoN5"]["type"] == "application/pdf"){

 					$nombre = mt_rand(10,999);
 					$rutaPdf5 = "Vistas/files/convocatoriascap/C".$nombre.".pdf";
 					$documento = $_FILES["documentoN5"]["tmp_name"];

 					move_uploaded_file($documento,$rutaPdf5);


 				}
 			}
 			if(isset($_FILES["documentoN6"]["tmp_name"]) && !empty($_FILES["documentoN6"]["tmp_name"])){

 				if($_FILES["documentoN6"]["type"] == "application/pdf"){

 					$nombre = mt_rand(10,999);
 					$rutaPdf6 = "Vistas/files/convocatoriascap/C".$nombre.".pdf";
 					$documento = $_FILES["documentoN6"]["tmp_name"];

 					move_uploaded_file($documento,$rutaPdf6);


 				}
 			}

 			$tablaDB = "convocatoria_cap";

 			$datosC = array("titulo"=>$_POST["tituloN"],"bases"=>$rutaPdf1,"cv1"=>$rutaPdf2,"reclamos"=>$rutaPdf3,"cv2"=>$rutaPdf4,"entrevista"=>$rutaPdf5,"final"=>$rutaPdf6,"estado"=>$_POST["estadoN"],"fecha"=>$_POST["fechaN"]);

 			$respuesta = ConvocatoriasCapM::CrearConvocatoriasCapM($tablaDB,$datosC);

 			if($respuesta == true){

				echo ' <script>

					window.location = "convocatoriasCap";

				</script>';
			}else{

				echo 'ERROR AL CREAR CONVOCATORIA';
			}

 		}
 	}

 	// ver convocatorias cas

 	static public function VerConvocatoriasCapC($item, $valor){

 		$tablaDB = "convocatoria_cap";
 		$respuesta = ConvocatoriasCapM::VerConvocatoriasCapM($tablaDB, $item, $valor);
 		return $respuesta;
 	}

 	// actulizar convocatorias cas

 	public function ActualizarConvocatoriasCapC(){

 			if(isset($_POST["Cid"])){

 				

	 		$rutaPdf1 = $_POST["DocumentoActual1"];
	 		$rutaPdf2 = $_POST["DocumentoActual2"];
	 		$rutaPdf3 = $_POST["DocumentoActual3"];
	 		$rutaPdf4 = $_POST["DocumentoActual4"];
	 		$rutaPdf5 = $_POST["DocumentoActual5"];
	 		$rutaPdf6 = $_POST["DocumentoActual6"];

	 		if(isset($_FILES["documento1E"]["tmp_name"]) &&!empty($_FILES["documento1E"]["tmp_name"])){

	 			if(!empty($_POST["DocumentoActual1"])){

	 				unlink($_POST["DocumentoActual1"]);
	 			}else{
	 				mkdir($direc,0755);
	 			}

	 			if($_FILES["documento1E"]["type"]=="application/pdf"){

	 				$nombre = mt_rand(10,999);

					$rutaPdf1 = "Vistas/files/convocatoriascap/C".$nombre.".pdf";

					$documento = $_FILES["documento1E"]["tmp_name"];

 					move_uploaded_file($documento,$rutaPdf1);
	 			}

	 			
	 		}

	 		if(isset($_FILES["documento2E"]["tmp_name"]) &&!empty($_FILES["documento2E"]["tmp_name"])){

	 			if(!empty($_POST["DocumentoActual2"])){

	 				unlink($_POST["DocumentoActual2"]);
	 			}else{
	 				mkdir($direc,0755);
	 			}

	 			if($_FILES["documento2E"]["type"]=="application/pdf"){

	 				$nombre = mt_rand(10,999);

					$rutaPdf2 = "Vistas/files/convocatoriascap/C".$nombre.".pdf";

					$documento = $_FILES["documento2E"]["tmp_name"];

 					move_uploaded_file($documento,$rutaPdf2);
	 			}

	 			
	 		}

	 		if(isset($_FILES["documento3E"]["tmp_name"]) &&!empty($_FILES["documento3E"]["tmp_name"])){

	 			if(!empty($_POST["DocumentoActual3"])){

	 				unlink($_POST["DocumentoActual3"]);
	 			}else{
	 				mkdir($direc,0755);
	 			}

	 			if($_FILES["documento3E"]["type"]=="application/pdf"){

	 				$nombre = mt_rand(10,999);

					$rutaPdf3 = "Vistas/files/convocatoriascap/C".$nombre.".pdf";

					$documento = $_FILES["documento3E"]["tmp_name"];

 					move_uploaded_file($documento,$rutaPdf3);
	 			}

	 			
	 		}

	 		if(isset($_FILES["documento4E"]["tmp_name"]) &&!empty($_FILES["documento4E"]["tmp_name"])){

	 			if(!empty($_POST["DocumentoActual4"])){

	 				unlink($_POST["DocumentoActual4"]);
	 			}else{
	 				mkdir($direc,0755);
	 			}

	 			if($_FILES["documento4E"]["type"]=="application/pdf"){

	 				$nombre = mt_rand(10,999);

					$rutaPdf4 = "Vistas/files/convocatoriascap/C".$nombre.".pdf";

					$documento = $_FILES["documento4E"]["tmp_name"];

 					move_uploaded_file($documento,$rutaPdf4);
	 			}

	 			
	 		}

	 		if(isset($_FILES["documento5E"]["tmp_name"]) &&!empty($_FILES["documento5E"]["tmp_name"])){

	 			if(!empty($_POST["DocumentoActual5"])){

	 				unlink($_POST["DocumentoActual5"]);
	 			}else{
	 				mkdir($direc,0755);
	 			}

	 			if($_FILES["documento5E"]["type"]=="application/pdf"){

	 				$nombre = mt_rand(10,999);

					$rutaPdf5 = "Vistas/files/convocatoriascap/C".$nombre.".pdf";

					$documento = $_FILES["documento5E"]["tmp_name"];

 					move_uploaded_file($documento,$rutaPdf5);
	 			}

	 			
	 		}

	 		if(isset($_FILES["documento6E"]["tmp_name"]) &&!empty($_FILES["documento6E"]["tmp_name"])){

	 			if(!empty($_POST["DocumentoActual6"])){

	 				unlink($_POST["DocumentoActual6"]);
	 			}else{
	 				mkdir($direc,0755);
	 			}

	 			if($_FILES["documento6E"]["type"]=="application/pdf"){

	 				$nombre = mt_rand(10,999);

					$rutaPdf6 = "Vistas/files/convocatoriascap/C".$nombre.".pdf";

					$documento = $_FILES["documento6E"]["tmp_name"];

 					move_uploaded_file($documento,$rutaPdf6);
	 			}

	 			
	 		}







	 		$tablaDB = "convocatoria_cap";

	 		$datosC = array("id"=>$_POST["Cid"],"titulo"=>$_POST["tituloE"],"bases"=>$rutaPdf1,"cv1"=>$rutaPdf2,"reclamos"=>$rutaPdf3,"cv2"=>$rutaPdf4,"entrevista"=>$rutaPdf5,"final"=>$rutaPdf6,"estado"=>$_POST["estadoE"],"fecha"=>$_POST["fechaE"]);

	 		$respuesta = ConvocatoriasCapM::ActualizarConvocatoriasCapM($tablaDB,$datosC);

	 		if($respuesta == true){

				echo ' <script>

					window.location = "convocatoriasCap";

				</script>';
			}else{

				echo 'ERROR AL ACTUALIZAR  CONVOCATORIA';
			}


	 	}
 	}

 // eliminar convocatoria

 	public function BorrarConvocatoriasCapC(){

 		if(isset($_GET["Cid"])){
			$tablaDB = "convocatoria_cap";

			$id = $_GET["Cid"];

			if($_GET["documentoConvocatorias1"]!=""){

				unlink($_GET["documentoConvocatorias1"]);
			}
			if($_GET["documentoConvocatorias2"]!=""){

				unlink($_GET["documentoConvocatorias2"]);
			}
			if($_GET["documentoConvocatorias3"]!=""){

				unlink($_GET["documentoConvocatorias3"]);
			}
			if($_GET["documentoConvocatorias4"]!=""){

				unlink($_GET["documentoConvocatorias4"]);
			}
			if($_GET["documentoConvocatorias5"]!=""){

				unlink($_GET["documentoConvocatorias5"]);
			}
			if($_GET["documentoConvocatorias6"]!=""){

				unlink($_GET["documentoConvocatorias6"]);
			}

			$respuesta = ConvocatoriasCapM::BorrarConvocatoriasCapM($tablaDB,$id);

			if($respuesta == true){

				echo ' <script>

					window.location = "convocatoriasCap";

				</script>';
			}else{

				echo 'ERROR AL ELIMINAR  CONVOCATORIA';
			}

		}
 	}





 }

 ?>