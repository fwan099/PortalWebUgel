<?php 
require "../../config.php";
require "../layouts/header.php";

require "../../controlador/funciones_ajC.php";
require "../../controlador/jefearea_ajC.php";
require "../../controlador/jefesub_ajC.php";


require "../../modelo/funciones_ajM.php";
require "../../modelo/jefearea_ajM.php";
require "../../modelo/jefesub_ajM.php";
 ?>
 <!-- Maquetado de la parte del contenido del modulo-->

<section class="main-gestion-inst">
        <div class="items-box">
            <div class="title-box">
                <span>AREA DE ASESORIA JURIDICA</span>
                
            </div>
            <div class="box-services box-inst">
               <div class="services inst-services">
                    <div class="jefe-area-item">
                    <a href="#">
                        <div class="item-button-jefe">
                            <span><button data-toggle="modal" data-target="#verJefeArea">JEFE DE AREA</button></span>
                        
                        </div>
                    </a>
                    
                </div>

                
                
                <div class="item-boxes">
                    <a href="#">
                        <div class="item-box-main especial">
                            <span><button data-toggle="modal" data-target="#subArea1">OFICINA DE SECRETARIA</button></span>
                        
                        </div>
                    </a>
                    
                </div>

                

            </div>
           </div>
        </div>
        
    </section>


    <section class="fn-funciones">
        <div class="fn-box">
            <div class="fn-title">
                <span>FUNCIONES DEL AREA</span>
                
            </div>
            <div class="fn-content-funciones">
                <ul>
                   <?php 

                    $funciones = new FuncionesC();
                    $funciones->VerFuncionesC();

                 ?>
                </ul>

                
                
            </div>
            
        </div>
    </section>

    <!-- Maquetacion del sub menu de botones dentro del container-->
    <hr style="height: 2px; background-color: #ED564B;">

    <section class="sub-menu-container">
        <div class="sub-menu-botones">
            <ul class="sub-menu-areas">
                <li><a href="gestion-inst.php">AREA DE GESTION INSTITUCIONAL</a></li>
                <li><a href="area_admin.php">AREA DE ADMINISTRACION</a></li>
                <li><a href="area-rrhh.php">AREA DE RECURSOS HUMANOS</a></li>
                <li><a href="area-pedagogica.php">AREA DE GESTION PEDAGOGICA</a></li>
                <li><a href="area-asesoria.php">AREA DE ASESORIA JURIDICA</a></li>
            </ul>
            
        </div>
        
    </section>
<!-- Fin del Maquetado de la parte del contenido del modulo-->


   <!-- Modal -->
<div class="modal fade" id="verJefeArea" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><b>JEFE DEL AREA DE ASESORIA JURIDICA</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div>
          <div class="foto-jefe">
            <?php 

                    $verJ = new JefeAreaC();
                    $verJ->VerJefeAreaC();


                 ?>
            </ul>
            
        </div>  
        </div>
        

        
      </div>
     
    </div>
  </div>
</div>

   <!-- Modal -->
<div class="modal fade" id="subArea1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><b>SECRETARÍA</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div>
          <div class="foto-jefe">
            <?php 

                    $verJ1 = new JefeSubC();
                    $verJ1->VerJefeSub1C();


                 ?>
            </ul>
            
        </div>  
        </div>
        

        
      </div>
     
    </div>
  </div>
</div>



 <?php 
  require "../layouts/footer.php";

?>