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
        Gestor del slide
      </h1>
     
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <button class="btn btn-primary" data-toggle="modal" data-target="#CrearSlide">Crear Imagen</button>
        </div>
        <div class="box-body" style="overflow: auto;">
          <table class="table table-bordered table-hover table-striped TB">
            <thead>
              <tr>
                <th>N°</th>
                <th>Imagen</th>
                <th>Orden</th>
                <th>Editar / Eliminar</th>
              </tr>
            </thead>
            <tbody>
             <!-- <tr>
                <td>1</td>
                <td><img src="Vistas/img/default.png" class="img-thumbnail" width="300px"></td>
                <td>1</td>
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

              $verS = SlideC::VerSlideC($item, $valor);

              foreach($verS as $key =>$value){

                echo '<tr>

                    <td>'.($key+1).'</td>

                    <td><img src="'.$value["imagen"].'" class="img-thumbnail" width="160px"></td> 

                    <td><h3>'.$value["orden"].'</h3></td>

                    <td>
                      <div class="btn-group">
                        <button class="btn-success EditarSlide" Sid="'.$value["id"].'" data-toggle="modal" data-target="#EditarS"><i class="fas fa-pencil-alt"></i></button>
                        <button class="btn-danger BorrarSlide"  Sid="'.$value["id"].'" imagenSlide="'.$value["imagen"].'" ><i class="fa fa-times"></i></button>
                        
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


  <!-- Modal crar slide -->

  <div class="modal fade" role="dialog" id="CrearSlide">
    <div class="modal-dialog">
      <div class="modal-content">
        <form method="post" role="form" enctype="multipart/form-data">

          <div class="modal-header"style="text-align: center;">
            <h4 >Crear Slide</h4>
            <p class="help-block">Se recomienda imagenes de 1600px por 600px</p>
          </div>

          <div class="modal-body">
            <div class="box-body">

               <div class="form-group">
                <h5>Orden</h5>
                <input type="text" class="form-control" name="ordenN" required>
              </div>
            
              <div class="form-group">
              <h5>Imagen</h5>
              <input type="file" name="imagenN">
              <p class="help-block">Peso máximo permitido 2MB</p>

              </div>
            </div>
            
          </div>

          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Crear</button>
             <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            
          </div>
          <?php 
          $crearS = new  SlideC();
            $crearS->CrearSlideC();

           ?>
          
        </form>
        
      </div>
      
    </div>
    
  </div>

  <?php 
  $borrarU = new UsuariosC();
  $borrarU->BorrarUsuariosC();
   ?>

   <!-- Modal editar  Slider -->

  <div class="modal fade" role="dialog" id="EditarS">
    <div class="modal-dialog">
      <div class="modal-content">
        <form method="post" role="form" enctype="multipart/form-data">
          <div class="modal-header"style="text-align: center;">
            <h4 >Editar Slide</h4>
            <p class="help-block">Se recomienda imagenes de 1600px por 600px</p>
          </div>


          <div class="modal-body">
            <div class="box-body">
              

              <div class="form-group">
                <h5>Orden</h5>
                <input type="text" class="form-control" id="ordenE" name="ordenE" required>
                <input type="hidden" id="Sid" name="Sid" required>
               
              </div>


              <div class="form-group">
              <h5>Imagen</h5>
              <input type="file" id="imagenE" name="imagenE">
              <p class="help-block">Peso máximo permitido 2MB</p>


              <img src="Vistas/img/default.png" class="img-thumbnail visor" width="340px;" >

              <input type="hidden" name="ImagenActual" id="ImagenActual">

                
              </div>
            </div>
            
          </div>

          <div class="modal-footer">
            <button type="submit" class="btn btn-success">Guardar Cambios</button>
             <button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
            
          </div>

          <?php 
           $actualizarS = new SlideC();
           $actualizarS->ActualizarSlideC();


         
           ?> 
        </form>
        
      </div>
      
    </div>
    
  </div>

  <?php 

  $borrarS = new SlideC();
  $borrarS->BorrarSlideC();

   ?>