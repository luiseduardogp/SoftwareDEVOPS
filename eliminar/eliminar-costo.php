<?php
require '../conexion.php'; // Incluir el archivo de conexión

// Verificar si se proporcionó un ID válido en la URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // Consulta SQL para eliminar el registro con el ID especificado
    $sql = "DELETE FROM costos_finanzas WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "El costo se eliminó correctamente.";
        header('refresh:2;url=../costos-finanzas.php');
    } else {
        echo "Error al eliminar el costo: " . $conn->error;
    }
} else {
    echo "ID inválido.";
}

// Cerrar conexión
$conn->close();
?>
