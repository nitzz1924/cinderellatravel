@extends('frontend.layout.websitemain')
@section('content')
    <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">About Tourm</h1>
                <ul class="breadcumb-menu">
                    <li><a href="home-travel.html">Home</a></li>
                    <li>About Tourm</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="about-area position-relative overflow-hidden space" id="about-sec">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="img-box3">
                        <div class="img1"><img src="assets/img/normal/about_3_1.jpg" alt="About"></div>
                        <div class="img2"><img src="assets/img/normal/about_3_2.jpg" alt="About"></div>
                        <div class="img3 movingX"><img src="assets/img/normal/about_3_3.jpg" alt="About"></div>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="ps-xl-4">
                        <div class="title-area mb-20"><span class="sub-title style1">Our Story</span>
                            <h2 class="sec-title mb-20 pe-xl-5 me-xl-5 heading">Welcome To Cinderella Travel & Tours
                            </h2>
                        </div>
                        <p class="pe-xl-5">We Cinderella travel and tours started serving firstly in 2016 in Freetown,
                            sierra leone. It’s been a long time arranging high quality travel to the world’s most
                            captivating destinations. Whether you’re seeking culture, adventure or a blend of both, our
                            holidays are designed by experts and brought to life by the finest guides.
                            We provide many services to our lovely coustmers all over the world. We help making there trips
                            more memorable one.</p>
                        <p class="mb-30 pe-xl-5">We are recognized for its quick adaptation and response to meet the needs
                            of the client, Whether it is about your Business Travel, Holiday Planning, VISA Consultation,
                            Air Ticketing, Hotel Booking or Transportation Services, our dedicated staff is here to make
                            sure you are taken care of and focused on your trips for business or pleasure.</p>
                        <div class="about-item-wrap">
                            <div class="about-item style2">
                                <div class="about-item_img"><img src="assets/img/icon/about_1_1.svg" alt=""></div>
                                <div class="about-item_centent">
                                    <h5 class="box-title">Business Travel</h5>
                                    <p class="about-item_text">Efficient trips tailored to meet all corporate travel needs.
                                    </p>
                                </div>
                            </div>
                            <div class="about-item style2">
                                <div class="about-item_img"><img src="assets/img/icon/about_1_2.svg" alt=""></div>
                                <div class="about-item_centent">
                                    <h5 class="box-title">Holiday Planning</h5>
                                    <p class="about-item_text">Expertly crafted vacations for unforgettable memories with
                                        loved ones.</p>
                                </div>
                            </div>
                            <div class="about-item style2">
                                <div class="about-item_img"><img src="assets/img/icon/about_1_3.svg" alt=""></div>
                                <div class="about-item_centent">
                                    <h5 class="box-title">VISA Consultation</h5>
                                    <p class="about-item_text">Hassle-free guidance to secure your travel visa on time.</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-35"><a href="{{ route('contactus') }}" class="th-btn style3 th-icon">Contact With
                                Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape-mockup movingX d-none d-xxl-block" data-top="0%" data-left="-18%"><img
                    src="assets/img/shape/shape_2_1.png" alt="shape"></div>
            <div class="shape-mockup jump d-none d-xxl-block" data-top="28%" data-right="-15%"><img
                    src="assets/img/shape/shape_2_2.png" alt="shape"></div>
            <div class="shape-mockup spin d-none d-xxl-block" data-bottom="18%" data-left="-112%"><img
                    src="assets/img/shape/shape_2_3.png" alt="shape"></div>
            <div class="shape-mockup movixgX d-none d-xxl-block" data-bottom="18%" data-right="-12%"><img
                    src="assets/img/shape/shape_2_4.png" alt="shape"></div>
        </div>
    </div>
    <div class="overflow-hidden space overflow-hidden">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="title-area text-center"><span class="sub-title">Feature of the Tourm</span>
                        <h2 class="sec-title">Revolutionizing the ways we travel</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="choose-area2" data-bg-src="assets/img/bg/feature_bg_1.png">
            <div class="container">
                <div class="row gy-4 justify-content-center justify-content-lg-between">
                    <div class="col-lg-4 col-md-6 choose-feature_wrapp">
                        <div class="choose-feature">
                            <div class="box-img"><img src="assets/img/normal/feature_1_1.jpg" alt="Icon"></div>
                            <div class="choose-feature_content">
                                <h3 class="box-title">Custom Booking</h3>
                                <p class="box-text">Tour and travel agencies play a crucial role in simplifying travel
                                    planning, offering expertise, and ensuring a smooth and enjoyable experience for
                                    travelers. Whether booking a quick..</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 choose-feature_wrapp">
                        <div class="choose-feature">
                            <div class="box-img"><img src="assets/img/normal/feature_1_2.jpg" alt="Icon"></div>
                            <div class="choose-feature_content">
                                <h3 class="box-title">End-to-End Messaging</h3>
                                <p class="box-text">A worldwide tour is the ultimate journey of exploration, offering
                                    unforgettable experiences and a chance to connect with the world in meaningful ways.
                                    Whether you're chasing adventure,</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 choose-feature_wrapp">
                        <div class="choose-feature">
                            <div class="box-img"><img src="assets/img/normal/feature_1_3.jpg" alt="Icon"></div>
                            <div class="choose-feature_content">
                                <h3 class="box-title">Instant Itinerary</h3>
                                <p class="box-text">A worldwide tour is the ultimate dream for many travelers—a chance
                                    to explore the diverse cultures, landscapes, and wonders of every corner of the
                                    globe. Whether it's a meticulously</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="elements-sec bg-white overflow-hidden">
        <div class="container-fluid">
            <div class="tags-container relative"></div>
        </div>
    </div>
    <section class="team-area3 position-relative bg-top-center space" data-bg-src="assets/img/bg/team_bg_2.jpg">
        <div class="container z-index-common">
            <div class="title-area text-center"><span class="sub-title">Meet with Guide</span>
                <h2 class="sec-title">Meet with Tour Guide</h2>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider teamSlider3 has-shadow" id="teamSlider3"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="th-team team-grid">
                                <div class="team-img"><img src="assets/img/team/team_img_1.jpg" alt="Team"></div>
                                <div class="team-img2"><img src="assets/img/team/team_1_1.jpg" alt="Team"></div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="tour-guider-details.html">Michel Smith</a></h3>
                                        <span class="team-desig">Tourist Guide</span>
                                        <div class="th-social"><a target="_blank" href="https://facebook.com/"><i
                                                    class="fab fa-facebook-f"></i></a> <a target="_blank"
                                                href="https://twitter.com/"><i class="fab fa-twitter"></i></a> <a
                                                target="_blank" href="https://linkedin.com/"><i
                                                    class="fab fa-linkedin-in"></i></a> <a target="_blank"
                                                href="https://youtube.com/"><i class="fab fa-youtube"></i></a> <a
                                                target="_blank" href="https://instagram.com/"><i
                                                    class="fab fa-instagram"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="th-team team-grid">
                                <div class="team-img"><img src="assets/img/team/team_img_2.jpg" alt="Team"></div>
                                <div class="team-img2"><img src="assets/img/team/team_1_2.jpg" alt="Team"></div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="tour-guider-details.html">Janny Willson</a></h3>
                                        <span class="team-desig">Tourist Guide</span>
                                        <div class="th-social"><a target="_blank" href="https://facebook.com/"><i
                                                    class="fab fa-facebook-f"></i></a> <a target="_blank"
                                                href="https://twitter.com/"><i class="fab fa-twitter"></i></a> <a
                                                target="_blank" href="https://linkedin.com/"><i
                                                    class="fab fa-linkedin-in"></i></a> <a target="_blank"
                                                href="https://youtube.com/"><i class="fab fa-youtube"></i></a> <a
                                                target="_blank" href="https://instagram.com/"><i
                                                    class="fab fa-instagram"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="th-team team-grid">
                                <div class="team-img"><img src="assets/img/team/team_img_3.jpg" alt="Team"></div>
                                <div class="team-img2"><img src="assets/img/team/team_1_3.jpg" alt="Team"></div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="tour-guider-details.html">Jacob Jones</a></h3>
                                        <span class="team-desig">Tourist Guide</span>
                                        <div class="th-social"><a target="_blank" href="https://facebook.com/"><i
                                                    class="fab fa-facebook-f"></i></a> <a target="_blank"
                                                href="https://twitter.com/"><i class="fab fa-twitter"></i></a> <a
                                                target="_blank" href="https://linkedin.com/"><i
                                                    class="fab fa-linkedin-in"></i></a> <a target="_blank"
                                                href="https://youtube.com/"><i class="fab fa-youtube"></i></a> <a
                                                target="_blank" href="https://instagram.com/"><i
                                                    class="fab fa-instagram"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="th-team team-grid">
                                <div class="team-img"><img src="assets/img/team/team_img_1.jpg" alt="Team"></div>
                                <div class="team-img2"><img src="assets/img/team/team_1_4.jpg" alt="Team"></div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="tour-guider-details.html">Maria Prova</a></h3>
                                        <span class="team-desig">Tourist Guide</span>
                                        <div class="th-social"><a target="_blank" href="https://facebook.com/"><i
                                                    class="fab fa-facebook-f"></i></a> <a target="_blank"
                                                href="https://twitter.com/"><i class="fab fa-twitter"></i></a> <a
                                                target="_blank" href="https://linkedin.com/"><i
                                                    class="fab fa-linkedin-in"></i></a> <a target="_blank"
                                                href="https://youtube.com/"><i class="fab fa-youtube"></i></a> <a
                                                target="_blank" href="https://instagram.com/"><i
                                                    class="fab fa-instagram"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="th-team team-grid">
                                <div class="team-img"><img src="assets/img/team/team_img_2.jpg" alt="Team"></div>
                                <div class="team-img2"><img src="assets/img/team/team_1_5.jpg" alt="Team"></div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="tour-guider-details.html">Rebeka Maliha</a></h3>
                                        <span class="team-desig">Tourist Guide</span>
                                        <div class="th-social"><a target="_blank" href="https://facebook.com/"><i
                                                    class="fab fa-facebook-f"></i></a> <a target="_blank"
                                                href="https://twitter.com/"><i class="fab fa-twitter"></i></a> <a
                                                target="_blank" href="https://linkedin.com/"><i
                                                    class="fab fa-linkedin-in"></i></a> <a target="_blank"
                                                href="https://youtube.com/"><i class="fab fa-youtube"></i></a> <a
                                                target="_blank" href="https://instagram.com/"><i
                                                    class="fab fa-instagram"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="th-team team-grid">
                                <div class="team-img"><img src="assets/img/team/team_img_3.jpg" alt="Team"></div>
                                <div class="team-img2"><img src="assets/img/team/team_1_6.jpg" alt="Team"></div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="tour-guider-details.html">Alif Mahmud</a></h3>
                                        <span class="team-desig">Tourist Guide</span>
                                        <div class="th-social"><a target="_blank" href="https://facebook.com/"><i
                                                    class="fab fa-facebook-f"></i></a> <a target="_blank"
                                                href="https://twitter.com/"><i class="fab fa-twitter"></i></a> <a
                                                target="_blank" href="https://linkedin.com/"><i
                                                    class="fab fa-linkedin-in"></i></a> <a target="_blank"
                                                href="https://youtube.com/"><i class="fab fa-youtube"></i></a> <a
                                                target="_blank" href="https://instagram.com/"><i
                                                    class="fab fa-instagram"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="th-team team-grid">
                                <div class="team-img"><img src="assets/img/team/team_img_1.jpg" alt="Team"></div>
                                <div class="team-img2"><img src="assets/img/team/team_1_3.jpg" alt="Team"></div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="tour-guider-details.html">Guy Hawkins</a></h3>
                                        <span class="team-desig">Tourist Guide</span>
                                        <div class="th-social"><a target="_blank" href="https://facebook.com/"><i
                                                    class="fab fa-facebook-f"></i></a> <a target="_blank"
                                                href="https://twitter.com/"><i class="fab fa-twitter"></i></a> <a
                                                target="_blank" href="https://linkedin.com/"><i
                                                    class="fab fa-linkedin-in"></i></a> <a target="_blank"
                                                href="https://youtube.com/"><i class="fab fa-youtube"></i></a> <a
                                                target="_blank" href="https://instagram.com/"><i
                                                    class="fab fa-instagram"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="th-team team-grid">
                                <div class="team-img"><img src="assets/img/team/team_img_2.jpg" alt="Team"></div>
                                <div class="team-img2"><img src="assets/img/team/team_1_4.jpg" alt="Team"></div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="tour-guider-details.html">Jenny Wilson</a></h3>
                                        <span class="team-desig">Tourist Guide</span>
                                        <div class="th-social"><a target="_blank" href="https://facebook.com/"><i
                                                    class="fab fa-facebook-f"></i></a> <a target="_blank"
                                                href="https://twitter.com/"><i class="fab fa-twitter"></i></a> <a
                                                target="_blank" href="https://linkedin.com/"><i
                                                    class="fab fa-linkedin-in"></i></a> <a target="_blank"
                                                href="https://youtube.com/"><i class="fab fa-youtube"></i></a> <a
                                                target="_blank" href="https://instagram.com/"><i
                                                    class="fab fa-instagram"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-pagination"></div>
                </div><button data-slider-prev="#teamSlider3" class="slider-arrow slider-prev"><img
                        src="assets/img/icon/right-arrow2.svg" alt=""></button> <button
                    data-slider-next="#teamSlider3" class="slider-arrow slider-next"><img
                        src="assets/img/icon/left-arrow2.svg" alt=""></button>
            </div>
        </div>
    </section>
    <section class="testi-area overflow-hidden space-bottom" id="testi-sec">
        <div class="container-fluid p-0">
            <div class="title-area mb-20 text-center"><span class="sub-title">Testimonial</span>
                <h2 class="sec-title">What Client Say About us</h2>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider testiSlider1 has-shadow" id="testiSlider1"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"767":{"slidesPerView":"2","centeredSlides":"true"},"992":{"slidesPerView":"2","centeredSlides":"true"},"1200":{"slidesPerView":"2","centeredSlides":"true"},"1400":{"slidesPerView":"3","centeredSlides":"true"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testi-card">
                                <div class="testi-card_wrapper">
                                    <div class="testi-card_profile">
                                        <div class="testi-card_avater"><img src="assets/img/testimonial/testi_1_1.jpg"
                                                alt="testimonial"></div>
                                        <div class="media-body">
                                            <h3 class="box-title">Maria Doe</h3><span
                                                class="testi-card_desig">Traveller</span>
                                        </div>
                                    </div>
                                    <div class="testi-card_review"><i class="fa-solid fa-star"></i> <i
                                            class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i
                                            class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></div>
                                </div>
                                <p class="testi-card_text">“A home that perfectly blends sustainability with luxury
                                    until I discovered Ecoland Residence. From the moment I stepped into this community,
                                    I knew it was where I wanted to live. The commitment to eco-friendly living”</p>
                                <div class="testi-card-quote"><img src="assets/img/icon/testi-quote.svg" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-card">
                                <div class="testi-card_wrapper">
                                    <div class="testi-card_profile">
                                        <div class="testi-card_avater"><img src="assets/img/testimonial/testi_1_2.jpg"
                                                alt="testimonial"></div>
                                        <div class="media-body">
                                            <h3 class="box-title">Andrew Simon</h3><span
                                                class="testi-card_desig">Traveller</span>
                                        </div>
                                    </div>
                                    <div class="testi-card_review"><i class="fa-solid fa-star"></i> <i
                                            class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i
                                            class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></div>
                                </div>
                                <p class="testi-card_text">“A home that perfectly blends sustainability with luxury
                                    until I discovered Ecoland Residence. From the moment I stepped into this community,
                                    I knew it was where I wanted to live. The commitment to eco-friendly living”</p>
                                <div class="testi-card-quote"><img src="assets/img/icon/testi-quote.svg" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-card">
                                <div class="testi-card_wrapper">
                                    <div class="testi-card_profile">
                                        <div class="testi-card_avater"><img src="assets/img/testimonial/testi_1_1.jpg"
                                                alt="testimonial"></div>
                                        <div class="media-body">
                                            <h3 class="box-title">Alex Jordan</h3><span
                                                class="testi-card_desig">Traveller</span>
                                        </div>
                                    </div>
                                    <div class="testi-card_review"><i class="fa-solid fa-star"></i> <i
                                            class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i
                                            class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></div>
                                </div>
                                <p class="testi-card_text">“A home that perfectly blends sustainability with luxury
                                    until I discovered Ecoland Residence. From the moment I stepped into this community,
                                    I knew it was where I wanted to live. The commitment to eco-friendly living”</p>
                                <div class="testi-card-quote"><img src="assets/img/icon/testi-quote.svg" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-card">
                                <div class="testi-card_wrapper">
                                    <div class="testi-card_profile">
                                        <div class="testi-card_avater"><img src="assets/img/testimonial/testi_1_2.jpg"
                                                alt="testimonial"></div>
                                        <div class="media-body">
                                            <h3 class="box-title">Maria Doe</h3><span
                                                class="testi-card_desig">Traveller</span>
                                        </div>
                                    </div>
                                    <div class="testi-card_review"><i class="fa-solid fa-star"></i> <i
                                            class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i
                                            class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></div>
                                </div>
                                <p class="testi-card_text">“A home that perfectly blends sustainability with luxury
                                    until I discovered Ecoland Residence. From the moment I stepped into this community,
                                    I knew it was where I wanted to live. The commitment to eco-friendly living”</p>
                                <div class="testi-card-quote"><img src="assets/img/icon/testi-quote.svg" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-card">
                                <div class="testi-card_wrapper">
                                    <div class="testi-card_profile">
                                        <div class="testi-card_avater"><img src="assets/img/testimonial/testi_1_1.jpg"
                                                alt="testimonial"></div>
                                        <div class="media-body">
                                            <h3 class="box-title">Angelina Rose</h3><span
                                                class="testi-card_desig">Traveller</span>
                                        </div>
                                    </div>
                                    <div class="testi-card_review"><i class="fa-solid fa-star"></i> <i
                                            class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i
                                            class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></div>
                                </div>
                                <p class="testi-card_text">“A home that perfectly blends sustainability with luxury
                                    until I discovered Ecoland Residence. From the moment I stepped into this community,
                                    I knew it was where I wanted to live. The commitment to eco-friendly living”</p>
                                <div class="testi-card-quote"><img src="assets/img/icon/testi-quote.svg" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-card">
                                <div class="testi-card_wrapper">
                                    <div class="testi-card_profile">
                                        <div class="testi-card_avater"><img src="assets/img/testimonial/testi_1_1.jpg"
                                                alt="testimonial"></div>
                                        <div class="media-body">
                                            <h3 class="box-title">Maria Doe</h3><span
                                                class="testi-card_desig">Traveller</span>
                                        </div>
                                    </div>
                                    <div class="testi-card_review"><i class="fa-solid fa-star"></i> <i
                                            class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i
                                            class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></div>
                                </div>
                                <p class="testi-card_text">“A home that perfectly blends sustainability with luxury
                                    until I discovered Ecoland Residence. From the moment I stepped into this community,
                                    I knew it was where I wanted to live. The commitment to eco-friendly living”</p>
                                <div class="testi-card-quote"><img src="assets/img/icon/testi-quote.svg" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-card">
                                <div class="testi-card_wrapper">
                                    <div class="testi-card_profile">
                                        <div class="testi-card_avater"><img src="assets/img/testimonial/testi_1_2.jpg"
                                                alt="testimonial"></div>
                                        <div class="media-body">
                                            <h3 class="box-title">Andrew Simon</h3><span
                                                class="testi-card_desig">Traveller</span>
                                        </div>
                                    </div>
                                    <div class="testi-card_review"><i class="fa-solid fa-star"></i> <i
                                            class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i
                                            class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></div>
                                </div>
                                <p class="testi-card_text">“A home that perfectly blends sustainability with luxury
                                    until I discovered Ecoland Residence. From the moment I stepped into this community,
                                    I knew it was where I wanted to live. The commitment to eco-friendly living”</p>
                                <div class="testi-card-quote"><img src="assets/img/icon/testi-quote.svg" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-card">
                                <div class="testi-card_wrapper">
                                    <div class="testi-card_profile">
                                        <div class="testi-card_avater"><img src="assets/img/testimonial/testi_1_1.jpg"
                                                alt="testimonial"></div>
                                        <div class="media-body">
                                            <h3 class="box-title">Alex Jordan</h3><span
                                                class="testi-card_desig">Traveller</span>
                                        </div>
                                    </div>
                                    <div class="testi-card_review"><i class="fa-solid fa-star"></i> <i
                                            class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i
                                            class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></div>
                                </div>
                                <p class="testi-card_text">“A home that perfectly blends sustainability with luxury
                                    until I discovered Ecoland Residence. From the moment I stepped into this community,
                                    I knew it was where I wanted to live. The commitment to eco-friendly living”</p>
                                <div class="testi-card-quote"><img src="assets/img/icon/testi-quote.svg" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-pagination"></div>
                </div>
            </div>
        </div>
        <div class="shape-mockup d-none d-xl-block" data-bottom="-2%" data-right="0%"><img
                src="assets/img/shape/line2.png" alt="shape"></div>
        <div class="shape-mockup movingX d-none d-xl-block" data-top="30%" data-left="5%"><img
                src="assets/img/shape/shape_7.png" alt="shape"></div>
    </section>
    <div class="brand-area overflow-hidden">
        <div class="container th-container">
            <div class="swiper th-slider brandSlider1" id="brandSlider1"
                data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"6"},"1400":{"slidesPerView":"8"}}}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original"
                                    src="assets/img/brand/brand_1_1.svg" alt="Brand Logo"> <img class="gray"
                                    src="assets/img/brand/brand_1_1.svg" alt="Brand Logo"></a></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original"
                                    src="assets/img/brand/brand_1_2.svg" alt="Brand Logo"> <img class="gray"
                                    src="assets/img/brand/brand_1_2.svg" alt="Brand Logo"></a></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original"
                                    src="assets/img/brand/brand_1_3.svg" alt="Brand Logo"> <img class="gray"
                                    src="assets/img/brand/brand_1_3.svg" alt="Brand Logo"></a></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original"
                                    src="assets/img/brand/brand_1_4.svg" alt="Brand Logo"> <img class="gray"
                                    src="assets/img/brand/brand_1_4.svg" alt="Brand Logo"></a></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original"
                                    src="assets/img/brand/brand_1_5.svg" alt="Brand Logo"> <img class="gray"
                                    src="assets/img/brand/brand_1_5.svg" alt="Brand Logo"></a></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original"
                                    src="assets/img/brand/brand_1_6.svg" alt="Brand Logo"> <img class="gray"
                                    src="assets/img/brand/brand_1_6.svg" alt="Brand Logo"></a></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original"
                                    src="assets/img/brand/brand_1_7.svg" alt="Brand Logo"> <img class="gray"
                                    src="assets/img/brand/brand_1_7.svg" alt="Brand Logo"></a></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original"
                                    src="assets/img/brand/brand_1_8.svg" alt="Brand Logo"> <img class="gray"
                                    src="assets/img/brand/brand_1_8.svg" alt="Brand Logo"></a></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original"
                                    src="assets/img/brand/brand_1_4.svg" alt="Brand Logo"> <img class="gray"
                                    src="assets/img/brand/brand_1_4.svg" alt="Brand Logo"></a></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original"
                                    src="assets/img/brand/brand_1_3.svg" alt="Brand Logo"> <img class="gray"
                                    src="assets/img/brand/brand_1_3.svg" alt="Brand Logo"></a></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original"
                                    src="assets/img/brand/brand_1_2.svg" alt="Brand Logo"> <img class="gray"
                                    src="assets/img/brand/brand_1_2.svg" alt="Brand Logo"></a></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original"
                                    src="assets/img/brand/brand_1_1.svg" alt="Brand Logo"> <img class="gray"
                                    src="assets/img/brand/brand_1_1.svg" alt="Brand Logo"></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar-gallery-area space">
        <div class="container-fluid">
            <div class="slider-area">
                <div class="swiper th-slider has-shadow"
                    data-slider-options='{"centeredSlides":"true","breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"},"1300":{"slidesPerView":"4"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="gallery-thumb style2 global-img"><img src="assets/img/gallery/gallery_4_1.jpg"
                                    alt="Gallery Image"> <a target="_blank" href="https://www.instagram.com/"
                                    class="gallery-btn"><i class="fab fa-instagram"></i></a></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-thumb style2 global-img"><img src="assets/img/gallery/gallery_4_2.jpg"
                                    alt="Gallery Image"> <a target="_blank" href="https://www.instagram.com/"
                                    class="gallery-btn"><i class="fab fa-instagram"></i></a></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-thumb style2 global-img"><img src="assets/img/gallery/gallery_4_3.jpg"
                                    alt="Gallery Image"> <a target="_blank" href="https://www.instagram.com/"
                                    class="gallery-btn"><i class="fab fa-instagram"></i></a></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-thumb style2 global-img"><img src="assets/img/gallery/gallery_4_4.jpg"
                                    alt="Gallery Image"> <a target="_blank" href="https://www.instagram.com/"
                                    class="gallery-btn"><i class="fab fa-instagram"></i></a></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-thumb style2 global-img"><img src="assets/img/gallery/gallery_4_5.jpg"
                                    alt="Gallery Image"> <a target="_blank" href="https://www.instagram.com/"
                                    class="gallery-btn"><i class="fab fa-instagram"></i></a></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-thumb style2 global-img"><img src="assets/img/gallery/gallery_4_1.jpg"
                                    alt="Gallery Image"> <a target="_blank" href="https://www.instagram.com/"
                                    class="gallery-btn"><i class="fab fa-instagram"></i></a></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-thumb style2 global-img"><img src="assets/img/gallery/gallery_4_2.jpg"
                                    alt="Gallery Image"> <a target="_blank" href="https://www.instagram.com/"
                                    class="gallery-btn"><i class="fab fa-instagram"></i></a></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-thumb style2 global-img"><img src="assets/img/gallery/gallery_4_3.jpg"
                                    alt="Gallery Image"> <a target="_blank" href="https://www.instagram.com/"
                                    class="gallery-btn"><i class="fab fa-instagram"></i></a></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-thumb style2 global-img"><img src="assets/img/gallery/gallery_4_4.jpg"
                                    alt="Gallery Image"> <a target="_blank" href="https://www.instagram.com/"
                                    class="gallery-btn"><i class="fab fa-instagram"></i></a></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-thumb style2 global-img"><img src="assets/img/gallery/gallery_4_5.jpg"
                                    alt="Gallery Image"> <a target="_blank" href="https://www.instagram.com/"
                                    class="gallery-btn"><i class="fab fa-instagram"></i></a></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-thumb style2 global-img"><img src="assets/img/gallery/gallery_4_2.jpg"
                                    alt="Gallery Image"> <a target="_blank" href="https://www.instagram.com/"
                                    class="gallery-btn"><i class="fab fa-instagram"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
