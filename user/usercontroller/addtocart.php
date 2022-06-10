<?php


define('DIR','../../');
require_once DIR . '/config.php';
$control = new Controller();
$admin = new Admin();


if(isset($_POST['add'])){

    $vid = $_POST['vid'];
    $qun = $_POST['quantity'];
    $uid = $_POST['u_id'];
    $tid = $_POST['name'];
    $s_id =$_POST['sid'];

     $image = $_POST['i'];

    


    $stmt = $admin->ret("SELECT * FROM `cart` WHERE `bk_id` = '$vid' AND `u_id` = '$uid'");
    $row = $stmt -> fetch(PDO::FETCH_ASSOC);
    $num = $stmt -> rowcount();
    if($num>0){
        $updatedquant = 0;
       $Dqun =$row['quantity'];
       $updatedquant = $qun + $Dqun;

        // echo "update" ;
        $stmt = $admin->cud("UPDATE `cart` SET `quantity` = '$updatedquant' WHERE `cart`.`bk_id` = '$vid' AND `cart`.`u_id` = '$uid'","updated");
        $admin->redirect('../cart');
     
    }else{
          $stmt = $admin -> cud("INSERT INTO `cart` (`bk_id`, `quantity`, `u_id` ,`title`,`image`,`sa_id`) VALUES ('".$vid."','".$qun."','".$uid."','".$tid."','".$image."','".$s_id."')","saved");
            $admin->redirect('../cart');
           // echo "inser";
          
    }
   

}


?>
