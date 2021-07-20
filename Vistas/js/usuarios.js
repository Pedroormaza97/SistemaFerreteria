 /*SUBIENDO IMAGEN DEL USUARIO*/

$(".nuevaFoto").change(function(){

	var imagen = this.files[0];

	//Validar el formato de la imagen

	if(imagen["type"] != "image/jpeg" && imagen["type"] != "image/png"){

		$(".nuevaFoto").val("");

		Swal.fire({
            title: "Error!",
            text: "La Imagen debe ser JPG o PNG.",
            icon: "error",
           confirmButtonText: "Ok"});
		


	}else if(imagen["size"] > 2000000){
		$(".nuevaFoto").val("");
		Swal.fire({
            title: "Error!",
            text: "La Imagen no debe pesar mas de 2 MB.",
            icon: "error",
           confirmButtonText: "Ok"});
		
		}else{

			var datosImagen = new FileReader;
			datosImagen.readAsDataURL(imagen);

			$(datosImagen).on("load", function(event){
				var rutaImagen = event.target.result;
				$(".previsualizar").attr("src", rutaImagen);

			})
		}
	

})


/*EDITAR USUARIO*/

$(document).on("click", ".btnEditarUsuario", function(){
	var idUsuario = $(this).attr("idUsuario");
	

	var datos = new FormData();
	datos.append("idUsuario", idUsuario);

	$.ajax({
		url:"ajax/usuarios.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType:false,
		processData: false,
		dataType: "json",
		success: function(respuesta){
			$("#editarUsuario").val(respuesta["userUsuario"]);
			$("#passwordActual").val(respuesta["passUsuario"]);
			$("#editarPerfil").html(respuesta["rol_idrol"]);
			$("#editarPerfil").val(respuesta["rol_idrol"]);
			$("#fotoActual").val(respuesta["FotoPerfilUsuario"]);
			$("#editarCedulap").val(respuesta["cedulaP"]);
			$("#editarEstado").html(respuesta["Estado"]);
			$("#editarEstado").val(respuesta["Estado"]);

			
			if(respuesta["FotoPerfilUsuario"] != ""){

				$(".previsualizar").attr("src", respuesta["FotoPerfilUsuario"]);

			}

			
			

			
			//$("#editarFotoPerfil").val(respuesta["FotoPerfilUsuario"]);
			

			//console.log("respuesta", respuesta);




		}



	});





})


//ELIMINAR USUARIO
$(document).on("click", ".btnEliminarUsuario", function(){



	var idUsuario = $(this).attr("idUsuario");
	var fotoUsuario = $(this).attr("fotoUsuario");
	var usuario = $(this).attr("usuario");



	Swal.fire({
		title: "¿Esta seguro de eliminar el usuario?",
		text: "Si no lo está puede cancelar la accion!",
		icon: "warning",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		cancelButtonText: "Cancelar",
		confirmButtonText: "Si, eliminar el usuario"


	}).then((result)=>{
		if(result.value){
			window.location = "index.php?ruta=usuarios&idUsuario="+idUsuario+"&usuario="+usuario+"&fotoUsuario="+fotoUsuario;


		}

	})

	


})



//ACTIVAR USUARIO
$(document).on("click", ".btnActivar", function(){



	var idUsuario = $(this).attr("idUsuario");
	var estadoUsuario = $(this).attr("estadoUsuario");



	var datos = new FormData();
	datos.append("activarId", idUsuario);
	datos.append("activarUsuario", estadoUsuario);

	$.ajax({

		url:"ajax/usuarios.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		success: function(respuesta){

			//console.log("respuesta", respuesta);
			if(window.matchMedia("(max-width:767px)").matches){


				swal.fire({
					title: "El estado del usuario ha sido actualizado",
					icon: "success",
					confirmButtonText: "Cerrar"
					}).then(function(result){
					if(result.value){
					window.location = "usuarios";
					}
				});

			}

		}


	})

	if(estadoUsuario == "inactivo"){

		$(this).removeClass('btn-success');
		$(this).addClass('btn-danger');
		$(this).html("Desactivado");
		$(this).attr('estadoUsuario', "activo");

	}else{
		$(this).removeClass('btn-danger');
		$(this).addClass('btn-success');
		$(this).html("Activado");
		$(this).attr('estadoUsuario', "inactivo");

	}


})



   

    









