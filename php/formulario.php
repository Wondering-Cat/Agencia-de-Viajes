<?php
session_start();
include 'notificaciones.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Viaje</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php mostrarNotificacion(); ?>

    <div class="container">
        <h2>Formulario de Intención de Viaje</h2>
        <form action="procesar_registro.php" method="post" class="viaje-form">
            <div class="form-group">
                <label for="nombreHotel">Nombre del hotel:</label>
                <input type="text" id="nombreHotel" name="nombreHotel" required>
            </div>

            <div class="form-group">
                <label for="ciudad">Ciudad:</label>
                <input type="text" id="ciudad" name="ciudad" required>
            </div>

            <div class="form-group">
                <label for="pais">País:</label>
                <input type="text" id="pais" name="pais" required>
            </div>

            <div class="form-group">
                <label for="fecha">Fecha de viaje:</label>
                <input type="date" id="fecha" name="fecha" required>
            </div>

            <div class="form-group">
                <label for="duracion">Duración (días):</label>
                <input type="number" id="duracion" name="duracion" min="1" required>
            </div>

            <input type="submit" value="Registrar viaje">
        </form>
    </div>
</body>
</html>
