/*EDITAR USUARIO*/

$(document).on("click", ".btnEditarCategoria", function(){ 
	var idCategoria = $(this).attr("idCategoria");
	console.log("id", idCategoria);

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
	 		$("#editarfecha").val(respuesta["fecha"]);
	 		
	 		

	 		



	 		}



	 });


})
/*EDITAR CATEGORIA*/
$(document).on("click", ".btnEliminarCategoria", function(){ 

	idCategoria = $(this).attr("idCategoria");
	idNombre_Categoria = $(this).attr("idNombre_Categoria");
	//para futura eliminacion automatica de usuario al eliminar una persona
	//usuario = $(this).attr("usuario"); o realizar eliminacion en cascada en la base de datos

Swal.fire({
		title: "¿Esta seguro de eliminar esta categoria?",
		text: "Si no lo está puede cancelar la accion!",
		icon: "warning",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		cancelButtonText: "Cancelar",
		confirmButtonText: "Si, eliminar la categoria"


	}).then((result)=>{
		if(result.value){
			window.location = "index.php?ruta=categorias&idCategoria="+idCategoria+"&idNombre_Categoria="+idNombre_Categoria;


		}

	})





})


