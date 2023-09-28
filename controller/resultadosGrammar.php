<?php
require_once '../config/Conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $respuestasCorrectas = 0;
    $respuestasIncorrectas = 0;
    $totalPreguntas = 0;
    $calificacion = '';
    $title = $_POST['titulo'];

    // Recorremos todas las respuestas enviadas por el formulario
    foreach ($_POST as $key => $value) {
        if (strpos($key, "respuesta_") !== false) {
            $idActividad = str_replace("respuesta_", "", $key);
            $respuestaUsuario = $value;


            $sql = "SELECT respuestacorrecta FROM actividadesgrammar WHERE ID = $idActividad";
            $query = mysqli_query($conexion, $sql);
            $row = mysqli_fetch_assoc($query);
            $respuestaCorrecta = $row["respuestacorrecta"];

            // Validar la respuesta del usuario
            if ($respuestaUsuario === $respuestaCorrecta) {
                $respuestasCorrectas++;
                $totalPreguntas++;
            } else {
                $respuestasIncorrectas++;
                $totalPreguntas++;
            }

        }
        
    }

    if ($respuestasCorrectas > $respuestasIncorrectas) {
        $calificacion = 'Excelent';
    } else {
        $calificacion = 'Your is Bad';
    }
}

mysqli_close($conexion);

// Retornar lso resultados en json
$respuestaJSON = array(
    "correctas" => $respuestasCorrectas,
    "incorrectas" => 'Incorrect answers ' . $respuestasIncorrectas,
    "totalPreguntas" => 'of ' . $totalPreguntas,
    "calificacion" => $calificacion,
    "titulo" => $title
);

// Convertir el array en formato JSON
echo json_encode($respuestaJSON);
?>