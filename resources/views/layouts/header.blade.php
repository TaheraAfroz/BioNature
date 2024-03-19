<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('CSS/Pages.css')}}">
    <link rel="stylesheet" href="{{ asset('CSS/sidbar.css')}}">
    <title>Bionature</title>
</head>

<body>

    <!-- ======= Header ======= -->

    <!--navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Bionature</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{'/'}}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            About
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/AboutJournal">About Journal</a></li>
                            <li><a class="dropdown-item" href="/Aims">Aims and Scopes</a></li>
                            <li><a class="dropdown-item" href="/Editorial">Editorial Advisory Board</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Publication
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/PolicyD">Policy Details</a></li>
                            <li><a class="dropdown-item" href="/DReviewers">Duties of Reviewers</a></li>
                            <li><a class="dropdown-item" href="/DAuthers">Duties of Authors</a></li>
                            <li><a class="dropdown-item" href="/Ethical">Ethical Guidelines</a></li>
                            <li><a class="dropdown-item" href="/Privacy">Privacy Policy</a></li>
                            <li><a class="dropdown-item" href="/Terms">Terms and Conditions</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Archive
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/Archive">Archives</a></li>
                            <li><a class="dropdown-item" href="/Conference">Conference Proceedings</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Subscription
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/APC">APC</a></li>
                            <li><a class="dropdown-item" href="/Journal">Journal Subscriptions</a></li>
                            <li><a class="dropdown-item" href="/User">Information for user</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{'/contact'}}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <!-- End Header -->
    <div class="row">
        @if(request()->is('/'))
            @yield('webcontent')
        @else

        <section id="jur" class="jur">
        <div class="container">

            <div class="row" data-aos="zoom-in">
                <div class="col-lg-9 text-center text-lg-start">
                    <h3>@yield('title')</h3>
                    <p>@yield('subhead')</p>
                </div>
                <div class="col-lg-3 jur-btn-container text-center">
                    <a class="jur-btn align-middle" href="submitpaper.php">Submit Paper Online</a>
                </div>
            </div>

        </div>
    </section><!-- End abbout journals slide img Section -->

        <div class="col-sm-9">
            @yield('webcontent')
        </div>
        <div class="col-sm-3">
            <aside class="">
                <div class="d-flex flex-column gap-4 sidebar-items-section">
                    <div class="sidebar-item">
                        <button class="btn-hover color-1">Submit Work</button>

                    </div>
                    <div class="sidebar">
                        <div class="card border-secondary mb-3" style="max-width: 18rem;">
                            <div class="card-header bg-transparent border-success">JOURNAL METRICS 2023</div>
                            <div class="card-body text-secondary">

                                <p class="card-text">
                                    <ul class="list-group border-radius-0">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Acceptance Rate:
                                            <span class="badge bg-primary rounded-pill">99%</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Review Speed:
                                            <span class="badge bg-primary rounded-pill">40 days</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Issue per Year:
                                            <span class="badge bg-primary rounded-pill">12</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            No. of Volumes:
                                            <span class="badge bg-primary rounded-pill">4</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            2023 No. of Submissions:
                                            <span class="badge bg-primary rounded-pill">0</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            No. of Published:
                                            <span class="badge bg-primary rounded-pill">03</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            No. of Reviewers:
                                            <span class="badge bg-primary rounded-pill">03</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            No. of Scopus Citations:
                                            <span class="badge bg-primary rounded-pill">0</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            2023 Percentile (CiteScore):
                                            <span class="badge bg-primary rounded-pill">0.0</span>
                                        </li>
                                    </ul>
                                </p>
                            </div>
                            <div class="card-footer bg-transparent border-secondary">
                                <p class="mb-0"><em>Last updated: December 15, 2023 <img
                                            src="https://wjst.wu.ac.th/public/site/images/admin/newdata12.gif"
                                            alt=""><br></em>
                                </p>
                            </div>
                        </div>
                        <div class="card border-secondary mb-3" style="max-width: 18rem;">
                            <div class="card-header bg-transparent border-secondary"> PLAGIARISM CHECKER</div>
                            <div class="card-body text-secondary">

                                <p class="card-text">
                                    <a href="https://www.ithenticate.com/">
                                        <img src="ethenticate.png" alt="logo ithrnticate" width="261" height="78"
                                            class="img-fluid">
                                    </a>
                                </p>
                            </div>
                            <div class="card-footer bg-transparent border-secondary">
                                <a href="https://plagiarismcheckerx.com/">
                                    <img src="plag_checker.png" alt="plagarism checker x" width="261" height="78"
                                        class="img-fluid">
                                </a>
                            </div>
                        </div>

                        <div class="card border-secondary mb-3" style="max-width: 18rem;">
                            <div class="card-header bg-transparent border-secondary">INFORMATION</div>
                            <div class="card-body text-secondary">

                                <p class="card-text">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="/information/readers">
                                                For Readers
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/information/readers">
                                                For Authors
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/information/readers">
                                                For Librarians
                                            </a>
                                        </li>
                                    </ul>
                                </p>
                            </div>
                        </div>
                        <div class="card border-secondary mb-3" style="max-width: 18rem;">
                            <div class="card-header bg-transparent border-secondary">ZooScan Template</div>
                            <div class="card-body text-secondary">

                                <p class="card-text">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="#">
                                                Word Template
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Latex Template
                                            </a>
                                        </li>
                                    </ul>
                                </p>
                            </div>


                        </div>
                    </div>

            </aside>
        </div>
        @endif
    </div>

    <!-- Footer -->

    <!-- Remove the container if you want to extend the Footer to full width. -->
    <div class="row">
        <!-- Footer -->
        <footer class="text-center text-lg-start text-white" style="background-color:#000">
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
                                KulDev Publication offers the most affordable self-publishing services in India. The
                                KulDev publication is India's professional young writers with worldwide communities.
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
                                <a href="/" class="text-white">Home</a>
                            </p>
                            <p>
                                <a href="/AboutJournal" class="text-white">About Us</a>
                            </p>
                            <p>
                                <a href="/AboutJournal" class="text-blue">Services</a>
                            </p>
                            <p>
                                <a href="/Terms" class="text-blue">Terms & Condition</a>
                            </p>
                            <p>
                                <a href="/Privacy" class="text-blue">Privacy policy</a>
                            </p>
                        </div>

                        <!-- Grid column -->
                        <hr class="w-100 clearfix d-md-none" />

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                            <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                            <p><i class="fa fa-home mr-3"></i> Aurangabad- 431001, Maharashtra, India</p>
                            <p><i class="fa fa-envelope mr-3"></i> kuldevgroup@gmail.com</p>
                            <p><i class="fa fa-envelope mr-3"></i> kuldevpublication@gmail.com</p>
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
                                <i class="fa fa-google"></i></a>

                            <!-- Instagram -->
                            <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button">
                                <i class="fa fa-instagram"></i></a>
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
    <script src="ani.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();

    </script>
</body>

</html>
