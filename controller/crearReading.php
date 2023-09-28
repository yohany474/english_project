<?php

require_once'../config/Conexion.php';

// Función para obtener la letra correspondiente según el número de opción
function getLetraFromNumero($numero)
{
    return chr(64 + $numero); // 65 es el código ASCII de 'A'
}

if ($_SERVER['REQUEST_METHOD'] ==='POST') {

    $titulo =mysqli_real_escape_string($conexion,  $_POST["titulo"]);

    $textoInformacion = mysqli_real_escape_string($conexion, $_POST['texto']);
    // Obtener información del archivo de imagen
    $nombreImagen = $_FILES['imagen']['name'];
    $rutaImagen = $_FILES['imagen']['tmp_name'];
    

    // Generar un nombre único para el archivo de audio
    $nombreUnicoImagen = uniqid() . '.' . $nombreImagen;

    // Nivel seleccionado
    $nivel = $_POST['nivel'];

    // Instrucciones 
    $instrucciones = mysqli_real_escape_string($conexion, $_POST['instruccionReading']);

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
            $pregunta = mysqli_real_escape_string($conexion,  $_POST['pregunta' . $i]);
            $cantidadOpciones = mysqli_real_escape_string($conexion,  $_POST['cantidadOpciones' . $i]);
            $opciones = [];

            for ($j = 1; $j <= $cantidadOpciones; $j++) {
                $opcion = mysqli_real_escape_string($conexion, $_POST['pregunta' . $i . '_opcion' . getLetraFromNumero($j)]);
                $opciones[] = $opcion;
            }

            $opciones_str = implode('/', $opciones);

            // Obtener la respuesta correcta de la pregunta actual
            $respuestaCorrecta = mysqli_real_escape_string($conexion, $_POST['rta_correcta' . $i]);

            // Preparar y ejecutar la consulta para insertar los datos
            $stmt = "INSERT INTO actividadreading(idNivelRea, titulo, img, texto, pregunta, opciones, respuestacorrecta, instrucciones) 
                  VALUES ('$nivel', '$titulo','$rutaBd', '$textoInformacion', '$pregunta', '$opciones_str', '$respuestaCorrecta', '$instrucciones')";
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