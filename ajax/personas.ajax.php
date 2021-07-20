<?php

require_once "../controladores/personas.controlador.php";
require_once "../modelos/personas.modelo.php";
require_once "../controladores/usuarios.controlador.php";
require_once "../modelos/usuarios.modelo.php";



class ajaxPersonas{

/**
 * EDITAR PERSONA
 */

public $cedula;
public function ajaxEditarPersona(){
	$item = "cedula";
	$valor = $this->cedula;

	$respuesta = ControladorPersonas::ctrMostrarPersona($item,$valor);

	echo json_encode($respuesta);




	}



/**
 * VALIDAR CEDULA EN FORMULARIO PERSONA
 */

public $validarCedula;

public function ajaxValidarCedula(){

	$item = "cedula";
	$valor = $this->validarCedula;
	$respuesta = ControladorPersonas::ctrMostrarPersona($item,$valor);

	echo json_encode($respuesta);


}


/**
 * VALIDAR CEDULA EN FORMULARIO USUARIO
 */

public $validarCedulaUsuario;

public function ajaxCrearNombreUsuario(){

	$item = "cedula";
	$valor = $this->validarCedulaUsuario;
	$respuesta = ControladorPersonas::ctrCrearNombreUsuario($item,$valor);

	echo json_encode($respuesta);


}

/**
 * VALIDAR CEDULA EN FORMULARIO USUARIO
 */

public $validarUsuario;

public function ajaxValidarUsuario(){

	$item = "cedulaP";
	$valor = $this->validarUsuario;
	$respuesta1 = ControladorUsuarios::ctrValidarUsuario($item,$valor);

	echo json_encode($respuesta1);


}

}//llave de la class








/**********************************************************************
 * EDITAR USUARIO
 */
if(isset($_POST["cedula"])){

$editar = new ajaxPersonas();
$editar -> cedula = $_POST["cedula"];
$editar -> ajaxEditarPersona();


}
/**********************************************************************
 * EDITAR USUARIO
 */
if(isset($_POST["validarCedula"])){

	$valCedula = new ajaxPersonas();
	$valCedula -> validarCedula = $_POST["validarCedula"];
	$valCedula -> ajaxValidarCedula();

}
/**********************************************************************
 * EDITAR USUARIO
 */
if(isset($_POST["validarCedulaUsuario"])){

	$valCedulaNomUser = new ajaxPersonas();
	$valCedulaNomUser -> validarCedulaUsuario = $_POST["validarCedulaUsuario"];
	$valCedulaNomUser -> ajaxCrearNombreUsuario();

}
/**********************************************************************
 * EDITAR USUARIO
 */
if(isset($_POST["validarUsuario"])){

	$valCedulaUser = new ajaxPersonas();
	$valCedulaUser -> validarUsuario = $_POST["validarUsuario"];
	$valCedulaUser -> ajaxValidarUsuario();

}