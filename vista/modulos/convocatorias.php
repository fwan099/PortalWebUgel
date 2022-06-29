<?php 
require "../../config.php";
require "../layouts/header.php";
 ?>

<!-- Maquetado de la parte del contenido del modulo-->

     <section class="main-gestion-inst">
        <div class="items-box">
            <div class="title-box">
                <span>CONVOCATORIAS</span>
                
            </div>
            <div class="box-services box-inst">
            
               <div class="services inst-services">
                
                <div class="item">
                    <a href="<?php echo urlsite ?>vista/convocatorias/convocatoriasCas.php">
                        <div class="item-services">
                            <div class="logo-services">
                                <img src="../../public/img/logo-cas.jpg">
                        
                            </div>
                            <div class="logo-letter">
                                <span>CONVOCATORIAS CAS</span>
                        
                            </div>
                    
                        </div>
                    </a>
                
                </div>

                <div class="item">
                    <a href="<?php echo urlsite ?>vista/convocatorias/convocatoriasDocente.php">
                        <div class="item-services">
                            <div class="logo-services">
                                <img src="../../public/img/logo-docente.png">
                        
                            </div>
                            <div class="logo-letter">
                                <span>CONVOCATORIAS DOCENTE</span>
                        
                            </div>
                    
                        </div>
                    </a>
                
                </div>
                <div class="item">
                    <a href="<?php echo urlsite ?>vista/convocatorias/convocatoriasAuxiliar.php">
                        <div class="item-services">
                            <div class="logo-services">
                                <img src="../../public/img/logo-auxiliar.png">
                        
                            </div>
                            <div class="logo-letter">
                                <span>CONVOCATORIAS AUXILIAR</span>
                        
                            </div>
                    
                        </div>
                    </a>
                
                </div>
                <div class="item">
                    <a href="<?php echo urlsite ?>vista/convocatorias/convocatoriasDirectivos.php">
                        <div class="item-services">
                            <div class="logo-services">
                                <img src="../../public/img/logo-directivo.png">
                        
                            </div>
                            <div class="logo-letter">
                                <span>CONVOCATORIAS DIRECTIVOS</span>
                        
                            </div>
                    
                        </div>
                    </a>
                
                </div>
                <div class="item">
                    <a href="<?php echo urlsite ?>vista/convocatorias/convocatoriasCap.php">
                        <div class="item-services">
                            <div class="logo-services">
                                <img src="../../public/img/logo-cap.png">
                        
                            </div>
                            <div class="logo-letter">
                                <span>CONVOCATORIAS CAP</span>
                        
                            </div>
                    
                        </div>
                    </a>
                
                </div>

                

                
            </div>
           </div>
        </div>
        
    </section>

    <!-- Fin del Maquetado de la parte del contenido del modulo-->
     

<?php 
  require "../layouts/footer.php";

?>