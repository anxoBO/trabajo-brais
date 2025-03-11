<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $categoria = $_POST['categoria'];
    $subcategoria = $_POST['subcategoria'];
    $comentarios = $_POST['comentarios'];

    $recipient = "tu-correo@ejemplo.com"; // Reemplaza esto con tu dirección de correo
    $subject = "Nuevo registro al torneo de powerlifting";
    $body = "Nombre: $nombre\nCorreo Electrónico: $email\nCategoría: $categoria\nSubcategoría: $subcategoria\nComentarios: $comentarios\n\n";
    $headers = "From: $email";

    if (mail($recipient, $subject, $body, $headers)) {
        echo "Datos enviados correctamente.";
    } else {
        echo "Error al enviar los datos.";
    }
}
?>
