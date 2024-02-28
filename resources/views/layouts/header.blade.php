<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
 
    <link rel="stylesheet" href="{{ asset('CSS/Nave.css')}}">


    <title>Navbar</title>
</head>
<body>
    
<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center justify-content-between">

        <h1 class="logo">Bio Nature
            <a href="#"><img src="#" alt=""></a>
        </h1>
        <a href="#" class="hamburger" id="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </a>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="{{'/'}}"><span><i class="bi bi-house color-red"></i>
                            Home</span></a></li>
                <li class="dropdown"><a href="#"><span>About Us</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{'/AboutJurnal'}}">About Jurnal</a></li>
                        <li><a href="{{'/Aims'}}">Aims and Scope</a></li>

                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Publication</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{'/PolicyD'}}">Policy Details</a></li>
                        <li><a href="{{'/DReviewers'}}">Duties of Reviewers</a></li>
                        <li><a href="{{'/DAuthers'}}">Duties of Authors</a></li>
                        <li><a href="{{'/Ethical'}}">Ethical Guidelines</a></li>
                        <li><a href="{{'/Privacy'}}">Privacy Policy</a></li>
                        <li><a href="{{'/Terms'}}">Terms and Conditions</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Archive</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{'/Archive'}}">Archives</a></li>
                        <li><a href="{{'/Conference'}}">Conference Proceedings</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Subscription</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{'/APC'}}">APC</a></li>
                        <li><a href="{{'/Journal'}}">Journal Subscriptions</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="#">Register</a></li>
                <li><a class="nav-link scrollto" href="#">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->

    </div>
</header>
<!-- End Header -->

@yield('webcontent')

<!-- Footer -->

    <!-- Remove the container if you want to extend the Footer to full width. -->
    <div>
        <!-- Footer -->
        <footer class="text-center text-lg-start text-white" style="background-color: #000">
            <!-- Grid container -->
            <div class="p-4 pb-0">
                <!-- Section: Links -->
                <section class="">
                    <!--Grid row-->
                    <div class="row">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                            <h6 class="text-uppercase mb-4 font-weight-bold">
                                KULDEV PUBLICATION
                            </h6>
                            <p>
                                KulDev Publication offers the most affordable self-publishing services in India. The KulDev publication is India's professional young writers with worldwide communities.
                            </p>
                        </div>
                        <!-- Grid column -->

                        <hr class="w-100 clearfix d-md-none" />

                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                            <h6 class="text-uppercase mb-4 font-weight-bold">Our Services</h6>
                            <p>
                                <a class="text-white">Web Design</a>
                            </p>
                            <p>
                                <a class="text-white">Web Development</a>
                            </p>
                            <p>
                                <a class="text-white">Product Management</a>
                            </p>
                            <p>
                                <a class="text-white">Marketing</a>
                            </p>
                            <p>
                                <a class="text-white">Graphic Design</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <hr class="w-100 clearfix d-md-none" />

                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                            <h6 class="text-uppercase mb-4 font-weight-bold">
                                Useful Links
                            </h6>
                            <p>
                                <a href="{{'/'}}" class="text-white">Home</a>
                            </p>
                            <p>
                                <a href="{{'/AboutJurnal'}}" class="text-white">About Us</a>
                            </p>
                            <p>
                                <a class="text-white">Services</a>
                            </p>
                            <p>
                                <a class="{{'/Terms'}}">Terms & Condition</a>
                            </p>
                            <p>
                                <a class="{{'/Privacy'}}">Privacy policy</a>
                            </p>
                        </div>

                        <!-- Grid column -->
                        <hr class="w-100 clearfix d-md-none" />

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                            <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                            <p><i class="fa fa-home mr-3"></i> Aurangabad- 431001, Maharashtra, India</p>
                            <p><i class="fa fa-envelope mr-3"></i> kuldevgroup@gmail.com</p>
                            <p><i class="fa fa-envelope mr-3"></i>kuldevpublication@gmail.com</p>
                            <p><i class="fa fa-phone mr-3"></i> +91 9021 5632 92</p>
                            <p><i class="fa fa-phone mr-3"></i> +91 8668 4295 90</p>
                            <p><i class="fa fa-phone mr-3"></i> +91 9766 0817 11</p>

                        </div>
                        <!-- Grid column -->
                    </div>
                    <!--Grid row-->
                </section>
                <!-- Section: Links -->

                <hr class="my-3">

                <!-- Section: Copyright -->
                <section class="p-3 pt-0">
                    <div class="row d-flex align-items-center">
                        <!-- Grid column -->
                        <div class="col-md-7 col-lg-8 text-center text-md-start">
                            <!-- Copyright -->
                            <div class="p-3">
                                © 2020 Copyright 
                                <a class="text-white" href="#">BioNature</a>
                                All Rights Reserved
                            </div>
                            <!-- Copyright -->
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
                            <!-- Facebook -->
                            <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button">
                                <i class="fa fa-facebook"></i>
                            </a>

                            <!-- Twitter -->
                            <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                                    class="fa fa-twitter"></i></a>

                            <!-- Google -->
                            <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button">
                                <i class="fa fa-google" ></i></a>

                            <!-- Instagram -->
                            <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button">
                                <i class="fa fa-instagram" ></i></a>
                        </div>
                        <!-- Grid column -->
                    </div>
                </section>
                <!-- Section: Copyright -->
            </div>
            <!-- Grid container -->
        </footer>
        <!-- Footer -->
    </div>
    <!-- End of .container -->



</body>
</html>



 
