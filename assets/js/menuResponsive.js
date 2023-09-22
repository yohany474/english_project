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
var second= document.getElementById("senador");


$(document).ready(function () {
   $(".totem").on("click", function () {
      var valor = $(this).data("valor");
   
      primer.classList.add('regular');

      $.ajax({
         url: "php/TraerActividades.php",
         method: "POST",
         data: { valor: valor },
         success: function (response) {
            second.classList.add('resolver');
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

temas_botones.addEventListener('click', ()=>{
   second.classList.remove('resolver');
   primer.classList.remove('regular');
})

