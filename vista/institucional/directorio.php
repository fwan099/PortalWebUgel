<?php 
require "../../config.php";
require "../layouts/header.php";

require "../../controlador/direccionC.php";
require "../../modelo/direccionM.php";
 ?>

<!-- Maquetado de la parte del contenido del modulo-->

     <section class="boxing-main">
        <div class="caja-main-box">
            <div class="buttons-box">
                <ul>
                    <li><a href="nosotros.php">SOBRE NOSOSTROS</a></li>
                    <li><a href="directorio.php">DIRECTORIO</a></li>
                    <li><a href="organigrama.php">ORGANIGRAMA</a></li>
                             
                </ul>
                
            </div>
            <div class="container-box">
                <div class="title" style="padding-top: 6px;">
                    <h1>DIRECCION</h1>
                    
                </div>
                <div class="dir-ugel">
                    <div class="item-director">
                        <div class="item-111">
                        <?php 
                                $direccion = new DireccionC();
                                $direccion -> MostrarDireccionC();

                         ?>
                        
                         
                    </div>
                   
                    </div>


                    
                </div>
                
            </div>
            
        </div>
        
     </section>
    <!-- Fin del Maquetado de la parte del contenido del modulo-->
     

<?php 
  require "../layouts/footer.php";

?>