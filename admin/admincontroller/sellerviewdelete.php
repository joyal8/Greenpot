 <?php
define('DIR', '../../');
require_once DIR .'config.php';

$control = new Controller(); 
$admin = new Admin();


if(isset($_GET['did']))
{
  
  $id=$_GET['did'];
  $stmt=$admin -> cud("DELETE FROM `sellerapprove` WHERE `sa_id`='".$id."'","deleted");
  $admin -> redirect('../viewselleraproved');
}




?>