<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */


  $receiving_email_address = 'dungnguyen322003@gmail.com';
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  require '../assets/vendor/autoload.php'; 

  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;

  // the argument will configure phpmailer to throw an exception if there is a problem
  $mail = new PHPMailer(true);

  $mail->SMTPDebug = SMTP::DEBUG_SERVER;

  // let PHPMailer knows that SMTP server will be used
  $mail->isSMTP();
  $mail->SMTPAuth = true;

  //establish SMTP server
  $mail->Host = "smtp.gmail.com";
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
  $mail->Port = 587;

  $mail->Username = "dungnguyen322003@gmail.com";
  $mail->Password = "HoangPhongBaoKhanh0802@";

  $mail->setFrom($email, $name);
  $mail->addAddress("dungnguyen322003@gmail.com", "Dung");

  $mail->Subject = $subject;
  $mail->Body = $message;

  echo $mail->send();



?>
