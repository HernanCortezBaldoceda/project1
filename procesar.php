<?php
if (isset($_POST['nombre'])) {
    $nombre = $_POST['nombre'];
    $edad = 22; // Edad fija
    $resultado = "$nombre tiene $edad años.";
    header("Location: index.php?resultado=" . urlencode($resultado));
    exit();
} else {
    header("Location: index.php?resultado=Error: No se ingresó nombre");
    exit();
}
?>