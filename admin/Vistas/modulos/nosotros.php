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
        Gestor de Sobre Nosotros
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box box-success">
        <div class="box-body">

          <?php
                $verN = new NosotrosC();
                $verN->VerNosotrosC(); 
            ?>
         
          
        </div>
        <div class="box-footer">
          <button class ="btn btn-success" data-toggle="modal" data-target="#EditarNosotros"><i class="fas fa-pencil-alt"></i> Editar</button>

          
        </div>
        
      </div>
    

    </section>
    <!-- /.content -->
  </div>

      <!-- Modal editar -->

  <div id="EditarNosotros" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <div class="modal-content">
        <form role="form" method="post" enctype="multipart/form-data">

          <?php
            $editarN = new NosotrosC();
            $editarN->EditarNosotrosC(); 

           ?>
         
          
        </form>
        
      </div>
      
    </div>

    
  </div>

  <?php 

  $actualizarN = new NosotrosC();
  $actualizarN->ActualizarNosotrosC();


   ?>