<?php
session_start();
include("connect.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

<title>Restaurant Wheel || Contact</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/revolution-slider.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/bootstrap.vertical-tabs.css" rel="stylesheet">
<!-- <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon"> -->
<!-- Responsive -->

<link href="css/responsive.css" rel="stylesheet">

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
                        <div class="logo"><a href="homepage.php"><img src="images/logo.png" alt="Restaurant Wheel"></a></div>
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
                <a href="homepage.php"><img src="images/logo-2.png" alt="Restaurant Wheel"></a>			
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
    <section class="page-title" style="background-image:url(images/background/4.jpg);">
    	<div class="auto-container">
    		<h3>Thanks For Visit Us</h3>
        	<h2>We Make Stay Fresh Food & Wounderful View</h2>
        </div>
    </section>
    <!--Page Title-->

  <!-- Form HTML with Formspree integration -->
<!-- Form HTML with Formspree integration -->
<div class="contact-form default-form">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="form-column pull-right col-md-6 col-sm-12 col-xs-12">
                <div class="inner-box">
                    <div class="sec-title">
                        <h2>Send A Message</h2>
                        <h3>Leave A Message Here</h3>
                    </div>
                    <!-- Add id to the form for targeting in JavaScript -->
                 <!--To creating Contact form -->
                 <!-- <form id="contactForm" action="https://formspree.io/f/xqazvorv" method="POST"> --> <!--  response   on nirajsingh9570460932@gmai.com-->
                    <form id="contactForm" action="https://formspree.io/f/mnnaegpr" method="POST">  <!-- Resopnse on clashofmind@gmail.com-->
                        <div class="row clearfix">
                            <div class="form-group icon-group col-md-6 col-sm-12 col-xs-12">
                                <div class="group-inner">
                                    <label for="field-one">Your Name:</label>
                                    <input id="field-one" type="text" name="username" placeholder="Name" required>
                                </div>
                            </div>
                            
                            <div class="form-group icon-group col-md-6 col-sm-12 col-xs-12">
                                <div class="group-inner">
                                    <label for="field-two">Your Email:</label>
                                    <input id="field-two" type="email" name="email" placeholder="Email" required>
                                </div>
                            </div>

                            <div class="form-group icon-group col-md-6 col-sm-12 col-xs-12">
                                <div class="group-inner">
                                    <label for="field-three">Your Phone:</label>
                                    <input id="field-three" type="text" name="phone" placeholder="Phone">
                                </div>
                            </div>

                            <div class="form-group icon-group col-md-6 col-sm-12 col-xs-12">
                                <div class="group-inner">
                                    <label for="field-four">Your Website:</label>
                                    <input id="field-four" type="text" name="website" placeholder="Website">
                                </div>
                            </div>

                            <div class="form-group icon-group col-md-12 col-sm-12 col-xs-12">
                                <div class="group-inner">
                                    <label for="field-five">Your Message:</label>
                                    <textarea id="field-five" name="message" placeholder="Your Need & Description" required></textarea>
                                </div>
                            </div>

                            <div class="form-group text-center col-md-12 col-sm-12 col-xs-12">
                                <button type="submit" class="theme-btn btn-style-two">Send Message</button>
                            </div>
                        </div>
                    </form>

                    <!-- Success Message -->
                    <div id="successMessage" style="display:none; color: green; text-align: center;">
                        Your message has been sent successfully!
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


            	<div class="image-column pull-left col-md-6 col-sm-8 col-xs-12">
                	<figure class="image-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                    	<img src="images/resource/master-chef-1.png" alt="" />
                    </figure>
                </div>
            </div>
        	
        </div>
    </div>

    <!-- JavaScript to prevent page reload and handle form submission -->
<script>
    document.getElementById('contactForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the form from submitting in the traditional way
        
        // Create a FormData object to capture form data
        const formData = new FormData(this);
        
        // Send form data using Fetch API
        fetch(this.action, {
            method: 'POST',
            body: formData,
            headers: {
                'Accept': 'application/json'
            }
        }).then(response => {
            if (response.ok) {
                // Show success message
                document.getElementById('successMessage').style.display = 'block';
                
                // Clear the form fields
                document.getElementById('contactForm').reset();
            } else {
                alert('There was an error sending the message. Please try again.');
            }
        }).catch(error => {
            alert('There was an error sending the message. Please try again.');
        });
    });
</script>


    
  
    
    
    
  
    
   
    
   
    
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
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>
  <!--Live_Chat_Boat-->
 <script src="//code.tidio.co/d44r4brpdzfjboy52kwgnkhr0xovlqmc.js" async></script>
</body>
</html>
