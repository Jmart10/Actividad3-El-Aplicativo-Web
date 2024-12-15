<?php

$password = "123456789";

$hashedPassword = password_hash($password, PASSWORD_BCRYPT);
echo "contraseña Hasheada: " . $hashedPassword;
?>