//llamar datos para editar

$(".TB").on("click",".EditarFuncion" , function(){
	var Fid  = $(this).attr("Fid");

	var datos = new FormData();

	datos.append("Fid",Fid);

	$.ajax({
		url :"Ajax/funcionesareaA.php",
		method:"POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){
			
			$("#Fid").val(respuesta["id"]);
			$("#funcionE").val(respuesta["funcion"]);
			
			

			

		}
	});

})


// borrar comunicado

$(".TB").on("click",".BorrarFuncion" , function(){

	var Fid =  $(this).attr("Fid");

	

	window.location = "index.php?url=funcionesArea&Fid="+Fid;


})
