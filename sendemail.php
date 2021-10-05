<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['email'])){

  if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $alert = '<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
                <div class="alert alert-danger alert-dismissible fade show d-flex justify-content-between" role="alert" style="width: 400px; max-width:100%">
                  Please enter a valid email.
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
              </div>';
    return;
  }

  if(isset($_POST['contact'])){
    $subject = $_POST['subject'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
  }else{
    $email = $_POST['email'];
  }


  
  $reply_to = $email;

  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'poweredbykx'; // Gmail address which you want to use as SMTP server
    $mail->Password = 'kx0penmail'; // Gmail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('poweredbykx@gmail.com'); // Gmail address which you used as SMTP server
    $mail->addAddress('aanis434@gmail.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    //Recipients
    $mail->setFrom('poweredbykx@gmail.com'); // Gmail address which you used as SMTP server
    // $mail->addAddress('service@poweredbykx.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)     //Add a recipient
    $mail->addAddress('anisur.rahman@intelli.global');
    $mail->addReplyTo($reply_to);
    // $mail->addCC('cc@example.com');
    $mail->addBCC('anisur.rahman@intelli.global');

    $mail->isHTML(true);
    $mail->Subject = isset($_POST['contact']) ? 'Message Received From POWEREDBYKX Contact Form' : 'Message Received From POWEREDBYKX Newsletter Form';
    $mail->Body = "<h3>Email: $email</h3>";

    if(isset($_POST['contact'])){
      $mail->Body = "<h3>Subject : $subject <br>Name : $name <br>Email: $email <br>Phone : $phone <br>Message : $message</h3>";
    }

    $mail->send();
      $alert = '<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
          <div class="alert alert-success alert-dismissible fade show d-flex justify-content-between" role="alert" style="width: 400px; max-width:100%">
          Message Sent! Thank you for contacting us.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      </div>';
  } catch (Exception $e){
        $alert = '<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
          <div class="alert alert-danger alert-dismissible fade show d-flex justify-content-between" role="alert" style="width: 400px; max-width:100%">
            '.$e->getMessage().'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>';
  }
}
