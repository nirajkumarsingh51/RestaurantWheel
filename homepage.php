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

<title>Restaurant Wheel</title>
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
    
    <!--Main Slider-->
    <section class="main-slider" data-start-height="520" data-slide-overlay="yes">
    	
        <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>
                	
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/image-1.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">
                    <img src="images/main-slider/image-5.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                    
                    <div class="tp-caption sfb sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="-140"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><figure class="content-image"><img src="images/main-slider/icon-1.png" alt=""></figure></div>
                    
                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="-20"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><h2>Ghar ki Yaad?? Ghar ka Khana</h2>
                   
                    </div>
                    
                    <div class="tp-caption sfr sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="50"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><div class="text">Restaurant Wheel </div></div>
                    
                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="130"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><a href="#" class="theme-btn btn-style-one">Order Office Tiffin</a></div>
                    
                    </li>
                    
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/image-2.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">
                    <img src="images/main-slider/image-6.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                    
                    <div class="tp-caption sfb sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="-140"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><figure class="content-image"><img src="images/main-slider/icon-1.png" alt=""></figure></div>
                    
                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="-20"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><h2>Feeling Hungry? Order Snacks</h2></div>
                    
                    <div class="tp-caption sfr sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="50"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><div class="text">Veg momos | Chicken Momos | Fried Momos | Golgappa | Veg Chawmin | Veg Spring Roll </div></div>
                    
                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="130"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><a href="#" class="theme-btn btn-style-one">Order Office Snacks</a></div>
                    
                    </li>
                    
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/image-3.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">
                    <img src="images/main-slider/image-4.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                    
                    <div class="tp-caption sfb sfb tp-resizeme"
                    data-x="center" data-hoffset="30"
                    data-y="center" data-voffset="-140"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><figure class="content-image"><!--<img src="images/main-slider/icon-2.png" alt="">--></figure></div>
                    
                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="center" data-hoffset="30"
                    data-y="center" data-voffset="-20"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><h2 style="color:#F00;"> Customized your Lunch</h2></div>
                    
                    <div class="tp-caption sfr sfb tp-resizeme"
                    data-x="center" data-hoffset="30"
                    data-y="center" data-voffset="50"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><div class="text text-left" style="color:#F00;">No Need to pay Extra Amount </div></div>
                    
                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="center" data-hoffset="30"
                    data-y="center" data-voffset="140"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><a href="#" class="theme-btn btn-style-one">Order Office Tiffin</a></div>
                    
                    <div class="tp-caption sfb sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="-40"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><figure class="content-image"><!--<img src="images/main-slider/content-image.png" alt="">--></figure></div>
                    
                    </li>
                    
                    
                    
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/image-3.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">
                    <img src="images/main-slider/image-7.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                    
                    <div class="tp-caption sfb sfb tp-resizeme"
                    data-x="center" data-hoffset="30"
                    data-y="center" data-voffset="-140"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn">
                    <figure class="content-image"><!--<img src="images/main-slider/icon-2.png" alt="">--></figure></div>
                    
                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="center" data-hoffset="30"
                    data-y="center" data-voffset="-20"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><h2 style="color:#F00;">Get Discount on Monthly Order</h2></div>
                    
                    <div class="tp-caption sfr sfb tp-resizeme"
                    data-x="center" data-hoffset="30"
                    data-y="center" data-voffset="50"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><div class="text text-left" style="color:#F00;">We are commited to serve you better food in afordable price. </div></div>
                    
                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="center" data-hoffset="30"
                    data-y="center" data-voffset="140"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><a href="#" class="theme-btn btn-style-one">Order Office Tiffin</a></div>
                    
                    <div class="tp-caption sfb sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="-40"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn">
                    <figure class="content-image"><!--<img src="images/main-slider/content-image.png" alt="">--></figure></div>
                    
                    </li>
                    
                    
                </ul>
                
            	<div class="tp-bannertimer"></div>
            </div>
        </div>
    </section>
    <!--End Main Slider-->
    
    <!--Restaurant Section-->
    <section class="restaurant">
    	<div class="auto-container">
        	<div class="row clearfix">
            	<!--Column-->
            	<div class="column col-md-6 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<!--Sec Title-->
                    	<div class="sec-title">
                        	<h2>Great New Dishes </h2>
                            <h3>Great Things About Us</h3>
                        </div>
                        <!--Content-->
                        <div class="content">
                            <div class="text">
                                <p>Restaurant Wheel is Delhi's corporate food-commerce tiffin service which allows you to order delicious home-style food and Snacks in convenient packaging over Phone or Online.

