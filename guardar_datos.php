<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require 'includes/config/database.php';
$db = conectarDB();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = $_POST['titulo'] ?? '';
    $modulo = $_POST['modulo'] ?? '';
    $contenido = $_POST['contenido'] ?? '';
    $video = $_POST['video'] ?? '';

    // Crear la carpeta de subidas si no existe
    $uploadDir = 'uploads/';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    // Procesar imágenes enviadas
    foreach ($_FILES as $key => $file) {
        $nombreArchivo = $uploadDir . basename($file['name']);
        if (move_uploaded_file($file['tmp_name'], $nombreArchivo)) {
            // Reemplazar las rutas base64 por las rutas del servidor
            $contenido = str_replace("data:image/png;base64", $nombreArchivo, $contenido);
        }
    }

    // Guardar los datos en la base de datos
    if (!$db) {
        echo json_encode(['success' => false, 'error' => "Error de conexión: " . mysqli_connect_error()]);
        exit;
    }

    $stmt = $db->prepare("INSERT INTO solutions (title, categories, description, video) VALUES (?, ?, ?, ?)");
    $stmt->bind_param('ssss', $titulo, $modulo, $contenido, $video);
    if ($stmt->execute()) {
        echo json_encode(['success' => true, 'action' => 'agregar']);
    } else {
        echo json_encode(['success' => false, 'error' => $stmt->error]);
    }

    $stmt->close();
    $db->close();
} else {
    echo json_encode(['success' => false, 'error' => 'Método no permitido.']);
}




