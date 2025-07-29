<?php
include 'conexion.php';

$stmt = $conn->prepare("INSERT INTO VUELO (origen, destino, fecha, plazas_disponibles, precio) VALUES (?, ?, ?, ?, ?)");
$stmt->execute([
    $_POST['origen'],
    $_POST['destino'],
    $_POST['fecha'],
    $_POST['plazas_disponibles'],
    $_POST['precio']
]);

echo "Vuelo registrado correctamente. <a href='form_vuelo.html'>Volver</a>";