</p>
                                <p>Restaurant Wheel delivers nutritious meals South Delhi in Hot case boxes and we serve a different meal every day of the month! Or customize your meal what you like to eat.</p>
                                
                                <p>Our customers love Restaurant Wheel tiffin service for its authentic Indian food and customer eservice.</p>
                            </div>
                            <a href="#" class="read-more theme-btn btn-style-one">Read More</a>
                        </div>
                        
                    </div>
                </div>
                
                <!--Corousel Column-->
                <div class="corousel-column col-md-6 col-sm-6 col-xs-12">
                	<div class="carousel-outer wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                    	<!--Single Item Carousel-->
                    	<div class="single-item-carousel">
                        	<div class="slide">
                            	<img style="width:80%" src="images/resource/slide-1.svg" alt="" />
                            </div>
                            <div class="slide">
                            	<img style="width:80%" src="images/resource/slide-1.svg" alt="" />
                            </div>
                            <div class="slide">
                            	<img style="width:80%" src="images/resource/slide-1.svg" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--End Restaurant Section-->
    
    
    <section class="delicous-section" style="background-image:url(images/background/2.jpg);">
    <div class="container">
    <div class="sec-title-one" style="margin-bottom:30px;">
                <h2>Our Corporate Meal Plan</h2>
                <h4 style="color:#fff;">Call Us on : <strong>+91-8527782260</strong></h4>
            </div>
    <div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs navtab_tab" role="tablist">
    <li role="presentation" class="active"><a href="#veg" aria-controls="veg" role="tab" data-toggle="tab">Veg</a></li>
    <li role="presentation"><a href="#nonveg" aria-controls="nonveg" role="tab" data-toggle="tab">Non-Veg</a></li>
    <li role="presentation"><a href="#alternate" aria-controls="alternate" role="tab" data-toggle="tab">Alternate</a></li>
    
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="veg">
    
    <div class="col-lg-12 col-md-12 col-sm-12">
    <div class="col-lg-6 col-md-6 col-sm-12">
    
    <h1><img src="images/vegmini.jpg"></h1>
    <h2><a href="#" class="read-more theme-btn btn-style-one">Order Now</a></h2>
    
    
    </div>
    
    <div class="col-lg-6 col-md-6 col-sm-12">
     <h1><img src="images/vegstandard.jpg"></h1>
    <h2><a href="#" class="read-more theme-btn btn-style-one">Order Now</a></h2>
    </div>
    </div>
    
    </div>
    
    <div role="tabpanel" class="tab-pane" id="nonveg">
    <div class="col-lg-12 col-md-12 col-sm-12">
    <div class="col-lg-6 col-md-6 col-sm-12">
    
    <h1><img src="images/nonvegmenu2.jpg"></h1>
    <h2><a href="#" class="read-more theme-btn btn-style-one">Order Now</a></h2>
    
    
    </div>
    
    <div class="col-lg-6 col-md-6 col-sm-12">
     <h1><img src="images/nonvegmenu1.jpg"></h1>
    <h2><a href="#" class="read-more theme-btn btn-style-one">Order Now</a></h2>
    </div>
    </div>
    
    </div>
    <div role="tabpanel" class="tab-pane" id="alternate">
    
    <div class="col-lg-12 col-md-12 col-sm-12">
    <div class="col-lg-6 col-md-6 col-sm-12">
    
    <h1><img src="images/alternatemenu2.jpg"></h1>
    <h2><a href="#" class="read-more theme-btn btn-style-one">Order Now</a></h2>
    
    
    </div>
    
    <div class="col-lg-6 col-md-6 col-sm-12">
     <h1><img src="images/alternatemenu1.jpg"></h1>
    <h2><a href="#" class="read-more theme-btn btn-style-one">Order Now</a></h2>
    </div>
    </div>
    
    </div>
    
  </div>

