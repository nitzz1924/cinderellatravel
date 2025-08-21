@extends('frontend.layout.websitemain')
@section('content')

    <head>
        <script src="https://cdn.tailwindcss.com"></script>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap');

            html,
            body {
                font-family: 'Libre Baskerville', serif;
                overflow-x: hidden;
            }

            canvas {
                position: fixed;
                z-index: 10;
                top: 0;
                left: 0;
                pointer-events: none;
                visibility: hidden;
                opacity: 0;
            }

            .blueprint {
                position: relative;
                background-color: #1e3a8a;
                background-image: linear-gradient(rgba(255, 255, 255, 0.1) 1px, transparent 1px),
                    linear-gradient(90deg, rgba(255, 255, 255, 0.1) 1px, transparent 1px),
                    linear-gradient(rgba(255, 255, 255, 0.05) 1px, transparent 1px),
                    linear-gradient(90deg, rgba(255, 255, 255, .05) 1px, transparent 1px);
                background-size: 100px 100px, 100px 100px, 20px 20px, 20px 20px;
                background-position: -2px -2px, -2px -2px, -1px -1px, -1px -1px;
                background-attachment: fixed;
            }

            .blueprint svg {
                position: fixed;
                top: 0;
                left: 0;
                width: 100vw;
                height: 100vh;
                stroke: white;
                pointer-events: none;
                visibility: hidden;
            }

            .ground-container {
                position: relative;
                overflow: hidden;
            }

            .parallax {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: -100px;
                background-repeat: no-repeat;
                background-position: top center;
                background-size: cover;
                transform-origin: top center;
            }

            .ground {
                z-index: -1;
                background-image: url("https://assets.codepen.io/557388/background-reduced.jpg");
            }

            .clouds {
                z-index: 2;
                background-image: url("https://assets.codepen.io/557388/clouds.png");
            }

            .sunset {
                background: url("https://assets.codepen.io/557388/sunset-reduced.jpg") no-repeat top center;
                background-size: cover;
                transform-origin: top center;
            }
        </style>
    </head>

    <body class="bg-gray-100 text-gray-900">
        <div class="content relative z-10">
            <div class="loading fixed inset-0 flex items-center justify-center bg-gray-900 text-white text-2xl">Loading</div>
            <div class="trigger absolute top-0 h-full"></div>

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
                                                class="hero-text">The beauty of world</span></h1>
                                        <p class="hero-desc" data-ani="slideinup" data-ani-delay="0.5s">Tourm an
                                            international
                                            travel management company with 25 years of experience, specializing in business
                                            and
                                            maritime travel.</p>
                                        <div class="btn-group" data-ani="slideinup" data-ani-delay="0.6s"><a href="#"
                                                class="th-btn white-btn th-icon">Explore Tours</a></div>
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
                                        <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">Explore<span
                                                class="hero-text">beauty of the whole world</span></h1>
                                        <p class="hero-desc" data-ani="slideinup" data-ani-delay="0.5s">Provide a detailed
                                            itinerary of the tour, including the places you'll visit each day, any
                                            activities
                                            planned approximate times.</p>
                                        <div class="btn-group" data-ani="slideinup" data-ani-delay="0.6s"><a href="#"
                                                class="th-btn white-btn th-icon">Explore Tours</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="hero-inner">
                                <div class="th-hero-bg" data-bg-src="assets/img/hero/hero_bg_2_3.jpg"></div>
                                <div class="container">
                                    <div class="hero-style2">
                                        <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">Enjoy<span
                                                class="hero-text">The Most Enjoyable Journey</span></h1>
                                        <p class="hero-desc" data-ani="slideinup" data-ani-delay="0.5s">Tourm an
                                            international
                                            travel management company with 25 years of experience, specializing in business
                                            and
                                            maritime travel.</p>
                                        <div class="btn-group" data-ani="slideinup" data-ani-delay="0.6s"><a href="#"
                                                class="th-btn white-btn th-icon">Explore Tours</a></div>
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
                                        <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">Explore<span
                                                class="hero-text">beauty of the whole world</span></h1>
                                        <p class="hero-desc" data-ani="slideinup" data-ani-delay="0.5s">Provide a detailed
                                            itinerary of the tour, including the places you'll visit each day, any
                                            activities
                                            planned approximate times.</p>
                                        <div class="btn-group" data-ani="slideinup" data-ani-delay="0.6s"><a href="#"
                                                class="th-btn white-btn th-icon">Explore Tours</a></div>
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
                                    <div class="hero-img"><img src="assets/img/hero/hero_bg_2_1.jpg" alt="">
                                    </div>
                                    <div class="hero-card_content">
                                        <h3 class="box-title">Mountain Tour</h3>
                                        <h4 class="hero-card_price"><span class="currency">$850.00</span>/Person</h4>
                                        <span><i class="fa-light fa-clock"></i>7 Days</span> <a href="#"
                                            class="th-btn style2">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="hero-inner">
                                <div class="hero-card">
                                    <div class="hero-img"><img src="assets/img/hero/hero_bg_2_2.jpg" alt="">
                                    </div>
                                    <div class="hero-card_content">
                                        <h3 class="box-title">Yachts Tour</h3>
                                        <h4 class="hero-card_price"><span class="currency">$750.00</span>/Person</h4>
                                        <span><i class="fa-light fa-clock"></i>6 Days</span> <a href="#"
                                            class="th-btn style2">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="hero-inner">
                                <div class="hero-card">
                                    <div class="hero-img"><img src="assets/img/hero/hero_bg_2_3.jpg" alt="">
                                    </div>
                                    <div class="hero-card_content">
                                        <h3 class="box-title">Mountain Tour</h3>
                                        <h4 class="hero-card_price"><span class="currency">$850.00</span>/Person</h4>
                                        <span><i class="fa-light fa-clock"></i>7 Days</span> <a href="#"
                                            class="th-btn style2">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="hero-inner">
                                <div class="hero-card">
                                    <div class="hero-img"><img src="assets/img/hero/hero_bg_2_2.jpg" alt="">
                                    </div>
                                    <div class="hero-card_content">
                                        <h3 class="box-title">Yachts Tour</h3>
                                        <h4 class="hero-card_price"><span class="currency">$750.00</span>/Person</h4>
                                        <span><i class="fa-light fa-clock"></i>6 Days</span> <a href="#"
                                            class="th-btn style2">Book Now</a>
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
                    <div class="title-area text-center"><span class="sub-title">Wornderful Place For You</span>
                        <h2 class="sec-title">Tour Categories</h2>
                    </div>
                    <div class="swiper th-slider has-shadow categorySlider" id="categorySlider1"
                        data-bg-src="assets/img/bg/category_bg_1.png"
                        data-slider-options='{"spaceBetween": "50","breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"},"1400":{"slidesPerView":"5"}}}'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="category-card single">
                                    <div class="box-img global-img"><img src="assets/img/category/category_1_1.jpg"
                                            alt="Image">
                                    </div>
                                    <h3 class="box-title"><a href="#">Cruises</a></h3><a class="line-btn"
                                        href="#">See more</a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="category-card single">
                                    <div class="box-img global-img"><img src="assets/img/category/category_1_2.jpg"
                                            alt="Image">
                                    </div>
                                    <h3 class="box-title"><a href="#">Hiking</a></h3><a class="line-btn"
                                        href="#">See more</a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="category-card single">
                                    <div class="box-img global-img"><img src="assets/img/category/category_1_3.jpg"
                                            alt="Image">
                                    </div>
                                    <h3 class="box-title"><a href="#">Airbirds</a></h3><a class="line-btn"
                                        href="#">See more</a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="category-card single">
                                    <div class="box-img global-img"><img src="assets/img/category/category_1_4.jpg"
                                            alt="Image">
                                    </div>
                                    <h3 class="box-title"><a href="#">Wildlife</a></h3><a class="line-btn"
                                        href="#">See more</a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="category-card single">
                                    <div class="box-img global-img"><img src="assets/img/category/category_1_5.jpg"
                                            alt="Image">
                                    </div>
                                    <h3 class="box-title"><a href="#">Walking</a></h3><a class="line-btn"
                                        href="#">See more</a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="category-card single">
                                    <div class="box-img global-img"><img src="assets/img/category/category_1_1.jpg"
                                            alt="Image">
                                    </div>
                                    <h3 class="box-title"><a href="#">Cruises</a></h3><a class="line-btn"
                                        href="#">See more</a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="category-card single">
                                    <div class="box-img global-img"><img src="assets/img/category/category_1_2.jpg"
                                            alt="Image">
                                    </div>
                                    <h3 class="box-title"><a href="#">Hiking</a></h3><a class="line-btn"
                                        href="#">See more</a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="category-card single">
                                    <div class="box-img global-img"><img src="assets/img/category/category_1_3.jpg"
                                            alt="Image">
                                    </div>
                                    <h3 class="box-title"><a href="#">Airbirds</a></h3><a class="line-btn"
                                        href="#">See more</a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="category-card single">
                                    <div class="box-img global-img"><img src="assets/img/category/category_1_4.jpg"
                                            alt="Image">
                                    </div>
                                    <h3 class="box-title"><a href="#">Wildlife</a></h3><a class="line-btn"
                                        href="#">See more</a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="category-card single">
                                    <div class="box-img global-img"><img src="assets/img/category/category_1_5.jpg"
                                            alt="Image">
                                    </div>
                                    <h3 class="box-title"><a href="#">Walking</a></h3><a class="line-btn"
                                        href="#">See more</a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="category-card single">
                                    <div class="box-img global-img"><img src="assets/img/category/category_1_1.jpg"
                                            alt="Image">
                                    </div>
                                    <h3 class="box-title"><a href="#">Cruises</a></h3><a class="line-btn"
                                        href="#">See more</a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="category-card single">
                                    <div class="box-img global-img"><img src="assets/img/category/category_1_2.jpg"
                                            alt="Image">
                                    </div>
                                    <h3 class="box-title"><a href="#">Hiking</a></h3><a class="line-btn"
                                        href="#">See more</a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="category-card single">
                                    <div class="box-img global-img"><img src="assets/img/category/category_1_3.jpg"
                                            alt="Image">
                                    </div>
                                    <h3 class="box-title"><a href="#">Airbirds</a></h3><a class="line-btn"
                                        href="#">See more</a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="category-card single">
                                    <div class="box-img global-img"><img src="assets/img/category/category_1_4.jpg"
                                            alt="Image">
                                    </div>
                                    <h3 class="box-title"><a href="#">Wildlife</a></h3><a class="line-btn"
                                        href="#">See more</a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="category-card single">
                                    <div class="box-img global-img"><img src="assets/img/category/category_1_5.jpg"
                                            alt="Image">
                                    </div>
                                    <h3 class="box-title"><a href="#">Walking</a></h3><a class="line-btn"
                                        href="#">See more</a>
                                </div>
                            </div>
                        </div>
                        <div class="slider-pagination"></div>
                    </div>
                </div>
            </section>

            <div class="position-relative overflow-hidden">
                <div class="container">
                    <div class="title-area text-center"><span class="sub-title">Top Destination</span>
                        <h2 class="sec-title">Popular Destination</h2>
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
                                                    class="destination-subtitle">15 Listing</span>
                                            </div>
                                            <div class=""><a href="#" class="th-btn style2 th-icon">View
                                                    All</a></div>
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
                                                    class="destination-subtitle">22 Listing</span>
                                            </div>
                                            <div class=""><a href="#" class="th-btn style2 th-icon">View
                                                    All</a></div>
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
                                                    class="destination-subtitle">25 Listing</span>
                                            </div>
                                            <div class=""><a href="#" class="th-btn style2 th-icon">View
                                                    All</a></div>
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
                                                <h4 class="box-title"><a href="#">Island</a></h4><span
                                                    class="destination-subtitle">28 Listing</span>
                                            </div>
                                            <div class=""><a href="#" class="th-btn style2 th-icon">View
                                                    All</a></div>
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
                                                <h4 class="box-title"><a href="#">Maldives</a></h4><span
                                                    class="destination-subtitle">30 Listing</span>
                                            </div>
                                            <div class=""><a href="#" class="th-btn style2 th-icon">View
                                                    All</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="destination-box gsap-cursor">
                                    <div class="destination-img"><img src="assets/img/destination/destination_1_1.jpg"
                                            alt="destination image">
                                        <div class="destination-content">
                                            <div class="media-left">
                                                <h4 class="box-title"><a href="#">Maldives</a></h4><span
                                                    class="destination-subtitle">15 Listing</span>
                                            </div>
                                            <div class=""><a href="#" class="th-btn style2 th-icon">View
                                                    All</a></div>
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
                                                    class="destination-subtitle">22 Listing</span>
                                            </div>
                                            <div class=""><a href="#" class="th-btn style2 th-icon">View
                                                    All</a></div>
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
                                                    class="destination-subtitle">25 Listing</span>
                                            </div>
                                            <div class=""><a href="#" class="th-btn style2 th-icon">View
                                                    All</a></div>
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
                                                <h4 class="box-title"><a href="#">Island</a></h4><span
                                                    class="destination-subtitle">28 Listing</span>
                                            </div>
                                            <div class=""><a href="#" class="th-btn style2 th-icon">View
                                                    All</a></div>
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
                                                <h4 class="box-title"><a href="#">Maldives</a></h4><span
                                                    class="destination-subtitle">30 Listing</span>
                                            </div>
                                            <div class=""><a href="#" class="th-btn style2 th-icon">View
                                                    All</a></div>
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
                                <div class="title-area mb-20 pe-xl-5 me-xl-5"><span class="sub-title style1">Let’s Go
                                        Together</span>
                                    <h2 class="sec-title mb-20 pe-xl-5 me-xl-5 heading">Plan Your Trip With us</h2>
                                    <p class="sec-text mb-30">There are many variations of passages of available but the
                                        majority have suffered alteration in some form, by injected hum randomised words
                                        which
                                        don't look even slightly.</p>
                                </div>
                                <div class="about-item-wrap">
                                    <div class="about-item">
                                        <div class="about-item_img"><img src="assets/img/icon/map3.svg" alt="">
                                        </div>
                                        <div class="about-item_centent">
                                            <h5 class="box-title">Exclusive Trip</h5>
                                            <p class="about-item_text">There are many variations of passages of available
                                                but
                                                the majority.</p>
                                        </div>
                                    </div>
                                    <div class="about-item">
                                        <div class="about-item_img"><img src="assets/img/icon/guide.svg" alt="">
                                        </div>
                                        <div class="about-item_centent">
                                            <h5 class="box-title">Professional Guide</h5>
                                            <p class="about-item_text">There are many variations of passages of available
                                                but
                                                the majority.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-35"><a href="#" class="th-btn style3 th-icon">Learn More</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="shape-mockup shape1 d-none d-xl-block" data-top="12%" data-left="-16%"><img
                            src="assets/img/shape/shape_1.png" alt="shape"></div>
                    <div class="shape-mockup shape2 d-none d-xl-block" data-top="20%" data-left="-16%"><img
                            src="assets/img/shape/shape_2.png" alt="shape"></div>
                    <div class="shape-mockup shape3 d-none d-xl-block" data-top="14%" data-left="-10%"><img
                            src="assets/img/shape/shape_3.png" alt="shape"></div>
                    <div class="shape-mockup about-shape movingX d-none d-xxl-block" data-bottom="0%" data-right="-11%">
                        <img src="assets/img/normal/about-slide-img.png" alt="shape"></div>
                    <div class="shape-mockup about-rating d-none d-xxl-block" data-bottom="50%" data-right="-20%"><i
                            class="fa-sharp fa-solid fa-star"></i><span>4.9k</span></div>
                    <div class="shape-mockup about-emoji d-none d-xxl-block" data-bottom="25%" data-right="5%"><img
                            src="assets/img/icon/emoji.png" alt=""></div>
                </div>
            </div>

            <div class="gallery-area">
                <div class="container th-container">
                    <div class="title-area text-center"><span class="sub-title">Make Your Tour More Pleasure</span>
                        <h2 class="sec-title">Recent Gallery</h2>
                    </div>
                    <div class="row gy-10 gx-10 justify-content-center align-items-center">
                        <div class="col-md-6 col-lg-2">
                            <div class="gallery-card">
                                <div class="box-img global-img"><a href="assets/img/gallery/gallery_1_1.jpg"
                                        class="popup-image">
                                        <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div><img
                                            src="assets/img/gallery/gallery_1_1.jpg" alt="gallery image">
                                    </a></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-2">
                            <div class="gallery-card">
                                <div class="box-img global-img"><a href="assets/img/gallery/gallery_1_2.jpg"
                                        class="popup-image">
                                        <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div><img
                                            src="assets/img/gallery/gallery_1_2.jpg" alt="gallery image">
                                    </a></div>
                            </div>
                            <div class="gallery-card">
                                <div class="box-img global-img"><a href="assets/img/gallery/gallery_1_3.jpg"
                                        class="popup-image">
                                        <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div><img
                                            src="assets/img/gallery/gallery_1_3.jpg" alt="gallery image">
                                    </a></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-2">
                            <div class="gallery-card">
                                <div class="box-img global-img"><a href="assets/img/gallery/gallery_1_4.jpg"
                                        class="popup-image">
                                        <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div><img
                                            src="assets/img/gallery/gallery_1_4.jpg" alt="gallery image">
                                    </a></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-2">
                            <div class="gallery-card">
                                <div class="box-img global-img"><a href="assets/img/gallery/gallery_1_5.jpg"
                                        class="popup-image">
                                        <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div><img
                                            src="assets/img/gallery/gallery_1_5.jpg" alt="gallery image">
                                    </a></div>
                            </div>
                            <div class="gallery-card">
                                <div class="box-img global-img"><a href="assets/img/gallery/gallery_1_6.jpg"
                                        class="popup-image">
                                        <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div><img
                                            src="assets/img/gallery/gallery_1_6.jpg" alt="gallery image">
                                    </a></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-2">
                            <div class="gallery-card">
                                <div class="box-img global-img"><a href="assets/img/gallery/gallery_1_7.jpg"
                                        class="popup-image">
                                        <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div><img
                                            src="assets/img/gallery/gallery_1_7.jpg" alt="gallery image">
                                    </a></div>
                            </div>
                        </div>
                    </div>
                    <div class="shape-mockup d-none d-xl-block" data-top="-25%" data-left="0%"><img
                            src="assets/img/shape/line.png" alt="shape"></div>
                    <div class="shape-mockup movingX d-none d-xl-block" data-top="30%" data-left="-3%"><img
                            class="gmovingX" src="assets/img/shape/shape_4.png" alt="shape"></div>
                </div>
            </div>

            <div class="counter-area space">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-xl-3 counter-card-wrap">
                            <div class="counter-card">
                                <div class="counter-shape"><span></span></div>
                                <div class="media-body">
                                    <h3 class="box-number"><span class="counter-number">12</span></h3>
                                    <h6 class="counter-title">Years Experience</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3 counter-card-wrap">
                            <div class="counter-card">
                                <div class="counter-shape"><span></span></div>
                                <div class="media-body">
                                    <h3 class="box-number"><span class="counter-number">97</span>%</h3>
                                    <h6 class="counter-title">Retention Rate</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3 counter-card-wrap">
                            <div class="counter-card">
                                <div class="counter-shape"><span></span></div>
                                <div class="media-body">
                                    <h3 class="box-number"><span class="counter-number">8</span>k</h3>
                                    <h6 class="counter-title">Tour Completed</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3 counter-card-wrap">
                            <div class="counter-card">
                                <div class="counter-shape"><span></span></div>
                                <div class="media-body">
                                    <h3 class="box-number"><span class="counter-number">19</span>k</h3>
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
                                                <div class="testi-card_avater"><img
                                                        src="assets/img/testimonial/testi_1_1.jpg" alt="testimonial">
                                                </div>
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
                                            until I discovered Ecoland Residence. From the moment I stepped into this
                                            community,
                                            I knew it was where I wanted to live. The commitment to eco-friendly living”</p>
                                        <div class="testi-card-quote"><img src="assets/img/icon/testi-quote.svg"
                                                alt="img">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testi-card">
                                        <div class="testi-card_wrapper">
                                            <div class="testi-card_profile">
                                                <div class="testi-card_avater"><img
                                                        src="assets/img/testimonial/testi_1_2.jpg" alt="testimonial">
                                                </div>
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
                                            until I discovered Ecoland Residence. From the moment I stepped into this
                                            community,
                                            I knew it was where I wanted to live. The commitment to eco-friendly living”</p>
                                        <div class="testi-card-quote"><img src="assets/img/icon/testi-quote.svg"
                                                alt="img">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testi-card">
                                        <div class="testi-card_wrapper">
                                            <div class="testi-card_profile">
                                                <div class="testi-card_avater"><img
                                                        src="assets/img/testimonial/testi_1_1.jpg" alt="testimonial">
                                                </div>
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
                                            until I discovered Ecoland Residence. From the moment I stepped into this
                                            community,
                                            I knew it was where I wanted to live. The commitment to eco-friendly living”</p>
                                        <div class="testi-card-quote"><img src="assets/img/icon/testi-quote.svg"
                                                alt="img">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testi-card">
                                        <div class="testi-card_wrapper">
                                            <div class="testi-card_profile">
                                                <div class="testi-card_avater"><img
                                                        src="assets/img/testimonial/testi_1_2.jpg" alt="testimonial">
                                                </div>
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
                                            until I discovered Ecoland Residence. From the moment I stepped into this
                                            community,
                                            I knew it was where I wanted to live. The commitment to eco-friendly living”</p>
                                        <div class="testi-card-quote"><img src="assets/img/icon/testi-quote.svg"
                                                alt="img">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testi-card">
                                        <div class="testi-card_wrapper">
                                            <div class="testi-card_profile">
                                                <div class="testi-card_avater"><img
                                                        src="assets/img/testimonial/testi_1_1.jpg" alt="testimonial">
                                                </div>
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
                                            until I discovered Ecoland Residence. From the moment I stepped into this
                                            community,
                                            I knew it was where I wanted to live. The commitment to eco-friendly living”</p>
                                        <div class="testi-card-quote"><img src="assets/img/icon/testi-quote.svg"
                                                alt="img">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testi-card">
                                        <div class="testi-card_wrapper">
                                            <div class="testi-card_profile">
                                                <div class="testi-card_avater"><img
                                                        src="assets/img/testimonial/testi_1_1.jpg" alt="testimonial">
                                                </div>
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
                                            until I discovered Ecoland Residence. From the moment I stepped into this
                                            community,
                                            I knew it was where I wanted to live. The commitment to eco-friendly living”</p>
                                        <div class="testi-card-quote"><img src="assets/img/icon/testi-quote.svg"
                                                alt="img">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testi-card">
                                        <div class="testi-card_wrapper">
                                            <div class="testi-card_profile">
                                                <div class="testi-card_avater"><img
                                                        src="assets/img/testimonial/testi_1_2.jpg" alt="testimonial">
                                                </div>
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
                                            until I discovered Ecoland Residence. From the moment I stepped into this
                                            community,
                                            I knew it was where I wanted to live. The commitment to eco-friendly living”</p>
                                        <div class="testi-card-quote"><img src="assets/img/icon/testi-quote.svg"
                                                alt="img">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testi-card">
                                        <div class="testi-card_wrapper">
                                            <div class="testi-card_profile">
                                                <div class="testi-card_avater"><img
                                                        src="assets/img/testimonial/testi_1_1.jpg" alt="testimonial">
                                                </div>
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
                                            until I discovered Ecoland Residence. From the moment I stepped into this
                                            community,
                                            I knew it was where I wanted to live. The commitment to eco-friendly living”</p>
                                        <div class="testi-card-quote"><img src="assets/img/icon/testi-quote.svg"
                                                alt="img">
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

            <div class="brand-area overflow-hidden space-bottom">
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



            <!-- Ground Container with Parallax -->
            <div class="ground-container min-h-screen">
                <div class="parallax ground"></div>
                <section class="min-h-screen flex items-center justify-end">
                    <div class="container mx-auto px-4 text-right">
                        <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">Explore with Ease</h2>
                        <p class="text-lg md:text-xl text-white">Let us handle the details while you enjoy the journey.
                        </p>
                    </div>
                </section>
                <div class="parallax clouds"></div>
            </div>

            <!-- Blueprint Section -->
            <div class="blueprint min-h-screen text-white">
                <svg width="100%" height="100%" viewBox="0 0 100 100">
                    <line id="line-ticketing" x1="10" y1="80" x2="90" y2="80"
                        stroke-width="0.5"></line>
                    <path id="line-visa" d="M10 50, L40 35, M60 35 L90 50" stroke-width="0.5"></path>
                    <circle id="circle-insurance" cx="60" cy="60" r="15" fill="transparent"
                        stroke-width="0.5"></circle>
                </svg>
                <section class="min-h-screen flex items-center">
                    <div class="container mx-auto px-4">
                        <h2 class="text-4xl md:text-5xl font-bold mb-4">Why Choose Us?</h2>
                        <p class="text-lg md:text-xl mb-8">Expert planning, personalized service, and unbeatable prices.
                        </p>
                    </div>
                </section>
                <section class="min-h-screen flex items-center ticketing">
                    <div class="container mx-auto px-4">
                        <h2 class="text-4xl md:text-5xl font-bold mb-4">Global Reach</h2>
                        <p class="text-lg md:text-xl">From flights to hotels, we connect you to the world.</p>
                    </div>
                </section>
                <section class="min-h-screen flex items-center visa">
                    <div class="container mx-auto px-4">
                        <h2 class="text-4xl md:text-5xl font-bold mb-4">24/7 Support</h2>
                        <p class="text-lg md:text-xl">Our team is here to assist you anytime, anywhere.</p>
                    </div>
                </section>
                <section class="min-h-screen flex items-center insurance">
                    <div class="container mx-auto px-4">
                        <h2 class="text-4xl md:text-5xl font-bold mb-4">Tailored Experiences</h2>
                        <p class="text-lg md:text-xl">Customized travel plans to suit your unique needs.</p>
                    </div>
                </section>
            </div>

            <!-- Contact Section -->
            <section class="py-16 bg-gray-900 text-white">
                <div class="container mx-auto px-4 text-center">
                    <h2 class="text-4xl md:text-5xl font-bold mb-4">Contact Us</h2>
                    <p class="text-lg md:text-xl mb-8">Ready to plan your next adventure? Get in touch!</p>
                    <ul class="space-y-4">
                        <li><a href="mailto:info@cinderellatravel.com"
                                class="underline hover:text-blue-400">info@cinderellatravel.com</a></li>
                        <li><a href="tel:+1234567890" class="underline hover:text-blue-400">+1 (234) 567-890</a></li>
                        <li><a href="https://cinderellatravel.com"
                                class="underline hover:text-blue-400">cinderellatravel.com</a></li>
                    </ul>
                </div>
            </section>

            <!-- Sunset Section -->
            <div class="sunset min-h-screen">
                <section class="min-h-screen"></section>
                <section class="min-h-screen flex items-center end">
                    <div class="container mx-auto px-4 text-center">
                        <h2 class="text-4xl md:text-5xl font-bold text-white">Start Your Journey Today</h2>
                    </div>
                </section>
            </div>
        </div>

        <script src="https://codepen.io/steveg3003/pen/zBVakw.js"></script>
        <script src="https://unpkg.com/three@0.117.1/build/three.min.js"></script>
        <script src="https://unpkg.com/three@0.117.1/examples/js/loaders/OBJLoader.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.1/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.1/ScrollTrigger.min.js"></script>
        <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/DrawSVGPlugin3.min.js"></script>

        <script>
            console.clear();

            class Scene {
                constructor(model) {
                    this.views = [{
                        bottom: 0,
                        height: 1
                    }, {
                        bottom: 0,
                        height: 0
                    }];
                    this.renderer = new THREE.WebGLRenderer({
                        antialias: true,
                        alpha: true
                    });
                    this.renderer.setSize(window.innerWidth, window.innerHeight);
                    this.renderer.shadowMap.enabled = true;
                    this.renderer.shadowMap.type = THREE.PCFSoftShadowMap;
                    this.renderer.setPixelRatio(window.devicePixelRatio);
                    document.body.appendChild(this.renderer.domElement);

                    this.scene = new THREE.Scene();
                    for (var ii = 0; ii < this.views.length; ++ii) {
                        var view = this.views[ii];
                        var camera = new THREE.PerspectiveCamera(45, window.innerWidth / window.innerHeight, 1, 2000);
                        camera.position.fromArray([0, 0, 180]);
                        camera.layers.disableAll();
                        camera.layers.enable(ii);
                        view.camera = camera;
                        camera.lookAt(new THREE.Vector3(0, 5, 0));
                    }

                    this.light = new THREE.PointLight(0xffffff, 0.75);
                    this.light.position.z = 150;
                    this.light.position.x = 70;
                    this.light.position.y = -20;
                    this.scene.add(this.light);

                    this.softLight = new THREE.AmbientLight(0xffffff, 1.5);
                    this.scene.add(this.softLight);

                    this.onResize();
                    window.addEventListener('resize', this.onResize, false);

                    var edges = new THREE.EdgesGeometry(model.children[0].geometry);
                    let line = new THREE.LineSegments(edges);
                    line.material.depthTest = false;
                    line.material.opacity = 0.5;
                    line.material.transparent = true;
                    line.position.x = 0.5;
                    line.position.z = -1;
                    line.position.y = 0.2;

                    this.modelGroup = new THREE.Group();
                    model.layers.set(0);
                    line.layers.set(1);
                    this.modelGroup.add(model);
                    this.modelGroup.add(line);
                    this.scene.add(this.modelGroup);
                }

                render = () => {
                    for (var ii = 0; ii < this.views.length; ++ii) {
                        var view = this.views[ii];
                        var camera = view.camera;
                        var bottom = Math.floor(this.h * view.bottom);
                        var height = Math.floor(this.h * view.height);
                        this.renderer.setViewport(0, 0, this.w, this.h);
                        this.renderer.setScissor(0, bottom, this.w, height);
                        this.renderer.setScissorTest(true);
                        camera.aspect = this.w / this.h;
                        this.renderer.render(this.scene, camera);
                    }
                }

                onResize = () => {
                    this.w = window.innerWidth;
                    this.h = window.innerHeight;
                    for (var ii = 0; ii < this.views.length; ++ii) {
                        var view = this.views[ii];
                        var camera = view.camera;
                        camera.aspect = this.w / this.h;
                        let camZ = (screen.width - (this.w * 1)) / 3;
                        camera.position.z = camZ < 180 ? 180 : camZ;
                        camera.updateProjectionMatrix();
                    }
                    this.renderer.setSize(this.w, this.h);
                    this.render();
                }
            }

            function loadModel() {
                gsap.registerPlugin(ScrollTrigger);
                gsap.registerPlugin(DrawSVGPlugin);
                gsap.set('#line-ticketing', {
                    drawSVG: 0
                });
                gsap.set('#line-visa', {
                    drawSVG: 0
                });
                gsap.set('#circle-insurance', {
                    drawSVG: 0
                });

                var object;

                function onModelLoaded() {
                    object.traverse(function(child) {
                        let mat = new THREE.MeshPhongMaterial({
                            color: 0x171511,
                            specular: 0xD0CBC7,
                            shininess: 5,
                            flatShading: true
                        });
                        child.material = mat;
                    });
                    setupAnimation(object);
                }

                var manager = new THREE.LoadingManager(onModelLoaded);
                manager.onProgress = (item, loaded, total) => console.log(item, loaded, total);

                var loader = new THREE.OBJLoader(manager);
                loader.load('https://assets.codepen.io/557388/1405+Plane_1.obj', function(obj) {
                    object = obj;
                });
            }

            function setupAnimation(model) {
                let scene = new Scene(model);
                let plane = scene.modelGroup;

                gsap.fromTo('canvas', {
                    x: "50%",
                    autoAlpha: 0
                }, {
                    duration: 1,
                    x: "0%",
                    autoAlpha: 1
                });
                gsap.to('.loading', {
                    autoAlpha: 0
                });
                gsap.to('.scroll-cta', {
                    opacity: 1
                });
                gsap.set('svg', {
                    autoAlpha: 1
                });

                let tau = Math.PI * 2;
                gsap.set(plane.rotation, {
                    y: tau * -.25
                });
                gsap.set(plane.position, {
                    x: 80,
                    y: -32,
                    z: -60
                });

                scene.render();

                var sectionDuration = 1;
                gsap.fromTo(scene.views[1], {
                    height: 1,
                    bottom: 0
                }, {
                    height: 0,
                    bottom: 1,
                    ease: 'none',
                    scrollTrigger: {
                        trigger: ".blueprint",
                        scrub: true,
                        start: "bottom bottom",
                        end: "bottom top"
                    }
                });

                gsap.fromTo(scene.views[1], {
                    height: 0,
                    bottom: 0
                }, {
                    height: 1,
                    bottom: 0,
                    ease: 'none',
                    scrollTrigger: {
                        trigger: ".blueprint",
                        scrub: true,
                        start: "top bottom",
                        end: "top top"
                    }
                });

                gsap.to('.ground', {
                    y: "30%",
                    scrollTrigger: {
                        trigger: ".ground-container",
                        scrub: true,
                        start: "top bottom",
                        end: "bottom top"
                    }
                });

                gsap.from('.clouds', {
                    y: "25%",
                    scrollTrigger: {
                        trigger: ".ground-container",
                        scrub: true,
                        start: "top bottom",
                        end: "bottom top"
                    }
                });

                gsap.to('#line-ticketing', {
                    drawSVG: 100,
                    scrollTrigger: {
                        trigger: ".ticketing",
                        scrub: true,
                        start: "top bottom",
                        end: "top top"
                    }
                });

                gsap.to('#line-visa', {
                    drawSVG: 100,
                    scrollTrigger: {
                        trigger: ".visa",
                        scrub: true,
                        start: "top 25%",
                        end: "bottom 50%"
                    }
                });

                gsap.to('#circle-insurance', {
                    drawSVG: 100,
                    scrollTrigger: {
                        trigger: ".insurance",
                        scrub: true,
                        start: "top 50%",
                        end: "bottom 100%"
                    }
                });

                gsap.to('#line-ticketing', {
                    opacity: 0,
                    drawSVG: 0,
                    scrollTrigger: {
                        trigger: ".ticketing",
                        scrub: true,
                        start: "top top",
                        end: "bottom top"
                    }
                });

                gsap.to('#line-visa', {
                    opacity: 0,
                    drawSVG: 0,
                    scrollTrigger: {
                        trigger: ".visa",
                        scrub: true,
                        start: "top top",
                        end: "bottom top"
                    }
                });

                gsap.to('#circle-insurance', {
                    opacity: 0,
                    drawSVG: 0,
                    scrollTrigger: {
                        trigger: ".insurance",
                        scrub: true,
                        start: "top top",
                        end: "bottom top"
                    }
                });

                let tl = new gsap.timeline({
                    onUpdate: scene.render,
                    scrollTrigger: {
                        trigger: ".content",
                        scrub: true,
                        start: "top top",
                        end: "bottom bottom"
                    },
                    defaults: {
                        duration: sectionDuration,
                        ease: 'power2.inOut'
                    }
                });

                let delay = 0;
                tl.to('.scroll-cta', {
                    duration: 0.25,
                    opacity: 0
                }, delay);
                tl.to(plane.position, {
                    x: -10,
                    ease: 'power1.in'
                }, delay);
                delay += sectionDuration;

                tl.to(plane.rotation, {
                    x: tau * .25,
                    y: 0,
                    z: -tau * 0.05,
                    ease: 'power1.inOut'
                }, delay);
                tl.to(plane.position, {
                    x: -40,
                    y: 0,
                    z: -60,
                    ease: 'power1.inOut'
                }, delay);
                delay += sectionDuration;

                tl.to(plane.rotation, {
                    x: tau * .25,
                    y: 0,
                    z: tau * 0.05,
                    ease: 'power3.inOut'
                }, delay);
                tl.to(plane.position, {
                    x: 40,
                    y: 0,
                    z: -60,
                    ease: 'power2.inOut'
                }, delay);
                delay += sectionDuration;

                tl.to(plane.rotation, {
                    x: tau * .2,
                    y: 0,
                    z: -tau * 0.1,
                    ease: 'power3.inOut'
                }, delay);
                tl.to(plane.position, {
                    x: -40,
                    y: 0,
                    z: -30,
                    ease: 'power2.inOut'
                }, delay);
                delay += sectionDuration;

                tl.to(plane.rotation, {
                    x: 0,
                    z: 0,
                    y: tau * .25
                }, delay);
                tl.to(plane.position, {
                    x: 0,
                    y: -10,
                    z: 50
                }, delay);
                delay += sectionDuration;
                delay += sectionDuration;

                tl.to(plane.rotation, {
                    x: tau * 0.25,
                    y: tau * .5,
                    z: 0,
                    ease: 'power4.inOut'
                }, delay);
                tl.to(plane.position, {
                    z: 30,
                    ease: 'power4.inOut'
                }, delay);
                delay += sectionDuration;

                tl.to(plane.rotation, {
                    x: tau * 0.25,
                    y: tau * .5,
                    z: 0,
                    ease: 'power4.inOut'
                }, delay);
                tl.to(plane.position, {
                    z: 60,
                    x: 30,
                    ease: 'power4.inOut'
                }, delay);
                delay += sectionDuration;

                tl.to(plane.rotation, {
                    x: tau * 0.35,
                    y: tau * .75,
                    z: tau * 0.6,
                    ease: 'power4.inOut'
                }, delay);
                tl.to(plane.position, {
                    z: 100,
                    x: 20,
                    y: 0,
                    ease: 'power4.inOut'
                }, delay);
                delay += sectionDuration;

                tl.to(plane.rotation, {
                    x: tau * 0.15,
                    y: tau * .85,
                    z: -tau * 0,
                    ease: 'power1.in'
                }, delay);
                tl.to(plane.position, {
                    z: -150,
                    x: 0,
                    y: 0,
                    ease: 'power1.inOut'
                }, delay);
                delay += sectionDuration;

                tl.to(plane.rotation, {
                    duration: sectionDuration,
                    x: -tau * 0.05,
                    y: tau,
                    z: -tau * 0.1,
                    ease: 'none'
                }, delay);
                tl.to(plane.position, {
                    duration: sectionDuration,
                    x: 0,
                    y: 30,
                    z: 320,
                    ease: 'power1.in'
                }, delay);
                tl.to(scene.light.position, {
                    duration: sectionDuration,
                    x: 0,
                    y: 0,
                    z: 0
                }, delay);
            }

            loadModel();
        </script>
    </body>
@endsection
