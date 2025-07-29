<?php
session_start();

if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = [];
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $paquete = [
        'destino' => $_POST['destino'],
        'hotel' => $_POST['hotel'],
        'precio' => $_POST['precio']
    ];
    $_SESSION['carrito'][] = $paquete;
    session_regenerate_id(true);
}

header("Location: ver_carrito.php");
exit;