</div>
    
    
    </div>    
    </section>
    
    
    <!--Services Section-->
    <section class="services-section">
    	
        <div class="auto-container">
        	<!--sec title one-->
            <div class="sec-title-one">
                <h2>Why Us</h2>
                <h4>We Create Delicous Memory</h4>
            </div>
        	
        	<div class="row clearfix">
            	<!--Services Block-->
            	<div class="services-block col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<!--Icon Box-->
                    	<div class="icon-box wow zoomInStable" data-wow-delay="0ms" data-wow-duration="1500ms">
                        	<img src="images/resource/icon1.png" alt="" />
                        </div>
                        <h3><a href="#">Home made food</a></h3>
                        <!--<div class="text">Vivamus sed fermentum tellus. Donec quis elit sapien. Aliquam commodo tortor nisi, nec varius mi finibus at.  ut ullamcorper volutpat lectusu</div>
                        <a class="read-more" href="blog-single.html">Read More</a>-->
                    </div>
                </div>
                
                <!--Services Block-->
            	<div class="services-block col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<!--Icon Box-->
                    	<div class="icon-box wow zoomInStable" data-wow-delay="500ms" data-wow-duration="1500ms">
                        	<img src="images/resource/icon2.png" alt="" />
                        </div>
                        <h3><a href="#">Daily Menu Change</a></h3>
                       <!-- <div class="text">Vivamus sed fermentum tellus. Donec quis elit sapien. Aliquam commodo tortor nisi, nec varius mi finibus at.  ut ullamcorper volutpat lectusu</div>
                        <a class="read-more" href="blog-single.html">Read More</a>-->
                    </div>
                </div>
                
                <!--Services Block-->
            	<div class="services-block col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<!--Icon Box-->
                    	<div class="icon-box wow zoomInStable" data-wow-delay="1000ms" data-wow-duration="1500ms">
                        	<img src="images/resource/icon3.png" alt="" />
                        </div>
                        <h3><a href="#">Easy Ordering</a></h3>
                        <!--<div class="text">Vivamus sed fermentum tellus. Donec quis elit sapien. Aliquam commodo tortor nisi, nec varius mi finibus at.  ut ullamcorper volutpat lectusu</div>
                        <a class="read-more" href="blog-single.html">Read More</a>-->
                    </div>
                </div>
                
            </div>
            
            <div class="row clearfix">
            	<!--Services Block-->
            	<div class="services-block col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<!--Icon Box-->
                    	<div class="icon-box wow zoomInStable" data-wow-delay="0ms" data-wow-duration="1500ms">
                        	<img src="images/resource/icon4.png" alt="" />
                        </div>
                        <h3><a href="#"> Easy Cancellation</a></h3>
                        <!--<div class="text">Vivamus sed fermentum tellus. Donec quis elit sapien. Aliquam commodo tortor nisi, nec varius mi finibus at.  ut ullamcorper volutpat lectusu</div>
                        <a class="read-more" href="blog-single.html">Read More</a>-->
                    </div>
                </div>
                
                <!--Services Block-->
            	<div class="services-block col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<!--Icon Box-->
                    	<div class="icon-box wow zoomInStable" data-wow-delay="500ms" data-wow-duration="1500ms">
                        	<img src="images/resource/icon5.png" alt="" />
                        </div>
                        <h3><a href="#">Discount Offer/coupons</a></h3>
                        <!--<div class="text">Vivamus sed fermentum tellus. Donec quis elit sapien. Aliquam commodo tortor nisi, nec varius mi finibus at.  ut ullamcorper volutpat lectusu</div>
                        <a class="read-more" href="blog-single.html">Read More</a>-->
                    </div>
                </div>
                
                <!--Services Block-->
            	<div class="services-block col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<!--Icon Box-->
                    	<div class="icon-box wow zoomInStable" data-wow-delay="1000ms" data-wow-duration="1500ms">
                        	<img src="images/resource/icon6.png" alt="" />
                        </div>
                        <h3><a href="#">Snacks ordering</a></h3>
                       <!-- <div class="text">Vivamus sed fermentum tellus. Donec quis elit sapien. Aliquam commodo tortor nisi, nec varius mi finibus at.  ut ullamcorper volutpat lectusu</div>
                        <a class="read-more" href="blog-single.html">Read More</a>-->
                    </div>
                </div>
                
            </div>
            
            
        </div>
    </section>
    <!--Services Section-->
    
    
    <!--Parallax Image Section-->
    <section class="parallax-image-section" style="background-image:url(images/background/1.jpg);">
    	<div class="auto-container">
        	<h2>Healthy Fresh And Hot Dishes.</h2>
            <h4>Best offers from the house chef.</h4>
        </div>
    </section>
    <!--End Parallax Image Section-->
    
    
    
    <!--Special Dishes Section-->
    <section class="special-section">
    	<div class="auto-container">
        	<!--sec title one-->
            <div class="sec-title-one">
                <h2>Our Special Snacks.</h2>
                <h4>We Create Delicous Memory</h4>
            </div>
        
        	<div class="row clearfix">
            	<!--Opening Column-->
            	<div class="opening-column col-md-4 col-sm-12 col-xs-12">
                	<div class="inner-box wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    	<div class="title-box">Opening Hours</div>
                        <ul>
                        	<li>Monday — Friday<br>9:00 am - 23:00 pm</li>
                            <li>Saturday<br>10:00 am - 22:00 pm</li>
                            <li>Sunday<br>10:00 am - 21:00 pm</li>
                            <li>Note: Restaurant Wheel is closed on holidays.</li>
                            <li class="number">1234567891</li>
                        </ul>
                    </div>
                </div>

                
                <!--Dishes Column-->
                <div class="dishes-column col-md-8 col-sm-12 col-xs-12">
                	<div class="inner-box">
                    
                    	
                    	<div class="special-dish">
                        	<div class="inner-content">
                                <div class="row clearfix">
                                
                                    <!--Image Column-->
                                    <div class="image-column col-md-4 col-sm-4 col-xs-12 pull-left">
                                        <div class="inner">
                                            <figure class="image-box">
                                                <img src="images/snacks_chommeen.jpg" alt="" />
                                                <!--Overlay Box-->
                                                <div class="overlay-box">
                                                    <div class="price">Rs 65</div>
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                
                                    <!--Content Column-->
                                    <div class="content-column col-md-8 col-sm-8 col-xs-12 pull-right">
                                        <h3>Veg Chawmin</h3>
                                        <div class="text"></div>
                                        <a class="read-more theme-btn" href="#">Add to Cart</a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <div class="special-dish">
                        	<div class="inner-content">
                                <div class="row clearfix">
                                
                                    <!--Image Column-->
                                    <div class="image-column col-md-4 col-sm-4 col-xs-12 pull-left">
                                        <div class="inner">
                                            <figure class="image-box">
                                                <img src="images/snacks_vegroll.jpg" alt="" />
                                                <!--Overlay Box-->
                                                <div class="overlay-box">
                                                    <div class="price">Rs 60</div>
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                
                                    <!--Content Column-->
                                    <div class="content-column col-md-8 col-sm-8 col-xs-12 pull-right">
                                        <h3>Veg Sprign roll</h3>
                                        <div class="text"></div>
                                        <a class="read-more theme-btn" href="#">Add to Cart</a>
                                    </div>
                                    
                                    
                                    
                                </div>
                            </div>
                        </div>
                        
                        
                       <a href="snacks.html" title="Order Snacks" class="btn btn-danger">Order More Snacks</a> 
                        
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--Special Dishes Section-->
    
    <!--Gallery Carousel-->
    <section class="gallery-carousel">
    	<div class="three-item-corousel">
        	<div class="gallery-item">
            	<div class="inner-box">
                	<a href="#">
                        <div class="image-box">
                            <img src="images/gallery/Crispy Air Fryer Chicken.jpg" alt="" />
                            <div class="title-box">Crispy Air Fryer Chicken</div>
                        </div>
                    </a>
                </div>
            </div>
            
          
            <div class="gallery-item">
            	<div class="inner-box">
                	<a href="#">
                        <div class="image-box">
                            <img src="images/gallery/paneer tikka.jpg" alt="" />
                            <div class="title-box">Panner Tikka</div>
                        </div>
                    </a>
                </div>
            </div>
            
           
            <div class="gallery-item">
            	<div class="inner-box">
                	<a href="#">
                        <div class="image-box">
                            <img src="images/gallery/Briyani.jpg" alt="" />
                            <div class="title-box">Chicken Briyani</div>
                        </div>
                    </a>
                </div>
            </div>
            
            
            <div class="gallery-item">
            	<div class="inner-box">
                	<a href="#">
                        <div class="image-box">
                            <img src="images/gallery/Raj Kachori.jpg" alt="" />
                            <div class="title-box">Raj Kachori</div>
                        </div>
                    </a>
                </div>
            </div>
            
            
            <div class="gallery-item">
            	<div class="inner-box">
                	<a href="#">
                        <div class="image-box">
                            <img src="images/gallery/veg thali.jpg" alt="" />
                            <div class="title-box">Veg Thali</div>
                        </div>
                    </a>
                </div>
            </div>
            
            
            <div class="gallery-item">
            	<div class="inner-box">
                	<a href="#">
                        <div class="image-box">
                            <img src="images/gallery/Poha.jpg" alt="" />
                            <div class="title-box">Indian Poha</div>
                        </div>
                    </a>
                </div>
            </div>
            
        </div>
    </section>
    <!--End Gallery Carousel-->
    
    <!--chefs Team-->
    <section class="chefs-section">
        <div class="auto-container">
        	<div class="sec-title-one">
            	<h2>Our Delicious</h2>
                <h4>Meet Our Passionate Chefs</h4>
            </div>
            <div class="row clearfix">
            	<div class="three-item-corousel">
                    
                    <div class="chef-member">
                        <div class="inner-box">
                            
                            <div class="image-box">
                                
                                <figure class="image">
                                    <img src="images/resource/chef-1.jpg" alt="" />
                                </figure>
                                
                                <div class="overlay-box">
                                    <div class="inner">
                                       
                                        <ul class="social-icon-one">
                                            <li><a class="fa fa-facebook" href="#"></a></li>
                                            <li><a class="fa fa-twitter" href="#"></a></li>
                                            <li><a class="fa fa-linkedin" href="#"></a></li>
                                            <li><a class="fa fa-instagram" href="#"></a></li>
                                            <li><a class="fa fa-vimeo-square" href="#"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="lower-content">
                                <h3>Rick Grimes</h3>
                                <div class="designation">Cheef Cook</div>
                            </div>
                        </div>
                    </div>
                
                	
                    <div class="chef-member">
                        <div class="inner-box">
                            
                            <div class="image-box">
                                
                                <figure class="image">
                                    <img src="images/resource/chef-2.jpg" alt="" />
                                </figure>
                                
                                <div class="overlay-box">
                                    <div class="inner">
                                        
                                        <ul class="social-icon-one">
                                            <li><a class="fa fa-facebook" href="#"></a></li>
                                            <li><a class="fa fa-twitter" href="#"></a></li>
                                            <li><a class="fa fa-linkedin" href="#"></a></li>
                                            <li><a class="fa fa-instagram" href="#"></a></li>
                                            <li><a class="fa fa-vimeo-square" href="#"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="lower-content">
                                <h3>ELena Gilbert</h3>
                                <div class="designation">Master Chef & Founder</div>
                            </div>
                        </div>
                    </div>
                
                	
                    <div class="chef-member">
                        <div class="inner-box">
                            
                            <div class="image-box">
                                
                                <figure class="image">
                                    <img src="images/resource/chef-3.jpg" alt="" />
                                </figure>
                                
                                <div class="overlay-box">
                                    <div class="inner">
                                        
                                        <ul class="social-icon-one">
                                            <li><a class="fa fa-facebook" href="#"></a></li>
                                            <li><a class="fa fa-twitter" href="#"></a></li>
                                            <li><a class="fa fa-linkedin" href="#"></a></li>
                                            <li><a class="fa fa-instagram" href="#"></a></li>
                                            <li><a class="fa fa-vimeo-square" href="#"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="lower-content">
                                <h3>Rick Grimes</h3>
                                <div class="designation">Cheef Cook</div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!--End chefs Team-->
    
    <!--Testimonial Section-->
    <section class="testimonial-section" style="background-image:url(images/background/3.jpg);">
    	<div class="auto-container">
        	<div class="single-item-carousel">
            
                <!--Testimonial Block-->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="quote-icon"><i class="fa fa-2x fa-quote-right" aria-hidden="true"></i>
</div>
                        <div class="text">“ We enjoy sharing the projects and posts we make just as much as we enjoy creating them. consectetur adipiscing elit, sed do eiusmod tempor incididunt Sit back & take a moment to browse through some of our recent completed work.”</div>
                        <h3><span>-</span> Stevan Smith,</h3>
                    </div>
                </div>
                
                <!--Testimonial Block-->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="quote-icon"><i class="fa fa-2x fa-quote-right" aria-hidden="true"></i>
</div>
                        <div class="text">“ We enjoy sharing the projects and posts we make just as much as we enjoy creating them. consectetur adipiscing elit, sed do eiusmod tempor incididunt Sit back & take a moment to browse through some of our recent completed work.”</div>
                        <h3><span>-</span> Stevan Smith,</h3>
                    </div>
                </div>
                
                <!--Testimonial Block-->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="quote-icon"><i class="fa fa-2x fa-quote-right" aria-hidden="true"></i>
</div>
                        <div class="text">“ We enjoy sharing the projects and posts we make just as much as we enjoy creating them. consectetur adipiscing elit, sed do eiusmod tempor incididunt Sit back & take a moment to browse through some of our recent completed work.”</div>
                        <h3><span>-</span> Stevan Smith,</h3>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--End Testimonial Section-->
    
    
    
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
            	<div class="copyright-text">Copyright &copy @nirajKumarsingh; 2024. All Rights Reserved </div>
            </div>
        </div>
    </footer>
    
</div>
<!--End pagewrapper-->


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style="text-align:center; color:#dc1616;">Bulk Order Enquiry</h4>
      </div>
      <div class="modal-body">
       <form>
  <div class="form-group">
    <label for="">Company Name:</label>
    <input type="text" class="form-control" id="" placeholder="Company Name">
  </div>
  <div class="form-group">
    <label for="">Contact Person:</label>
    <input type="text" class="form-control" id="" placeholder="Contact Person">
  </div>
  
  <div class="form-group">
    <label for="">Email Id:</label>
    <input type="email" class="form-control" id="" placeholder="Email Id">
  </div>
  
  <div class="form-group">
    <label for="">Mobile No. :</label>
    <input type="tel" class="form-control" id="" placeholder="Mobile No.">
  </div>
  
  <div class="form-group">
    <label for="">Land Line No:</label>
    <input type="tel" class="form-control" id="" placeholder="Land Line No">
  </div>
  
   <div class="form-group">
    <label for="">Address</label>
   <textarea rows="3" cols="3" class="form-control" placeholder="Address"></textarea>
  </div>
  
  
  <div class="form-group">
    <label for="">Location:</label>
 <select class="form-control">
 <option>--Select--</option>
 <option>One</option>
 <option>Two</option>
 </select>
  </div>
  
  
  <div class="form-group">
    <label for="">Pincode:</label>
 <input type="text" class="form-control" id="" placeholder="Pincode">
  </div>
  
  <div class="form-group">
    <label for="">Website Url:</label>
 <input type="text" class="form-control" id="" placeholder="Website Url">
  </div>
  
  <div class="checkbox">
    <label>
      <input type="checkbox"> Accept Privacy Policy and Term & Conditions
    </label>
  </div>
 
</form>
      </div>
      <div class="modal-footer">
       <button type="submit" class="btn btn-success">Submit</button>
       <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>

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
<!--For socal media -->
 <script src="js/script.js"></script>
</body>
</html>