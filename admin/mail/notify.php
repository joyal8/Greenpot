
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer.php';
require 'SMTP.php';
require 'Exception.php';

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    //Server settings Signed out
 

 if(isset($_POST['add']))
{

  $email=$_POST['e'];
  $name=$_POST['n'];
  $message=$_POST['m'];
 


    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'vishakadapa@gmail.com';                     // SMTP username
    $mail->Password   = '7022560978m';                               // SMTP password
    $mail->SMTPSecure = 'ssl';;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('vishakadapa@gmail.com', 'admin');
    $mail->addAddress($email,$name);

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'this is subject';
    $mail->Body    = $message;
   
     
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    // $mail->AddEmbeddedImage($image); 

    $mail->send();

     //what you should do after sending mail
    echo"<script>
            alert('you notification is sent sucessfully!!!');
            window.location.href='../viewseller.php';
          </script>";

    exit();

}

} catch (Exception $e) {
  
  //error if somthing went wrong

    echo '<script>alert("Message could not be sent.")</script>';
}
?>
