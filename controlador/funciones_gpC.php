<?php 
  class FuncionesC{

  	public function VerFuncionesC(){

  		$tablaDB = "funciones_gp";


  		$respuesta = FuncionesM::MostrarFuncionesM($tablaDB);

  		foreach($respuesta as $key => $value){

  			echo '<li>'.$value["funcion"].'</li>';
  		}


  	
  	}

     }


 ?>