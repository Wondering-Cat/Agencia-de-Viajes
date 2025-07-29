<?php
include 'conexion.php';

$stmt = $conn->prepare("INSERT INTO HOTEL (nombre, ubicación, habitaciones_disponibles, tarifa_noche) VALUES (?, ?, ?, ?)");
$stmt->execute([
    $_POST['nombre'],
    $_POST['ubicacion'],
    $_POST['habitaciones'],
    $_POST['tarifa']
]);

echo "Hotel registrado correctamente. <a href='form_hotel.html'>Volver</a>";
