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
        Gestor de usuarios
      </h1>
     
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <button class="btn btn-primary" data-toggle="modal" data-target="#CrearUsuarios">Crear Usuarios</button>
        </div>
        <div class="box-body" style="overflow: auto;">
          <table class="table table-bordered table-hover table-striped TB">
            <thead>
              <tr>
                <th>N°</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Usuario</th>
                <th>Contraseña</th>
                <th>Foto</th>
                <th>Rol</th>
                <th>Editar / Eliminar</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                $verU = new UsuariosC();
                $verU->VerUsuariosC();


                $item = null;
                $valor = null;

                $editarU =  UsuariosC::EUsuariosC($item,$valor);

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


  <!-- Modal crar usuarios -->

  <div class="modal fade" role="dialog" id="CrearUsuarios">
    <div class="modal-dialog">
      <div class="modal-content">
        <form method="post" role="form" enctype="multipart/form-data">

          <div class="modal-body">
            <div class="box-body">
              <div class="form-group">
                <h5>Nombres</h5>
                <input type="text" class="form-control " name="nombresN" required>
              </div>
              <div class="form-group">
                <h5>Apellidos</h5>
                <input type="text" class="form-control" name="apellidosN" required>
              </div>
              <div class="form-group">
                <h5>Nombre de usuario</h5>
                <input type="text" class="form-control" name="usuarioN" required>
              </div>

              <div class="form-group">
                <h5>Contraseña</h5>
                <input type="password" class="form-control " name="claveN" required>
              </div>
              
              <div class="form-group">
                <h5>Seleccion el Rol</h5>
                <select class="form-control " name="rolN">
                  <option>Seleccionar rol...</option>
                  <option value="Administrador">Administrador</option>
                  <option value="Jefe de Gestion Institucional">Jefe de Gestion Institucional</option>
                  <option value="Jefe de Administracion">Jefe de Administracion</option>
                  <option value="Jefe de Recursos Humanos">Jefe de Recursos Humanos</option>
                  <option value="Jefe de Gestion Pedagogica">Jefe de Gestion Pedagogica</option>
                  <option value="Jefe de Asesoria Juridica">Jefe de Asesoria Juridica</option>
                  
                </select>
                
              </div>

              <div class="form-group">
              <h5>Foto</h5>
              <input type="file" name="fotoN">
              <p class="help-block">Peso máximo permitido 2MB</p>
              </div>
            </div>
            
          </div>

          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Crear</button>
             <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            
          </div>
          <?php 
            $crearU = new UsuariosC();
            $crearU->CrearUsuariosC();
           ?>
          
        </form>
        
      </div>
      
    </div>
    
  </div>

  <?php 
  $borrarU = new UsuariosC();
  $borrarU->BorrarUsuariosC();
   ?>

   <!-- Modal editar usuarios -->

  <div class="modal fade" role="dialog" id="EditarU">
    <div class="modal-dialog">
      <div class="modal-content">
        <form method="post" role="form" enctype="multipart/form-data">


          <div class="modal-body">
            <div class="box-body">
              <div class="form-group">
                <h5>Nombres</h5>
                <input type="text" class="form-control " id="nombreE" name="nombreE" required>
                <input type="hidden" id="Uid" name="Uid">
              </div>

              <div class="form-group">
                <h5>Apellidos</h5>
                <input type="text" class="form-control" id="apellidoE" name="apellidoE" required>
                
              </div>

              <div class="form-group">
                <h5>Nombre de usuario</h5>
                <input type="text" class="form-control" id="usuarioE" name="usuarioE" required>
               
              </div>

              <div class="form-group">
                <h5>Contraseña</h5>
                <input type="text" class="form-control" id="claveE" name="claveE" required>
              </div>
              
              <div class="form-group">
                <h5>Seleccion el Rol</h5>
                <select class="form-control"  name="rolE">
                  <option id="rolE"></option>
                  <option value="Administrador">Administrador</option>
                  <option value="Jefe de Gestion Institucional">Jefe de Gestion Institucional</option>
                  <option value="Jefe de Administracion">Jefe de Administracion</option>
                  <option value="Jefe de Recursos Humanos">Jefe de Recursos Humanos</option>
                  <option value="Jefe de Gestion Pedagogica">Jefe de Gestion Pedagogica</option>
                  <option value="Jefe de Asesoria Juridica">Jefe de Asesoria Juridica</option>
                  
                </select>
                
              </div>

              <div class="form-group">
              <h5>Foto</h5>
              <input type="file" id="fotoE" name="fotoE">
              <p class="help-block">Peso máximo permitido 2MB</p>


              <img src="Vistas/img/usuarios/defecto.png" class="img-thumbnail visor" width="100px;">

              <input type="hidden" name="FotoActual" id="FotoActual">

                
              </div>
            </div>
            
          </div>

          <div class="modal-footer">
            <button type="submit" class="btn btn-success">Guardar Cambios</button>
             <button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
            
          </div>

          <?php 
            $actualizarU = new UsuariosC();
            $actualizarU->ActualizarUsuariosC();
         
           ?> 
        </form>
        
      </div>
      
    </div>
    
  </div>