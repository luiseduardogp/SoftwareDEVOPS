<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Control de Inventario - Granja de Café</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <header>
    <img src="public/logo.png" alt="Logo" class="logo-img">
        
        <nav>
        <ul>
            <li><a href="index.php">Control de Inventario</a></li>
            <li><a href="gestion-cultivos.php">Gestión de Cultivos</a></li>
            <li><a href="control-calidad.php">Control de Calidad</a></li>
            <li><a href="costos-finanzas.php">Costos y Finanzas</a></li>
            <li><a href="monitoreo-clima.php">Monitoreo del Clima</a></li>
            <li><a href="trabajadores.php">Trabajadores</a></li>
            <li><a href="gestion-mantenimiento.php">Gestión de Mantenimiento</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
        <section class="inventory">
            <h2>Agregar Costos</h2>
                 <!-- Formulario para agregar nuevos registros -->
        <form action="agregar/agregar-costosfinanzas.php" method="POST">
            <label for="concepto">Concepto:</label>
            <input type="text" id="concepto" name="concepto" required>
            
            <label for="monto">Monto:</label>
            <input type="number" id="monto" name="monto" required>
            
            <label for="fecha_registro">Fecha:</label>
            <input type="date" id="fecha_registro" name="fecha_registro" required>
            
            <input type="submit" value="Agregar">
        </form>

        <h2>Costos y Finanzas</h2>
               <?php
                require 'conexion.php'; // Incluir el archivo de conexión

                // Consulta SQL para recuperar los datos de costos y finanzas
                $sql = "SELECT * FROM costos_finanzas";
                $result = $conn->query($sql);

                // Verificar si se encontraron registros
                if ($result->num_rows > 0) {
                    // Mostrar los datos en una tabla HTML
                    echo "<table>
                    <tr>
                        <th>ID</th>
                        <th>Descripción</th>
                        <th>Monto</th>
                        <th>Fecha</th>
                    </tr>";
                    
                    // Recorrer los resultados de la consulta
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                            <td>".$row["id"]."</td>
                            <td>".$row["concepto"]."</td>
                            <td>".$row["monto"]."</td>
                            <td>".$row["fecha_registro"]."</td>
                            <td><a  value=\"Eliminar\" class=\"delete-button\" onClick=\"return confirm('¿Estás seguro de eliminar este registro?');\" a href=\"eliminar/eliminar-costo.php?id=".$row["id"]."\">Eliminar</a></td>

                        </tr>";
                    }
                    echo "</table>";
                } else {
    echo "No se encontraron registros en Costos y Finanzas.";
                }

                // Cerrar conexión
                $conn->close();
                ?>         
    </section>
</main>
    <footer>
        <p>Todos los derechos reservados &copy; <?php echo date('Y'); ?> Finca Grano Quemado.</p>
    </footer>
</body>
</html>
