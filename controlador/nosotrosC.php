<?php

class NosotrosC{

	public function MostrarNosotrosC(){

		$respuesta = NosotrosM::MostrarNosotrosM("nosotros");

		echo ' <div style="width:100% ; padding-bottom: 20px;">


     					<img width="100%" src="../../admin/'.$respuesta["imagen"].'">
     					
     			</div>
     			<div class="title">
     				<h1>UGEL YUNGUYO</h1>
     				
     			</div>
     			<div class="contenido">

					<div class="title">
						<h2>MISION</h2>
					</div>
					<p>
						'.$respuesta["mision"].' 
					</p>

						<div class="title">
						<h2>VISION</h2>
					</div>
					<p>
						'.$respuesta["vision"].' 
					</p>

     				
     			</div>  ';

	}

}