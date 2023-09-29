<?php
require_once '../config/Conexion.php';


if(isset($_POST["reading"])){
    if (isset($_POST["titulo"])) {
        $titulo = mysqli_real_escape_string($conexion, $_POST["titulo"]);

        // Verificar si se ha subido el texto
        if (isset($_POST["texto"])) {
            $nombreArchivo = mysqli_real_escape_string($conexion, $_POST["texto"]);
            
            $sqlActualizarAudio = "UPDATE actividadreading SET texto='$nombreArchivo' WHERE titulo = '$titulo'";
            mysqli_query($conexion, $sqlActualizarAudio);
        }

        // Verificar si se ha subido un archivo de imagen
        if (isset($_FILES["imagen"]) && $_FILES["imagen"]["error"] == 0) {
            $nombreArchivoImagen = mysqli_real_escape_string($conexion, $_FILES["imagen"]["name"]);
            $rutaArchivoImagen = "../uploads/" . $nombreArchivoImagen;
            // Mueve el archivo de imagen a la ubicación deseada
            move_uploaded_file($_FILES["imagen"]["tmp_name"], $rutaArchivoImagen);
            // Realiza las operaciones necesarias con la ruta del archivo de imagen.

            // Actualiza la ruta del archivo de imagen en la base de datos
            $sqlActualizarImagen = "UPDATE actividadreading SET img = 'uploads/$nombreArchivoImagen' WHERE titulo = '$titulo'";
            mysqli_query($conexion, $sqlActualizarImagen);
        }
        
        // Redirige utilizando JavaScript
        echo "
            <script>
            alert('Cambios en reading aplicados correctamente');
                window.location.href = '../Panel.php';
            </script>
        ";
        exit(); // Termina el script para evitar ejecución adicional
    }
}
















if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si se ha seleccionado un tema
    if (isset($_POST["titulo"])) {
        $titulo = mysqli_real_escape_string($conexion, $_POST["titulo"]);

        // Verificar si se ha subido un archivo de audio
        if (isset($_FILES["audio"]) && $_FILES["audio"]["error"] == 0) {
            $nombreArchivoAudio = mysqli_real_escape_string($conexion, $_FILES["audio"]["name"]);
            $rutaArchivoAudio = "../uploads/" . $nombreArchivoAudio;
            // Mueve el archivo de audio a la ubicación deseada
            move_uploaded_file($_FILES["audio"]["tmp_name"], $rutaArchivoAudio);
            // Realiza las operaciones necesarias con la ruta del archivo de audio.

            // Actualiza la ruta del archivo de audio en la base de datos
            $sqlActualizarAudio = "UPDATE actividadlistening SET audio = '$nombreArchivoAudio' WHERE titulo = '$titulo'";
            mysqli_query($conexion, $sqlActualizarAudio);
        }

        // Verificar si se ha subido un archivo de imagen
        if (isset($_FILES["imagen"]) && $_FILES["imagen"]["error"] == 0) {
            $nombreArchivoImagen = mysqli_real_escape_string($conexion, $_FILES["imagen"]["name"]);
            $rutaArchivoImagen = "../uploads/" . $nombreArchivoImagen;
            // Mueve el archivo de imagen a la ubicación deseada
            move_uploaded_file($_FILES["imagen"]["tmp_name"], $rutaArchivoImagen);
            // Realiza las operaciones necesarias con la ruta del archivo de imagen.

            // Actualiza la ruta del archivo de imagen en la base de datos
            $sqlActualizarImagen = "UPDATE actividadlistening SET img = 'uploads/$nombreArchivoImagen' WHERE titulo = '$titulo'";
            mysqli_query($conexion, $sqlActualizarImagen);
        }
        
        // Redirige utilizando JavaScript
        echo "
            <script>
            alert('Cambios aplicados correctamente');
                window.location.href = '../Panel.php';
            </script>
        ";
        exit(); // Termina el script para evitar ejecución adicional
    }
}
?>
