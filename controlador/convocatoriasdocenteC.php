<?php 
  class ConvocatoriasDocenteC{

  	public function MostrarConvocatoriasDocenteC(){

  		$tablaDB = "convocatoria_docente";


  		$respuesta = ConvocatoriasDocenteM::MostrarConvocatoriasDocenteM($tablaDB);

  		foreach($respuesta as $key => $value){

  			echo ' <tr>
                                <td>'.($key+1).'</td>
                                <td><p class="text-info" style="font-size:11px;">'.$value["titulo"].'</p></td>';

                                #Condicion para habilitar las bases en el fronend
                          if(empty($value["bases"])){
                              echo'<td>-</td>';
                          }else{
                             echo'<td><a href="../../admin/'.$value["bases"].'"  target="_blank" download="BASES_'.$value["titulo"].'"><i class="fas fa-file-pdf"></i></a></td>';
                           }

                           #Condicion para habilitar la evaluacion preliminar de CV en el fronend
                          if(empty($value["cv1"])){
                              echo'<td>-</td>';
                          }else{
                             echo'<td><a href="../../admin/'.$value["cv1"].'" target="_blank" download="EVALUACION_PRELIMINAR_CV_'.$value["titulo"].'" ><i class="fas fa-file-pdf"></i></a></td>';
                           }

                           #Condicion para habilitar las absolucion de reclamos en el fronend
                          if(empty($value["reclamos"])){
                              echo'<td>-</td>';
                          }else{
                              echo'<td><a href="../../admin/'.$value["reclamos"].'" target="_blank" download="ABSOLUCION_DE_RECLAMOS_'.$value["titulo"].'" ><i class="fas fa-file-pdf"></i></a></td>';
                           }

                           #Condicion para habilitar la evaluacion final de CV en el fronend
                          if(empty($value["cv2"])){
                              echo'<td>-</td>';
                          }else{
                               echo'<td><a href="../../admin/'.$value["cv2"].'" target="_blank" download="EVALUACION_FINA_CV_'.$value["titulo"].'"><i class="fas fa-file-pdf"></i></a></td>';
                           }

                           #Condicion para habilitar los resultados de entrevista en el fronend
                          if(empty($value["entrevista"])){
                              echo'<td>-</td>';
                          }else{
                               echo'<td><a href="../../admin/'.$value["entrevista"].'" target="_blank" download="RESULTADO_ENTREVISTA_'.$value["titulo"].'"><i class="fas fa-file-pdf"></i></a></td>';
                           }

                           #Condicion para habilitar los resultados finales en el fronend
                          if(empty($value["final"])){
                              echo'<td>-</td>';
                          }else{
                             echo'<td><a href="../../admin/'.$value["final"].'" target="_blank" download="RESULTADO_FINAL_'.$value["titulo"].'"><i class="fas fa-file-pdf"></i></a></td>';
                           }


                          if($value["estado"]=="Vigente"){

                             echo'         <td><p class="text-success"><b>'.$value["estado"].'</b></p></td>';
                           }else{
                            echo'         <td><p class="text-danger"><b>'.$value["estado"].'</b></p></td>';

                           }

                               

        echo '      </tr>';
  		}


  	
  	}

     }


 ?>