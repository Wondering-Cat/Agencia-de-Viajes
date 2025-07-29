<?php
session_start();
include 'PaqueteViaje.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $hotel = $_POST['nombreHotel'];
    $ciudad = $_POST['ciudad'];
    $pais = $_POST['pais'];
    $fecha = $_POST['fecha'];
    $duracion = $_POST['duracion'];

    $paquete = new PaqueteViaje($hotel, $ciudad, $pais, $fecha, $duracion);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resumen del Viaje</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <h2>Resumen del Viaje Registrado</h2>
        <p><?php echo $paquete->mostrarDetalle(); ?></p>
        <a href="formulario.php"><button class="ir-formulario">← Volver</button></a>
    </div>
</body>
</html>
