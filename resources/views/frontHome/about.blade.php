@extends($frontTheme)

@section('content')
    <!-- inner banner -->
    <section class="inner-banner py-5">
        <div class="w3l-breadcrumb py-lg-5">
            <div class="container pt-4 pb-sm-4">
                <h4 class="inner-text-title font-weight-bold pt-sm-5 pt-4">About Me</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.html">Home</a></li>
                    <li class="active"><i class="fas fa-angle-right mx-2"></i>My Intro</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- //inner banner -->

    <!-- about section -->
    <section class="w3l-aboutblock1 py-5" id="about">
        <div class="container py-md-5 py-4">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="position-relative">
                        <img src="{{asset('frontTheme/images/about.jpg')}}" alt="" class="radius-image img-fluid">
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
                                <p>Mr.Jaydeep Pathar</p>
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

    <!-- text with button -->
    <section class="w3l-timeline-1 text-center py-5">
        <div class="container py-lg-5 py-4">
            <div class="mx-auto" style="max-width:800px">
                <h3 class="title-style mb-4">Why hire me for your next project?</h3>
                <p>I love to work in User Experience & User Interface designing. Because I love to solve the design
                    problem
                    and find easy and better solutions to solve it. I always try my best to make good user interface
                    with
                    the best user experience.</p>
                <a href="services.html" class="btn btn-style mt-5">Learn More</a>
            </div>
        </div>
    </section>
    <!-- //text with button -->

    <!-- about2 section -->
    <section class="w3l-about2 py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="row align-items-center">
                <div class="col-lg-6 pe-lg-5">
                    <h5 class="title-small mb-1">Web Design</h5>
                    <h3 class="title-style">I Would Love to make your Ideas real</h3>
                    <div class="cwp23-text-cols mt-lg-5 mt-4">
                        <div class="column">
                            <span>1200+</span>
                            <h4>Happy Clients</h4>
                            <p>We help our clients increase profits by increasing their visibility online.</p>
                        </div>
                        <div class="column">
                            <span>13k+</span>
                            <h4>Completed projects </h4>
                            <p>We help our clients increase profits by increasing their visibility online. </p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 cwp23-text align-self mt-lg-0 mt-5">
                    <img src="{{asset('frontTheme/images/blog5.jpg')}}" alt="" class="radius-image img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- //about2 section -->

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
                        <h6 class="progress-tittle">Web Design <span class="">80%</span></h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped gradient-1" role="progressbar"
                                style="width: 80%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <div class="progress-info info2">
                        <h6 class="progress-tittle">HTML/CSS <span class="">95%</span>
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
                        <h6 class="progress-tittle">React JS <span class="">85%</span></h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped gradient-4" role="progressbar"
                                style="width: 85%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5 mt-lg-0 mt-5">
                    <div class="progress-info info1">
                        <h6 class="progress-tittle">Angular Js <span class="">80%</span></h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped gradient-1" role="progressbar"
                                style="width: 80%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <div class="progress-info info2">
                        <h6 class="progress-tittle">Bootstrap <span class="">95%</span>
                        </h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped gradient-2" role="progressbar"
                                style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <div class="progress-info info3">
                        <h6 class="progress-tittle">Graphic Design <span class="">60%</span></h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped gradient-3" role="progressbar"
                                style="width: 60%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <div class="progress-info info4 mb-0">
                        <h6 class="progress-tittle">UI/UX Design <span class="">85%</span></h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped gradient-4" role="progressbar"
                                style="width: 85%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //skills section -->
@endsection