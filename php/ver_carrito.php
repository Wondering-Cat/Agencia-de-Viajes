<?php
session_start();
$carrito = $_SESSION['carrito'] ?? [];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Carrito de Viajes</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <h2>Tu Carrito de Paquetes Turísticos</h2>
        <?php if (count($carrito) > 0): ?>
            <ul>
                <?php foreach ($carrito as $item): ?>
                    <li>
                        Destino: <?= htmlspecialchars($item['destino']) ?> |
                        Hotel: <?= htmlspecialchars($item['hotel']) ?> |
                        Precio: <?= htmlspecialchars($item['precio']) ?> USD
                    </li>
                <?php endforeach; ?>
            </ul>
            <a href="vaciar_carrito.php"><button class="ir-formulario">Vaciar Carrito</button></a>
        <?php else: ?>
            <p>Tu carrito está vacío.</p>
        <?php endif; ?>
        <br><a href="../index.html"><button class="ir-formulario">← Volver al inicio</button></a>
    </div>
</body>
</html>
