<?php

require_once'../config/Conexion.php';

// Función para obtener la letra correspondiente según el número de opción
function getLetraFromNumero($numero)
{
    return chr(64 + $numero); // 65 es el código ASCII de 'A'
}

if ($_SERVER['REQUEST_METHOD'] ==='POST') {

    $titulo = $_POST["titulo"];
    $textoInformacion = $_POST['texto'];
    // Obtener información del archivo de imagen
    $nombreImagen = $_FILES['imagen']['name'];
    $rutaImagen = $_FILES['imagen']['tmp_name'];
    

    // Generar un nombre único para el archivo de audio
    $nombreUnicoImagen = uniqid() . '.' . $nombreImagen;

    // Ruta completa para guardar el archivo de audio
    $rutaBd = 'uploads/' . $nombreUnicoImagen;
    $rutaCompletaImagen = '../uploads/' . $nombreUnicoImagen;

    // Mover el archivo de audio a la carpeta de destino
    if (move_uploaded_file($rutaImagen, $rutaCompletaImagen)) {
        // El archivo de audio se movió correctamente
        $preguntas = [];
        $cantidadPreguntas = $_POST['cantidadPreguntas'];
        $insercionCorrecta = true;

       

        for ($i = 1; $i <= $cantidadPreguntas; $i++) {
            $pregunta = $_POST['pregunta' . $i];
            $cantidadOpciones = $_POST['cantidadOpciones' . $i];
            $opciones = [];

            for ($j = 1; $j <= $cantidadOpciones; $j++) {
                $opcion = $_POST['pregunta' . $i . '_opcion' . getLetraFromNumero($j)];
                $opciones[] = $opcion;
            }

            $opciones_str = implode('/', $opciones);

            // Obtener la respuesta correcta de la pregunta actual
            $respuestaCorrecta = $_POST['rta_correcta' . $i];

            // Preparar y ejecutar la consulta para insertar los datos
            $stmt = "INSERT INTO actividadReading(titulo, imagen, texto, pregunta, opciones, respuestacorrecta) 
                  VALUES ('$titulo','$rutaBd', '$textoInformacion', '$pregunta', '$opciones_str', '$respuestaCorrecta')";
            if (!mysqli_query($conexion, $stmt)) {
                $insercionCorrecta = false; // Si hay un error en alguna inserción, se marca como falsa
            }
        }
        $data =array(
            'success' =>true
        );
        echo json_encode($data);

    } else {
        echo '<script>alert("Error al mover el archivo de audio")</script>';
    }
}
?>
