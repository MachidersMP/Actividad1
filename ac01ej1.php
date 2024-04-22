<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida al Navegador</title>
</head>
<body>
    <?php
    // Función para obtener el agente de usuario
    function agente_usuario() {
        return $_SERVER['HTTP_USER_AGENT'];
    }

    // Función para saber el navegador basado en el agente de usuario
    function determinar_navegador($agente_usuario) {
        $navegadores = array(
            'MSIE' => 'Internet Explorer',
            'Firefox' => 'Mozilla Firefox',
            'Chrome' => 'Google Chrome',
            'Safari' => 'Safari',
            'Opera' => 'Opera'
        );

        foreach ($navegadores as $clave => $valor) {
            if (strpos($agente_usuario, $clave) !== false) {
                return $valor;
            }
        }

        return "desconocido";
    }

    // Función para mostrar el mensaje de bienvenida y el navegador
    function mostrar_mensaje($mensaje, $navegador) {
        echo "$mensaje<br>Estás utilizando el navegador: $navegador";
    }

    // Obtener el agente de usuario
    $agente_usuario = agente_usuario();

    // Definir un mensaje de bienvenida
    $mensaje_bienvenida = "¡Bienvenido!";

    // Determinar el navegador
    $navegador = determinar_navegador($agente_usuario);

    // Mostrar el mensaje de bienvenida y el navegador
    mostrar_mensaje($mensaje_bienvenida, $navegador);
    ?>
</body>
</html>
