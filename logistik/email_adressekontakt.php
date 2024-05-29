<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;

require_once __DIR__ . './../includes/PHPMailer/Exception.php';
require_once __DIR__ . './../includes/PHPMailer/PHPMailer.php';
require_once __DIR__ . './../includes/PHPMailer/SMTP.php';

$mail = new PHPMailer(true);
$alert = '';

if (!isset($_SESSION['alert'])) {
  $_SESSION['alert'] = '';
}

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $telefon = $_POST['telefon'];
  $message = $_POST['message'];

  try {
    $mail->isSMTP();
    $mail->Host =  'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'jovannkursula@gmail.com';
    $mail->Password = 'fgzokzomitabftub ';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = '465';
    $mail->setFrom('jovannkursula@gmail.com');
    $mail->addAddress('jovannkursula@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = 'Neu Nachricht erhalten';
    $mail->Body = "<h3>Name : $name <br>Email: $email <br>Telefon : $telefon <br>Message : $message </h3>";

    if ($mail->send()) {
      require_once __DIR__ .'/Databasetabelle.php'; 
      Databasetabelle::speichert($name, $email, $telefon, $message);

      $_SESSION['alert'] = 'Nachricht gesendet!';

      header("Location: ./../kontakt.php");
      exit();
    } else {
      $alert = '';
    }
  } catch (Exception $e) {
    $alert = '<div class="alert-error">
                <span>Fehler beim Senden. Bitte später erneut versuchen.</span>
              </div>';
  }
}


if (!empty($_SESSION['alert'])) {
  $alert = '<div class="alert-success">
              <span>' . $_SESSION['alert'] . '</span>
            </div>';
  unset($_SESSION['alert']);
}
