<?php
require_once'../config/Conexion.php';

// Función para obtener la letra correspondiente según el número de opción
function getLetraFromNumero($numero)
{
    return chr(64 + $numero); // 65 es el código ASCII de 'A'
}

if ($_SERVER['REQUEST_METHOD'] ==='POST') {

    $titulo =   mysqli_real_escape_string($conexion,  $_POST["titulo"]);


    // Obtener información del archivo de audio
    $nombreAudio = $_FILES['Archivo']['name'];
    $rutaAudio = $_FILES['Archivo']['tmp_name'];
    $extensionAudio = pathinfo($nombreAudio, PATHINFO_EXTENSION);

    // Generar un nombre único para el archivo de audio
    $nombreUnicoAudio = uniqid() . '.' . $extensionAudio;

    // Nivel seleccionado
    $nivel  =$_POST['nivel'];
    // Descripcion del audio
    $descripcionAudio = $_POST['secrip-corta'];

    // Ruta completa para guardar el archivo de audio
    $rutaBd = 'uploads/' . $nombreUnicoAudio;
    $rutaCompletaAudio = '../uploads/' . $nombreUnicoAudio;

    // Mover el archivo de audio a la carpeta de destino
    if (move_uploaded_file($rutaAudio, $rutaCompletaAudio)) {
        // El archivo de audio se movió correctamente
        $preguntas = [];
        $cantidadPreguntas = $_POST['cantidadPreguntas'];
        $insercionCorrecta = true;

        for ($i = 1; $i <= $cantidadPreguntas; $i++) {
            $pregunta = mysqli_real_escape_string($conexion, $_POST['pregunta' . $i]);
            $cantidadOpciones = $_POST['cantidadOpciones' . $i];
            $opciones = [];

            for ($j = 1; $j <= $cantidadOpciones; $j++) {
                $opcion =    mysqli_real_escape_string( $conexion, $_POST['pregunta' . $i . '_opcion' . getLetraFromNumero($j)]);
                $opciones[] = $opcion;
            }

            $opciones_str = implode('/', $opciones);

            // Obtener la respuesta correcta de la pregunta actual
            $respuestaCorrecta = $_POST['rta_correcta' . $i];

            // Preparar y ejecutar la consulta para insertar los datos
            $stmt = "INSERT INTO actividadesgrammar(IDnivel,titulo, pdf, pregunta, opciones, respuestacorrecta) 
                  VALUES ('$nivel','$titulo','$rutaBd', '$pregunta', '$opciones_str', '$respuestaCorrecta')";
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
