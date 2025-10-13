@extends('frontend.layout.websitemain')
@section('content')
    <div class="hero-2" id="hero">
        <div class="hero2-overlay" data-bg-src="assets/img/bg/line-pattern.png"></div>
        <div class="swiper hero-slider-2" id="heroSlide2">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="hero-inner">
                        <div class="th-hero-bg" data-bg-src="assets/img/hero/hero_bg_2_1.jpg"></div>
                        <div class="container">
                            <div class="hero-style2">
                                <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">Discover <span
                                        class="hero-text">Your Dream Journey</span></h1>
                                <p class="hero-desc" data-ani="slideinup" data-ani-delay="0.5s">Lamira Tour and Travel
                                    Agency offers seamless travel solutions with air ticketing, travel visas, insurance,
                                    hotel bookings, and curated holiday packages for unforgettable adventures.</p>
                                <div class="btn-group" data-ani="slideinup" data-ani-delay="0.6s"><a href="#"
                                        class="th-btn white-btn th-icon">Explore Our Services</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-inner"><video autoplay loop muted>
                            <source src="assets/img/hero/hero-video.mp4" type="video/mp4">
                        </video>
                        <div class="container">
                            <div class="hero-style2">
                                <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">Travel <span
                                        class="hero-text">With Ease</span></h1>
                                <p class="hero-desc" data-ani="slideinup" data-ani-delay="0.5s">Let Lamira handle your
                                    travel needs with expert air ticketing, visa processing, travel insurance, hotel
                                    bookings, and personalized holiday packages.</p>
                                <div class="btn-group" data-ani="slideinup" data-ani-delay="0.6s"><a href="#"
                                        class="th-btn white-btn th-icon">Plan Your Trip</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-inner">
                        <div class="th-hero-bg" data-bg-src="assets/img/hero/hero_bg_2_3.jpg"></div>
                        <div class="container">
                            <div class="hero-style2">
                                <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">Embark on <span
                                        class="hero-text">Unforgettable Adventures</span></h1>
                                <p class="hero-desc" data-ani="slideinup" data-ani-delay="0.5s">With 25 years of expertise,
                                    Lamira Tour and Travel Agency provides comprehensive travel services, from flights
                                    to customized holiday experiences.</p>
                                <div class="btn-group" data-ani="slideinup" data-ani-delay="0.6s"><a href="#"
                                        class="th-btn white-btn th-icon">Discover Now</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-inner"><video autoplay loop muted>
                            <source src="assets/img/hero/hero-video.mp4" type="video/mp4">
                        </video>
                        <div class="container">
                            <div class="hero-style2">
                                <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">Explore <span
                                        class="hero-text">The World Your Way</span></h1>
                                <p class="hero-desc" data-ani="slideinup" data-ani-delay="0.5s">Cinderella’s all-in-one
                                    travel solutions include air ticketing, visa services, insurance, hotel bookings, and
                                    tailored holiday packages for a hassle-free journey.</p>
                                <div class="btn-group" data-ani="slideinup" data-ani-delay="0.6s"><a href="#"
                                        class="th-btn white-btn th-icon">Book Your Adventure</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="th-swiper-custom">
                <div class="swiper-pagination"></div>
                <div class="hero-icon"><button data-slider-prev="#heroSlide2, #heroSlide3"
                        class="hero-arrow slider-prev"><img src="assets/img/icon/hero-arrow-left.svg"
                            alt=""></button>
                    <button data-slider-next="#heroSlide2, #heroSlide3" class="hero-arrow slider-next"><img
                            src="assets/img/icon/hero-arrow-right.svg" alt=""></button>
                </div>
            </div>
        </div>
        <div class="swiper heroThumbs style2" id="heroSlide3">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="hero-inner">
                        <div class="hero-card">
                            <div class="hero-img"><img src="assets/img/hero/hero_bg_2_1.jpg" alt=""></div>
                            <div class="hero-card_content">
                                <h3 class="box-title">Exotic Island Getaway</h3>
                                {{-- <h4 class="hero-card_price">
                                    <span class="currency">$850.00</span>/Person
                                </h4>
                                <span><i class="fa-light fa-clock"></i>7 Days</span> --}}
                                <a href="#" class="th-btn style2">View more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-inner">
                        <div class="hero-card">
                            <div class="hero-img"><img src="assets/img/hero/hero_bg_2_2.jpg" alt=""></div>
                            <div class="hero-card_content">
                                <h3 class="box-title">Luxury City Escape</h3>
                                {{-- <h4 class="hero-card_price"><span class="currency">$750.00</span>/Person</h4><span><i
                                        class="fa-light fa-clock"></i>6 Days</span>  --}}
                                <a href="#" class="th-btn style2">View more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-inner">
                        <div class="hero-card">
                            <div class="hero-img"><img src="assets/img/hero/hero_bg_2_3.jpg" alt=""></div>
                            <div class="hero-card_content">
                                <h3 class="box-title">Exotic Island Getaway</h3>
                                {{-- <h4 class="hero-card_price"><span class="currency">$850.00</span>/Person</h4><span><i
                                        class="fa-light fa-clock"></i>7 Days</span>  --}}
                                <a href="#" class="th-btn style2">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-inner">
                        <div class="hero-card">
                            <div class="hero-img"><img src="assets/img/hero/hero_bg_2_2.jpg" alt=""></div>
                            <div class="hero-card_content">
                                <h3 class="box-title">Luxury City Escape</h3>
                                {{-- <h4 class="hero-card_price"><span class="currency">$750.00</span>/Person</h4><span><i
                                        class="fa-light fa-clock"></i>6 Days</span>  --}}
                                <a href="#" class="th-btn style2">View more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-down"><a href="#destination-sec" class="scroll-wrap"><span><img
                        src="assets/img/icon/down-arrow.svg" alt=""></span>Scroll Down</a></div>
    </div>

    <section class="category-area bg-top-center" data-bg-src="assets/img/bg/category_bg_1.png">
        <div class="container th-container">
            <div class="title-area text-center"><span class="sub-title">Your Travel Needs, Covered</span>
                <h2 class="sec-title">Our Services</h2>
            </div>
            <div class="swiper th-slider has-shadow categorySlider" id="categorySlider1"
                data-bg-src="assets/img/bg/category_bg_1.png"
                data-slider-options='{"spaceBetween": "50","breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"},"1400":{"slidesPerView":"5"}}}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="category-card single">
                            <div class="box-img global-img"><img src="assets/img/category/category_1_1.jpg"
                                    alt="Image"></div>
                            <h3 class="box-title"><a href="{{ route('airticketing') }}">Air Ticketing</a></h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="category-card single">
                            <div class="box-img global-img"><img src="assets/img/category/category_1_2.jpg"
                                    alt="Image"></div>
                            <h3 class="box-title"><a href="{{ route('travelvisa') }}">Travel Visa</a></h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="category-card single">
                            <div class="box-img global-img"><img src="assets/img/category/category_1_3.jpg"
                                    alt="Image"></div>
                            <h3 class="box-title"><a href="{{ route('travelinsurance') }}"">Travel Insurance</a></h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="category-card single">
                            <div class="box-img global-img"><img src="assets/img/category/category_1_4.jpg"
                                    alt="Image"></div>
                            <h3 class="box-title"><a href="{{ route('hotelbooking') }}">Hotel Booking</a></h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="category-card single">
                            <div class="box-img global-img"><img src="assets/img/category/category_1_5.jpg"
                                    alt="Image"></div>
                            <h3 class="box-title"><a href="{{ route('holidaypackges') }}">Holiday Packages</a></h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="category-card single">
                            <div class="box-img global-img"><img src="assets/img/category/category_1_1.jpg"
                                    alt="Image"></div>
                            <h3 class="box-title"><a href="{{ route('airticketing') }}">Air Ticketing</a></h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="category-card single">
                            <div class="box-img global-img"><img src="assets/img/category/category_1_2.jpg"
                                    alt="Image"></div>
                            <h3 class="box-title"><a href="{{ route('travelvisa') }}">Travel Visa</a></h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="category-card single">
                            <div class="box-img global-img"><img src="assets/img/category/category_1_3.jpg"
                                    alt="Image"></div>
                            <h3 class="box-title"><a href="{{ route('travelinsurance') }}"">Travel Insurance</a></h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="category-card single">
                            <div class="box-img global-img"><img src="assets/img/category/category_1_4.jpg"
                                    alt="Image"></div>
                            <h3 class="box-title"><a href="{{ route('hotelbooking') }}">Hotel Booking</a></h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="category-card single">
                            <div class="box-img global-img"><img src="assets/img/category/category_1_5.jpg"
                                    alt="Image"></div>
                            <h3 class="box-title"><a href="{{ route('holidaypackges') }}">Holiday Packages</a></h3>
                        </div>
                    </div>
                </div>
                <div class="slider-pagination"></div>
            </div>
        </div>
    </section>

    <div class="position-relative overflow-hidden">
        <div class="container">
            <div class="title-area text-center"><span class="sub-title">Top Destinations</span>
                <h2 class="sec-title">Popular Holiday Destinations</h2>
            </div>
            <div class="swiper th-slider destination-slider slider-drag-wrap" id="aboutSlider1"
                data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"}},"effect":"coverflow","coverflowEffect":{"rotate":"0","stretch":"95","depth":"212","modifier":"1"},"centeredSlides":"true"}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="destination-box gsap-cursor">
                            <div class="destination-img"><img src="assets/img/destination/destination_1_1.jpg"
                                    alt="destination image">
                                <div class="destination-content">
                                    <div class="media-left">
                                        <h4 class="box-title"><a href="#">Maldives</a></h4><span
                                            class="destination-subtitle">15 Holiday Packages</span>
                                    </div>
                                    <div class=""><a href="#" class="th-btn style2 th-icon">View Packages</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="destination-box gsap-cursor">
                            <div class="destination-img"><img src="assets/img/destination/destination_1_2.jpg"
                                    alt="destination image">
                                <div class="destination-content">
                                    <div class="media-left">
                                        <h4 class="box-title"><a href="#">Thailand</a></h4><span
                                            class="destination-subtitle">22 Holiday Packages</span>
                                    </div>
                                    <div class=""><a href="#" class="th-btn style2 th-icon">View Packages</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="destination-box gsap-cursor">
                            <div class="destination-img"><img src="assets/img/destination/destination_1_3.jpg"
                                    alt="destination image">
                                <div class="destination-content">
                                    <div class="media-left">
                                        <h4 class="box-title"><a href="#">Belgium</a></h4><span
                                            class="destination-subtitle">25 Holiday Packages</span>
                                    </div>
                                    <div class=""><a href="#" class="th-btn style2 th-icon">View Packages</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="destination-box gsap-cursor">
                            <div class="destination-img"><img src="assets/img/destination/destination_1_4.jpg"
                                    alt="destination image">
                                <div class="destination-content">
                                    <div class="media-left">
                                        <h4 class="box-title"><a href="#">Bali</a></h4><span
                                            class="destination-subtitle">28 Holiday Packages</span>
                                    </div>
                                    <div class=""><a href="#" class="th-btn style2 th-icon">View Packages</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="destination-box gsap-cursor">
                            <div class="destination-img"><img src="assets/img/destination/destination_1_5.jpg"
                                    alt="destination image">
                                <div class="destination-content">
                                    <div class="media-left">
                                        <h4 class="box-title"><a href="#">Dubai</a></h4><span
                                            class="destination-subtitle">30 Holiday Packages</span>
                                    </div>
                                    <div class=""><a href="#" class="th-btn style2 th-icon">View Packages</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about-area position-relative overflow-hidden space" id="about-sec">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="img-box1">
                        <div class="img1"><img src="assets/img/normal/about_1_1.jpg" alt="About"></div>
                        <div class="img2"><img src="assets/img/normal/about_1_2.jpg" alt="About"></div>
                        <div class="img3"><img src="assets/img/normal/about_1_3.jpg" alt="About"></div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="ps-xl-4 ms-xl-2">
                        <div class="title-area mb-20 pe-xl-5 me-xl-5"><span class="sub-title style1">Travel With
                                Confidence</span>
                            <h2 class="sec-title mb-20 pe-xl-5 me-xl-5 heading">Plan Your Journey With Cinderella</h2>
                            <p class="sec-text mb-30">Lamira Tour and Travel Agency has been crafting dream vacations
                                for 25 years, offering expert air ticketing, visa services, travel insurance, hotel
                                bookings, and bespoke holiday packages tailored to your desires.</p>
                        </div>
                        <div class="about-item-wrap">
                            <div class="about-item ">
                                <div class="about-item_img background-gradient"><img src="assets/img/icon/map3.svg" alt=""></div>
                                <div class="about-item_centent">
                                    <h5 class="box-title">Tailored Holiday Packages</h5>
                                    <p class="about-item_text">Enjoy personalized travel itineraries designed to match your
                                        preferences and budget.</p>
                                </div>
                            </div>
                            <div class="about-item">
                                <div class="about-item_img background-gradient"><img src="assets/img/icon/guide.svg" alt=""></div>
                                <div class="about-item_centent">
                                    <h5 class="box-title">Hassle-Free Travel Solutions</h5>
                                    <p class="about-item_text">From flights to visas and insurance, we handle every detail
                                        for a seamless travel experience.</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-35"><a href="#" class="th-btn style3 th-icon background-gradient">Learn More</a></div>
                    </div>
                </div>
            </div>
            <div class="shape-mockup shape1 d-none d-xl-block" data-top="12%" data-left="-16%"><img
                    src="assets/img/shape/shape_1.png" alt="shape"></div>
            <div class="shape-mockup shape2 d-none d-xl-block" data-top="20%" data-left="-16%"><img
                    src="assets/img/shape/shape_2.png" alt="shape"></div>
            <div class="shape-mockup shape3 d-none d-xl-block" data-top="14%" data-left="-10%"><img
                    src="assets/img/shape/shape_3.png" alt="shape"></div>
            <div class="shape-mockup about-shape movingX d-none d-xxl-block" data-bottom="0%" data-right="-11%"><img
                    src="assets/img/normal/about-slide-img.png" alt="shape"></div>
            <div class="shape-mockup about-rating d-none d-xxl-block" data-bottom="50%" data-right="-20%"><i
                    class="fa-sharp fa-solid fa-star"></i><span>4.9k</span></div>
            <div class="shape-mockup about-emoji d-none d-xxl-block" data-bottom="25%" data-right="5%"><img
                    src="assets/img/icon/emoji.png" alt=""></div>
        </div>
    </div>

    <div class="gallery-area">
        <div class="container th-container">
            <div class="title-area text-center"><span class="sub-title">Capture Your Travel Moments</span>
                <h2 class="sec-title">Our Travel Gallery</h2>
            </div>
            <div class="row gy-10 gx-10 justify-content-center align-items-center">
                <div class="col-md-6 col-lg-2">
                    <div class="gallery-card">
                        <div class="box-img global-img"><a href="assets/img/gallery/gallery_1_1.jpg" class="popup-image">
                                <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div><img
                                    src="assets/img/gallery/gallery_1_1.jpg" alt="gallery image">
                            </a></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="gallery-card">
                        <div class="box-img global-img"><a href="assets/img/gallery/gallery_1_2.jpg" class="popup-image">
                                <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div><img
                                    src="assets/img/gallery/gallery_1_2.jpg" alt="gallery image">
                            </a></div>
                    </div>
                    <div class="gallery-card">
                        <div class="box-img global-img"><a href="assets/img/gallery/gallery_1_3.jpg" class="popup-image">
                                <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div><img
                                    src="assets/img/gallery/gallery_1_3.jpg" alt="gallery image">
                            </a></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="gallery-card">
                        <div class="box-img global-img"><a href="assets/img/gallery/gallery_1_4.jpg" class="popup-image">
                                <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div><img
                                    src="assets/img/gallery/gallery_1_4.jpg" alt="gallery image">
                            </a></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="gallery-card">
                        <div class="box-img global-img"><a href="assets/img/gallery/gallery_1_5.jpg" class="popup-image">
                                <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div><img
                                    src="assets/img/gallery/gallery_1_5.jpg" alt="gallery image">
                            </a></div>
                    </div>
                    <div class="gallery-card">
                        <div class="box-img global-img"><a href="assets/img/gallery/gallery_1_6.jpg" class="popup-image">
                                <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div><img
                                    src="assets/img/gallery/gallery_1_6.jpg" alt="gallery image">
                            </a></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="gallery-card">
                        <div class="box-img global-img"><a href="assets/img/gallery/gallery_1_7.jpg" class="popup-image">
                                <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div><img
                                    src="assets/img/gallery/gallery_1_7.jpg" alt="gallery image">
                            </a></div>
                    </div>
                </div>
            </div>
            <div class="shape-mockup d-none d-xl-block" data-top="-25%" data-left="0%"><img
                    src="assets/img/shape/line.png" alt="shape"></div>
            <div class="shape-mockup movingX d-none d-xl-block" data-top="30%" data-left="-3%"><img class="gmovingX"
                    src="assets/img/shape/shape_4.png" alt="shape"></div>
        </div>
    </div>

    <div class="counter-area space">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xl-3 counter-card-wrap">
                    <div class="counter-card">
                        <div class="counter-shape"><span></span></div>
                        <div class="media-body">
                            <h3 class="box-number"><span class="counter-number">25</span></h3>
                            <h6 class="counter-title">Years of Experience</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 counter-card-wrap">
                    <div class="counter-card">
                        <div class="counter-shape"><span></span></div>
                        <div class="media-body">
                            <h3 class="box-number"><span class="counter-number">98</span>%</h3>
                            <h6 class="counter-title">Customer Satisfaction</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 counter-card-wrap">
                    <div class="counter-card">
                        <div class="counter-shape"><span></span></div>
                        <div class="media-body">
                            <h3 class="box-number"><span class="counter-number">10</span>k</h3>
                            <h6 class="counter-title">Successful Trips</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 counter-card-wrap">
                    <div class="counter-card">
                        <div class="counter-shape"><span></span></div>
                        <div class="media-body">
                            <h3 class="box-number"><span class="counter-number">25</span>k</h3>
                            <h6 class="counter-title">Happy Travellers</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape-mockup shape1 d-none d-xl-block" data-top="30%" data-left="-15%"><img
                    src="assets/img/shape/shape_1.png" alt="shape"></div>
            <div class="shape-mockup shape2 d-none d-xl-block" data-top="45%" data-left="-13%"><img
                    src="assets/img/shape/shape_2.png" alt="shape"></div>
            <div class="shape-mockup shape3 d-none d-xl-block" data-top="32%" data-left="-7%"><img
                    src="assets/img/shape/shape_3.png" alt="shape"></div>
            <div class="shape-mockup d-none d-xl-block" data-bottom="-24%" data-left="-15%"><img
                    src="assets/img/shape/shape_6.png" alt="shape"></div>
            <div class="shape-mockup jump d-none d-xl-block" data-top="5%" data-right="-10%"><img
                    src="assets/img/shape/shape_5.png" alt="shape"></div>
        </div>
    </div>

    <section class="testi-area overflow-hidden space" id="testi-sec">
        <div class="container-fluid p-0">
            <div class="title-area mb-20 text-center"><span class="sub-title">Testimonials</span>
                <h2 class="sec-title">What Our Clients Say About Cinderella</h2>
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
                                <p class="testi-card_text">“Lamira made our family vacation to the Maldives
                                    unforgettable. The air ticketing and hotel booking process was so smooth!”</p>
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
                                            <h3 class="box-title">Andrew Simon</h3><span class="testi-card_desig">Business
                                                Traveller</span>
                                        </div>
                                    </div>
                                    <div class="testi-card_review"><i class="fa-solid fa-star"></i> <i
                                            class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i
                                            class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></div>
                                </div>
                                <p class="testi-card_text">“Cinderella’s visa services and travel insurance gave me peace
                                    of mind during my business trip to Dubai. Exceptional service!”</p>
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
                                <p class="testi-card_text">“The holiday package to Thailand was perfectly planned by
                                    Cinderella. Everything from flights to activities was spot-on.”</p>
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
                                            <h3 class="box-title">Sophia Lee</h3><span
                                                class="testi-card_desig">Traveller</span>
                                        </div>
                                    </div>
                                    <div class="testi-card_review"><i class="fa-solid fa-star"></i> <i
                                            class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i
                                            class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></div>
                                </div>
                                <p class="testi-card_text">“Cinderella’s hotel booking service found us the perfect stay in
                                    Bali, and their travel insurance ensured we were covered.”</p>
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

    <div class="brand-area overflow-hidden space">
        <div class="container-fluid th-container space">
            <div class="title-area mb-20 text-center mb-3"><span class="sub-title">Our airline partners</span>
                <h2 class="sec-title">Explore our network of trusted airline partners</h2>
            </div>
            <div class="swiper th-slider brandSlider1" id="brandSlider1"
                data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"6"},"1400":{"slidesPerView":"8"}}}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original"
                                    src="assets/img/airlines/Aegean-Airlines-300x189.png" alt="Brand Logo"> <img
                                    class="gray" src="assets/img/airlines/Aegean-Airlines-300x189.png"
                                    alt="Brand Logo"></a></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original"
                                    src="assets/img/airlines/Air-france-300x169.png" alt="Brand Logo"> <img
                                    class="gray" src="assets/img/airlines/Air-france-300x169.png" alt="Brand Logo"></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original"
                                    src="assets/img/airlines/Air-india-300x180.png" alt="Brand Logo"> <img class="gray"
                                    src="assets/img/airlines/Air-india-300x180.png" alt="Brand Logo"></a></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original"
                                    src="assets/img/airlines/Air-peace-airlines.png" alt="Brand Logo"> <img
                                    class="gray" src="assets/img/airlines/Air-peace-airlines.png" alt="Brand Logo"></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original"
                                    src="assets/img/airlines/Air-Senegal-300x86.png" alt="Brand Logo"> <img
                                    class="gray" src="assets/img/airlines/Air-Senegal-300x86.png" alt="Brand Logo"></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original"
                                    src="assets/img/airlines/Asky-300x125.png" alt="Brand Logo"> <img class="gray"
                                    src="assets/img/airlines/Asky-300x125.png" alt="Brand Logo"></a></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original"
                                    src="assets/img/airlines/British-Airlines-300x169.png" alt="Brand Logo"> <img
                                    class="gray" src="assets/img/airlines/British-Airlines-300x169.png"
                                    alt="Brand Logo"></a></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original"
                                    src="assets/img/airlines/Brussels-airlines-300x71.png" alt="Brand Logo"> <img
                                    class="gray" src="assets/img/airlines/Brussels-airlines-300x71.png"
                                    alt="Brand Logo"></a></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original"
                                    src="assets/img/airlines/Egypt-air-300x164.png" alt="Brand Logo"> <img class="gray"
                                    src="assets/img/airlines/Egypt-air-300x164.png" alt="Brand Logo"></a></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original"
                                    src="assets/img/airlines/Emirates-airlines-300x169.png" alt="Brand Logo"> <img
                                    class="gray" src="assets/img/airlines/Emirates-airlines-300x169.png"
                                    alt="Brand Logo"></a></div>
                    </div>
                </div>
            </div>
            <div class="swiper th-slider brandSlider1" id="brandSlider1"
                data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"6"},"1400":{"slidesPerView":"8"}}}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original"
                                    src="assets/img/airlines/Ethiopia.png" alt="Brand Logo"> <img
                                    class="gray" src="assets/img/airlines/Ethiopia.png"
                                    alt="Brand Logo"></a></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original"
                                    src="assets/img/airlines/Fly-Dubai-300x169.png" alt="Brand Logo"> <img
                                    class="gray" src="assets/img/airlines/Fly-Dubai-300x169.png" alt="Brand Logo"></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original"
                                    src="assets/img/airlines/Kenya-300x200.png" alt="Brand Logo"> <img class="gray"
                                    src="assets/img/airlines/Kenya-300x200.png" alt="Brand Logo"></a></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original"
                                    src="assets/img/airlines/Klm-royal-Dutch-airlines.png" alt="Brand Logo"> <img
                                    class="gray" src="assets/img/airlines/Klm-royal-Dutch-airlines.png" alt="Brand Logo"></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original"
                                    src="assets/img/airlines/Qatar-airlines-300x102.png" alt="Brand Logo"> <img
                                    class="gray" src="assets/img/airlines/Qatar-airlines-300x102.png" alt="Brand Logo"></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original"
                                    src="assets/img/airlines/Royal-air-morroc.png" alt="Brand Logo"> <img class="gray"
                                    src="assets/img/airlines/Royal-air-morroc.png" alt="Brand Logo"></a></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original"
                                    src="assets/img/airlines/South-Africa-Airlines-300x119.png" alt="Brand Logo"> <img
                                    class="gray" src="assets/img/airlines/South-Africa-Airlines-300x119.png"
                                    alt="Brand Logo"></a></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original"
                                    src="assets/img/airlines/Tap-Portugal-air-300x53.png" alt="Brand Logo"> <img
                                    class="gray" src="assets/img/airlines/Tap-Portugal-air-300x53.png"
                                    alt="Brand Logo"></a></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original"
                                    src="assets/img/airlines/Turkish-airlines-300x81.png" alt="Brand Logo"> <img class="gray"
                                    src="assets/img/airlines/Turkish-airlines-300x81.png" alt="Brand Logo"></a></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original"
                                    src="assets/img/airlines/United-airlines.svg" alt="Brand Logo"> <img
                                    class="gray" src="assets/img/airlines/United-airlines.svg"
                                    alt="Brand Logo"></a></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original"
                                    src="assets/img/airlines/Virgin-Atlantic-300x188.png" alt="Brand Logo"> <img
                                    class="gray" src="assets/img/airlines/Virgin-Atlantic-300x188.png"
                                    alt="Brand Logo"></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="space">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="sec_title_static">
                        <div class="sec_title_wrap">
                            <div class="title-area text-center text-lg-start pe-xl-5"><span class="sub-title">Travel Tips
                                    & Insights</span>
                                <h2 class="sec-title">Latest from Cinderella’s Travel Blog</h2><a href="#"
                                    class="th-btn style4 th-icon">Read More Articles</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="blog-grid4-static-wrap">
                        <div class="col-12 blog-grid4_wrapp">
                            <div class="blog-grid4 th-ani style4 mt-24">
                                <div class="box-content">
                                    <div class="blog-meta"><a class="author" href="#">Aug 20, 2025</a> <a
                                            href="#">8 min read</a></div>
                                    <h3 class="box-title"><a href="#">How to Choose the Perfect Holiday Package for
                                            Your Family</a></h3><a href="#" class="th-btn style4 th-icon">Read
                                        More</a>
                                </div>
                                <div class="blog-img global-img"><img src="assets/img/blog/blog_9_2.jpg"
                                        alt="blog image"></div>
                            </div>
                        </div>
                        <div class="col-12 blog-grid4_wrapp">
                            <div class="blog-grid4 th-ani style4 mt-24">
                                <div class="box-content">
                                    <div class="blog-meta"><a class="author" href="#">Aug 20, 2025</a> <a
                                            href="#">8 min read</a></div>
                                    <h3 class="box-title"><a href="#">Top Tips for Hassle-Free Visa Applications</a>
                                    </h3><a href="#" class="th-btn style4 th-icon">Read More</a>
                                </div>
                                <div class="blog-img global-img"><img src="assets/img/blog/blog_9_2.jpg"
                                        alt="blog image"></div>
                            </div>
                        </div>
                        <div class="col-12 blog-grid4_wrapp">
                            <div class="blog-grid4 th-ani style4 mt-24">
                                <div class="box-content">
                                    <div class="blog-meta"><a class="author" href="#">Aug 20, 2025</a> <a
                                            href="#">8 min read</a></div>
                                    <h3 class="box-title"><a href="#">Why Travel Insurance is a Must for Every
                                            Trip</a></h3><a href="#" class="th-btn style4 th-icon">Read More</a>
                                </div>
                                <div class="blog-img global-img"><img src="assets/img/blog/blog_9_3.jpg"
                                        alt="blog image"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
