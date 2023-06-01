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
                  
            <h1 style="padding: 60px;">Clima Actual en Santa Marta:</h1>
          
            <?php
            require 'conexion.php'; // Incluir el archivo de conexión
            
            $url = 'https://api.openweathermap.org/data/2.5/weather?q=Santa%20Marta,CO&appid=deb331c4352c2f77059e313c3b4ee450';

            // Realiza la solicitud a la API y obtén la respuesta
            $response = file_get_contents($url);

            // Convierte la respuesta JSON en un objeto PHP
            $data = json_decode($response);

            // ...
            // Accede a los datos del clima
            $temperatura_kelvin = $data->main->temp;
            $temperatura_minima = ($data->main->temp_min)-273.15;
            $temperatura_maxima = ($data->main->temp_max)-273.15;
            $descripcion = $data->weather[0]->description;
            $humedad = $data->main->humidity;

            // Convierte la temperatura de Kelvin a Celsius
            $temperatura_celsius = $temperatura_kelvin - 273.15;
            //Supervisa la temperatura


            // Puedes imprimir los datos del clima
            echo "<table>";

            echo "<tr>";
            echo "<th>Temperatura:</th>";
            //Supervisa la temperatura
            if ($temperatura_celsius > 33) {
               echo "<td style='color: red;'>".$temperatura_celsius."°C</td>";
               echo "<td style='color: red;'>Temperaturas demasiado altas: el estrés generado por la temperatura actual puede provocar la caída de flores y frutos prematuros, así como la disminución de la calidad del café.</td>";
            } elseif ($temperatura_celsius < 15) {
              echo "<td style='color: darkblue;'>".$temperatura_celsius."°C</td>";
               echo "<td style='color: darkblue;'>Temperaturas demasiado bajas: Las temperaturas por debajo de los 15 grados Celsius también pueden ser perjudiciales para los cultivos de café. El frío extremo puede dañar los brotes y las hojas, causar la caída de flores y retrasar el desarrollo del café.</td>";
            } else {
               echo "<td>".$temperatura_celsius."°C</td>";
               echo "<td></td>";
            }
            echo "</tr>";
            
            echo "<tr>";
            echo "<th>Temperatura Mínima:</th>";
            echo "<td>".$temperatura_minima."°C</td>";
            echo "</tr>";
            
            echo "<tr>";
            echo "<th>Temperatura Máxima:</th>";
            echo "<td>".$temperatura_maxima."°C</td>";
            echo "</tr>";
            
            echo "<tr>";
            echo "<th>Clima Actual:</th>";
            echo "<td>".$descripcion."</td>";
            echo "</tr>";
            
            echo "<tr>";
            echo "<th>Humedad:</th>";
            echo "<td>".$humedad."%</td>";
            echo "</tr>";
            
            echo "</table>";
            


            ?>                  
     </section>
</main>
    <footer>
        <p>Todos los derechos reservados &copy; <?php echo date('Y'); ?> Finca Grano Quemado.</p>
    </footer>
</body>
</html>
