<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Evaluador de calificación</title>
</head>
<body>
	<h3>Evaluador de calificación</h3>
	<form method="POST" action="">
		<label for="calificacion">Ingresa una calificación de 0 a 100:</label>
		<input type="number" name="calificacion" id="calificacion" min="0" max="100" step="any" required>
		<br><br>
		<button type="submit" name="evaluar">Evaluar</button>
		<hr>
	</form>
	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['evaluar'])) {
		if (isset($_POST['calificacion']) && $_POST['calificacion'] != "") {
			$calificacion = $_POST['calificacion'];
			if (!is_numeric($calificacion)) {
				echo "Error: debes ingresar un número.";
			} else if ($calificacion < 0 || $calificacion > 100) {
				echo "Error: la calificación debe estar entre 0 y 100.";
			} else if ($calificacion >= 90) {
				echo "Excelente";
			} else if ($calificacion >= 80) {
				echo "Muy bien";
			} else if ($calificacion >= 70) {
				echo "Satisfactorio";
			} else {
				echo "No acreditado";
			}
		} else {
			echo "Error: debes ingresar una calificación.";
		}
	}
	?>
</body>
</html>
