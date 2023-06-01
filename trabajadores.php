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


        <h2>Agregar nuevo trabajador</h2>
            <form action="agregar/agregar-trabajador.php" method="POST">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="apellido" required>
                <label for="sexo">Sexo:</label>
                <input type="text" id="sexo" name="sexo" required>
                <label for="puesto">Puesto:</label>
                <input type="text" id="puesto" name="puesto" required>
                <label for="direccion">Direccion:</label>
                <input type="text" id="direccion" name="direccion" required>      
                <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required>
                <label for="salario">Salario:</label>
                <input type="number" id="salario" name="salario" required>
                <label for="fecha_inicio">Fecha de Contratación:</label>
                <input type="date" id="fecha_inicio" name="fecha_inicio" required>
                <label for="fecha_fin">Fecha de Finalizacion del Contrato:</label>
                <input type="date" id="fecha_fin" name="fecha_fin" required>
                <label for="permisos">Permisos:</label>
                <input type="text" id="permisos" name="permisos" required>
                <label for="certificaciones">Certificaciones:</label>
                <input type="text" id="certificaciones" name="certificaciones" required>
                <input type="submit" valu=e"Agregar">
            </form>
            <h2>Trabajadores</h2>
          
              <?php
              require 'conexion.php'; // Incluir el archivo de conexión

              // Consulta SQL para recuperar los datos de la tabla de trabajadores
              $sql = "SELECT * FROM trabajadores";
              $result = $conn->query($sql);

              // Verificar si se encontraron registros
              if ($result->num_rows > 0) {
                  // Mostrar los datos en una tabla HTML
                  echo "<table>
                  <tr>
                      <th>ID</th>
                      <th>Nombre</th>
                      <th>Apellido</th>
                      <th>Sexo</th>
                      <th>Puesto</th>
                      <th>Direccion</th>
                      <th>Fecha de Nacimiento</th>
                      <th>Salario</th>
                      <th>Fecha de Inicio</th>
                     <th>Fecha de Finalizacion</th>
                     <th>Permisos</th>
                     <th>Certificaciones</th>
                  </tr>";
              
                  // Recorrer los resultados de la consulta
                  while ($row = $result->fetch_assoc()) {
                      echo "<tr>
                         <td>".$row["id"]."</td>
                          <td>".$row["nombre"]."</td>
                          <td>".$row["apellido"]."</td>
                          <td>".$row["sexo"]."</td>
                          <td>".$row["puesto"]."</td>
                          <td>".$row["direccion"]."</td>
                          <td>".$row["fecha_nacimiento"]."</td>
                          <td>".$row["salario"]."</td>
                          <td>".$row["fecha_inicio"]."</td>
                          <td>".$row["fecha_fin"]."</td>
                          <td>".$row["permisos"]."</td>
                          <td>".$row["certificaciones"]."</td>
                      </tr>";
                  }
                  echo "</table>";
              } else {
                  echo "No se encontraron registros de trabajadores.";
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
