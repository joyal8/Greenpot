
<?php

define('DIR', '../../');
require_once DIR .'config.php';

$control = new Controller(); 
$admin = new Admin();

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
 
 

 if(isset($_POST['sregister']))
{

  
  $a=$_POST['name'];
  $b=$_POST['email'];
  $c=$_POST['phno'];
  $d=$_POST['text'];
  $e=$_POST['password'];
 
  
     $stmt=$admin -> cud("INSERT INTO `seller` (name,phone,address,email,password) VALUES ('$a','$c','$d','$b','$e')","saved");

     // $admin -> redirect('../mail/sellerlogin');

    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = $b;                     // SMTP username
    $mail->Password   = $e;                               // SMTP password
    $mail->SMTPSecure = 'ssl';;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom($b,$a);
    $mail->addAddress('rklk7105@gmail.com','admin');

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'book seller registration approve?';
    $mail->Body    =  $a.' , ' .$c. ' , ' .$d;
   
     
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    // $mail->AddEmbeddedImage($image); 

    $mail->send();

     //what you should do after sending mail
     // echo"<script>
     //        alert('you are registered suceesfully wait for admin notification for login');
     //        window.location.href='../mail/sellerlogin.php';
     //      </script>";
     //    }

    exit();





} catch (Exception $e) {
  
  //error if somthing went wrong
echo '<script>alert("ThankYou for registration!. Please wait For your Account approval ")</script>';

    // echo '<script>alert("Enter Google Authorised mail and password.")</script>';

     
}

?>
