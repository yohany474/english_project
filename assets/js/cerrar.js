document.addEventListener("DOMContentLoaded", function () {
    const botonCerrarSesion = document.getElementById("cerrar_sesion");

    botonCerrarSesion.addEventListener("click", function () {
        // Realizar una solicitud al servidor PHP para cerrar la sesión
        fetch("./controller/cerrar.php", {
            method: "POST",
        })
        .then((response) => response.json())
        .then((data) => {
            if (data.success) {
                // Redireccionar a la página de inicio de sesión o a donde desees
                window.location.href = "./index.html";
            } else {
                alert("No se pudo cerrar la sesión. Por favor, inténtalo de nuevo.");
            }
        })
        .catch((error) => {
            console.error("Error en la solicitud:", error);
        });
    });
});
