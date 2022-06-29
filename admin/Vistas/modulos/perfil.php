 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Gestor de Perfil
      </h1>
     
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
      
        <div class="box-body" style="overflow: auto;">
          <table class="table table-bordered table-hover table-striped TB">
            <thead>
              <tr>
               
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Usuario</th>
                <th>Contraseña</th>
                <th>Foto</th>
              
                <th>Editar</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              
                $perfil = new UsuariosC();
                $perfil->VerPerfilC();


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
              

              <div class="form-group" style="display:none;">
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