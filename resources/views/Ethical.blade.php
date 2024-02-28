<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('CSS/Pages.css')}}">
 
    <title>Ethical Guidelines</title>
</head>
<body>
    
    @extends('layouts.header')
    @section('webcontent')

    <section id="Eth" class="Eth">
        <div class="container">
            <div class="row" data-aos="zoom-in">
                <div class="col-lg-9 text-center text-lg-start">
                    <h3>Ethical Guidelines</h3>
                    <p></p>
                </div>
                <div class="col-lg-3 Eth-btn-container text-center">
                    <a class="Eth-btn align-middle" href="submitpaper.php">Submit Paper Online</a>
                </div>
            </div>
        </div>
    </section>


    <div class="aboutus-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="aboutus-image float-left hidden-sm"><img src="" alt=""></div>
                    </div>
                    <div class="col-md-8 col-sm-6 col-xs-12">
                        <div class="aboutus-content" data-aos="fade-right" data-aos-duration="1000">
                            <h1>Editorial <span>Policies</span></h1>
                            <h4>Bionature</h4>
                            <p>BioNature expect the highest ethical standards from their authors, reviewers and
                                editors
                                when conducting research, submitting papers and throughout the peer-review process.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-8 col-sm-6 col-xs-12">
                        <div class="aboutus-content" data-aos="fade-right" data-aos-duration="1000">

                            <h1>Peer <span>Review</span></h1>
                            <p>
                                BioNature employ a double-blind review process, in which the author identities are
                                concealed
                                from
                                the reviewers, and vice versa, throughout the review process.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-8 col-sm-6 col-xs-12">
                        <div class="aboutus-content" data-aos="fade-right" data-aos-duration="1000">
                            <h1>Retraction <span>Policy</span></h1>
                            <p>All Publications shall act in accordance with COPE Retraction Guidelines.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    @endsection

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>    


</body>
</html>