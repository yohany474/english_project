<?php
require_once 'config/Conexion.php';



$sql = "SELECT * FROM actividadlistening  WHERE idNivel = 3 and titulo = 'Exploring Colombian Culinary Traditions'";
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

            <form id="questionForm" action="" method="post">

                <?php

                $audio_actual = ''; // Variable para almacenar el audio actual
                $titulo_actual = '';

                while ($pregunta = mysqli_fetch_assoc($resultado)) {

                    $idActividad = $pregunta["idactividadlistening"];
                    $audio_pregunta = 'uploads/' . $pregunta["audio"] . '.mp3'; // Obtener el audio de la preguntaactual
                    $tituloo = $pregunta['titulo'];
                    $preguntaa = $pregunta["pregunta"];
                    $opciones = explode('/', $pregunta["opciones"]);

                    // Si el audio actual es diferente al de la pregunta actual, actualízalo
                    if ($audio_pregunta != $audio_actual) {
                        echo '<audio id="audio" controls src="' . $audio_pregunta . '"></audio>';
                        $audio_actual = $audio_pregunta;
                    }

                    if ($tituloo != $titulo_actual) {
                        echo '<h2>' . $pregunta['titulo'] . '</h2>';
                        $titulo_actual = $tituloo;
                    }


                    ?>
                    <div class="question">
                        <label for="pregunta1">
                            <?php echo $preguntaa ?>
                        </label>

                        <?php

                        foreach ($opciones as $key => $opcion) {
                            $opcionesLabel = chr(65 + $key); // a), b), c), ...
                
                            ?>
                            <label class="div1">
                                <?php
                                echo '<input type="radio" name="respuesta_' . $idActividad . '" value="' . $opcionesLabel . '">';
                                ?>
                                <div class="checkmark"></div>
                                <label for="pregunta1_rojo">
                                    <?php
                                    echo $opcionesLabel . ') ' . $opcion . '';
                                    ?>
                                </label>
                            </label>
                            <?php
                        }
                        ?>
                    </div>
                    <?php
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