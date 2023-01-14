<?php 
class NosotrosC{
	//Ver nosotros
	public function VerNosotrosC(){

		$tablaDB = "nosotros";

		$respuesta = NosotrosM::VerNosotrosM($tablaDB);

		echo '<h3>Mision:</h3>
	          <h4>'.$respuesta["mision"].'</h4>
	          <hr>

	          <h3>Vision:</h3>
	          <h4>'.$respuesta["vision"].'</h4>
	          <hr>

	          <h3>Imagen:</h3>';

	          if ($respuesta["imagen"]!="") {
	          	
	          	echo '<img src="'.$respuesta["imagen"].'" class="img-thumbnail" width="300px%">';
	          }else{
	          	echo '<img src="Vistas/img/default.png" class="img-thumbnail" width="300px%">';
	          }
	          
	}

	//Editar nosotros

	public function EditarNosotrosC(){

		$tablaDB = "nosotros";
		$id = "2";

		$respuesta = NosotrosM::EditarNosotrosM($tablaDB,$id);

		echo '<div class="modal-body">

	            <div class="box-body">
	            

	               <div class="form-group">
	                <h5>Mision:</h5>
	                <textarea class="form-control" name="misionE" required>'.$respuesta["mision"].'</textarea>
	                <input type="hidden" name="Nid" value ="'.$respuesta["id"].'">
	              </div>

	              <div class="form-group">
	                <h5>Vision:</h5>
	                <textarea class="form-control" name="visionE" required >'.$respuesta["vision"].'</textarea>
	              </div>

	              <div class="form-group">
	                <h5>Imagen:</h5>
	                <input type="file" name="imagenE">';

	                if($respuesta["imagen"]!=""){

	                	echo '<img src="'.$respuesta["imagen"].'" class="img-thumbnail" width="300px%">';
	                }else{
	                	echo '<img src="Vistas/img/default.png" class="img-thumbnail" width="300px%">';
	                }
	              
	                
	             echo '<input type="hidden" name="imagenActual" value="'.$respuesta["imagen"].'" >

	             </div>
	              
	            </div>
	            
	          </div>

	          <div class="modal-footer">
	            <button class="btn btn-success" type="submit">Guardar</button>
	             <button class="btn btn-danger" data-dismiss="modal">Cancelar</button>

	            
	          </div>';



	}

	//actualizar nosotros

	public function ActualizarNosotrosC(){

		if(isset($_POST["misionE"])){

			$rutaImg =$_POST["imagenActual"];

			if(isset($_FILES["imagenE"]["tmp_name"]) && !empty($_FILES["imagenE"]["tmp_name"])){

				if(!empty($_POST["imagenActual"])){

	 				unlink($_POST["imagenActual"]);
	 			}else{
	 				mkdir($direc,0755);
	 			}

	 			if($_FILES["imagenE"]["type"]=="image/jpeg"){

	 				$nombre = mt_rand(10,999);

					$rutaImg = "Vistas/img/nosotros/N".$nombre.".jpg";

					$imagen = imagecreatefromstring(file_get_contents($_FILES["imagenE"]["tmp_name"]));


					imagejpeg($imagen,$rutaImg);
	 			}
	 			if($_FILES["imagenE"]["type"]=="image/png"){

	 				$nombre = mt_rand(10,999);

					$rutaImg = "Vistas/img/nosotros/N".$nombre.".png";

					$imagen = imagecreatefromstring(file_get_contents($_FILES["imagenE"]["tmp_name"]));


					imagepng($imagen,$rutaImg);
	 			}
			}

			$tablaDB = "nosotros";
			$datosC = array("id"=>$_POST["Nid"],"mision"=>$_POST["misionE"],"vision"=>$_POST["visionE"],"imagen"=>$rutaImg);

			$respuesta = NosotrosM::ActualizarNosotrosM($tablaDB,$datosC);

			if($respuesta == true){

				echo ' <script>
					window.location = "nosotros";

				</script>';
			}else{

				echo 'ERROR AL ACTUALIZAR  NOSOTROS';
			}

		}
	}
}


 ?>
