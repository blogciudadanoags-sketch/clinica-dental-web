<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

$destinatario = "blogciudadano@gmail.com";
$asunto = "Nuevo mensaje del formulario";

$contenido = "Nombre: " . $nombre . "\n";
$contenido .= "Email: " . $email . "\n";
$contenido .= "Teléfono: " . $telefono . "\n";
$contenido .= "Mensaje: " . $mensaje . "\n";

$cabeceras = "From: $email";

if(mail($destinatario, $asunto, $contenido, $cabeceras)){
    echo "Mensaje enviado correctamente.";
} else {
    echo "Error al enviar el mensaje.";
}
?>