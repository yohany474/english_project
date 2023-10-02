<?php
// Establecer la conexión a la base de datos
require_once 'config/Conexion.php';

// Obtener el ID del ejercicio de la URL
if (isset($_POST['writing']) && is_numeric($_POST['writing'])) {

    $ejercicioID = $_POST['writing'];

    // Consulta para obtener el ejercicio y sus palabras clave, incluyendo el campo "secrip-corta"
    $result = $conexion->query("SELECT Titulo, Contenido_del_Ejercicio, secrip_corta FROM ejercicios WHERE ID = $ejercicioID ");

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $titulo = $row["Titulo"];
        $contenidoEjercicio = $row["Contenido_del_Ejercicio"];
        $secrip_corta = $row["secrip_corta"];

        // Consulta para obtener las palabras clave del ejercicio
        $sqlPalabrasClave = "SELECT Palabra_Clave FROM Palabras_Clave WHERE Ejercicio_ID = $ejercicioID";
        $resultPalabrasClave = $conexion->query($sqlPalabrasClave);

<<<<<<< HEAD
    .ejercicio-pw input[type="text"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    .ejercicio-pw button {
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .ejercicio-pw button:hover {
        background-color: #0056b3;
    }
</style>

<div class="container">
    <div class="x" id="x2">X</div>
    <?php
    // Establecer la conexión a la base de datos
    require_once 'config/Conexion.php';

    // Obtener el ID del ejercicio de la URL
    if (isset($_POST['writing']) && is_numeric($_POST['writing'])) {

        $ejercicioID = $_POST['writing'];

        // Consulta para obtener el ejercicio y sus palabras clave, incluyendo el campo "secrip-corta"
        $sql = "SELECT Titulo, Contenido_del_Ejercicio, secrip_corta FROM ejercicios WHERE ID = $ejercicioID";
        $result = $conexion->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $titulo = $row["Titulo"];
            $contenidoEjercicio = $row["Contenido_del_Ejercicio"];
            $secrip_corta = $row["secrip_corta"];

            // Consulta para obtener las palabras clave del ejercicio
            $sqlPalabrasClave = "SELECT Palabra_Clave FROM Palabras_Clave WHERE Ejercicio_ID = $ejercicioID";
            $resultPalabrasClave = $conexion->query($sqlPalabrasClave);

            // Obtener todas las palabras clave en un array
            $palabrasClaveArray = [];
            while ($rowPalabraClave = $resultPalabrasClave->fetch_assoc()) {
                $palabraClave = $rowPalabraClave["Palabra_Clave"];
                $palabrasClaveArray[] = $palabraClave;
            }

            // Mezclar las palabras clave en un orden aleatorio
            shuffle($palabrasClaveArray);

            // Mostrar el título del ejercicio
            echo '<header class="header-pw">';
            echo '<h1>' . $titulo . '</h1>';
            echo '</header>';

            // Mostrar la descripción corta
            echo '<section class="descripcion-corta">';
            echo '<p>' . $secrip_corta . '</p>';
            echo '</section>';

            // Mostrar el contenido del ejercicio
            echo '<main class="main-pw">';
            echo '<section class="ejercicio-pw">';
            echo '<h2>Título del Ejercicio</h2>';
            echo '<p>' . $contenidoEjercicio . '</p>';

            // Mostrar las palabras clave en orden aleatorio
            echo '<h3>Palabras Clave:</h3>';
            echo '<ul>';
            foreach ($palabrasClaveArray as $posicion => $palabraClave) {
                echo '<li>' . $palabraClave . '</li>';
            }
            echo '</ul>';

            // Mostrar los espacios en blanco con números de posición
            echo '<h3>Espacios en Blanco:</h3>';
            echo '<form id="formularioRespuestas">';
            echo '<input type="hidden" name="ejercicioID" value="' . $ejercicioID . '">';
            if ($resultPalabrasClave->num_rows > 0) {
                foreach ($palabrasClaveArray as $posicion => $palabraClave) {
                    echo '<label for="respuesta_' . ($posicion + 1) . '">Espacio en blanco ' . ($posicion + 1) . ':</label>';
                    echo '<input type="text" id="respuesta_' . ($posicion + 1) . '" name="respuestas[' . ($posicion + 1) . ']" required>';
                }
            } else {
                echo '<p>No se encontraron palabras clave para este ejercicio.</p>';
            }
            echo '<button id="btnMostrarModal" type="submit">Enviar Respuestas</button>';
            echo '</form>';

            echo '</section>';
            echo '</main>';
        } else {
            echo '<p>Ejercicio no encontrado.</p>';
=======
        // Obtener todas las palabras clave en un array
        $palabrasClaveArray = [];
        while ($rowPalabraClave = $resultPalabrasClave->fetch_assoc()) {
            $palabraClave = $rowPalabraClave["Palabra_Clave"];
            $palabrasClaveArray[] = $palabraClave;
>>>>>>> daca4f8f31d0b35c734a99865096933f8c405145
        }

        // Mezclar las palabras clave en un orden aleatorio
        shuffle($palabrasClaveArray);
?>
        <section class="ares">
            <div class="palabras">
                <section class="palar">
                    <h2>Palabras Clave</h2>
                    <section class="scrall">
                        <?php
                        foreach ($palabrasClaveArray as $posicion => $palabraClave) {
                            echo '<li>' . $palabraClave . '</li>';
                        }
                        ?>
                    </section>
                </section>
            </div>
            <div class="text-date">
                <section class="texto-comple">
                    <div class="x" id="x2">X</div>
                    <h2><?php echo $titulo ?></h2>
                    <p><?php echo $secrip_corta ?></p>
                    <section class="fades">
                        <div class="over-croll">
                            <?php echo $contenidoEjercicio ?>
                        </div>
                    </section>
                </section>
                <section class="input-relle">
                    <h2>Espacios para rellenar</h2>
                    <section class="fares">
                        <form id="formularioRespuestas" class="over-croll">
                            <input type="hidden" name="ejercicioID" value="<?php echo $ejercicioID ?>">
                            <?php
                            if ($resultPalabrasClave->num_rows > 0) {
                                foreach ($palabrasClaveArray as $posicion => $palabraClave) {
                                    echo '<label for="respuesta_' . ($posicion + 1) . '">Espacio en blanco ' . ($posicion + 1) . ':</label>';
                                    echo '<input type="text" id="respuesta_' . ($posicion + 1) . '" name="respuestas[' . ($posicion + 1) . ']" required>';
                                }
                            } else {
                                echo '<p>No se encontraron palabras clave para este ejercicio.</p>';
                            }
                            echo '<button id="btnMostrarModal" type="submit">Enviar Respuestas</button>';
                            ?>
                        </form>
                    </section>
                </section>
            </div>
        </section>
<?php
    } else {
        echo '<p>Ejercicio no encontrado.</p>';
    }
} else {
    echo '<p>ID de ejercicio no válido.</p>';
}
$conexion->close();
?>
</div>

<script>
    //Codigo para cerrar la ventana
    function hacer() {
        var x_cerrar = document.getElementById('x2');

        x_cerrar.addEventListener('click', () => {
            document.getElementById("SOF").classList.remove("der");
        })
    }

    hacer();
    var ventanaFormwriting = document.querySelector('#formularioRespuestas');
    ventanaFormwriting.addEventListener('submit', (event) => {
        document.getElementById('carga').style.display = 'flex';
        event.preventDefault();
        FormDataa = new FormData(ventanaFormwriting);
        fetch('php/procesarRespuestas.php', {
                method: 'POST',
                body: FormDataa,
            }).then((response) => response.text())
            .then((data) => {
                document.getElementById('carga').style.display = 'none';
                $('#SOF').html(data);
            })
            .catch((error) => {
                document.getElementById('carga').style.display = 'none';
                alert(JSON.stringify(error))
            })
    })
</script>