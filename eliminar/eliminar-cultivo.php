<?php
require '../conexion.php'; // Incluir el archivo de conexión

// Verificar si se proporcionó un ID válido en la URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // Consulta SQL para eliminar el registro con el ID especificado
    $sql = "DELETE FROM gestion_cultivos WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "El cultivo se eliminó correctamente.";
        header('refresh:2;url=../gestion-cultivos.php'); 
    } else {
        echo "Error al eliminar el cultivo: " . $conn->error;
    }
} else {
    echo "ID inválido.";
}

// Cerrar conexión
$conn->close();
?>
