<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Clasificación de Encomiendas</title>
</head>
<body>
    <h1>Formulario de Clasificación de Encomiendas</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $direccion = $_POST["direccion"];
        $telefono = $_POST["telefono"];

        // Puedes realizar acciones adicionales aquí, como almacenar los datos en una base de datos.

        // Mostrar un mensaje de confirmación
        echo "<p>Gracias, $nombre. La información se ha recibido correctamente:</p>";
        echo "<p><strong>Nombre:</strong> $nombre</p>";
        echo "<p><strong>Dirección:</strong> $direccion</p>";
        echo "<p><strong>Teléfono:</strong> $telefono</p>";
    }
    ?>

    <a href="formulario.html">Volver al formulario</a>
</body>
</html>
