var llamar = document.getElementById('dasg');
var ventana_esta = document.getElementById('miss');
var cerrar = document.getElementById('dasr');


llamar.addEventListener('click', () => {
   ventana_esta.classList.add('samon');
})

cerrar.addEventListener('click', () => {
   ventana_esta.classList.remove('samon');
})

var primer = document.getElementById("remplazar");
var second = document.getElementById("senador");


$(document).ready(function () {
   $(".totem").on("click", function () {
      var valor = $(this).data("valor");
      var lugar = document.getElementById("Title")

      if (valor == 1) {
         lugar.innerHTML = "Listening";
      } else if (valor == 2) {
         lugar.innerHTML = "Reading";
      } else if (valor == 3) {
         lugar.innerHTML = "Writing";
      } else if (valor == 4) {
         lugar.innerHTML = "Grammar";
      }

      primer.classList.add('regular');

      $.ajax({
         url: "php/TraerActividades.php",
         method: "POST",
         data: { valor: valor },
         success: function (response) {
            second.classList.add('resolver');
            $('#llegar-activi').html(response);
         },
         error: function (xhr, status, error) {
            primer.classList.remove('regular');
            console.error(error);
         }
      });
   });
});

//QUITARLE LOS ESTILOS DE OCULTO A LOS ESPACIOS
var temas_botones = document.getElementById('limpiar');

temas_botones.addEventListener('click', () => {
   second.classList.remove('resolver');
   primer.classList.remove('regular');
})





// Funcion para ventana de resultados

function mostrarVentanaResult(correctas, incorrectas, totalPreguntas, calificacion) {
   // document.getElementById('body').style.overflow = 'hidden';
   document.getElementById('respuestasCorrectas').innerText = correctas;
   document.getElementById('totalPreguntas').innerText = totalPreguntas;
   document.getElementById('calification').innerText = calificacion;
   document.getElementById('respuestasIncorrectas').innerText = incorrectas;
   document.getElementById('ventanaResult').classList.add('ventanaResultVisible');

}
function ocultarVentanaResult() {
   document.getElementById('ventanaResult').classList.remove('ventanaResultVisible');
}


// Funcion para traer las respuestas correctas e incorrectas
function mostrarRespuestasCorrecta() {
   // Configurar los datos del formulario

   var btnQueryAnswer = document.getElementById('consultarPreguntasCorrectasIncorrectas');
   var titulo = btnQueryAnswer.getAttribute('data-mostrarRTA', titulo);; // Obtener el título de los datos



   
   const formData = new FormData();
   formData.append('titulo', titulo);

   // Configurar las opciones de la solicitud
   const opciones = {
      method: 'POST',
      body: formData
   };

   // Realizar la solicitud utilizando fetch
   fetch('controller/preguntasCorrectasIncorrectas.php', opciones)
      .then((response) => {
         if (!response.ok) {
            throw new Error('Error en la solicitud');
         }
         return response.text(); // Suponiendo que el servidor devuelve una respuesta de texto
      })
      .then((data) => {
         // Insertar la respuesta en el elemento con el id 'contenedorRespuestasServidor'
         document.getElementById('contenedorRespuestasServidor').innerHTML = data;

         // Agregar una clase para mostrar la ventana de resultados
         document.getElementById('respuestasCorrectasInco').classList.add('ventanaResultVisible');
      })
      .catch(error => {
         // Manejar errores, por ejemplo, mostrar un mensaje de error
         console.error('Error:', error);
      });
}



// Función para cerrar la ventana de preguntas correctas e incorrectas
function cerrarVentanaPreguntasCorrectasIncorrectas() {
   document.getElementById('respuestasCorrectasInco').classList.remove('ventanaResultVisible');
}

// Event listener para detectar clics en el documento
document.addEventListener('click', function(event) {
   const contenedorRespuestas = document.getElementById('contenedorRespuestasServidor');

   // Comprobar si el clic ocurrió fuera del contenedor
   if (!contenedorRespuestas.contains(event.target)) {
      // Llamar a la función para cerrar la ventana
      cerrarVentanaPreguntasCorrectasIncorrectas();
   }
});



