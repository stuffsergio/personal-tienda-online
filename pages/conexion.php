<?php
$conn = new mysqli("localhost", "root", "", "registro");

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
echo "Conexión exitosa"; // Mensaje de prueba para verificar la conexión
?>