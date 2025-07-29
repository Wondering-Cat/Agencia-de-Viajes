<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "agencia";

// Conexión
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Recibir datos
$destino = $_GET['destino'];
$fecha = $_GET['fecha'];

// Consulta
$sql = "SELECT * FROM VUELO WHERE destino LIKE ? AND fecha = ?";
$stmt = $conn->prepare($sql);
$destino_busqueda = "%$destino%";
$stmt->bind_param("ss", $destino_busqueda, $fecha);
$stmt->execute();
$result = $stmt->get_result();

// Resultados
echo "<h2>Vuelos encontrados:</h2>";
if ($result->num_rows > 0) {
    while ($fila = $result->fetch_assoc()) {
        echo "<p>Vuelo #{$fila['id_vuelo']}: {$fila['origen']} → {$fila['destino']} - Fecha: {$fila['fecha']} - Plazas disponibles: {$fila['plazas_disponibles']} - Precio: \${$fila['precio']}</p>";
    }
} else {
    echo "<p>No se encontraron vuelos con los criterios ingresados.</p>";
}

$stmt->close();
$conn->close();
?>
<br>
<a href='form_busqueda_vuelos.html'><button>Volver a la Búsqueda</button></a>
<a href='../index.html'><button>Volver al Inicio</button></a>