@section('title',"welcome")
    @extends('layouts.header')
    @section('webcontent')
 <!-- Loading screen -->

    <!-- Slider-->

   
<!----slider-->
<!----slider-->
<div class="container-fluid">
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
<div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="Images/leopad.jpg" class="d-block w-100" alt="Opps! Something went wrong" height="500">
                <div class="carousel-caption d-none d-md-block">
                    <h5>"The best way to predict the future is to create it."</h5>
                    <p>- Peter Drucker</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="Images/butterfly.jpg" class="d-block w-100" alt="Opps! Something went wrong" height="500">
                <div class="carousel-caption d-none d-md-block">
                    <h5>"In every walk with nature, one receives far more than he seeks."</h5>
                    <p>- John Muir</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="Images/plant.jpg" class="d-block w-100" alt="Opps! Something went wrong" height="500">
                <div class="carousel-caption d-none d-md-block">
                    <h5>"The natural world is the greatest source of excitement; the greatest source of visual beauty;
                        the greatest source of intellectual interest."</h5>
                    <p>- David Attenborough</p>
                </div>
            </div>
        </div>
    </div>
</div>

     <!--Slider End -->
    <!---about us-->
    <div class="container-fluid">
    <div class="container about" data-aos="fade-up">
        <div class="abou-title">
            About Us
        </div>
        <div class="row">
            <div class="col-md-6" data-aos="fade-right"data-aos-duration="1000">
                <div class="abou-text">
                    <p>Our are well experience and
                        expert
                        in theirs field of journal publications and provide possible assistance in quality product
                        and managing textual matters to sustainable society. We aim to provide professional self publications on
                        research and review articles; guidance and support to all emerging
                        authors who inspire to write and publish their articles with our worldwide availability on
                        journal webpage .We are engage in the publishing, supplying and exporting of variable
                        textual
                        sources.Our journal have well qualified and strong
                        workforce of editors and reviewers along the ethical writers. Our hardcore editorial team of
                        professionals includes doctors, engineers, scientists, social activities and researchers.</p>
                </div>
                <a href="/AboutJournal" class="abou-bt success" data-aos="fade-up">Read More</a>
            </div>
            <div class="col-md-6" data-aos="fade-left"data-aos-duration="1000">
                <div class="abou-image">
                    <img src="Images/aboutjournal.jpg" class="img-fluid" alt="Abou Us Image"height="100">
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- /About Us End -->
    
    <!-- Indexing -->
    <div class="container-fluid">
    <div class="container index"data-aos="fade-up" class="container-fluid">
    <h2 class="text-center mb-4">Our Indexing</h2>
    <div id="indexCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="d-flex justify-content-around">
                    <img src="Images/a.jpg" alt="index-logo" class="index-logo"height="80" width="100">
                    <img src="Images/c.png" alt="index-logo" class="index-logo"height="80" width="100">
                    <img src="Images/e.png" alt="index-logo" class="index-logo"height="80" width="100">
                    <img src="Images/f.jpg" alt="index-logo" class="index-logo"height="80" width="100">
                    <img src="Images/g.jpg" alt="index-logo" class="index-logo"height="80" width="100">
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-flex justify-content-around">
                    
                    <img src="Images/l.png" alt="index-logo" class="index-logo"height="80" width="100">
                    <img src="Images/h.png" alt="index-logo" class="index-logo"height="80" width="100">
                    <img src="Images/k.png" alt="index-logo" class="index-logo"height="80" width="160">
                    <img src="Images/d.png" alt="index-logo" class="index-logo"height="80" width="100">
                </div>
            </div>
           
            <div class="carousel-item">
                <div class="d-flex justify-content-around">
                    <img src="Images/j.png" alt="index-logo" class="index-logo"height="80" width="100">
                    <img src="Images/i.png" alt="index-logo" class="index-logo"height="80" width="100">
                    <img src="Images/b.jpg" alt="index-logo" class="index-logo"height="80" width="100">
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#indexCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#indexCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
</div>
    <!-- /Indexing End -->
    
     <!-- Leadership -->
     <div class="container-fluid">
     <h2 class="text-center mb-4 le">Leaderships</h2>
    
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
</div>
    <!-- End Leadershiop Section -->
    
  
 
    <!---editorial Borad-->
    
    <div class="container authors-section" data-aos="fade-up">
        <div class="authors-title">
        Editorial Advisory Board
        </div>
        <div id="authorCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="author-card">
                                <img class="author-img" src="Images/blank.webp" alt="Author Image">
                                <div class="author-name">Dr.Dharmpal C. Wagh</div>
                                <div class="author-info">M.Sc.Ph.D,Assistant Professor</div>
                                
                            </div>
                        </div>
                        <!-- Add more author cards here -->
                        <div class="col-md-3">
                            <div class="author-card">
                                <img class="author-img" src="Images/blank.webp" alt="Author Image">
                                <div class="author-name">Dr.Sandeepsing Gaur</div>
                                <div class="author-info">M.Sc.Ph.D,
