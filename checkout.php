<?php
session_start();
include("connect.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Restaurant Wheel Checkout</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/revolution-slider.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<!-- <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon"> -->
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="css/responsive.css" rel="stylesheet">

 <!--Social media image link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>

<body>

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <!-- Main Header -->
    <header class="main-header">
    	<!-- Header Top -->
    	
        <!-- Header Top End -->
        
        
        <!-- Main Box -->
    	<div class="main-box">
        	<div class="auto-container">
            	<div class="outer-container clearfix">
                    <!--Logo Box-->
                    <div class="logo-box">
                        <div class="logo"><a href="homepage.php"><img src="images/logo.png" alt="Artica"></a></div>
                    </div>
                    
                    <!--Nav Outer-->
                    <div class="nav-outer clearfix">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <!-- Toggle Button -->    	
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button>
                            </div>
                            
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                <li><a href="homepage.php">Home</a>
                                    	
                                        </li>
                                        <li><a href="about.php">About</a></li>
                                       <!-- <li><a href="">Order Now</a></li>-->
                                        
                                        <li><a href="#" data-toggle="modal" data-target="#myModal">Bulk Order</a></li>
                                    
                                         <li><a href="gallery.php">Gallery</a></li>
                                         <li><a href="contact.php">Contact</a></li>
                                        
                                        
    
                                       <li class="dropdown"><a href="#">More Pages</a>
                                    	<ul>
                                         <li><a href="snacks.php">Snacks</a></li>
                                        <li><a href="shopping-cart.php">Shopping Cart</a></li>
                                        <li><a href="checkout.php">Checkout</a></li>

                                        <li><a href="reservation.php">Reservation</a></li>
                                        <li><a href="ordernow.php">Order Now</a></li>    
                                             
                                        
                                        </ul>
                                    </li>  
                            
                                   <li class="dropdown"><a href="#">Setting</a>
                                    	<ul>
                                         <li><a href="change_password.php">change Password</a></li>
                                         <li><a href="logout.php"><strong>Logout</strong></a></li>
                                           <li>
        <strong>
            <?php
            if(isset($_SESSION['email'])){
                $email = $_SESSION['email'];
                $query = mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
                while($row = mysqli_fetch_array($query)){
                    echo '<span style="color: #ff5722; font-size: 18px; font-family: Arial, sans-serif;">&nbsp;Hii,&nbsp;' . $row['firstName'] . ' ' . $row['lastName'] . '</span>';
                }
            }
            ?>
        </strong>
    
</li>  
                                        
                                        </ul>
                                    </li>   
                                    
                                    
                                 </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->
                        
                        <!--Reserv Box Btn-->
                        
                        
                        <div class="btn-outer"><a href="ordernow.php" class=" reserv-box-btn">Order Now</a></div>
                        
                    </div><!--Nav Outer End-->
                    
                    <!-- Hidden Nav Toggler -->
                    <div class="nav-toggler">
                    	<button class="hidden-bar-opener"><span class="icon fa fa-bars"></span></button>
                    </div><!-- / Hidden Nav Toggler -->
                    
            	</div>    
            </div>
        </div>
    
    </header>
    <!--End Main Header -->
    
    <!-- Hidden Navigation Bar -->
    <section class="hidden-bar right-align">
        
        <div class="hidden-bar-closer">
            <button class="btn"><i class="fa fa-close"></i></button>
        </div>
        
        <!-- Hidden Bar Wrapper -->
        <div class="hidden-bar-wrapper">
        
            <!-- .logo -->
            <div class="logo text-center">
                <a href="homepage.php"><img src="images/logo-2.png" alt="Artica"></a>			
            </div><!-- /.logo -->
            
            <!-- .Side-menu -->
            <div class="side-menu">
            	<!-- .navigation -->
                <ul class="navigation clearfix">
                <li><a href="homepage.php">Home</a> </li>
                                        <li><a href="about.php">About</a></li>
                                       <!-- <li><a href="">Order Now</a></li>-->
                                        
                                        <li><a href="#" data-toggle="modal" data-target="#myModal">Bulk Order</a></li>
                                    
                                         <li><a href="gallery.php">Gallery</a></li>
                                         <li><a href="contact.php">Contact</a></li>
                                        
                                    
                    <li class="dropdown"><a href="#">More Pages</a>
                            <ul>
                                        <li><a href="snacks.php">Snacks</a></li>
                                        <li><a href="shopping-cart.php">Shopping Cart</a></li>
                                        <li><a href="checkout.php">Checkout</a></li>

                                        <li><a href="reservation.php">Reservation</a></li>
                                        <li><a href="ordernow.php">Order Now</a></li>    
                                        

                              </ul>
                    </li>

                    <li class="dropdown"><a href="#">Setting</a>
                                    	<ul>
                                         <li><a href="change_password.php">change Password</a></li>
                                         <li><a href="logout.php"><strong>Logout</strong></a></li>

                                     <li>    <a href="#">
        <strong>
            <?php
            if(isset($_SESSION['email'])){
                $email = $_SESSION['email'];
                $query = mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
                while($row = mysqli_fetch_array($query)){
                    echo '<span style="color: #ff5722; font-size: 18px; font-family: Arial, sans-serif;">Hii,&nbsp;' . $row['firstName'] . ' ' . $row['lastName'] . '</span>';
                }
            }
            ?>
        </strong>
    </a>
</li>  


                 </ul>
            </div><!-- /.Side-menu -->
        
            <div class="social-icons">
                 <!--Social Icon Two-->
            <ul class="social-icon-two">
                <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                <li><a href="#"><span class="fab fa-skyatlas"></span></a></li>
                <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                
            </ul>
            </div>
        
        </div><!-- / Hidden Bar Wrapper -->
    </section>
    <!-- / Hidden Bar -->
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/10.jpg);">	
    	<div class="auto-container">
    		<h3>Hand-Crafted Dishes Sourced</h3>
        	<h2>Checkout</h2>
        </div>
    </section>
    <!--Page Title-->
    
    <div class="checkout-page">
        <div class="auto-container">
            	
            <!--Default Links-->
            <ul class="default-links">
                <li class="clearfix">Returning Customer ? <a href="#" class="theme-btn btn-style-three pull-right">click here to login</a></li>
                <li class="clearfix">Have a Coupon ? <a href="#" class="theme-btn btn-style-three pull-right">click here to enter your code</a></li>
            </ul>
                
            <!--Billing Details-->
            <div class="billing-details">
                <div class="shop-form default-form">
                    <form method="post" action="checkout.html">
                        <div class="row clearfix">
                            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                
                                <div class="default-title"><h2>Billing Details</h2></div>
                        
                                <div class="row clearfix">
                                    
                                    <!--Form Group-->
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="field-name" value="" placeholder="First name" required>
                                    </div>
                                    
                                    <!--Form Group-->
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="field-name" value="" placeholder="Last name" required>
                                    </div>
                                    
                                    <!--Form Group-->
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="field-name" value="" placeholder="Email" required>
                                    </div>
                                    
                                    <!--Form Group-->
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="field-name" value="" placeholder="Phone" required>
                                    </div>
                                    
                                    <!--Form Group-->
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <textarea placeholder="Address"></textarea>
                                    </div>
                                    
                                    <!--Form Group-->
                                    <div class="form-group country col-md-12 col-sm-12 col-xs-12">
                                        <select name="country">
                                            <option>Country</option>
                                            <option>India</option>
                                            <option>India</option>
                                            <option>India</option>
                                            <option>India</option>
                                        </select>
                                    </div>
                                    
                                    <!--Form Group-->
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="field-name" value="" placeholder="State" required>
                                    </div>
                                    
                                    <!--Form Group-->
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="field-name" value="" placeholder="Zip" required>
                                    </div>
                                    
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="check-box"><input type="checkbox" name="shipping-option" id="account-option"> &ensp; <label for="account-option">Creat an account?</label></div>
                                    </div>
                                    
                                </div>
                            </div>
                            
                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                <div class="default-title"><h2>Ship To a Different Address?</h2></div>
                                    <div class="row clearfix">
                                        <div class="form-group">
                                            <textarea class="shiping-address" placeholder="Chane Your Shipping Address Here . . ."></textarea>
                                        </div>
                                        
                                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="check-box"><input type="checkbox" name="shipping-option" id="account-address"> &ensp; <label for="account-address">Creat an account?</label></div>
                                        </div>
                                        
                                    </div>
                            </div>
                        </div>                             
                    </form>
                    
                </div>
                
            </div><!--End Billing Details-->
            
            <!--Cart Outer-->
    		<div class="cart-outer">
            	<div class="default-title"><h2>Your Order Summary</h2></div>
                <div class="table-outer">
                	<table class="cart-table">
                        <thead class="cart-header">
                            <tr>
                            	<th class="prod-column" colspan="2">PRODUCT</th>
                                <th class="price">Price</th>
                                <th>QUANTITY</th>
                                <th>Total</th>
                                <th><span class="fa fa-trash-o"></span></th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <tr>
                                <td colspan="2" class="prod-column">
                                    <div class="column-box">
                                        <figure class="prod-thumb"><a href="#"><img src="images/resource/products/prod-thumb-1.jpg" alt=""></a></figure>
                                        <h4 class="prod-title">Caffee Americano</h4>
                                    </div>
                                </td>
                                <td class="price">Rs 550.00</td>
                                <td class="qty"><div class="quantity-spinner"><button type="button" class="minus"><span class="fa fa-minus"></span></button><input type="text" name="product" value="1" class="prod_qty" /><button type="button" class="plus"><span class="fa fa-plus"></span></button></div></td>
                                <td class="sub-total">Rs550.00</td>
                                <td class="remove"><a href="#" class="remove-btn"><span class="fa fa-remove"></span></a></td>
                            </tr>
                            
                            <tr>
                                <td colspan="2" class="prod-column">
                                    <div class="column-box">
                                        <figure class="prod-thumb"><a href="#"><img src="images/resource/products/prod-thumb-2.jpg" alt=""></a></figure>
                                        <h4 class="prod-title">Light Cappuccino</h4>
                                    </div>
                                </td>
                                <td class="price">Rs 80.00</td>
                                <td class="qty"><div class="quantity-spinner"><button type="button" class="minus"><span class="fa fa-minus"></span></button><input type="text" name="product" value="1" class="prod_qty" /><button type="button" class="plus"><span class="fa fa-plus"></span></button></div></td>
                                <td class="sub-total">Rs 80.00</td>
                                <td class="remove"><a href="#" class="remove-btn"><span class="fa fa-remove"></span></a></td>
                            </tr>
                            
                            <tr>
                                <td colspan="2" class="prod-column">
                                    <div class="column-box">
                                        <figure class="prod-thumb"><a href="#"><img src="images/resource/products/prod-thumb-3.jpg" alt=""></a></figure>
                                        <h4 class="prod-title">Caramel Latte</h4>
                                    </div>
                                </td>
                                <td class="price">Rs 2499</td>
                                <td class="qty"><div class="quantity-spinner"><button type="button" class="minus"><span class="fa fa-minus"></span></button><input type="text" name="product" value="1" class="prod_qty" /><button type="button" class="plus"><span class="fa fa-plus"></span></button></div></td>
                                <td class="sub-total">Rs 2499</td>
                                <td class="remove"><a href="#" class="remove-btn"><span class="fa fa-remove"></span></a></td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
                
            </div>
            
            <!--Place Order-->
            <div class="place-order">
                <div class="default-title"><h2>Payment Method</h2></div>
                
                
                <!--Payment Options-->
                <div class="payment-options">
                    <ul>
                    	<li>
                            <div class="radio-option">
                                <input type="radio" name="payment-group" id="payment-1" checked>
                                <label for="payment-1">Direct Bank Transfer <span class="small-text">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</span></label>
                            </div>
                        </li>
                        <li>
                            <div class="radio-option">
                                <input type="radio" name="payment-group" id="payment-2" >
                                <label for="payment-2">Cheque Payment</label>
                            </div>
                        </li>
                        <li>
                            <div class="radio-option">
                                <input type="radio" name="payment-group" id="payment-3">
                                <label for="payment-3">Cash On Delivery</label>
                            </div>
                        </li>
                        <li>
                            <div class="radio-option">
                                <input type="radio" name="payment-group" id="payment-4">
                                <label for="payment-4">Paypal</label>
                            </div>
                        </li>
                    </ul>
                </div>
                
                <button type="button" class="theme-btn btn-style-three place-order">Place Order</button>
                
            </div>
            <!--End Place Order-->
            
        </div>
    </div>
    
    
            
    <!--Main Footer-->
    <footer class="main-footer">
    	<div class="auto-container">
        
            <!--Widgets Section-->
            <div class="widgets-section">
            	<div class="row clearfix">
                	<!--Big Column-->
                	<div class="big-column col-md-6 col-sm-12 col-xs-12">
                    	<div class="row clearfix">
                            
                            <!--Footer Column-->
                        	<div class="footer-column col-md-7 col-sm-7 col-xs-12">
                            	<div class="footer-widget about-widget">
                                	<div class="footer-logo"><figure><a href="index.html"><img src="images/footer-logo.png" alt=""></a></figure></div>
                                    <div class="widget-content">
                                    	<div class="text">Marsh mallow muffin soufflé jelly-o tart cake Marshmallow macaroon jelly jubes dont tiramisu croissant cake.</div>
                                        <!--Contact Info-->
                                        <ul class="contact-info">
                                            <li><i class="fa fa-map-marker" aria-hidden="true"></i>
                                                Address : 44 New Design Street,<br>Melbourne 005</li>
                                            <li><i class="fa fa-phone" aria-hidden="true"></i>
                                                Phone : (01) 800 433 633</li>
                                        	<li><i class="fa fa-envelope" aria-hidden="true"></i>
                                                Email : info@Example.com</li>
                                        </ul>
                                        
                                    </div>
                                </div>
                            </div>
                            
                            <!--Footer Column-->
                        	<div class="footer-column col-md-5 col-sm-5 col-xs-12">
                            	<div class="footer-widget links-widget">
                                	<h2>usefull links</h2>
                                    <div class="widget-content">
                                        <ul class="list">
                                            <li><a href="#">About Company</a></li>
                                            <li><a href="#">Bulk Order</a></li>
                                            <li><a href="#">Our Blog</a></li>
                                            <li><a href="#">Order Now</a></li>
                                            <li><a href="#">Contact us</a></li>
                                        </ul>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                    
                    <!--Big Column-->
                	<div class="big-column col-md-6 col-sm-12 col-xs-12">
                    	<div class="row clearfix">
                            
                            <!--Footer Column-->
                        	<div class="footer-column col-md-6 col-sm-6 col-xs-12">
                            	<div class="footer-widget posts-widget">
                                	<h2>Latest Blog Post</h2>
                                    <div class="widget-content">
                                    	<div class="posts">
                                            <div class="post">
                                                <figure class="post-thumb"><img src="images/resource/post-thumb-1.jpg" alt=""><a href="blog-single.html" class="overlay-link"><span class="fa fa-link"></span></a></figure>
                                                <div class="desc-text"><a href="blog-single.html">Peaceful Hostel</a></div>
                                                <div class="time">25th June 2016</div>
                                            </div>
                                            <div class="post">
                                                <figure class="post-thumb"><img src="images/resource/post-thumb-2.jpg" alt=""><a href="blog-single.html" class="overlay-link"><span class="fa fa-link"></span></a></figure>
                                                <div class="desc-text"><a href="blog-single.html">Chicken Caesar</a></div>
                                                <div class="time">25th June 2016</div>
                                            </div>
                                            <div class="post">
                                                <figure class="post-thumb"><img src="images/resource/post-thumb-3.jpg" alt=""><a href="blog-single.html" class="overlay-link"><span class="fa fa-link"></span></a></figure>
                                                <div class="desc-text"><a href="blog-single.html">Portobello Pizza</a></div>
                                                <div class="time">25th June 2016</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!--Footer Column-->
                        	<div class="footer-column col-md-6 col-sm-6 col-xs-12">
                            	<div class="footer-widget opening-widget">
                                	<h2>Opening Hours</h2>
                                    <div class="widget-content">
                                    	
                                    	<ul>
                                        	<li class="clearfix"><div class="day pull-left">Mon — Fri</div><span class="dots">................</span><div class="time pull-right">9:00 am - 23:00 pm</div></li>
                                            <li class="clearfix"><div class="day pull-left">Saturday</div><span class="dots">................</span><div class="time pull-right">10:00 am - 22:00 pm</div></li>
                                            <li class="clearfix"><div class="day pull-left">Sunday</div><span class="dots">................</span><div class="time pull-right">10:00 am - 21:00 pm</div></li>
                                            <li class="note">Note: Restaurantwheel is closed on holidays.</li>
                                        </ul>
                                    
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                    
                 </div>
             </div>
        
        </div>
        
        <!--Footer Bottom-->
         <div class="footer-bottom">

         	<div class="auto-container">
            	<div class= "copyright-text">Copyright &copy @nirajKumarsingh; 2024. All Rights Reserved </div>
            </div>
        </div>
    </footer>
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-long-arrow-up"></span></div>

<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/revolution.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/script.js"></script>
  <!--Live_Chat_Boat-->
 <script src="//code.tidio.co/d44r4brpdzfjboy52kwgnkhr0xovlqmc.js" async></script>
</body>
</html>
