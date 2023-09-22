<?php
require_once 'config/Conexion.php';
// Consulta SQL para obtener todas las actividades de listening
$sql = "SELECT * FROM actividadlistening";
$resultado = mysqli_query($conexion, $sql);

if (mysqli_num_rows($resultado) > 0) {
    ?>

    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/listening.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200;300&display=swap" rel="stylesheet">
        <!-- MEDIDAS RESPONSIVE -->
        <link rel="stylesheet" href="assets/css/420px.css" media="(max-width: 420px)">
        <link rel="stylesheet" href="assets/css/720px.css" media="(max-width: 720px)">
        <link rel="stylesheet" href="assets/css/1366x768.css" media="(min-width: 1366px)">
        <title>Encuesta de Listening</title>
    </head>

    <body>
        <main class="body">
            <header class="header-listening">
                <h1>
                    Listening
                </h1>
                <p>
                    3/8
                </p>
                <button id="close-button">X</button>
            </header>

            <form action="resultadosListening.php" method="POST">
                <main class="main-listening">
                    <div id="preguntas-container">
                        <?php
                        $tituloAnterior = ""; // Variable para almacenar el título anterior
                        $audioAnterior = ""; // Variable para almacenar el audio anterior

                        while ($pregunta = mysqli_fetch_assoc($resultado)) {
                            $idActividad = $pregunta["idactividadlistening"];
                            $titulo = $pregunta["titulo"];
                            $audio = $pregunta["audio"];
                            $preguntaa = $pregunta["pregunta"];
                            $opciones = explode('/', $pregunta["opciones"]);

                            // Comprobar si el título y el audio son diferentes del anterior
                            if ($titulo !== $tituloAnterior || $audio !== $audioAnterior) {
                                // Cerrar el div anterior si no es la primera actividad
                                if ($tituloAnterior !== "") {
                                    echo '</div>';
                                }

                                $tituloAnterior = $titulo;
                                $audioAnterior = $audio;

                                // Mostrar el título y el audio
                                echo '<h2>Titulo de la actividad: ' . $titulo . '</h2>';
                                echo '<audio controls>';
                                echo '<source src="' . $audio . '" type="audio/mpeg">';
                                echo 'Tu navegador no soporta el elemento de audio.';
                                echo '</audio>';
                                echo '<div>'; // Iniciar un nuevo conjunto de preguntas
                            }

                            // Agregar la pregunta al formulario actual
                            echo '<div class="pregunta">';
                            echo '<div class="sub-pregunta">';
                            echo '<p>' . $preguntaa . '</p>';
                            echo '</div>';

                            foreach ($opciones as $key => $opcion) {
                                $opcionesLabel = chr(65 + $key); // a), b), c), ...
                                echo '<div class="respuesta">';
                                echo '<input type="radio" name="respuesta_' . $idActividad . '" value="' . $opcionesLabel . '"> ' . $opcionesLabel . ') ' . $opcion . '';
                                echo '</div>';
                            }
                            echo '</div>';
                        }
                        ?>
                    </div>
                    <div id="next-button" class="button">Siguiente</div>
                </main>
                <input type="submit" class="button" name="validar" value="Terminar prueba">
            </form>
        </main>
        <script src="assets/js/listening.js"></script>
    </body>

    </html>

<?php
} else {
    echo "No se encontraron actividades de listening.";
}

mysqli_close($conexion);
?>
