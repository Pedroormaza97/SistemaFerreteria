<?php

require_once "conexion.php";


 class ModeloPersonas{
  //MOSTRAR PERSONAS

    static public function mdlMostrarPersonas($tabla, $item, $valor){

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

   //CREAR NOMBRE DE USUARIO A PARTIR DE LA CEDULA DE LA PERSONA

   static public function mdlCrearNombreUsuario($tabla, $item, $valor){

   

     $stmt = Conexion::conectar()->prepare("SELECT  `cedula`, CONCAT(LOWER(LEFT(`nombre`, 1)), LOWER(`apellido_p`), substring(`cedula`,7)) FROM $tabla WHERE $item = :$item;");

     $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);


     $stmt -> execute();

     return $stmt -> fetch();

   $stmt -> close();

   $stmt = null;
   }



   //ELIMINAR USUARIO

   static public function mdlEliminarPersona($tabla, $datos){

   

     $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE `cedula` = :cedula");

     $stmt -> bindParam(":cedula", $datos, PDO::PARAM_INT);


     if($stmt->execute()){

      return "ok";  

    }else{

      return "error";
    
    }


   $stmt -> close();

   $stmt = null;
   }








   //CREAR PERSONAS



    static public function mdlCrearPersonas($tabla, $datos){

    /*$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (`cedula`, `nombre`, `apellido_p`, `apellido_m`, `dir_domicilio`, `sexo`, `etnia`, `estadocivil`, `fecha_naci`, `t_sangre`, `hijosv`, `hijosm`, `tabaquismo`, `ocupacion`, `cargo`, `idpareja`) VALUES (:cedula, :nombre, :apellido_p, :apellido_m, :dir_domicilio, :sexo, :etnia, :estadocivil, :fecha_naci, :t_sangre, :hijosv, :hijosm, :tabaquismo, :ocupacion, :cargo, :idpareja); ");*/
    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (`cedula`, `nombre`, `apellido_p`, `apellido_m`, `dir_domicilio`, `sexo`, `etnia`, `estadocivil`, `fecha_naci`, `t_sangre`, `hijosv`, `hijosm`, `tabaquismo`, `ocupacion`, `cargo`, `idpareja`) VALUES (:cedula, :nombre, :apellido_p, :apellido_m, :dir_domicilio, :sexo, :etnia, :estadocivil, :fecha_naci, :t_sangre, :hijosv, :hijosm, :tabaquismo, :ocupacion, :cargo, :idpareja); ");
    
    
    

    $stmt->bindParam(":cedula", $datos["arr_cedula"], PDO::PARAM_STR);
    $stmt->bindParam(":nombre", $datos["arr_nombre"], PDO::PARAM_STR);
    $stmt->bindParam(":apellido_p", $datos["arr_apellido_p"], PDO::PARAM_STR);
    $stmt->bindParam(":apellido_m", $datos["arr_apellido_m"], PDO::PARAM_STR);
    $stmt->bindParam(":dir_domicilio", $datos["arr_dir_domicilio"], PDO::PARAM_STR);
    $stmt->bindParam(":sexo", $datos["arr_sexo"], PDO::PARAM_STR);
    $stmt->bindParam(":etnia", $datos["arr_etnia"], PDO::PARAM_STR);
    $stmt->bindParam(":estadocivil", $datos["arr_estadocivil"], PDO::PARAM_STR);
    $stmt->bindParam(":fecha_naci", $datos["arr_fecha_naci"], PDO::PARAM_STR);
    $stmt->bindParam(":t_sangre", $datos["arr_t_sangre"], PDO::PARAM_STR);
    $stmt->bindParam(":hijosv", $datos["arr_hijosv"], PDO::PARAM_INT);
    $stmt->bindParam(":hijosm", $datos["arr_hijosm"], PDO::PARAM_INT);
    $stmt->bindParam(":tabaquismo", $datos["arr_tabaquismo"], PDO::PARAM_STR);
    $stmt->bindParam(":ocupacion", $datos["arr_ocupacion"], PDO::PARAM_STR);
    $stmt->bindParam(":cargo", $datos["arr_cargo"], PDO::PARAM_STR);
    $stmt->bindParam(":idpareja", $datos["arr_idpareja"], PDO::PARAM_INT);
  

    if($stmt->execute()){

      return "ok";  

    }else{

      return "error";
    
    }

    $stmt->close();
    
    

  }


   //EDITAR USUARIO

  static public function mdlEditarPersona($tabla, $datos){

    $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET `cedula`= :cedula,`nombre` = :nombre, `apellido_p` = :apellido_p, `apellido_m` = :apellido_m, `Dir_domicilio` = :Dir_domicilio, `Sexo` = :Sexo, `Etnia`= :Etnia,`EstadoCivil` = :EstadoCivil, `Fecha_Naci` = :Fecha_Naci, `T_sangre` = :T_sangre, `HijosV` = :HijosV, `HijosM` = :HijosM, `Tabaquismo` = :Tabaquismo, `Ocupacion` = :Ocupacion, `Cargo` = :Cargo, `idPareja` = :idPareja  WHERE `cedula`=:cedula");
    

    $stmt->bindParam(":cedula", $datos["arr_cedula"], PDO::PARAM_STR);
    $stmt->bindParam(":nombre", $datos["arr_nombre"], PDO::PARAM_STR);
    $stmt->bindParam(":apellido_p", $datos["arr_Apellidop"], PDO::PARAM_STR);
    $stmt->bindParam(":apellido_m", $datos["arr_Apellidom"], PDO::PARAM_STR);
    $stmt->bindParam(":Dir_domicilio", $datos["arr_Direccion"], PDO::PARAM_STR);
    $stmt->bindParam(":Sexo", $datos["arr_Sexo"], PDO::PARAM_STR);
    $stmt->bindParam(":Etnia", $datos["arr_Etnia"], PDO::PARAM_STR);
    $stmt->bindParam(":EstadoCivil", $datos["arr_Estadocivil"], PDO::PARAM_STR);
    $stmt->bindParam(":Fecha_Naci", $datos["arr_FechaNacimiento"], PDO::PARAM_STR);
    $stmt->bindParam(":T_sangre", $datos["arr_Tiposangre"], PDO::PARAM_STR);
    $stmt->bindParam(":HijosV", $datos["arr_Hijosvarones"], PDO::PARAM_INT);
    $stmt->bindParam(":HijosM", $datos["arr_Hijasmujeres"], PDO::PARAM_INT);
    $stmt->bindParam(":Tabaquismo", $datos["arr_Tabaquismo"], PDO::PARAM_STR);
    $stmt->bindParam(":Ocupacion", $datos["arr_Ocupacion"], PDO::PARAM_STR);
    $stmt->bindParam(":Cargo", $datos["arr_Cargo"], PDO::PARAM_STR);
    $stmt->bindParam(":idPareja", $datos["arr_Idpareja"], PDO::PARAM_INT);
    
  

    if($stmt->execute()){

      return "ok";  

    }else{

      return "error";
    
    }

    $stmt->close();
    
    $stmt = null;

  }
  

   
  
 }//llave de cierre de clase
