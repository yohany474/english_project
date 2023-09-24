<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Ejercicio - Interfaz del Administrador</title>
    <link rel="stylesheet" href="../css/CrearEjercicio.css">
</head>
<body>
    <header>
        <h1>Crear Ejercicio</h1>
    </header>
    <section class="formulario-ejercicio">
        <h2>Detalles del Ejercicio</h2>
        <form action="../php/CrearEjercicio.php" method="post">
            <label for="titulo">Título del Ejercicio:</label>
            <input type="text" id="titulo" name="titulo" required>

            <label for="contenido">Contenido del Ejercicio:</label>
            <textarea id="contenido" name="contenido" rows="5" required></textarea>

            <label for="palabras-clave">Palabras Clave (separadas por comas):</label>
            <input type="text" id="palabras-clave" name="palabras-clave" required>


            <button type="submit">Crear Ejercicio</button>
        </form>
    </section>
</body>
</html>