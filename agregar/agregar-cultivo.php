<?php
require '../conexion.php'; // Incluir el archivo de conexión

// Obtener los valores del formulario
$nombreCultivo = $_POST['nombre_cultivo'];
$fechaPlantacion = $_POST['fecha_plantacion'];
$fechaCosecha = $_POST['fecha_cosecha'];
$estado= $_POST['estado'];
$observaciones= $_POST['observaciones'];
$cantidadCosechada = $_POST['cantidad_cosechada'];

// Consulta SQL para insertar los datos en la tabla "gestion_cultivos"
$sql = "INSERT INTO gestion_cultivos (nombre_cultivo, fecha_plantacion, fecha_cosecha, estado, observaciones, cantidad_cosechada)
        VALUES ('$nombreCultivo', '$fechaPlantacion', '$fechaCosecha', '$estado', '$observaciones', '$cantidadCosechada')";

if ($conn->query($sql) === TRUE) {
    echo "El cultivo se ha agregado correctamente.";
    header('refresh:2;url=../gestion-cultivos.php'); 
} else {
    echo "Error al agregar el cultivo: " . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
