<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('CSS/Pages.css')}}">
 
    <title>Aims and Scope</title>
</head>
<body>
    
    @extends('layouts.header')
    @section('webcontent')

 <!-- ======= Aims and scope Section ======= -->
 <section id="Aim" class="Aim">
    <div class="container">

        <div class="row" data-aos="zoom-in">
            <div class="col-lg-9 text-center text-lg-start">
                <h3>Bionature</h3>
                <p>Where science meets nature in the pursuit of knowledge.</p>
            </div>
            <div class="col-lg-3 Aim-btn-container text-center">
                <a class="Aim-btn align-middle" href="submitpaper.php">Submit Paper Online</a>
            </div>
        </div>

    </div>
</section>
<!-- End Aims Section -->


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

                        <h1>Aims & <span>Scope</span></h1>
                        <h4>Bionature</h4>
                        <p>BioNature is a peer-reviewed ‘Open Access’ journal covering all areas of
                            Biological
                            sciences, launched in 2023. It is published 12 Issues (Monthly) by the KulDev
                            Publication. The scope of journal is to assessment and publishing in all agricultural
                            sciences, bacteriology, plant Sciences, plant taxonomy, crop science, applied zoology,
                            entomology, protozoology, cell biology, tissue culture, economic zoology, vectors,
                            experimental zoology, virology, animal taxonomy, infections, plant toxicology, plant and
                            animal physiology, vertebrate zoology, microbiology, animal health, invertebrate
                            zoology, helminthology, parasitology, biophysics, biotechnology, toxicology, apiculture,
                            picisculture, bee keeping, fishery science, endocrinology, marine fishery, sea food,
                            dairy science, animal husbandry, sericulture, livestock, limnology, marine animals and
                            plant diversity and agricultural engineering.</p>

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