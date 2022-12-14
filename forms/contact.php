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

  require '../assets/vendor/PHPMailer.php';
  require '../assets/vendor/SMTP.php';
  require '../assets/vendor/Exception.php';

  // Define namespaces
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;

  // Creat instance of phpmailer
  // the argument will configure phpmailer to throw an exception if there is a problem
  $mail = new PHPMailer(true);

  $mail->SMTPDebug = SMTP::DEBUG_SERVER;

  // let PHPMailer knows that SMTP server will be used
  $mail->isSMTP();


  //establish SMTP server
  $mail->Host = "smtp.gmail.com";
  $mail->SMTPAuth = "true";
  $mail->SMTPSecure = "tls";
  $mail->Port = 587;

  //establish connection to SMTP server
  $mail->Username = "phu170927@gmail.com";
  $mail->Password = "chiatay081217";

  $mail->setFrom($email, $name);
  $mail->addAddress("dungnguyen322003@gmail.com", "Dung");

  $mail->Subject = $subject;
  $mail->Body = $message;

 

  if ( $mail->Send()) {
    echo "Email Sent..!";
  } else{
    echo "Error..!";
  }

  // Close smtp connection
  $mail->smtpClose();


?>
