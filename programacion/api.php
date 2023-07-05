<?php

include_once "servicios.php";

$peticion = $_SERVER["REQUEST_METHOD"];

switch ($peticion) {
    case 'GET':
        Servicios::select();
        break;
    case 'POST':
        Servicios::agregar();
        break;
    case 'PUT':
        Servicios::editar();
        break;
    case 'DELETE':
        Servicios::borrar();
        break;
}

?>