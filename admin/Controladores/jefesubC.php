<?php 
class JefeSubC{
	//Ver nosotros
	public function VerJefeSubC($tabla,$item,$valor){

		$tablaDB = $tabla;
		
        
		$respuesta = JefeSubM::VerJefeSubM($tablaDB,$item,$valor);

		foreach($respuesta as $key =>$value){
			echo '<tr>
                          <td>'.$value["id"].'</td>
                          <td>'.$value["nombres"].'</td>
                          <td>'.$value["celular"].'</td>
                          <td>'.$value["correo"].'</td>
                          <td>'.$value["whatsapp"].'</td>
                          <td> <img src="'.$value["foto"].'" class="user-image" alt="User Image" width="40px"></td>
                          
                         
          
              </tr>';

		}

		

	        
	          
	}

	//Editar nosotros

	public function EditarJefeSubC($tabla,$ident){

		$tablaDB = $tabla;
		$id = $ident;
		if($id != ''){
			$respuesta = JefeSubM::EditarJefeSubM($tablaDB,$id);
		

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

		
		

	



	}

	//actualizar nosotros

	public function ActualizarJefeSubC($tabla){

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

					$imagen = imagecreatefromstring(file_get_contents($_FILES["fotoE"]["tmp_name"]));


					imagejpeg($imagen,$rutaImg);
	 			}
	 			if($_FILES["fotoE"]["type"]=="image/png"){

	 				$nombre = mt_rand(10,999);

					$rutaImg = "Vistas/img/jefeArea/N".$nombre.".png";

					$imagen = imagecreatefromstring(file_get_contents($_FILES["fotoE"]["tmp_name"]));


					imagepng($imagen,$rutaImg);
	 			}
			}

			$tablaDB = $tabla;
			$datosC = array("id"=>$_POST["Nid"],"nombres"=>$_POST["nombresE"],"celular"=>$_POST["celularE"],"correo"=>$_POST["correoE"],"whatsapp"=>$_POST["whatsappE"],"foto"=>$rutaImg);

			$respuesta = JefeSubM::ActualizarJefeSubM($tablaDB,$datosC);

			if($respuesta == true){

				echo ' <script>

					window.location = "jefeSub";

				</script>';
			}else{

				echo 'ERROR AL ACTUALIZAR  JEFE SUB AREA';
			}

		}

		
	}
}


 ?>