// Función para obtener una letra a partir de un número (A = 1, B = 2, ...)
function obtenerLetraDesdeNumeroG(numero) {
  return String.fromCharCode(65 + numero - 1); // 65 es el código ASCII de 'A'
}

// Función para generar los contenedores de opciones con etiquetas
function generarContenedoresDeOpcionesG(numeroOpciones, preguntaIndex) {
  let opcionesHTML = "";
  for (let i = 1; i <= numeroOpciones; i++) {
    const letra = obtenerLetraDesdeNumeroG(i);
    opcionesHTML += `
 
        <div class="itemForm">
          <label for="pregunta${preguntaIndex}_opcion${letra}">Opción ${letra}</label>
          <input type="text" name="pregunta${preguntaIndex}_opcion${letra}" placeholder="Escriba aquí la opción ${letra}" class='double'><br>
        </div>
     
    `;
  }
  return opcionesHTML;
}

// Función para generar los contenedores de preguntas y opciones
function generarContenedoresDePreguntasYOpcionesG() {
  const cantidadPreguntas = parseInt(
    document.getElementById("cantidadPreguntasG").value
  );
  const contenedorPreguntas = document.getElementById(
    "contenedorPreguntasG"
  );

  if(cantidadPreguntas > 5){

    alert("La cantidad de preguntas maxima es 5");
    document.getElementById('cantidadPreguntasG').value =0;
    exit;

  }

  let preguntasHTML = "";
  for (let i = 1; i <= cantidadPreguntas; i++) {
    preguntasHTML += `
            <div class="rowWrap">
              <div class="itemForm">
                <h4>Pregunta ${i}</h4>
                <label for="">Ingrese su pregunta</label>
                <input type="text" name="pregunta${i}" placeholder="Escriba aquí su pregunta"><br>
              </div>
            </div>

            <div class="rowWrap">
              <div class="itemForm">
                <label for="">
                  Seleccione cantidad de opciones <br />
                  para la pregunta ${i}
                </label>
                <select id="cantidadOpcionesG${i}" name="cantidadOpciones${i}">
                  <option value="0">Seleccione la cantidad de opciones</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                </select>
              </div>

              <div class="itemForm">
                <label for="">
                  Seleccione la opción correcta <br />
                  para la pregunta ${i}
                </label>
                <select id="rtaCorrectaG${i}" name="rta_correcta${i}">
                  <option value="0">Seleccione la respuesta correcta</option>
                  <!-- Las opciones para la respuesta correcta se generarán automáticamente -->
                </select>
              </div>
            </div>

            <div class="rowWrap column" id="opcionesContainerG${i}">

              <!-- Aquí se generarán dinámicamente los contenedores de opciones -->
            </div>
          `;
  }

  contenedorPreguntas.innerHTML = preguntasHTML;

  // Event listener para generar los contenedores de opciones cuando el usuario elige la cantidad de opciones
  for (let i = 1; i <= cantidadPreguntas; i++) {
    document
      .getElementById(`cantidadOpcionesG${i}`)
      .addEventListener("change", function () {
        const cantidadOpciones = parseInt(this.value);
        const opcionesContainer = document.getElementById(
          `opcionesContainerG${i}`
        );
        opcionesContainer.innerHTML = generarContenedoresDeOpcionesG(
          cantidadOpciones,
          i
        );

        // Generar las opciones para la respuesta correcta
        const rtaCorrectaSelect = document.getElementById(
          `rtaCorrectaG${i}`
        );
        rtaCorrectaSelect.innerHTML = ""; // Limpiar las opciones anteriores

        for (let j = 1; j <= cantidadOpciones; j++) {
          const letra = obtenerLetraDesdeNumero(j);
          rtaCorrectaSelect.innerHTML += `<option value="${letra}">${letra}</option>`;
        }
      });
  }
}

// Event listener para generar los contenedores cuando el usuario elige la cantidad de preguntas
document
  .getElementById("cantidadPreguntasG")
  .addEventListener("input", generarContenedoresDePreguntasYOpcionesG);

generarContenedoresDePreguntasYOpcionesG();
