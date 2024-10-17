<?php
session_start();
include("connect.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Order Now || Restaurant Wheel</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/revolution-slider.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/bootstrap-social.css" rel="stylesheet"/>
<!-- <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon"> -->
<!-- Responsive -->

<link href="css/responsive.css" rel="stylesheet">

<style>
    #qrCodeSection {
        text-align: center; /* Center the QR code section */
        margin-top: 10px;  /* Add some space above the QR code */
    }

    .qr-code {
        width: 50%;            /* Make the QR code width responsive */
        max-width: 150px;     /* Set a maximum width */
        height: auto;         /* Maintain aspect ratio */
    }

</style>

    <!--Social media image link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


</head>

<body>

<div class="page-wrapper">

 <!-- Preloader -->
    <div class="preloader"></div>
 	
   <!-- Main Header-->
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
    <section class="page-title" style="background-image:url(images/background/5.jpg);">
    	<div class="auto-container">
            <h3>Hand-Crafted Dishes Sourced</h3>
            <h2>Order Now</h2>
        </div>
    </section>
    <!--Page Title-->
    
    
    <!--Form Starts Here-->
    <section class="signin_food">
    <div class="container">
    <!-- Order Form -->
       <!--  <form id="contactForm" action="https://formspree.io/f/xqazvorv" method="POST"> --> <!--  response on  nirajsingh9570460932@gmail.com-->
            <form id="contactForm" action="https://formspree.io/f/mrbznypr" method="POST"> <!-- Resopnse on clashofmind@gmail.com-->
            	<div class="row">
                	<div class="col-md-4">
                    	<img src="images/product.jpg" class="img-responsive thumbnail" />
                    </div>
                	<div class="col-md-8">
                		<div class="panel panel-default">
                    <div class="panel-heading">
                        <h5 class="panel-title"><i class="fa fa-map-marker"></i> Delivery Details</h5>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="name">Full Name</label>
                                    <input type="text" placeholder="Full Name" class="form-control input-sm required" name="name" />
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" placeholder="Email Address" class="form-control input-sm required" name="email" />
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="mobile">Mobile</label>
                                    <div class="input-group input-group-sm">
                                      <span class="input-group-addon">+91</span>
                                      <input type="text" class="form-control input-sm required" placeholder="Mobile Number" name="mobile" maxlength="10" min="10"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="address">Street Address</label>
                                    <input type="text" placeholder="Street address" class="form-control input-sm required" name="address" />
                                </div>
                            </div>
 <!--------------------------------------------------------------------------------------------------------------------------->                   
 <div class="col-sm-6">
    <div class="form-group">
        <label for="state">State:</label>
        <select id="state" class="form-control" onchange="updateDistricts()">
            <!-- Indian States -->
            <option>--Select--</option>
            <option>Bihar</option>
            <option>Uttar Pradesh</option>
            <option>Delhi</option>          
            <option>West Bengal</option>
            
            <!-- Add other states as required -->
        </select>
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group">
        <label for="district">City:</label>
        <select id="district" class="form-control" onchange="updateLocations()">
            <option>--Select--</option>
        </select>
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group">
        <label for="location">Location:</label>
        <select id="location" class="form-control">
            <option>--Select--</option>
        </select>
    </div>
</div>
<div class="col-sm-4">
    <div class="form-group">
        <label for="pincode">Pincode</label>
        <input type="text" placeholder="Pincode" class="form-control input-sm required" name="pincode" />
    </div>
</div>
</div>
</div>
</div> 
</div>
</div>
        
