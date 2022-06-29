<!-- Maquetado de la parte del slider	 -->

 <?php 
require "controlador/slideC.php";

require "modelo/slideM.php";

require "controlador/comunicadosC.php";
require "modelo/comunicadosM.php";

require "controlador/oficiosC.php";
require "modelo/oficiosM.php";


include "vista/modulos/slide.php";





  ?>

<FONT FACE="Impact" >
<MARQUEE  ALIGN=BOTTOM  BEHAVIOR=ALTERNATE style="font-size: 18px; color: #303BEA; ">
UNIDAD DE GESTION EDUCATIVA LOCAL YUNGUYO AL SERVICIO DE LA EDUCACION</MARQUEE>
</FONT>
<style>
    #container{width: 140px;height: 100px; overflow: hidden; }
          iframe{width: 155px; height: 95px;}
    </style>


 	<!-- Maquetado de la parte de los botones de los servicios-->
 	<section class="box-services">
 		<div class="services">
 			<div class="item">
 				<a href="http://ugelyunguyo.edu.pe/ofictd/">
 				<div class="item-services">
 					<div class="logo-services">
 						<img src="public/img/logo_tramite.png">
 						
 					</div>
 					<div class="logo-letter">
 						<span>TRAMITE DOCUMENTARIO</span>
 						
 					</div>
 					
 				</div>
 				</a>
 				
 			</div>

 			<div class="item">
 				<a href="<?php echo urlsite ?>vista/modulos/convocatorias.php">
 				<div class="item-services">
 					<div class="logo-services">
 						<img src="public/img/logo_convocatorias.png">
 						
 					</div>
 					<div class="logo-letter">
 						<span>CONVOCATORIAS</span>
 						
 					</div>
 					
 				</div>
 				</a>
 				
 			</div>

 			<div class="item">
 				<a href="http://ugelyunguyo.edu.pe/virtual/index.php">
 				<div class="item-services">
 					<div class="logo-services">
 						<img src="public/img/logo_vcampus.png">
 						
 					</div>
 					<div class="logo-letter">
 						<span>CAMPUS VIRTUAL</span>
 						
 					</div>
 					
 				</div>
 				</a>
 				
 			</div>


 			<div class="item">
 				<a href="https://aprendoencasa.pe/#/">
 				<div class="item-services">
 					<div class="logo-services">
 						<img src="public/img/logo_apcasa.png">
 						
 					</div>
 					<div class="logo-letter">
 						<span>APRENDO EN CASA</span>
 						
 					</div>
 					
 				</div>
 				</a>
 				
 			</div>
 			
 		
 			<div class="item">
 				<a href="<?php echo urlsite ?>vista/comunicados/comunicados.php">
 				<div class="item-services">
 					<div class="logo-services">
 						<img src="public/img/logo_comuni.png">
 						
 					</div>
 					<div class="logo-letter">
 						<span>TODOS LOS COMUNICADOS</span>
 						
 					</div>
 					
 				</div>
 				</a>
 				
 			</div>
 		
 		

 			


 			<div class="item">
 				<a href="<?php echo urlsite ?>public/pdfs/ROF_UGEL_YUNGUYO.pdf" download="ROF UGEL YUNGUYO">
 				<div class="item-services">
 					<div class="logo-services">
 						<img src="public/img/logo_regl.png">
 						
 					</div>
 					<div class="logo-letter">
 						<span>ROF</span>
 						
 					</div>
 					
 				</div>
 				</a>
 				
 			</div>
 			
 		</div>
 		
 	</section>


	<section class="main-box">
		<div class="main-comunicados">
			<div class="main-comunicados-box">
				<div class="comunicados-title">
					<span>COMUNICADOS</span>
					
				</div>
				<div class="comunicados-content">
					<table  width="auto" class="table table-responsive" >
						<thead>
							<tr>
								<th>N°</th>
								<th>Titulo</th>
								<th>Vista</th>
								
							</tr>
						</thead>
						<tbody>
							<!--<tr>
								<td>1</td>
								<td><a href="">OFICIO MULT N° 0106-2021 UGEL YUNGUYO Comunico prohibición de reuniones y fiestas de promoción</a>
										<div style="padding-top: 6px; color: #555;"><b>Fecha: </b>2022-05-04</div>

								</td>
								<td>-------</td>
							</tr>-->

							<?php 

							$comunicados = new ComunicadosC();
							$comunicados->MostrarComunicadosC();

							 ?>
						</tbody>
					</table>
					<div class=" btn-info-C" >
						<a class="btn btn-info" href="<?php echo urlsite ?>vista/comunicados/comunicados.php">Mostrar mas</a>
					</div>

					
				</div>
				
			</div>
			
		</div>
		<div class="main-noticias">
			<div class="main-noticias-box">
				<div class="noticias-title">
					<span>OFICIOS MULTIPLES</span>
					
				</div>
				<div class="comunicados-content">
					<table  width="auto" class="table table-responsive" >
						<thead>
							<tr>
								<th>N°</th>
								<th>Titulo</th>
								<th>Vista</th>
								
							</tr>
						</thead>
						<tbody>
							<!--<tr>
								<td>1</td>
								<td><a href="">OFICIO MULT N° 0106-2021 UGEL YUNGUYO Comunico prohibición de reuniones y fiestas de promoción</a></td>
								<td>2022-05-04</td>
							</tr>-->

							<?php 

							$oficios = new oficiosC();
							$oficios->MostrarOficiosC();

							 ?>
						</tbody>
					</table>
					<div class=" btn-info-C" >
						<a class="btn btn-info" href="<?php echo urlsite ?>vista/modulos/oficios.php">Mostrar mas</a>
					</div>

					
				</div>

				
			</div>

		</div>
		
		
	</section>
	<section class="comunication-rt">
		<div class="container-box-rt">
			<div class="rt-radio">
				<div class="noticias-title">
					<span>RADIO UGEL 101.3 FM</span>
					
				</div>
				<div class="iostream">
				<iframe src="https://innovatestream.com/cdn/html5/black2020/?puerto=7072&server=120&SHOUTCAST_V=1&PLAYER=player1&titulo=RADIO UGEL YUNGUYO &ssl=si"></iframe>	
				</div>
				
				
			</div>
			
		</div>
		
	</section>



	<div id="carouselExampleIndicators" class="carousel slidebtnv slide" data-ride="carousel" style="padding: 0 50px ; ">
  <ol class="carousel-indicators" >
    <li data-target="#carouselExampleIndicators" style="background-color: #888;" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" style="background-color: #888;" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" style="background-color: #888;" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" style="">
    <div class="carousel-item slidecor active" style="height:160px; " >
      <div class="row">
                <div class="col"><a href="http://ugelyunguyo.edu.pe/ofictd/"><img src="http://ugelyunguyo.edu.pe/web/wp-content/uploads/2020/07/TRAMITE-DOCUMENTARIO-PRUEBA.jpg"></a></div>
                <div class="col"><a href=""><img src="http://ugelyunguyo.edu.pe/web/wp-content/uploads/2022/01/BANER-COST-SIAGIE-2022.jpg"></a></div>
                <div class="col"><a href=""><img src="http://ugelyunguyo.edu.pe/web/wp-content/uploads/2021/02/MI-BOLETA-MINEDU.jpg"></a></div>
      </div>

    </div>
    <div class="carousel-item slidecor " style="height:160px; ">
     <div class="row">
                <div class="col"><a href=""><img src="http://ugelyunguyo.edu.pe/web/wp-content/uploads/2021/03/UGEL-REPORTE-DE-ASISTENCIA.jpg"></a></div>
                <div class="col"><a href=""><img src="http://ugelyunguyo.edu.pe/web/wp-content/uploads/2021/03/siseve-2021.jpg"></a></div>
                <div class="col"><a href=""><img src="http://ugelyunguyo.edu.pe/web/wp-content/uploads/2021/02/CENSO-EDUCATIVO.jpg"></a></div>
      </div>
    </div>
    <div class="carousel-item slidecor " style="height:160px; ">
      <div class="row">
                <div class="col"><a href=""><img src="http://ugelyunguyo.edu.pe/web/wp-content/uploads/2020/07/BOLETAS-2020.jpg"></a></div>
                <div class="col"><a href=""><img src="http://ugelyunguyo.edu.pe/web/wp-content/uploads/2020/07/CAMPUS-VIRTUAL-2020.jpg"></a></div>
                <div class="col"><a href=""><img src="http://ugelyunguyo.edu.pe/web/wp-content/uploads/2021/03/UGEL-REPORTE-DE-ASISTENCIA.jpg"></a></div>
       </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span  aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span  aria-hidden="true"></span>
    <span   class="sr-only">Next</span>
  </a>
</div>