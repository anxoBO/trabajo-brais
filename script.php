<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $categoria = $_POST['categoria'];
    $comentarios = $_POST['comentarios'];

    $filename = "datos_cuestionario.csv";
    $file_exists = file_exists($filename);

    // Abrir el archivo para escritura
    $file = fopen($filename, 'a');

    // Escribir el encabezado si el archivo no existía
    if (!$file_exists) {
        fputcsv($file, ['Nombre', 'Correo Electrónico', 'Categoría', 'Comentarios']);
    }

    // Escribir los datos del cuestionario
    fputcsv($file, [$nombre, $email, $categoria, $comentarios]);

    // Cerrar el archivo
    fclose($file);
    
    echo "Datos guardados correctamente.";
}
?>
