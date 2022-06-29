<?php 
require "../../config.php";
require "../layouts/header.php";

require "../../controlador/funciones_aC.php";
require "../../controlador/jefearea_aC.php";
require "../../controlador/jefesub_aC.php";

require "../../modelo/funciones_aM.php";
require "../../modelo/jefearea_aM.php";
require "../../modelo/jefesub_aM.php";
 ?>
 <!-- Maquetado de la parte del contenido del modulo-->
<section class="main-gestion-inst">
        <div class="items-box">
            <div class="title-box">
                <span>AREA DE ADMINISTRACION</span>
                
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
                        <div class="item-box-main">
                            <span><button data-toggle="modal" data-target="#subArea1">CONTABILIDAD</button></span>
                        
                        </div>
                    </a>
                </div>

                <div class="item-boxes">
                    <a href="#">
                        <div class="item-box-main">
                            <span><button data-toggle="modal" data-target="#subArea2">TESORERIA</button></span>
                        
                        </div>
                    </a>
                </div>

                <div class="item-boxes">
                    <a href="#">
                        <div class="item-box-main">
                            <span><button data-toggle="modal" data-target="#subArea3">REMUNERACIONES</button></span>
                        
                        </div>
                    </a>
                </div>

                <div class="item-boxes">
                    <a href="#">
                        <div class="item-box-main">
                            <span><button data-toggle="modal" data-target="#subArea4">ABSTECIMIENTO</button></span>
                        
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
        <h5 class="modal-title" id="exampleModalLongTitle"><b>JEFE DEL AREA DE ADMINISTRACION</b></h5>
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
        <h5 class="modal-title" id="exampleModalLongTitle"><b>JEFE DEL SUBAREA DE CONTABILIDAD</b></h5>
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

   <!-- Modal -->
<div class="modal fade" id="subArea2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><b>JEFE DEL SUBAREA DE TESORERIA</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div>
          <div class="foto-jefe">
            <?php 

                    $verJ2 = new JefeSubC();
                    $verJ2->VerJefeSub2C();



                 ?>
            </ul>
            
        </div>  
        </div>
        

        
      </div>
     
    </div>
  </div>
</div>

   <!-- Modal -->
<div class="modal fade" id="subArea3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><b>JEFE DEL SUBAREA DE REMUNERACIONES </b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div>
          <div class="foto-jefe">
            <?php 

                $verJ3 = new JefeSubC();
                $verJ3->VerJefeSub3C();




             ?>
            </ul>
            
        </div>  
        </div>
        

        
      </div>
     
    </div>
  </div>
</div>


   <!-- Modal -->
<div class="modal fade" id="subArea4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><b>JEFE DEL SUBAREA DE ABASTECIMIENTO</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div>
          <div class="foto-jefe">
            <?php

                    $verJ4 = new JefeSubC();
                    $verJ4->VerJefeSub4C(); 



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