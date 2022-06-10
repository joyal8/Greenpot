<?php

define('DIR', '../../');
require_once DIR .'config.php';

$control = new Controller(); 
$admin = new Admin();




if(isset($_POST['login']))
{

  
  $b=$_POST['email'];
  $d=$_POST['password'];
  

   $stmt=$admin->ret("SELECT * from `sellerapprove` WHERE email='$b'");
   $row = $stmt->fetch(PDO::FETCH_ASSOC);
   $num = $stmt->rowCount();
   if($num>0){
        $astmt=$admin->ret("SELECT * from `sellerapprove` WHERE password='$d'");
        $arow = $astmt->fetch(PDO::FETCH_ASSOC);
        $num = $astmt->rowCount();
        if($num>0){
            $id=$row['sa_id'];
            $_SESSION['sa_id']=$id;
            $admin->redirect('../firstsellerpage');
      }else{
          echo"<script>
            alert('your password is wrong');
            window.location.href='../mail/sellerlogin.php';
          </script>";
        }
    }else{
           echo"<script>
            alert('you have entered wrong username or email');
            window.location.href='../mail/sellerlogin.php';
          </script>";

  }

}


?>