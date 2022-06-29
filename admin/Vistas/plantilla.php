<?php 
session_start();

 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" lang="en">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Administrador | UGEL</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="Vistas/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="Vistas/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="Vistas/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="Vistas/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="Vistas/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="Vistas/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="Vistas/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="Vistas/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="Vistas/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity=" sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
 
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="Vistas/https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="Vistas/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->

  <link rel="shortcut icon" href="../public/img/logo.gif" />

</head>
<body class="hold-transition skin-blue sidebar-mini login-page">


  <?php 
if(isset($_SESSION["Ingreso"]) && $_SESSION["Ingreso"]==true){

  echo '<div class="wrapper">';
  include "modulos/cabecera.php";
  include "modulos/menu.php";

  if(isset($_GET["url"])){
    if($_GET["url"]=="inicio" || $_GET["url"]=="ingreso" || $_GET["url"]=="direccion"|| $_GET["url"]=="jefeSub"  || $_GET["url"]=="jefeArea" || $_GET["url"]=="funcionesArea"  || $_GET["url"]=="usuarios" || $_GET["url"]=="convocatoriasDirectivo"  || $_GET["url"]=="convocatoriasCap" || $_GET["url"]=="convocatoriasAuxiliar" || $_GET["url"]=="convocatoriasDocente" || $_GET["url"]=="convocatoriascas" || $_GET["url"]=="nosotros" || $_GET["url"]=="oficios"  ||$_GET["url"]=="comunicados"   ||  $_GET["url"]=="salir" ||$_GET["url"]=="slide" || $_GET["url"]=="perfil"){
      include "modulos/".$_GET["url"].".php";
    }
  }else{
     include "modulos/inicio.php";
  }
  echo '</div>';
}else{
  include 'modulos/ingreso.php';
}

  

   ?>
  

<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="Vistas/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="Vistas/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="Vistas/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="Vistas/bower_components/raphael/raphael.min.js"></script>
<script src="Vistas/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="Vistas/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jQuery Knob Chart -->
<script src="Vistas/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="Vistas/bower_components/moment/min/moment.min.js"></script>
<script src="Vistas/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="Vistas/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Slimscroll -->
<script src="Vistas/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="Vistas/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="Vistas/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="Vistas/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="Vistas/dist/js/demo.js"></script>

<script src="Vistas/js/usuarios.js"></script>

<script src="Vistas/js/slide.js"></script>
<script src="Vistas/js/comunicados.js"></script>
<script src="Vistas/js/oficios.js"></script>
<script src="Vistas/js/convocatoriascas.js"></script>

<script src="Vistas/js/convocatoriasdocente.js"></script>
<script src="Vistas/js/convocatoriasauxiliar.js"></script>

<script src="Vistas/js/convocatoriasdirectivos.js"></script>
<script src="Vistas/js/convocatoriascap.js"></script>

<script src="Vistas/js/funcionesarea.js"></script>

</body>
</html>
