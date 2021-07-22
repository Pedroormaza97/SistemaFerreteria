<?php

 require_once "conexion.php";
//MOSTRAR USUARIOS
 class ModeloCategorias{



static public function mdlMostrarCategorias($tabla, $item, $valor){

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

   //Ingresar categoria

    static public function mdlCrearCategorias($tabla, $datos){

    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (`categoria`) VALUES (:categoria);");
    

    $stmt->bindParam(":categoria", $datos , PDO::PARAM_STR);
  
  

    if($stmt->execute()){

      return "ok";  

    }else{

      return "error";
    
    }

    $stmt->close();
    
    $stmt = null;

  }


      //EDITAR CATEGORIA

  static public function mdlEditarCategorias($tabla, $datos){

    $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET `id`= :id,`categoria` = :categoria, `fecha` = :fecha  WHERE `id`=:id");
    

    $stmt->bindParam(":id", $datos["arr_id"], PDO::PARAM_STR);
    $stmt->bindParam(":categoria", $datos["arr_categoria"], PDO::PARAM_STR);
    $stmt->bindParam(":fecha", $datos["arr_fecha"], PDO::PARAM_STR);
    
  

    if($stmt->execute()){

      return "ok";  

    }else{

      return "error";
    
    }

    $stmt->close();
    
    $stmt = null;

  }

   //ELIMINAR CATEGORIA

     static public function mdlEliminarCategoria($tabla, $datos){

   

     $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE `id` = :id");

     $stmt -> bindParam(":id", $datos, PDO::PARAM_INT);


     if($stmt->execute()){

      return "ok";  

    }else{

      return "error";
    
    }


   $stmt -> close();

   $stmt = null;
   }


}//llave de clase