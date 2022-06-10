 <?php
define('DIR', '../../');
require_once DIR .'config.php';

$control = new Controller(); 
$admin = new Admin();



$a = $_GET['n'];
$b = $_GET['phno'];
$c = $_GET['a'];
$d = $_GET['e'];
$e = $_GET['p'];






     $stm=$admin -> cud("INSERT INTO `sellerapprove` (`name`,`phone`,`address`,`email`,`password`) VALUES ('".$a."','".$b."','".$c."','".$d."','".$e."')","saved");
	 echo "<script>alert('you haved given approval')</script>";
	 $admin -> redirect('../viewseller');





?>