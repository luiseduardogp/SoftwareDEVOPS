<?php
require '../conexion.php'; // Incluir el archivo de conexión

// Obtener los datos del formulario
$nombre_producto = $_POST['nombre_producto'];
$cantidad = $_POST['cantidad'];
$fecha_registro = $_POST['fecha_registro'];

// Consulta SQL para insertar los datos en la base de datos
$sql = "INSERT INTO control_inventario (nombre_producto, cantidad, fecha_registro) VALUES ('$nombre_producto', '$cantidad', '$fecha_registro')";

if ($conn->query($sql) === TRUE) {
    echo "El producto ha sido agregado exitosamente.";
    header('refresh:2;url=../index.php');
} else {
    echo "Error al agregar el producto: " . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
