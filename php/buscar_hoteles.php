<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "agencia";

// Conexión
$conn = new mysqli($host, $user, $password, $db);
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Recibir datos
$ubicacion = $_GET['ubicacion'];
$habitaciones = $_GET['habitaciones'];

// Consulta
$sql = "SELECT * FROM HOTEL WHERE ubicacion LIKE ? AND habitaciones_disponibles >= ?";
$stmt = $conn->prepare($sql);
$search = "%$ubicacion%";
$stmt->bind_param("si", $search, $habitaciones);
$stmt->execute();
$result = $stmt->get_result();

// Resultados
echo "<h2>Hoteles encontrados:</h2>";
if ($result->num_rows > 0) {
    echo "<ul>";
    while($row = $result->fetch_assoc()) {
        echo "<li><strong>{$row['nombre']}</strong> - Ubicación: {$row['ubicacion']} - Habitaciones disponibles: {$row['habitaciones_disponibles']} - Tarifa: {$row['tarifa_noche']}</li>";
    }
    echo "</ul>";
} else {
    echo "No se encontraron hoteles con esas características.";
}

$stmt->close();
$conn->close();
?>
<br>
<a href='form_busqueda_hoteles.html'><button>Volver a la Búsqueda</button></a>
<a href='../index.html'><button>Volver al Inicio</button></a>
