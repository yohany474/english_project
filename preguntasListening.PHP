<?php
require_once 'config/Conexion.php';

$nombre = $_POST["nombre"];
$nivel = $_POST["nivel"];


$sql = "SELECT * FROM actividadlistening  WHERE idNivel = '$nivel' and titulo = '$nombre'";
$resultado = mysqli_query($conexion, $sql);
if ($resultado) {
    if (mysqli_num_rows($resultado) > 0) {
?>


        <div class="container">
            <div class="x" id="x2">X</div>
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

        <script>
            function compae() {
                function inicializarFormulario() {
                    const form = document.getElementById("questionForm");
                    const questions = form.querySelectorAll(".question");
                    const nextButton = document.getElementById("nextButton");
                    const previousButton = document.getElementById("previousButton"); // Nuevo botón "Anterior"
                    const submitButton = document.getElementById("submitButton");
                    const preguntaActual = document.getElementById('preguntaActual');
                    const totalPregunta = document.getElementById('totalPregunta');
                    totalPregunta.innerText = questions.length;
                    let currentQuestion = 0;

                    function mostrarPregunta(index) {
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
                            mostrarPregunta(currentQuestion); // Usar la función para mostrar la siguiente pregunta
                        } else {
                            nextButton.style.display = "none"; // Ocultar el botón "Siguiente"
                            previousButton.style.display = "none"; // Ocultar el botón "Siguiente"
                            document.getElementById('audio').style.display = "none"; // Ocultar el botón "Siguiente"
                            submitButton.style.display = "flex"; // Mostrar el botón "Enviar respuestas"
                        }
                    });

                    previousButton.addEventListener("click", () => {
                        if (currentQuestion > 0) {
                            questions[currentQuestion].style.display = "none";
                            currentQuestion--;
                            mostrarPregunta(currentQuestion); // Usar la función para mostrar la pregunta anterior
                        }
                    });

                    // Mostrar la primera pregunta, ocultar las demás
                    mostrarPregunta(currentQuestion);
                }

                // Llamar a la función para inicializar el formulario de listening
                inicializarFormulario();

                // Función para enviar el formulario por Fetch y manejar la respuesta como JSON
                function enviarFormulario() {
                    // Obtén el formulario por su ID
                    const form = document.getElementById("questionForm");

                    // Configura los datos a enviar
                    const formData = new FormData(form);

                    // URL a la que enviar la solicitud (reemplaza con tu URL)
                    const url = "controller/resultadosListening.php";

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
                            alert(data.respuestas);
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
                    enviarFormulario(); // Llama a la función para enviar el formulario
                });
            }

            compae();
        </script>

<?php
    } else {
        echo "No se encontraron actividades de listening.";
    }
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