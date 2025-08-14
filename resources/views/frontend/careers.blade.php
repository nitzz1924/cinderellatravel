@extends('frontend.layout.websitemain')
@section('content')

<div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
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
        <div class="title-area text-center">
            <span class="sub-title">Join Our Team</span>
            <h2 class="sec-title">Current Job Openings</h2>
        </div>
        <div class="row gy-4 justify-content-center">
            <div class="col-xl-4 col-lg-6">
                <div class="about-contact-grid style2">
                    <div class="about-contact-icon"><img src="assets/img/icon/briefcase.svg" alt=""></div>
                    <div class="about-contact-details">
                        <h6 class="box-title">Air Ticketing</h6>
                        <p class="about-contact-details-text">Join our team to assist customers with flight bookings and travel itineraries.</p>
                        <p class="about-contact-details-text"><strong>Requirements:</strong></p>
                        <ul class="about-contact-details-text">
                            <li>Minimum 12th Pass</li>
                            <li>Basic Computer Knowledge</li>
                            <li>Good Communication Skills</li>
                            <li>Ready to Relocate</li>
                            <li>Experience and Fresher Both</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="about-contact-grid">
                    <div class="about-contact-icon"><img src="assets/img/icon/megaphone.svg" alt=""></div>
                    <div class="about-contact-details">
                        <h6 class="box-title">Sales & Marketing</h6>
                        <p class="about-contact-details-text">Drive our brand growth through innovative sales and marketing strategies.</p>
                        <p class="about-contact-details-text"><strong>Requirements:</strong></p>
                        <ul class="about-contact-details-text">
                            <li>Minimum 12th Pass</li>
                            <li>Basic Computer Knowledge</li>
                            <li>Good Communication Skills</li>
                            <li>Ready to Relocate</li>
                            <li>Experience and Fresher Both</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="about-contact-grid">
                    <div class="about-contact-icon"><img src="assets/img/icon/calculator.svg" alt=""></div>
                    <div class="about-contact-details">
                        <h6 class="box-title">Accountant</h6>
                        <p class="about-contact-details-text">Manage financial records and ensure accuracy in our accounting processes.</p>
                        <p class="about-contact-details-text"><strong>Requirements:</strong></p>
                        <ul class="about-contact-details-text">
                            <li>Minimum 12th Pass</li>
                            <li>Basic Computer Knowledge</li>
                            <li>Good Communication Skills</li>
                            <li>Ready to Relocate</li>
                            <li>Experience and Fresher Both</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection