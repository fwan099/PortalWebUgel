<?php 
  class JefeAreaC{

  	public function VerJefeAreaC(){

  		$tablaDB = "jefe_gi";


  		$respuesta = JefeAreaM::MostrarJefeAreaM($tablaDB);

  		foreach($respuesta as $key => $value){

  		

        echo '

          <img src="../../admin/'.$value["foto"].'">
            
        </div>
        <div class="jefe-info">
            <ul>


        <li>
                    <span><b>NOMBRES Y APELLIDOS</b></span>
                    <p>'.$value["nombres"].'</p>
                </li>
                <li>
                    <span><b>CELULAR</b></span>
                    <p>'.$value["celular"].'</p>
                </li>
                <li>
                    <span><b>CORREO </b></span>
                    <p>'.$value["correo"].'</p>
                </li>
                <li>
                    <span><b>WHATSAPP </b></span>
                    <p><a href="https://wa.me/51'.$value["whatsapp"].'"><i style="font-size: 26px;" class="fab fa-whatsapp"></i></a></p>
                </li>';
  		}


  	
  	}

     }


 ?>