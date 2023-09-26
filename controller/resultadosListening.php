<?php
require_once '../config/Conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $resultadoValidacion = array(); // Array para almacenar los resultados de validación
    $respuestasCorrectas = 0;
    $respuestasIncorrectas = 0;

    // Recorremos todas las respuestas enviadas por el formulario
    foreach ($_POST as $key => $value) {
        if (strpos($key, "respuesta_") !== false) {
            $idActividad = str_replace("respuesta_", "", $key);
            $respuestaUsuario = $value;

            // Obtener la respuesta correcta de la base de datos
            $sql = "SELECT respuestacorrecta FROM actividadlistening WHERE idactividadlistening = $idActividad";
            $query = mysqli_query($conexion, $sql);
            $row = mysqli_fetch_assoc($query);
            $respuestaCorrecta = $row["respuestacorrecta"];

            // Validar la respuesta del usuario
            if ($respuestaUsuario === $respuestaCorrecta) {
                $resultadoValidacion[$idActividad] = "Respuesta correcta";
                $respuestasCorrectas++;
            } else {
                $resultadoValidacion[$idActividad] = "Respuesta incorrecta. La respuesta correcta es: $respuestaCorrecta";
                $respuestasIncorrectas++;
            }
        }
    }
}

mysqli_close($conexion);

// Crear un array con el número de respuestas correctas e incorrectas
$respuestaJSON = array(
    "respuestas" => 'Respuestas correctas' .$respuestasCorrectas .'<br>Respuestas incorrectas'. $respuestasIncorrectas
);

// Convertir el array en formato JSON
echo json_encode($respuestaJSON);
?>
