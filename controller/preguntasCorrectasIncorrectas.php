<?php
require_once '../config/Conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener el título del formulario POST
    $title = $_POST['titulo'];
}



// Consulta SQL
$sql = "SELECT * FROM actividadlistening WHERE titulo = '$title'";
$resultado = mysqli_query($conexion, $sql);

if ($resultado) {
    if (mysqli_num_rows($resultado) > 0) {
        while ($pregunta = mysqli_fetch_assoc($resultado)) {
            // Obtener datos de la pregunta
            $idActividad = $pregunta["idactividadlistening"];
            $preguntaa = $pregunta["pregunta"];
            $opciones = explode('/', $pregunta["opciones"]);
            $respuesta_correcta = $pregunta["respuestacorrecta"];

            // Mostrar la pregunta
            echo "<h4>$preguntaa</h4>";
            echo "<ul>";

            // Iterar a través de las opciones
            foreach ($opciones as $key => $opcion) {
                $opcionesLabel = chr(65 + $key); // a), b), c), ...

                // Comprobar si la opción actual es la respuesta correcta
                $es_respuesta_correcta = ($opcionesLabel == $respuesta_correcta);
                $color = $es_respuesta_correcta ? '#40C040' : '#D70014';
                ?>
               
                <li style='color: <?php echo $color ?>'> <?php echo $opcionesLabel ?>) <?php echo $opcion ?></li>
                <?php 
            }

            echo "</ul>";
        }
    } else {
        // No se encontraron preguntas
        echo "No se encontraron preguntas para este título.";
    }
} else {
    // Error en la consulta SQL
    echo "Error en la consulta: " . mysqli_error($conexion);
}
?>
