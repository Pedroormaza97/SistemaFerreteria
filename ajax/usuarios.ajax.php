<?php

require_once "../controladores/usuarios.controlador.php";
require_once "../modelos/usuarios.modelo.php";


class ajaxUsuarios{

/**
 * EDITAR USUARIO
 */

public $idUsuario;
public function ajaxEditarUsuario(){
	$item = "idUsuario";
	$valor = $this->idUsuario;

	$respuesta = ControladorUsuarios::ctrMostrarUsuarios($item,$valor);

	echo json_encode($respuesta);



	}


//ACTIVAR USUARIO

	public $activarId;
	public $activarUsuario;
	

	public function ajaxActivarUsuario(){

		$tabla = "usuarios";

		$item1 ="Estado";
		$valor1 = $this->activarUsuario;

		$item2 ="idUsuario";
		$valor2 = $this->activarId;




		$respuesta = ModeloUsuarios::mdlActualizarUsuario($tabla, $item1, $valor1, $item2, $valor2);

		


	}


}
//****************************************************************
/**
 * EDITAR USUARIO
 */
if(isset($_POST["idUsuario"])){

$editar = new ajaxUsuarios();
$editar -> idUsuario = $_POST["idUsuario"];
$editar -> ajaxEditarUsuario();


}


/**
 * ACTIVAR USUARIO
 */

if(isset($_POST["activarUsuario"])){

	$activarUsuario = new ajaxUsuarios();
	$activarUsuario -> activarUsuario = $_POST["activarUsuario"];
	$activarUsuario -> activarId = $_POST["activarId"];
	$activarUsuario -> ajaxActivarUsuario();



}

