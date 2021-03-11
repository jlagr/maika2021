<?php
    // Variables desde el formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    // Datos del destinatario del correo
    $destinatario = "jlgonzalezrojas@gmail.com";
    $asunto = "Contacto desde MaikaTeatro.com";

    $carta = "De: $nombre \n";
    $carta .= "Email: $email \n";
    $carta .= "Mensaje: $mensaje \n\n";
    $carta .= "____________________________________________________________________";

    // Envio del mensaje
    mail($destinatario, $asunto, $carta);
    header('Location: enviado.html');
?>

