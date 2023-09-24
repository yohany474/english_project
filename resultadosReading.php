<?php
$conexion = mysqli_connect("localhost", "root", "", "ingles");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $resultadoValidacion = array(); // Array para almacenar los resultados de validación

    // Recorremos todas las respuestas enviadas por el formulario
    foreach ($_POST as $key => $value) {
        if (strpos($key, "respuesta_") !== false) {
            $idActividad = str_replace("respuesta_", "", $key);
            $respuestaUsuario = $value;

            // Obtener la respuesta correcta de la base de datos
            $sql = "SELECT respuestacorrecta FROM actividadreading WHERE idactividadReading = $idActividad";
            $query = mysqli_query($conexion, $sql);

            if ($query) {
                $row = mysqli_fetch_assoc($query);
                $respuestaCorrecta = $row["respuestacorrecta"];

                // Validar la respuesta del usuario
                if ($respuestaUsuario === $respuestaCorrecta) {
                    $resultadoValidacion[$idActividad] = "Respuesta correcta";
                } else {
                    $resultadoValidacion[$idActividad] = "Respuesta incorrecta. La respuesta correcta es: $respuestaCorrecta";
                }
            } else {
                $resultadoValidacion[$idActividad] = "Error al consultar la base de datos";
            }
        }
    }
}

mysqli_close($conexion);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Resultado de la Prueba</title>
</head>

<body>
    <h1>Resultado de la Prueba</h1>

    <?php
    // Mostrar los resultados de validación para cada pregunta
    foreach ($resultadoValidacion as $idActividad => $resultado) {
        echo "<p>Pregunta $idActividad: $resultado</p>";
    }
    ?>

</body>

</html>
