
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Iniciar una sesión para manejar el estado del usuario
session_start();

require 'includes/config/database.php';
$db = conectarDB();


// Obtener los datos enviados desde JavaScript
$user = $_POST['user'];
$passwordInput = $_POST['password'];

// Validar que se hayan recibido datos
if (empty($user) || empty($passwordInput)) {
    echo json_encode(["success" => false, "message" => "Por favor, completa todos los campos."]);
    exit();
}

// Consultar al usuario en la base de datos
$sql = "SELECT id, user_s, passw FROM users WHERE user_s = ?";
$stmt = $db->prepare($sql);
$stmt->bind_param("i", $user);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    // Verificar si la contraseña ingresada coincide con el hash almacenado
    if (password_verify($passwordInput, $row['passw'])) {
        // Guardar información del usuario en la sesión
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['username'] = $row['user_s'];

        echo json_encode(["success" => true, "message" => "Inicio de sesión exitoso."]);
    } else {
        echo json_encode(["success" => true, "message" => "Contraseña incorrecta."]);
    }
} else {
    echo json_encode(["success" => false, "message" => "Usuario no encontrado."]);
}

// Cerrar conexión
$stmt->close();
$db->close();
?>
