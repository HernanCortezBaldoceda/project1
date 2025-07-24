<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejemplo PHP + HTML</title>
</head>
<body>
    <h1>Ingresa tu nombre</h1>
    
    <!-- Formulario envía datos a procesar.php -->
    <form action="/procesar.php" method="post">
        <input type="text" name="nombre" placeholder="Tu nombre" required>
        <button type="submit">Enviar</button>
    </form>

    <!-- Mostrar resultado (esto SÍ es PHP) -->
    <?php
    if (isset($_GET['resultado'])) {
        echo "<p><strong>Resultado:</strong> " . htmlspecialchars($_GET['resultado']) . "</p>";
    }
    ?>
</body>
</html>