<?php
$servername = "localhost";
$username = "root";
$password = ""; // Si has establecido una contraseña para MySQL, ingrésala aquí
$dbname = "granoquemado"; //  nombre de la base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
