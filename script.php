<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $categoria = $_POST['categoria'];
    $comentarios = $_POST['comentarios'];

    $filename = "datos_cuestionario.txt";

    // Formatear los datos
    $data = "Nombre: $nombre\nCorreo Electrónico: $email\nCategoría: $categoria\nComentarios: $comentarios\n\n";

    // Guardar los datos en el archivo de texto
    file_put_contents($filename, $data, FILE_APPEND);

    echo "Datos guardados correctamente.";
}
?>