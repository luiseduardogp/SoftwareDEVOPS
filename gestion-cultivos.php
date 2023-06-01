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

        <h2>agregar cultivos</h2>
              <form method="POST" action="agregar/agregar-cultivo.php">
                <label for="nombre_cultivo">Nombre del cultivo:</label>
                <input type="text" id="nombre_cultivo" name="nombre_cultivo" required>

                <label for="fecha_plantacion">Fecha de plantación:</label>
                <input type="date" id="fecha_plantacion" name="fecha_plantacion" required>

                <label for="fecha_cosecha">Fecha de cosecha:</label>
                <input type="date" id="fecha_cosecha" name="fecha_cosecha" required>
                
                <label for="estado">Estado:</label>
                <input type="text" id="estado" name="estado" required>

                <label for="observaciones">Observaciones:</label>
                <input type="text" id="observaciones" name="observaciones" required>

                <label for="cantidad_cosechada">Cantidad cosechada:</label>
                <input type="number" id="cantidad_cosechada" name="cantidad_cosechada" required>

                <input type="submit" value="Agregar cultivo">
              </form>
         <h2>Gestión de cultivos</h2>
            
          
               <?php 
               require 'conexion.php'; // Incluir el archivo de conexión

               // Consulta SQL para recuperar los datos de la tabla "gestion_cultivos"
               $sql = "SELECT * FROM gestion_cultivos";
               $result = $conn->query($sql);

               // Verificar si se encontraron registros
                      if ($result->num_rows > 0) {
                            // Mostrar los datos en una tabla HTML
                            echo "<table>
                            <tr>
                                <th>ID</th>
                                <th>Nombre del cultivo</th>
                                <th>Fecha plantacion</th>
                                <th>Fecha de cosecha</th>
                                <th>Estado</th>
                                <th>Observaciones</th>
                                <th>cantidad cosechada</th>
                            </tr>";
    
                   // Recorrer los resultados de la consulta
                   while ($row = $result->fetch_assoc()) {
                       echo "<tr>
                           <td>".$row["id"]."</td>
                           <td>".$row["nombre_cultivo"]."</td>
                           <td>".$row["fecha_plantacion"]."</td>
                           <td>".$row["fecha_cosecha"]."</td>
                           <td>".$row["estado"]."</td>
                           <td>".$row["observaciones"]."</td>
                           <td>".$row["cantidad_cosechada"]."</td>
                           <td><a \" class=\"delete-button\" onClick=\"return confirm('¿Estás seguro de eliminar este registro?');\" a href=\"eliminar/eliminar-cultivo.php?id=".$row["id"]."\">Eliminar</a></td>

                       </tr>";

      
                   }
                   echo "</table>";
                }else {
                   echo "<tr><td colspan='5'>No se encontraron registros en la gestión de cultivos.</td></tr>";
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
