<?php 
  class OficiosC{

  	public function MostrarOficiosC(){

  		$tablaDB = "oficios";


  		$respuesta = OficiosM::MostrarOficiosM($tablaDB);

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