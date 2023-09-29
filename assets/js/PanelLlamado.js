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







const abrirModalBtn = document.getElementById("abrirModal");
const cerrarModalBtn = document.getElementById("cerrarModal");
const ventanaEditarListening = document.getElementById("ventanaEditarListening");
const modalContenido = document.querySelector(".modal-contenido");

abrirModalBtn.addEventListener("click", () => {
    ventanaEditarListening.style.display = "flex";
});

cerrarModalBtn.addEventListener("click", () => {
    ventanaEditarListening.style.display = "none";
});

// Agregar un evento de clic al fondo oscuro
ventanaEditarListening.addEventListener("click", (e) => {
    if (e.target === ventanaEditarListening) {
        ventanaEditarListening.style.display = "none";
    }
});

// Evita que el clic en el contenido del formulario se cierre la modal
modalContenido.addEventListener("click", (e) => {
    e.stopPropagation();
});



const abrirModalBtn2 = document.getElementById("editR");
const cerrarModalBtn2 = document.getElementById("cerrarModal2");
const ventanaEditarReafing = document.getElementById("ventanaEditarReading");
const modalContenido2 = document.querySelector(".modal-contenido");

abrirModalBtn2.addEventListener("click", () => {
  ventanaEditarReafing.style.display = "flex";
});

cerrarModalBtn2.addEventListener("click", () => {
    ventanaEditarReafing.style.display = "none";
});

// Agregar un evento de clic al fondo oscuro
ventanaEditarReafing.addEventListener("click", (e) => {
    if (e.target === ventanaEditarReafing) {
        ventanaEditarReafing.style.display = "none";
    }
});

// Evita que el clic en el contenido del formulario se cierre la modal
modalContenido2.addEventListener("click", (e) => {
    e.stopPropagation();
});
