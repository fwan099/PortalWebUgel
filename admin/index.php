<?php

require_once "Controladores/plantillaC.php";
require_once "Controladores/usuariosC.php";
require_once "Controladores/slideC.php";
require_once "Controladores/comunicadosC.php";
require_once "Controladores/nosotrosC.php";
require_once "Controladores/oficiosC.php";
require_once "Controladores/convocatoriacasC.php";
require_once "Controladores/convocatoriadocenteC.php";
require_once "Controladores/convocatoriaauxiliarC.php";
require_once "Controladores/convocatoriadirectivoC.php";
require_once "Controladores/convocatoriacapC.php";
require_once "Controladores/funcionesareaC.php";
require_once "Controladores/jefeareaC.php";
require_once "Controladores/direccionC.php";
require_once "Controladores/jefesubC.php";



require_once "Modelos/usuariosM.php";
require_once "Modelos/slideM.php";
require_once "Modelos/comunicadosM.php";
require_once "Modelos/nosotrosM.php";
require_once "Modelos/oficiosM.php";
require_once "Modelos/oficiosM.php";
require_once "Modelos/convocatoriacasM.php";
require_once "Modelos/convocatoriadocenteM.php";
require_once "Modelos/convocatoriaauxiliarM.php";
require_once "Modelos/convocatoriadirectivoM.php";
require_once "Modelos/convocatoriacapM.php";
require_once "Modelos/funcionesareaM.php";
require_once "Modelos/jefeareaM.php";
require_once "Modelos/direccionM.php";
require_once "Modelos/jefesubM.php";
$plantilla = new PlantillaC();
$plantilla -> LlamarPlantilla();