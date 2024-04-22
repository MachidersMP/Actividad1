<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador de Números Primos Menores a 110</title>
</head>
<body>
    <?php
    // Función para verificar si un número es primo
    function esprimo($num) {
        if ($num <= 1) return false; // Un número menor o igual a 1 no es primo
        for ($i = 2; $i <= sqrt($num); $i++) { // Comprueba la raíz cuadrada del número
            if ($num % $i === 0) return false; // Si el número es menor o igual a su raíz cuadrada, no es primo
        }
        return true; // Si realiza la funcion, el número es primo
    }

    // Función para generar números primos menores a 110 con el array
    function generar_num_primos($cant) {
        $num_primo = [];
        while (count($num_primo) < $cant) {
            $num = mt_rand(2, 109); // Genera números aleatorios entre 2 al 109 
            if (esprimo($num) && !in_array($num, $num_primo)) { // Verifica si el número es primo y si no está en el array de números primos
                $num_primo[] = $num; // Añade el número primo al array
            }
        }
        return $num_primo; // Devuelve el array de números primos 
    }

    // Elije  la cant de números primos 
    $cant = 20; 

    // Generar números primos
    $num_primo = generar_num_primos($cant);

    // Mostrar los números primos generados
    echo "<h2>Números Primos Generados:</h2>";
    echo "<ul>"; 
    foreach ($num_primo as $num) { // array de números primos
        echo "<li>$num</li>"; // Muestra cada número primo 
    }
    echo "</ul>"; 
    ?>
</body>
</html>
