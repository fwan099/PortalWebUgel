//llamar datos para editar

$(".TB").on("click",".EditarComunicado" , function(){
	var Cid  = $(this).attr("Cid");

	var datos = new FormData();

	datos.append("Cid",Cid);

	$.ajax({
		url :"Ajax/comunicadosA.php",
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
			$("#DocumentoActual").val(respuesta["documento"]);

			if(respuesta["documento"] != ""){
  
				$(".visor").attr( "src",respuesta["documento"]);

			}else{
				$(".visor").attr("src","Vistas/files/default.pdf");
			}

			

		}
	});

})


// borrar comunicado

$(".TB").on("click",".BorrarComunicado" , function(){

	var Cid =  $(this).attr("Cid");

	var documentoComunicados = $(this).attr("documentoComunicados");

	window.location = "index.php?url=comunicados&Cid="+Cid+"&documentoComunicados="+documentoComunicados;


})
