<?php 

if ($_SESSION["rol"] != "Administrador") {

  echo '<script>
        window.location ="inicio"

  </script>';
  
}


 ?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Gestor de Informacion del Director de la UGEL Yunguyo
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box box-success">
        <div class="box-body">

          <?php
                $verD = new DireccionC();
                $verD->VerDireccionC(); 
            ?>
         
          
        </div>
        <div class="box-footer">
          <button class ="btn btn-success" data-toggle="modal" data-target="#EditarDireccion"><i class="fas fa-pencil-alt"></i> Editar</button>

          
        </div>
        
      </div>
    

    </section>
    <!-- /.content -->
  </div>

      <!-- Modal editar -->

  <div id="EditarDireccion" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <div class="modal-content">
        <form role="form" method="post" enctype="multipart/form-data">

          <?php
            $editarD = new DireccionC();
            $editarD->EditarDireccionC(); 

           ?>
         
          
        </form>
        
      </div>
      
    </div>

    
  </div>

  <?php 

  $actualizarD = new DireccionC();
  $actualizarD->ActualizarDireccionC();


   ?>