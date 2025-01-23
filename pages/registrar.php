<?php
include("conexion.php"); // Asegúrate de que la ruta es correcta

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
    // Obtener los datos del formulario
    $nombre = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $mensaje = mysqli_real_escape_string($conn, $_POST['mensaje']);

    // Validar que los campos no estén vacíos
    if (!empty($nombre) && !empty($email) && !empty($mensaje)) {
        $sql = "INSERT INTO datos (nombre, email, mensaje) VALUES ('$nombre', '$email', '$mensaje')";

        if (mysqli_query($conn, $sql)) {
            echo "<script>document.getElementById('mensajeExito').innerText = 'Registro exitoso';</script>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "Por favor, completa todos los campos.";
    }
} else {
    echo "Acceso no permitido.";
}
?>