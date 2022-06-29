<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>UGEL YUNGUYO </title>
	<link rel="shortcut icon" href="<?php echo urlsite ?>public/img/logo.gif" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;1,400&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity=" sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo urlsite ?>normalize.css">
	<link rel="stylesheet" type="text/css" href="<?php echo urlsite ?>public/css/estilo.css">
	<link rel="stylesheet" type="text/css" href="<?php echo urlsite ?>public/css/bootstrap.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Mukta&family=Roboto+Mono:wght@100;200&family=Roboto:wght@700&display=swap" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

	  <link rel="stylesheet"  href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">

	

	 <script>
         addEventListener("load", function () {
         	setTimeout(hideURLbar, 0);
         }, false);
         
         function hideURLbar() {
         	window.scrollTo(0, 1);
         }
      </script>


	
      <!--//booststrap end-->
      <!-- font-awesome icons -->
     <link rel="stylesheet" href="<?php echo urlsite ?>public/css/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
      <!-- //font-awesome icons -->
	  <link href="<?php echo urlsite ?>public/css/simpleLightbox.css" rel='stylesheet' type='text/css' />
      <!--stylesheets-->
	  <link rel="stylesheet" href="<?php echo urlsite ?>public/css/flexslider.css" type="text/css" media="screen" property="" />
      <link href="<?php echo urlsite ?>public/css/style.css" rel='stylesheet' type='text/css' media="all">
	
