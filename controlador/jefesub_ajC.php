<?php 
  class JefeSubC{

  	public function VerJefeSub1C(){

  		$tablaDB = "jefesubarea_aj";


  		$respuesta = JefeSubM::MostrarJefeSub1M($tablaDB);

  		

  		

        echo '

          <img src="../../admin/'.$respuesta["foto"].'">
            
        </div>
        <div class="jefe-info">
            <ul>


        <li>
                    <span><b>NOMBRES Y APELLIDOS</b></span>
                    <p>'.$respuesta["nombres"].'</p>
                </li>
                <li>
                    <span><b>CELULAR</b></span>
                    <p>'.$respuesta["celular"].'</p>
                </li>
                <li>
                    <span><b>CORREO </b></span>
                    <p>'.$respuesta["correo"].'</p>
                </li>
                <li>
                    <span><b>WHATSAPP </b></span>
                    <p><a href="https://wa.me/51'.$respuesta["whatsapp"].'"><i style="font-size: 26px;" class="fab fa-whatsapp"></i></a></p>
                </li>';
  		


  	
  	}

 

    

     }


 ?>