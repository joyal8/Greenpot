<?php

define('DIR','../');
require_once DIR . 'config.php';
$control = new Controller();
$admin = new Admin();

    if(isset($_SESSION['sa_id'])){
        session_destroy();
        unset($_SESSION['sa_id']);
         $admin -> redirect('mail/sellerregister');
    }  

?>
