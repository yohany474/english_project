
$(document).ready(function () {
  $(".contro").on("click", function () {
    var nivel = $(this).data("nivel");
    console.log(nivel);

    document.querySelectorAll('.terget').forEach(function(element) {
      element.setAttribute("data-level", nivel);
    });

    document.getElementById('tarjetasMaster').classList.add("targetMas");
  });

   $(".terget").on("click", function () {
      var level = $(this).data("level");
      var clase = $(this).data("clase");

      document.getElementById('tarjetasMaster').classList.add('ser')

      $.ajax({
         url: "php/FiltradoTraerActividades.php",
         method: "POST",
         data: { 
          valor: clase, 
          clase: level
        },
         success: function (response) {
            document.getElementById('septionTraer').classList.add('targetMas');
            $('#Aplicar').html(response);
         },
         error: function (xhr, status, error) {
          document.getElementById('tarjetasMaster').classList.remove('ser')
            console.error(error);
         }
      });
   });
});

