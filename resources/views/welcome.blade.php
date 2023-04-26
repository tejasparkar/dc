<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="shortcut icon" href="https://dcdesigns.in/images/fevi.jpg">

    <!-- Title  -->
    <title>DC DESIGNs</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Teko:300,400,500,600,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">

    <!-- Plugins -->
    <link rel="stylesheet" href="css/plugins.css" />

    <!-- Core Style Css -->
    <link rel="stylesheet" href="css/style.css" />

</head>

<body>


    <!-- ==================== Start Loading ==================== -->

    <div id="preloader">
        <div class="loading-text">Welcome</div>
    </div>

    <!-- ==================== End Loading ==================== -->


    <!-- ==================== Start progress-scroll-button ==================== -->

    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- ==================== End progress-scroll-button ==================== -->


    <!-- ==================== Start cursor ==================== -->

    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>

    <!-- ==================== End cursor ==================== -->


    <!-- ==================== Start Navbar ==================== -->

    <nav class="navbar change navbar-expand-lg">
        <div class="container">

            <!-- Logo -->
            <a class="logo" href="#">
                <img class="logo" src="img/logo-light.png" alt="logo">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"><i class="fas fa-bars"></i></span>
            </button>

            <!-- navbar links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="index-2.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="portfolio-mas2.html">Portfolio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">Blog</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="blog.html">Blogs</a>
                            <a class="dropdown-item" href="blog-details.html">Post Details</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                </ul>
                <div class="social-icon">
                    <a href="#0"><i class="fab fa-facebook-f"></i></a>
                    <a href="#0"><i class="fab fa-twitter"></i></a>
                    <a href="#0"><i class="fab fa-behance"></i></a>
                </div>
                <div class="search">
                    <span class="icon pe-7s-search cursor-pointer"></span>
                    <div class="search-form text-center custom-font">
                        <form>
                            <input type="text" name="search" placeholder="Search">
                        </form>
                        <span class="close pe-7s-close cursor-pointer"></span>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- ==================== End Navbar ==================== -->

    

    <!-- ==================== Start Slider ==================== -->
    
    <header class="slid-half">
        <div id="js-cta-slider" class="cta__slider-wrapper nofull swiper-container">
            <div class="swiper-wrapper cta__slider">
                <!-- SLIDER ITEM -->
                <div class="cta__slider-item swiper-slide">
                    <div class="media-wrapper slide-inner valign">
                        <div class="bg-img" data-background="{{$data->carouselImage1 ?? 'img/slid/1.jpg'}} "  data-overlay-dark="1"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-1">
                                    <div class="caption">
                                        <span class="top-corn"></span>
                                        <span class="bottom-corn"></span>
                                        <div class="custom-font">
                                            <h5 class="thin custom-font white" >{{$data->carousellevel1Heading2 ?? ''}}</h5>
                                            <h1 data-splitting><a href="#0">
                                                    {{$data->carousellevel1Heading1 ?? ''}}
                                                </a></h1>
                                        </div>
                                        <p></p>
                                        <a href="#0" class="btn-curve btn-color mt-30">
                                            <span>Discover Work</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- SLIDER ITEM -->

                <!-- SLIDER ITEM -->
                <div class="cta__slider-item swiper-slide">
                    <div class="media-wrapper slide-inner valign">
                        <div class="bg-img" data-background="{{$data->carouselImage2 ?? 'img/slid/2.jpg'}} " data-overlay-dark="1"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-1">
                                    <div class="caption">
                                        <span class="top-corn"></span>
                                        <span class="bottom-corn"></span>
                                        <div class="custom-font">
                                            <h5 class="thin custom-font white">{{$data->carousellevel2Heading1 ?? '' }}</h5>
                                            <h1 data-splitting><a href="#0">{{$data->carousellevel2Heading1 ?? ''}}</a>
                                            </h1>
                                        </div>
                                        <p>{{$data->carouselparagraph2 ??''}}</p>
                                        <a href="#0" class="btn-curve btn-color mt-30">
                                            <span>Discover Work</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- SLIDER ITEM -->

                <!-- SLIDER ITEM -->
                <div class="cta__slider-item swiper-slide">
                    <div class="media-wrapper slide-inner valign">
                        <div class="bg-img" data-background="{{$data->carouselImage3 ?? 'img/slid/3.jpg'}}"data-overlay-dark="1"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-1">
                                    <div class="caption">
                                        <span class="top-corn"></span>
                                        <span class="bottom-corn"></span>
                                        <div class="custom-font">
                                            <h5 class="thin custom-font white">{{$data->carousellevelHeading2 ?? ''}}</h5>
                                            <h1 data-splitting><a href="#0">
                                                    {{$data->carousellevel1Heading3 ?? ''}}
                                                </a>
                                            </h1>
                                        </div>
                                        <p>{{$data->carouselparagraph3 ?? '' }}</p>
                                        <a href="#0" class="btn-curve btn-color mt-30">
                                            <span>Discover Work</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- SLIDER ITEM -->
            </div>
            <div class="cta__slider-arrows">
                <i id="js-cta-slider-next" class="cta__slider-arrow cta__slider-arrow--next">
                    <i class="fas fa-chevron-up"></i>
                </i>
                <i id="js-cta-slider-previous" class="cta__slider-arrow cta__slider-arrow--previous">
                    <i class="fas fa-chevron-down"></i>
                </i>
            </div>
        </div>
        
    </header>

    <!-- ==================== End Slider ==================== -->



    <!-- ==================== Start Services ==================== -->
    
    
        
    <section class="services">
        <div class="feat-top">
            <div class="notfull bg-gray wow"></div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="item-sm wow fadeInUp" data-wow-delay="1s">
                            <div class="box">
                                <h6 class="mb-20"><span class="custom-font numb">01</span> Architecture</h6>
                                <p>Cras mollis turpis a ipsum ultes, nec cond imentum ipsum consequat.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="item-sm wow fadeInUp" data-wow-delay="1.1s">
                            <div class="box">
                                <h6 class="mb-20"><span class="custom-font numb">02</span> Interior Design</h6>
                                <p>Cras mollis turpis a ipsum ultes, nec cond imentum ipsum consequat.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="item-sm wow fadeInUp" data-wow-delay="1.2s">
                            <div class="box">
                                <h6 class="mb-20"><span class="custom-font numb">03</span> 3D Modeling</h6>
                                <p>Cras mollis turpis a ipsum ultes, nec cond imentum ipsum consequat.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End Services ==================== -->



    <!-- ==================== Start about ==================== -->

    <section class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 valign">
                    <div class="exp-content nopat wow fadeInUp" data-wow-delay=".3s">
                        <h6 class="sub-title">About Us</h6>
                        <h2 class="mb-20 playfont">{{$data->aboutusHeading ?? "Best Designers & Architects"}}</h2>
                        <p>{{$data->aboutusParagraph ?? "We are DC Designs, specialists in creating aesthetic workspaces attuned to our CLIENT’S requirements. We successfully blend economy with design and innovation with style. Always overwhelming the creative and technical aspirations of our CLIENTS. Today, DC Designs is widely recognised as a Design Build Firm with incessant creativity, discerning taste and panache for meticulous execution. Merging the organic with the geometric, the artistic with the practical and the outré with the quotidian - DC Designs stamps each of its creations with an unparalleled distinctiveness and style."}}</p>
                        <ul>
                            <li>Architecture</li>
                            <li>Interior Design</li>
                            <li>Furniture</li>
                        </ul>
                        <a href="#0" class="btn-curve btn-color mt-30">
                            <span>Read More</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ab-exp">
                        <div class="row">
                            <div class="col-md-4 mb-20">
                                <div class="pattern bg-img bg-repeat" data-background="img/line-pattern.png">
                                </div>
                            </div>
                            <div class="col-md-8 wow fadeInUp" data-wow-delay=".3s">
                                <div class="img mb-20 wow imago">
                                    <img src="{{$data->aboutusImage1 ?? 'img/ab1.jpg'}} " alt="">
                                </div>
                            </div>
                            <div class="col-md-7 wow fadeInUp" data-wow-delay=".3s">
                                <div class="img wow imago">
                                    <img src="{{$data->aboutusImage2 ?? 'img/ab2.jpg'}}" alt="">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="years-exp">
                                    <div class="exp-text">
                                        <h2 class="custom-font">21</h2>
                                        <h6>Years Of Experience</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End about ==================== -->
   


    <!-- ==================== Start works ==================== -->

    <section class="portfolio full-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 cluom current" data-tab="tab-1">
                    <div class="info">
                        <h6 class="custom-font">Interior</h6>
                        <h5>Residential</h5>
                    </div>
                    <div class="more">
                        <a href="#0">View Projects <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 cluom" data-tab="tab-2">
                    <div class="info">
                        <h6 class="custom-font">Interior</h6>
                        <h5>Corporate</h5>
                    </div>
                    <div class="more">
                        <a href="#0">View Projects <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 cluom" data-tab="tab-3">
                    <div class="info">
                        <h6 class="custom-font">Interior</h6>
                        <h5>Office</h5>
                    </div>
                    <div class="more">
                        <a href="#0">View Projects <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 cluom" data-tab="tab-4">
                    <div class="info">
                        <h6 class="custom-font">Interior</h6>
                        <h5>Retail</h5>
                    </div>
                    <div class="more">
                        <a href="#0">View Projects <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="glry-img">
            <div id="tab-1" class="bg-img tab-img current" data-background="{{$data->projectImage1 ?? 'img/portfolio/full/01.jpg'}}"
                data-overlay-dark="2"></div>
            <div id="tab-2" class="bg-img tab-img" data-background="{{$data->projectImage2 ?? 'img/portfolio/full/02.jpg'}}" data-overlay-dark="2">
            </div>
            <div id="tab-3" class="bg-img tab-img" data-background="{{$data->projectImage3 ?? 'img/portfolio/full/03.jpg'}}" data-overlay-dark="2">
            </div>
            <div id="tab-4" class="bg-img tab-img" data-background="{{$data->projectImage4 ?? 'img/portfolio/full/04.jpg'}}" data-overlay-dark="2">
            </div>
        </div>
    </section>

    <!-- ==================== End works ==================== -->
   
    <!-- ==================== Start process ==================== -->

    <section class="process section-padding bg-img bg-repeat" data-background="img/dots.png">
        <div class="container">
            <div class="section-head text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8 col-sm-10">
                        <h6 class="custom-font wow fadeInDown" data-wow-delay=".3s">How We Do It</h6>
                        <h4 class="playfont wow flipInX" data-wow-delay=".5s">Work Process</h4>
                    </div>
                </div>
            </div>
            <div class=" row">
                            <div class="col-lg-3 col-md-6 coulmn wow fadeInUp" data-wow-delay=".3s">
                                <div class="item">
                                    <div class="bg-img" data-background="img/process/01.jpg">
                                        <h3 class="numb custom-font">01</h3>
                                    </div>
                                    <div class="cont">
                                        <h6 class="mb-10">Concept</h6>
                                        <p>Nulla metus metus ullamcorper vel tincidunt sed euismod.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 coulmn wow fadeInUp" data-wow-delay=".5s">
                                <div class="item">
                                    <div class="bg-img" data-background="img/process/02.jpg">
                                        <h3 class="numb custom-font">02</h3>
                                    </div>
                                    <div class="cont">
                                        <h6 class="mb-10">Design Process</h6>
                                        <p>Nulla metus metus ullamcorper vel tincidunt sed euismod.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 coulmn wow fadeInUp" data-wow-delay=".4s">
                                <div class="item">
                                    <div class="bg-img" data-background="img/process/03.jpg">
                                        <h3 class="numb custom-font">03</h3>
                                    </div>
                                    <div class="cont">
                                        <h6 class="mb-10">Supervision</h6>
                                        <p>Nulla metus metus ullamcorper vel tincidunt sed euismod.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                <div class="item">
                                    <div class="bg-img" data-background="img/process/04.jpg">
                                        <h3 class="numb custom-font">04</h3>
                                    </div>
                                    <div class="cont">
                                        <h6 class="mb-10">Budget Planning</h6>
                                        <p>Nulla metus metus ullamcorper vel tincidunt sed euismod.</p>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
    </section>

    <!-- ==================== End process ==================== -->



    <!-- ==================== Start Team ==================== -->

    <section class="team section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="tit">
                        <h6 class="custom-font mb-10 wow fadeInDown" data-wow-delay=".3s">Some thoughts from Us</h6>
                        <h3 class="wow flipInX" data-wow-delay=".3s">{{$data->employeeHeading ?? 'Our Team'}}</h3>
                        <p class="wow fadeInUp" data-wow-delay=".3s">{{$data->employeeParagraph ?? 'Some dummy text about our team'}}</p>
                        <div class="navs mt-30 wow fadeInUp" data-wow-delay=".3s">
                            <span class="prev">
                                <i class="fas fa-long-arrow-alt-left"></i>
                            </span>
                            <span class="next">
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="team-container">
                        <div class="item wow fadeInUp" data-wow-delay=".3s">
                            <div class="img wow imago">
                                <img src="{{$data->emp1Image ?? 'img/team/1.jpg'}}" alt="">
                                <div class="social">
                                    <a href="{{$data->emp1fbUrl ?? '#'}}"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#0"><i class="fab fa-twitter"></i></a>
                                  
                                    <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="info">
                                <h5>{{$data->emp1Name ?? 'Tejas'}}</h5>
                                <span>{{$data->emp1Designation ?? 'Developer'}} </span>
                            </div>
                        </div>
                        <div class="item wow fadeInUp" data-wow-delay=".3s">
                            <div class="img wow imago">
                                <img src="{{$data->emp2Image ?? 'img/team/2.jpg'}}" alt="">
                                <div class="social">
                                    <a href="{{$data->emp2fbUrl ?? '#'}}"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#0"><i class="fab fa-twitter"></i></a>
                                    
                                    <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="info">
                                <h5>{{$data->emp2Name ?? 'Tejas'}}</h5>
                                <span>{{$data->emp2Designation ?? 'Developer'}} </span>
                            </div>
                        </div>
                        <div class="item wow fadeInUp" data-wow-delay=".3s">
                            <div class="img wow imago">
                                <img src="{{$data->emp3Image ?? 'img/team/3.jpg'}}" alt="">
                                <div class="social">
                                    <a href="{{$data->emp3fbUrl ?? '#'}}"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#0"><i class="fab fa-twitter"></i></a>
                                   
                                    <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="info">
                                <h5>{{$data->emp3Name ?? 'Tejas'}}</h5>
                                <span>{{$data->emp3Designation ?? 'Developer'}} </span>
                            </div>
                        </div>
                        <div class="item wow fadeInUp" data-wow-delay=".3s">
                            <div class="img wow imago">
                                <img src="{{$data->emp4Image ?? 'img/team/4.jpg'}}" alt="">
                                <div class="social">
                                    <a href="{{$data->emp4fbUrl ?? '#'}}"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#0"><i class="fab fa-twitter"></i></a>
                                   
                                    <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="info">
                                <h5>{{$data->emp4Name ?? 'Tejas'}}</h5>
                                <span>{{$data->emp4Designation ?? 'Developer'}} </span>
                            </div>
                        </div>
                        <div class="item wow fadeInUp" data-wow-delay=".3s">
                            <div class="img wow imago">
                                <img src="{{$data->emp5Image ?? 'img/team/5.jpg'}}" alt="">
                                <div class="social">
                                    <a href="{{$data->emp5fbUrl ?? '#'}}"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#0"><i class="fab fa-twitter"></i></a>
                                  
                                    <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="info">
                                <h5>{{$data->emp5Name ?? 'Tejas'}}</h5>
                                <span>{{$data->emp5Designation ?? 'Developer'}} </span>
                            </div>
                        </div>
                        <div class="item wow fadeInUp" data-wow-delay=".3s">
                            <div class="img wow imago">
                                <img src="{{$data->emp6Image ?? 'img/team/6.jpg'}}" alt="">
                                <div class="social">
                                    <a href=" {{$data->emp1fbUrl ?? '#'}}"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#0"><i class="fab fa-twitter"></i></a>
                                    <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="info">
                                <h5>{{$data->emp6Name ?? 'Tejas'}}</h5>
                                <span>{{$data->emp6Designation ?? 'Developer'}} </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dots-half bg-img bg-repeat" data-background="img/dots.png"></div>
    </section>

    <!-- ==================== End Team ==================== -->



    <!-- ==================== Start Testimonials ==================== -->

    <section class="testimonials grid section-padding bg-img parallaxie" data-background="img/001.jpg"
        data-overlay-dark="9">
        <div class="container mb-50">
            <div class="section-head text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8 col-sm-10">
                        <h6 class="custom-font wow fadeInDown" data-wow-delay=".3s">Testimonials</h6>
                        <h4 class="playfont wow flipInX" data-wow-delay=".5s">What People Says?</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="testim wow fadeInUp" data-wow-delay=".3s">
                        <div class="item">
                            <span class="quote-icon"><img src="img/clients/quote.svg" alt=""></span>
                            <div class="cont">
                                <p class="playfont">{{$data->testimonialContent1 ?? '"I just love their design for all stunning details. You must know
                                    what can you do for a project before taking it, but with Archo, the sky is the
                                    limit."'}}
                                </p>
                            </div>
                            <div class="info">
                                <div class="author">
                                <img src="{{$data->testimonialImage1 ?? 'img/clients/1.jpg'}}" alt="">
                                </div>
                                <h6>{{$data->testimonialName1 ?? 'Tejas'}}<span>Dcdesigns Customer</span> </h6>
                            </div>
                        </div>
                        <div class="item">
                            <span class="quote-icon"><img src="img/clients/quote.svg" alt=""></span>
                            <div class="cont">
                                <p class="playfont">{{$data->testimonialContent2 ?? '"I just love their design for all stunning details. You must know
                                    what can you do for a project before taking it, but with Archo, the sky is the
                                    limit."'}}
                                </p>
                            </div>
                            <div class="info">
                                <div class="author">
                                    <img src="{{$data->testimonialImage2 ?? 'img/clients/2.jpg'}}" alt="">
                                </div>
                                <h6>{{$data->testimonialName2 ?? 'Tejas'}} <span>Dcdesigns Customer</span> </h6>
                            </div>
                        </div>
                        <div class="item">
                            <span class="quote-icon"><img src="img/clients/quote.svg" alt=""></span>
                            <div class="cont">
                                <p class="playfont">
                                {{$data->testimonialContent3 ?? '"I just love their design for all stunning details. You must know
                                    what can you do for a project before taking it, but with Archo, the sky is the
                                    limit."'}}
                                </p>
                            </div>
                            <div class="info">
                                <div class="author">
                                <img src="{{$data->testimonialImage3 ?? 'img/clients/3.jpg'}}" alt="">
                                </div>
                                <h6>{{$data->testimonialName3 ?? 'Tejas'}}<span>Dcdesigns Customer</span> </h6>
                            </div>
                        </div>
                        <div class="item">
                            <span class="quote-icon"><img src="img/clients/quote.svg" alt=""></span>
                            <div class="cont">
                                <p class="playfont">{{$data->testimonialContent4 ?? '"I just love their design for all stunning details. You must know
                                    what can you do for a project before taking it, but with Archo, the sky is the
                                    limit."'}}
                                </p>
                            </div>
                            <div class="info">
                                <div class="author">
                                <img src="{{$data->testimonialImage4 ?? 'img/clients/4.jpg'}}" alt="">
                                </div>
                                <h6>{{$data->testimonialName4 ?? 'Tejas'}} <span>Dcdesigns Customer</span> </h6>
                            </div>
                        </div>
                    </div>
                    <div class="navs mt-30 wow fadeInUp" data-wow-delay=".3s">
                        <span class="prev">
                            <i class="fas fa-long-arrow-alt-left"></i>
                        </span>
                        <span class="next">
                            <i class="fas fa-long-arrow-alt-right"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End Testimonials ==================== -->



    <!-- ==================== Start brands ==================== -->

    <div class="brands bg-gray">
        <div class="container box-top wow fadeInUp" data-wow-delay=".3s">
            <div class="row">
                <div class="col-lg col-md-3 col-sm-6">
                    <div class="item">
                        <div class="img">
                            <img src="img/clients/brands/01.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg col-md-3 col-sm-6">
                    <div class="item">
                        <div class="img">
                            <img src="img/clients/brands/02.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg col-md-3 col-sm-6">
                    <div class="item">
                        <div class="img">
                            <img src="img/clients/brands/01.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg col-md-3 col-sm-6">
                    <div class="item">
                        <div class="img">
                            <img src="img/clients/brands/02.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg col-md-3 col-sm-6">
                    <div class="item">
                        <div class="img">
                            <img src="img/clients/brands/01.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg col-md-3 col-sm-6">
                    <div class="item">
                        <div class="img">
                            <img src="img/clients/brands/02.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==================== End brands ==================== -->



    <!-- ==================== Start Blog ==================== 

    <section class="blog-grid center bg-gray section-padding">
        <div class="container">

            <div class="section-head text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8 col-sm-10">
                        <h6 class="custom-font wow fadeInDown" data-wow-delay=".3s">Latest News</h6>
                        <h4 class="playfont wow flipInX" data-wow-delay=".5s">Our Blogs</h4>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-md-6">
                    <div class="item wow fadeInUp md-mb50" data-wow-delay=".3s">
                        <div class="post-img">
                            <div class="img">
                                <img src="img/blog/1.jpg" alt="">
                            </div>
                        </div>
                        <div class="cont">
                            <div class="info">
                                <a href="#0">Alex Smith</a>
                                <a href="#0">Aug 06 2019</a>
                            </div>

                            <h5 class="playfont"><a href="#0">In Good Taste: Mark Finlay Architects and Interiors</a>
                            </h5>

                            <a href="blog-details.html" class="more">
                                <span class="custom-font">Read More</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="item wow fadeInUp md-mb50" data-wow-delay=".1s">
                        <div class="post-img">
                            <div class="img">
                                <img src="img/blog/2.jpg" alt="">
                            </div>
                        </div>
                        <div class="cont">
                            <div class="info">
                                <a href="#0">Alex Smith</a>
                                <a href="#0">Aug 06 2019</a>
                            </div>

                            <h5 class="playfont"><a href="#0">Five Things You Should Know About Modern Furniture.</a>
                            </h5>

                            <a href="blog-details.html" class="more">
                                <span class="custom-font">Read More</span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    ==================== End Blog ==================== -->



    <!-- ==================== Start Footer ==================== -->

    <footer class="main-footer dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="item abot">
                        <div class="logo-footer mb-20">
                            <a href="#0" class="logo">
                                <img src="{{$data->logo ?? 'img/logo-light.png'}}" alt="">
                            </a>
                        </div>
                        <p>{{$data->tagLine ?? 'Our team takes over everything, from an idea and concept development to realization.'}}</p>
                        <div class="social-icon">
                            <a href="#0"><i class="fab fa-facebook-f"></i></a>
                            <a href="#0"><i class="fab fa-twitter"></i></a>
                            <a href="#0"><i class="fab fa-behance"></i></a>
                            <a href="#0"><i class="fab fa-pinterest-p"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1">
                    <div class="item usful-links">
                        <div class="fothead">
                            <h6>Useful Links</h6>
                        </div>
                        <ul>
                            <li><i class="fas fa-chevron-right"></i> <a href="#0">Interior Design</a></li>
                            <li><i class="fas fa-chevron-right"></i> <a href="#0">Design Agency</a></li>
                            <li><i class="fas fa-chevron-right"></i> <a href="#0">Mattress Shop</a></li>
                            <li><i class="fas fa-chevron-right"></i> <a href="#0">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="item fotcont">
                        <div class="fothead">
                            <h6>Call</h6>
                        </div>
                        <p>{{$data->contactNumber ?? '999988822'}}</p>
                    
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="item fotcont">
                        <div class="fothead">
                            <h6>Write</h6>
                        </div>
                        <p>{{$data->emailAddress ?? 'tparkar0@gmail.com'}}</p>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="item fotcont">
                        <div class="fothead">
                            <h6>Visit</h6>
                        </div>
                        <p>{{$data->address ?? 'Vasai(e)'}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="sub-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="text-left">
                            <p>© 2023, DCDESIGNS Made with passion by <a
                                    href="">Tejas Parkar</a>.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="text-right">
                            <p>All right reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- ==================== End Footer ==================== -->






    <!-- jQuery -->
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.min.js"></script>

    <!-- plugins -->
    <script src="js/plugins.js"></script>

    <!-- custom scripts -->
    <script src="js/scripts.js"></script>

</body>

</html>