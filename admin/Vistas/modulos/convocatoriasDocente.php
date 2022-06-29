<style type="text/css">
  .fa-file-pdf{
  font-size: 26px;
  text-align: center !important;
  color: #DC3545;
}
.sub-mitad{
  width: 50%;
}
.mitad{
  display: flex;
}
.s1{
  margin-right: 6px;
}
.s2{
  margin-left: 6px;
}
.fa-trash-alt{
  font-size: 20px;
  text-align: center;
}
.s22{
  display: flex;
  justify-content: center;
}
.s22 button{
  width: 30px;
  height: 30px;
  align-self: center;
  text-decoration: none;

}
</style>

<?php 

if ($_SESSION["rol"] != "Administrador") {

  echo '<script>
        window.location ="inicio"

  </script>';
  
}


 ?>


<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Gestor de Convocatorias Docente
      </h1>
     
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <button class="btn btn-primary" data-toggle="modal" data-target="#CrearConvocatoria">Crear Convocatoria</button>
        </div>
        <div class="box-body" style="overflow: auto;">
          <table class="table table-bordered table-hover table-striped TB">
            <thead>
              <tr>
                <th>N°</th>
                <th>Titulo</th>
                <th>Bases</th>
                <th>Documento preliminar CV</th>
                <th>Absolucion de reclamos</th>
                <th>Documento final CV</th>
                <th>Resultado entrevista</th>
                <th>Resultado final</th>
                <th>Estado</th>
                <th style="min-width: 100px;">Fecha</th>
                <th>Editar / Eliminar</th>
              </tr>
            </thead>
            <tbody>
            <!-- <tr>
                <td>1</td>
                <td>COMUNICADO DE CUADRO DE DISTRIBUCION DE HORAS</td>
                <td>05/01/2022</td>
                <td>
                  
                  <button type="button" class=" btn-info" data-toggle="modal" data-target="#mostrarDoc">
                  <i class="fas fa-eye"></i> Ver documento
                  </button>
                  
                </td>
                <td>
                  <div class="btn-group">
                    <button class="btn-success" data-toggle="modal" data-target="#EditarS"><i class="fas fa-pencil-alt"></i></button>
                    <button class="btn-danger"><i class="fa fa-times"></i></button>
                    
                  </div>
                </td>
          
              </tr> -->
              <?php 

                $item = null;
                $valor = null;

                $verC = ConvocatoriasDocenteC::VerConvocatoriasDocenteC($item, $valor);

                foreach($verC as $key =>$value){

                echo '<tr>
                          <td>'.($key+1).'</td>
                          <td>'.$value["titulo"].'</td>';

                          #Condicion para habilitar las bases en el fronend
                          if(empty($value["bases"])){
                              echo'<td><a href="#" >Vacio</a></td>';
                          }else{
                             echo'<td><a href="'.$value["bases"].'"  target="_blank" download="BASES_'.$value["titulo"].'"><i class="fas fa-file-pdf"></i></a></td>';
                           }

                           #Condicion para habilitar la evaluacion preliminar de CV en el fronend
                          if(empty($value["cv1"])){
                              echo'<td><a href="#" >Vacio</a></td>';
                          }else{
                             echo'<td><a href="'.$value["cv1"].'" target="_blank" download="EVALUACION_PRELIMINAR_CV_'.$value["titulo"].'" ><i class="fas fa-file-pdf"></i></a></td>';
                           }

                           #Condicion para habilitar las absolucion de reclamos en el fronend
                          if(empty($value["reclamos"])){
                              echo'<td><a href="#" >Vacio</a></td>';
                          }else{
                              echo'<td><a href="'.$value["reclamos"].'" target="_blank" download="ABSOLUCION_DE_RECLAMOS_'.$value["titulo"].'" ><i class="fas fa-file-pdf"></i></a></td>';
                           }

                           #Condicion para habilitar la evaluacion final de CV en el fronend
                          if(empty($value["cv2"])){
                              echo'<td><a href="#" >Vacio</a></td>';
                          }else{
                               echo'<td><a href="'.$value["cv2"].'" target="_blank" download="EVALUACION_FINA_CV_'.$value["titulo"].'"><i class="fas fa-file-pdf"></i></a></td>';
                           }

                           #Condicion para habilitar los resultados de entrevista en el fronend
                          if(empty($value["entrevista"])){
                              echo'<td><a href="#" >Vacio</a></td>';
                          }else{
                               echo'<td><a href="'.$value["entrevista"].'" target="_blank" download="RESULTADO_ENTREVISTA_'.$value["titulo"].'"><i class="fas fa-file-pdf"></i></a></td>';
                           }

                           #Condicion para habilitar los resultados finales en el fronend
                          if(empty($value["final"])){
                              echo'<td><a href="#" >Vacio</a></td>';
                          }else{
                             echo'<td><a href="'.$value["final"].'" target="_blank" download="RESULTADO_FINAL_'.$value["titulo"].'"><i class="fas fa-file-pdf"></i></a></td>';
                           }


                          if($value["estado"]=="Vigente"){

                             echo'         <td><p class="text-success"><b>'.$value["estado"].'</b></p></td>';
                           }else{
                            echo'         <td><p class="text-danger"><b>'.$value["estado"].'</b></p></td>';

                           }

                


                echo '<td>'.$value["fecha"].'</td>
                          <td>
                            <div class="btn-group">
                              <button class="btn-success EditarConvocatoriaD" Cid="'.$value["id"].'" data-toggle="modal" data-target="#EditarCD"><i class="fas fa-pencil-alt"></i></button>

                              <button class="btn-danger BorrarConvocatoriaD" Cid="'.$value["id"].'" documentoConvocatorias1="'.$value["bases"].'" documentoConvocatorias2="'.$value["cv1"].'" documentoConvocatorias3="'.$value["reclamos"].'"   documentoConvocatorias4="'.$value["cv2"].'" documentoConvocatorias5="'.$value["entrevista"].'" documentoConvocatorias6="'.$value["final"].'"><i class="fa fa-times"></i></button>
                              
                            </div>
                          </td>
          
              </tr>';




              }


               ?>

             
            </tbody>
            
          </table>
        </div>
        <!-- /.box-body -->
       
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 <!-- Modal ver pdsf-->



  <!-- Modal crar comunicado-->

  <div class="modal fade" role="dialog" id="CrearConvocatoria">
    <div class="modal-dialog">
      <div class="modal-content">
        <form method="post" role="form" enctype="multipart/form-data">

          <div class="modal-body">
            <div class="box-body">
                <div class="form-group">
               
                
              </div>
               <div class="form-group">
                <h5>Titulo:</h5>
                <input type="text" class="form-control" name="tituloN" required>
              </div>

              <div class="form-group mitad">
                <div class="sub-mitad s1">
                    <h5>Fecha:</h5>
                    <input type="date" class="form-control" name="fechaN" required>
                </div>
                <div class="sub-mitad s2">
                     <h5>Selecciona el Estado:</h5>
                    <select class="form-control " name="estadoN">
                       <option value="Vigente">Vigente</option>
                       <option value="Concluido">Concluido</option>
                  
                   </select>
                </div>
                
                
              </div>
              
            
              <div class="form-group">
              <h5>Bases:</h5>
              <input type="file" name="documentoN1">
              </div>

              <div class="form-group">
              <h5>Evaluacion Preliminar CV:</h5>
              <input type="file" name="documentoN2">
              </div>

              <div class="form-group">
              <h5>Absolucion de Reclamos:</h5>
              <input type="file" name="documentoN3">
              </div>

              <div class="form-group">
              <h5>Evaluacion Final CV:</h5>
              <input type="file" name="documentoN4">
              </div>

              <div class="form-group">
              <h5>Resultado Entrevista:</h5>
              <input type="file" name="documentoN5">
              </div>

              <div class="form-group">
              <h5>Resultado Final:</h5>
              <input type="file" name="documentoN6">
              </div>

            </div>
            
          </div>

          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Crear</button>
             <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            
          </div>
          <?php 
          //$crearS = new  SlideC();
            //$crearS->CrearSlideC();
          $crearC = new ConvocatoriasDocenteC();
          $crearC->CrearConvocatoriasDocenteC();

           ?>
          
        </form>
        
      </div>
      
    </div>
    
  </div>

  <?php 
  $borrarU = new UsuariosC();
 $borrarU->BorrarUsuariosC();
   ?>

   <!-- Modal editar  Comunicados -->

  <div class="modal fade" role="dialog" id="EditarCD">
    <div class="modal-dialog">
      <div class="modal-content">
        <form method="post" role="form" enctype="multipart/form-data">

           <div class="modal-body">
            <div class="box-body">
                <div class="form-group">
               
                
              </div>
               <div class="form-group">
                <h5>Titulo:</h5>
                <input type="text" class="form-control" id="tituloE" name="tituloE" required>
                <input type="hidden" id="Cid" name="Cid" required>
              </div>

              <div class="form-group mitad">
                <div class="sub-mitad s1">
                    <h5>Fecha:</h5>
                    <input type="date" class="form-control" id="fechaE" name="fechaE" required>
                </div>
                <div class="sub-mitad s2">
                     <h5>Selecciona el Estado:</h5>
                    <select class="form-control " name="estadoE">
                       <option id="estadoE"></option>
                       <option value="Vigente">Vigente</option>
                       <option value="Concluido">Concluido</option>
                  
                   </select>
                </div>
                
                
              </div>
              
            
              <div class="form-group ">
                
                  <h5>Bases:</h5>
                  <input type="file" id="documento1E" name="documento1E">
                   <div class="ExternalFiles">


                      <iframe src="Vistas/files/default.pdf" class="visor1" width="100%"   ></iframe>
          
                  </div>

                   <input type="hidden" name="DocumentoActual1" id="DocumentoActual1">
               
               
              
              </div>

              <div class="form-group">
              <h5>Evaluacion Preliminar CV:</h5>
              <input type="file" id="documento2E" name="documento2E">
              <div class="ExternalFiles">
                  <iframe src="Vistas/files/default.pdf" class="visor2" width="100%" ></iframe>
          
              </div>

              <input type="hidden" name="DocumentoActual2" id="DocumentoActual2">
              </div>

              <div class="form-group">
              <h5>Absolucion de Reclamos:</h5>
              <input type="file" id="documento3E" name="documento3E">
              <div class="ExternalFiles">
                  <iframe src="Vistas/files/default.pdf" class="visor3" width="100%" ></iframe>
          
              </div>

              <input type="hidden" name="DocumentoActual3" id="DocumentoActual3">
              </div>

              <div class="form-group">
              <h5>Evaluacion Final CV:</h5>
              <input type="file" id="documento4E" name="documento4E">
              <div class="ExternalFiles">
                  <iframe src="Vistas/files/default.pdf" class="visor4"  width="100%" ></iframe>
          
              </div>

              <input type="hidden" name="DocumentoActual4" id="DocumentoActual4">
              </div>

              <div class="form-group">
              <h5>Resultado Entrevista:</h5>
              <input type="file" id="documento5E" name="documento5E">
              <div class="ExternalFiles">
                  <iframe src="Vistas/files/default.pdf" class="visor5" width="100%" ></iframe>
          
              </div>

              <input type="hidden" name="DocumentoActual5" id="DocumentoActual5">
              </div>

              <div class="form-group">
              <h5>Resultado Final:</h5>
              <input type="file" id="documento6E" name="documento6E">
              <div class="ExternalFiles">
                  <iframe src="Vistas/files/default.pdf" class="visor6" width="100%" ></iframe>
          
              </div>

              <input type="hidden" name="DocumentoActual6" id="DocumentoActual6">
              </div>

            </div>
            
          </div>

          <div class="modal-footer">
            <button type="submit" class="btn btn-success">Guardar Cambios</button>
             <button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
            
          </div>

          <?php 
          // $actualizarS = new SlideC();
           //$actualizarS->ActualizarSlideC();

           $actualizarC = new ConvocatoriasDocenteC();
          $actualizarC-> ActualizarConvocatoriasDocenteC();


         
        

         
           ?> 
        </form>
        
      </div>
      
    </div>
    
  </div>

  <?php 

 // $borrarS = new SlideC();
  //$borrarS->BorrarSlideC();

  $borrarC = new ConvocatoriasDocenteC();
  $borrarC->BorrarConvocatoriasDocenteC();

   ?>