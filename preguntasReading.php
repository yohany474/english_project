<?php
require_once 'config/Conexion.php';

// Consulta SQL para obtener todas las actividades de listening
$sql = "SELECT * FROM actividadreading";
$resultado = mysqli_query($conexion, $sql);

if (mysqli_num_rows($resultado) > 0) {
    ?>

    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/preguntasListening.css">
        <title>Preguntas Listening</title>
    </head>

    <body>

        <div class="container">
            <span>
                <p id="preguntaActual"></p>

                /

                <p id="totalPregunta"></p>
            </span>
            <h4>Formulario de Preguntas</h4>
            <form id="questionForm" action="resultadosListening.php" method="post">

                <?php

                $tituloAnterior = ""; // Variable para almacenar el título anterior
                $imagenAnterior = ""; // Variable para almacenar el audio anterior

                while ($pregunta = mysqli_fetch_assoc($resultado)) {
                    $idActividad = $pregunta["idactividadReading"];
                    $titulo = $pregunta["titulo"];
                    $imagen = $pregunta["imagen"];
                    $preguntaa = $pregunta["pregunta"];
                    $opciones = explode('/', $pregunta["opciones"]);

                    // Comprobar si el título y la imagen son diferentes del anterior
                    if ($titulo !== $tituloAnterior || $imagen !== $imagenAnterior) {
                        // Cerrar el div anterior si no es la primera actividad
                        if ($tituloAnterior !== "") {
                            echo '</div>';
                        }

                        $tituloAnterior = $titulo;
                        $imagenAnterior = $imagen;

                        // Mostrar el título y la imagen
                        echo '<h5>Titulo de la actividad: ' . $titulo . '</h5>';
                        echo '<img src="' . $imagen . '" width="20px" />';
                        echo '<div>'; // Iniciar un nuevo conjunto de preguntas
                    }

                    // Agregar la pregunta al formulario actual
                    echo '<div class="question">';
                    echo '<audio src=""></audio>';
                    echo '<label for="pregunta1">';
                    echo $preguntaa;
                    echo '</label>';

                    foreach ($opciones as $key => $opcion) {
                        $opcionesLabel = chr(65 + $key); // a), b), c), ...
                        echo '<label class="div1">';
                        echo '<input type="radio" name="respuesta_' . $idActividad . '" value="' . $opcionesLabel . '">';
                        echo '<div class="checkmark"></div>';
                        echo '<label for="pregunta1_rojo">';
                        echo $opcionesLabel . ') ' . $opcion . '';
                        echo '</label>';
                        echo '</label>';
                    }

                    echo '</div>';
                }
                ?>

                <div class="btn-container">
                    <button class="btn" type="button" id="previousButton">Anterior</button>
                    <button class="btn" type="button" id="nextButton">Siguiente</button>
                    <button class="btn" type="submit" id="submitButton" style="display:none;">Enviar respuestas</button>
                </div>
            </form>
        </div>

        <script src="assets/js/validarListening.js"></script>

    </body>

    </html>

    <?php
} else {
    echo "No se encontraron actividades de listening.";
}

mysqli_close($conexion);
?>
