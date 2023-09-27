$(document).ready(function () {
  $(".dares").on("click", function () {
    var nombre = $(this).data("clase");

    if (nombre == "1") {
      var tabla = "actividadlistening"
    } else if (nombre == "2") {
      var tabla
      tabla = "actividadreading"
    } else if (nombre == "3") {
      var tabla
      tabla = "ejercicios"
    } else if (nombre == "4") {
      var tabla
      tabla = "actividadesgrammar"
    }

    $.ajax({
      url: "./php/TraerActividadesPanel.php",
      method: "POST",
      data: {
        valor: nombre,
        tabla: tabla
      },
      success: function (response) {
        document.getElementById('productos').classList.add("ass");
        $('#QERT').html(response);
      },
      error: function (xhr, status, error) {
        alert(error)
        console.error(error);
      }
    });
  });
});


document.getElementById('x3').addEventListener('click', () => {
  document.getElementById('productos').classList.remove("ass");
})