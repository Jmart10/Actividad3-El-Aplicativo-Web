<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'includes/config/database.php';
$db = conectarDB();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Respuesta inicial para confirmar recepción
    echo json_encode([
        'status' => 'success',
    ]);

    // Capturar el ID enviado desde JavaScript
    $id = $_POST['id'] ?? '';

    var_dump($id);
    // Validar que el ID no esté vacío
    if (empty($id)) {
        echo json_encode([
            'status' => 'error',
            'message' => 'ID no proporcionado',
        ]);
        exit;
    }

    // Verificar conexión a la base de datos
    if (!$db) {
        die(json_encode([
            'status' => 'error',
            'message' => 'Error de conexión: ' . mysqli_connect_error(),
        ]));
    }

    // Preparar la consulta para eliminar un registro
    $stmt = $db->prepare("DELETE FROM solutions WHERE id = ?");
    if (!$stmt) {
        echo json_encode([
            'status' => 'error',
            'message' => 'Error al preparar la consulta: ' . $db->error,
        ]);
        exit;
    }

    // Vincular el parámetro (asegúrate de que `$id` sea del tipo correcto)
    $stmt->bind_param("i", $id);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        echo json_encode([
            'status' => 'success',
            'message' => 'Registro eliminado correctamente',
        ]);
    } else {
        echo json_encode([
            'status' => 'error',
            'message' => 'Error al ejecutar la consulta: ' . $stmt->error,
        ]);
    }

    // Cerrar la consulta y la conexión
    $stmt->close();
    $db->close();
}
