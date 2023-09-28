<?php
require_once 'config/Conexion.php';

$nombre = $_POST["nombre"];
$nivel = $_POST["nivel"];


$sql = "SELECT * FROM actividadreading  WHERE idNivelRea='$nivel' and titulo='$nombre'";
$resultado = mysqli_query($conexion, $sql);

if (mysqli_num_rows($resultado) > 0) {
    ?>
        <div class="container">
        <div class="x" id="x2">X</div>
            <span>
                <p id="preguntaActual"></p>

                /

                <p id="totalPregunta"></p>
            </span>
            <h4>Formulario de Preguntas</h4>
            <form id="questionForm"  method="post">

                <?php

                $tituloAnterior = ""; // Variable para almacenar el título anterior
                $imagenAnterior = ""; // Variable para almacenar el audio anterior

                while ($pregunta = mysqli_fetch_assoc($resultado)) {
                    $idActividad = $pregunta["idactividadReading"];
                    $titulo = $pregunta["titulo"];
                    $imagen = $pregunta["img"];
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
                <?php echo '<input type="hidden" name="titulo" value="' . $titulo . '">';
                    ?>
                    <button class="btn" type="button" id="previousButton">Anterior</button>
                    <button class="btn" type="button" id="nextButton">Siguiente</button>
                    <button class="btn" type="submit" id="submitButton" style="display:none;">Enviar respuestas</button>
                </div>
            </form>
        </div>

        <script>
            function compae() {
                function inicializarFormulario2() {
                    const form = document.getElementById("questionForm");
                    const questions = form.querySelectorAll(".question");
                    const nextButton = document.getElementById("nextButton");
                    const previousButton = document.getElementById("previousButton"); // Nuevo botón "Anterior"
                    const submitButton = document.getElementById("submitButton");
                    const preguntaActual = document.getElementById('preguntaActual');
                    const totalPregunta = document.getElementById('totalPregunta');
                    totalPregunta.innerText = questions.length;
                    let currentQuestion = 0;

                    function mostrarPregunta2(index) {
                        questions.forEach((question, i) => {
                            if (i === index) {
                                question.style.display = "flex";
                            } else {
                                question.style.display = "none";
                            }
                        });
                        preguntaActual.innerText = index + 1;
                    }

                    nextButton.addEventListener("click", () => {
                        // Verificar si se ha seleccionado una opción en la pregunta actual
                        const currentRadioButtons = questions[currentQuestion].querySelectorAll('input[type="radio"]');
                        let selectedOption = false;

                        for (let i = 0; i < currentRadioButtons.length; i++) {
                            if (currentRadioButtons[i].checked) {
                                selectedOption = true;
                                break;
                            }
                        }

                        if (!selectedOption) {
                            alert("Debes seleccionar una opción antes de continuar.");
                            return; // No continuar si no se ha seleccionado una opción
                        }

                        questions[currentQuestion].style.display = "none";
                        currentQuestion++;

                        if (currentQuestion < questions.length) {
                            mostrarPregunta2(currentQuestion); // Usar la función para mostrar la siguiente pregunta
                        } else {
                            nextButton.style.display = "none"; // Ocultar el botón "Siguiente"
                            previousButton.style.display = "none"; // Ocultar el botón "Siguiente"
                            submitButton.style.display = "flex"; // Mostrar el botón "Enviar respuestas"
                        }
                    });

                    previousButton.addEventListener("click", () => {
                        if (currentQuestion > 0) {
                            questions[currentQuestion].style.display = "none";
                            currentQuestion--;
                            mostrarPregunta2(currentQuestion); // Usar la función para mostrar la pregunta anterior
                        }
                    });

                    // Mostrar la primera pregunta, ocultar las demás
                    mostrarPregunta2(currentQuestion);
                }

                // Llamar a la función para inicializar el formulario de listening
                inicializarFormulario2();

                // Función para enviar el formulario por Fetch y manejar la respuesta como JSON
                function enviarFormulario2() {
                    // Obtén el formulario por su ID
                    const form = document.getElementById("questionForm");

                    // Configura los datos a enviar
                    const formData = new FormData(form);

                    // URL a la que enviar la solicitud (reemplaza con tu URL)
                    const url = "controller/resultadosReading.php";

                    // Opciones de la solicitud Fetch
                    const options = {
                        method: "POST", // Método HTTP (puedes cambiarlo a GET si es necesario)
                        body: formData, // Datos del formulario
                    };

                    // Realiza la solicitud Fetch
                    fetch(url, options)
                        .then(response => {
                            if (!response.ok) {
                                throw new Error(`Error HTTP: ${response.status}`);
                            }
                            return response.json(); // Parsea la respuesta como JSON
                        })
                        .then(data => {
                            // Maneja la respuesta del servidor como JSON aqu
                            document.getElementById('SOF').innerHTML = '';
                            document.getElementById('SOF').classList.remove('der');
                            var correctas = data.correctas;
                            var incorrectas = data.incorrectas;
                            var totalPreguntas = data.totalPreguntas;
                            var calificacion = data.calificacion;
                            var btnQueryAnswer = document.getElementById('consultarPreguntasCorrectasIncorrectas');
                            var titulo = data.titulo; // Obtener el título de los datos
                            btnQueryAnswer.setAttribute('data-mostrarRTA', titulo);

                            document.getElementById('carga').style.display ='none';
                            mostrarVentanaResult(correctas, incorrectas, totalPreguntas, calificacion);

                        })
                        .catch(error => {
                            // Maneja errores de la solicitud aquí
                            console.error("Error en la solicitud Fetch:", error);
                        });
                }

                // Agrega un evento de escucha al formulario para enviarlo cuando se envíe
                const form = document.getElementById("questionForm");
                form.addEventListener("submit", function(e) {
                    e.preventDefault(); // Evita el envío normal del formulario
                    enviarFormulario2(); // Llama a la función para enviar el formulario
                });
            }

            compae();
        </script>

    <?php
} else {
    echo "No se encontraron actividades de listening.";
}

mysqli_close($conexion);
?>
<script>
    //Codigo para cerrar la ventana
    function hacer() {
        var x_cerrar = document.getElementById('x2');

        x_cerrar.addEventListener('click', () => {
            document.getElementById("SOF").classList.remove("der");
        })
    }

    hacer();
</script>