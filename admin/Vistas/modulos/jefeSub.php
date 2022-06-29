<?php 
$tabla =null;


 if($_SESSION["rol"]== "Jefe de Gestion Institucional"){

    $tabla = "jefesubarea_gi";

  }elseif($_SESSION["rol"]== "Jefe de Administracion"){

    $tabla = "jefesubarea_a";

  }elseif($_SESSION["rol"]== "Jefe de Recursos Humanos") {

    $tabla = "jefesubarea_rh";
    
  }elseif($_SESSION["rol"]== "Jefe de Gestion Pedagogica"){

    $tabla = "jefesubarea_gp";

  }elseif($_SESSION["rol"]== "Jefe de Asesoria Juridica"){

    $tabla = "jefesubarea_aj";
  }

 ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Gestor de la informacion del Jefes de SubAreas (Unicos)
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box box-success">
        <div class="box-body">
          <table class="table table-bordered table-hover table-striped TB">
            <thead>
              <tr>
                 <th>ID</th>
                <th>Nombres</th>
                <th>Celular</th>
                <th>Correo</th>
                <th>Whatsapp</th>
                <th>Foto</th>
               
                
              </tr>
            </thead>
            <tbody>
              
                <?php
                $item =null;
                $valor=null;
                $verN = new JefeSubC();
                $verN->VerJefeSubC($tabla,$item, $valor); 
            ?>
            </tbody>
            <button>Elige el ID de Usuario que quiere Editar</button>
            <script type="text/javascript">
              var identify;
              const button = document.querySelector('button');

                button.onclick = function() {
                   identify = prompt('¿Cuál es el ID ?');
               
                //window.location.href = window.location.href + "?w1=" + identify;
                window.location = "index.php?url=jefeSub&Cid="+identify;
                  }

                

            </script>
            
          </table>

        
         
          
        </div>
        <div class="box-footer">

          
<button class ="btn btn-success" data-toggle="modal" data-target="#EditarJefeSub"><i class="fas fa-pencil-alt"></i> Editar</button>
          
        </div>
        
      </div>
    

    </section>
    <!-- /.content -->
  </div>

      <!-- Modal editar -->

  <div id="EditarJefeSub" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <div class="modal-content">
        <form role="form" method="post" enctype="multipart/form-data">

          <?php
            
          // comprobar si tenemos los parametros w1 y w2 en la URL
          $ident=null;
            if (isset($_GET["Cid"])) {
                // asignar w1 y w2 a dos variables
                $identt= $_GET["Cid"];
                $ident=$identt;
                
             
              
            } else {
                echo "<h3>No seleccionaste el ID del Usuario</h3>";
            }
           
            $editarJ = new JefeSubC();
            $editarJ->EditarJefeSubC($tabla,$ident); 



           ?>
        
          
        </form>
        
      </div>
      
    </div>

    
  </div>


  <?php 

  $actualizarJ = new JefeSubC();
  $actualizarJ->ActualizarJefeSubC($tabla);


   ?>