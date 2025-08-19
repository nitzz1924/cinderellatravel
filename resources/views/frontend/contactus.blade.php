@extends('frontend.layout.websitemain')
@section('content')


    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.jpg') }}" data-aos="fade-down" data-aos-delay="100">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Contact Us</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="space">
        <div class="container">
            <div class="title-area text-center" data-aos="fade-up" data-aos-delay="200">
                <span class="sub-title">Get In Touch</span>
                <h2 class="sec-title">Our Contact Information</h2>
            </div>
            <div class="row gy-4 justify-content-center">
                <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="about-contact-grid style2">
                        <div class="about-contact-icon"><img src="{{ asset('assets/img/icon/location-dot2.svg') }}" alt="location"></div>
                        <div class="about-contact-details">
                            <h6 class="">Our Address</h6>
                            <p class="about-contact-details-text">C-80,81 , B.K. Kaul Nagar</p>
                            <p class="about-contact-details-text">Ajmer, Rajasthan</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="about-contact-grid">
                        <div class="about-contact-icon"><img src="{{ asset('assets/img/icon/call.svg') }}" alt="phone"></div>
                        <div class="about-contact-details">
                            <h6 class="">Phone Number</h6>
                            <p class="about-contact-details-text"><a href="tel:+918905943133">+91-8905943-133</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="about-contact-grid">
                        <div class="about-contact-icon"><img src="{{ asset('assets/img/icon/mail.svg') }}" alt="email"></div>
                        <div class="about-contact-details">
                            <h6 class="">Email Address</h6>
                            <p class="about-contact-details-text">
                                <a href="mailto:info@cinderellatravel.co.in">info@cinderellatravel.co.in</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="space-extra2-top space-extra2-bottom" data-bg-src="{{ asset('assets/img/bg/video_bg_1.jpg') }}">
        <div class="container">
            <div class="row flex-row-reverse justify-content-center align-items-center">
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="600">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3571.8100802629897!2d74.60030907596033!3d26.461850179319846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396be7033dde00eb%3A0xab03ba16aa54326e!2sCinderella%20Travel%20%26%20Tours!5e0!3m2!1sen!2sin!4v1755323416129!5m2!1sen!2sin"
                        width="600" height="650" style="border-radius:20px;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-lg-6">
                    <div data-aos="fade-right" data-aos-delay="700">
                        <form action="https://html.themeholy.com/tourm/demo/mail.php" method="POST"
                            class="contact-form style2 ajax-contact">
                            <h3 class="sec-title mb-30 text-capitalize">Book a tour</h3>
                            <div class="row">
                                <div class="col-12 form-group" data-aos="fade-up" data-aos-delay="800">
                                    <input type="text" class="form-control" name="name" id="name3" placeholder="First Name">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div class="col-12 form-group" data-aos="fade-up" data-aos-delay="900">
                                    <input type="email" class="form-control" name="email3" id="email3" placeholder="Your Mail">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="form-group col-12" data-aos="fade-up" data-aos-delay="1000">
                                    <select name="subject" id="subject" class="form-select nice-select">
                                        <option value="Select Tour Type" selected="selected" disabled="disabled">Select Tour Type</option>
                                        <option value="Africa Adventure">Africa Adventure</option>
                                        <option value="Africa Wild">Africa Wild</option>
                                        <option value="Asia">Asia</option>
                                        <option value="Scandinavia">Scandinavia</option>
                                        <option value="Western Europe">Western Europe</option>
                                    </select>
                                </div>
                                <div class="form-group col-12" data-aos="fade-up" data-aos-delay="1100">
                                    <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Your Message"></textarea>
                                    <i class="fas fa-comment"></i>
                                </div>
                                <div class="form-btn col-12 mt-24" data-aos="fade-up" data-aos-delay="1200">
                                    <button type="submit" class="th-btn style3">Send message <img src="{{ asset('assets/img/icon/plane.svg') }}" alt="plane"></button>
                                </div>
                            </div>
                            <p class="form-messages mb-0 mt-3"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection