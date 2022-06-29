//llamar datos para editar

$(".TB").on("click",".EditarConvocatoria" , function(){
	var Cid  = $(this).attr("Cid");

	var datos = new FormData();

	datos.append("Cid",Cid);

	$.ajax({
		url :"Ajax/convocatoriascasA.php",
		method:"POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){
			
			
			$("#tituloE").val(respuesta["titulo"]);
			$("#Cid").val(respuesta["id"]);
			$("#fechaE").val(respuesta["fecha"]);
			$("#estadoE").html(respuesta["estado"]);
			$("#estadoE").val(respuesta["estado"]);

			$("#DocumentoActual1").val(respuesta["bases"]);

			if(respuesta["bases"] != ""){
  
				$(".visor1").attr( "src",respuesta["bases"]);

			}else{
				$(".visor1").attr("src","Vistas/files/default.pdf");
			}

			$("#DocumentoActual2").val(respuesta["cv1"]);

			if(respuesta["cv1"] != ""){
  
				$(".visor2").attr( "src",respuesta["cv1"]);

			}else{
				$(".visor2").attr("src","Vistas/files/default.pdf");
			}

			$("#DocumentoActual3").val(respuesta["reclamos"]);

			if(respuesta["reclamos"] != ""){
  
				$(".visor3").attr( "src",respuesta["reclamos"]);

			}else{
				$(".visor3").attr("src","Vistas/files/default.pdf");
			}

			$("#DocumentoActual4").val(respuesta["cv2"]);

			if(respuesta["cv2"] != ""){
  
				$(".visor4").attr( "src",respuesta["cv2"]);

			}else{
				$(".visor4").attr("src","Vistas/files/default.pdf");
			}

			$("#DocumentoActual5").val(respuesta["entrevista"]);

			if(respuesta["entrevista"] != ""){
  
				$(".visor5").attr( "src",respuesta["entrevista"]);

			}else{
				$(".visor5").attr("src","Vistas/files/default.pdf");
			}

			$("#DocumentoActual6").val(respuesta["final"]);

			if(respuesta["final"] != ""){
  
				$(".visor6").attr( "src",respuesta["final"]);

			}else{
				$(".visor6").attr("src","Vistas/files/default.pdf");
			}
			

			

		}
	});

})


// borrar convocatorias

$(".TB").on("click",".BorrarConvocatoria" , function(){

	var Cid =  $(this).attr("Cid");

	var documentoConvocatorias1 = $(this).attr("documentoConvocatorias1");
	var documentoConvocatorias2 = $(this).attr("documentoConvocatorias2");
	var documentoConvocatorias3 = $(this).attr("documentoConvocatorias3");
	var documentoConvocatorias4 = $(this).attr("documentoConvocatorias4");
	var documentoConvocatorias5 = $(this).attr("documentoConvocatorias5");
	var documentoConvocatorias6 = $(this).attr("documentoConvocatorias6");

	window.location = "index.php?url=convocatoriascas&Cid="+Cid+"&documentoConvocatorias1="+documentoConvocatorias1;
	window.location = "index.php?url=convocatoriascas&Cid="+Cid+"&documentoConvocatorias2="+documentoConvocatorias2;
	window.location = "index.php?url=convocatoriascas&Cid="+Cid+"&documentoConvocatorias3="+documentoConvocatorias3;
	window.location = "index.php?url=convocatoriascas&Cid="+Cid+"&documentoConvocatorias4="+documentoConvocatorias4;
	window.location = "index.php?url=convocatoriascas&Cid="+Cid+"&documentoConvocatorias5="+documentoConvocatorias5;
	window.location = "index.php?url=convocatoriascas&Cid="+Cid+"&documentoConvocatorias6="+documentoConvocatorias6;
	window.location = "index.php?url=convocatoriascas&Cid="+Cid+"&documentoConvocatorias7="+documentoConvocatorias7;



	


})
