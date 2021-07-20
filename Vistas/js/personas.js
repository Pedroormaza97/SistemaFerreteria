/*EDITAR USUARIO*/

$(document).on("click", ".btnEditarPersona", function(){ 
	var cedula = $(this).attr("cedula");
	//console.log("cedula", cedula);

	 var datos = new FormData();
	 datos.append("cedula", cedula);

	 $.ajax({
	 	url:"ajax/personas.ajax.php",
	 	method: "POST",
	 	data: datos,
	 	cache: false,
	 	contentType:false,
	 	processData: false,
	 	dataType: "json",
	 	success: function(respuesta){
	 		$("#editarCedula").val(respuesta["cedula"]);
	 		$("#editarNombre").val(respuesta["nombre"]);
	 		$("#editarApellidop").val(respuesta["apellido_p"]);
	 		$("#editarApellidom").val(respuesta["apellido_m"]);
	 		$("#editarDireccion").val(respuesta["Dir_domicilio"]);
	 		$("#editarSexo").html(respuesta["Sexo"]);
	 		$("#editarSexo").val(respuesta["Sexo"]);
	 		$("#editarEtnia").val(respuesta["Etnia"]);
	 		$("#editarEstadocivil").html(respuesta["EstadoCivil"]);
	 		$("#editarEstadocivil").val(respuesta["EstadoCivil"]);
	 		$("#editarFechaNacimiento").val(respuesta["Fecha_Naci"]);
	 		$("#editarTiposangre").html(respuesta["T_sangre"]);
	 		$("#editarTiposangre").val(respuesta["T_sangre"]);
	 		$("#editarHijosvarones").val(respuesta["HijosV"]);
	 		$("#editarHijasmujeres").val(respuesta["HijosM"]);
	 		$("#editarTabaquismo").val(respuesta["Tabaquismo"]);
	 		$("#editarOcupacion").val(respuesta["Ocupacion"]);
	 		$("#editarCargo").val(respuesta["Cargo"]);
	 		$("#editarIdpareja").val(respuesta["idPareja"]);

	 		



	 		}



	 });


})
	
	
/*

REVISAR SI LA CEDULA YA ESTA INGRESADA
*/	

$("#nuevaCedula").change(function(){

	var cedula =$(this).val();

	var datos = new FormData();

	datos.append("validarCedula", cedula);

	$.ajax({

		url:"ajax/personas.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success:function(respuesta){

			if(respuesta){
				//console.log("respuesta", respuesta);
				var nombre = respuesta["1"];
				var apellidop = respuesta["2"];
				var apellidom = respuesta["3"];


				$("#nuevaCedula").before('<script> Swal.fire({ title: "Error!",text: "La cedula ingresada ya existe en la base de datos y pertenece a '+nombre+' '+apellidop+' '+apellidom+'.",icon: "error",confirmButtonText: "Ok"});</script>');



				$("#nuevaCedula").val("");




			}


		}



	})



})

$("#cedulaUsuario").change(function(){

	var cedula =$(this).val();

	var datos = new FormData();

	datos.append("validarCedulaUsuario", cedula);

	$.ajax({

		url:"ajax/personas.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success:function(respuesta){

			//console.log("respuesta", respuesta);

			if(respuesta){


				
				$("#nombreUsuario").val(respuesta["1"]);
				$("#password1").val(respuesta["0"]);


				//aqui se inserta el valor del usuario en la caja de texto

			}else{


				$("#cedulaUsuario").before('<script> Swal.fire({ title: "Alerta!",text: "La cedula ingresada no existe en la base de datos, por lo cual no podrá crear el usuario.",icon: "warning",confirmButtonText: "Ok"});</script>');
				$("#cedulaUsuario").val("");
				$("#nombreUsuario").val("");
				$("#password1").val("");


			}


		}



	})



})



//Comprobar si el usaurio ya existe

$("#cedulaUsuario").change(function(){

	var cedula =$(this).val();

	var datos = new FormData();

	datos.append("validarUsuario", cedula);

	$.ajax({

		url:"ajax/personas.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success:function(respuesta1){

			//console.log("respuesta1", respuesta1);

			var user = respuesta1["0"];

			 if(respuesta1){

				$("#cedulaUsuario").before('<script> Swal.fire({ title: "Error!",text: "La cedula ingresada ya pertenece al usuario: '+user+'",icon: "error",confirmButtonText: "Ok"});</script>');
			

			 	$("#cedulaUsuario").val("");
			 	$("#nombreUsuario").val("");
			 	$("#password1").val("");


			 }


		}



	})



})





//ELIMINAR PERSONA


$(document).on("click", ".btnEliminarPersona", function(){ 

	cedula = $(this).attr("cedula");
	//para futura eliminacion automatica de usuario al eliminar una persona
	//usuario = $(this).attr("usuario");

Swal.fire({
		title: "¿Esta seguro de eliminar esta persona?",
		text: "Si no lo está puede cancelar la accion!",
		icon: "warning",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		cancelButtonText: "Cancelar",
		confirmButtonText: "Si, eliminar la persona"


	}).then((result)=>{
		if(result.value){
			window.location = "index.php?ruta=personas&cedula="+cedula;


		}

	})





})























			

	 		




	 	