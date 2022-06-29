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
$tabla =null;

 if($_SESSION["rol"]== "Jefe de Gestion Institucional"){

    $tabla = "funciones_gi";

  }elseif($_SESSION["rol"]== "Jefe de Administracion"){

    $tabla = "funciones_a";

  }elseif($_SESSION["rol"]== "Jefe de Recursos Humanos") {

    $tabla = "funciones_rh";
    
  }elseif($_SESSION["rol"]== "Jefe de Gestion Pedagogica"){

    $tabla = "funciones_gp";

  }elseif($_SESSION["rol"]== "Jefe de Asesoria Juridica"){

    $tabla = "funciones_aj";
  }

 ?>


<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Gestor de Funciones de su Area u Oficina
      </h1>
     
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <button class="btn btn-primary" data-toggle="modal" data-target="#CrearFuncion">Añadir Funcion</button>
        </div>
        <div class="box-body" style="overflow: auto;">
          <table class="table table-bordered table-hover table-striped TB">
            <thead>
              <tr>
                <th>N°</th>
                <th>Funcion</th>
                <th> Eliminar</th>
              </tr>
            </thead>
            <tbody>
<!--
            <tr>
                <td>1</td>
                <td>-</td>
              
                <td>
                  <div class="btn-group">
                    <button class="btn-success" data-toggle="modal" data-target="#EditarS"><i class="fas fa-pencil-alt"></i></button>
                    <button class="btn-danger"><i class="fa fa-times"></i></button>
                    
                  </div>
                </td>
          
              </tr> 
             -->
             <?php 

               $item = null;
               $valor = null;
          

            

               $verF = FuncionesAreaC::VerFuncionesAreaC($item, $valor,$tabla);

               foreach($verF as $key => $value){

                echo '
                        <tr>
                          <td>'.($key+1).'</td>
                          <td>'.$value["funcion"].'</td>
                        
                          <td>
                            <div class="btn-group">
                              
                              <button class="btn-danger BorrarFuncion" Fid="'.$value["id"].'"><i class="fa fa-times"></i></button>
                              
                            </div>
                          </td>
          
              </tr> 



                ';

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

  <div class="modal fade" role="dialog" id="CrearFuncion">
    <div class="modal-dialog">
      <div class="modal-content">
        <form method="post" role="form" enctype="multipart/form-data">

          <div class="modal-body">
            <div class="box-body">
                <div class="form-group">
               
                
              </div>
               <div class="form-group">
                <h5>Funcion</h5>
                <textarea  class="form-control" name="funcionN" required ></textarea> 
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

            $crearF = new FuncionesAreaC();
            $crearF->CrearFuncionesAreaC($tabla);
        

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

  <div class="modal fade" role="dialog" id="EditarF">
    <div class="modal-dialog">
      <div class="modal-content">
        <form method="post" role="form" enctype="multipart/form-data">

           <div class="modal-body">
            <div class="box-body">
                <div class="form-group">
               
                
              </div>
               <div class="form-group">
                <h5>Funcion:</h5>
                
                <textarea  class="form-control" id="funcionE" name="funcionE" required ></textarea> 
                <input type="hidden" id="Fid" name="Fid" required>
               
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

            $actualizarF = new FuncionesAreaC();
            $actualizarF->ActualizarFuncionesAreaC($tabla);

         
           ?> 
        </form>
        
      </div>
      
    </div>
    
  </div>

  <?php 

 // $borrarS = new SlideC();
  //$borrarS->BorrarSlideC();

    $borarF = new FuncionesAreaC();
    $borarF->BorrarFuncionesAreaC($tabla);


   ?>