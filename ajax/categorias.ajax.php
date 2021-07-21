<?php

require_once "../controladores/categorias.controlador.php";
require_once "../modelos/categorias.modelo.php";



class ajaxCategorias{

/**
 * EDITAR PERSONA
 */

public $idCategoria;
public function ajaxEditarCategorias(){
	$item = "id";
	$valor = $this->idCategoria;

	$respuesta = ControladorCategorias::ctrMostrarCategorias($item,$valor);

	echo json_encode($respuesta);




	}
}//llave de clase
/**********************************************************************
 * EDITAR USUARIO
 */
if(isset($_POST["idCategoria"])){

$editar = new ajaxCategorias();
$editar -> idCategoria = $_POST["idCategoria"];
$editar -> ajaxEditarCategorias();


}
