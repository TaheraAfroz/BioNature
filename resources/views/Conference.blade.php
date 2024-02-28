<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('CSS/Pages.css')}}">
    <title>Conference</title>
</head>

<body>
    @extends('layouts.header')
    @section('webcontent')

    <!-- ======= Con Section ======= -->
    <section id="Con" class="Con">
        <div class="container">
            <div class="row" data-aos="zoom-in">
                <div class="col-lg-9 text-center text-lg-start">
                    <h3>Conference Proceedings</h3>
                    <p>Capturing cutting-edge research and innovations, our conference proceedings serve as the beacon
                        of knowledge for paper publication.</p>
                </div>
                <div class="col-lg-3 Con-btn-container text-center">
                    <a class="Con-btn align-middle" href="submitpaper.php">Submit Paper Online</a>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Con Section ========-->


    <!------ Include the above in your HEAD tag ---------->
    <div class="aboutus-area"></div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="aboutus-image float-left hidden-sm"><img src="" alt=""></div>
                </div>

                <div class="col-md-8 col-sm-6 col-xs-12">
                    <div class="aboutus-content">

                        <h1>ISSN and <span>Copyright</span></h1>
                        <h4>Bionature</h4>
                        <p>BioNature gives International standard serial number is assigned<br> to
                            text-based monographic publications. Is an identity <br>for the article made
                            publicly available, can be
                            identified
                            by ISSN
                        </p>
                    </div>
                </div>

                <div class="col-md-8 col-sm-6 col-xs-12">
                    <div class="aboutus-content">

                        <h1>Buy Journals <span>Online</span></h1>

                        <p>"Unlock the power of knowledge with our curated selection of journals
                            available for
                            paper publication, conveniently accessible online."</p>
                        <a href="#">→ Journal Subscription</a><br>
                        <a href="#">→ Academic Subscription</a><br>
                        <a href="#">→ Journal subscriptions for the Library</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>