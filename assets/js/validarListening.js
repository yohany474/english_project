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
form.addEventListener("submit", function (e) {
    e.preventDefault(); // Evita el envío normal del formulario
    enviarFormulario(); // Llama a la función para enviar el formulario
});
