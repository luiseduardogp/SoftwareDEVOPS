<?php
require '../conexion.php'; // Incluir el archivo de conexión

// Obtener los datos enviados desde el formulario
$nombreProducto = $_POST['nombre_producto'];
$humedad= $_POST['humedad'];
$peso= $_POST['peso'];
$fechaRegistro= $_POST['fecha_registro'];
$calidad= $_POST['calidad'];
$tueste= $_POST['tueste'];

// Consulta SQL para insertar los datos en la base de datos
$sql = "INSERT INTO control_calidad (nombre_producto, humedad, peso, fecha_registro, calidad, tueste) VALUES ('$nombreProducto','$humedad', '$peso', '$fechaRegistro', '$calidad', '$tueste')";
if ($conn->query($sql) === TRUE) {
    echo "El control de calidad se agregó correctamente.";
    header('refresh:2;url=../control-calidad.php');
} else {
    echo "Error al insertar el control de calidad: " . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