<!----------------------------------------------------------------------------------------------------------------------->                            


                          
<div class="panel panel-default">
    <div class="panel-heading">
        <h5 class="panel-title"><i class="fa fa-cutlery"></i> Order Details <span class="notice">Order Time: Lunch before 12.30PM</span></h5>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-sm-2">
                <div class="form-group form-group-sm">
                    <label for="menu">Meal Preferences</label>
                    <select name="mealPreference" class="form-control required" id="mealPreference">
                        <option value="" disabled selected>Your Meal Preference</option>
                        <option value="50">VEG (₹50)</option>
                        <option value="70">NON-VEG (₹70)</option>
                        <option value="100">VEG/NON-VEG (₹100)</option>
                    </select>
                </div>
            </div>

            <div class="col-sm-2">
                <div class="form-group form-group-sm">
                    <label for="mealType">Meal Type</label>
                    <select name="mealType" class="form-control required" id="mealType">
                        <option value="" disabled selected>Your Meal Type</option>
                        
                        <option value="20">Mini Meal (₹20)</option>
                        <option value="50">Standard Meal (₹50)</option>
                    </select>
                </div>
            </div>

            <div class="col-sm-2">
                <div class="form-group form-group-sm">
                    <label for="subscription">Subscription period</label>
                    <select name="subscription" id="subscription" class="form-control required">
                        <option value="0" disabled selected>--Select Days--</option>
                        <option value="2">2 Days</option>
                        <option value="4">4 Days</option>
                        <option value="6">6 Days</option>
                        <option value="8">8 Days</option>
                        <option value="10">10 Days</option>
                        <option value="12">12 Days</option>
                    </select>
                </div>
            </div>

            <div class="col-sm-2">
                <div class="form-group form-group-sm">
                    <label for="quantity">Quantity</label>
                    <select name="quantity" class="form-control required" id="quantity">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group form-group-sm" id="couponSection">
                    <label for="coupon">Yes! I have a coupon code</label>
                    <div class="input-group">
                        <input type="text" placeholder="Coupon Code" class="form-control input-sm" name="coupon" id="coupon" onkeyup="this.value=this.value.toUpperCase()" />
                        <span class="input-group-btn">
                            <button class="btn btn-default btn-warning btn-sm" type="button" id="applycode">Apply Code</button>
                        </span>
                    </div>
                    <div id="couponMessage" style="color: red; display: none;"></div> <!-- Coupon message -->
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <div class="well well-sm text-center">
                    <label>Sub Total</label>
                    <h2 class="no-margin"><i class="fa fa-rupee"></i><span id="subtotal">0</span></h2>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="well well-sm savings text-center">
                    <label>Your Savings</label>
                    <h2 class="no-margin"><i class="fa fa-rupee"></i><span id="discount">0</span></h2>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="well well-sm text-center">
                    <label>Amount Payable</label>
                    <h2 class="no-margin"><i class="fa fa-rupee"></i><span id="total">0</span></h2>
                </div>
            </div>
            <!------------------------------------------------------------->
                            <div class="col-sm-3">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="form-group form-group-sm">
                                            <select name="payment" id="payment" class="form-control" onchange="toggleQRCode()">
                                                <option value="select">--Select--</option>
                                                <option value="payu_paisa">Pay with UPI</option>
                                                <option value="cash">Cash on Delivery</option>
                                            </select>
                                        </div>
                                         <!-- QR Code Section -->
                                <div id="qrCodeSection" style="display: none;">
                                    <h5>Scan the QR code for payment:</h5>
                                    <h5><strong>Niraj Kumar Singh</strong></h5>
                                    <img src="images/QR_P.jpg " alt="QR Code" id="qrCodeImage" style="width: 150px; height: 150px;" /> 
                                    
                                    <!--QR Uploading -->
                                  <!---  <div class="form-group" style="margin-top: 10px;">
                                        <label for="screenshotUpload">Upload Screenshot:</label>
                                        <input type="file" id="screenshotUpload" class="form-control" accept="image/*" />
                                    </div>  -->
                                    <div class="form-group">
                                        <label for="name">Payment UTR.NO</label>
                                        <input type="text" placeholder="UTR.NO" class="form-control input-sm required" name="UTR.NO" />
                                    </div>
                                </div>                           
                            </div>

                           

                                    <div class="col-xs-12">
                                        <button type="submit" class="btn btn-sm btn-success btn-block" id="pay">ORDER NOW</button>
                                    </div>
                                </div>
                            </div>
                            
                           
                            

                            <div class="col-sm-12">
                            	<p class="text-center"><small>By placing order, you agree to our <a href="#" data-toggle="modal" data-target="#terms">Terms &amp; Conditions</a>.</small></p>
                            </p>
                            <div class="col-sm-12">
                            	<div class="alert" id="alert"></div>
                            </div>
                        </div>
                    </div>
                </div>   
                 </div>
            </form>
    
   
     </div>
    </section>
    
    
    
    <!--Form ends Here-->

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
<script src="js/docs.js"></script>
<script src="js/revolution.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>
<script src="js/order_location.js"></script>
     <!--Live_Chat_Boat-->
 <script src="//code.tidio.co/d44r4brpdzfjboy52kwgnkhr0xovlqmc.js" async></script>
</body>
</html>
