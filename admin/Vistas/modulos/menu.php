 <style type="text/css">
  
   span{
    padding-left: 4px;
   }

 </style>
 
<?php
 if($_SESSION["rol"] != "Administrador"){
    echo '

 <style type="text/css">

  .sidebar-menu li:nth-child(9){
    background-color: rgba(100, 100, 100, 5.0);

  }
  .sidebar-menu li:nth-child(1) a{cursor: no-drop !important;}
  .sidebar-menu li:nth-child(2) a{cursor: no-drop !important;}
  .sidebar-menu li:nth-child(3) a{cursor: no-drop !important;}
  .sidebar-menu li:nth-child(4) a{cursor: no-drop !important;}
  .sidebar-menu li:nth-child(5) a{cursor: no-drop !important;}
  .sidebar-menu li:nth-child(6) a{cursor: no-drop !important;}
  .sidebar-menu li:nth-child(7) a{cursor: no-drop !important;}
  .sidebar-menu li:nth-child(8) a{cursor: no-drop !important;}
   .sidebar-menu li:nth-child(9) a{cursor: pointer !important;}


   
 </style>



    ';

 }

?>

  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
     <ul class="sidebar-menu" data-widget="tree">
      <li>
        <a href="inicio">
          <i class="fa fa-home"></i>
          <span>Inicio</span>
        </a>
      </li>
      <li>
        <a href="slide">
          <i class="fas fa-images"></i>
          <span>Slider</span>
        </a>
      </li>
      <li>
        <a href="comunicados">
          <i class="fas fa-file-audio"></i>
          <span>Comunicados</span>
        </a>
      </li>
      <li>
        <a href="oficios">
         <i class="far fa-newspaper"></i>
          <span>Oficios Multiples</span>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fas fa-briefcase"></i>
          <span>Convocatorias</span>


          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li>
            <a href="convocatoriascas">
              <i class=""></i>
              <span>Convocatorias CAS</span>
            </a>
          </li>
          <li>
            <a href="convocatoriasDocente">
              <i class=""></i>
              <span>Convocatorias Docente</span>
            </a>
          </li>
          <li>
            <a href="convocatoriasAuxiliar">
              <i class=""></i>
              <span>Convocatorias Auxiliar</span>
            </a>
          </li>
          <li>
            <a href="convocatoriasDirectivo">
              <i class=""></i>
              <span>Convocatorias Directivos</span>
            </a>
          </li>
           <li>
            <a href="convocatoriasCap">
              <i class=""></i>
              <span>Convocatorias CAP</span>
            </a>
          </li>
          
        </ul>
        
      </li>
    
      <li>
        <a href="usuarios">
          <i class="fa fa-users"></i>
          <span>Usuarios</span>
        </a>
      </li>

       <li>
        <a href="nosotros">
          <i class="fas fa-building"></i>
          <span>Nosotros</span>
        </a>
      </li>

       <li>
        <a href="direccion">
          <i class="fas fa-building"></i>
          <span>Direccion</span>
        </a>
      </li>

      <?php 


        if($_SESSION["rol"] != "Administrador"){

          echo '<li class="treeview">
        <a href="inicio">
          
          <i class="fas fa-weight-hanging"></i>
          <span>Mi Oficina</span>


          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li>
            <a href="funcionesArea">
              <i class=""></i>
              <span>Funciones del Area</span>
            </a>
          </li>
          <li>
            <a href="jefeArea">
              <i class=""></i>
              <span>Jefe de Area</span>
            </a>
          </li>
          <li>
            <a href="jefeSub">
              <i class=""></i>
              <span>Jefe de Subarea</span>
            </a>
          </li>
         
          
          
        </ul>
        
      </li>';
        }

       ?>

      
       
     </ul>
     
    </section>
    <!-- /.sidebar -->
  </aside>