@extends('frontend.layout.websitemain')
@section('content')

    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.jpg') }}" data-aos="fade-down" data-aos-delay="100">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Careers</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Careers</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="space">
        <div class="container">
            <div class="title-area text-center" data-aos="fade-up" data-aos-delay="200">
                <span class="sub-title">Join Our Team</span>
                <h2 class="sec-title">Current Job Openings</h2>
            </div>
            <div class="row gy-4 justify-content-center">
                <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="about-contact-grid style2">
                        <div class="about-contact-icon">
                            <img src="{{ asset('assets/img/icon/ticket-flight.png') }}" alt="ticket" width="50">
                        </div>
                        <div class="about-contact-details">
                            <h6 class="">Air Ticketing</h6>
                            <p class="about-contact-details-text">Join our team to assist customers with flight bookings and travel itineraries.</p>
                            <p class="about-contact-details-text"><strong>Requirements:</strong></p>
                            <ul class="about-contact-details-text">
                                <li class="mb-2">Minimum 12th Pass</li>
                                <li class="mb-2">Basic Computer Knowledge</li>
                                <li class="mb-2">Good Communication Skills</li>
                                <li class="mb-2">Ready to Relocate</li>
                                <li class="mb-2">Experience and Fresher Both</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="about-contact-grid">
                        <div class="about-contact-icon">
                            <img src="{{ asset('assets/img/icon/social-media-marketing.png') }}" alt="social media" width="50">
                        </div>
                        <div class="about-contact-details">
                            <h6 class="">Sales & Marketing</h6>
                            <p class="about-contact-details-text">Drive our brand growth through innovative sales and marketing strategies.</p>
                            <p class="about-contact-details-text"><strong>Requirements:</strong></p>
                            <ul class="about-contact-details-text">
                                <li class="mb-2">Minimum 12th Pass</li>
                                <li class="mb-2">Basic Computer Knowledge</li>
                                <li class="mb-2">Good Communication Skills</li>
                                <li class="mb-2">Ready to Relocate</li>
                                <li class="mb-2">Experience and Fresher Both</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="about-contact-grid">
                        <div class="about-contact-icon">
                            <img src="{{ asset('assets/img/icon/accounting.png') }}" alt="accounting" width="50">
                        </div>
                        <div class="about-contact-details">
                            <h6 class="">Accountant</h6>
                            <p class="about-contact-details-text">Manage financial records and ensure accuracy in our accounting processes.</p>
                            <p class="about-contact-details-text"><strong>Requirements:</strong></p>
                            <ul class="about-contact-details-text ">
                                <li class="mb-2">Minimum 12th Pass</li>
                                <li class="mb-2">Basic Computer Knowledge</li>
                                <li class="mb-2">Good Communication Skills</li>
                                <li class="mb-2">Ready to Relocate</li>
                                <li class="mb-2">Experience and Fresher Both</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection