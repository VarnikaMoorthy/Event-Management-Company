<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php");
error_reporting(0);
session_start();
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>Event Production</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet"> </head>

<body>
           <!--header starts-->
        <header id="header" class="header-scroll top-header headrom">
            <!-- .navbar -->
            <nav class="navbar navbar-dark">
                <div class="container">
                    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                    <a class="navbar-brand" href="index.php"> <img class="img-rounded" src="#" alt=""> </a>
                    <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                        <ul class="nav navbar-nav">
                            <li class="nav-item"> <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
                            <li class="nav-item"> <a class="nav-link active" href="restaurants.php">Book Event <span class="sr-only"></span></a> </li>
                            <li class="nav-item"> <a class="nav-link active" href="services.php">Services <span class="sr-only"></span></a> </li>
                            
							<?php
						if(empty($_SESSION["user_id"]))
							{
								echo '<li class="nav-item"><a href="login.php" class="nav-link active">Login</a> </li>
							  <li class="nav-item"><a href="registration.php" class="nav-link active">Signup</a> </li>';
							}
						else
							{
									
									
										echo  '<li class="nav-item"><a href="your_orders.php" class="nav-link active">Your Bookings</a> </li>';
									echo  '<li class="nav-item"><a href="logout.php" class="nav-link active">Logout</a> </li>';
							}

						?>
							 
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- /.navbar -->
        </header>
        <div class="page-wrapper">
            <!-- top Links -->
            <div class="top-links">
                <div class="container">
                    <ul class="row links">
                       
                        <li class="col-xs-12 col-sm-4 link-item active"><span>1</span><a href="restaurants.php">Choose Event</a></li>
                        <li class="col-xs-12 col-sm-4 link-item"><span>2</span><a href="#">Pick Your services</a></li>
                        <li class="col-xs-12 col-sm-4 link-item"><span>3</span><a href="#">Book and Confirm online</a></li>
                    </ul>
                </div>
            </div>
            <!-- end:Top links -->
            <!-- start: Inner page hero -->
            <div class="inner-page-hero bg-image" data-image-src="images/img/main3.png">
                <div class="container"> </div>
                <!-- end:Container -->
            </div>
            <div class="result-show">
                <div class="container">
                    <div class="row">
                       
                       
                    </div>
                </div>
            </div>
            <!-- //results show -->
            <section class="restaurants-page">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-5 col-md-5 col-lg-3">
                          
                          
                            <!-- <div class="widget clearfix"> -->
                                <!-- /widget heading -->
                                <!-- <div class="widget-heading">
                                    <h3 class="widget-title text-dark">
                                 Popular tags
                              </h3>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="widget-body">
                                    <ul class="tags">
                                        <li> <a href="#" class="tag">
                                    Pizza
                                    </a> </li>
                                        <li> <a href="#" class="tag">
                                    Sendwich
                                    </a> </li>
                                        <li> <a href="#" class="tag">
                                    Sendwich
                                    </a> </li>
                                        <li> <a href="#" class="tag">
                                    Fish 
                                    </a> </li>
                                        <li> <a href="#" class="tag">
                                    Desert
                                    </a> </li>
                                        <li> <a href="#" class="tag">
                                    Salad
                                    </a> </li>
                                    </ul>
                                </div>
                            </div> -->
                            <!-- end:Widget -->
                        </div>
                        <!--  -->
                          
                        </div>
                    </div>
                </div>
            </section>
    <!-- start package details  -->
    <div class="container">
        <!-- Start first row  -->
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 food-item">
            <div class="food-item-wrap">
                <div class="figure-wrap bg-image" data-image-src="images/img/destination-wedding.jpg">
                   
                </div>
                <div class="content">
                    <h5><a href="">Destination Wedding</a></h5>
                    <div class="product-name">Packages</div>
                    <a href="destination_wedding.php" class="btn theme-btn-dash pull-right">View More</a> </div>
                </div>
															
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 food-item">
            <div class="food-item-wrap">
                <div class="figure-wrap bg-image" data-image-src="images/img/wedding-event.jpeg">
                   
                </div>
                <div class="content">
                    <h5><a href="">Wedding Events </a></h5>
                    <div class="product-name">Packages</div>
                    <a href="wedding-events.php" class="btn theme-btn-dash pull-right">View More</a> </div>
                </div>
															
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 food-item">
            <div class="food-item-wrap">
                <div class="figure-wrap bg-image" data-image-src="images/img/corporate-event.jpg">
                   
                </div>
                <div class="content">
                    <h5><a href="">Corporate Events </a></h5>   
                    <div class="product-name">Packages</div>
                    <a href="corporate-event.php" class="btn theme-btn-dash pull-right">View More</a> </div>
                </div>
															
            </div>
        </div>
        <!-- End of first row  -->
        <!-- Second row  -->
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 food-item">
            <div class="food-item-wrap">
                <div class="figure-wrap bg-image" data-image-src="images/img/wedding-entertainment.jpg">
                   
                </div>
                <div class="content">
                    <h5><a href="">Entertainment Shows </a></h5>
                    <div class="product-name">Packages</div>
                    <a href="customer-booking.php" class="btn theme-btn-dash pull-right">Book Now</a> </div>
                </div>
															
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 food-item">
            <div class="food-item-wrap">
                <div class="figure-wrap bg-image" data-image-src="images/img/product-lauch.jpeg">
                   
                </div>
                <div class="content">
                    <h5><a href="">Product Launch</a></h5>
                    <div class="product-name">Packages</div>
                    <a href="product-lauch.php" class="btn theme-btn-dash pull-right">View More</a> </div>
                </div>
															
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 food-item">
            <div class="food-item-wrap">
                <div class="figure-wrap bg-image" data-image-src="images/img/sports-event.jpg">
                   
                </div>
                <div class="content">
                    <h5><a href="">Sports Events</a></h5>
                    <div class="product-name">Packages</div>
                    <a href="customer-booking.php" class="btn theme-btn-dash pull-right">Book Now</a> </div>
                </div>
															
            </div>
        </div>
        <!-- End of second row -->

        <!-- Third row  -->
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 food-item">
            <div class="food-item-wrap">
                <div class="figure-wrap bg-image" data-image-src="images/img/pre-wedding.jpg">
                   
                </div>
                <div class="content">
                    <h5><a href="">Pre &amp; Post Wedding </a></h5>
                    <div class="product-name">Starting from 15000/-</div>
                    <a href="customer-booking.php" class="btn theme-btn-dash pull-right">Book Now</a> </div>
                </div>
															
            </div>

           
        </div>
        <!-- End of second row -->

    </div>
    <!-- end of package details  -->
            <section class="app-section">
                <div class="app-wrap">
                    <div class="container">
                        <div class="row text-img-block text-xs-left">
                            <div class="container">
                                <div class="col-xs-12 col-sm-6 hidden-xs-down right-image text-center">
                                    <figure> <img src="#" alt=""> </figure>
                                </div>
                                <div class="col-xs-12 col-sm-6 left-text">
                                    <h3>The Best Event Mgmt App</h3>
                                    <p>Whether you want an intimate wedding in Coimbatore or a large-scale wedding, a professional wedding planner will be able to help you in the wedding planning process, while saving you some money as well..</p>
                                    <!-- <div class="social-btns">
                                        <a href="#" class="app-btn apple-button clearfix">
                                            <div class="pull-left"><i class="fa fa-apple"></i> </div>
                                            <div class="pull-right"> <span class="text">Available on the</span> <span class="text-2">App Store</span> </div>
                                        </a>
                                        <a href="#" class="app-btn android-button clearfix">
                                            <div class="pull-left"><i class="fa fa-android"></i> </div>
                                            <div class="pull-right"> <span class="text">Available on the</span> <span class="text-2">Play store</span> </div>
                                        </a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- start: FOOTER -->
            <footer class="footer">
                <div class="container">
                    <!-- top footer statrs -->
                    <div class="row top-footer">
                    <div class="col-xs-8 col-sm-4 about color-gray">
                            <h5>Get in touch</h5>
                            <ul>
                            <div style="text-decoration:none; overflow:hidden;max-width:100%;width:500px;height:300px;"><div id="display-google-map" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Gandhipuram,+Coimbatore,+Tamil+Nadu,+India&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe></div><a class="embedded-map-code" href="https://www.bootstrapskins.com/themes" id="authorize-map-data">premium bootstrap themes</a><style>#display-google-map img{max-height:none;max-width:none!important;background:none!important;}</style></div>
                            </ul>
                        </div>
                        
                   
                    <!-- top footer ends -->
                    <!-- bottom footer statrs -->
                    <div class="row bottom-footer">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-3 payment-options color-gray">
                                <h5>Social Links</h5>
                                    <ul>
                                        <li>
                                            <a href="#"> <img src="images/wa.png" alt="Paypal"> </a>
                                        </li>
                                        <li>
                                            <a href="#"> <img src="images/insta.png" alt="Mastercard"> </a>
                                        </li>
                                        <li>
                                            <a href="#"> <img src="images/fb.png" alt="Maestro"> </a>
                                        </li>
                                        <li>
                                            <a href="#"> <img src="images/twit.png" alt="Stripe"> </a>
                                        </li>
                                      
                                    </ul>
                                </div>
                                <div class="col-xs-12 col-sm-4 address color-gray">
                                    <h5>Address</h5>
                                    <p>21, Thiyagaraya New Street, Coimbatore - 641 001</p>
                                    <h5>Phone: <a href="tel:+080000012222">9025 403 432</a></h5> </div>
                                <div class="col-xs-12 col-sm-5 additional-info color-gray">
                                    <h5>Additional information</h5>
                                    <p> &nbsp; &nbsp; </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- bottom footer ends -->
                </div>
            </footer>
            <!-- end:Footer -->
        </div>
  
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>
</body>

</html>