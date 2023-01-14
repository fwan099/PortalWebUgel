<?php 

class UsuariosC{

			//Ingresar Usuario
	public function IngresoUsuariosC(){
		if(isset($_POST["usuario-ing"])){

			if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["usuario-ing"]) && preg_match('/^[a-zA-Z0-9]+$/',$_POST["clave-ing"])){

				$datosC = array("usuario"=>$_POST["usuario-ing"],"clave"=>$_POST["clave-ing"]);

				$tablaDB = "usuarios";

				$respuesta = UsuariosM::IngresarUsuariosM($datosC, $tablaDB);

				if($respuesta["usuario"]==$_POST["usuario-ing"] &&$respuesta["clave"]==$_POST["clave-ing"]  ){

					$_SESSION["Ingreso"]=true;

					$_SESSION["id"]=$respuesta["id"];
					$_SESSION["nombres"]=$respuesta["nombres"];
					$_SESSION["apellidos"]=$respuesta["apellidos"];
					$_SESSION["usuario"]=$respuesta["usuario"];
					$_SESSION["clave"]=$respuesta["clave"];
					$_SESSION["foto"]=$respuesta["foto"];
					$_SESSION["rol"]=$respuesta["rol"];


					echo '<script> 

					window.location= "inicio"; 


					</script>';
				}else{
					echo '<div style="text-align: center;padding-top:8px;"><b style="color:#BC1817;">ERROR AL INGRESAR</b></div>';
				}
			}
		}
	}

		//Ver usuarios
	public function VerUsuariosC(){
		$tablaDB = "usuarios";
		$respuesta = UsuariosM::VerUsuariosM($tablaDB);

		foreach($respuesta as $key => $value){
			echo '<tr>
	                <td>'.($key+1).'</td>
	                <td>'.($value["nombres"]).'</td>
	                <td>'.($value["apellidos"]).'</td>
	                <td>'.($value["usuario"]).'</td>
	                <td>'.($value["clave"]).'</td>';

	                if($value["foto"]!= ""){
	                	echo '<td>

	                <img src="'.$value["foto"].'" class="user-image" alt="User Image" width="40px"></td>';
	                }else{
	                	echo '<td>

	                <img src="Vistas/img/usuarios/defecto.png" class="user-image" alt="User Image" width="40px"></td>';
	                }
	                

	            echo ' <td>'.($value["rol"]).'</td>
	                <td>
	                  <div class="btn-group">
	                     <button class="btn-success EditarU" Uid="'.($value["id"]).'"><i class="fas fa-pencil-alt" data-toggle="modal" data-target="#EditarU"></i></button>
	                    <button class="btn-danger BorrarU" Uid="'.($value["id"]).'" Ufoto="'.($value["foto"]).'"><i class="fa fa-times"></i></button>
	                  </div>
	                </td>
              </tr>';
		}
	}

		// Crear Usuarios

	public function CrearUsuariosC(){

		if(isset($_POST["usuarioN"])){
			$rutaImg = "";

			if(isset($_FILES["fotoN"]["tmp_name"]) && !empty($_FILES["fotoN"]["tmp_name"])){

				if($_FILES["fotoN"]["type"] == "image/jpeg"){

					$nombre = mt_rand(10,999);


					$rutaImg = "Vistas/img/usuarios/U".$nombre.".jpg";

					$foto = imagecreatefromstring(file_get_contents($_FILES["fotoN"]["tmp_name"]));

					imagejpeg($foto,$rutaImg);


				}

				if($_FILES["fotoN"]["type"] == "image/png"){

					$nombre = mt_rand(10,999);


					$rutaImg = "Vistas/img/usuarios/U".$nombre.".png";

					$foto = imagecreatefromstring(file_get_contents($_FILES["fotoN"]["tmp_name"]));

					imagepng($foto,$rutaImg);


				}
			}

			$tablaDB = "usuarios";

			$datosC = array("nombres"=>$_POST["nombresN"],"apellidos"=>$_POST["apellidosN"],"usuario"=>$_POST["usuarioN"],"clave"=>$_POST["claveN"],"rol"=>$_POST["rolN"],"foto"=>$rutaImg);

			$respuesta = UsuariosM::CrearUsuariosM($tablaDB,$datosC);

			if($respuesta==true){

				echo '<script> 

					window.location= "usuarios"; 


					</script>';
			}else{
				echo 'ERROR AL CREAR USUARIO';
			}
		}
	}

	//Borrar usuarios
	public function BorrarUsuariosC(){

		if(isset($_GET["Uid"])){
			$tablaDB = "usuarios";
			$datosC = $_GET["Uid"];

			if($_GET["Ufoto"]!= ""){
				unlink($_GET["Ufoto"]);
			}

			$respuesta = UsuariosM::BorrarUsuariosM($tablaDB,$datosC);


			if($respuesta==true){

				echo '<script> 

					window.location= "usuarios"; 


					</script>';
			}else{
				echo 'ERROR AL BORRAR USUARIO';
			}
		}
	}

	//Llamar datos para editarlos
	static public function EUsuariosC($item,$valor){

		$tablaDB = "usuarios";

		$respuesta = UsuariosM::EUsuariosM($tablaDB,$item,$valor);

		return $respuesta;

	}

	//Actualizar Usuarios
	public function ActualizarUsuariosC(){

		if(isset($_POST["Uid"])){

			$rutaImg  = $_POST["FotoActual"];

			if(isset($_FILES["fotoE"]["tmp_name"]) && !empty($_FILES["fotoE"]["tmp_name"])){

				if(!empty($_POST["FotoActual"])){

					unlink($_POST["FotoActual"]);

				}else{
					mkdir($direc,0755);
				}

				if($_FILES["fotoE"]["type"] == "image/jpeg"){

					$nombre = mt_rand(10,999);


					$rutaImg = "Vistas/img/usuarios/U".$nombre."jpg";

					$foto = imagecreatefromstring(file_get_contents($_FILES["fotoE"]["tmp_name"]));

					imagejpeg($foto,$rutaImg);
				}


				if($_FILES["fotoE"]["type"] == "image/png"){

					$nombre = mt_rand(10,999);


					$rutaImg = "Vistas/img/usuarios/U".$nombre."png";

					$foto = imagecreatefromstring(file_get_contents($_FILES["fotoE"]["tmp_name"]));

					imagepng($foto,$rutaImg);
				}

			}

			$tablaDB = "usuarios";

			$datosC = array("id"=>$_POST["Uid"],"nombres"=>$_POST["nombreE"],"apellidos"=>$_POST["apellidoE"],"usuario"=>$_POST["usuarioE"],"clave"=>$_POST["claveE"],"rol"=>$_POST["rolE"],"foto"=>$rutaImg);

			$respuesta = UsuariosM::ActualizarUsuariosM($tablaDB,$datosC);

			if($respuesta==true){
				if($_GET["url"]=="perfil"){
					echo '<script> 

					window.location= "perfil"; 


					</script>';
				}else{
					echo '<script> 

					window.location= "usuarios"; 


					</script>';
				}

				
			}else{
				echo 'ERROR AL EDITAR USUARIO';
			}



		}
	}


	//ver perfil del usuario actual

	public function VerPerfilC(){

		$tablaDB = "usuarios";

		$id = $_SESSION["id"];

		$respuesta = UsuariosM::VerPerfilM($tablaDB,$id);


		echo '<tr>
	               
	                <td>'.($respuesta["nombres"]).'</td>
	                <td>'.($respuesta["apellidos"]).'</td>
	                <td>'.($respuesta["usuario"]).'</td>
	                <td>'.($respuesta["clave"]).'</td>';

	                if($respuesta["foto"]!= ""){
	                	echo '<td>

	                <img src="'.$respuesta["foto"].'" class="user-image" alt="User Image" width="40px"></td>';
	                }else{
	                	echo '<td>

	                <img src="Vistas/img/usuarios/defecto.png" class="user-image" alt="User Image" width="40px"></td>';
	                }
	                

	            echo '
	                <td>
	                  <div class="btn-group">
	                     <button class="btn-success EditarU" Uid="'.($respuesta["id"]).'"><i class="fas fa-pencil-alt" data-toggle="modal" data-target="#EditarU"></i></button>
	                    
	                  </div>
	                </td>
              </tr>';
	}




}

 ?>