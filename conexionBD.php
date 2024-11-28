<?php
// conexionBD.php

// Establece la conexión correctamente usando el operador $ para la variable
$conexion = new mysqli('localhost', 'dam', 'hlc', 'ventas_comerciales');

// Verificar si la conexión fue exitosa
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>