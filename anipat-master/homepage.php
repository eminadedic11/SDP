<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home Page</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <header>
        <div class="header-area ">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-8">
                            <div class="short_contact_list">
                                
                            </div>
                        </div>
                       
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3">
                            <div class="logo">
                                <a href="homepage.html">
                                    <img src="img/logo1.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a  href="homepage.html">home</a></li>
                                        <li><a href="#">Posts <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="myposts.html">My posts</a></li>
                                                <li><a href="createpost.html">Create a post</a></li>
                                                <li><a href="requests.html">Requests</a></li>
                                            </ul>
                                        </li>
                                        
                                        <li><a href="settings.html">Settings</a></li>


                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider slider_bg_1 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <div class="slider_text">
                        <h3>Welcome <br> <span>Back</span></h3>
                        <p>Post an announcement that you are a pet sitter and<br>make an agreement with the pet owner</p>
                            <a href="createpost.html" class="boxed-btn4">Create a post</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dog_thumb d-none d-lg-block">
                <img src="img/banner/dog.png" alt="">
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- service_area_start  -->
    <div class="service_area">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-7 col-md-10">
                    <div class="section_title text-center mb-95">
                        <h3>Requests</h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single_service">
                         <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
                             <div class="service_icon">
                                 <img src="img/service/service_icon_1.png" alt="">
                             </div>
                         </div>
                         <div class="service_content text-center">
                            <h3>Ana Milić</h3>
                            <p>Hello, I have a lively Labrador named Max who needs someone to watch over him for a weekend. 
                                He's friendly but energetic, so I'm looking for a pet sitter who can keep up with his playfulness. Max loves walks and needs feeding twice a day. Please let me know your availability and rates. Thank you!.</p><br>
                                <div class="service_actions">
                                    <a href="#" class="btn btn-primary">Answer</a>
                                </div>
                                
                         </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service active">
                         <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
                             <div class="service_icon">
                                 <img src="img/service/service_icon_2.png" alt="">
                             </div>
                         </div>
                         <div class="service_content text-center">
                            <h3>Belmin Belić</h3>
                            <p>Hi,I'm going out of town for a few days and need a reliable pet sitter to take care of my two cats. They are indoor cats and have their favorite toys. 
                                I'd appreciate someone who can spend some time playing with them and ensuring they're comfortable. Please share your experience and rates.</p><br>
                                <div class="service_actions">
                                    <a href="#" class="btn btn-primary">Answer</a>
                                </div>
                                
                         </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service">
                         <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
                             <div class="service_icon">
                                 <img src="img/service/service_icon_3.png" alt="">
                             </div>
                         </div>
                         <div class="service_content text-center">
                            <h3>Sanja Perić</h3>
                            <p>Hi! I have a pair of exotic birds that require special attention while I'm away. They have specific dietary needs, and their cage needs daily cleaning.
                                 If you have a quiet and pet-friendly environment, and you're comfortable caring for birds, I'd love to discuss the details further.</p><br>
                                 <div class="service_actions">
                                    <a href="#" class="btn btn-primary">Answer</a>
                                </div>
                                
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service_area_end -->

    

    <!-- footer_start  -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Contact Us
                            </h3>
                            <ul class="address_line">
                                <li>+387 62 408 194</li>
                                <li><a href="#">mypetpal@gmail.com</a></li>
                                <li>71 000, Sarajevo, BiH</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3  col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Our Servces
                            </h3>
                            <ul class="links">
                                <li><a href="#">Pet Sitting</a></li>
                                <li><a href="#">Pet Walking </a></li>
                                <li><a href="#">Healthy Food</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3  col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Quick Link
                            </h3>
                            <ul class="links">
                                <li><a href="sitters.html">Pet Sitters</a></li>
                                <li><a href="contact.html">Contact us</a></li>
                                <li><a href="signin.html">Sign In</a></li>
                              
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3 ">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="img/logo1.png" alt="">
                                </a>
                            </div>
                            <p class="address_text">Sarajevska 230, Sarajevo 
                                71 000, BiH
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="bordered_1px"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer_end  -->


    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>

    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            disableDaysOfWeek: [0, 0],
        //     icons: {
        //      rightIcon: '<span class="fa fa-caret-down"></span>'
        //  }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }

        });
        var timepicker = $('#timepicker').timepicker({
         format: 'HH.MM'
     });
    </script>
</body>

</html>