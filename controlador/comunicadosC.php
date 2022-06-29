<?php 
  class ComunicadosC{

  	public function MostrarComunicadosC(){

  		$tablaDB = "comunicados";


  		$respuesta = ComunicadosM::MostrarComunicadosM($tablaDB);

  		foreach($respuesta as $key => $value){

  			echo '<tr class="tr">
                <td>'.($key+1).'</td>
                <td><a href="admin/'.$value["documento"].'" target="_blank" download="'.$value["titulo"].'">'.$value["titulo"].'</a>
                    <div style="padding-top: 6px; color: #555;"><b>Fecha: </b>'.$value["niceDate"].'</div>

                </td>
                
                <td><div id="container">
                    <a href="<?php echo urlsite ?>public/pdfs/MOF_UGEL.pdf">
                          <iframe src="admin/'.$value["documento"].'#toolbar=0&navpanes=0&scrollbar=0" frameborder="0" scrolling="no" > 

                    </iframe></a>

                    </div>
                </td>
              </tr>';
  		}


  	
  	}

     }


 ?>