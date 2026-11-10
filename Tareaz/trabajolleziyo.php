<!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensajes sospechosos</title>
    <link rel="stylesheet" href="style14.css">
</head>
<body>

    <h1>Analizador de mensajes</h1>
    <p class="subtitulo">Revisa tus mensajes de forma sencilla y rápida</p>

    <form method="POST" action="">
        <label>Escribe un mensaje por línea por línea:</label>

        <textarea name="mensajes" rows="7" required></textarea>
        
        <button type="submit">Analizar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $enter = $_POST["mensajes"] ?? "";

        $ls = preg_split('/\r\n|\r|\n/', $enter);

        $totalMen = 0;
        $norm = 0;
        $rev = 0;
        $chosos = 0;
        $totalClav = 0;

        $mayCaract = -1;
        $menMay = "";

        $result = [];

        foreach ($ls as $l) {

            $mens = trim($l);

            if ($mens == "") {
                continue;
            }

            $caracts = strlen($mens);

            $text = strtolower($mens);

            $pSeparadas = preg_split('/\s+/', trim($mens));
            $cantPalabras = count($pSeparadas);

            $alertas = substr_count($text, "alerta");
            $dinero = substr_count($text, "dinero");
            $ofertas = substr_count($text, "oferta");

            $clavs = $alertas + $dinero + $ofertas;

            if (strpos($text, "www.") !== false) {
                $enlace = "Sí";
                $conEnlace = true;
            } else {
                $enlace = "No";
                $conEnlace = false;
            }

            $exclam = substr_count($mens, "!");

            if ($alertas >= 2 || $dinero >= 2 || $ofertas >= 2) {
                $repetida = "Sí";
            } else {
                $repetida = "No";
            }

            if ($clavs >= 2 || ($conEnlace && $clavs >= 1)) {

                $clasif = "SOSPECHOSO";
                $chosos++;

            } elseif ($exclam >= 3 || $clavs >= 1) {

                $clasif = "REVISAR";
                $rev++;

            } else {

                $clasif = "NORMAL";
                $norm++;

            }

            $totalMen++;
            $totalClav += $clavs;

            if ($caracts > $mayCaract) {
                $mayCaract = $caracts;
                $menMay = $mens;
            }

            $result[] = [
                "mensaje" => $mens,
                "caracteres" => $caracts,
                "palabras" => $cantPalabras,
                "claves" => $clavs,
                "enlace" => $enlace,
                "repetida" => $repetida,
                "exclamaciones" => $exclam,
                "clasificacion" => $clasif
            ];
        }
    ?>

    <?php if ($totalMen > 0) { ?>

        <h2>Resultados del análisis</h2>

        <div class="tabla-contenedor">
            <table>
                <tr>
                    <th>Mensaje</th>
                    <th>Caracteres</th>
                    <th>Palabras</th>
                    <th>Palabras clave</th>
                    <th>Tiene enlace</th>
                    <th>Clave repetida</th>
                    <th>Exclamaciones</th>
                    <th>Clasificación</th>
                </tr>

                <?php foreach ($result as $fila) { ?>

                <tr>
                    <td class="mensaje">
                        <?php echo htmlspecialchars($fila["mensaje"], ENT_QUOTES, "UTF-8"); ?>
                    </td>

                    <td><?php echo $fila["caracteres"]; ?></td>
                    <td><?php echo $fila["palabras"]; ?></td>
                    <td><?php echo $fila["claves"]; ?></td>
                    <td><?php echo $fila["enlace"]; ?></td>
                    <td><?php echo $fila["repetida"]; ?></td>
                    <td><?php echo $fila["exclamaciones"]; ?></td>

                    <td class="<?php
                        if ($fila["clasificacion"] == "SOSPECHOSO") {
                            echo "sospechoso";
                        } elseif ($fila["clasificacion"] == "REVISAR") {
                            echo "revisar";
                        } else {
                            echo "normal";
                        }
                    ?>">
                        <?php echo $fila["clasificacion"]; ?>
                    </td>
                </tr>

                <?php } ?>
            </table>
        </div>

        <h2>Resumen de estadísticas</h2>

        <div class="resumen">
            <p><strong>Total de mensajes:</strong>
                <?php echo $totalMen; ?></p>

            <p><strong>Mensajes normales:</strong>
                <?php echo $norm; ?></p>

            <p><strong>Mensajes para revisar:</strong>
                <?php echo $rev; ?></p>

            <p><strong>Mensajes sospechosos:</strong>
                <?php echo $chosos; ?></p>

            <p><strong>Mensaje con más caracteres:</strong>
                <?php echo htmlspecialchars($menMay, ENT_QUOTES, "UTF-8"); ?></p>

            <p><strong>Caracteres del mensaje más largo:</strong>
                <?php echo $mayCaract; ?></p>

            <p><strong>Total de apariciones de palabras clave:</strong>
                <?php echo $totalClav; ?></p>
        </div>

    <?php } else { ?>

        <p class="aviso">No escribiste ningún mensaje válido. Intenta de nuevo.</p>

    <?php } ?>

    <?php } ?>

</body>
</html>
