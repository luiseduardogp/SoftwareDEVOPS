<?php
require '../conexion.php'; // Incluir el archivo de conexión

// Verificar si se proporcionó un ID válido en la URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // Consulta SQL para eliminar el registro con el ID especificado
    $sql = "DELETE FROM gestion_mantenimiento WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "El mantenimiento se eliminó correctamente.";
        header('refresh:2;url=../gestion-mantenimiento.php');
    } else {
        echo "Error al eliminar el mantenimiento: " . $conn->error;
    }
} else {
    echo "ID inválido.";
}

// Cerrar conexión
$conn->close();
?>
