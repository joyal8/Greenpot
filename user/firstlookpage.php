<?php
define('DIR', '../');
require_once DIR . 'config.php';

$control = new Controller(); 
$admin = new Admin();


if(!isset($_SESSION['u_id'])){
    $admin -> redirect('login');

}


$iddd=$_SESSION['u_id'];
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
    <title>books mart</title>
    
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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>


    <![endif]-->
    <style>
.nav-item {
  margin-left:30px;
  margin-right:30px;
}
    </style>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


  </head>
  <body style="background-color:wheat ;">

<?php include "header.php" ?>

<style type="text/css">
    .slider-area{
        object-fit:fill;
    }
</style>


     <div class="slider-area" style="background-color:powderblue; ">
            <!-- Slider -->
            <div class="block-slider block-slider4">
                <ul class="" id="bxslider-home4">


                    <li>
                        <img style="width:350px; margin-left: 150px;" src="img/znp.png" alt="Slide">
                        <div class="caption-group">
                            <h2 class="caption title">
                                All New<span class="primary">1000+<strong>Plus</strong></span>
                            </h2>
                            <h4 class="caption subtitle">Good Collections</h4>
                            <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                        </div>
                    </li>
                    <li><img style="width:350px; margin-left: 150px;" src="img/h4-slide2.png" alt="Slide">
                        <div class="caption-group">
                            <h2 class="caption title">
                                by one, get one <span class="primary">50% <strong>off</strong></span>
                            </h2>
                            <h4 class="caption subtitle">All New Plants*</h4>
                            <a class="caption button-radius" href="#"><span class="icon"></span>Available now</a>
                        </div>
                    </li>
                    <li ><img  style="width:350px; margin-left: 150px;" src="img/zvvv.png" alt="Slide">
                        <div class="caption-group">
                            <h2 class="caption title">
                                <span class="primary"><strong>Seeds available</strong></span>
                            </h2>
                            <h4 class="caption subtitle">Shop Now</h4>
                            <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                        </div>
                    </li>
                    
                </ul>
            </div>
            <!-- ./Slider -->
    </div> <!-- End slider area -->
    
    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <i class="fa fa-refresh"></i>
                        <p>Easy Maintainance</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo2">
                        <i class="fa fa-truck"></i>
                        <p>Free shipping</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo3">
                        <i class="fa fa-lock"></i>
                        <p>Secure payments</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo4">
                        <i class="fa fa-gift"></i>
                        <p>Gift Now!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
     <!-- End promo area -->
    
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Our Best Sales</h2>
                        <div class="product-carousel">



                         <?php 
                   


                $stmts = $admin -> ret("SELECT * FROM `addproduct` WHERE `condname`='Indore' ORDER BY `b_id` DESC");
                    while($rows = $stmts-> fetch(PDO::FETCH_ASSOC)){ 

                        $image = $rows['image'];
                        $image = substr($image,3);
                
                
                ?>


                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="../admin/admincontroller/<?php echo $rows['image']; ?>" height="300px" width="300px" alt="">
                                    <div class="product-hover">
                                        <a href="thirdbookpage.php?vid=<?php echo $rows['b_id']?>" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="thirdbookpage.php?vid=<?php echo $rows['b_id']?>" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2><a href="single-product.html"><?php echo $rows['name'] ; ?></a></h2>
                                
                                <div class="product-carousel-price">
                                    <ins>Rs<?php echo $rows['price'] ; ?></ins> <del>Rs<?php echo $rows['discount'] ; ?></del>
                                </div> 
                            </div>

                        <?php } ?>





                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->








    
    <div class="brands-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-wrapper">
                        <div class="brand-list">
                            <img src="img/instagram_mar.svg" alt="">
                            <img src="img/youtube_mar.svg" alt="">
                            <img src="img/twitter_mar.svg" alt="">
                            <img src="img/linkedin_mar.svg" alt="">                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End brands area -->
    
    <div class="product-widget-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h1>Outdoor Plants & Seeds</h1>
                        <a href="nsecondplantpage.php" class="wid-view-more">View All</a>



            <?php 
                $stmtss = $admin -> ret("SELECT * FROM `addproduct` WHERE `condname`='Outdoor' LIMIT 3");
                    while($rowss = $stmtss-> fetch(PDO::FETCH_ASSOC)){ 

                        $image = $rowss['image'];
                        $image = substr($image,3);
                
                
                ?>

                        <div class="single-wid-product">
                            <a href="firstlookpage.php"><img height="20px"; src="../admin/admincontroller/<?php echo $rowss['image']; ?>"  alt=""></a>
                            <h2><a style="font-size:20px" href="thirdbookpage.php?vid=<?php echo $rowss['b_id']?>"><?php echo $rowss['name'] ; ?></a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins style="font-size:20px">Rs.<?php echo $rowss['price'] ; ?></ins> <del>Rs.<?php echo $rowss['discount'] ; ?></del>
                            </div>                            
                        </div>

                    <?php } ?>

                      
                    </div>
                </div>



                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h1>Indore Plants & Seeds</h1>
                        <a href="osecondplantpage.php" class="wid-view-more">View All</a>
                 
                            <?php 
                   
                $stmtsss = $admin -> ret("SELECT * FROM `addproduct` WHERE `condname`='Indore' LIMIT 3");
                    while($rowsss = $stmtsss-> fetch(PDO::FETCH_ASSOC)){ 

                        $image = $rowsss['image'];
                        $image = substr($image,3);
                
                
                ?>

                        <div class="single-wid-product">
                            <a href="firstlookpage.php"><img src="../admin/admincontroller/<?php echo $rowsss['image']; ?>" height="30px" alt="" ></a>
                            <h2><a style="font-size:20px" href="thirdbookpage.php?vid=<?php echo $rowsss['b_id']?>"><?php echo $rowsss['name'] ; ?></a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins style="font-size:20px">Rs.<?php echo $rowsss['price'] ; ?></ins> <del>Rs.<?php echo $rowsss['discount'] ; ?></del>
                            </div>                            
                        </div>

                    <?php } ?>


                    
                        
                    </div>
                </div>





                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h1 >Hanging Plants & Seeds</h1>
                        <a href="hangingplantpage.php" class="wid-view-more">View All</a>
                        




             <?php 

                $stmtssss = $admin -> ret("SELECT * FROM `addproduct` WHERE `condname`='Hanging' LIMIT 3");
                    while($rowssss = $stmtssss-> fetch(PDO::FETCH_ASSOC)){ 

                        $image = $rowssss['image'];
                        $image = substr($image,3);
                
                
                ?>

                        <div class="single-wid-product">
                            <a href="firstlookpage.php"><img src="../admin/admincontroller/<?php echo $rowssss['image']; ?>" height="10" alt="" class=""></a>
                            <h2><a style="font-size:20px" href="thirdbookpage.php?vid=<?php echo $rowssss['b_id']?>"><?php echo $rowssss['name'] ; ?></a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins style="font-size:20px">Rs.<?php echo $rowssss['price'] ; ?></ins> <del>Rs.<?php echo $rowssss['discount'] ; ?></del>
                            </div>                            
                        </div>

                    <?php } ?>
                        
                    </div>
                </div>


            </div>
        </div>
    </div> 
    <!-- End product widget area -->


<?php include "footer.php" ?>
    
    <!-- End footer bottom area -->
   
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