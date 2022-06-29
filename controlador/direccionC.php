<?php

class DireccionC{

	public function MostrarDireccionC(){

		$respuesta = DireccionM::MostrarDireccionM("direccion");

		echo ' <img src="../../admin/'.$respuesta["foto"].'">
                    </div>
                    <div class="item-222">
                        <div>
                          <label>DIRECTOR DE LA UGEL YUNGUYO:</label>
                        <p>'.$respuesta["nombres"].' </p>
                        <label>Celular:</label>
                        <p>'.$respuesta["celular"].' </p>
                        <label>Correo</label>
                        <p>'.$respuesta["correo"].' </p>
                        <label>Whatsapp:</label>
                        <a href="https://wa.me/51'.$respuesta["whatsapp"].' "><i class="fab fa-whatsapp"></i></a>  
                        </div> ';

	}

}