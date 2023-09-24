<?php
session_start();

// Comprobar si el usuario está autenticado
if (isset($_SESSION['nombre'])) {
    // Destruir la sesión
    session_destroy();
    
    // Devolver una respuesta JSON para indicar que la sesión se cerró correctamente
    echo json_encode(['success' => true]);
} else {
    // Devolver una respuesta JSON para indicar que no se pudo cerrar la sesión
    echo json_encode(['success' => false]);
}
?>
