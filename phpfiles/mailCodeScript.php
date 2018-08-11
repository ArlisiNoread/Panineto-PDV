<?php

// Fetching data that is entered by the user
/*
  $email = $_POST['email'];
  $password = $_POST['password'];
  $to_id = $_POST['toid'];
  $message = $_POST['message'];
  $subject = $_POST['subject'];
 */

// Configuring SMTP server settings
$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = 'php.servicio.arlisi';
$mail->Password = '4z;_^4T{#TtTtDR3';

// Email Sending Details
$mail->addAddress('arlisi.noread@gmail.com');
$mail->setFrom('php.servicio.arlisi@gmail.com');
$mail->Subject = 'Prueba de PHP';

$msg = 'Nuevo Pedido';



include './pdv-piezas/empy.php';
echo 'HOLAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA';
echo var_dump($_POST);



$mail->msgHTML(msg);
/*
if (!$mail->send()) {
    $error = "Mailer Error: " . $mail->ErrorInfo;
    echo '<p id="para">' . $error . '</p>';
} else {
    echo '<p id="para">Message sent!</p>';
}
 * */
 
?>