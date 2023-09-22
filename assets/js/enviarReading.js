// Función para obtener una letra a partir de un número (A = 1, B = 2, ...)
function obtenerLetraDesdeNumero(numero) {
  return String.fromCharCode(65 + numero - 1); // 65 es el código ASCII de 'A'
}

// Función para generar los contenedores de opciones con etiquetas
function generarContenedoresDeOpciones(numeroOpciones, preguntaIndex) {
  let opcionesHTML = "";
  for (let i = 1; i <= numeroOpciones; i++) {
    const letra = obtenerLetraDesdeNumero(i);
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
function generarContenedoresDePreguntasYOpciones() {
  const cantidadPreguntasReading = parseInt(
    document.getElementById("cantidadPreguntasR").value
  );
  const contenedorPreguntas = document.getElementById(
    "contenedorPreguntasR"
  );


  if(cantidadPreguntasReading > 5){

    alert("La cantidad de preguntas maxima es 5");
    document.getElementById('cantidadPreguntasR').value =0;
    exit;

  }

  let preguntasHTML = "";
  for (let i = 1; i <= cantidadPreguntasReading; i++) {
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
                <select id="cantidadOpcionesR${i}" name="cantidadOpciones${i}">
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
                <select id="rtaCorrectaR${i}" name="rta_correcta${i}">
                  <option value="0">Seleccione la respuesta correcta</option>
                  <!-- Las opciones para la respuesta correcta se generarán automáticamente -->
                </select>
              </div>
            </div>

            <div class="rowWrap column" id="opcionesContainerR${i}">

              <!-- Aquí se generarán dinámicamente los contenedores de opciones -->
            </div>
          `;
  }

  contenedorPreguntas.innerHTML = preguntasHTML;

  // Event listener para generar los contenedores de opciones cuando el usuario elige la cantidad de opciones
  for (let i = 1; i <= cantidadPreguntasReading; i++) {
    document
      .getElementById(`cantidadOpcionesR${i}`)
      .addEventListener("change", function () {
        const cantidadOpciones = parseInt(this.value);
        const opcionesContainer = document.getElementById(
          `opcionesContainerR${i}`
        );
        opcionesContainer.innerHTML = generarContenedoresDeOpciones(
          cantidadOpciones,
          i
        );

        // Generar las opciones para la respuesta correcta
        const rtaCorrectaSelect = document.getElementById(
          `rtaCorrectaR${i}`
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
  .getElementById("cantidadPreguntasR")
  .addEventListener("input", generarContenedoresDePreguntasYOpciones);

generarContenedoresDePreguntasYOpciones();

// Funcion para mostrar la ventana Reading
document.getElementById('Read').addEventListener('click', ()=>{

  document.getElementById('contenedorVentanaReading').classList.add('ventanaVisible');
  
})

document.getElementById('cerrarVentanaReading').addEventListener('click', ()=>{
  document.getElementById('contenedorVentanaReading').classList.remove('ventanaVisible');
})
