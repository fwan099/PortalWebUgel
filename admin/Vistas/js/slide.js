//llamar datos para editar

$(".TB").on("click",".EditarSlide" , function(){
	var Sid  = $(this).attr("Sid");

	var datos = new FormData();

	datos.append("Sid",Sid);

	$.ajax({
		url :"Ajax/slideA.php",
		method:"POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){
			
			$("#Sid").val(respuesta["id"]);
			$("#ImagenActual").val(respuesta["imagen"]);

			if(respuesta["imagen"] != ""){
  
				$(".visor").attr( "src",respuesta["imagen"]);

			}else{
				$(".visor").attr("src","Vistas/img/default.png");
			}

			$("#ordenE").val(respuesta["orden"]);

		}
	});

})

// borrar slide

$(".TB").on("click",".BorrarSlide" , function(){

	var Sid =  $(this).attr("Sid");

	var imagenSlide = $(this).attr("imagenSlide");

	window.location = "index.php?url=slide&Sid="+Sid+"&imagenSlide="+imagenSlide;


})
