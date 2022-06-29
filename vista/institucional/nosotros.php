<?php 
require "../../config.php";
require "../layouts/header.php";


require "../../controlador/nosotrosC.php";
require "../../modelo/nosotrosM.php";

 ?>

   <!-- Maquetado de la parte del contenido del modulo-->

     <section class="boxing-main">
     	<div class="caja-main-box">
     		<div class="buttons-box">
     			<ul>
					<li><a href="nosotros.php">SOBRE NOSOSTROS</a></li>
					<li><a href="directorio.php">DIRECCION</a></li>
					<li><a href="organigrama.php">ORGANIGRAMA</a></li>
						
				</ul>
     		</div>
     		<div class="container-box">

     			<?php

							$nosotros = new NosotrosC();
							$nosotros -> MostrarNosotrosC();

				?>
     		

     			
     		</div>
     		
     	</div>
     	
     </section>
  <!-- Fin del Maquetado de la parte del contenido del modulo-->

  <?php 
  require "../layouts/footer.php";


   ?>