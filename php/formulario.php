<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir los datos del formulario
    $nombre = htmlspecialchars($_POST['nombre']);
    $correo = htmlspecialchars($_POST['correo']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    // Dirección de destino
    $destino = "boda2025arely.luis@gmail.com"; // Reemplaza con tu correo electrónico
    $asunto = "Nuevo mensaje de $nombre";

    // Construir el mensaje
    $cuerpo = "Nombre: $nombre\n";
    $cuerpo .= "Correo Electrónico: $correo\n";
    $cuerpo .= "Mensaje:\n$mensaje";

    // Encabezados adicionales
    $headers = "From: $correo\r\n";
    $headers .= "Reply-To: $correo\r\n";

    // Enviar el correo
    if (mail($destino, $asunto, $cuerpo, $headers)) {
        echo "Mensaje enviado con éxito.";
    } else {
        echo "Error al enviar el mensaje.";
    }
} else {
    echo "Acceso no autorizado.";
}
?>
