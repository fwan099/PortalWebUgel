<?php 
  class SlideC{

  	public function MostrarSlideC(){

  		$tablaDB = "slide";


  		$respuesta = SlideM::MostrarSlideM($tablaDB);

  		foreach($respuesta as $key => $value){

  			echo '<li>
						<div class="slider-img4 img-slider" style="background: url(admin/'.$value["imagen"].') no-repeat 0px 0px;  background-size: cover;background-position: center;"></div>
					</li> ';
  		}


  		echo '</div>';
  	}
  }


 ?>