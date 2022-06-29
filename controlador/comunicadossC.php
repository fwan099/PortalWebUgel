<?php 
  class ComunicadosC{

  	public function MostrarComunicadosC(){

  		$tablaDB = "comunicados";


  		$respuesta = ComunicadosM::MostrarComunicadosM($tablaDB);

  		foreach($respuesta as $key => $value){

  			echo '<tr class="tr">
                <td>'.($key+1).'</td>
                <td><a href="admin/'.$value["documento"].'" target="_blank" download="'.$value["titulo"].'">'.$value["titulo"].'</a></td>
                
                <td>'.$value["niceDate"].'</td>
              </tr>';
  		}


  	
  	}

     }


 ?>