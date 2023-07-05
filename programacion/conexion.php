<?php

class Conexion{
    function Conectar(){
        define("host","localhost");
        define("user","root");
        define("password","");
        define("bd","programacion");

        $conexion = new PDO("mysql:host=".host.";dbname=".bd,user,password);
        return $conexion;
    }
}

?>