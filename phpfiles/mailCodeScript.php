<?php

require_once '../PHPMailer-master/src/Exception.php';
require_once '../PHPMailer-master/src/PHPMailer.php';
require_once '../PHPMailer-master/src/SMTP.php';
date_default_timezone_set('America/Mexico_City');

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
$mail->Subject = 'Nuevo Pedido';

$msg = 'Nuevo Pedido <br>';

//include './pdv-piezas/empy.php';
//echo 'Si estás viendo esto es que funciona <br>';
echo var_dump($_POST);
//echo 'Fin <br>';

$json = json_decode($_POST['json'], TRUE);

$total = 0;
$x = 1;
//echo var_dump($json);
foreach ($json as $key) {
    echo var_dump($key);
    $msg .= $x . ": ";
    $msg .= key["nombre"] . " ";
    $msg .= key["acompanamiento"] . " ";
    $msg .= "$" . key["precio"] . " ";
    $msg .= "<br>";
    $total .= (float) key["precio"];
    $x++;
}

$msg .= "<br>" . "Total: $" . $total;

$msg .= "<br>" . var_dump($json);
$msg .= "<br>" . var_dump($json);

echo $msg;

$mail->msgHTML($msg);

if (!$mail->send()) {
    $error = "Mailer Error: " . $mail->ErrorInfo;
    echo '<p id="para">' . $error . '</p>';
} else {
    echo '<p id="para">Message sent!</p>';
}
?>