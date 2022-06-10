<?php
define('DIR', '../');
require_once DIR . 'config.php';

$control = new Controller(); 
$admin = new Admin();


if(!isset($_SESSION['u_id'])){
    $admin -> redirect('login');

}

$uid = $_SESSION['u_id'];

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


        <script language="javascript" type="text/javascript">
function changeRate(id,pos) {

var qu = document.getElementsByName("quantity")[pos].value;
window.location.href="usercontroller/updatecart.php?id="+id+"&q="+qu;

}

function contShop() {

window.location.href="firstlookpage.php";
checkOut
}

function checkOut(uid,totammount) {

window.location.href="checkout.php?id="+uid+"&ta="+totammount;

}

// function dlt(id) {
  

// window.location.href="Controller/dltcart.php?id="+id;

// }

</script>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Plant Store</title>
    
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
.foo{
    position: fixed;
    display: flex;
    z-index: 999;
    
}
.main2{
    height: 100%;
}
</style>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


  </head>
  <body>

<?php include "header.php" ?>

  <div class="mainmenu-area main2">
        <div class="container">
            <div class="row">





<div class="col-md-12">
                    <div class="product-content-right">
                        <div class="woocommerce">
                           
                                <table cellspacing="0" class="shop_table cart">
                                    <thead>
                                        <tr>
                                            
                                            <th class="product-thumbnail">&nbsp;</th>
                                            <th class="product-name">Plant/Seeds</th>
                                            <th class="product-quantity">Quantity</th>
                                             <th class="product-price">Price</th>
                                            <th class="product-subtotal">cancel</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                   <?php 
                       
           $stmt = $admin -> ret("SELECT * FROM `cart` WHERE `u_id` = '$uid'");
           $xstmt = $admin -> ret("SELECT COUNT(*) FROM `cart` WHERE `u_id` = '$uid'");
           $xrow = $xstmt -> fetch(PDO::FETCH_ASSOC);
           
                         $a= implode($xrow);
                        
                        $b = 0;
                        $i = 0;

           while($row = $stmt -> fetch(PDO::FETCH_ASSOC)){ 
                
                $cid = $row['c_id'];    
                       
               $vid = $row['bk_id'];

                $astmt = $admin-> ret("SELECT * FROM `addproduct` WHERE `b_id` = '$vid'");
                $arow = $astmt -> fetch(PDO::FETCH_ASSOC);

                $qun = $row['quantity'];

                 $discount = $arow['discount'];


                 $pri = $arow['price'];

                 $prii = $pri - $discount;

                $totqp = $qun * $prii;
               
              $image = $arow['image'];
              $image = substr($image,3);
             

              $b = $totqp + $b;
              $total = $b + 50;




                            

                        ?>

                                        <tr class="cart_item">
                                           

                                            <td class="product-thumbnail">
                                                <a href="single-product.html"><img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src="../admin/admincontroller/<?php echo $arow['image']; ?>"></a>
                                            </td>

                                            <td class="product-name">
                                                <a href="single-product.html"><?php echo $arow['name']; ?></a> 
                                            </td>

                                            

                                            <td class="product-quantity">
                                                <div class="quantity buttons_added">
                                                      <input size="1"  type="number" name="quantity" class="form-control text-center"  id="<?php echo $row['c_id']; ?>" onChange="changeRate(<?php echo $cid;?>,<?php echo $i; ?>)" min="1" max="100" value="<?php echo $row['quantity']; ?>">
                                                  
                                                </div>
                                            </td>




                                            <td class="product-price">
                                                <span class="amount">₹ <?php echo $totqp.".00" ; ?></span> 
                                            </td>

                                             <td class="product-remove">
                                                <a title="Remove this item" class="remove" href="usercontroller/deletecart.php?id=<?= $row['bk_id']; ?>">X</a> 
                                            </td>
                                        </tr>
                                         <?php
                        ++$i;
                        }  ?>
                                        
                                    </tbody>
                                </table>
                            





                            <div class="cart-collaterals">
                            <div class="cart_totals ">
                                <h2>Cart Totals</h2>

                                <table cellspacing="0">
                                    <tbody>
                                        <tr class="cart-subtotal">
                                            <th>Cart Subtotal</th>
                                 <td><span class="amount">₹ <?php echo $b.".00";?></span></td>
                                        </tr>

                                        <tr class="shipping">
                                            <th>Shipping and Handling</th>
                                            <td>₹ 50</td>
                                        </tr>

                                        <tr class="order-total">
                                            <th>Order Total</th>
                                            <td><strong><span class="amount">₹ <?php echo $total.".00"; ?> </span></strong> </td>

                            <?php 
                            $_SESSION['ammount'] = $total;
                            
                            
                            ?> 



                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                         </div>


 <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6">
                    <button onClick="contShop()" type="button" class="btn btn-block btn-light">Continue Shopping</button>
                </div>
                <div class="col-sm-12 col-md-6 text-right">
                    <button onClick="checkOut(<?php echo $uid ; ?>,<?php echo $total ;?>)" class="btn btn-lg btn-block btn-danger text-uppercase">Checkout</button>
                </div>
            </div>
        </div>








                        </div>                      
                    </div>                    
                </div>


            </div>
        </div>
    </div>



    
    <!-- End product widget area -->



    

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br><br>
<br>
<br>
<br>
<br>
<br><br>
<br>
<br>
<br>
<br>
<br>

<div class="footer-top-area foo">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <h2> Online Plant & Seeds<span>Store</span></h2>
                
                        <p style="color: white; align-content: center;">
we firmly believe that we do not inherit the earth from our ancestors, but borrow it from our children.<p> 
<h1 style="color:white;">Let's pass it on cleaner, better, and greener</p>
                        <div class="footer-social">
                            <a href="facebook.com" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="instagram.com" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="youtube.com" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="likdn.com" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">User Navigation </h2>
                        <ul>
                            <li><a href="">My account</a></li>
                            <li><a href="orderdetail.php">Order history</a></li>
                            <li><a href="">Wishlist</a></li>
                            <li><a href="cart.php">cart</a></li>
                            
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Categories</h2>
                        <?php

       $stcd = $admin -> ret("SELECT * FROM `addcat`");

      while ($rocc= $stcd -> fetch(PDO::FETCH_ASSOC)) {

      ?>
                        <ul>
                            <li><a href="csecondplantpage.php?id=<?= $rocc['cat_id']; ?>"><?php echo $rocc['cname']; ?></a>
                            </li>
                           
                        </ul>  

                         <?php } ?>


                    </div>
                </div>
                
                <!-- <div class="col-md-3 col-sm-6">
                    <div class="footer-newsletter">
                        <h2 class="footer-wid-title">Contact Us</h2>
                        <p>Send your feedback and get exclusive deals you wont find anywhere else straight to your inbox!</p>
                        <div class="newsletter-form">
                            <form action="usercontroller/adminfeedback.php" method="post">
                                <input type="text" placeholder="enter your name" name="a"><br>
                                <br>
                                <textarea name="b" rows="3" cols="40" placeholder="enter your message" ></textarea><br>

                                <input type="hidden" name="c" value="<?php echo $iddd; ?>">
                                <input type="submit" value="Send" name="add">
                            </form>
                        </div>
                    </div>
                </div> -->


            </div>
        </div>
    </div> <!-- End footer top area -->
    
    <!-- <div class="footer-bottom-area foo">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p>&copy; 2021 online Plant store. All Rights Reserved. <a href="" target="_blank">onlineplanttore.com</a></p>
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
    </div> -->
    
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