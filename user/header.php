

<div class="header-area" style="background-image: url(img/BGPLANT1.jpg);  >
        <div class="container">
            <div class="row" >
                <div class="col-md-8">
                    <div class="user-menu" >
                        <ul>
                            <li ><a style="color:white;" href="#"><i class="fa fa-user"></i> My Account</a></li>
                            <li><a style="color:white;"  href="orderdetail.php"><i class="fa fa-heart"></i>order details</a></li>
                            <li><a style="color:white;" href="cart.php"><i class="fa fa-user"></i> My Cart</a></li>
                            <li><a style="color:white;" href="checkout.php"><i class="fa fa-user"></i> Checkout</a></li>
                            <li><a style="color:white;" href="logout.php"><i class="fa fa-user"></i> Logout</a></li>
                        </ul>
                    </div>
                </div>
                
     
            </div>
        </div>
    </div> <!-- End header area -->
    
    <!-- End site branding area -->
    <style type="text/css">
     .mainmenu-area
     {
      height: 80px;

     } 
    </style>
    
           
        <div class="mainmenu-area">
        <div class="container">
        <div class="row">    
<nav class="navbar navbar-expand-lg navbar-light">
  <!-- <a class="navbar-brand" href="#">Home</a> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="firstlookpage.php">HomePage <span class="sr-only">(current)</span></a>
      </li>
      <li>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="nsecondplantpage.php">OutDoor Plants & Seeds</a>
      </li>


      <li class="nav-item">
        <a class="nav-link" href="osecondplantpage.php">Indore Plants & Seeds</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Category
        </a>

     
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
             <?php

       $stc = $admin -> ret("SELECT * FROM `addcat`");

      while ($roc= $stc -> fetch(PDO::FETCH_ASSOC)) {

      ?>
          <a class="dropdown-item" href="csecondplantpage.php?id=<?= $roc['cat_id']; ?>"><?php echo $roc['cname']; ?></a>
          
        
       
    <?php } ?>
     </div>

      </li>
      <li class="nav-item">
        <a class="nav-link" href="cart.php">Cart</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="checkout.php">Checkout</a>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="orderdetail.php">Order Details</a>
      </li>
      
    </ul>
    
  </div>
</nav>
</div>
</div>
</div>


 <!-- End mainmenu area -->
    
   