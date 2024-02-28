<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

   <link rel="stylesheet" href="{{ asset('CSS/Pages.css')}}">
    <title>Journal</title>
</head>

<body>

    @extends('layouts.header')
    @section('webcontent')

    <!-- ======= Jouenal Section ======= -->
    <section id="Jou" class="Jou">
        <div class="container">
            <div class="row" data-aos="zoom-in">
                <div class="col-lg-9 text-center text-lg-start">
                    <h1>Journal Subscription</h1>
                    <p>Stay ahead in the world of biotechnology and nature with unlimited access to cutting-edge
                        research through our bionature journal subscriptions.</p>
                </div>
                <div class="col-lg-3 Jou-btn-container text-center">
                    <a class="Jou-btn align-middle" href="submitpaper.php">Submit Paper Online</a>
                </div>
            </div>
        </div>
    </section><!-- End Jou Section -->


    <!------ Include the above in your HEAD tag ---------->

    <div class="aboutus-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="aboutus-image float-left hidden-sm"><img src="" alt=""></div>
                    </div>
                    <div class="col-md-8 col-sm-6 col-xs-12">
                        <div class="aboutus-content" data-aos="fade-right" data-aos-duration="1000">

                            <h1>Journal<span>Subscriptions</span></h1>
                            <h4>Bionature</h4>

                                    <p>BioNatureis provides best journal subscription services on
                                        various subjects and
                                        specializations in animal sciences. We have an experienced and professional
                                        team, which
                                        does handle subscription work efficiently.Our subscribers are provided with an
                                        online
                                        tracking and notification system to track the dispatched publications.
                                        Subscriptions are
                                        delivered through courier and registered post.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
     <!-- / End Journal -->

@endsection


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>