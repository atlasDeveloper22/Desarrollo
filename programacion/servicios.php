<?php

include_once "conexion.php";

class Servicios{

    static function select(){
       $objeto = new Conexion();
       $conexion = $objeto->Conectar();
       $sentencia = "SELECT * FROM personas";
       $resultado = $conexion->prepare($sentencia);
       $resultado->execute();
       $datos = $resultado->fetchAll();
       echo json_encode($datos);
    }

    static function agregar(){
        $objeto = new Conexion();
        $conexion = $objeto->Conectar();
        $sentencia = "INSERT INTO personas VALUES(?,?,?)";

        $cedula = $_POST['cedula'];
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];

        $resultado = $conexion->prepare($sentencia);
        $resultado->execute(array($cedula,$nombre,$edad));
        echo json_encode("realizado con exito");
    }

    static function editar(){
        $objeto = new Conexion();
        $conexion = $objeto->Conectar();
        $sentencia = "UPDATE personas set nombre=?,edad=? WHERE cedula=?";

        $cedula = $_GET['cedula'];
        $nombre = $_GET['nombre'];
        $edad = $_GET['edad'];

        $resultado = $conexion->prepare($sentencia);
        $resultado->execute(array($nombre,$edad,$cedula));
        echo json_encode("realizado con exito");
    }

    static function borrar(){
        $objeto = new Conexion();
        $conexion = $objeto->Conectar();
        $sentencia = "DELETE FROM personas WHERE cedula=?";

        $cedula = $_GET['cedula'];

        $resultado = $conexion->prepare($sentencia);
        $resultado->execute(array($cedula));
        echo json_encode("realizado con exito");
    }
}

?>