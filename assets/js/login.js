// Obtén una referencia al elemento con el ID "contenedor"
var abrir = document.getElementById("login");
var cerrar = document.getElementById("dark");
var close = document.getElementById("cerrar");

// Agrega un evento de clic al contenedor
abrir.addEventListener("click",()=>{
  var darkOverlay = document.getElementById("dark");
  var deleteConfirmation = document.getElementById("container_login");
  
  if (darkOverlay && deleteConfirmation) {
      darkOverlay.style.display = "flex";
      deleteConfirmation.style.display = "flex";
  }
});


// Agrega un evento de clic al elemento "cerrar" para ocultar la ventana modal
cerrar.addEventListener("click", () => {
  document.getElementById("dark").style.display = "none";
  document.getElementById("container_login").style.display = "none";
});

// Agrega un evento de clic al elemento "cerrar" para ocultar la ventana modal
close.addEventListener("click", () => {
  document.getElementById("dark").style.display = "none";
  document.getElementById("container_login").style.display = "none";
});




