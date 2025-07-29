<?php
function mostrarNotificacion() {
    $mensajes = [
        "¡Oferta del día! 20% de descuento a Cancún.",
        "Reserva hoy y recibe una noche gratis en Madrid.",
        "Últimos cupos disponibles para Buenos Aires.",
        "Aprovecha: vuelos a Roma desde $299 USD."
    ];
    $indice = array_rand($mensajes);
    echo "<script>
        document.addEventListener('DOMContentLoaded', function() {
            alert('" . $mensajes[$indice] . "');
        });
    </script>";
}
?>
