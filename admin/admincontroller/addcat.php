
 
 <?php
define('DIR', '../../');
require_once DIR .'config.php';

$control = new Controller(); 
$admin = new Admin();


//create
if(isset($_POST['submit']))
{

  
  

  $a=$_POST['cat'];
  

 $stmt=$admin -> cud("INSERT INTO `addcat` (cname) VALUES ('$a')","saved");

  $admin -> redirect('../addcat');
 }




//delete
if(isset($_GET['id']))
{
  
  $id=$_GET['id'];
  $stmt=$admin -> cud("DELETE FROM `addcat` WHERE cat_id='$id'","deleted");
  $admin -> redirect('../viewcat');
}




//update


if(isset($_POST['update']))
{

  
    $a=$_POST['cat'];
    $id=$_POST['id'];


$stmt=$admin -> cud("UPDATE `addcat` SET `cname`='$a' WHERE `cat_id`='$id'","updated");

$admin -> redirect('../viewcat');
 } 



?>