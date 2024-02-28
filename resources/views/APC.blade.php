<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-5">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!--Footer Link-->
    <link rel="stylesheet" href="{{ asset('CSS/Pages.css')}}">
    <title>APC</title>

</head>

<body>
    @extends('layouts.header')
    @section('webcontent')

<!-- APC -->
    <section id="apc" class="apc">
        <div class="container">
            <div class="row" data-aos="zoom-in">
                <div class="col-lg-9 text-center text-lg-start">
                    <h3>Article Processing Charges (APC)</h3>
                    <p>Unlocking scientific discoveries comes with a cost: Article Processing Charges (APCs) pave the
                        way for groundbreaking research in bionature.</p>
                </div>
                <div class="col-lg-3 apc-btn-container text-center">
                    <a class="apc-btn align-middle" href="submitpaper.php">Submit Paper Online</a>
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
                        <div class="aboutus-content">

                            <h1>Article Processin <span>Charges (APC)</span></h1>
                            <h4>Bionature</h4>
                            <p>BioNature provides all articles in full open access immediately upon publication.
                                For manuscripts submitted from 1 October 2023, authors will be required to pay a
                                one-time article processing charge (APC) upon formal manuscript acceptance. <br>
                                <br>The APC
                                is paid for the costs of peer review administration and management,
                                professional production of articles in PDF and other formats, website maintains,
                                dissemination of published papers in various platforms, including a provision of
                                online tools for
                                editors and authors, liaison with abstracting and indexing services, and other
                                customer
                                services. <br> <br>
                                <span><strong>
                                        Message to our authors:
                                    </strong> “Research Article” and “Review Article”: A charge of 16,500 INR*
                                    (USD 700* is required).
                                </span>
                                <span><strong> <br>
                                        Excluded fees and VAT:
                                    </strong>"The article processing charge must not be refunded if authors have
                                    made
                                    the payment before the reviewing process."
                                </span>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-8 col-sm-6 col-xs-12">
                        <div class="aboutus-content" data-aos="fade-right" data-aos-duration="1000">

                            <h1>Payment <span>Instructions</span></h1>
                            <h4>Payment Instructions for BioNature
                                (APC) after an accepted manuscript</h4>
                            <ul>

                                <li>Step1: Please select list >BioNature Article Processing Charges
                                    (APC)</li>
                                <li>Step 2: Fill out the information completely &confirm</li>
                                <li>Step 3: Please fill in the debit or credit card information</li>
                                <li>BioNature - Payment Gateway</li>
                                <li>BioNature Article Processing Charges (APC)</li>
                            </ul>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- / End APC -->

@endsection

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>