<?php
$host = "localhost";
$user = "id21470500_luisron27";
$password = "Luis27049574.";
$dbName = "id21470500_luisron";

/**
    * $host = "localhost";
    *$user = "root";
    *$password = "";
    *$dbName = "servicios";
 */

// Crear una conexión
$conexion = new mysqli($host, $user, $password, $dbName);

// Verificar la conexión
if ($conexion->connect_error) {
    die("La conexión falló: " . $conexion->connect_error);
}

?>
