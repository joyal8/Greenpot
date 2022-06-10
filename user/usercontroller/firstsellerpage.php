<?php


define('DIR','../../');
require_once DIR . 'config.php';
$control = new Controller();
$admin = new Admin();

if(isset($_POST['add'])){

    
    $a = $_POST['name'];
    $b = $_POST['title'];
    $c = $_POST['title_cond'];
    $d = $_POST['aname'] ;
    $e = $_POST['pname'] ;
    $f = $_POST['price'] ;
    $g = $_POST['discount'] ;
    $h = $_POST['quantity'];
    $i = $_POST['text'];
    $sa_id =$_POST['sid'];

  $targetDir = "../../admin/admincontroller/upload/";
  $image=$targetDir.basename($_FILES["image"]["name"]); // @image = "upload/c.jpg"
  move_uploaded_file($_FILES['image']["tmp_name"], $image);


    $stmt = $admin -> cud("INSERT INTO `addproduct` ( `name`,  `cname`, `condname`, `aname`, `pname`, `price`, `discount`, `quantity`, `description`, `image`,`sa_id`) VALUES ('".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$g."','".$h."','".$i."','".$image."','".$sa_id."')","saved");
    $admin -> redirect('../firstsellerpage');

    
}


?>



