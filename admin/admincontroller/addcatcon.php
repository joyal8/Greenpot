
 
 <?php
define('DIR', '../../');
require_once DIR .'config.php';

$control = new Controller(); 
$admin = new Admin();


//create
if(isset($_POST['submit']))
{

  
  

  $a=$_POST['con'];
  

 $stmt=$admin -> cud("INSERT INTO `addcatcon` (condname) VALUES ('$a')","saved");

  $admin -> redirect('../addcatcon');
 }




//delete
if(isset($_GET['id']))
{
  
  $id=$_GET['id'];
  $stmt=$admin -> cud("DELETE FROM `addcatcon` WHERE catcon_id='$id'","deleted");
  $admin -> redirect('../viewcat');
}




//update


if(isset($_POST['updates']))
{

  
    $a=$_POST['cat'];
    $id=$_POST['id'];


$stmt=$admin -> cud("UPDATE `addcatcon` SET `condname`='$a' WHERE `catcon_id`='$id'","updated");

$admin -> redirect('../viewcat');
 } 



?>