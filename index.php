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

        <h2>Agregar nuevo producto</h2>
            
            <form action="agregar/agregar-producto.php" method="POST">
                <label for="nombre_producto">Nombre del Producto:</label>
                <input type="text" id="nombre_producto" name="nombre_producto" required>
            
                <label for="cantidad">Cantidad:</label>
                <input type="number" id="cantidad" name="cantidad" required>
            
                <label for="fecha_registro">Fecha de Registro:</label>
                <input type="date" id="fecha_registro" name="fecha_registro" required>
            
                <input type="submit" value="Agregar Producto">
            </form>
            <h2>Control de Inventario</h2>
          
            <?php
            require 'conexion.php'; // Incluir el archivo de conexión
            
            // Consulta SQL para recuperar los datos del control de inventario
            $sql = "SELECT * FROM control_inventario";
            $result = $conn->query($sql);
            
            // Verificar si se encontraron registros
            if ($result->num_rows > 0) {
                // Mostrar los datos en una tabla HTML
                echo "<table>
                <tr>
                    <th>ID</th>
                    <th>Nombre del Producto</th>
                    <th>Cantidad</th>
                    <th>Fecha de Registro</th>
                </tr>";
            
                // Recorrer los resultados de la consulta
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>".$row["id"]."</td>
                        <td>".$row["nombre_producto"]."</td>
                        <td>".$row["cantidad"]."</td>
                        <td>".$row["fecha_registro"]."</td>
                        <td><a \" value=\"Eliminar\" class=\"delete-button\" onClick=\"return confirm('¿Estás seguro de eliminar este registro?');\" a href=\"eliminar/eliminar-producto.php?id=".$row["id"]."\">Eliminar</a></td>

                    </tr>";
                }
                echo "</table>";
            } else {
                echo "No se encontraron registros en el control de inventario.";
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
