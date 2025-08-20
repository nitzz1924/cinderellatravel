@extends('frontend.layout.websitemain')
@section('content')
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.jpg') }}" data-aos="fade-down"
        data-aos-delay="100">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Canada Tourism</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Destination</li>
                    <li>Canada</li>
                </ul>
            </div>
        </div>
    </div>

    <section class="space">
        <div class="container">
            <div class="row">
                <div class="tour-page-single">
                    <h2 class="box-title" data-aos="fade-up" data-aos-delay="200">Canada Tourist Places</h2>
                    <div class="row">
                        <div class="col-xxl-6" data-aos="zoom-in" data-aos-delay="300">
                            <div class="slider-area tour-slider1">
                                <div class="swiper th-slider mb-4" id="tourSlider4"
                                    data-slider-options='{"effect":"fade","loop":true,"thumbs":{"swiper":".tour-thumb-slider"},"autoplayDisableOnInteraction":"true"}'>
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="tour-slider-img"><img
                                                    src="{{ asset('assets/img/destination/canada/NiagaraFalls.webp') }}"
                                                    alt="Niagara Falls"></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tour-slider-img"><img
                                                    src="{{ asset('assets/img/destination/canada/JasperNationalPark.webp') }}"
                                                    alt="Jasper National Park"></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tour-slider-img"><img
                                                    src="{{ asset('assets/img/destination/canada/BanffNationalPark.webp') }}"
                                                    alt="Banff National Park"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper th-slider tour-thumb-slider"
                                    data-slider-options='{"effect":"slide","loop":true,"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"}},"autoplayDisableOnInteraction":"true"}'>
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="tour-slider-img"><img
                                                    src="{{ asset('assets/img/destination/canada/NiagaraFalls.webp') }}"
                                                    alt="Niagara Falls"></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tour-slider-img"><img
                                                    src="{{ asset('assets/img/destination/canada/JasperNationalPark.webp') }}"
                                                    alt="Jasper National Park"></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tour-slider-img"><img
                                                    src="{{ asset('assets/img/destination/canada/BanffNationalPark.webp') }}"
                                                    alt="Banff National Park"></div>
                                        </div>
                                    </div>
                                </div>
                                <button data-slider-prev="#tourSlider4" class="slider-arrow style3 slider-prev"
                                    data-aos="fade-left" data-aos-delay="400"><img
                                        src="{{ asset('assets/img/icon/hero-arrow-left.svg') }}" alt="Previous"></button>
                                <button data-slider-next="#tourSlider4" class="slider-arrow style3 slider-next"
                                    data-aos="fade-right" data-aos-delay="400"><img
                                        src="{{ asset('assets/img/icon/hero-arrow-right.svg') }}" alt="Next"></button>
                            </div>
                        </div>
                        <div class="col-xxl-6 ps-4">
                            <p class="box-text mb-30" data-aos="fade-up" data-aos-delay="500">
                                Canada is home to countless breathtaking destinations—from Niagara Falls, Banff, and Jasper National Park to vibrant cities like Vancouver, Toronto, Montreal, and Quebec City. Visitors can also explore unique spots such as Peggy’s Cove, Gros Morne National Park, Okanagan Valley, and the icy wonder of Athabasca Glacier.
                            </p>
                            <p class="box-text mb-30" data-aos="fade-up" data-aos-delay="600">
                                Brimming with natural beauty, rich heritage sites, and fascinating museums, Canada offers travelers a perfect blend of history, culture, and adventure. Whether marveling at timeless architectural gems or venturing into pristine wilderness, every destination promises an unforgettable escape from everyday life.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="position-relative overflow-hidden bg-top-center space my-5" id="destination-sec"
        data-bg-src="{{ asset('assets/img/bg/destination_bg_1.png') }}">
        <div class="container">
            <div class="title-area text-center" data-aos="fade-up" data-aos-delay="100">
                <span class="sub-title text-white">Top Spot</span>
                <h2 class="sec-title text-white">Discover Our Destinations</h2>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider has-shadow" id="destinationSlider6"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"},"1300":{"slidesPerView":"3"}}}'
                    data-aos="zoom-in" data-aos-delay="200">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" data-aos="fade-up" data-aos-delay="200">
                            <div class="destination-item2 th-ani">
                                <div class="box-img global-img"><img
                                        src="{{ asset('assets/img/destination/canada/NiagaraFalls.webp') }}"
                                        alt="Niagara Falls"></div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="#">Niagara Falls</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-aos="fade-up" data-aos-delay="300">
                            <div class="destination-item2 th-ani">
                                <div class="box-img global-img"><img
                                        src="{{ asset('assets/img/destination/canada/JasperNationalPark.webp') }}" alt="Jasper National Park">
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="#">Jasper National Park</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-aos="fade-up" data-aos-delay="400">
                            <div class="destination-item2 th-ani">
                                <div class="box-img global-img"><img
                                        src="{{ asset('assets/img/destination/canada/BanffNationalPark.webp') }}" alt="Banff National Park">
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="#">Banff National Park</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-aos="fade-up" data-aos-delay="500">
                            <div class="destination-item2 th-ani">
                                <div class="box-img global-img"><img
                                        src="{{ asset('assets/img/destination/canada/Vancouver.webp') }}" alt="Vancouver"></div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="#">Vancouver</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-aos="fade-up" data-aos-delay="600">
                            <div class="destination-item2 th-ani">
                                <div class="box-img global-img"><img
                                        src="{{ asset('assets/img/destination/canada/QuebecCity.webp') }}" alt="Quebec City">
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="#">Quebec City</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button data-slider-prev="#destinationSlider6" class="slider-arrow slider-prev" data-aos="fade-left"
                        data-aos-delay="3700"><img src="{{ asset('assets/img/icon/right-arrow2.svg') }}"
                            alt="Previous"></button>
                    <button data-slider-next="#destinationSlider6" class="slider-arrow slider-next" data-aos="fade-right"
                        data-aos-delay="3700"><img src="{{ asset('assets/img/icon/left-arrow2.svg') }}"
                            alt="Next"></button>
                </div>
            </div>
        </div>
    </section>

    <div class="my-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="title-area text-center pe-xl-4 ps-xl-4" data-aos="fade-up" data-aos-delay="3800">
                        <span class="sub-title">Best Places For You</span>
                        <h2 class="sec-title mb-20">Most Popular Locations</h2>
                        <p class="sec-text"></p>
                    </div>
                </div>
            </div>

            {{-- Niagara Falls --}}
            <div class="row gx-60 gy-30 mb-60 align-items-center">
                <div class="col-lg-5" data-aos="fade-left" data-aos-delay="3900">
                    <div class="resort-image global-img"><img
                            src="{{ asset('assets/img/destination/canada/NiagaraFalls.webp') }}" alt="Niagara Falls"></div>
                </div>
                <div class="col-lg-7">
                    <div class="resort-content" data-aos="fade-right" data-aos-delay="4000">
                        <h3 class="box-title"><a href="#">Niagara Falls</a></h3>
                        <p class="resort-text">One of the world’s most spectacular natural wonders, Niagara Falls draws millions of visitors each year with its breathtaking views and thunderous cascades. Tourists can admire the falls from observation towers, take a thrilling boat ride close to the rushing waters, or simply enjoy the mesmerizing beauty from various viewpoints along the Niagara Parkway.</p>
                        <p class="resort-text">Beyond the falls, the surrounding area offers plenty of attractions, including luxury hotels, local shops, museums, water parks, and theaters, making it a complete destination for leisure and exploration.</p>
                        
                        <div class="resort-btn mt-40"><a href="{{ route('contactus') }}"
                                class="th-btn style4 th-icon">Book Now</a></div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="4100">
                    <p class="resort-text">📍 Location: Niagara Falls, Ontario, Canada</p>
                        <p class="resort-text">✨ Highlights: Majestic waterfalls, observation decks, boat tours, vibrant nearby attractions</p>
                </div>
            </div>

            {{-- Jasper National Park --}}
            <div class="row gx-60 gy-30 mb-60 align-items-center">
                <div class="col-lg-7">
                    <div class="resort-content" data-aos="fade-left" data-aos-delay="4200">
                        <h3 class="box-title"><a href="#">Jasper National Park</a></h3>
                        <p class="resort-text">Nestled in the heart of the Canadian Rockies, Jasper National Park is a breathtaking UNESCO World Heritage Site that showcases pristine wilderness, towering snow-capped peaks, and massive glaciers. Visitors can explore scenic hiking trails, marvel at turquoise lakes, and soak in the spectacular mountain landscapes that make Jasper a nature lover’s paradise.</p>
                        <p class="resort-text">For adventure seekers, the park offers year-round activities such as hiking, skiing, camping, river rafting, and thrilling wildlife safaris. From serene stargazing experiences under one of the world’s largest dark sky preserves to adrenaline-packed excursions, Jasper promises an unforgettable journey into Canada’s wild beauty.</p>
                        <div class="resort-btn mt-40"><a href="{{ route('contactus') }}"
                                class="th-btn style4 th-icon">Book Now</a></div>
                    </div>
                </div>
                <div class="col-lg-5" data-aos="fade-right" data-aos-delay="4300">
                    <div class="resort-image global-img"><img
                            src="{{ asset('assets/img/destination/canada/JasperNationalPark.webp') }}" alt="Jasper National Park"></div>
                </div>
                <div data-aos="fade-up" data-aos-delay="4400">
                    <p class="resort-text">📍 Location: Jasper, Alberta, Canada</p>
                    <p class="resort-text">✨ Highlights: Hiking, skiing, camping, wildlife safaris, glacier and mountain views</p>
                </div>
            </div>

            {{-- Banff National Park --}}
            <div class="row gx-60 gy-30 mb-60 align-items-center">
                <div class="col-lg-5" data-aos="fade-left" data-aos-delay="4500">
                    <div class="resort-image global-img"><img
                            src="{{ asset('assets/img/destination/canada/BanffNationalPark.webp') }}" alt="Banff National Park"></div>
                </div>
                <div class="col-lg-7">
                    <div class="resort-content" data-aos="fade-right" data-aos-delay="4600">
                        <h3 class="box-title"><a href="#">Banff National Park</a></h3>
                        <p class="resort-text">As Canada’s first national park and a UNESCO World Heritage Site, Banff National Park is a jewel of the Rocky Mountains, drawing travelers from across the globe. The park is renowned for its turquoise glacier-fed lakes, rugged peaks, and sweeping alpine meadows that create postcard-perfect landscapes at every turn.</p>
                        <p class="resort-text">Visitors can wander through charming mountain villages, encounter diverse wildlife in lush forests, and marvel at the pristine glaciers that crown the region. Adventure lovers will find endless opportunities here, from hiking and biking along scenic trails to camping under starry skies, skiing down powdery slopes, and exploring crystal-clear lakes by canoe.</p>
                        <div class="resort-btn mt-40"><a href="{{ route('contactus') }}"
                                class="th-btn style4 th-icon">Book Now</a></div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="4700">
                    <p class="resort-text">📍 Location: 91 Banff Ave, Banff, AB T1L 1K2, Canada</p>
                    <p class="resort-text">✨ Highlights: Stunning glacier-fed lakes, rich wildlife, and year-round adventure activities</p>
                </div>
            </div>

            {{-- Vancouver --}}
            <div class="row gx-60 gy-30 mb-60 align-items-center">
                <div class="col-lg-7">
                    <div class="resort-content" data-aos="fade-left" data-aos-delay="4800">
                        <h3 class="box-title"><a href="#">Vancouver</a></h3>
                        <p class="resort-text">A vibrant west coast seaport and Canada’s most populous city on the Pacific, Vancouver is celebrated for its breathtaking blend of urban charm and natural beauty. Nestled between the ocean and the mountains, the city offers a lively atmosphere with stunning skylines, multicultural neighborhoods, and world-class dining.</p>
                        <p class="resort-text">Adventure seekers will find endless opportunities here—whether it’s skiing and snowboarding on nearby peaks, kayaking along the coastline, or exploring scenic trails perfect for hiking and summer camping. Visitors can also enjoy fishing, golfing, mountain zip-lining, and a wide variety of water sports, making Vancouver a year-round destination that perfectly balances excitement and relaxation.</p>
                        <div class="resort-btn mt-40"><a href="{{ route('contactus') }}"
                                class="th-btn style4 th-icon">Book Now</a></div>
                    </div>
                </div>
                <div class="col-lg-5" data-aos="fade-right" data-aos-delay="4900">
                    <div class="resort-image global-img"><img src="{{ asset('assets/img/destination/canada/Vancouver.webp') }}"
                            alt="Vancouver"></div>
                </div>
                <div data-aos="fade-up" data-aos-delay="5000">
                    <p class="resort-text">📍 Location: West Coast seaport in British Columbia, Canada</p>
                    <p class="resort-text">✨ Highlights: Diverse outdoor adventures, vibrant cityscapes, and coastal mountain views</p>
                </div>
            </div>

            {{-- Quebec City --}}
            <div class="row gx-60 gy-30 mb-60 align-items-center">
                <div class="col-lg-5" data-aos="fade-left" data-aos-delay="5100">
                    <div class="resort-image global-img"><img
                            src="{{ asset('assets/img/destination/canada/QuebecCity.webp') }}" alt="Quebec City"></div>
                </div>
                <div class="col-lg-7">
                    <div class="resort-content" data-aos="fade-right" data-aos-delay="5200">
                        <h3 class="box-title"><a href="#">Quebec City</a></h3>
                        <p class="resort-text">A charming blend of history, culture, and adventure, Quebec City is one of Canada’s most iconic destinations and a true gateway to the country’s French heritage. Perched along the scenic Saint Lawrence River, the city is known for its cobblestone streets, centuries-old architecture, and a rich European ambiance that makes it feel like stepping back in time.</p>
                        <p class="resort-text">Winter is the peak season here, transforming the city into a magical snowy wonderland. Visitors can enjoy thrilling skiing adventures in the surrounding mountains, as well as snow sports and festive winter carnivals. Beyond adventure, Quebec City offers a vibrant range of cultural attractions, museums, and historic landmarks—most notably the iconic Château Frontenac, often regarded as the most photographed hotel in the world.</p>
                        <div class="resort-btn mt-40"><a href="{{ route('contactus') }}"
                                class="th-btn style4 th-icon">Book Now</a></div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="5300">
                    <p class="resort-text">📍 Location: Saint Lawrence River, Canada</p>
                    <p class="resort-text">✨ Highlights: Historic landmarks, snowy adventures, and rich French-Canadian culture</p>
                </div>
            </div>
        </div>
    </div>

    <section class="space">
        <div class="container">
            <div class="destination-area6 position-relative overflow-hidden space">
                <div class="container th-container">
                    <div class="title-area text-center" data-aos="fade-up" data-aos-delay="6000">
                        <span class="sub-title">Our Gallery</span>
                        <h2 class="sec-title">A Simply Amazing Experience</h2>
                    </div>
                    <div class="slider-area">
                        <div class="swiper th-slider destination-slider2 slider-drag-wrap" id="destiSlider1"
                            data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"}},"effect":"coverflow","coverflowEffect":{"rotate":"-17","stretch":"-8","depth":"330","modifier":"1","slideShadows":"false"},"centeredSlides":"true"}'
                            data-aos="zoom-in" data-aos-delay="6100">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide" data-aos="fade-up" data-aos-delay="6200">
                                    <div class="destination-box2 gsap-cursor">
                                        <div class="destination-img"><img
                                                src="{{ asset('assets/img/destination/canada/NiagaraFalls.webp') }}"
                                                alt="Niagara Falls">
                                            <a href="{{ asset('assets/img/destination/canada/NiagaraFalls.webp') }}"
                                                class="popup-image">
                                                <div class="icon-btn"><i class="fas fa-search-plus"></i></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-aos="fade-up" data-aos-delay="6300">
                                    <div class="destination-box2 gsap-cursor">
                                        <div class="destination-img"><img
                                                src="{{ asset('assets/img/destination/canada/JasperNationalPark.webp') }}"
                                                alt="Jasper National Park">
                                            <a href="{{ asset('assets/img/destination/canada/JasperNationalPark.webp') }}"
                                                class="popup-image">
                                                <div class="icon-btn"><i class="fas fa-search-plus"></i></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-aos="fade-up" data-aos-delay="6400">
                                    <div class="destination-box2 gsap-cursor">
                                        <div class="destination-img"><img
                                                src="{{ asset('assets/img/destination/canada/BanffNationalPark.webp') }}"
                                                alt="Banff National Park">
                                            <a href="{{ asset('assets/img/destination/canada/BanffNationalPark.webp') }}"
                                                class="popup-image">
                                                <div class="icon-btn"><i class="fas fa-search-plus"></i></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-aos="fade-up" data-aos-delay="6500">
                                    <div class="destination-box2 gsap-cursor">
                                        <div class="destination-img"><img
                                                src="{{ asset('assets/img/destination/canada/Vancouver.webp') }}"
                                                alt="Vancouver">
                                            <a href="{{ asset('assets/img/destination/canada/Vancouver.webp') }}"
                                                class="popup-image">
                                                <div class="icon-btn"><i class="fas fa-search-plus"></i></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-aos="fade-up" data-aos-delay="6600">
                                    <div class="destination-box2 gsap-cursor">
                                        <div class="destination-img"><img
                                                src="{{ asset('assets/img/destination/canada/QuebecCity.webp') }}"
                                                alt="Quebec City">
                                            <a href="{{ asset('assets/img/destination/canada/QuebecCity.webp') }}"
                                                class="popup-image">
                                                <div class="icon-btn"><i class="fas fa-search-plus"></i></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="icon-box mt-60 text-center" data-aos="fade-up" data-aos-delay="6900">
                            <button data-slider-prev="#destiSlider1" class="slider-arrow style5 default"><img
                                    src="{{ asset('assets/img/icon/right-arrow2.svg') }}" alt="Previous"></button>
                            <button data-slider-next="#destiSlider1" class="slider-arrow style5 default"><img
                                    src="{{ asset('assets/img/icon/left-arrow2.svg') }}" alt="Next"></button>
                        </div>
                    </div>
                    <div class="shape-mockup shape1 d-none d-xxl-block" data-top="7%" data-right="-9%"
                        data-aos="fade-right" data-aos-delay="7000"><img
                            src="{{ asset('assets/img/shape/shape_1.png') }}" alt="shape"></div>
                    <div class="shape-mockup shape2 d-none d-xl-block" data-top="12%" data-right="-5%"
                        data-aos="fade-right" data-aos-delay="7100"><img
                            src="{{ asset('assets/img/shape/shape_2.png') }}" alt="shape"></div>
                    <div class="shape-mockup shape3 d-none d-xxl-block" data-top="15%" data-right="-9%"
                        data-aos="fade-right" data-aos-delay="7200"><img
                            src="{{ asset('assets/img/shape/shape_3.png') }}" alt="shape"></div>
                    <div class="shape-mockup spin d-none d-xxl-block" data-top="10%" data-left="-12%"
                        data-aos="fade-left" data-aos-delay="7300"><img
                            src="{{ asset('assets/img/shape/shape_2_7.png') }}" alt="shape"></div>
                    <div class="shape-mockup jump d-none d-xxl-block" data-bottom="-5%" data-left="-13%"
                        data-aos="fade-left" data-aos-delay="7400"><img
                            src="{{ asset('assets/img/shape/shape_2_8.png') }}" alt="shape"></div>
                    <div class="shape-mockup movingX d-none d-xxl-block" data-bottom="19%" data-right="-7%"
                        data-aos="fade-right" data-aos-delay="7500"><img
                            src="{{ asset('assets/img/shape/shape_2_9.png') }}" alt="shape"></div>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-top-center space-top overflow-hidden" data-bg-src="{{ asset('assets/img/bg/contact_bg_3.jpg') }}">
        <div class="container">
            <div class="row gy-4 justify-content-between flex-row-reverse">
                <div class="col-lg-6">
                    <div class="pt-75 ps-xl-5 ms-xl-5" data-aos="fade-left" data-aos-delay="7600">
                        <div class="title-area mb-10">
                            <span class="sub-title text-white">Get in Touch</span>
                            <h2 class="sec-title text-white">Hi there! What can I do for you today?</h2>
                            <p class="text-white mb-0">We’d love to hear from you. Our friendly team is always here to
                                chat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form-area2 pe-xl-5" data-aos="fade-right" data-aos-delay="7700">
                        <form action="#" method="POST" class="contact-form2 ajax-contact">
                            @csrf
                            <div class="row">
                                <div class="form-group col-12" data-aos="fade-up" data-aos-delay="7800">
                                    <input type="text" class="form-control" name="name" id="name3"
                                        placeholder="First Name">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div class="form-group col-12" data-aos="fade-up" data-aos-delay="7900">
                                    <input type="email" class="form-control" name="email" id="email3"
                                        placeholder="Your Mail">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="form-group col-12" data-aos="fade-up" data-aos-delay="8000">
                                    <input type="text" class="form-control" name="destination" id="destination3"
                                        placeholder="Your Destination">
                                    <i class="fas fa-globe"></i>
                                </div>
                                <div class="form-group col-12" data-aos="fade-up" data-aos-delay="8100">
                                    <select name="subject" id="subject" class="form-select nice-select">
                                        <option value="Select Service Type" selected="selected" disabled="disabled">
                                            Select Service Type</option>
                                        <option value="Air Ticketing">Air Ticketing</option>
                                        <option value="Travel Visa">Travel Visa</option>
                                        <option value="Travel Insurance">Travel Insurance</option>
                                        <option value="Hotel Booking">Hotel Booking</option>
                                        <option value="Holiday Packages">Holiday Packages</option>
                                    </select>
                                </div>
                                <div class="form-group col-12" data-aos="fade-up" data-aos-delay="8200">
                                    <textarea name="message" id="message" cols="30" rows="3" class="form-control"
                                        placeholder="Your Message"></textarea>
                                    <i class="fas fa-comment"></i>
                                </div>
                                <div class="form-btn col-12" data-aos="fade-up" data-aos-delay="8300">
                                    <button type="submit" class="th-btn white-btn">Send Message <img
                                            src="{{ asset('assets/img/icon/plane3.svg') }}" alt="Plane"></button>
                                </div>
                            </div>
                            <p class="form-messages mb-0 mt-3"></p>
                        </form>
                        <div class="form-btn-wrapp" data-aos="fade-up" data-aos-delay="8400">
                            <div class="form-btn"></div>
                            <div class="contact-info">
                                <p class="contact-info_link"><a href="tel:+918905943133">+91-8905943-133</a></p>
                                <div class="contact-info_icon"><a href="tel:+918905943133"><img
                                            src="{{ asset('assets/img/icon/call.svg') }}" alt="Phone"></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
