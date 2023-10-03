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
        $sqlPalabrasClave = "SELECT Palabra_Clave FROM palabras_clave WHERE Ejercicio_ID = $ejercicioID";
        $resultPalabrasClave = $conexion->query($sqlPalabrasClave);

        // Obtener todas las palabras clave en un array
        $palabrasClaveArray = [];
        while ($rowPalabraClave = $resultPalabrasClave->fetch_assoc()) {
            $palabraClave = $rowPalabraClave["Palabra_Clave"];
            $palabrasClaveArray[] = $palabraClave;
        }

        // Mezclar las palabras clave en un orden aleatorio
        shuffle($palabrasClaveArray);
?>
        <style>
            #formularioRespuestas {
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                height: 100%;
                gap: 10px;
            }

            .cont_palabras_writing {
                display: flex;
                flex-wrap: wrap;
                gap: 3px;
            }

            .ejercicio-pw {
                height: 100%;
                display: flex;
                flex-direction: column;
            }

            .ejercicio-pw input[type="text"] {
                width: 100px;
                border: none;
                text-align: center;
                border-bottom: 1px solid #000;
            }

            .ejercicio-pw input[type="text"]:focus {
                outline: none;
                border-color: #0056b3;
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
            <header class="header-pw">
                <h1><?php echo $titulo; ?></h1>
            </header>
            <section class="descripcion-corta">
                <p style="font-variant: all-petite-caps;"><?php echo $secrip_corta; ?></p>
            </section>
            <main class="main-pw" style="height: 100%;">
                <section class="ejercicio-pw">
                    <h3 style="color: #1b85e5;">Keywords:</h3>
                    <ul>
                        <?php
                        foreach ($palabrasClaveArray as $posicion => $palabraClave) {
                            echo '<li>' . $palabraClave . '</li>';
                        }
                        ?>
                    </ul><br>
                    <h2><?php echo $titulo; ?></h2>
                    <?php
                    $palabras = preg_split('/\s+/', $contenidoEjercicio);

                    echo '<form id="formularioRespuestas">';
                    echo '<input type="hidden" name="ejercicioID" value="' . $ejercicioID . '">';
                    echo '<div class="cont_palabras_writing">';
                    foreach ($palabras as $posicion => $palabra) {
                        if (preg_match('/^.*-{3,}.*$|^-{3,}$/', $palabra)) {
                            // Reemplazar palabras con 3 o más guiones con inputs
                            echo '<input type="text" id="respuesta_' . ($posicion + 1) . '" name="respuestas[' . ($posicion + 1) . ']" required>';
                        } else {
                            echo '<p>' . $palabra . '</p>';
                        }
                    }

                    if (empty($palabras)) {
                        echo '<p>No se encontraron palabras clave para este ejercicio.</p>';
                    }
                    echo '</div>';
                    echo '<button id="btnMostrarModal" type="submit">Enviar Respuestas</button>';
                    echo '</form>';
                    ?>
                </section>
            </main>
        </div>

        <script>
            // Código para cerrar la ventana
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
                        alert(JSON.stringify(error));
                    })
            })
        </script>
<?php
    } else {
        echo '<p>Ejercicio no encontrado.</p>';
    }
} else {
    echo '<p>ID de ejercicio no válido.</p>';
}
$conexion->close();
?>