<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>procesar respuesta </title>
</head>
<body>
<?php
// Establecer la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inglesjuego";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar si la conexión es exitosa
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtener el ID del ejercicio desde el formulario
    $ejercicioID = $_POST["ejercicioID"];

    // Consulta para obtener las respuestas correctas del ejercicio
    $sqlRespuestasCorrectas = "SELECT Palabra_Clave FROM Palabras_Clave WHERE Ejercicio_ID = $ejercicioID ORDER BY Posición";
    $resultRespuestasCorrectas = $conn->query($sqlRespuestasCorrectas);

    // Obtener las respuestas correctas en un array
    $respuestasCorrectas = [];
    while ($rowRespuestaCorrecta = $resultRespuestasCorrectas->fetch_assoc()) {
        $respuestasCorrectas[] = $rowRespuestaCorrecta["Palabra_Clave"];
    }

    // Obtener las respuestas enviadas por el estudiante desde el formulario
    $respuestasEnviadas = $_POST["respuestas"];

    // Calcular la calificación
    $calificacion = calcularCalificacion($respuestasCorrectas, $respuestasEnviadas);

    // Mostrar la calificación
    echo '<h2>Calificación</h2>';
    echo '<p>Tu calificación: ' . $calificacion . '%</p>';

    // Puedes proporcionar retroalimentación personalizada aquí según la calificación obtenida
    if ($calificacion >= 90) {
        echo '<p>Retroalimentación: Excelente trabajo, has respondido correctamente la mayoría de las palabras clave.</p>';
    } elseif ($calificacion >= 70) {
        echo '<p>Retroalimentación: Buen trabajo, puedes mejorar en algunas respuestas.</p>';
    } else {
        echo '<p>Retroalimentación: Necesitas mejorar en varias respuestas. Revisa las palabras clave y vuelve a intentarlo.</p>';
    }
}

// Función para calcular la calificación
function calcularCalificacion($respuestasCorrectas, $respuestasEnviadas) {
    $totalPalabrasClave = count($respuestasCorrectas);
    $respuestasCorrectasCount = 0;

    foreach ($respuestasCorrectas as $posicion => $respuestaCorrecta) {
        if (isset($respuestasEnviadas[$posicion + 1]) && strtolower($respuestaCorrecta) === strtolower($respuestasEnviadas[$posicion + 1])) {
            $respuestasCorrectasCount++;
        }
    }

    return ($respuestasCorrectasCount / $totalPalabrasClave) * 100;
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
</body>
</html>