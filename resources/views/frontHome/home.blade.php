@extends($frontTheme)

@section('content')

    <!-- banner section -->
    <section class="w3l-banner py-5" id="home">
        <div class="container py-md-5 py-4">
            <div class="row align-items-center pt-4">
                <div class="col-md-6 banner-left pe-xl-5">
                    <h4>Hi, I'm Mary Ateer</h4>
                    <h3 class="mb-3 mt-1">Developer</h3>
                    <p class="banner-sub me-md-5">I love to work in UI/UX designing.
                        I always try my best to make good UI with the best UX.
                    </p>
                    <div class="d-flex align-items-center buttons-banner mt-sm-5 mt-4">
                        <a href="{{ route('about') }}" class="btn btn-style me-2">Hire Me</a>
                    </div>
                </div>
                <div class="col-md-6">
                </div>
            </div>
        </div>
        <!-- animations icons -->
        <div class="icon-effects-w3-1 text-right">
            <img src="{{asset('frontTheme/images/icon2.png')}}" alt="" class="img-fluid">
        </div>
        <div class="icon-effects-w3-2 text-right">
            <img src="{{asset('frontTheme/images/icon3.png')}}" alt="" class="img-fluid">
        </div>
        <div class="icon-effects-w3-3 text-right">
            <img src="{{asset('frontTheme/images/icon1.png')}}" alt="" class="img-fluid">
        </div>
        <div class="icon-effects-w3-4 text-right">
            <img src="{{asset('frontTheme/images/icon6.png')}}" alt="" class="img-fluid">
        </div>
        <!-- //animations icons -->
    </section>
    <!-- //banner section -->

    <!-- logo partners -->
    <section class="w3l-clients pt-5 pb-4" id="clients">
        <div class="container">
            <div class="company-logos text-center">
                <div class="row mx-auto justify-content-center">
                    <div class="col-md-2 col-sm-4 col-6 ">
                        <img src="{{asset('frontTheme/images/logo1.png')}}" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-2 col-sm-4 col-6">
                        <img src="{{asset('frontTheme/images/logo2.png')}}" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-2 col-sm-4 col-6 mt-sm-0 mt-3">
                        <img src="{{asset('frontTheme/images/logo3.png')}}" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-2 col-sm-4 col-6 mt-md-0 mt-3">
                        <img src="{{asset('frontTheme/images/logo4.png')}}" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-2 col-sm-4 col-6 mt-md-0 mt-3">
                        <img src="{{asset('frontTheme/images/logo5.png')}}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //logo partners -->

    <!-- grids section -->
    <section class="w3l-bottom-grids-6 pt-sm-5 pb-5" id="features">
        <div class="container pt-lg-4">
            <div class="grids-area-hny main-cont-wthree-fea row">
                <div class="col-md-3 col-sm-4 ps-xl-5">
                    <h4 class="ab-exper-count mb-sm-4 ps-lg-4">22</h4>
                    <p class="ab-content ps-lg-4">years of experience working</p>
                </div>
                <div class="col-xl-8 col-md-9 col-sm-8 offset-xl-1 ps-xl-0 pe-xl-5 mt-sm-0 mt-4">
                    <h3 class="title-style mb-sm-5 mb-4">I'm a designer & developer with a passion for web design</h3>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 grids-feature">
                            <div class="area-box active">
                                <div class="icon-style">
                                    <i class="fas fa-lightbulb"></i>
                                </div>
                                <h4><a href="#feature" class="title-head">Creative Design</a></h4>
                                <a href="about.html" class="btn more p-0">Explore More<i
                                        class="fas fa-long-arrow-alt-right ms-1"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 grids-feature mt-md-0 mt-4">
                            <div class="area-box">
                                <div class="icon-style">
                                    <i class="fas fa-laptop-code"></i>
                                </div>
                                <h4><a href="#feature" class="title-head">Web Design</a></h4>
                                <a href="about.html" class="btn more p-0">Explore More<i
                                        class="fas fa-long-arrow-alt-right ms-1"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 grids-feature mt-lg-0 mt-4">
                            <div class="area-box">
                                <div class="icon-style">
                                    <i class="fas fa-layer-group"></i>
                                </div>
                                <h4><a href="#feature" class="title-head">Brand Identity</a></h4>
                                <a href="about.html" class="btn more p-0">Explore More<i
                                        class="fas fa-long-arrow-alt-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //grids section -->

    <!-- about section -->
    <section class="w3l-aboutblock1 pt-lg-5 pt-2 pb-5" id="about">
        <div class="container py-md-5 py-4">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="position-relative">
                        <img src="{{asset('frontTheme')}}/images/about.jpg" alt="" class="radius-image img-fluid">
                    </div>
                </div>
                <div class="col-lg-8 ps-lg-5 mt-lg-0 mt-5">
                    <h5 class="title-small mb-1">My Intro</h5>
                    <h3 class="title-style">About Me</h3>
                    <p class="mt-3">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
                        ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet consectetur
                        adipisicing
                        elit. Non quae, fugiat consequatur voluptatem nihil ad. Lorem ipsum dolor sit amet.</p>
                    <div class="my-info mt-md-5 mt-4">
                        <ul class="single-info">
                            <li class="name-style">Name</li>
                            <li>:</li>
                            <li>
                                <p>Mr.jaydeep Pathar</p>
                            </li>
                        </ul>
                        <ul class="single-info">
                            <li class="name-style">Age</li>
                            <li>:</li>
                            <li>
                                <p>20 Years</p>
                            </li>
                        </ul>
                        <ul class="single-info">
                            <li class="name-style">From</li>
                            <li>:</li>
                            <li>
                                <p>Gujrat, Rajkot</p>
                            </li>
                        </ul>
                        <ul class="single-info">
                            <li class="name-style">Email</li>
                            <li>:</li>
                            <li>
                                <p><a href="mailto:maryateer@mail.com">jaydeeppathar000@mail.com</a></p>
                            </li>
                        </ul>
                    </div>
                    <a href="#download" class="btn btn-style mt-5">Download CV</a>
                </div>
            </div>
        </div>
    </section>
    <!-- //about section -->

    <!-- qualification section -->
    <section class="w3l-timeline-1 py-5">
        <div class="container py-lg-5 py-4">
            <div class="title-heading-w3 text-center mb-sm-5 mb-4">
                <h5 class="title-small">Resume</h5>
                <h3 class="title-style">Awesome Journey</h3>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <h5 class="sub-title-timeline"><i class="fas fa-graduation-cap"></i> Education</h5>
                    <div class="timeline">
                        <div class="column">
                            <div class="title">
                                <h2>Bachelors's in Computer Application</h2>
                            </div>
                            <div class="description">
                                <p>Saurashtra University</p>
                                <h6><i class="fas fa-calendar-alt"></i>2019 - 2021</h6>
                            </div>
                        </div>
                        <div class="column">
                            <div class="title">
                                <h2>HSC</h2>
                            </div>
                            <div class="description">
                                <p>Shree Swaminarayn Gurukul-Rajkot</p>
                                <h6><i class="fas fa-calendar-alt"></i> 2018 - 2019</h6>
                            </div>
                        </div>
                        <div class="column">
                            <div class="title">
                                <h2>SSC</h2>
                            </div>
                            <div class="description">
                                <p>Shree Swaminarayn Gurukul-Rajkot</p>
                                <h6><i class="fas fa-calendar-alt"></i> 2016 - 2017</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-lg-0 mt-4">
                    <h5 class="sub-title-timeline"><i class="fas fa-briefcase"></i> Experience</h5>
                    <div class="timeline">
                        <div class="column">
                            <div class="title">
                                <h2>Sr. Font End Developer</h2>
                            </div>
                            <div class="description">
                                <p>W3Layouts Pvt Lmt.</p>
                                <h6><i class="fas fa-calendar-alt"></i> 2020 - Current</h6>
                            </div>
                        </div>
                        <div class="column">
                            <div class="title">
                                <h2>Jr. Font End Developer</h2>
                            </div>
                            <div class="description">
                                <p>W3Layouts</p>
                                <h6><i class="fas fa-calendar-alt"></i> 2018 - 2020</h6>
                            </div>
                        </div>
                        <div class="column">
                            <div class="title">
                                <h2>HTML Developer</h2>
                            </div>
                            <div class="description">
                                <p>Agile info</p>
                                <h6><i class="fas fa-calendar-alt"></i> 2017 - 2018</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //qualification section -->

    <!-- skills section -->
    <section class="w3l-progress py-5" id="progress">
        <div class="container py-md-5 py-4">
            <div class="title-heading-w3 text-center mb-sm-5 mb-4">
                <h5 class="title-small mb-1">My Skills</h5>
                <h3 class="title-style">My Expertise Area</h3>
            </div>
            <div class="row py-lg-4">
                <div class="col-lg-6 pe-lg-5">
                    <div class="progress-info info1">
                        <h6 class="progress-tittle">Web Design <span class="">70%</span></h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped gradient-1" role="progressbar"
                                style="width: 80%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <div class="progress-info info2">
                        <h6 class="progress-tittle">HTML/CSS <span class="">80%</span>
                        </h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped gradient-2" role="progressbar"
                                style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <div class="progress-info info3">
                        <h6 class="progress-tittle">JavaScript <span class="">60%</span></h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped gradient-3" role="progressbar"
                                style="width: 60%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <div class="progress-info info4 mb-0">
                        <h6 class="progress-tittle">Laravel <span class="">80%</span></h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped gradient-4" role="progressbar"
                                style="width: 85%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5 mt-lg-0 mt-5">
{{--                     <div class="progress-info info1">
                        <h6 class="progress-tittle">Angular Js <span class="">80%</span></h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped gradient-1" role="progressbar"
                                style="width: 80%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div> --}}
                    <div class="progress-info info2">
                        <h6 class="progress-tittle">Bootstrap <span class="">90%</span>
                        </h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped gradient-2" role="progressbar"
                                style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <div class="progress-info info3">
                        <h6 class="progress-tittle">Graphic Design <span class="">50%</span></h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped gradient-3" role="progressbar"
                                style="width: 60%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    {{-- <div class="progress-info info4 mb-0">
                        <h6 class="progress-tittle">UI/UX Design <span class="">85%</span></h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped gradient-4" role="progressbar"
                                style="width: 85%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- //skills section -->

    <!-- projects section -->
    <section class="w3l-gallery pb-5" id="gallery">
        <div class="container py-md-5 py-4">
            <div class="title-heading-w3 text-center mb-sm-5 mb-4">
                <h5 class="title-small mb-1">Portfolio</h5>
                <h3 class="title-style">Some of my most recent projects</h3>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 item">
                    <a href="{{asset('frontTheme/images/g1.jpg')}}" data-lightbox="example-set" data-title="Project 1"
                        class="zoom d-block">
                        <img class="card-img-bottom d-block" src="{{asset('frontTheme/images/g1.jpg')}}" alt="Card image cap">
                        <span class="overlay__hover"></span>
                        <span class="hover-content">
                            <span class="title">Project 1</span>
                            <span class="content">Quisque ut lectus, eros et, sed commodo risus.</span>
                        </span>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 item mt-md-0 mt-4">
                    <a href="{{asset('frontTheme')}}/images/g2.jpg" data-lightbox="example-set" data-title="Project 2"
                        class="zoom d-block">
                        <img class="card-img-bottom d-block" src="{{asset('frontTheme/images/g2.jpg')}}" alt="Card image cap">
                        <span class="overlay__hover"></span>
                        <span class="hover-content">
                            <span class="title">Project 2</span>
                            <span class="content">Quisque ut lectus, eros et, sed commodo risus.</span>
                        </span>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 item mt-lg-0 mt-4">
                    <a href="{{asset('frontTheme')}}/images/g3.jpg" data-lightbox="example-set" data-title="Project 3"
                        class="zoom d-block">
                        <img class="card-img-bottom d-block" src="{{asset('frontTheme/images/g3.jpg')}}" alt="Card image cap">
                        <span class="overlay__hover"></span>
                        <span class="hover-content">
                            <span class="title">Project 3</span>
                            <span class="content">Quisque ut lectus, eros et, sed commodo risus.</span>
                        </span>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 item mt-4 pt-lg-2">
                    <a href="{{asset('frontTheme')}}/images/g5.jpg" data-lightbox="example-set" data-title="Project 4"
                        class="zoom d-block">
                        <img class="card-img-bottom d-block" src="{{asset('frontTheme/images/g5.jpg')}}" alt="Card image cap">
                        <span class="overlay__hover"></span>
                        <span class="hover-content">
                            <span class="title">Project 4</span>
                            <span class="content">Quisque ut lectus, eros et, sed commodo risus.</span>
                        </span>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 item mt-4 pt-lg-2">
                    <a href="{{asset('frontTheme')}}/images/g6.jpg" data-lightbox="example-set" data-title="Project 5"
                        class="zoom d-block">
                        <img class="card-img-bottom d-block" src="{{asset('frontTheme/images/g6.jpg')}}" alt="Card image cap">
                        <span class="overlay__hover"></span>
                        <span class="hover-content">
                            <span class="title">Project 5</span>
                            <span class="content">Quisque ut lectus, eros et, sed commodo risus.</span>
                        </span>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 item mt-4 pt-lg-2">
                    <a href="{{asset('frontTheme')}}/images/g4.jpg" data-lightbox="example-set" data-title="Project 6"
                        class="zoom d-block">
                        <img class="card-img-bottom d-block" src="{{asset('frontTheme/images/g4.jpg')}}" alt="Card image cap">
                        <span class="overlay__hover"></span>
                        <span class="hover-content">
                            <span class="title">Project 6</span>
                            <span class="content">Quisque ut lectus, eros et, sed commodo risus.</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- //projects section -->

    <!-- home service section -->
    <section class="w3l-servicesblock1 py-5" id="services">
        <div class="container py-md-5 py-4">
            <div class="title-heading-w3 text-center mb-sm-5 mb-4">
                <h5 class="title-small mb-1">What i do?</h5>
                <h3 class="title-style">How I can help your next project</h3>
            </div>
            <div class="w3-services-grids py-lg-4">
                <div class="fea-gd-vv row">
                    <div class="col-lg-3 col-md-6">
                        <div class="feature-gd icon-yellow">
                            <div class="icon">
                                <i class="fas fa-laptop"></i>
                            </div>
                            <div class="icon-info">
                                <a href="#url">Web design<br> and development </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                        <div class="feature-gd icon-vilot">
                            <div class="icon">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <div class="icon-info">
                                <a href="#url">Mobile app<br> development</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-lg-0 mt-md-5 mt-4">
                        <div class="feature-gd icon-blue">
                            <div class="icon">
                                <i class="fab fa-android"></i>
                            </div>
                            <div class="icon-info">
                                <a href="#url">Android app<br> development</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-lg-0 mt-md-5 mt-4">
                        <div class="feature-gd icon-red">
                            <div class="icon">
                                <i class="fab fa-php"></i>
                            </div>
                            <div class="icon-info">
                                <a href="#url">Php Web<br> development</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-md-5 mt-4">
                        <div class="feature-gd icon-light-green">
                            <div class="icon">
                                <i class="fab fa-apple"></i>
                            </div>
                            <div class="icon-info">
                                <a href="#url">iOS App<br> development </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-md-5 mt-4">
                        <div class="feature-gd icon-light-blue">
                            <div class="icon">
                                <i class="fas fa-code"></i>
                            </div>
                            <div class="icon-info">
                                <a href="#url">JQuery & Java<br> programming</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-md-5 mt-4">
                        <div class="feature-gd icon-dark-green">
                            <div class="icon">
                                <i class="fas fa-link"></i>
                            </div>
                            <div class="icon-info">
                                <a href="#url">Blockchain<br> development</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-md-5 mt-4">
                        <div class="feature-gd icon-pink">
                            <div class="icon">
                                <i class="fas fa-code-branch"></i>
                            </div>
                            <div class="icon-info">
                                <a href="#url">.net program<br> development</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="services.html" class="btn btn-style">Learn More</a>
            </div>
        </div>
    </section>
    <!-- //home service section -->

    <!-- testimonials section -->
    <section class="w3l-testimonials py-5" id="testimonials">
        <div class="container py-md-5 py-4">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="owl-two owl-carousel owl-theme">

                        @foreach( $carousel as $carousel)
                        <div class="item">
                            <div class="slider-info mt-lg-4 mt-3">
                                <div class="message">
                                    <img src="{{asset('frontTheme/images/quote.png')}}" alt="" class="img-fluid mb-2" />
                                    <p><q>{{ $carousel->description }}</q></p>
                                    <div class="name mt-4 mb-4">
                                        <h4>{{ $carousel->name }}</h4>
                                        <p>{{ $carousel->work }}</p>
                                    </div>
                                </div>
                                <div class="img-circle">
                                    <img src="{{asset('images/'.$carousel->images)}}" id ="cover"; style="height: 450px; width: 500px;"" class="img-fluid radius-image" alt="client">
                                </div>
                            </div>
                        </div>
                        @endforeach
{{--                         <div class="item">
                            <div class="slider-info mt-lg-4 mt-3">
                                <div class="message">
                                    <img src="{{asset('frontTheme/images/quote.png')}}" alt="" class="img-fluid mb-2" />
                                    <p><q>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea sit id
                                            accusantium
                                            officia quod quasi necessitatibus perspiciatis Harum error provident
                                            quibusdam tenetur.</q></p>
                                    <div class="name mt-4 mb-4">
                                        <h4>Sara Grant</h4>
                                        <p>Subtitle goes here</p>
                                    </div>
                                </div>
                                <div class="img-circle">
                                    <img src="{{asset('frontTheme')}}/images/c2.jpg" class="img-fluid radius-image" alt="client">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="slider-info mt-lg-4 mt-3">
                                <div class="message">
                                    <img src="{{asset('frontTheme/images/quote.png')}}" alt="" class="img-fluid mb-2" />
                                    <p><q>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea sit id
                                            accusantium
                                            officia quod quasi necessitatibus perspiciatis Harum error provident
                                            quibusdam tenetur.</q></p>
                                    <div class="name mt-4 mb-4">
                                        <h4>Luke Jacobs</h4>
                                        <p>Subtitle goes here</p>
                                    </div>
                                </div>
                                <div class="img-circle">
                                    <img src="{{asset('frontTheme')}}/images/c3.jpg" class="img-fluid radius-image" alt="client">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="slider-info mt-lg-4 mt-3">
                                <div class="message">
                                    <img src="{{asset('frontTheme/images/quote.png')}}" alt="" class="img-fluid mb-2" />
                                    <p><q>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea sit id
                                            accusantium
                                            officia quod quasi necessitatibus perspiciatis Harum error provident
                                            quibusdam tenetur.</q></p>
                                    <div class="name mt-4 mb-4">
                                        <h4>Claire Olson</h4>
                                        <p>Subtitle goes here</p>
                                    </div>
                                </div>
                                <div class="img-circle">
                                    <img src="{{asset('frontTheme')}}/images/c4.jpg" class="img-fluid radius-image" alt="client">
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //testimonials section -->
@endsection