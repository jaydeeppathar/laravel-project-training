@extends($frontTheme)

@section('content')
    <!-- inner banner -->
    <section class="inner-banner py-5">
        <div class="w3l-breadcrumb py-lg-5">
                @if (Session::get('success'))
                    <div class="alert col-md-4 flot-right alert-success text-dark" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif   
            <div class="container pt-4 pb-sm-4">
                <h4 class="inner-text-title pt-sm-5 pt-4">Contact Us</h4>
                <ul class="breadcrumbs-custom-path mt-2">
                    <li><a href="index.html">Home</a></li>
                    <li class="active"><i class="fas fa-angle-right mx-2"></i>Contact Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- //inner banner -->

    <!-- contact -->
    <section class="w3l-contact py-5" id="contact">
        <div class="container py-lg-5 py-4">
            <div class="title-heading-w3 text-center mb-sm-5 mb-4">
                <h5 class="title-small">Get In Touch</h5>
                <h3 class="title-style">Contact Me</h3>
            </div>
            <div class="row contact-block">
                <div class="col-md-6 contact-left pe-lg-5">
                    <h3 class="mb-sm-4 mb-3">Contact Info</h3>
                    <p class="cont-para mb-sm-5 mb-4">I enjoy discussing new projects and design challenges. Please
                        share as
                        much info, as possible so
                        we can get the most out of our first catch-up.</p>
                    <div class="cont-details">
                        <p><i class="fas fa-map-marker-alt"></i>Mavdi Choke, Rajkot, Gujrat, India.</p>
                        <p><i class="fas fa-phone-alt"></i><a href="tel:+(91) 63 55 31 13 49">+(91) 63 55 31 13 49</a></p>
                        <p><i class="fas fa-envelope-open-text"></i><a href="mailto:jaydeeppathar000@mail.com"
                                class="mail">jaydeeppathar000@mail.com</a></p>
                    </div>
                    <h4 class="mb-3 mt-5">Follow Me</h4>
                    <ul class="social-icons-contact">
                        <li>
                            <a href="#twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#linkedinin">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#github">
                                <i class="fab fa-github"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://instagram.com/mr.jaydeep_pathar?igshid=YmMyMTA2M2Y=">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 contact-right mt-md-0 mt-5 ps-lg-0">
                    <form action="{{ route('contactus.store')}}" method="post" class="signin-form">
                        @csrf
                        <div class="input-grids">
                            <input type="text" name="name" id="w3lName" placeholder="Your Name*" class="contact-input" required="" />
                            <input type="email" name="email" id="w3lSender" placeholder="Your Email*" class="contact-input" required="" />
                            <input type="text" name="subject" id="w3lSubect" placeholder="Subject*" class="contact-input" required="" />
                            <input type="text" name="number" id="w3lWebsite" placeholder="Phone Number*" class="contact-input" required="" />
                        </div>
                        <div class="form-input">
                            <textarea name="message" id="message" placeholder="Type your message here*" required=""></textarea>
                        </div>
                        <button class="btn btn-style">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- map -->
    <div class="map-iframe">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d59071.89197101548!2d70.7844022!3d22.2782456!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959c98ac71cdf0f%3A0x76dd15cfbe93ad3b!2sRajkot%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1662461603411!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
            width="100%" height="400" frameborder="0" style="border: 0px;" allowfullscreen=""></iframe>
    </div>
    <!-- //contact -->
@endsection