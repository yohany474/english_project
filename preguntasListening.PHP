<?php
require_once 'config/Conexion.php';

$nombre = $_POST["nombre"];
$nivel = $_POST["nivel"];


$sql = "SELECT * FROM actividadlistening  WHERE idNivel = '$nivel' and titulo = '$nombre'";
$resultado = mysqli_query($conexion, $sql);
if ($resultado) {
    if (mysqli_num_rows($resultado) > 0) {
        ?>



        <!-- Resultados  -->
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
                $descripcion_audio_actual = '';

                while ($pregunta = mysqli_fetch_assoc($resultado)) {

                    $idActividad = $pregunta["idactividadlistening"];
                    $audio_pregunta = 'uploads/' . $pregunta["audio"];
                    $descripcion_audio_pregunta = $pregunta["descripcionaudio"];

                    // Verificar si $audio_pregunta no termina con '.mp3' y agregarlo si es necesario
                    if (substr($audio_pregunta, -4) !== '.mp3') {
                        $audio_pregunta .= '.mp3';
                    }
                    $tituloo = $pregunta['titulo'];
                    $preguntaa = $pregunta["pregunta"];
                    $opciones = explode('/', $pregunta["opciones"]);

                    // Si el audio actual es diferente al de la pregunta actual, actualízalo
                    if ($audio_pregunta != $audio_actual) {
                        // Imprime el elemento <audio> solo si cambia el audio
                        echo '<audio id="audio" controls src="' . $audio_pregunta . '"></audio>';
                        $audio_actual = $audio_pregunta;
                    }



                    if ($tituloo != $titulo_actual) {
                        echo '<h2>' . $pregunta['titulo'] . '</h2>';
                        $titulo_actual = $tituloo;
                    }
                    // Si la descripcion_audio actual es diferente al de la pregunta actual, actualízalo
                    if ($descripcion_audio_pregunta != $descripcion_audio_actual) {
                        // Imprime el elemento <audio> solo si cambia el audio
                        echo '<P id="contenidoTexto" style="display: none;">
                    ' . $descripcion_audio_pregunta . '  
                    <button class="btnR" type="button" onclick="cerrarTexto()">Cancelar</button>
                    </P>';
                        $descripcion_audio_actual = $descripcion_audio_pregunta;
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
                                echo '<input class="input" type="radio" name="respuesta_' . $idActividad . '" value="' . $opcionesLabel . '">';
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
                <?php ?>


                <div class="btn-container">
                    <?php echo '<input type="hidden" name="titulo" value="' . $tituloo . '">';
                    ?>
                    <button class="btn" type="button" id="previousButton">Previous</button>
                    <button class="btn" type="button" id="nextButton">Next</button>
                    <button id="verDescrip" class="btn" type="button" onclick="mostrarTexto()">Description</button>
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
                            document.getElementById('verDescrip').style.display = 'none';
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

                    document.getElementById('carga').style.display = 'flex';
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
                            document.getElementById('SOF').innerHTML = '';
                            document.getElementById('SOF').classList.remove('der');
                            var correctas = data.correctas;
                            var incorrectas = data.incorrectas;
                            var totalPreguntas = data.totalPreguntas;
                            var calificacion = data.calificacion;
                            var btnQueryAnswer = document.getElementById('consultarPreguntasCorrectasIncorrectas');
                            var titulo = data.titulo; // Obtener el título de los datos
                            btnQueryAnswer.setAttribute('data-mostrarRTA', titulo);

                            document.getElementById('carga').style.display = 'none';
                            mostrarVentanaResult(correctas, incorrectas, totalPreguntas, calificacion);

                        })
                        .catch(error => {
                            // Maneja errores de la solicitud aquí
                            console.error("Error en la solicitud Fetch:", error);
                        });
                }

                // Agrega un evento de escucha al formulario para enviarlo cuando se envíe
                const form = document.getElementById("questionForm");
                form.addEventListener("submit", function (e) {
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
    function mostrarTexto() {

        if(confirmacion()){
            const questions = document.querySelectorAll(".question");
        questions.forEach((question, i) => {
            question.style.display = "none";
        });

        document.getElementById('verDescrip').style.display = 'none';
        document.getElementById('contenidoTexto').style.display = 'flex';
        document.getElementById('previousButton').style.display = 'none';
        document.getElementById('nextButton').style.display = 'none';
        }


    }
    function cerrarTexto() {
        document.querySelector('.container').innerHTML = '';
        document.getElementById('SOF').classList.remove('der');
    }
    function confirmacion(){
        if(confirm("Al ver la descripcion perderas el progreso de la evaluacion. Deseas continuar ?")){
            return true;
        }else{
            return false;
        }
    }

</script>