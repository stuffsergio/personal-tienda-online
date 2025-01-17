<?php
include("conexion.php");



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Procesar los datos del formulario
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    // Aquí guardarías los datos en la base de datos o realizarías otras acciones.
    if (isset($_POST['register'])) {
        if (
            strlen($_POST['name']) >= 1 &&
            strlen($_POST['email']) >= 1 &&
            strlen($_POST['mensaje']) >= 1
        ) {
            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $mensaje = trim($_POST['mensaje']);
            $fecha = date("d/m/y");
    
            $consulta = "INSERT INTO datos(nombre, email, mensaje, fecha)
                VALUES('$name', '$email', '$mensaje', '$fecha')";
            $resultado = mysqli_query($conex, $consulta);
            if ($resultado) {
                ?>
                    <h3 class="success">Tu registro se ha completado</h3>
                <?php
            } else {
                ?>
                    <h3 class="error">Ha habido un error</h3>
                <?php
            }
        } else {
            ?>
                <h3 class="error">Debes completar todos los campos</h3>
            <?php
        }
    }
    // Redirigir a la misma página o a una página de éxito
    header('Location: pages/newsletter.html');
    exit;
}
?>

