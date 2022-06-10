
 
 <?php
define('DIR', '../../');
require_once DIR .'config.php';

$control = new Controller(); 
$admin = new Admin();


//create
if(isset($_POST['add']))
{

  
  

  $a=$_POST['a'];
  $b=$_POST['b'];
  $c=$_POST['c'];

  

 $stmt=$admin -> cud("INSERT INTO `adminfeedback` (`name`,`text`,`u_id`) VALUES ('$a','$b','$c')","saved");

  $admin -> redirect('../firstlookpage');
 }

?>