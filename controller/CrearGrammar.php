<?php
include('../config/Conexion.php');

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $titulo = $_POST["titulo"];
    $contenido = $_POST["contenido"];
    $palabrasClave = $_POST["palabras-clave"];
    $descripcion= $_POST["descripcion"];

    // Insertar el ejercicio en la tabla "Ejercicios"
    $sql = "INSERT INTO ejercicios (Título, Contenido_del_Ejercicio, IDnivel,descrip_corta) VALUES (?, ?, ?,?)";
    $stmt = $conexion->prepare($sql);


    $stmt->bind_param("ssi", $titulo, $contenido);

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
            $sql = "INSERT INTO palabras_Clave (Ejercicio_ID, Palabra_Clave, Posición) VALUES (?, ?, ?)";
            $stmt = $conexion->prepare($sql);
            $stmt->bind_param("isi", $ejercicioID, $palabra, $posicion);
            $stmt->execute();
        }

        echo "El ejercicio se ha creado exitosamente.";
    } else {
        echo "Error al crear el ejercicio: ";
    }

    $stmt->close();
}
// Cerrar la conexión a la base de datos
$conn->close();
?>