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
        Gestor de Oficios Multiples
      </h1>
     
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <button class="btn btn-primary" data-toggle="modal" data-target="#CrearOficio">Crear Oficio Multiple</button>
        </div>
        <div class="box-body" style="overflow: auto;">
          <table class="table table-bordered table-hover table-striped TB">
            <thead>
              <tr>
                <th>N°</th>
                <th>Titulo</th>
                <th style="min-width: 100px;">Fecha</th>
                <th>Documento</th>
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

                $verS = OficiosC::VerOficiosC($item, $valor);

                foreach($verS as $key =>$value){

                echo '<tr>
                          <td>'.($key+1).'</td>
                          <td>'.$value["titulo"].'</td>
                          <td>'.$value["fecha"].'</td>
                          <td>
                                                        
                            <a href="'.$value["documento"].'"  target="_blank" download="'.$value["titulo"].'" >Descargar</a> 
                          </td>
                          <td>
                            <div class="btn-group">
                              <button class="btn-success EditarOficio" Oid="'.$value["id"].'" data-toggle="modal" data-target="#EditarO"><i class="fas fa-pencil-alt"></i></button>
                              <button class="btn-danger BorrarOficio" Oid="'.$value["id"].'" documentoOficios="'.$value["documento"].'" ><i class="fa fa-times"></i></button>
                              
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

  <div class="modal fade" role="dialog" id="CrearOficio">
    <div class="modal-dialog">
      <div class="modal-content">
        <form method="post" role="form" enctype="multipart/form-data">

          <div class="modal-header"style="text-align: center;">
            <h4 >Crear Oficio</h4>
            <p class="help-block">Se recomienda archivos pdf </p>
          </div>

          <div class="modal-body">
            <div class="box-body">

               <div class="form-group">
                <h5>Titulo:</h5>
                <input type="text" class="form-control" name="tituloN" required>
              </div>

              <div class="form-group">
                <h5>Fecha:</h5>
                <input type="date" class="form-control" name="fechaN" required>
              </div>
              
            
              <div class="form-group">
              <h5>Documento</h5>
              <input type="file" name="documentoN">
              <p class="help-block">Peso máximo permitido 2MB</p>

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
          $crearO = new OficiosC();
          $crearO->CrearOficiosC();

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

  <div class="modal fade" role="dialog" id="EditarO">
    <div class="modal-dialog">
      <div class="modal-content">
        <form method="post" role="form" enctype="multipart/form-data">
          <div class="modal-header"style="text-align: center;">
            <h4 >Editar Oficio</h4>
            <p class="help-block">Se recomienda archivos pdf</p>
          </div>


          <div class="modal-body">
            <div class="box-body">
              

              <div class="form-group">
                <h5>Titulo</h5>
                <input type="text" class="form-control" id="tituloE" name="tituloE" required>
                <input type="hidden" id="Oid" name="Oid" required>
               
              </div>

              <div class="form-group">
                <h5>Fecha</h5>
                <input type="date" class="form-control" id="fechaE" name="fechaE" required>
           
               
              </div>


              <div class="form-group">
              <h5>Documento</h5>
              <input type="file" id="documentoE" name="documentoE">
            


            
               <div class="ExternalFiles">
                  <iframe src="Vistas/files/default.pdf" class="visor" width="300px" ></iframe>
          
              </div>

              <input type="hidden" name="DocumentoActual" id="DocumentoActual">

                
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

           $actualizarO= new OficiosC();
          $actualizarO-> ActualizarOficiosC();


         
        

         
           ?> 
        </form>
        
      </div>
      
    </div>
    
  </div>

  <?php 

 // $borrarS = new SlideC();
  //$borrarS->BorrarSlideC();

  $borrarO = new OficiosC();
  $borrarO->BorrarOficiosC();

   ?>