const preguntasContainer = document.getElementById("preguntas-container");
const nextButton = document.getElementById("next-button");
let currentPregunta = 0;
const preguntas = document.querySelectorAll(".pregunta");

nextButton.addEventListener("click", () => {
  if (currentPregunta < preguntas.length - 1) {
    preguntas[currentPregunta].style.display = "none";
    currentPregunta++;
    preguntas[currentPregunta].style.display = "block";
  }
});

// Oculta todas las preguntas excepto la primera al inicio
for (let i = 1; i < preguntas.length; i++) {
  preguntas[i].style.display = "none";
}
