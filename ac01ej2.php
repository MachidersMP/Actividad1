<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
</head>
<body>
<?php
// Función para validar el inicio de sesión
function iniciar_sesion($usuarios_validos) {
    // Verificar si se han enviado los datos del formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Usuario y la contraseña ingresados por el usuario
        $usua = $_POST["usuario"] ?? "";
        $contra = $_POST["contrasena"] ?? "";

        // Validar el usuario y la contraseña
        if (array_key_exists($usua, $usuarios_validos) && $usuarios_validos[$usua] === $contra) {
            return "Inicio de sesión exitoso. Bienvenido, $usua!";
        } else {
            return "Ingrese un usuario y una contraseña correcta";
        }
    }
    return "";
}

// usuarios válidos y sus contraseñas 
$usuarios_validos = ["Johannes" => "12345","Mauricio" => "54321",];

// Obtener el mensaje de inicio de sesión 
$mensaje_inicio_sesion = iniciar_sesion($usuarios_validos);

// Limpia el mensaje si no se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    $mensaje_inicio_sesion = "";
}
?>

    <h2>Iniciar Sesión</h2>
    <?= $mensaje_inicio_sesion ?>
    <form method="post" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
        Usuario: <input type="text" name="usuario" value="<?= htmlspecialchars($_POST["usuario"] ?? "") ?>"><br>
        Contraseña: <input type="password" name="contrasena"><br>
        <input type="submit" value="Iniciar Sesión">
    </form>
</body>
</html>
