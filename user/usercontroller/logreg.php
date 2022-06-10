
<?php
define('DIR', '../../');
require_once DIR .'config.php';

$control = new Controller(); 
$admin = new Admin();

//register
if(isset($_POST['register']))
{

  
  $a=$_POST['name'];
  $b=$_POST['email'];
  $d=$_POST['password'];
  
 $stmt=$admin -> ret("SELECT `email` from `user` where `email`='$b'");

   $row = $stmt->fetch(PDO::FETCH_ASSOC);
   $num = $stmt->rowCount();
   // If number of user rows returned more than 0, it means email already exists
   if($num>0){

        echo "<br/><br/><strong>Error: </strong> User already exists with the email '$b'.";
            } else {
                // Insert user data into database
             $stmt=$admin -> cud("INSERT INTO `user`(`name`,`email`,`password`) VALUES('$a','$b','$d')","saved");
             
           }
$admin -> redirect('../login');          
 }



//login
 if(isset($_POST['login']))
{

  
  $b=$_POST['email'];
  $d=$_POST['password'];
  

   $stmt=$admin->ret("SELECT * from `user` WHERE email='$b' AND password='$d'");
   $row = $stmt->fetch(PDO::FETCH_ASSOC);
   $num = $stmt->rowCount();
        if($num>0){
            $id=$row['u_id'];
            $_SESSION['u_id']=$id;
             $admin->redirect('../firstlookpage');
      }else{
          echo"<script>
            alert('you have entered wrong email');
            window.location.href='../login.php';
          </script>";
        }
   

  }

  //password confirm using email

   if(isset($_POST['cp']))
{

  
  $b=$_POST['email'];

  

   $stmt=$admin->ret("SELECT * from `user` WHERE email='$b'");
   $row = $stmt->fetch(PDO::FETCH_ASSOC);
   $num = $stmt->rowCount();
        if($num>0){
            $id=$row['u_id'];
            $_SESSION['u_id']=$id;
            $admin->redirect('../forgotpassword');
      }else{
           echo"<script>
            alert('you have entered wrong email');
            window.location.href='../forgotemail.php';
          </script>";
           // $admin->redirect('../password');
        }
   

  }


//password update
  if(isset($_POST['update']))
{

   
  $password=$_POST['password'];
  $id=$_SESSION['u_id'];


 $stmt=$admin -> cud("UPDATE user SET password='$password' WHERE u_id='$id'","updated");

 $admin -> redirect('../login');
 }


?>