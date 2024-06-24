<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Validación del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = isset($_POST['firstName']) ? $_POST['firstName'] : "";
    $apellido = isset($_POST['lastName']) ? $_POST['lastName'] : "";
    $contacto = isset($_POST['email']) ? $_POST['email'] : "";
    $comentario = isset($_POST['message']) ? $_POST['message'] : "";
    $subject = isset($_POST['subject']) ? $_POST['subject'] : "";

    // Validación adicional
    if (empty(trim($nombre)) || empty(trim($apellido)) || empty(trim($contacto)) || empty(trim($subject)) || (trim($comentario))) {
        header('location: mensaje_error.php');
        exit;
    }

    $body = <<< HTML
            <p><strong>Nombre : </strong> $nombre</p>
            <p><strong>Apellido : </strong> $apellido</p>
            <p><strong>E-Mail : </strong> $contacto</p>
            <p><strong>Subject : </strong> $subject</p>
            <p><strong>Mensaje :</strong> $comentario</p>
            HTML;

    // Enviar correo con PHPMailer
    require 'vendor/autoload.php';

    $mail = new PHPMailer(); // Agrega 'true' para habilitar excepciones
    // Configuro el servidor SMTP y las credenciales
    $mail->SMTPDebug = 0;  // Cambiar a 2 para obtener información detallada
    $mail->isSMTP();
    $mail->Host = 'smtp.office365.com';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;  // Cambiado a 465 para SSL
    $mail->CharSet = 'UTF-8';
    $mail->SMTPAuth = true;
    $mail->Username = 'contacto_web@oneasset.com.py';
    $mail->Password = 'Paraguay_CO';

    // Configura el correo

    $mail->setFrom('contacto_web@oneasset.com.py');
    $mail->addReplyTo('info@oneasset.com.py', $nombre);
    $mail->addAddress('info@oneasset.com.py', '');


    $mail->IsHTML(true);
    $mail->Subject = 'Contacto';
    $mail->AltBody = $body;
    $mail->Body = $body;
    // Enviar correo
    try {
        if ($mail->send()) {
            header('location: mensaje.php');
        } else {
            // echo 'Error al enviar el correo: ' . $mail->ErrorInfo;
            header('location: mensaje_error.php');
        }
    } catch (Exception $e) {
        echo 'Error al enviar el correo: ' . $e->getMessage();
    }
} else {
    header('location: mensaje_error.php');
}
