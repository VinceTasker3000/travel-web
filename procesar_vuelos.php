<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $origen = $_POST['origen'];
    $destino = $_POST['destino'];
    $fecha_salida = $_POST['fecha_salida'];
    $fecha_regreso = $_POST['fecha_regreso'];
    $pasajeros = $_POST['pasajeros'];

    // Se puede realizar una conexión a una base de datos para el caso real de la agencia
    // utilizaré resultados ya creados para la visualización la página 

    echo "<h2>Resultados de la búsqueda:</h2>";
    echo "Origen: " . htmlspecialchars($origen) . "<br>";
    echo "Destino: " . htmlspecialchars($destino) . "<br>";
    echo "Fecha de Salida: " . htmlspecialchars($fecha_salida) . "<br>";
    echo "Fecha de Regreso: " . htmlspecialchars($fecha_regreso) . "<br>";
    echo "Número de Pasajeros: " . htmlspecialchars($pasajeros) . "<br>";

    // Ejemplo de resultados ficticios para la prueba de la funcionalidad de la página
    echo "<p>Vuelo encontrado: Vuelo 1234, Aerolínea LATAM, Precio: $500</p>";
    echo "<p>Vuelo encontrado: Vuelo 5678, Aerolínea American Airlines, Precio: $450</p>";
    echo "<p>Vuelo encontrado: Vuelo 9101, Aerolínea Delta, Precio: $480</p>";
    echo "<p>Vuelo encontrado: Vuelo 1121, Aerolínea United Airlines, Precio: $470</p>";
}
?>
