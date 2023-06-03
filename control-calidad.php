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

        <h2>Agregar Control de Calidadddd</h2>
            <form method="POST" action="agregar/agregar-controlcalidad.php">
                <label for="nombre_producto">Nombre del Producto:</label>
                <input type="text" id="nombre_producto" name="nombre_producto" required>
                <label for="humedad">Humedad:</label>
                <input type="text" id="humedad" name="humedad" required>
                <label for="peso">Peso:</label>
                <input type="int" id="peso" name="peso" required>
                <label for="fecha_registro">Fecha de Control:</label>
                <input type="date" id="fecha_registro" name="fecha_registro" required>
                <label for="calidad">Resultado:</label>
                <select id="calidad" name="calidad" required>
                    <option value="buena">Buena</option>
                    <option value="mala">Mala</option>
                    <option value="regular">Regular</option>
                </select>
                <label for="tueste">tueste:</label>
                <input type="text" id="tueste" name="tueste" required>
                <input type="submit" value="Agregar Control de Calidad">
            </form>
         <h2>Control de Calidad</h2>
            
              <?php
              require 'conexion.php'; // Incluir el archivo de conexión
              
              // Consulta SQL para recuperar los datos del control de calidad
              $sql = "SELECT * FROM dbo.control_calidad";
              $result = $conn->query($sql);

              // Verificar si se encontraron registros
              if ($result->num_rows > 0) {
                 // Mostrar los datos en una tabla HTML
                 echo "<table>
                 <tr>
                     <th>ID</th>
                     <th>Nombre del Producto</th>
                     <th>Humedad</th>
                     <th>Peso</th>
                     <th>Fecha de Control</th>
                     <th>Resultado</th>
                     <th>Tueste</th>
                 </tr>";
              
                 // Recorrer los resultados de la consulta
                 while ($row = $result->fetch_assoc()) {
                     echo "<tr>
                         <td>".$row["id"]."</td>
                         <td>".$row["nombre_producto"]."</td>
                         <td>".$row["humedad"]."</td>
                         <td>".$row["peso"]."</td>
                         <td>".$row["fecha_registro"]."</td>
                         <td>".$row["calidad"]."</td>
                         <td>".$row["tueste"]."</td>
                         <td><a href=\"eliminar/eliminar-controlcalidad.php?id=".$row["id"]."\" class=\"delete-button\">Eliminar</a></td>
   

                     </tr>";
                 }
                 echo "</table>";
              } else {
    echo "No se encontraron registros en el control de calidad.";
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