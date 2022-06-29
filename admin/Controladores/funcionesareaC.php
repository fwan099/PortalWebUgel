<?php 
 




class FuncionesAreaC{
	// Crear Funciones de un area
	public function CrearFuncionesAreaC($tabla){

		if(isset($_POST["funcionN"])){
           
			$tablaDB = $tabla;

			$datosC = array("funcion"=>$_POST["funcionN"]);

			$respuesta = FuncionesAreaM::CrearFuncionesAreaM($tablaDB,$datosC);

			if($respuesta == true){

				echo ' <script>

					window.location = "funcionesArea";

				</script>';
			}else{

				echo 'ERROR AL CREAR FUNCION';
			}
		}
	}

	//Ver las funciones de una area
	static public function VerFuncionesAreaC($item, $valor,$tabla){

		$tablaDB = $tabla;

 		$respuesta = FuncionesAreaM::VerFuncionesAreaM($tablaDB, $item, $valor);
 		return $respuesta;

	}

	// atualizar funciones del area

	public function ActualizarFuncionesAreaC($tabla){

		if(isset($_POST["funcionE"])){

			$tablaDB = $tabla;
			
			$datosC = array("id"=>$_POST["Fid"],"funcion"=>$_POST["funcionE"]);

			$respuesta = FuncionesAreaM::ActualizarFuncionesAreaM($tablaDB,$datosC);

			if($respuesta == true){

				echo ' <script>

					window.location = "funcionesArea";

				</script>';
			}else{

				echo 'ERROR AL CREAR FUNCION';
			}
		}
	}


	//borar funcion

	public function BorrarFuncionesAreaC($tabla){
		if(isset($_GET["Fid"])){

			$tablaDB = $tabla;
			$id = $_GET["Fid"];

			$respuesta = FuncionesAreaM::BorrarFuncionesAreaM($tablaDB,$id);

			if($respuesta == true){

				echo ' <script>

					window.location = "funcionesArea";

				</script>';
			}else{

				echo 'ERROR AL ELIMINAR  FUNCION';
			}


			
		}
	}
}

 ?>