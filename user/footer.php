
 <div class="footer-top-area">
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
                
                <div class="col-md-3 col-sm-6">
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
                </div>


            </div>
        </div>
    </div> <!-- End footer top area -->
    
    <div class="footer-bottom-area">
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
    </div>