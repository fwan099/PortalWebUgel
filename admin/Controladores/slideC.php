<?php 

class SlideC{

	// crear slide

	public function CrearSlideC(){

		if(isset($_POST["ordenN"])){
			$rutaImg = "";

			if(isset($_FILES["imagenN"]["tmp_name"]) && !empty($_FILES["imagenN"]["tmp_name"])){

				if($_FILES["imagenN"]["type"] == "image/jpeg"){

					$nombre = mt_rand(10,999);

					$rutaImg = "Vistas/img/slide/S".$nombre.".jpg";

					$imagen = imagecreatefromjpeg($_FILES["imagenN"]["tmp_name"]);


					imagejpeg($imagen,$rutaImg);
				}

				if($_FILES["imagenN"]["type"] == "image/png"){

					$nombre = mt_rand(10,999);

					$rutaImg = "Vistas/img/slide/S".$nombre.".png";

					$imagen = imagecreatefrompng($_FILES["imagenN"]["tmp_name"]);


					imagepng($imagen,$rutaImg);
				}


			}

			$tablaDB = "slide";

			$datosC = array("orden"=>$_POST["ordenN"],"imagen"=>$rutaImg);

			$respuesta = SlideM::CrearSlideM($tablaDB,$datosC);

			if($respuesta == true){

				echo ' <script>

					window.location = "slide";

				</script>';
			}else{

				echo 'ERROR AL CREAR SLIDE';
			}
		}
	}


	// Ver Slider

	static public function VerSlideC($item, $valor){

		$tablaDB = "slide";

		$respuesta = SlideM::VerSlideM($tablaDB, $item, $valor);

		return $respuesta;
	}

	//actualizar slider
	 public function ActualizarSlideC(){

	 	if(isset($_POST["Sid"])){

	 		$rutaImg = $_POST["ImagenActual"];

	 		if(isset($_FILES["imagenE"]["tmp_name"]) &&!empty($_FILES["imagenE"]["tmp_name"])){

	 			if(!empty($_POST["ImagenActual"])){

	 				unlink($_POST["ImagenActual"]);
	 			}else{
	 				mkdir($direc,0755);
	 			}

	 			if($_FILES["imagenE"]["type"]=="image/jpeg"){

	 				$nombre = mt_rand(10,999);

					$rutaImg = "Vistas/img/slide/S".$nombre.".jpg";

					$imagen = imagecreatefromjpeg($_FILES["imagenE"]["tmp_name"]);


					imagejpeg($imagen,$rutaImg);
	 			}

	 			if($_FILES["imagenE"]["type"]=="image/png"){

	 				$nombre = mt_rand(10,999);

					$rutaImg = "Vistas/img/slide/S".$nombre.".png";

					$imagen = imagecreatefrompng($_FILES["imagenE"]["tmp_name"]);


					imagepng($imagen,$rutaImg);
	 			}
	 		}


	 		$tablaDB = "slide";

	 		$datosC = array("id"=>$_POST["Sid"],"orden"=>$_POST["ordenE"],"imagen"=>$rutaImg);

	 		$respuesta = SlideM::ActualizarSlideM($tablaDB,$datosC);

	 		if($respuesta == true){

				echo ' <script>

					window.location = "slide";

				</script>';
			}else{

				echo 'ERROR AL ACTUALIZAR  SLIDE';
			}


	 	}


	}

	//eliminar slide

	public function BorrarSlideC(){

		if(isset($_GET["Sid"])){
			$tablaDB = "slide";

			$id = $_GET["Sid"];

			if($_GET["imagenSlide"]!=""){

				unlink($_GET["imagenSlide"]);
			}

			$respuesta = SlideM::BorrarSlideM($tablaDB,$id);

			if($respuesta == true){

				echo ' <script>

					window.location = "slide";

				</script>';
			}else{

				echo 'ERROR AL ELIMINAR  SLIDE';
			}

		}
	}
}

 ?>