<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>DreamingFoodRegistation</title>

        <!-- CSS FILES -->  
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">                      
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/tooplate-crispy-kitchen.css" rel="stylesheet">
<!--

Tooplate 2129 Crispy Kitchen

https://www.tooplate.com/view/2129-crispy-kitchen

-->
    </head>
    
    <body>
        
        <nav class="navbar navbar-expand-lg bg-white shadow-lg">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <a class="navbar-brand" href="index.php">
                    Dreaming Food
                </a>

                <div class="d-lg-none">
                    <button type="button" class="custom-btn btn btn-danger" data-bs-toggle="modal" data-bs-target="#BookingModal">Reservation</button>
                </div>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="about.php">Story</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="menu.php">Menu</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="news.php">Our Updates</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>

                <div class="d-none d-lg-block">
                    <a href="register.php" class="news-title-link">Registation</a>
                </div>

            </div>
        </nav>

        <main>

            <header class="site-header site-news-detail-header">
                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <h2>Registation for the Best Feature</h2>
                        </div>

                    </div>
                </div>
            </header>

            
        <section class="newsletter section-padding">

                        <?php
error_reporting(1);
include("connection.php");
if($_POST['sub'])
{ 
$name=$_POST['t1'];
$email=$_POST['t2'];
$password=$_POST['t3'];
$phone=$_POST['t4'];
$city=$_POST['t5'];
$town=$_POST['t6'];
if(mysql_query("insert into register(name,email,password,phone,city,township) values('$name','$email','$password','$phone','$city','$town')"))
{
//echo "<script>location.href='reg_success.php?email=$email'</script>"; 
header("location:reg_success.php?name=$name & email=$email");}
else {$error= "user already exists";}}

?>


        <form class="booking-form row" role="form" action="#" method="post">
            <div class="col-lg-6 col-12">
                <label for="name" class="form-label">Full Name</label>

                <input type="text" name="t1" id="t1" class="form-control" placeholder="Your Name" required>
            </div>

            <div class="col-lg-6 col-12">
                <label for="email" class="form-label">Email Address</label>

                <input type="email" name="t2" id="t2" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="your@email.com" required>
            </div>

            <div class="col-lg-6 col-12">
                <label for="people" class="form-label">Your Password</label>

                <input type="password" name="t3" id="t3" class="form-control" placeholder="Password">
            </div>

            <div class="col-lg-6 col-12">
                <label for="phone" class="form-label">Phone Number</label>

                <input type="telephone" name="t4" id="t4" pattern="" class="form-control" placeholder="123-456-7890">
            </div>

            <div class="col-lg-6 col-12">
                <label for="date" class="form-label">Your City</label>

                <input type="text" name="t5" id="t5" class="form-control" placeholder="City" required>
            </div>

            <div class="col-lg-6 col-12">
                <label for="time" class="form-label">Country</label>

                <select class="form-select form-control" name="t6" id="t6">
                <option value="5" selected>Myanmar</option>
                <option value="6">Thailand</option>
                <option value="7">Korea</option>
                <option value="8">Japan</option>
                <option value="9">United State</option>
                </select>
            </div>

                <div class="col-lg-4 col-12 ms-auto">
                    
                    <input type="submit" name="sub" id="sub" value="Register" class="submit_button" />
                </div>
           
        </form>
        </section>

        <footer class="site-footer section-padding">
            
            <div class="container">
                
                <div class="row">

                    <div class="col-12">
                        <h4 class="text-white mb-4 me-5">Dreaming Food</h4>
                    </div>

                    <div class="col-lg-4 col-md-7 col-xs-12 tooplate-mt30">
                        <h6 class="text-white mb-lg-4 mb-3">Location</h6>

                        <p>No.14, U Tun Lin Chan street, Kamayunt Township, Yangon, Myanmar</p>

                        <a href="https://goo.gl/maps/wZVGLA7q64uC1s886" class="custom-btn btn btn-dark mt-2">Directions</a>
                    </div>

                    <div class="col-lg-4 col-md-5 col-xs-12 tooplate-mt30">
                        <h6 class="text-white mb-lg-4 mb-3">Opening Hours</h6>

                        <p class="mb-2">Sunday - Saturday</p>

                        <p>80:00 AM - 10:00 PM</p>

                        <p>Tel: <a href="tel: 010-02-0340" class="tel-link">09 797 897 197</a></p>
                    </div>

                    <div class="col-lg-4 col-md-6 col-xs-12 tooplate-mt30">
                        <h6 class="text-white mb-lg-4 mb-3">Social</h6>

                        <ul class="social-icon">
                            <li><a href="#" class="social-icon-link bi-facebook"></a></li>

                            <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                            <li><a href="https://twitter.com/search?q=tooplate.com&src=typed_query&f=live" target="_blank"
                            	 class="social-icon-link bi-twitter"></a></li>

                            <li><a href="#" class="social-icon-link bi-youtube"></a></li>
                        </ul>
                    
                        <p class="copyright-text tooplate-mt60">Copyright © 2022 Dreaming Food Co., Ltd.
                        <br>Design: <a rel="nofollow" href="https://www.tooplate.com/" target="_blank">Kaung-S</a></p>
                        
                    </div>

                </div><!-- row ending -->
                
             </div><!-- container ending -->
             
            </footer>

        <!-- Modal -->
        <div class="modal fade" id="BookingModal" tabindex="-1" aria-labelledby="BookingModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="mb-0">Reserve a table</h3>

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body d-flex flex-column justify-content-center">
                        <div class="booking">
                            
                            <form class="booking-form row" role="form" action="#" method="post">
                                <div class="col-lg-6 col-12">
                                    <label for="name" class="form-label">Full Name</label>

                                    <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" required>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <label for="email" class="form-label">Email Address</label>

                                    <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="your@email.com" required>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <label for="phone" class="form-label">Phone Number</label>

                                    <input type="telephone" name="phone" id="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" class="form-control" placeholder="123-456-7890">
                                </div>

                                <div class="col-lg-6 col-12">
                                    <label for="people" class="form-label">Number of persons</label>

                                    <input type="text" name="people" id="people" class="form-control" placeholder="12 persons">
                                </div>

                                <div class="col-lg-6 col-12">
                                    <label for="date" class="form-label">Date</label>

                                    <input type="date" name="date" id="date" value="" class="form-control">
                                </div>

                                <div class="col-lg-6 col-12">
                                    <label for="time" class="form-label">Time</label>

                                    <select class="form-select form-control" name="time" id="time">
                                      <option value="5" selected>5:00 PM</option>
                                      <option value="6">6:00 PM</option>
                                      <option value="7">7:00 PM</option>
                                      <option value="8">8:00 PM</option>
                                      <option value="9">9:00 PM</option>
                                    </select>
                                </div>

                                <div class="col-12">
                                    <label for="message" class="form-label">Special Request</label>

                                    <textarea class="form-control" rows="4" id="message" name="message" placeholder=""></textarea>
                                </div>

                                <div class="col-lg-4 col-12 ms-auto">
                                    <button type="submit" class="form-control">Submit Request</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="modal-footer"></div>
                    
                </div>
                
            </div>
        </div>

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>
