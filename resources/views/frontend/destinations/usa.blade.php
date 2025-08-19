@extends('frontend.layout.websitemain')
@section('content')
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.jpg') }}" data-aos="fade-down"
        data-aos-delay="100">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">USA Tourism</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Destination</li>
                    <li>USA</li>
                </ul>
            </div>
        </div>
    </div>

    <section class="space">
        <div class="container">
            <div class="row">
                <div class="tour-page-single">
                    <h2 class="box-title" data-aos="fade-up" data-aos-delay="200">USA Tourist Places</h2>
                    <div class="row">
                        <div class="col-xxl-6" data-aos="zoom-in" data-aos-delay="300">
                            <div class="slider-area tour-slider1">
                                <div class="swiper th-slider mb-4" id="tourSlider4"
                                    data-slider-options='{"effect":"fade","loop":true,"thumbs":{"swiper":".tour-thumb-slider"},"autoplayDisableOnInteraction":"true"}'>
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="tour-slider-img"><img
                                                    src="{{ asset('assets/img/destination/europe/Switzerland.jpg') }}"
                                                    alt="Switzerland"></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tour-slider-img"><img
                                                    src="{{ asset('assets/img/destination/europe/Greece.webp') }}"
                                                    alt="Greece"></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tour-slider-img"><img
                                                    src="{{ asset('assets/img/destination/europe/paris.webp') }}"
                                                    alt="Paris"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper th-slider tour-thumb-slider"
                                    data-slider-options='{"effect":"slide","loop":true,"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"}},"autoplayDisableOnInteraction":"true"}'>
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="tour-slider-img"><img
                                                    src="{{ asset('assets/img/destination/europe/Switzerland.jpg') }}"
                                                    alt="Switzerland"></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tour-slider-img"><img
                                                    src="{{ asset('assets/img/destination/europe/Greece.webp') }}"
                                                    alt="Greece"></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tour-slider-img"><img
                                                    src="{{ asset('assets/img/destination/europe/paris.webp') }}"
                                                    alt="Paris"></div>
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
                                Denmark, Greenland, Estonia, Stockholm, Rome, Zurich, Poland, Vivey, Paris, France,
                                Amsterdam, Lyon, Dublin, Berlin, Moscow, Istanbul, Naxos, Milan, and many more.
                            </p>
                            <p class="box-text mb-30" data-aos="fade-up" data-aos-delay="600">
                                Places to visit in USA are considered a perfect setting for travelers of any kind. It is
                                adorned with some of the magnificent places to visit that will surely make a mark in your
                                mind during your visit. USA tourist places are a perfect place to dive deep into the
                                golden days of classical antiquity.
                            </p>
                            <p class="box-text mb-30" data-aos="fade-up" data-aos-delay="700">
                                Travelers can visit and witness the baroque buildings with breathtaking views of the
                                Adriatic Sea. In the course of your visit to USA, you can choose to marvel at some of the
                                notable places to visit like Splurge on a water taxi in Venice, enjoy pintxos and surf in
                                San Sebastián, take a walk on London’s Primrose Hill, bike along Amsterdam’s canals, and
                                many more. USA has something for all kinds of tourists.
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
                                        src="{{ asset('assets/img/destination/europe/Switzerland.jpg') }}"
                                        alt="Switzerland"></div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="#">Switzerland</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-aos="fade-up" data-aos-delay="300">
                            <div class="destination-item2 th-ani">
                                <div class="box-img global-img"><img
                                        src="{{ asset('assets/img/destination/europe/Greece.webp') }}" alt="Greece">
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="#">Greece</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-aos="fade-up" data-aos-delay="400">
                            <div class="destination-item2 th-ani">
                                <div class="box-img global-img"><img
                                        src="{{ asset('assets/img/destination/europe/paris.webp') }}" alt="Paris">
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="#">Paris</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-aos="fade-up" data-aos-delay="500">
                            <div class="destination-item2 th-ani">
                                <div class="box-img global-img"><img
                                        src="{{ asset('assets/img/destination/europe/Rome.jpg') }}" alt="Rome"></div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="#">Rome</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-aos="fade-up" data-aos-delay="600">
                            <div class="destination-item2 th-ani">
                                <div class="box-img global-img"><img
                                        src="{{ asset('assets/img/destination/europe/Istanbul.jpg') }}" alt="Istanbul">
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="#">Istanbul</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-aos="fade-up" data-aos-delay="3500">
                            <div class="destination-item2 th-ani">
                                <div class="box-img global-img"><img
                                        src="{{ asset('assets/img/destination/europe/London.jpg') }}" alt="London">
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="#">London</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-aos="fade-up" data-aos-delay="3600">
                            <div class="destination-item2 th-ani">
                                <div class="box-img global-img"><img
                                        src="{{ asset('assets/img/destination/europe/Norway.webp') }}" alt="Norway">
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="#">Norway</a></h3>
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

            {{-- Switzerland --}}
            <div class="row gx-60 gy-30 mb-60 align-items-center">
                <div class="col-lg-5" data-aos="fade-left" data-aos-delay="3900">
                    <div class="resort-image global-img"><img
                            src="{{ asset('assets/img/destination/europe/Switzerland.jpg') }}" alt="Switzerland"></div>
                </div>
                <div class="col-lg-7">
                    <div class="resort-content" data-aos="fade-right" data-aos-delay="4000">
                        <h3 class="box-title"><a href="#">Switzerland</a></h3>
                        <p class="resort-text">Switzerland has been the world’s favorite holiday destination for decades,
                            thanks to its breathtaking scenery. Towering peaks, shimmering lakes, and countless waterfalls
                            create a picturesque landscape.</p>
                        <p class="resort-text">Switzerland offers tailored experiences, from fascinating train journeys
                            through pristine landscapes to walking on suspension bridges with panoramic views or exploring
                            behind waterfalls and frozen glaciers.</p>
                        <div class="resort-btn mt-40"><a href="{{ route('contactus') }}"
                                class="th-btn style4 th-icon">Book Now</a></div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="4100">
                    <p class="resort-text">Swiss culture thrives in traditional chalet-style homes, with locals
                        occasionally playing alphorns in marketplaces. Visit remote villages for a taste of true Swiss
                        heritage, explore castles and forts, or stroll through centuries-old vineyards.</p>
                </div>
            </div>

            {{-- Greece --}}
            <div class="row gx-60 gy-30 mb-60 align-items-center">
                <div class="col-lg-7">
                    <div class="resort-content" data-aos="fade-left" data-aos-delay="4200">
                        <h3 class="box-title"><a href="#">Greece</a></h3>
                        <p class="resort-text">Encircled by azure blue waters, Greece is home to 2,000 islands, with 160
                            inhabited. Known for its rich cultural heritage, colorful festivals, and glorious history,
                            Greece captivates visitors worldwide.</p>
                        <p class="resort-text">From pristine beaches and picturesque islands to spectacular mountains and
                            ancient ruins, Greece offers a variety of attractions for every traveler.</p>
                        <div class="resort-btn mt-40"><a href="{{ route('contactus') }}"
                                class="th-btn style4 th-icon">Book Now</a></div>
                    </div>
                </div>
                <div class="col-lg-5" data-aos="fade-right" data-aos-delay="4300">
                    <div class="resort-image global-img"><img
                            src="{{ asset('assets/img/destination/europe/Greece.webp') }}" alt="Greece"></div>
                </div>
                <div data-aos="fade-up" data-aos-delay="4400">
                    <p class="resort-text">Whether you seek a laid-back holiday or an action-packed adventure, Greece
                        delivers. Enjoy luxury hotels and white sand beaches or engage in watersports, caving, hiking, cable
                        riding, and food touring.</p>
                </div>
            </div>

            {{-- Paris --}}
            <div class="row gx-60 gy-30 mb-60 align-items-center">
                <div class="col-lg-5" data-aos="fade-left" data-aos-delay="4500">
                    <div class="resort-image global-img"><img
                            src="{{ asset('assets/img/destination/europe/paris.webp') }}" alt="Paris"></div>
                </div>
                <div class="col-lg-7">
                    <div class="resort-content" data-aos="fade-right" data-aos-delay="4600">
                        <h3 class="box-title"><a href="#">Paris</a></h3>
                        <p class="resort-text">Paris, the city of romance, attracts over 20 million visitors annually. Home
                            to iconic landmarks like the Eiffel Tower and the Louvre, it exudes a magical vibe and vibrant
                            culture.</p>
                        <p class="resort-text">Known as the “Fashion Capital of the World,” Paris hosts major fashion
                            events and offers world-class shopping at its renowned boutiques.</p>
                        <div class="resort-btn mt-40"><a href="{{ route('contactus') }}"
                                class="th-btn style4 th-icon">Book Now</a></div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="4700">
                    <p class="resort-text">Each season in Paris brings joy, with temperatures ranging from 8°C to 25°C.
                        Winter lasts until February, followed by spring until May, summer until August, and autumn until
                        December.</p>
                </div>
            </div>

            {{-- Rome --}}
            <div class="row gx-60 gy-30 mb-60 align-items-center">
                <div class="col-lg-7">
                    <div class="resort-content" data-aos="fade-left" data-aos-delay="4800">
                        <h3 class="box-title"><a href="#">Rome</a></h3>
                        <p class="resort-text">Rome, an epitome of beauty and history, is a UNESCO World Heritage Site. Its
                            3,000-year-old urban development showcases stunning architecture and historic churches.</p>
                        <p class="resort-text">Located on the Tiber River, 24 km from the Tyrrhenian Sea, Rome’s warm
                            colors and historic charm make it a must-visit destination.</p>
                        <div class="resort-btn mt-40"><a href="{{ route('contactus') }}"
                                class="th-btn style4 th-icon">Book Now</a></div>
                    </div>
                </div>
                <div class="col-lg-5" data-aos="fade-right" data-aos-delay="4900">
                    <div class="resort-image global-img"><img src="{{ asset('assets/img/destination/europe/Rome.jpg') }}"
                            alt="Rome"></div>
                </div>
                <div data-aos="fade-up" data-aos-delay="5000">
                    <p class="resort-text">Rome’s Mediterranean climate features warm days (up to 30°C) and cooler nights.
                        Spring and summer are hot, while winter offers fewer crowds and lower accommodation costs.</p>
                </div>
            </div>

            {{-- Istanbul --}}
            <div class="row gx-60 gy-30 mb-60 align-items-center">
                <div class="col-lg-5" data-aos="fade-left" data-aos-delay="5100">
                    <div class="resort-image global-img"><img
                            src="{{ asset('assets/img/destination/europe/Istanbul.jpg') }}" alt="Istanbul"></div>
                </div>
                <div class="col-lg-7">
                    <div class="resort-content" data-aos="fade-right" data-aos-delay="5200">
                        <h3 class="box-title"><a href="#">Istanbul</a></h3>
                        <p class="resort-text">Istanbul, with 400,000 years of history, blends Eastern and Western
                            cultures. Its location between USA and USA creates a unique cultural and architectural
                            charm.</p>
                        <p class="resort-text">Visit the Hagia Sophia, Blue Mosque, and avant-garde restaurants like Ulus
                            29 and Mikla for stunning views and exquisite cuisine.</p>
                        <div class="resort-btn mt-40"><a href="{{ route('contactus') }}"
                                class="th-btn style4 th-icon">Book Now</a></div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="5300">
                    <p class="resort-text">Istanbul’s diverse topography means varied climates. Visit from March to May or
                        September to November for comfortable temperatures, avoiding the humid summer and cold winter (down
                        to -15°C).</p>
                </div>
            </div>

            {{-- London --}}
            <div class="row gx-60 gy-30 mb-60 align-items-center">
                <div class="col-lg-7">
                    <div class="resort-content" data-aos="fade-left" data-aos-delay="5400">
                        <h3 class="box-title"><a href="#">London</a></h3>
                        <p class="resort-text">London, a city of cobbled streets and hidden gems, offers history, culture,
                            fine dining, and fashion. Explore both iconic and lesser-known spots for a unique experience.
                        </p>
                        <p class="resort-text">From world-class museums to vibrant shopping districts, London’s diverse
                            offerings keep visitors engaged and entertained.</p>
                        <div class="resort-btn mt-40"><a href="{{ route('contactus') }}"
                                class="th-btn style4 th-icon">Book Now</a></div>
                    </div>
                </div>
                <div class="col-lg-5" data-aos="fade-right" data-aos-delay="5500">
                    <div class="resort-image global-img"><img
                            src="{{ asset('assets/img/destination/europe/London.jpg') }}" alt="London"></div>
                </div>
                <div data-aos="fade-up" data-aos-delay="5600">
                    <p class="resort-text">London’s art galleries, museums, aquariums, and shopping centers preserve its
                        rich heritage. Visit Buckingham Palace for a royal experience or Warner Bros. Studio for a cinematic
                        adventure.</p>
                </div>
            </div>

            {{-- Norway --}}
            <div class="row gx-60 gy-30 mb-60 align-items-center">
                <div class="col-lg-5" data-aos="fade-left" data-aos-delay="5700">
                    <div class="resort-image global-img"><img
                            src="{{ asset('assets/img/destination/europe/Norway.webp') }}" alt="Norway"></div>
                </div>
                <div class="col-lg-7">
                    <div class="resort-content" data-aos="fade-right" data-aos-delay="5800">
                        <h3 class="box-title"><a href="#">Norway</a></h3>
                        <p class="resort-text">Norway, a Scandinavian gem, is known for its mountains, glaciers, fjords,
                            and the magical Northern Lights. Its Viking heritage adds boldness to its culture.</p>
                        <p class="resort-text">The glistening Northern Lights and scenic fjords make Norway a top
                            destination for nature lovers and adventure seekers.</p>
                        <div class="resort-btn mt-40"><a href="{{ route('contactus') }}"
                                class="th-btn style4 th-icon">Book Now</a></div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="5900">
                    <p class="resort-text">Norway’s cold climate, with snowy winters, is ideal for visiting from April to
                        October. January and February are the coldest, but winter visits offer unique snowy landscapes.</p>
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
                                                src="{{ asset('assets/img/destination/europe/Switzerland.jpg') }}"
                                                alt="Switzerland">
                                            <a href="{{ asset('assets/img/destination/europe/Switzerland.jpg') }}"
                                                class="popup-image">
                                                <div class="icon-btn"><i class="fas fa-search-plus"></i></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-aos="fade-up" data-aos-delay="6300">
                                    <div class="destination-box2 gsap-cursor">
                                        <div class="destination-img"><img
                                                src="{{ asset('assets/img/destination/europe/Greece.webp') }}"
                                                alt="Greece">
                                            <a href="{{ asset('assets/img/destination/europe/Greece.webp') }}"
                                                class="popup-image">
                                                <div class="icon-btn"><i class="fas fa-search-plus"></i></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-aos="fade-up" data-aos-delay="6400">
                                    <div class="destination-box2 gsap-cursor">
                                        <div class="destination-img"><img
                                                src="{{ asset('assets/img/destination/europe/paris.webp') }}"
                                                alt="Paris">
                                            <a href="{{ asset('assets/img/destination/europe/paris.webp') }}"
                                                class="popup-image">
                                                <div class="icon-btn"><i class="fas fa-search-plus"></i></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-aos="fade-up" data-aos-delay="6500">
                                    <div class="destination-box2 gsap-cursor">
                                        <div class="destination-img"><img
                                                src="{{ asset('assets/img/destination/europe/Rome.jpg') }}"
                                                alt="Rome">
                                            <a href="{{ asset('assets/img/destination/europe/Rome.jpg') }}"
                                                class="popup-image">
                                                <div class="icon-btn"><i class="fas fa-search-plus"></i></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-aos="fade-up" data-aos-delay="6600">
                                    <div class="destination-box2 gsap-cursor">
                                        <div class="destination-img"><img
                                                src="{{ asset('assets/img/destination/europe/Istanbul.jpg') }}"
                                                alt="Istanbul">
                                            <a href="{{ asset('assets/img/destination/europe/Istanbul.jpg') }}"
                                                class="popup-image">
                                                <div class="icon-btn"><i class="fas fa-search-plus"></i></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-aos="fade-up" data-aos-delay="6700">
                                    <div class="destination-box2 gsap-cursor">
                                        <div class="destination-img"><img
                                                src="{{ asset('assets/img/destination/europe/London.jpg') }}"
                                                alt="London">
                                            <a href="{{ asset('assets/img/destination/europe/London.jpg') }}"
                                                class="popup-image">
                                                <div class="icon-btn"><i class="fas fa-search-plus"></i></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-aos="fade-up" data-aos-delay="6800">
                                    <div class="destination-box2 gsap-cursor">
                                        <div class="destination-img"><img
                                                src="{{ asset('assets/img/destination/europe/Norway.webp') }}"
                                                alt="Norway">
                                            <a href="{{ asset('assets/img/destination/europe/Norway.webp') }}"
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
