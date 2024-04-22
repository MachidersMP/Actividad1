<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Análisis de Frase</title>
</head>
<body>
    <h2>Análisis de Frase</h2>
    <form method="post" action="">
        <label for="frase">Ingrese una frase:</label>
        <input type="text" id="frase" name="frase" required>
        <button type="submit">Analizar</button>
    </form>
    <?php
    // Función para analizar la frase y mostrar 
    function analizar_frase() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $frase = $_POST["frase"] ?? '';
            $contador_o = 0;
            $contador_vocales = array_fill_keys(['a', 'e', 'i', 'o', 'u'], 0);
            
            // Analizar cada carácter de la frase
            foreach (str_split(strtolower($frase)) as $caracter) {
                if ($caracter == 'o') {
                    $contador_o++;
                }
                if (in_array($caracter, ['a', 'e', 'i', 'o', 'u'])) {
                    $contador_vocales[$caracter]++;
                }
            }
            
            // Mostrar los resultados
            echo "<h3>Resultados:</h3>";
            echo "<p>La letra 'o' aparece $contador_o veces.</p>";
            $vocales_aparecen = array_filter($contador_vocales);
            echo "<p>Las vocales que aparecen son: " . implode(", ", array_keys($vocales_aparecen)) . ".</p>";
            echo "<p>Cada una de las vocales aparece:</p>";
            echo "<ul>";
            foreach ($contador_vocales as $vocal => $conteo) {
                if ($conteo > 0) {
                    echo "<li>$vocal: $conteo</li>";
                }
            }
            echo "</ul>";
        }
    }

    // Función para analizar la frase
    analizar_frase();
    ?>
</body>
</html>
