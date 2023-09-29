<?php
require_once '../config/Conexion.php';
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtener el ID del ejercicio desde el formulario
    $ejercicioID = $_POST["ejercicioID"];

    // Consulta para obtener las respuestas correctas del ejercicio
    $sqlRespuestasCorrectas = "SELECT Palabra_Clave FROM palabras_clave WHERE Ejercicio_ID = $ejercicioID ORDER BY Posicion";
    $resultRespuestasCorrectas = $conexion->query($sqlRespuestasCorrectas);

    // Obtener las respuestas correctas en un array
    $respuestasCorrectas = [];
    while ($rowRespuestaCorrecta = $resultRespuestasCorrectas->fetch_assoc()) {
        $respuestasCorrectas[] = $rowRespuestaCorrecta["Palabra_Clave"];
    }

    // Obtener las respuestas enviadas por el estudiante desde el formulario
    $respuestasEnviadas = $_POST["respuestas"];

    // Calcular la calificación
    $calificacion = calcularCalificacion($respuestasCorrectas, $respuestasEnviadas);

    // Mostrar la calificación
    echo '<div class="card-res-pw">';
    echo '<div class="header-res-pw"></div>';
    echo '<div class="info-res-pw">';
    echo '<p class="title-res-pw">Tu calificación: ' . $calificacion . '%</p>';
    echo '<p>';
    // Puedes proporcionar retroalimentación personalizada aquí según la calificación obtenida
    if ($calificacion >= 90) {
        echo 'Retroalimentación: Excelente trabajo, has respondido correctamente la mayoría de las palabras clave.';
?>
        <style>
            .header-res-pw,
            .action-res-pw {
                background-color: #54b435;
                box-shadow: 0 10px 15px -3px #54b435a1, 0 4px 6px -4px #54b435a1;
            }
        </style>
    <?php
    } elseif ($calificacion >= 70) {
        echo 'Retroalimentación: Buen trabajo, puedes mejorar en algunas respuestas.';
    ?>
        <style>
            .header-res-pw,
            .action-res-pw {
                background-color: #FFC436;
                box-shadow: 0 10px 15px -3px #ffc43669, 0 4px 6px -4px #ffc43669;
            }
        </style>
    <?php
    } else {
        echo 'Retroalimentación: Necesitas mejorar en varias respuestas. Revisa las palabras clave y vuelve a intentarlo.';
    ?>
        <style>
            .header-res-pw,
            .action-res-pw {
                background-color: #D71313;
                box-shadow: 0 10px 15px -3px #d7131359, 0 4px 6px -4px #d7131359;
            }
        </style>
    <?php
    }
    echo '</p>';
    echo '</div>';
    echo '<div class="footer-res-pw">';
    echo '<button class="tag-res-pw" onclick="volverinten_pw()">Volver a intentarlo</button>';
    echo '<button type="button" class="action-res-pw" onclick="salirRes_pw()">Aceptar</button>';
    echo '</div>';
    echo '</div>';

    ?>
    <script>
        function volverinten_pw() {
            $.ajax({
                url: "./preguntasWriting.php",
                method: "POST",
                data: {
                    writing: <?php echo $ejercicioID ?>,
                },
                success: function(response) {
                    document.getElementById('carga').style.display = 'none';
                    document.getElementById('SOF').classList.add("der");
                    $('#SOF').html(response);
                },
                error: function(xhr, status, error) {
                    alert(error)
                    console.error(error);
                }
            });
        }

        function salirRes_pw() {
            document.getElementById("SOF").classList.remove("der");
        }
    </script>
    <style>
        .card-res-pw {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            border-radius: 0.75rem;
            background-color: white;
            width: 300px;
            height: 370px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, .1),
                0 2px 4px -2px rgba(0, 0, 0, .1);
            animation: result_pw 0.7s ease;
        }

        @keyframes result_pw {
            0%{
                scale: 2;
            }
            50%{
                scale: 0.9;
            }
            100%{
                scale: 1;
            }
        }

        .header-res-pw {
            position: relative;
            background-clip: border-box;
            margin-top: 1.5rem;
            margin-left: 1rem;
            margin-right: 1rem;
            border-radius: 0.75rem;
            height: 14rem;
        }

        .info-res-pw {
            border: none;
            padding: 1.5rem;
            text-align: center;
        }

        .title-res-pw {
            color: rgb(38 50 56);
            letter-spacing: 0;
            line-height: 1.375;
            font-weight: 600;
            font-size: 1.25rem;
            margin-bottom: 0.5rem;
        }

        .footer-res-pw {
            padding: 0.75rem;
            border: 1px solid rgb(236 239 241);
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: rgba(0, 140, 255, 0.082);
        }

        .tag-res-pw {
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
            cursor: pointer;
            outline: none;
            color: rgb(38 50 56);
            border: 1px solid #00000052;
            font-weight: 700;
            font-size: .84rem;
            padding: 0.45rem;
            background-color: transparent;
            border-radius: 0.5rem;
        }

        .action-res-pw {
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
            border: none;
            outline: none;
            color: rgb(255 255 255);
            text-transform: uppercase;
            font-weight: 700;
            font-size: .75rem;
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
        }
    </style>
<?php
}

// Función para calcular la calificación
function calcularCalificacion($respuestasCorrectas, $respuestasEnviadas)
{
    $totalPalabrasClave = count($respuestasCorrectas);
    $respuestasCorrectasCount = 0;

    foreach ($respuestasCorrectas as $posicion => $respuestaCorrecta) {
        if (isset($respuestasEnviadas[$posicion + 1]) && strtolower($respuestaCorrecta) === strtolower($respuestasEnviadas[$posicion + 1])) {
            $respuestasCorrectasCount++;
        }
    }

    return ($respuestasCorrectasCount / $totalPalabrasClave) * 100;
}

// Cerrar la conexión a la base de datos
$conexion->close();
?>