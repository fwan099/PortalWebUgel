<?php 
  class OficiosC{

  	public function MostrarOficiosC(){

  		$tablaDB = "oficios";


  		$respuesta = OficiosM::MostrarOficiosM($tablaDB);

  		foreach($respuesta as $key => $value){

  			echo '<tr class="tr">
                <td>'.($key+1).'</td>
                <td><a href="admin/'.$value["documento"].'" target="_blank" download="'.$value["titulo"].'">'.$value["titulo"].'</a>
                    <div style="padding-top: 6px; color: #555;"><b>Fecha: </b>'.$value["niceDate"].'</div>
                </td>
                <td><div id="container">
                    <a href="#">
                          <iframe src="admin/'.$value["documento"].'#toolbar=0&navpanes=0&scrollbar=0" frameborder="0" scrolling="no" > 

                    </iframe></a>

                    </div></td>
              </tr>';
  		}


  	
  	}

     }


 ?>