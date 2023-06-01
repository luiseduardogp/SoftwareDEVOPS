<?php
require '../conexion.php'; // Incluir el archivo de conexión

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$sexo = $_POST['sexo'];
$puesto = $_POST['puesto'];
$direccion = $_POST['direccion'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$salario = $_POST['salario'];
$fecha_inicio = $_POST['fecha_inicio'];
$fecha_fin = $_POST['fecha_fin'];
$permisos = $_POST['permisos'];
$certificaciones = $_POST['certificaciones'];

// Consulta SQL para insertar el nuevo registro
$sql = "INSERT INTO trabajadores (nombre, apellido, sexo, puesto, direccion, fecha_nacimiento, salario, fecha_inicio, fecha_fin, permisos, certificaciones) 
VALUES ('$nombre', '$apellido', '$sexo ','$puesto ', '$direccion', '$fecha_nacimiento', '$salario', '$fecha_inicio', '$fecha_fin','$permisos','$certificaciones')";
if ($conn->query($sql) === TRUE) {
    echo "Registro insertado correctamente.";
    header('refresh:2;url=../trabajadores.php');
} else {
    echo "Error al insertar el registro: " . $conn->error;
}

// Cerrar conexión
$conn->close();
?>