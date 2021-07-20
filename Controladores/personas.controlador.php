<?php
class ControladorPersonas{
  /**
   * INGRESO PERSONAS
   */
       static public function ctrCrearPersona(){
    if(isset($_POST["nuevaCedula"])){
        if(preg_match('/^[a-zA-Z0-9 ]+$/', $_POST["nuevaCedula"])){

           $tabla = "persona";


           $datos = array("arr_cedula" => $_POST["nuevaCedula"],
                        "arr_nombre" => $_POST["nuevoNombre"],
                        "arr_apellido_p" => $_POST["nuevoApellidop"],
                        "arr_apellido_m" => $_POST["nuevoApellidom"],
                        "arr_dir_domicilio" => $_POST["nuevaDireccion"],
                        "arr_sexo" => $_POST["nuevoSexo"],
                        "arr_etnia" => $_POST["nuevaEtnia"],
                        "arr_estadocivil" => $_POST["nuevoEstadocivil"],
                        "arr_fecha_naci" => $_POST["nuevaFechaNacimiento"],
                        "arr_t_sangre" => $_POST["nuevoTiposangre"],
                        "arr_hijosv" => $_POST["nuevosHijosvarones"],
                        "arr_hijosm" => $_POST["nuevasHijasmujeres"],
                        "arr_tabaquismo" => $_POST["nuevoTabaquismo"],
                       "arr_ocupacion" => $_POST["nuevaOcupacion"],
                       "arr_cargo" => $_POST["nuevoCargo"],
                       "arr_idpareja" => $_POST["nuevoIdpareja"]);
          

           $respuesta = ModeloPersonas::mdlCrearPersonas($tabla, $datos);

           if($respuesta == "ok"){
            echo '<script> 
            Swal.fire({
            title: "Confirmacion!",
            text: "Los datos de la nueva persona fueron ingresados.",
            icon: "success",
           confirmButtonText: "Ok",
           closeOnConfirm: false}).then((result)=>{

            if(result.value){
              window.location = "personas";
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
              window.location = "personas";
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
              window.location = "personas";
            }


            });
            </script>';


          }

          
         }
       }//llave de metodo


       /**
   * MOSTRAR USUARIOS
   */
    static public function ctrMostrarPersona($item, $valor){
      $tabla = "persona";

      $respuesta = ModeloPersonas::mdlMostrarPersonas($tabla, $item, $valor);

      return $respuesta;


    }
    /**
   * CREAR NOMBRE DE USUARIO
   */


    static public function ctrCrearNombreUsuario($item, $valor){
      $tabla = "persona";

      $respuesta = ModeloPersonas::mdlCrearNombreUsuario($tabla, $item, $valor);

      return $respuesta;


    }

     /**
   * ELIMINAR PERSONA
   */


    static public function ctrEliminarPersona(){

      if(isset($_GET["cedula"])){
        $tabla = "persona";
        $datos = $_GET["cedula"];


        $respuesta = ModeloPersonas::mdlEliminarPersona($tabla, $datos);


        if($respuesta == "ok"){
            
            echo '<script> 
            Swal.fire({
            title: "Confirmacion!",
            text: "La persona con cedula '.$_GET["cedula"].' a sido eliminada de los registros correctamente.",
            icon: "success",
           confirmButtonText: "Ok"}).then((result)=>{

            if(result.value){
              window.location = "personas";
            }


            });
            </script>';

             
           }else if($respuesta == "error"){
            
            echo '<br><script> 
            Swal.fire({
            title: "Error!",
            text: "No se pudo eliminar la persona de los registros ya que la cedula cuenta con un usuario en el sistema, elimine primero el usuario e intentelo denuevo.",
            icon: "warning",
           confirmButtonText: "Ok"}).then((result)=>{

            if(result.value){
              window.location = "personas";
            }


            });
            </script>';

           //}
            
           

         

          }





      }



    }



     /**
   * EDITAR USUARIOS
   */
    static public function ctrEditarPersona(){

      if(isset($_POST["editarCedula"])){
        if(preg_match('/^[a-zA-Z0-9 ]+$/', $_POST["editarNombre"]) &&
          preg_match('/^[a-zA-Z0-9 ]/', $_POST["editarApellidop"])  &&
           preg_match('/^[a-zA-Z0-9 ]+$/', $_POST["editarApellidom"])){



        $tabla = "persona";



       $datos = array("arr_cedula" => $_POST["editarCedula"],
                        "arr_nombre" => $_POST["editarNombre"],
                        "arr_Apellidop" => $_POST["editarApellidop"],
                        "arr_Apellidom" => $_POST["editarApellidom"],
                        "arr_Direccion" => $_POST["editarDireccion"],
                        "arr_Sexo" => $_POST["editarSexo"],
                        "arr_Etnia" => $_POST["editarEtnia"],
                        "arr_Estadocivil" => $_POST["editarEstadocivil"],
                        "arr_FechaNacimiento" => $_POST["editarFechaNacimiento"],
                        "arr_Tiposangre" => $_POST["editarTiposangre"],
                        "arr_Hijosvarones" => $_POST["editarHijosvarones"],
                        "arr_Hijasmujeres" => $_POST["editarHijasmujeres"],
                        "arr_Tabaquismo" => $_POST["editarTabaquismo"],
                        "arr_Ocupacion" => $_POST["editarOcupacion"],
                        "arr_Cargo" => $_POST["editarCargo"],
                        "arr_rIdpareja" => $_POST["editarrIdpareja"]);

       $respuesta = ModeloPersonas::mdlEditarPersona($tabla, $datos);

       

       if($respuesta == "ok"){
            
            echo '<script> 
            Swal.fire({
            title: "Confirmacion!",
            text: "El Usuario a sido modificado correctamente.",
            icon: "success",
           confirmButtonText: "Ok"}).then((result)=>{

            if(result.value){
              window.location = "personas";
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
              window.location = "personas";
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
              window.location = "personas";
            }


            });
            </script>';


          }

    }
  }





    }// llave de clase