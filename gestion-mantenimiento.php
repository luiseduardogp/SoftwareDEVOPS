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

          
        <h2>Agregar Registro</h2>
            <form method="post" action="agregar/agregar-mantenimiento.php">
                <label for="equipo">Equipo:</label>
                <input type="text" id="equipo" name="equipo" required>
                <label for="fecha_mantenimiento">Fecha de Mantenimiento:</label>
                <input type="date" id="fecha_mantenimiento" name="fecha_mantenimiento" required>
                <label for="tipo_mantenimiento">Tipo de Mantenimiento:</label>
                <textarea id="tipo_mantenimiento" name="tipo_mantenimiento" required></textarea>
                <label for="descripcion">Descripción:</label>
                <textarea id="descripcion" name="descripcion" required></textarea>
                <label for="responsable">Responsable:</label>
                <input type="text" id="responsable" name="responsable" required>
                
                <input type="submit" value="Agregar">
            </form>
            <h2>Gestion de Mantenimiento</h2>
          
                <?php
                require 'conexion.php'; // Incluir el archivo de conexión

                // Consulta SQL para recuperar los datos de gestión de mantenimiento
                $sql = "SELECT * FROM gestion_mantenimiento";
                $result = $conn->query($sql);

                // Verificar si se encontraron registros
                if ($result->num_rows > 0) {
                // Mostrar los datos en una tabla HTML
                echo "<table>
                <tr>
                     <th>ID</th>
                     <th>equipo</th>
                     <th>Fecha de Mantenimiento</th>
                     <th>Tipo de Mantenimiento</th>
                     <th>Descripción</th>
                     <th>Responsable</th>
                </tr>";

                // Recorrer los resultados de la consulta
                while ($row = $result->fetch_assoc()) {
                echo "<tr>
                         <td>".$row["id"]."</td>
                         <td>".$row["equipo"]."</td>
                         <td>".$row["fecha_mantenimiento"]."</td>
                         <td>".$row["tipo_mantenimiento"]."</td>
                         <td>".$row["descripcion"]."</td>
                         <td>".$row["responsable"]."</td>
                         <td><a \" class=\"delete-button\" onClick=\"return confirm('¿Estás seguro de eliminar este registro?');\" a href=\"eliminar/eliminar-mantenimiento.php?id=".$row["id"]."\">Eliminar</a></td>
                      </tr>";
                 }
                echo "</table>";
                } else {
                echo "No se encontraron registros en la gestión de mantenimiento.";
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
