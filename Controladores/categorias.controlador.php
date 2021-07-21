<?php
class ControladorCategorias{

 /**
  * MOSTRAR USUARIOS
  */
    static public function ctrMostrarCategorias($item, $valor){
      $tabla = "categorias";

      $respuesta = ModeloCategorias::mdlMostrarCategorias($tabla, $item, $valor);

      return $respuesta;


    }

/**
   * INGRESO Categorias
   */
       static public function ctrCrearCategorias(){
    if(isset($_POST["nuevaCategoria"])){
        if(preg_match('/^[a-zA-Z0-9 ]+$/', $_POST["nuevaCategoria"])){

           $tabla = "categorias";


           $datos =  $_POST["nuevaCategoria"];
                        
          

           $respuesta = ModeloCategorias::mdlCrearCategorias($tabla, $datos);

           if($respuesta == "ok"){
            echo '<script> 
            Swal.fire({
            title: "Confirmacion!",
            text: "Los datos de la nueva categoria fueron ingresados.",
            icon: "success",
           confirmButtonText: "Ok",
           closeOnConfirm: false}).then((result)=>{

            if(result.value){
              window.location = "categorias";
            }


            });
            </script>';


           }else if($respuesta == "error"){
             echo '<br><script> 
            Swal.fire({
            title: "Error!",
            text: "No se pudieron ingresar los datos a la base de datos, intentelo denuevo.",
            icon: "error",
           confirmButtonText: "Ok",
           closeOnConfirm: false}).then((result)=>{

            if(result.value){
              window.location = "categorias";
            }


            });
            </script>';
           }
            
           

         

          }else{
            echo '<br><script> 
            Swal.fire({
            title: "Error!",
            text: "Usted ha ingresado caracteres especiales no permitidos.",
            icon: "error",
           confirmButtonText: "Ok",
           closeOnConfirm: false}).then((result)=>{

            if(result.value){
              window.location = "categorias";
            }


            });
            </script>';


          }

          
         }
       }//llave de metodo
    /**
   * EDITAR USUARIOS
   */
    static public function ctrEditarCategorias(){

      if(isset($_POST["editarid"])){
        if(preg_match('/^[a-zA-Z0-9 ]+$/', $_POST["editarCategoria"])){



        $tabla = "categorias";



       $datos = array("arr_id" => $_POST["editarid"],
                        "arr_categoria" => $_POST["editarCategoria"],
                        "arr_fecha" => $_POST["editarfecha"]);

       $respuesta = ModeloCategorias::mdlEditarCategorias($tabla, $datos);

       

       if($respuesta == "ok"){
            
            echo '<script> 
            Swal.fire({
            title: "Confirmacion!",
            text: "La categoria ha sido modificado correctamente.",
            icon: "success",
           confirmButtonText: "Ok"}).then((result)=>{

            if(result.value){
              window.location = "categorias";
            }


            });
            </script>';

             
           }else if($respuesta == "error"){
            
            echo '<br><script> 
            Swal.fire({
            title: "Error!",
            text: "No se pudieron modificar los datos en la base de datos, intentelo denuevo.",
            icon: "error",
           confirmButtonText: "Ok"}).then((result)=>{

            if(result.value){
              window.location = "categorias";
            }


            });
            </script>';

           
            


          }
       

        




      

     }else{
            echo '<br><script> 
            Swal.fire({
            title: "Error!",
            text: "Usted ha ingresado caracteres especiales no permitidos.",
            icon: "error",
           confirmButtonText: "Ok",
           closeOnConfirm: false}).then((result)=>{

            if(result.value){
              window.location = "categorias";
            }


            });
            </script>';


          }

    }
  }



}//llave de cierre de clase