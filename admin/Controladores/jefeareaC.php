<?php 
class JefeAreaC{
	//Ver nosotros
	public function VerJefeAreaC($tabla){

		$tablaDB = $tabla;
		

		$respuesta = JefeAreaM::VerJefeAreaM($tablaDB);

		echo '<h4>Nombre y Apellidos:</h4>
	          <h5>'.$respuesta["nombres"].'</h5>
	          

	          <h4>Celular:</h4>
	          <h5>'.$respuesta["celular"].'</h5>
	        

	          <h4>Correo:</h4>
	          <h5>'.$respuesta["correo"].'</h5>
	         

	          <h4>Link Whatsapp:</h4>
	          <h5><a href="https://wa.me/51'.$respuesta["whatsapp"].'"><i style="font-size: 26px;" class="fab fa-whatsapp"></i></a></h5>
	         

	          <h4>Foto:</h4>';

	          if ($respuesta["foto"]!="") {
	          	
	          	echo '<img src="'.$respuesta["foto"].'" class="img-thumbnail" width="300px">';
	          }else{
	          	echo '<img src="Vistas/img/default.png" class="img-thumbnail" width="300px">';
	          }
	          
	}

	//Editar nosotros

	public function EditarJefeAreaC($tabla){

		$tablaDB = $tabla;
		$id = "1";

		$respuesta = JefeAreaM::EditarJefeAreaM($tablaDB,$id);

		echo '<div class="modal-body">

	            <div class="box-body">
	            

	               <div class="form-group">
	                <h5>Nombres y Apellidos:</h5>
	                <input type="text" class="form-control" name="nombresE" value="'.$respuesta["nombres"].'" required>
	                <input type="hidden" name="Nid" value ="'.$respuesta["id"].'">
	              </div>

	              <div class="form-group">
	                <h5>Celular:</h5>
	                 <input type="text" class="form-control" name="celularE" value="'.$respuesta["celular"].'" required>
	              </div>

	              <div class="form-group">
	                <h5>Correo:</h5>
	                <input type="text" class="form-control" name="correoE" value="'.$respuesta["correo"].'" required>

	              </div>

	              <div class="form-group">
	                <h5>Whatsapp:</h5>
	                <input type="text" class="form-control" name="whatsappE" value="'.$respuesta["whatsapp"].'" required>
	              </div>

	              <div class="form-group">
	                <h5>Foto:</h5>
	                <input type="file" name="fotoE">';

	                if($respuesta["foto"]!=""){

	                	echo '<img src="'.$respuesta["foto"].'" class="img-thumbnail" width="300px%">';
	                }else{
	                	echo '<img src="Vistas/img/default.png" class="img-thumbnail" width="300px%">';
	                }
	              
	                
	             echo '<input type="hidden" name="fotoActual" value="'.$respuesta["foto"].'" >

	             </div>
	              
	            </div>
	            
	          </div>

	          <div class="modal-footer">
	            <button class="btn btn-success" type="submit">Guardar</button>
	             <button class="btn btn-danger" data-dismiss="modal">Cancelar</button>

	            
	          </div>';



	}

	//actualizar nosotros

	public function ActualizarJefeAreaC($tabla){

		if(isset($_POST["nombresE"])){

			$rutaImg =$_POST["fotoActual"];

			if(isset($_FILES["fotoE"]["tmp_name"]) && !empty($_FILES["fotoE"]["tmp_name"])){

				if(!empty($_POST["fotoActual"])){

	 				unlink($_POST["fotoActual"]);
	 			}else{
	 				mkdir($direc,0755);
	 			}

	 			if($_FILES["fotoE"]["type"]=="image/jpeg"){

	 				$nombre = mt_rand(10,999);

					$rutaImg = "Vistas/img/jefeArea/N".$nombre.".jpg";

					$imagen = imagecreatefromjpeg($_FILES["fotoE"]["tmp_name"]);


					imagejpeg($imagen,$rutaImg);
	 			}
	 			if($_FILES["fotoE"]["type"]=="image/png"){

	 				$nombre = mt_rand(10,999);

					$rutaImg = "Vistas/img/jefeArea/N".$nombre.".png";

					$imagen = imagecreatefrompng($_FILES["fotoE"]["tmp_name"]);


					imagepng($imagen,$rutaImg);
	 			}
			}

			$tablaDB = $tabla;
			$datosC = array("id"=>$_POST["Nid"],"nombres"=>$_POST["nombresE"],"celular"=>$_POST["celularE"],"correo"=>$_POST["correoE"],"whatsapp"=>$_POST["whatsappE"],"foto"=>$rutaImg);

			$respuesta = JefeAreaM::ActualizarJefeAreaM($tablaDB,$datosC);

			if($respuesta == true){

				echo ' <script>

					window.location = "jefeArea";

				</script>';
			}else{

				echo 'ERROR AL ACTUALIZAR  JEFE AREA';
			}

		}
	}
}


 ?>