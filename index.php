<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Vuelos</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">
        <h2>Buscar Vuelos</h2>
        <form action="procesar_vuelos.php" method="post">
            <label for="origen">Origen:</label>
            <input type="text" id="origen" name="origen" required>

            <label for="destino">Destino:</label>
            <input type="text" id="destino" name="destino" required>

            <label for="fecha_salida">Fecha de Salida:</label>
            <input type="date" id="fecha_salida" name="fecha_salida" required>

            <label for="fecha_regreso">Fecha de Regreso:</label>
            <input type="date" id="fecha_regreso" name="fecha_regreso">

            <label for="pasajeros">Número de Pasajeros:</label>
            <input type="number" id="pasajeros" name="pasajeros" min="1" required>

            <input type="submit" value="Buscar">
        </form>
    </div>
</body>
</html>