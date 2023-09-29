<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si se ha seleccionado un tema
    if (isset($_POST["titulo"])) {
        $titulo = $_POST["titulo"];
        
        // Verificar si se ha subido un archivo de audio
        if (isset($_FILES["audio"]) && $_FILES["audio"]["error"] == 0) {
            $nombreArchivoAudio = $_FILES["audio"]["name"];
            $rutaArchivoAudio = "ruta/donde/guardar/audio/" . $nombreArchivoAudio;
            // Mueve el archivo de audio a la ubicación deseada
            move_uploaded_file($_FILES["audio"]["tmp_name"], $rutaArchivoAudio);
            // Realiza las operaciones necesarias con la ruta del archivo de audio.

            // Actualiza la ruta del archivo de audio en la base de datos
            require_once 'config/Conexion.php';
            $sqlActualizarAudio = "UPDATE actividadlistening SET audio = '$rutaArchivoAudio' WHERE titulo = '$titulo'";
            mysqli_query($conexion, $sqlActualizarAudio);
        }

        // Verificar si se ha subido un archivo de imagen
        if (isset($_FILES["imagen"]) && $_FILES["imagen"]["error"] == 0) {
            $nombreArchivoImagen = $_FILES["imagen"]["name"];
            $rutaArchivoImagen = "ruta/donde/guardar/imagen/" . $nombreArchivoImagen;
            // Mueve el archivo de imagen a la ubicación deseada
            move_uploaded_file($_FILES["imagen"]["tmp_name"], $rutaArchivoImagen);
            // Realiza las operaciones necesarias con la ruta del archivo de imagen.

            // Actualiza la ruta del archivo de imagen en la base de datos
            require_once 'config/Conexion.php';
            $sqlActualizarImagen = "UPDATE actividadlistening SET img = '$rutaArchivoImagen' WHERE titulo = '$titulo'";
            mysqli_query($conexion, $sqlActualizarImagen);
        }

        // Realiza cualquier otra operación que necesites, como actualizar la base de datos con la información del tema y las rutas de los archivos.
        
        // Redirige a una página de éxito o realiza alguna otra acción después de procesar los datos.
    }
}
?>
