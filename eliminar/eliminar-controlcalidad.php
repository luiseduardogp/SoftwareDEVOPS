<?php
require '../conexion.php'; // Incluir el archivo de conexión

// Verificar si se proporcionó un ID válido en la URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // Consulta SQL para eliminar el registro con el ID especificado
    $sql = "DELETE FROM dbo.control_calidad WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "El control de calidad se eliminó correctamente.";
        // Redirigir a la página principal después de 2 segundos
        header('refresh:2;url=../control-calidad.php');
    } else {
        echo "Error al eliminar el control de calidad: " . $conn->error;
    }
} else {
    echo "ID inválido.";
}

// Cerrar conexión
$conn->close();
?>
