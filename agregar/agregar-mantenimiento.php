<?php
require '../conexion.php'; // Incluir el archivo de conexión

// Obtener los datos del formulario
$equipo = $_POST['equipo'];
$fecha_mantenimiento = $_POST['fecha_mantenimiento'];
$tipo_mantenimiento = $_POST['tipo_mantenimiento'];
$descripcion = $_POST['descripcion'];
$responsable = $_POST['responsable'];

// Consulta SQL para insertar el nuevo registro
$sql = "INSERT INTO gestion_mantenimiento (equipo, fecha_mantenimiento, tipo_mantenimiento, descripcion, responsable) VALUES ('$equipo', '$fecha_mantenimiento','$tipo_mantenimiento', '$descripcion', '$responsable')";
if ($conn->query($sql) === TRUE) {
    echo "Registro insertado correctamente.";
    header('refresh:2;url=../gestion-mantenimiento.php');
} else {
    echo "Error al insertar el registro: " . $conn->error;
}

// Cerrar conexión
$conn->close();
?>


