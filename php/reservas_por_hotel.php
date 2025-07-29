<?php
include 'conexion.php';

$sql = "
SELECT H.nombre, COUNT(R.id_reserva) AS total_reservas
FROM HOTEL H
JOIN RESERVA R ON H.id_hotel = R.id_hotel
GROUP BY H.id_hotel
HAVING COUNT(R.id_reserva) > 0
";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Hoteles con reservas</title>
</head>
<body>
    <h2>Hoteles con reservas</h2>
    <table border="1">
        <tr><th>Hotel</th><th>Total de Reservas</th></tr>
        <?php foreach ($result as $row): ?>
        <tr>
            <td><?= htmlspecialchars($row['nombre']) ?></td>
            <td><?= $row['total_reservas'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
