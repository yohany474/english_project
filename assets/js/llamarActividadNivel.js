
document.getElementById('miImagen').addEventListener('click', function() {
   var elementsWithClasses = document.querySelectorAll('.targetMas, .resolver, .regular');
   
   elementsWithClasses.forEach(function(element) {
       element.classList.remove('targetMas', 'resolver', 'regular');
   });
});




$(document).ready(function () {
   var nivel;
 
   $(".contro").on("click", function () {
     nivel = $(this).data("nivel");
 
     document.querySelectorAll('.terget').forEach(function(element) {
       element.setAttribute("data-level", nivel);
     });
 
     document.getElementById('tarjetasMaster').classList.add("targetMas");
     document.getElementById('septionTraer').classList.remove("targetMas");
   });
 
   $(".terget").on("click", function () {
     // Lee el valor 'nivel' desde la variable global
     var level = nivel;
     var clase = $(this).data("clase");
 
 
     document.getElementById('tarjetasMaster').classList.remove('targetMas');
 
     $.ajax({
       url: "php/FiltradoTraerActividades.php",
       method: "POST",
       data: {
         level: level,
         clase: clase
       },
       success: function (response) {
         document.getElementById('septionTraer').classList.add('targetMas');
         $('#Aplicar').html(response);
       },
       error: function (xhr, status, error) {
         document.getElementById('tarjetasMaster').classList.remove('targetMas');
         console.error(error);
       }
     });
   });
 });
