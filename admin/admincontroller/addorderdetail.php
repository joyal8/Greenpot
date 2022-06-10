<?php


define('DIR','../../');
require_once DIR . 'config.php';
$control = new Controller();
$admin = new Admin();

if(isset($_POST['submit'])){

    
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $d = $_POST['d'] ;
    $e = $_POST['e'] ;
    $f = $_POST['f'] ;
    $g = $_POST['g'] ;
    $h = $_POST['h'];
    $i = $_POST['i'];
    $j = $_POST['j'];
    $k = $_POST['k'];
    $l = $_POST['l'];


 

    $stmt = $admin -> cud("INSERT INTO `addorderdetail` ( `name`, `address`, `state`, `pin`, `shipcom`, `bdate`, `ddate`, `status`, `u_id`, `or_id`, `paymode`, `tamount`) VALUES ('".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$g."','".$h."','".$i."','".$j."','".$k."','".$l."')","saved");
    $admin -> redirect('../vieworderpay');


}

//update


if(isset($_POST['update']))
{ 
    $e = $_POST['e'] ;
    $f = $_POST['f'] ;
    $g = $_POST['g'] ;
    $h = $_POST['h'];
    $id = $_POST['i'];


$stmt=$admin -> cud("UPDATE `addorderdetail` SET `shipcom`='$e', `bdate`='$f', `ddate`='$g', `status`='$h' WHERE `ao_id`='$id'","updated");

$admin -> redirect('../sendorderstatus');
 } 


//delete
if(isset($_GET['id']))
{
  
  $id=$_GET['id'];
  $stmt=$admin -> cud("DELETE FROM `addorderdetail` WHERE `ao_id`='$id'","deleted");
  $admin -> redirect('../sendorderstatus');
}

?>