Professor, Head</div>
                               
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="author-card">
                                <img class="author-img" src="Images/blank.webp" alt="Author Image">
                                <div class="author-name">Dr.Vijay D. Suryawanshi</div>
                                <div class="author-info">M.Sc.Ph.D,
Assistant Professor</div>
                                
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="author-card">
                                <img class="author-img" src="Images/blank.webp" alt="Author Image">
                                <div class="author-name">Dr.Dinesh S. Kharate</div>
                                <div class="author-info"> M.Sc.Ph.D,
Assistant Professor</div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="author-card">
                                <img class="author-img" src="Images/blank.webp" alt="Author Image">
                                <div class="author-name">Dr.Subhash B. Devkar</div>
                                <div class="author-info">M.Sc.Ph.D,
Assistant Professor</div>
                               
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="author-card">
                                <img class="author-img" src="Images/blank.webp" alt="Author Image">
                                <div class="author-name">Dr.Badrinath E. Ghonge</div>
                                <div class="author-info">M.Sc.Ph.D,
Assistant Professor</div>
                                
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="author-card">
                                <img class="author-img" src="Images/blank.webp" alt="Author Image">
                                <div class="author-name">Dr.Mangesh S. Kharate</div>
                                <div class="author-info">M.Sc.Ph.D,
Assistant Professor</div>
                                
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="author-card">
                                <img class="author-img" src="Images/blank.webp" alt="Author Image">
                                <div class="author-name">Dr. Akesh G. Jadhav</div>
                                <div class="author-info">M.Sc.Ph.D,
Assistant Professor</div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                 
            </div>
           
        </div>
        <div class="text-center mt-4 view">
        <a href="/Editorial"class="btn btn-success"data-aos="fade-up">View all</a>
</div>
</div>

   
    <!-- /Authers End-->
<!-- mission vission values -->

 <div class="container mvt-section" data-aos="fade-up">
        <div class="mvt-title">
            Our Mission, Vision, and Values
        </div>
        <div class="mvt-container">
            <div class="mvt-card" data-aos="flip-left">
                <div class="mvt-card-inner">
                    <div class="mvt-card-front">
                        <div class="mvt-card-content">
                            <img src="Images/mission.png" alt="Mission Image"width="90">
                            <h4>Mission</h4>
                            <p>We are committed to...</p>
                        </div>
                    </div>
                    <div class="mvt-card-back">
                        <div class="mvt-card-content">
                            <h4>Mission</h4>
                            <p>We are committed to providing premium quality publications that create values for our peoples. We build diverse team and provide equal growth opportunity for all writers by creating positive environment, societal and economic difference for community.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mvt-card" data-aos="flip-left" data-aos-delay="100">
                <div class="mvt-card-inner">
                    <div class="mvt-card-front">
                        <div class="mvt-card-content">
                            <img src="Images/vission.png" alt="Vision Image"width="90">
                            <h4>Vision</h4>
                            <p>To maintained ...</p>
                        </div>
                    </div>
                    <div class="mvt-card-back">
                        <div class="mvt-card-content">
                            <h4>Vision</h4>
                            <p>To maintained sustainable writing growth through continuous innovation, market development and public relation while creating long-term value for all writers.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mvt-card" data-aos="flip-left" data-aos-delay="200">
                <div class="mvt-card-inner">
                    <div class="mvt-card-front">
                        <div class="mvt-card-content">
                            <img src="Images/values.png" alt="Target Image"width="90">
                            <h4>Values</h4>
                            <p>We believed in...</p>
                        </div>
                    </div>
                    <div class="mvt-card-back">
                        <div class="mvt-card-content">
                            <h4>Values</h4>
                            <p>We believed in open communication and understand public needs, offers new publications exceed their expectation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <!-- Sponsers -->
    <div class="container-fluid">
    <div class="container sponsors spo"data-aos="fade-up">
        <h2 class="text-center mb-4">Sponsors</h2>
        <div id="sponsorCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-flex justify-content-around">
                    <img src="Images\z.jpg" alt="sponsor-logo" class="sponsor-logo"height="70" width="100">
                        <img src="Images\y.jpg" alt="sponsor-logo" class="sponsor-logo"height="70" width="100">
                        <img src="Images\x.jpg" alt="sponsor-logo" class="sponsor-logo"height="70" width="160">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex justify-content-around">
                        <img src="Images\v.jpg" alt="sponsor-logo" class="sponsor-logo"height="70" width="100">
                        <img src="Images\kdp.png" alt="sponsor-logo" class="sponsor-logo"height="70" width="100">
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#sponsorCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#sponsorCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>
 
    <!-- /Sponsers End -->
    @endsection
