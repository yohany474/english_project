<?php
include('../config/Conexion.php');

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $titulo = $_POST["titulo"];
    $contenido = $_POST["contenido"];
    $IDnivel = $_POST["IDnivel"]; // Obtener el valor seleccionado del campo IDnivel
    $secrip_corta = $_POST["secrip-corta"]; // Obtener la descripción corta
    $palabrasClave = $_POST["palabras-clave"];

    $archivo= $_FILES["Archivo"];

    $dir_subida = "../uploads";
    $nombre_archivo= $archivo["name"];
    $ruta_archivo = $dir_subida . '/' . $nombre_archivo;
    move_uploaded_file($archivo["tmp_name"], $ruta_archivo);

    // Mapear el valor seleccionado en IDnivel a los valores deseados en la base de datos
    switch ($IDnivel) {
        case "A1":
            $nivelID = 1;
            break;
        case "A2":
            $nivelID = 2;
            break;
        case "B1":
            $nivelID = 3;
            break;
        default:
            $nivelID = null; // Valor por defecto si no coincide con ninguna opción
            break;
    }

    if ($nivelID !== null) {
        // Insertar el ejercicio en la tabla "Ejercicios" incluyendo los nuevos campos
        $sql = "INSERT INTO actividadesgrammar (titulo, Contenido_del_Ejercicio, IDnivel, `descript`, pdf) VALUES (?, ?, ?, ?, '$ruta_archivo')";
        $stmt = $conexion->prepare($sql);

        $stmt->bind_param("ssss", $titulo, $contenido, $nivelID, $secrip_corta);

        if ($stmt->execute()) {
            $ejercicioID = $stmt->insert_id;

            // Dividir las palabras clave en un array
            $palabrasClaveArray = explode(",", $palabrasClave);

            // Obtener el contenido del ejercicio y reemplazar los espacios en blanco por las palabras clave
            $contenido_con_palabras = $contenido;
            foreach ($palabrasClaveArray as $palabra) {
                $palabra = trim($palabra);
                $contenido_con_palabras = preg_replace('/____/', $palabra, $contenido_con_palabras, 1);
            }

            // Insertar las palabras clave en la tabla "Palabras_Clave" con las posiciones correspondientes
            foreach ($palabrasClaveArray as $key => $palabra) {
                $palabra = trim($palabra);
                $posicion = $key + 1; // Calcular la posición automáticamente
                $sql = "INSERT INTO palabraclave_grammar (id_grammar,palabraClave_g,posicion) VALUES (?, ?, ?)";
                $stmt = $conexion->prepare($sql);
                $stmt->bind_param("isi", $ejercicioID, $palabra, $posicion);
                $stmt->execute();
            }
            echo "<script>alert('El ejercicio se ha creado exitosamente.');
            window.location='../Panel.html'</script>";
        } else {
            echo "Error al crear el ejercicio: " . $conexion->error;
        }

        $stmt->close();
    } else {
        echo "Valor de IDnivel no válido.";
    }
}

// Cerrar la conexión a la base de datos
$conexion->close();
?>