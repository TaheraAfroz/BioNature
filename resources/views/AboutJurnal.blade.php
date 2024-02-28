<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

   <link rel="stylesheet" href="{{ asset('CSS/Pages.css')}}">

    <title>Jurnal</title>
</head>
<body>
    
    @extends('layouts.header')
    @section('webcontent')
    
<!-- ======= abbout journals slide img ======= -->
<section id="jur" class="jur">
    <div class="container">

        <div class="row" data-aos="zoom-in">
            <div class="col-lg-9 text-center text-lg-start">
                <h3>Bionature</h3>
                <p>Where science meets nature in the pursuit of knowledge.</p>
            </div>
            <div class="col-lg-3 jur-btn-container text-center">
                <a class="jur-btn align-middle" href="submitpaper.php">Submit Paper Online</a>
            </div>
        </div>

    </div>
</section><!-- End abbout journals slide img Section -->


<!------  background image ---------->
<div class="aboutus-area">

    <!------  about journal ---------->
    <div class="container">

        <div class="row">
            <div class="col-xs-12">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="aboutus-image float-left hidden-sm"><img src="" alt=""></div>
                </div>
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <div class="aboutus-content">

                        <h1>About<span> Journal</span></h1>
                        <h4>Bionature</h4>
                        <p>The BioNature as an international journal offers the most affordable self-publishing
                            services in all over the world. The BioNature journal has professional writers with
                            worldwide communities. We provide relevant networking opportunities support literature
                            on various animal sciences an individual throughout our services. We are engage in the
                            publishing, supplying and exporting of variable textual sources. Our journal have well
                            qualified and strong workforce of editors and reviewers along the ethical writers. Our
                            hardcore editorial team of professionals includes doctors, engineers, scientists, social
                            activities and researchers. Our are well experience and expert in theirs field of
                            journal publications and provide possible assistance in quality product and managing
                            textual matters to sustainable society. We aim to provide professional self publications
                            on research and review articles; guidance and support to all emerging authors who
                            inspire to write and publish their articles with our worldwide availability on journal
                            webpage.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

</body>
</html>
