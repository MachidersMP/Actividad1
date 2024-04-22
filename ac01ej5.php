<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Combinación de Nombres y Apellidos</title>
</head>
<body>
    <h1>Combinación de Nombres y Apellidos</h1>
    <ul>
        <?php
        // Función para combinar nombres y apellidos
        function combinar_nombres_apellidos($nombres, $apellidos) {
            shuffle($nombres);
            shuffle($apellidos);
            return array_map(function ($nombre, $apellido) {
                return ucfirst($nombre) . " " . ucfirst($apellido);
            }, $nombres, $apellidos);
        }

        // nombres y apellidos
        $nombres = ["Elena", "Andrés", "Isabel", "Hugo", "Valentina", "Martín", "Julia", "Alejandro", "Camila", "Mateo"];
        $apellidos = ["Gómez", "Hernández", "Díaz", "Vargas", "Muñoz", "Castro", "Álvarez", "Romero", "Suárez", "Navarro"];

        // Obtener la combinación de nombres y apellidos
        $combi_nombres_pellidos = combinar_nombres_apellidos($nombres, $apellidos);

        // Mostrar los nombres y apellidos combinados 
        foreach ($combi_nombres_pellidoss as $nombre_apellido) {
            echo "<li>$nombre_apellido</li>";
        }
        ?>
    </ul>
</body>
</html>
