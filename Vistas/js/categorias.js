/*EDITAR USUARIO*/

$(document).on("click", ".btnEditarCategoria", function(){ 
	var idCategoria = $(this).attr("idCategoria");
	//console.log("id", id);

	 var datos = new FormData();
	 datos.append("idCategoria", idCategoria);

	 $.ajax({
	 	url:"ajax/categorias.ajax.php",
	 	method: "POST",
	 	data: datos,
	 	cache: false,
	 	contentType:false,
	 	processData: false,
	 	dataType: "json",
	 	success: function(respuesta){
	 		$("#editarid").val(respuesta["id"]);
	 		$("#editarCategoria").val(respuesta["categoria"]);
	 		
	 		

	 		



	 		}



	 });


})