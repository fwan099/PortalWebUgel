//llamar datos para editar

$(".TB").on("click",".EditarOficio" , function(){
	var Oid  = $(this).attr("Oid");

	var datos = new FormData();

	datos.append("Oid",Oid);

	$.ajax({
		url :"Ajax/oficiosA.php",
		method:"POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){
			
			
			$("#tituloE").val(respuesta["titulo"]);
			$("#Oid").val(respuesta["id"]);
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

$(".TB").on("click",".BorrarOficio" , function(){

	var Oid =  $(this).attr("Oid");

	var documentoOficios = $(this).attr("documentoOficios");

	window.location = "index.php?url=oficios&Oid="+Oid+"&documentoOficios="+documentoOficios;


})
