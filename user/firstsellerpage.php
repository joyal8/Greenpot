<?php
define('DIR', '../');
require_once DIR . 'config.php';

$control = new Controller(); 
$admin = new Admin();


if(!isset($_SESSION['sa_id'])){
$admin -> redirect('mail/sellerlogin');

}

$sid=$_SESSION['sa_id'];

?>


<!DOCTYPE html>
<!--
	ustora by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	URL: https://www.freshdesignweb.com/ustora/
-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Seller Dashboard</title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendor/linearicons/style.css">
    <link rel="stylesheet" href="assets/vendor/chartist/css/chartist-custom.css">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
    <link rel="stylesheet" href="assets/css/demo.css">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">

    <style>
        
        .footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: black;
   color: white;
   text-align: center;
}
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>


  <style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 20%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.adapa {
  border-radius: 20px;
  background-color: #f2f2f2;
  padding: 50px;
}

</style>
  <body>

 <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                            <li><a href="firstsellerpage.php"><i class="fa fa-user"></i> seller Account</a></li>
                            <!-- <li><a href="#"><i class="fa fa-heart"></i> Wishlist</a></li>
                            <li><a href="cart.html"><i class="fa fa-user"></i> My Cart</a></li>
                            <li><a href="checkout.html"><i class="fa fa-user"></i> Checkout</a></li> -->
                        
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="header-right">
                        <ul class="list-unstyled list-inline">
                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">currency :</span><span class="value">USD </span><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">USD</a></li>
                                    <li><a href="#">INR</a></li>
                                    <li><a href="#">GBP</a></li>
                                </ul>
                            </li>

                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">language :</span><span class="value">English </span><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">German</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End header area -->





<div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="firstsellerpage.php">Home</a></li>
                        <li><a href="firstsellercpage.php">Cart</a></li>
                        <li><a href="order.php">Orders</a></li>
                        <li><a href="firstsellerppage.php">payment details</a></li>

                        <li><a href="slogout.php">Logout</a></li>
                       <!--  <li><a href="cart.html">Cart</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                        <li><a href="#">Category</a></li>
                        <li><a href="#">Others</a></li>
                        <li><a href="#">Contact</a></li> -->
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->
    

<div class="adapa">
  <form action="usercontroller/firstsellerpage.php" method="post" enctype="multipart/form-data">
    <label for="book name">Plant/Seed name:</label>
    
 
   
                                    <input type="text" class="form-control" placeholder="Enter Plant/Seed name" name="name">
                                    <br>


                                       <input type="hidden" class="form-control"  name="sid" value="<?php echo $sid ?>" >


<label for="book name">Select Product catagory:</label>
                             <select name="title" class="form-control">
                                    <option>Choose Product Cateogry</option>
                                                 

                                 <?php

                               $stmts = $admin -> ret("SELECT * FROM `addcat`");

                               while ($rows= $stmts -> fetch(PDO::FETCH_ASSOC)) {

                 ?><option value="<?php echo $rows['cat_id'] ; ?>" ><?php echo $rows['cname']; ?></option>


                                <?php } ?>

                                  </select>
                                    <br>

<label for="book name">Select Product Type:</label>
                            <select name="title_cond" class="form-control">
                                     <option>Choose Product Type</option>

                                      <?php

                               $stmtss = $admin -> ret("SELECT * FROM `addcatcon`");

                               while ($rowss= $stmtss -> fetch(PDO::FETCH_ASSOC)) {

                 ?><option value="<?php echo $rowss['condname'] ; ?>" ><?php echo $rowss['condname']; ?></option>


                                <?php } ?>
                                                  
                             </select>
                                    <br>


                                    <label for="book name">Plant/Seed image:</label>
                                    <input type="file" class="form-control" placeholder="Enter books image" name="image">
                                    <br>
                                    

                                    <label for="book name">Seller name:</label>
                                    <input type="text" class="form-control" placeholder="Enter Seller name" name="aname">
                                    <br>
                                    

                                    <label for="book name">Other Name of Product :</label>
                                    <input type="text" class="form-control" placeholder="Enter Alternative" name="pname">
                                    <br> 
                                    
                                    <label for="book name">Plant/Seed price:</label>
                                    <input type="text" class="form-control" placeholder="Enter Plant/Seed price" name="price">
                                    <br> 
                                    
                                    <label for="book name">Plant/Seed discount:</label>
                                    <input type="text" class="form-control" placeholder="Enter Plant/Seed discount" name="discount">
                                    <br> 
                                    
                                    <label for="book name">Plant/Seed quantity:</label>
                                    <input type="text" class="form-control" placeholder="Enter Plant/Seed quantity" name="quantity">
                                    <br> 


                                    <label for="book name">Plant description:</label>
                                    <textarea class="form-control" placeholder="Enter Plant description" rows="4" name="text"></textarea>
                                    <br>
  
    <input type="submit" value="Submit" name="add">
  </form>
</div>






   <!-- End footer top area -->
    
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p>&copy; 2021 uCommerce. All Rights Reserved. <a href="http://www.freshdesignweb.com" target="_blank">freshDesignweb.com</a></p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="footer-card-icon">
                        <i class="fa fa-cc-discover"></i>
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer bottom area -->


   
    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="js/main.js"></script>
    
    <!-- Slider -->
    <script type="text/javascript" src="js/bxslider.min.js"></script>
	<script type="text/javascript" src="js/script.slider.js"></script>
  </body>
</html>