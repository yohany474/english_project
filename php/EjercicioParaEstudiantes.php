<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio para Estudiantes</title>
    <link rel="stylesheet" href="../css/EjercicioParaEstudiantes.css">
</head>
<body>
<?php
// Establecer la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inglesjuego";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar si la conexión es exitosa
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener el ID del ejercicio de la URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $ejercicioID = $_GET['id'];

    // Consulta para obtener el ejercicio y sus palabras clave
    $sql = "SELECT Título, Contenido_del_Ejercicio FROM Ejercicios WHERE ID = $ejercicioID";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $titulo = $row["Título"];
        $contenidoEjercicio = $row["Contenido_del_Ejercicio"];
        
        // Consulta para obtener las palabras clave del ejercicio
        $sqlPalabrasClave = "SELECT Palabra_Clave FROM Palabras_Clave WHERE Ejercicio_ID = $ejercicioID";
        $resultPalabrasClave = $conn->query($sqlPalabrasClave);

        // Obtener todas las palabras clave en un array
        $palabrasClaveArray = [];
        while ($rowPalabraClave = $resultPalabrasClave->fetch_assoc()) {
            $palabraClave = $rowPalabraClave["Palabra_Clave"];
            $palabrasClaveArray[] = $palabraClave;
        }

        // Mezclar las palabras clave en un orden aleatorio
        shuffle($palabrasClaveArray);

        // Mostrar el título del ejercicio
        echo '<header>';
        echo '<h1>' . $titulo . '</h1>';
        echo '</header>';
        
        // Mostrar el contenido del ejercicio
        echo '<main>';
        echo '<section class="ejercicio">';
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
        echo '<form id="formularioRespuestas" action="../php/procesarRespuestas.php" method="post">';
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
    }
} else {
    echo '<p>ID de ejercicio no válido.</p>';
}

// Cerrar la conexión a la base de datos
$conn->close();
?>

<!-- Ventana Modal -->
<div id="modal" class="modal">
    <div class="modal-content">
        <!-- Contenido de la ventana modal se generará con JavaScript -->
    </div>
</div>

<!-- Agrega el enlace al script JavaScript -->
<script src="../js/ventanaCalificasion.js"></script>
</body>
</html>