<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Promedio</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
	<?php include 'menu.php'; ?>
	<h3>Calcular promedio</h3>
	<form method="POST" action="">
		<label for="a">Calificación 1:</label>
		<input type="number" step="any" name="a" id="a" required>
		<br><br>
		<label for="b">Calificación 2:</label>
		<input type="number" step="any" name="b" id="b" required>
		<br><br>
		<label for="c">Calificación 3:</label>
		<input type="number" step="any" name="c" id="c" required>
		<br><br>
		<button type="submit" name="calcular">Calcular</button>
		<hr>
	</form>
	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['calcular'])) {
		$a = floatval($_POST['a']);
		$b = floatval($_POST['b']);
		$c = floatval($_POST['c']);
		$promedio = ($a + $b + $c) / 3;
		echo "El promedio es: $promedio";
	}
	?>
</body>
</html>