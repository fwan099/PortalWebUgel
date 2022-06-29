<?php 
$tabla =null;

 if($_SESSION["rol"]== "Jefe de Gestion Institucional"){

    $tabla = "jefe_gi";

  }elseif($_SESSION["rol"]== "Jefe de Administracion"){

    $tabla = "jefe_a";

  }elseif($_SESSION["rol"]== "Jefe de Recursos Humanos") {

    $tabla = "jefe_rh";
    
  }elseif($_SESSION["rol"]== "Jefe de Gestion Pedagogica"){

    $tabla = "jefe_gp";

  }elseif($_SESSION["rol"]== "Jefe de Asesoria Juridica"){

    $tabla = "jefe_aj";
  }

 ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Gestor de la informacion del Jefe de Area (Unico)
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box box-success">
        <div class="box-body">

          <?php
                $verN = new JefeAreaC();
                $verN->VerJefeAreaC($tabla); 
            ?>
         
          
        </div>
        <div class="box-footer">
          <button class ="btn btn-success" data-toggle="modal" data-target="#EditarJefeArea"><i class="fas fa-pencil-alt"></i> Editar</button>

          
        </div>
        
      </div>
    

    </section>
    <!-- /.content -->
  </div>

      <!-- Modal editar -->

  <div id="EditarJefeArea" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <div class="modal-content">
        <form role="form" method="post" enctype="multipart/form-data">

          <?php
            $editarJ = new JefeAreaC();
            $editarJ->EditarJefeAreaC($tabla); 



           ?>
        
          
        </form>
        
      </div>
      
    </div>

    
  </div>

  <?php 

  $actualizarJ = new JefeAreaC();
  $actualizarJ->ActualizarJefeAreaC($tabla);


   ?>