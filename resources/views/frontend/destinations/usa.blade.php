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
                                                    src="{{ asset('assets/img/destination/usa/usa-best-places-new-york.jpg') }}"
                                                    alt="New York"></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tour-slider-img"><img
                                                    src="{{ asset('assets/img/destination/usa/usa-best-places-las-vegas.jpg') }}"
                                                    alt="Greece"></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tour-slider-img"><img
                                                    src="{{ asset('assets/img/destination/usa/usa-best-places-san-francisco.jpg') }}"
                                                    alt="Paris"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper th-slider tour-thumb-slider"
                                    data-slider-options='{"effect":"slide","loop":true,"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"}},"autoplayDisableOnInteraction":"true"}'>
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="tour-slider-img"><img
                                                    src="{{ asset('assets/img/destination/usa/usa-best-places-new-york.jpg') }}"
                                                    alt="New York"></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tour-slider-img"><img
                                                    src="{{ asset('assets/img/destination/usa/usa-best-places-las-vegas.jpg') }}"
                                                    alt="Greece"></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tour-slider-img"><img
                                                    src="{{ asset('assets/img/destination/usa/usa-best-places-san-francisco.jpg') }}"
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
                                Along the Eastern Seaboard, New York and Washington, D.C. offer two uniquely different city
                                experiences. Along the West Coast, San Francisco and Los Angeles are both hot spots for
                                tourists. In the Southwest, Las Vegas brings the desert to life, and the Grand Canyon shows
                                off one of nature’s greatest creations.
                            </p>
                            <p class="box-text mb-30" data-aos="fade-up" data-aos-delay="600">
                                Beyond the mainland are the beaches of Waikiki and the tropical Hawaiian Islands. These are
                                just a few key locations, but wonderful destinations for any type of traveler can be found
                                all over the country.
                            </p>
                            <p class="box-text mb-30" data-aos="fade-up" data-aos-delay="700">
                                Over more of America with our list of the best places to visit in the United States.
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
                                        src="{{ asset('assets/img/destination/usa/usa-best-places-new-york.jpg') }}"
                                        alt="New York"></div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="#">New York</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-aos="fade-up" data-aos-delay="300">
                            <div class="destination-item2 th-ani">
                                <div class="box-img global-img"><img
                                        src="{{ asset('assets/img/destination/usa/usa-best-places-las-vegas.jpg') }}"
                                        alt="Greece">
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="#">Greece</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-aos="fade-up" data-aos-delay="400">
                            <div class="destination-item2 th-ani">
                                <div class="box-img global-img"><img
                                        src="{{ asset('assets/img/destination/usa/usa-best-places-san-francisco.jpg') }}"
                                        alt="Paris">
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="#">Paris</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-aos="fade-up" data-aos-delay="500">
                            <div class="destination-item2 th-ani">
                                <div class="box-img global-img"><img
                                        src="{{ asset('assets/img/destination/usa/usa-best-places-washington.jpg') }}"
                                        alt="Rome"></div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="#">Rome</a></h3>
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

            {{-- New York --}}
            <div class="row gx-60 gy-30 mb-60 align-items-center">
                <div class="col-lg-5" data-aos="fade-left" data-aos-delay="3900">
                    <div class="resort-image global-img"><img
                            src="{{ asset('assets/img/destination/usa/usa-best-places-new-york.jpg') }}" alt="New York">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="resort-content" data-aos="fade-right" data-aos-delay="4000">
                        <h3 class="box-title"><a href="#">New York</a></h3>
                        <p class="resort-text">New York City is unlike anywhere else in the world—a destination that can
                            only be truly understood by experiencing it firsthand. For newcomers, strolling its streets
                            feels like stepping onto a movie set, with iconic landmarks at every corner: the Empire State
                            Building, Rockefeller Plaza, the Chrysler Building, Central Park, the High Line, Times Square,
                            Fifth Avenue, Broadway, and, of course, the Statue of Liberty.</p>
                        <p class="resort-text">Spend your days sightseeing, your evenings enjoying a Broadway show, and
                            find time for shopping, leisurely walks, and savoring unforgettable meals. This is the essence
                            of New York. With more to see and do than a single day or weekend allows, it’s a city that draws
                            visitors back again and again..</p>
                        <div class="resort-btn mt-40"><a href="{{ route('contactus') }}"
                                class="th-btn style4 th-icon">Book Now</a></div>
                    </div>
                </div>
            </div>

            {{-- Greece --}}
            <div class="row gx-60 gy-30 mb-60 align-items-center">
                <div class="col-lg-7">
                    <div class="resort-content" data-aos="fade-left" data-aos-delay="4200">
                        <h3 class="box-title"><a href="#">Las Vegas</a></h3>
                        <p class="resort-text">San Francisco is a delightful West Coast destination that appeals to
                            couples, families, and solo travelers alike. Known for its charming neighborhoods, iconic
                            landmarks, scenic views, and vibrant outdoor dining, the city offers a perfect mix of relaxation
                            and adventure. Its picturesque setting and lively atmosphere make it an unforgettable getaway
                            spot.</p>
                        <p class="resort-text">Visitors can enjoy a variety of experiences, from cruising along San
                            Francisco Bay and touring the historic Alcatraz to driving across the Golden Gate Bridge or
                            exploring Fisherman’s Wharf. A ride on the city’s famous streetcars provides another classic way
                            to see the sights. While summer and fall are particularly great times to visit, San Francisco’s
                            mild climate ensures it’s a welcoming destination throughout the year.</p>
                        <div class="resort-btn mt-40"><a href="{{ route('contactus') }}"
                                class="th-btn style4 th-icon">Book Now</a></div>
                    </div>
                </div>
                <div class="col-lg-5" data-aos="fade-right" data-aos-delay="4300">
                    <div class="resort-image global-img"><img
                            src="{{ asset('assets/img/destination/usa/usa-best-places-las-vegas.jpg') }}" alt="Greece">
                    </div>
                </div>
            </div>

            {{-- Paris --}}
            <div class="row gx-60 gy-30 mb-60 align-items-center">
                <div class="col-lg-5" data-aos="fade-left" data-aos-delay="4500">
                    <div class="resort-image global-img"><img
                            src="{{ asset('assets/img/destination/usa/usa-best-places-san-francisco.jpg') }}"
                            alt="Paris"></div>
                </div>
                <div class="col-lg-7">
                    <div class="resort-content" data-aos="fade-right" data-aos-delay="4600">
                        <h3 class="box-title"><a href="#">San Francisco</a></h3>
                        <p class="resort-text">Las Vegas, the dazzling city of lights in the desert, has a magnetic charm
                            that has captivated visitors for generations. Its massive resort complexes, filled with endless
                            attractions and activities year-round, make it a destination for all—from couples eager to tie
                            the knot, to families and solo travelers seeking fun and relaxation by the pool.</p>
                        <p class="resort-text">The city is also world-famous for its entertainment. Some of the biggest
                            names in music perform here to sold-out crowds, while Cirque du Soleil delivers unforgettable
                            shows found nowhere else. Each resort brings its own unique flair, offering everything from
                            mesmerizing fountain displays to thrilling volcano eruptions, ensuring there’s always something
                            exciting to experience in Las Vegas.</p>
                        <div class="resort-btn mt-40"><a href="{{ route('contactus') }}"
                                class="th-btn style4 th-icon">Book Now</a></div>
                    </div>
                </div>
            </div>

            {{-- Rome --}}
            <div class="row gx-60 gy-30 mb-60 align-items-center">
                <div class="col-lg-7">
                    <div class="resort-content" data-aos="fade-left" data-aos-delay="4800">
                        <h3 class="box-title"><a href="#">Washington, D.C.</a></h3>
                        <p class="resort-text">This remarkable capital city blends history, culture, and beauty, making it
                            a wonderful destination for travelers of all kinds. Iconic landmarks such as the White House,
                            Capitol Building, and Lincoln Memorial provide a glimpse into the nation’s past, while the
                            world-class Smithsonian museums offer endless opportunities for discovery. A walk along the
                            National Mall or a visit to the Washington Monument is a must for first-time visitors.</p>
                        <p class="resort-text">Beyond its historic sites, Washington, D.C. has vibrant neighborhoods,
                            scenic green spaces, and a lively dining scene. The cherry blossoms in spring create one of the
                            city’s most breathtaking experiences, while Georgetown’s cobblestone streets and waterfront
                            provide a charming escape. Whether you’re drawn by history, politics, or culture, Washington,
                            D.C. offers something special in every season.</p>
                        <div class="resort-btn mt-40"><a href="{{ route('contactus') }}"
                                class="th-btn style4 th-icon">Book Now</a></div>
                    </div>
                </div>
                <div class="col-lg-5" data-aos="fade-right" data-aos-delay="4900">
                    <div class="resort-image global-img"><img
                            src="{{ asset('assets/img/destination/usa/usa-best-places-washington.jpg') }}"
                            alt="Rome"></div>
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
                                                src="{{ asset('assets/img/destination/usa/usa-best-places-new-york.jpg') }}"
                                                alt="New York">
                                            <a href="{{ asset('assets/img/destination/usa/usa-best-places-new-york.jpg') }}"
                                                class="popup-image">
                                                <div class="icon-btn"><i class="fas fa-search-plus"></i></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-aos="fade-up" data-aos-delay="6300">
                                    <div class="destination-box2 gsap-cursor">
                                        <div class="destination-img"><img
                                                src="{{ asset('assets/img/destination/usa/usa-best-places-las-vegas.jpg') }}"
                                                alt="Greece">
                                            <a href="{{ asset('assets/img/destination/usa/usa-best-places-las-vegas.jpg') }}"
                                                class="popup-image">
                                                <div class="icon-btn"><i class="fas fa-search-plus"></i></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-aos="fade-up" data-aos-delay="6400">
                                    <div class="destination-box2 gsap-cursor">
                                        <div class="destination-img"><img
                                                src="{{ asset('assets/img/destination/usa/usa-best-places-san-francisco.jpg') }}"
                                                alt="Paris">
                                            <a href="{{ asset('assets/img/destination/usa/usa-best-places-san-francisco.jpg') }}"
                                                class="popup-image">
                                                <div class="icon-btn"><i class="fas fa-search-plus"></i></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-aos="fade-up" data-aos-delay="6500">
                                    <div class="destination-box2 gsap-cursor">
                                        <div class="destination-img"><img
                                                src="{{ asset('assets/img/destination/usa/usa-best-places-washington.jpg') }}"
                                                alt="Rome">
                                            <a href="{{ asset('assets/img/destination/usa/usa-best-places-washington.jpg') }}"
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