</head>
<body>


	<section class="header-box">
		<div class="header-box-item1">
			<a href="<?php echo urlsite ?>index.php"><img class="logo" src="<?php echo urlsite ?>public/img/portada.jpg"></a>
			<a href="https://www.transparencia.gob.pe/"><img class="trans" src="<?php echo urlsite ?>public/img/transparencia.png"></a>
			
		</div>
	</section>
	<!-- Maquetado de la barra de navegacion Desltop-->
	<section class="header-box-2">
		<div class="header-box-item2">
			<header class="bar-nav">
				<nav class="nav-buttons">
					<ul>
						<li><a href="<?php echo urlsite ?>index.php">INICIO</a></li>
						<li class="inst-li"><a href="#">INSTITUCIONAL<i class="fa fa-caret-down"></a></i>
							<ul class="menu-inst">
								<li><a href="<?php echo urlsite ?>vista/institucional/nosotros.php">SOBRE NOSOTROS</a></li>
								<li><a href="<?php echo urlsite ?>vista/institucional/directorio.php">DIRECCION</a></li>
								<li><a href="<?php echo urlsite ?>vista/institucional/organigrama.php">ORGANIGRAMA</a></li>
								
							
							</ul>
						</li>
						<li class="areas-li"><a href="#">AREAS<i class="fa fa-caret-down"></i></a>
							<ul class="menu-areas">
								<li><a href="<?php echo urlsite ?>vista/areas/gestion-inst.php">AREA DE GESTION INSTITUCIONAL</a></li>
								<li><a href="<?php echo urlsite ?>vista/areas/area_admin.php">AREA DE ADMINISTRACION</a></li>
								<li><a href="<?php echo urlsite ?>vista/areas/area-rrhh.php">AREA DE RECURSOS HUMANOS</a></li>
								<li><a href="<?php echo urlsite ?>vista/areas/area-pedagogica.php">AREA DE GESTION PEDAGOGICA</a></li>
								<li><a href="<?php echo urlsite ?>vista/areas/area-asesoria.php">AREA DE ASESORIA JURIDICA</a></li>
							</ul>

						</li>
						<li class="serv-li"><a href="#">SERVICIOS<i class="fa fa-caret-down"></i></a>
							<ul class="menu-services">
								<li><a href="http://ugelyunguyo.edu.pe/ofictd/">TRAMITE DOCUMENTARIO</a></li>
								<li><a href="https://miboleta.minedu.gob.pe/">BOLETAS MINEDU</a></li>
								<li><a href="https://ugelyunguyo.edu.pe/asist/">REPORTE DE ASISTENCIA</a></li>
								<li><a href="http://escale2.minedu.gob.pe:8009/estadistica/login/ce/main.uee">CENSO EDUCATIVO</a></li>
								<li><a href="https://ugelyunguyo.edu.pe/cbool/">CONSULTAS DE BOLETAS</a></li>

							</ul>
						</li>
						
					</ul>
					
				</nav>
				<div class="nav-redes">
					<ul>
						<li><a href="https://web.facebook.com/ugel.yunguyo.3" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="#" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
						<li><a href="#" target="_blank"><i class="fab fa-youtube"></i></a></li>
						<li><a href="<?php echo urlsite ?>admin/index.php"><i class="fas fa-user-cog"></i></a></li>
					</ul>
					
				</div>
			</header>
			
		</div>
		
	</section>

 	

 	<!-- MAQUETACION RESPONSIVE -->

	<!-- Maquetacion de modo responsive para la barra denavegacion -->
	<section class="nav-responsive">
		<div class="box-responsive">
			<div class="box-responsive-item1">
				<div class="nav-redes-responsive">
					<ul>
						<li><a href="<?php echo urlsite ?>admin/index.php"><i class="fas fa-user-cog"></i></a></li>
						<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
						<li><a href="#"><i class="fab fa-youtube"></i></a></li>
						<li><a href="<?php echo urlsite ?>index.php"><i class="fas fa-home"></i></a></li>
						
					</ul>
					
				</div>
				<nav class="menu">
				<section class="menu__container">
			
				<ul class="menu__links">
				<li class="menu__item menu__item--show">
					<a class="menu__link" href="#">INSTITUCIONAL<i class="fa fa-caret-down"></i></a>
					<ul class="menu__nesting">
						<li class="menu__inside">
							<a class="menu__link menu__link--inside" href="<?php echo urlsite ?>vista/institucional/nosotros.php">SOBRE NOSOTROS</a>
						</li>
						<li class="menu__inside">
							<a class="menu__link menu__link--inside" href="<?php echo urlsite ?>vista/institucional/directorio.php">DIRECTORIO</a>
						</li>
						<li class="menu__inside">
							<a class="menu__link menu__link--inside" href="<?php echo urlsite ?>vista/institucional/organigrama.php">ORGANIGRAMA</a>
						</li>
						
						
					</ul>
				</li>
				<li class="menu__item menu__item--show">
					<a class="menu__link" href="#">AREAS<i class="fa fa-caret-down"></i></a>
					<ul class="menu__nesting">
						<li class="menu__inside">
							<a class="menu__link menu__link--inside" href="<?php echo urlsite ?>vista/areas/gestion-inst.php">AREA DE GESTION INSTITUCIONAL</a>
						</li>
						<li class="menu__inside">
							<a class="menu__link menu__link--inside" href="<?php echo urlsite ?>vista/areas/area_admin.php">AREA DE ADMINISTRACION</a>
						</li>
						<li class="menu__inside">
							<a class="menu__link menu__link--inside" href="<?php echo urlsite ?>vista/areas/area-pedagogica.php">AREA DE GESTION PEDAGOGICA</a>
						</li>
						<li class="menu__inside">
							<a class="menu__link menu__link--inside" href="<?php echo urlsite ?>vista/areas/area-rrhh.php">AREA DE RECURSOS HUMANOS</a>
						</li>
						<li class="menu__inside">
							<a class="menu__link menu__link--inside" href="<?php echo urlsite ?>vista/areas/area-asesoria.php">AREA DE ASESORIA JURIDICA</a>
						</li>
						
					</ul>
				</li>
				<li class="menu__item menu__item--show">
					<a class="menu__link" href="#">SERVICIOS<i class="fa fa-caret-down"></i></a>
					<ul class="menu__nesting">
						<li class="menu__inside">
							<a class="menu__link menu__link--inside" href="http://ugelyunguyo.edu.pe/ofictd/">TRAMITE DOCUMENTARIO</a>
						</li>
						<li class="menu__inside">
							<a class="menu__link menu__link--inside" href="https://miboleta.minedu.gob.pe/">BOLETAS MINEDU</a>
						</li>
						<li class="menu__inside">
							<a class="menu__link menu__link--inside" href="https://ugelyunguyo.edu.pe/asist/">REPORTE DE ASISTENCIA</a>
						</li>
						<li class="menu__inside">
							<a class="menu__link menu__link--inside" href="http://escale2.minedu.gob.pe:8009/estadistica/login/ce/main.uee">CENSO EDUCATIVO</a>
						</li>
						<li class="menu__inside">
							<a class="menu__link menu__link--inside" href="https://ugelyunguyo.edu.pe/cbool/">CONSULTA DE BOLETAS</a>
						</li>
						
					</ul>
				</li>
				
				<li class="menu__item">
					<a class="menu__link" href="https://www.transparencia.gob.pe/">PORTAL DE TRANSPARENCIA</a>
				</li>
				
			</ul>
			
			
		</section>
		
	</nav>
			</div>
			<div class="box-responsive-item2">
				<div class="item2-buttons">
					<div for="btn" class="item2-button-responsive divbar menu__h"><i class="fa fa-bars barra"></i></div>

					
				</div>
				
			</div>
			
		</div>
		
	</section>
   
	

	<!-- FIN DE LA MAQUETACION RESPONSIVE -->
