<?php

define('DIR','../../');
require_once DIR . 'config.php';
$control = new Controller();
$admin = new Admin();




$a  = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
$d = $_POST['d'];
$e = $_POST['e'];
$f = $_POST['f'];
$g = $_POST['g'];
$h  = $_POST['h'];
$i  = $_POST['i'];
$j  = $_POST['j'];
$k  = $_POST['k'];
$l  = $_POST['date'];
$m  = $_POST['address'];
$n  = $_POST['tid'];



 $stmt = $admin -> cud("INSERT INTO `sendpayment` (`name`,`sa_id`,`title`,`quantity`,`price`,`cname`,`cnumber`,`expm`,`expy`,`cvv`,`amount`,`date`,`address`,`tid`) VALUES ('".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$g."','".$h."','".$i."','".$j."','".$k."','".$l."','".$m."','".$n."')","saved");

?>