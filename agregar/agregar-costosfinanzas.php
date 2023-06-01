<?php
require '../conexion.php'; // Incluir el archivo de conexión

// Obtener los datos del formulario
$concepto = $_POST['concepto'];
$monto = $_POST['monto'];
$fecha_registro = $_POST['fecha_registro'];

// Consulta SQL para insertar el nuevo registro
$sql = "INSERT INTO costos_finanzas (concepto, monto, fecha_registro) VALUES ('$concepto', '$monto', '$fecha_registro')";
if ($conn->query($sql) === TRUE) {
    echo "Registro insertado correctamente.";
    header('refresh:2;url=../costos_finanzas.php');
} else {
    echo "Error al insertar el registro: " . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
