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
        <form id="questionForm" method="post">
            <?php
            $tituloAnterior = "";
            $textoAnterior = "";
            $instruccionAnterior = "";
            $contador = 0;

            while ($pregunta = mysqli_fetch_assoc($resultado)) {
                $idActividad = $pregunta["idactividadReading"];
                $titulo = $pregunta["titulo"];
                $preguntaa = $pregunta["pregunta"];
                $instruccion = $pregunta["instrucciones"];
                $texto = $pregunta["texto"];
                $opciones = explode('/', $pregunta["opciones"]);

                if ($titulo !== $tituloAnterior) {
                    $tituloAnterior = $titulo;
                    echo '<h2 class="contenidoActividad">' . $titulo . '</h2>';
                }

                if ($instruccion !== $instruccionAnterior) {
                    echo '<p class="contenidoActividad" style="font-size: 15px; font-weight: 350; margin-bottom: 1em;">' . $instruccion . '</p>';
                    $instruccionAnterior = $instruccion;
                }

                if ($texto !== $textoAnterior) {
                    echo '<p class="contenidoActividad" style="font-size: 14px; font-weight: 300; text-align: justify; margin-bottom: 1em;">' . $texto . '</p>';
                    $textoAnterior = $texto;
                }

                echo '<div class="question">';
                echo '<label for="pregunta1">';
                echo $preguntaa;
                echo '</label>';

                foreach ($opciones as $key => $opcion) {
                    $opcionesLabel = chr(65 + $key); // a), b), c), ...
                    echo '
                    <article class="radio-container">
                        <input class="radio-input" type="radio" name="respuesta_' . $idActividad . '" value="' . $opcionesLabel . '">
                        <label class="radio-label" style="font-size: 15.4px; font-weight: 350;">' . $opcionesLabel . ') ' . $opcion . '</label>
                    </article>
                    ';

                }

                echo '</div>';
            }
            ?>

            <div class="btn-container">
                <?php echo '<input type="hidden" name="titulo" value="' . $titulo . '">'; ?>
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
                        const contenidoActividad = document.querySelectorAll('.contenidoActividad');
                        contenidoActividad.forEach(item => {
                            item.style.display = 'none';
                        });
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

    function mostrarTexto() {
        document.getElementById('container').innerHTML = '';
        document.getElementById('contenidoTexto').style.display = 'flex';
    }
    function cerrarTexto() {
        document.getElementById('sofes').classList.remove('der');
    }

</script>