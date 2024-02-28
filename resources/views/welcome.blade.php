<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

     <!-- Fonts -->
      {{-- <link rel="preconnect" href="https://fonts.bunny.net">--}}
      <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

  

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  {{-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> --}}

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">


      <link rel="stylesheet" href="{{ asset ('CSS/fortry.css') }}">

    <title>welcome</title>
</head>
<body>
    
    @extends('layouts.header')
    @section('webcontent')

    <!-- Slider -->
    <div id="slider-animation" class="carousel slide" data-ride="carousel">
    
        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#slider-animation" data-slide-to="0" class="active"></li>
            <li data-target="#slider-animation" data-slide-to="1"></li>
            <li data-target="#slider-animation" data-slide-to="2"></li>
        </ul>
    
        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('Images/GettyImages-1394849737-1088x726.jpg')}}" width="1500px" height="650px" alt="Los Angeles">
                <div class="text-box">
                    <h3 class="wow slideInRight" data-wow-duration="2s">BIONATURE PAPER PUBLICATION</h3>
                    <h6 class="wow slideInLeft" data-wow-duration="2s">Discover the wonders of biodiversity in our
                        latest research...! </h6>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('Images/4.jpg')}}" width="1500px" height="650px" alt="Chicago">
                <div class="text-box">
                    <h3 class="wow slideInUp" data-wow-duration="4s">BIONATURE PAPER PUBLICATION</h3>
                    <h6 class="wow fadeInDown" data-wow-duration="4s">Unlocking the secrets of ecology through
                        innovative research </h6>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('Images/6.jpg')}}" width="1500px" height="650px" alt="New York">
                <div class="text-box">
                    <h3 class="wow fadeInUp" data-wow-duration="4s">BIONATURE PAPER PUBLICATION</h3>
                    <h6 class="wow fadeInUp" data-wow-duration="2s">Unveiling nature's mysteries through
                        groundbreaking scientific exploration.
                    </h6>
                </div>
            </div>
        </div>
    
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#slider-animation" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#slider-animation" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    
    </div>
    <!-- /Slider End -->
    
    <!-- About Us -->
    <div>
        <h6 class="display-4 about text-center">About Us</h6>
    
        <div class="cInnerContent">
    
            <div class="features">
    
                <div class="feature ipsSpacer_bottom_double ipsGrid ipsGrid_collapsePhone">
                    <div class="featured-image-container ipsGrid_span5 gs_reveal gs_reveal_fromLeft">
                        <div class="card">
                            <img width="479" src="{{ asset('Images/unnamed.jpg')}}" alt="">
                        </div>
                    </div>
    
                    <div class="ipsGrid_span7 ipsType_left">
    
                        <p class="gs_reveal" data-aos="fade-right" data-aos-duration="1000">The BioNature as an
                            international
                            journal offers the most affordable self-publishing services in all
                            over the world. The BioNature journal has professional writers with worldwide communities.
                            We
                            provide
                            relevant networking opportunities support literature on various animal sciences an
                            individual
                            throughout our services.Our are well experience and expert
                            in theirs field of journal publications and provide possible assistance in quality product
                            and
                            managing
                            textual matters to sustainable society. </p>
                    </div>
                </div>
    
                <div class="feature ipsSpacer_bottom_double ipsGrid ipsGrid_collapsePhone">
                    <div class="ipsGrid_span7 ipsType_right">
    
                        <p class="gs_reveal" data-aos="fade-right" data-aos-duration="1000">Our are well experience and
                            expert
                            in theirs field of journal publications and provide possible assistance in quality product
                            and
                            managing
                            textual matters to sustainable society. We aim to provide professional self publications on
                            research and review articles; guidance and support to all emerging
                            authors who inspire to write and publish their articles with our worldwide availability on
                            journal webpage .We are engage in the publishing, supplying and exporting of variable
                            textual
                            sources.Our journal have well qualified and strong
                            workforce of editors and reviewers along the ethical writers. Our hardcore editorial team of
                            professionals includes doctors, engineers, scientists, social activities and researchers.
                        </p>
                    </div>
    
                    <div class="featured-image-container ipsGrid_span5 gs_reveal gs_reveal_fromRight">
                        <div class="card">
                            <img width="479" src="{{ asset('Images/think.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
    
    
            </div>
        </div>
    </div>
    <!-- /About Us End -->
    
    <!-- Indexing -->
    <div>
        <div class="container">
            <div class="owl-carousel logo_active">
                <img class="img-fluid" src="{{ asset('Images/a.jpg')}}" alt="logo">
                <img class="img-fluid" src="{{ asset('Images/c.png')}}" alt="logo">
                <img class="img-fluid" src="{{ asset('Images/e.png')}}" alt="logo">
                <img class="img-fluid" src="{{ asset('Images/f.jpg')}}" alt="logo">
                <img class="img-fluid" src="{{ asset('Images/g.jpg')}}" alt="logo">
                <img class="img-fluid" src="{{ asset('Images/l.png')}}" alt="logo">
                <img class="img-fluid" src="{{ asset('Images/h.png')}}" alt="logo">
                <img class="img-fluid" src="{{ asset('Images/k.png')}}" alt="logo">
                <img class="img-fluid" src="{{ asset('Images/d.png')}}" alt="logo">
                <img class="img-fluid" src="{{ asset('Images/j.png')}}" alt="logo">
                <img class="img-fluid" src="{{ asset('Images/i.png')}}" alt="logo">
                <img class="img-fluid" src="{{ asset('Images/b.jpg')}}" alt="logo">             
            </div>
        </div>
    </div>
    <!-- /Indexing End -->
    
     <!-- Leadership -->
     <h6 class="display-4 text-center ">Leadership</h6>
    
     <section id="cta" class="cta">
        <div class="container">
            <div class="row" data-aos="zoom-in">
                <div class="col-lg-6 text-center text-lg-start">
                    <h3 class="gs_reveal" data-aos="fade-right" data-aos-duration="1000">Editor in Chief</h3>
                    <p class="gs_reveal" data-aos="fade-right" data-aos-duration="1000"><b>Dr. PawankumarSheshraoKharate </b>, M.Sc.Ph.D. <br> (Agriculture Science)
                        Principal, College of Agriculture Biotechnology, GeoraiTanda, Paithan Road, Aurangabad-431102, Maharashtra, India <br>Email- <a href="#"> www.coabat.org</a> <br> URL- <a href="#">http://pskharate@coabgt.org</a> <br>Contact <a href="#">+91 798791198</a>
                        </p>
                </div>
                <div class="col-lg-6 text-lg-start text-center">
                    <h3 class="gs_reveal" data-aos="fade-left" data-aos-duration="1000">Publisher</h3>
                    <p class="gs_reveal" data-aos="fade-left" data-aos-duration="1000"><b>Dr. Dinesh SheshraoKharate</b>, M.Sc.Ph.D. <br>
                        KulDev Publication,
                        PLNO-1, GNO-16,Harisingh Nagar, C.OP.H.S.Sudhakar NG, Aurangabad- 431001, Maharashtra, India. <br>Email- <a href="#">kuldevgroup@gmail.com</a> <br> URL- <a href="#">http://pskharate@coabgt.org</a> <br>Contact <a href="#">+91 9021563292  +91 9325750894</a>
                        </p>
                </div>
            </div>
    
        </div>
    </section>
    <!-- End Leadershiop Section -->
    
    <!-- Authers -->
    <div class="mt-0 ">
        <div class="pt-4 pb-4">
            <div class="text-center mb-4">
                <div class="badge badge-pill badge-secondary"></div>
                <h6 class="display-4 ">Editorial Advisory Board</h6>            
            </div>
            <div class="container owl-carousel owl-theme">
               
                <div class="item">
                    <div class="card testimonial-card">
                        <img src="{{ asset('Images/blank.webp')}}" class="card-img-top testimonial-image" alt="...">
                        <div class="card-body">
                            <p><b>
                                Dr.Dharmpal ChokhobaWagh </b>
                            </p>
                            <p class="card-text"> Dr.Dharmpal ChokhobaWagh, M.Sc.Ph.D. (Zoology & Fishery Science)
                                Assistant Professor, Department of Zoology and Fishery Scinece, Millind College of
                                Science, Nagsen, Aurangabad-431004, Maharashtra, India Email-milindscience.in;
                                URL-http://milinscience.in/senior-college-faculties
                                Contact +91 8668429590
                            </p>
                            <p class="card-text"><small class="text-muted"><a href="www.digital bamu"></a></small></p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card testimonial-card">
                        <img src="{{ asset('Images/blank.webp')}}" class="card-img-top testimonial-image" alt="...">
                        <div class="card-body">
                            <p><b>Dr. Sandeepsing Gaur</b></p>
                            <p class="card-text">Dr. Sandeepsing Gaur, M.Sc.Ph.D. (Chemical Science)
                                Professor, Head, PG Department of Chemistry, SantRamdas Arts, Commerce and Science
                                College, Ghansawangi, Jalna-423709, Maharashtra, India
                                Email-santramascollege@yahoo.co.in; URL-http://www.srcg
                                Contact +91 8788338094
                            </p>
                            <p class="card-text"><small class="text-muted"><a href="www.digital bamu"></a></small></p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card testimonial-card">
                        <img src="{{ asset('Images/blank.webp')}}" class="card-img-top testimonial-image" alt="...">
                        <div class="card-body">
                            <p><b>Dr. Vijay D. Suryawanshi</b></p>
                            <p class="card-text">Dr. Vijay D. Suryawanshi, M.Sc.Ph.D. (Zoology & Animal Science)
                                Assistant Professor, PG Department of Zoology, SantRamdas Arts, Commerce and Science
                                College, Ghansawangi, Jalna-423709, Maharashtra, India
                                Email-santramascollege@yahoo.co.in; URL-http://www.srcg
                                Contact +91 9765009491
                            </p>
                            <p class="card-text"><small class="text-muted"><a href="www.digital bamu"></a></small></p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card testimonial-card">
                        <img src="{{ asset('Images/blank.webp')}}" class="card-img-top testimonial-image" alt="...">
                        <div class="card-body">
                            <p><b>Dr. Dinesh SheshraoKharate</b></p>
                            <p class="card-text">Dr. Dinesh SheshraoKharate, M.Sc.Ph.D.
                                Assistant Professor, PG Department of Zoology, SantRamdas Arts, Commerce and Science
                                College, Ghansawangi, Jalna-423709, Maharashtra, India
                                Email-santramascollege@yahoo.co.in; <br>URL-http://www.srcg
                                Contact +91 9021563292.
                            </p>
                            <p class="card-text"><small class="text-muted"><a href="www.digital bamu"></a></small></p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card testimonial-card">
                        <img src="{{ asset('Images/blank.webp')}}" class="card-img-top testimonial-image" alt="...">
                        <div class="card-body">
                            <p> <b>Dr. Subhash B. Devkar</b></p>
                            <p class="card-text"> Dr. Subhash B. Devkar, M.Sc.Ph.D. (Geographical Science)
                                Assistant Professor, Department of Geography, SantRamdas Arts, Commerce and Science
                                College, Ghansawangi, Jalna-423709, Maharashtra, India
                                Email-santramascollege@yahoo.co.in; URL-http://www.srcg
                                Contact +91 9403449197
                            </p>
                            <p class="card-text"><small class="text-muted"><a href="www.digital bamu"></a></small></p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card testimonial-card">
                        <img src="{{ asset('Images/blank.webp')}}" class="card-img-top testimonial-image" alt="Pravin Laxmikant Yannawar">
                        <div class="card-body">
                            <p><b>Dr. Badrinath E. Ghonge</b></p>
                            <p class="card-text"> Dr. Badrinath E. Ghonge, M.Sc.Ph.D. (Mathematical Science)
                                Assistant Professor, Department of Mathematics, SantRamdas Arts, Commerce and Science
                                College, Ghansawangi, Jalna-423709, Maharashtra, India
                                Email-santramascollege@yahoo.co.in; URL-http://www.srcg
                                Contact +91 9421201181
                            </p>
                            <p class="card-text"><small class="text-muted"><a href="www.digital bamu"></a></small></p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card testimonial-card">
                        <img src="{{ asset('Images/blank.webp')}}" class="card-img-top testimonial-image" alt="...">
                        <div class="card-body">
                            <p><b>Dr. MangeshSheshrao Kharate</b></p>
                            <p class="card-text">Dr. MangeshSheshrao Kharate, M.Sc.Ph.D.(Botanical Science)
                                Assistant Professor, Department of Botany, ShankarraoPatil Arts, Commerce and Science
                                College, Bhoom, Osmanabad-413504, Maharashtra, India
                                Email-spcollege.in; URL-http://www.spcollege.in/epartment.html
                                Contact +91 94030227159
    
                            <p class="card-text"><small class="text-muted"><a href="www.digital bamu"></a></small></p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card testimonial-card">
                        <img src="{{ asset('Images/blank.webp')}}" class="card-img-top testimonial-image" alt="...">
                        <div class="card-body">
                            <p><b>Dr. Akesh Gautam Jadhav</b></p>
                            <p class="card-text">Dr.Akesh Gautam Jadhav,M.Sc.Ph.D.(Botany) Cytogenetics & Plant
                                Breeding Assistant Professor, PG Department of Botany, Kohinoor Arts, Commerce and Science
                                College, Khultabad, Aurangabad-431101, Maharashtra, India
                                Email-http://www.kacsck.com; URL-http://www.kacsck.com/senoir%20Staff.aspx
                                Contact +91 9766081711
                            </p>
                            <p class="card-text"><small class="text-muted"><a href="www.digital bamu"></a></small></p>
                        </div>
                    </div>
                </div>
            
    
            </div>
        </div>
    
    </div>
    <!-- /Authers End-->
    
    <!-- Sponsers -->
    
    <div>
        <div class="container">
            <div class="owl-carousel logo_active">
                <img class="img-fluid" src="{{ asset('Images/z.jpg')}}" alt="logo">
                <img class="img-fluid" src="{{ asset('Images/v.jpg')}}" alt="logo">
                <img class="img-fluid" src="{{ asset('Images/y.jpg')}}" alt="logo">
                <img class="img-fluid" src="{{ asset('Images/x.jpg')}}" alt="logo">
                
            </div>
        </div>
    </div>
    
    <!-- /Sponsers End -->
    
    
    @endsection
    
    <script src="https://cdn.jsdelivr.net/npm/@floating-ui/core@1.6.0"></script>
    <script src="https://cdn.jsdelivr.net/npm/@floating-ui/dom@1.6.3"></script>
         <script src="https://unpkg.co/gsap@3/dist/gsap.min.js"></script>
         <script src="https://unpkg.com/gsap@3/dist/ScrollTrigger.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
         <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    
    
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    
     <script src="{{ asset('/JS/fortry.js') }}"></script>
    
</body>
</html>
