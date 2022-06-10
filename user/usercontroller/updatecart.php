<?php
define('DIR','../../');
require_once DIR . 'config.php';
$control = new Controller();
$admin = new Admin();

$q = $_GET['q'];

$id = $_GET['id'];


        // echo "update" ;
        $stmt = $admin->cud("UPDATE `cart` SET `quantity` = '$q' WHERE `cart`.`c_id` = '$id'","updated");
       $admin->redirect('../cart');
     

?>