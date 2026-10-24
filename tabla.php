
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla de multiplicar</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

    <?php include 'menu.php'; ?>

    <h1>Generador de tabla de multiplicar</h1>

    <form method="POST">

        <label>Escribe un número entero:</label>
        <input type="number" name="numero" step="1" required>

        <button type="submit">Generar tabla</button>

    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $numero = $_POST["numero"];

        echo "<h2>Tabla del " . $numero . "</h2>";

        echo "<table>";
        echo "<tr><th>Operación</th><th>Resultado</th></tr>";

        for ($i = 1; $i <= 10; $i++) {

            $resultado = $numero * $i;

            echo "<tr>";
            echo "<td>" . $numero . " x " . $i . "</td>";
            echo "<td>" . $resultado . "</td>";
            echo "</tr>";

        }

        echo "</table>";
    }
    ?>

</body>
</html>
