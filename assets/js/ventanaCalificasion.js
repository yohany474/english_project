
    document.addEventListener("DOMContentLoaded", function () {
        // Obtener referencias a elementos HTML
        const btnMostrarModal = document.getElementById("btnMostrarModal");
        const modal = document.getElementById("modal");
        const modalContent = document.getElementById("modal-content");
        const formularioRespuestas = document.getElementById("formularioRespuestas");

        // Función para mostrar la ventana modal
        function mostrarModal() {
            modal.style.display = "block";
        }

        // Función para cerrar la ventana modal
        function cerrarModal() {
            modal.style.display = "none";
        }

        // Agregar evento clic al botón para mostrar la ventana modal
        btnMostrarModal.addEventListener("click", mostrarModal);

        // Agregar evento submit al formulario
        formularioRespuestas.addEventListener("submit", function (event) {
            // Prevenir el envío del formulario
            event.preventDefault();

            // Aquí puedes agregar código para enviar las respuestas al servidor (procesarRespuestas.php)

            // Mostrar la calificación en la ventana modal
            const calificacion = 85; // Reemplaza con la calificación real
            modalContent.innerHTML = `
                <h2>Calificación</h2>
                <p>Tu calificación: ${calificacion}%</p>
                <button id="btnCerrarModal">Cerrar</button>
            `;

            // Agregar evento clic al botón de cerrar modal
            const btnCerrarModal = document.getElementById("btnCerrarModal");
            btnCerrarModal.addEventListener("click", cerrarModal);

            // Mostrar la ventana modal
            mostrarModal();
        });
    });
