<?php 
require "../../config.php";
require "../layouts/header.php";
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
                <div class="title">
                    <h1>ORGANIGRAMA</h1>
                    
                </div>
                <div class="title-container">
                    <object class="pdfview" type="application/pdf" data="<?php echo urlsite ?>public/pdfs/organigrama.pdf"></object>
                    <object class="pdfview2" type="application/pdf" data="<?php echo urlsite ?>public/pdfs/organigrama.pdf"></object>


            
                </div>

                
            </div>
            
        </div>
        
     </section>
  <!-- Fin del Maquetado de la parte del contenido del modulo-->

 <?php 
  require "../layouts/footer.php";

?>