 <?php

 require_once "conexion.php";
//MOSTRAR USUARIOS
 class ModeloUsuarios{

 static public function mdlMostrarUsuarios($tabla, $item, $valor){

   if($item != null){

     $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

     $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

     $stmt -> execute();

     return $stmt -> fetch();

   }else{

     $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

     $stmt -> execute();

     return $stmt -> fetchAll();

   }


   $stmt -> close();

   $stmt = null;
   }

  
    
    static public function mdlIngresarUsuario($tabla, $datos){

    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (`userUsuario`,`passUsuario`, `rol_idrol`, `cedulaP`, `FotoPerfilUsuario`, `Estado`) VALUES (:userUsuario, :passUsuario, :rol_idrol, :cedulaP, :foto, :estado); ");
    

    $stmt->bindParam(":userUsuario", $datos["arr_usuario"], PDO::PARAM_STR);
    $stmt->bindParam(":passUsuario", $datos["arr_password"], PDO::PARAM_STR);
    $stmt->bindParam(":rol_idrol", $datos["arr_rol"], PDO::PARAM_STR);
    $stmt->bindParam(":cedulaP", $datos["arr_cedulap"], PDO::PARAM_STR);
    $stmt->bindParam(":foto", $datos["arr_rutaImg"], PDO::PARAM_STR);
    $stmt->bindParam(":estado", $datos["arr_estado"], PDO::PARAM_STR);
  

    if($stmt->execute()){

      return "ok";  

    }else{

      return "error";
    
    }

    $stmt->close();
    
    $stmt = null;

  }
  
  //EDITAR USUARIO

  static public function mdlEditarUsuario($tabla, $datos){

    $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET `userUsuario`= :userUsuario,`passUsuario` = :passUsuario, `rol_idrol` = :rol_idrol, `cedulaP` = :cedulaP, `FotoPerfilUsuario` = :foto, `Estado` = :estado WHERE `userUsuario`=:userUsuario");
    

    $stmt->bindParam(":userUsuario", $datos["arr_usuario"], PDO::PARAM_STR);
    $stmt->bindParam(":passUsuario", $datos["arr_password"], PDO::PARAM_STR);
    $stmt->bindParam(":rol_idrol", $datos["arr_rol"], PDO::PARAM_STR);
    $stmt->bindParam(":cedulaP", $datos["arr_cedulap"], PDO::PARAM_STR);
    $stmt->bindParam(":foto", $datos["arr_rutaImg"], PDO::PARAM_STR);
    $stmt->bindParam(":estado", $datos["arr_estado"], PDO::PARAM_STR);

    
  

    if($stmt->execute()){

      return "ok";  

    }else{

      return "error";
    
    }

    $stmt->close();
    
    $stmt = null;

  }
  



//MODELO ACTIALIZAR USUARRIO

  static public function mdlActualizarUsuario($tabla, $item1, $valor1, $item2, $valor2){

  $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET $item1 = :$item1 WHERE $item2=:$item2");

  $stmt->bindParam(":".$item1, $valor1, PDO::PARAM_STR);
  $stmt->bindParam(":".$item2, $valor2, PDO::PARAM_STR);

    
  if($stmt->execute()){

      return "ok";  

    }else{

      return "error";
    
    }

    $stmt->close();
    
    $stmt = null;



  }

  //MODELO VALIDAR USUARIO

  static public function mdlValidarUsuarios($tabla, $item, $valor){

   

     $stmt = Conexion::conectar()->prepare("SELECT `userUsuario` FROM $tabla WHERE $item = :$item");

     $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

     $stmt -> execute();

     return $stmt -> fetch();


   $stmt -> close();

   $stmt = null;
   }

   //ELIMINAR USUARIO

   static public function mdlEliminarUsuario($tabla, $datos){

   

     $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE `idUsuario` = :id");

     $stmt -> bindParam(":id", $datos, PDO::PARAM_INT);


     if($stmt->execute()){

      return "ok";  

    }else{

      return "error";
    
    }


   $stmt -> close();

   $stmt = null;
   }










   
  
 }//llave de cierre de clase
