<?php
// Conexion a la base de datos

require_once'../config/Conexion.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST')  {

    // Obtener datos del formulario
    $id = isset($_POST['id']) ? $_POST['id'] : "";
    $clave = isset($_POST['password']) ? $_POST['password'] : "";

    // Validar si los campos están vacíos
    if (empty($id) || empty($clave)) {
        echo json_encode(["error" => "INGRESE NOMBRE Y CLAVE"]);
    } else if (!is_numeric($id)) {
        echo json_encode(["error" => "Documento debe ser numérico"]);
    } else {
        // Escapar los datos ingresados por el usuario para prevenir SQL Injection
        $id = mysqli_real_escape_string($conexion, $id);
        $clave = mysqli_real_escape_string($conexion, $clave);
    
        // Consulta SQL para verificar las credenciales
        $consulta = "SELECT * FROM usuario WHERE nombre_usu = '$id' AND contra = '$clave'";
        $result = mysqli_query($conexion, $consulta);

        if (mysqli_num_rows($result) > 0) {
            // Obtener la información del usuario de la base de datos
            $row = mysqli_fetch_assoc($result);

            // Iniciar la sesión
            session_start();
            $_SESSION['nombre'] = $row['nombre_real'];

            // Redireccionar a la página deseada
            echo json_encode(["success" => "Acceso concedido"]);
        } else {
            echo json_encode(["error" => "USUARIO INCORRECTO"]);
        }
    }
}
?>
