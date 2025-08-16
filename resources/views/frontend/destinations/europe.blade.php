@extends('frontend.layout.websitemain')
@section('content')
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Europe Tourism</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Destination</li>
                    <li>Europe</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="space">
        <div class="container">
            <div class="row">
                <div class="tour-page-single">
                    <h2 class="box-title">Europe Tourist Places</h2>
                    <div class="row">

                        <div class="col-xxl-6">
                            <div class="slider-area tour-slider1">
                                <div class="swiper th-slider mb-4" id="tourSlider4"
                                    data-slider-options='{"effect":"fade","loop":true,"thumbs":{"swiper":".tour-thumb-slider"},"autoplayDisableOnInteraction":"true"}'>
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="tour-slider-img"><img
                                                    src="{{ asset('assets/img/destination/europe/Switzerland.jpg') }}"
                                                    alt="img">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tour-slider-img"><img
                                                    src="{{ asset('assets/img/destination/europe/Greece.webp') }}"
                                                    alt="img">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tour-slider-img"><img
                                                    src="{{ asset('assets/img/destination/europe/paris.webp') }}"
                                                    alt="img">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tour-slider-img"><img
                                                    src="{{ asset('assets/img/destination/europe/Switzerland.jpg') }}"
                                                    alt="img">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tour-slider-img"><img
                                                    src="{{ asset('assets/img/destination/europe/Greece.webp') }}"
                                                    alt="img">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tour-slider-img"><img
                                                    src="{{ asset('assets/img/destination/europe/paris.webp') }}"
                                                    alt="img">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper th-slider tour-thumb-slider"
                                    data-slider-options='{"effect":"slide","loop":true,"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"}},"autoplayDisableOnInteraction":"true"}'>
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="tour-slider-img"><img
                                                    src="{{ asset('assets/img/destination/europe/Switzerland.jpg') }}"
                                                    alt="Image">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tour-slider-img"><img
                                                    src="{{ asset('assets/img/destination/europe/Greece.webp') }}"
                                                    alt="Image">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tour-slider-img"><img
                                                    src="{{ asset('assets/img/destination/europe/paris.webp') }}"
                                                    alt="Image">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tour-slider-img"><img
                                                    src="{{ asset('assets/img/destination/europe/Switzerland.jpg') }}"
                                                    alt="Image">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tour-slider-img"><img
                                                    src="{{ asset('assets/img/destination/europe/Greece.webp') }}"
                                                    alt="Image">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tour-slider-img"><img
                                                    src="{{ asset('assets/img/destination/europe/paris.webp') }}"
                                                    alt="Image">
                                            </div>
                                        </div>
                                    </div>
                                </div><button data-slider-prev="#tourSlider4" class="slider-arrow style3 slider-prev"><img
                                        src="{{ asset('assets/img/icon/hero-arrow-left.svg') }}" alt=""></button>
                                <button data-slider-next="#tourSlider4" class="slider-arrow style3 slider-next"><img
                                        src="{{ asset('assets/img/icon/hero-arrow-right.svg') }}" alt=""></button>
                            </div>
                        </div>
                        <div class="col-xxl-6 ps-4">
                            <p class="box-text mb-30">
                                Denmark, Greenland, Estonia, Stockholm, Rome, Zurich, Poland,
                                Vivey, Paris, France, Amsterdam, Lyon, Dublin, Berlin, Moscow, Istanbul, Naxos, Milan
                                and many more.
                            </p>
                            <p class="box-text mb-30">
                                Places to Visit in Europe are considered to be a perfect setting for travelers of any
                                kind. It is adorned with some of the magnificent places to visit that will surely make a
                                mark in your mind in the course of your visit. Europe tourist places are a perfect place
                                to dive deep into the golden days of classical antiquity.

                            </p>
                            <p class="box-text mb-30">
                                Travelers are able to visit and witness the baroque buildings with breathtaking views of
                                the Adriatic sea. In the course of your visit to Europe, you can choose to marvel at
                                some of the notable places to visit like Splurge on a water taxi in Venice, Enjoy
                                pintxos and surf in San Sebastián, Take a walk on London’s Primrose Hill, Bike along
                                Amsterdam’s canals, and many more. Europe has got something or the other for all kinds
                                of tourists.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="page-content">
                    <p class="box-text mb-30">voluptatem accusantium doloremque laudantium, totam rem aperiam,
                        eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                        explicabo. Dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non
                        numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                        voluptatem. Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam
                        nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla
                        pariatur</p>
                    <p class="box-text mb-50">Ut enim ad minima veniam, quis nostrum exercitationem ullam
                        corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel
                        eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur,
                        vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</p>
                    <h2 class="box-title">Highlights</h2>
                    <p class="box-text mb-30">voluptatem accusantium doloremque laudantium, totam rem aperiam,
                        eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                        explicabo. Dolorem ipsum quia dolor sit amet, consectetur, adipisci.</p>
                    <div class="checklist mb-50">
                        <ul>
                            <li>Visit most popular location of Maldives</li>
                            <li>Buffet Breakfast for all traveler with good quality.</li>
                            <li>Expert guide always guide you and give informations.</li>
                            <li>Best Hotel for all also great food.</li>
                            <li>Helping all traveler for Money Exchange.</li>
                            <li>Buffet Breakfast for all traveler with good quality..</li>
                            <li>Buffet Breakfast for all traveler with good quality.</li>
                        </ul>
                    </div>
                    <h2 class="box-title">Basic Information</h2>
                    <p class="blog-text mb-35">voluptatem accusantium doloremque laudantium, totam rem aperiam,
                        eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                        explicabo. Dolorem ipsum quia dolor sit amet, consectetur, adipisci.</p>
                    <div class="destination-checklist mb-50">
                        <div class="checklist style2">
                            <ul>
                                <li>Destination</li>
                                <li>Departure</li>
                                <li>Language</li>
                                <li>Reture Date</li>
                                <li>Departure Date</li>
                                <li>No. of Guide</li>
                            </ul>
                        </div>
                        <div class="checklist style2">
                            <ul>
                                <li>Netherland</li>
                                <li>Singapore Airport, Singapore</li>
                                <li>English</li>
                                <li>August 12, 2024</li>
                                <li>Netherland</li>
                                <li>25 Tour Places</li>
                                <li>2 Person</li>
                            </ul>
                        </div>
                    </div>
                    <h2 class="box-title">Included and Excluded</h2>
                    <p class="blog-text mb-35">voluptatem accusantium doloremque laudantium, totam rem aperiam,
                        eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                        explicabo. Dolorem ipsum quia dolor sit amet, consectetur, adipisci.</p>
                    <div class="destination-checklist">
                        <div class="checklist style2 style4">
                            <ul>
                                <li>Hotel Fair</li>
                                <li>Transportation</li>
                                <li>Breakfast</li>
                                <li>Sightseeing</li>
                                <li>Travel Tax</li>
                                <li>Seasonal Food</li>
                            </ul>
                        </div>
                        <div class="checklist style5">
                            <ul>
                                <li>WIFI</li>
                                <li>Swimming Pool</li>
                                <li>GYM</li>
                                <li>Travel Insurance</li>
                                <li>Family Expenses</li>
                                <li>Family Expenses</li>
                            </ul>
                        </div>
                    </div>
                    <h3 class="page-title mt-50 mb-0">Tour Plan</h3>
                    <ul class="nav nav-tabs tour-tab mt-10" role="tablist">
                        <li class="nav-item" role="presentation"><button class="nav-link active" id="day-tab1"
                                data-bs-toggle="tab" data-bs-target="#day-tab1-pane" type="button" role="tab"
                                aria-controls="day-tab1-pane" aria-selected="true">Day 01</button>
                        </li>
                        <li class="nav-item" role="presentation"><button class="nav-link" id="day-tab2"
                                data-bs-toggle="tab" data-bs-target="#day-tab2-pane" type="button" role="tab"
                                aria-controls="day-tab2-pane" aria-selected="false">Day
                                02</button></li>
                        <li class="nav-item" role="presentation"><button class="nav-link" id="day-tab3"
                                data-bs-toggle="tab" data-bs-target="#day-tab3-pane" type="button" role="tab"
                                aria-controls="day-tab3-pane" aria-selected="false">Day
                                03</button></li>
                        <li class="nav-item" role="presentation"><button class="nav-link" id="day-tab4"
                                data-bs-toggle="tab" data-bs-target="#day-tab4-pane" type="button" role="tab"
                                aria-controls="day-tab4-pane" aria-selected="false">Day
                                04</button></li>
                        <li class="nav-item" role="presentation"><button class="nav-link" id="day-tab5"
                                data-bs-toggle="tab" data-bs-target="#day-tab5-pane" type="button" role="tab"
                                aria-controls="day-tab5-pane" aria-selected="false">Day
                                05</button></li>
                        <li class="nav-item" role="presentation"><button class="nav-link" id="day-tab6"
                                data-bs-toggle="tab" data-bs-target="#day-tab6-pane" type="button" role="tab"
                                aria-controls="day-tab6-pane" aria-selected="false">Day
                                06</button></li>
                        <li class="nav-item" role="presentation"><button class="nav-link" id="day-tab7"
                                data-bs-toggle="tab" data-bs-target="#day-tab7-pane" type="button" role="tab"
                                aria-controls="day-tab7-pane" aria-selected="false">Day
                                07</button></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="day-tab1-pane" role="tabpanel"
                            aria-labelledby="day-tab1" tabindex="0">
                            <div class="tour-grid-plan">
                                <div class="checklist">
                                    <ul>
                                        <li>As the Eiffel Tower is to Paris, the silhouette of the</li>
                                        <li>Curabitur pellentesque nibh nibh, at maximus ante</li>
                                        <li>United commitment toour excellence patent protection.</li>
                                        <li>As the Eiffel Tower is to Paris, the silhouette of the</li>
                                        <li>Maecenas vitae mattis tellus. Nullam quis imperdiet</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="day-tab2-pane" role="tabpanel" aria-labelledby="day-tab2"
                            tabindex="0">
                            <div class="tour-grid-plan">
                                <div class="checklist">
                                    <ul>
                                        <li>As the Eiffel Tower is to Paris, the silhouette of the</li>
                                        <li>Curabitur pellentesque nibh nibh, at maximus ante</li>
                                        <li>United commitment toour excellence patent protection.</li>
                                        <li>As the Eiffel Tower is to Paris, the silhouette of the</li>
                                        <li>Maecenas vitae mattis tellus. Nullam quis imperdiet</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="day-tab3-pane" role="tabpanel" aria-labelledby="day-tab3"
                            tabindex="0">
                            <div class="tour-grid-plan">
                                <div class="checklist">
                                    <ul>
                                        <li>As the Eiffel Tower is to Paris, the silhouette of the</li>
                                        <li>Curabitur pellentesque nibh nibh, at maximus ante</li>
                                        <li>United commitment toour excellence patent protection.</li>
                                        <li>As the Eiffel Tower is to Paris, the silhouette of the</li>
                                        <li>Maecenas vitae mattis tellus. Nullam quis imperdiet</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="day-tab5-pane" role="tabpanel" aria-labelledby="day-tab5"
                            tabindex="0">
                            <div class="tour-grid-plan">
                                <div class="checklist">
                                    <ul>
                                        <li>As the Eiffel Tower is to Paris, the silhouette of the</li>
                                        <li>Curabitur pellentesque nibh nibh, at maximus ante</li>
                                        <li>United commitment toour excellence patent protection.</li>
                                        <li>As the Eiffel Tower is to Paris, the silhouette of the</li>
                                        <li>Maecenas vitae mattis tellus. Nullam quis imperdiet</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="day-tab6-pane" role="tabpanel" aria-labelledby="day-tab6"
                            tabindex="0">
                            <div class="tour-grid-plan">
                                <div class="checklist">
                                    <ul>
                                        <li>As the Eiffel Tower is to Paris, the silhouette of the</li>
                                        <li>Curabitur pellentesque nibh nibh, at maximus ante</li>
                                        <li>United commitment toour excellence patent protection.</li>
                                        <li>As the Eiffel Tower is to Paris, the silhouette of the</li>
                                        <li>Maecenas vitae mattis tellus. Nullam quis imperdiet</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="day-tab7-pane" role="tabpanel" aria-labelledby="day-tab7"
                            tabindex="0">
                            <div class="tour-grid-plan">
                                <div class="checklist">
                                    <ul>
                                        <li>As the Eiffel Tower is to Paris, the silhouette of the</li>
                                        <li>Curabitur pellentesque nibh nibh, at maximus ante</li>
                                        <li>United commitment toour excellence patent protection.</li>
                                        <li>As the Eiffel Tower is to Paris, the silhouette of the</li>
                                        <li>Maecenas vitae mattis tellus. Nullam quis imperdiet</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <section class="position-relative overflow-hidden bg-top-center space my-5" id="destination-sec"
            data-bg-src="{{ asset('assets/img/bg/destination_bg_1.png') }}">
            <div class="container">
                <div class="title-area text-center"><span class="sub-title text-white">Top Spot</span>
                    <h2 class="sec-title text-white">Discover Our Destinations</h2>
                </div>
                <div class="slider-area">
                    <div class="swiper th-slider has-shadow" id="destinationSlider6"
                        data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"},"1300":{"slidesPerView":"3"}}}'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="destination-item2 th-ani">
                                    <div class="box-img global-img"><img
                                            src="{{ asset('assets/img/destination/europe/Switzerland.jpg') }}"
                                            alt="image">
                                    </div>
                                    <div class="box-content">
                                        <h3 class="box-title"><a href="destination-details.html">Switzerland</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="destination-item2 th-ani">
                                    <div class="box-img global-img"><img
                                            src="{{ asset('assets/img/destination/europe/Greece.webp') }}"
                                            alt="image"></div>
                                    <div class="box-content">
                                        <h3 class="box-title"><a href="destination-details.html">Greece</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="destination-item2 th-ani">
                                    <div class="box-img global-img"><img
                                            src="{{ asset('assets/img/destination/europe/paris.webp') }}" alt="image">
                                    </div>
                                    <div class="box-content">
                                        <h3 class="box-title"><a href="destination-details.html">Paris</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="destination-item2 th-ani">
                                    <div class="box-img global-img"><img
                                            src="{{ asset('assets/img/destination/europe/Rome.jpg') }}" alt="image">
                                    </div>
                                    <div class="box-content">
                                        <h3 class="box-title"><a href="destination-details.html">Rome</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="destination-item2 th-ani">
                                    <div class="box-img global-img"><img
                                            src="{{ asset('assets/img/destination/europe/Istanbul.jpg') }}"
                                            alt="image"></div>
                                    <div class="box-content">
                                        <h3 class="box-title"><a href="destination-details.html">Istanbul</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="destination-item2 th-ani">
                                    <div class="box-img global-img"><img
                                            src="{{ asset('assets/img/destination/europe/London.jpg') }}" alt="image">
                                    </div>
                                    <div class="box-content">
                                        <h3 class="box-title"><a href="destination-details.html">London</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="destination-item2 th-ani">
                                    <div class="box-img global-img"><img
                                            src="{{ asset('assets/img/destination/europe/Norway.webp') }}"
                                            alt="image"></div>
                                    <div class="box-content">
                                        <h3 class="box-title"><a href="destination-details.html">Norway</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div><button data-slider-prev="#destinationSlider6" class="slider-arrow slider-prev"><img
                                src="assets/img/icon/right-arrow2.svg" alt=""></button> <button
                            data-slider-next="#destinationSlider6" class="slider-arrow slider-next"><img
                                src="assets/img/icon/left-arrow2.svg" alt=""></button>
                    </div>
                </div>
            </div>
        </section>


        <div class="my-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="title-area text-center pe-xl-4 ps-xl-4"><span class="sub-title">Best Places For
                                You</span>
                            <h2 class="sec-title mb-20">Most Popular locations</h2>
                            <p class="sec-text"></p>
                        </div>
                    </div>
                </div>

                {{-- Switzerland --}}
                <div class="row gx-60 gy-30 mb-60 align-items-center">
                    <div class="col-lg-5">
                        <div class="resort-image global-img"><img
                                src="{{ asset('assets/img/destination/europe/Switzerland.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="resort-content">
                            <h3 class="box-title"><a href="resort-details.html">Switzerland</a></h3>

                            <p class="resort-text">Switzerland has been the world’s most favourite holiday destination for
                                decades now and the reason can be seen as soon as you get off the plane! Switzerland is home
                                to simple breathtaking scenery with the landscape being dotted with towering peaks,
                                shimmering lakes and countless waterfalls.
                            </p>
                            <p class="resort-text">Switzerland has entertained tourists for a very
                                long time and this means that here, you will be able to get tailored experiences like
                                nowhere else. You can be a part of fascinating train journeys through pristine landscapes,
                                walk on suspension bridges that seem to float between two mountains offering panoramic
                                views, walk behind waterfalls and through frozen glaciers.
                            </p>

                            <div class="resort-btn mt-40"><a href="#" class="th-btn style4 th-icon">Book
                                    Now</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p class="resort-text">
                            Having said that, Switzerland tourism involves a lot more than your days out into the wild!
                            Swiss people also have a distinct culture with age-old civilizations still living in their
                            traditional chalet-style homes. If you are lucky, you will be able to spot the locals in their
                            traditional attire, playing their huge alphorns in the marketplace. You can also visit the
                            remote villages you get a taste of true Swiss culture! The Swiss countryside is dotted with
                            numerous castles, forts and their ruins with fascinating histories. You can visit several scenic
                            landmarks that sit alongside its numerous lakes and walk through centuries old vineyards that
                            follow age-old techniques.
                        </p>
                    </div>
                </div>

                {{-- Greece --}}
                <div class="row gx-60 gy-30 mb-60 align-items-center">
                    <div class="col-lg-7">
                        <div class="resort-content">
                            <h3 class="box-title"><a href="resort-details.html">Greece</a></h3>
                            <p class="resort-text">Encircled by azure blue waters, Greece is home to 2,000 islands, out of
                                which 160 are known to be inhabited. Popular all over the world as the magnificent land of
                                Aristotle, Plato, and Socrates, this iconic country is famous for its rich cultural
                                heritage, colourful festivals, and glorious history.
                            </p>
                            <p class="resort-text">The ever-charming beauty of Greece is credited to its pristine beaches,
                                picturesque islands, spectacular mountains, intriguing ancient ruins, and magnificent
                                monuments. Greece is home to a plethora of interesting places to visit that have always
                                formed the prime attractions of the tourism here.
                            </p>
                            <div class="resort-btn mt-40"><a href="#" class="th-btn style4 th-icon">Book
                                    Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="resort-image global-img"><img
                                src="{{ asset('assets/img/destination/europe/Greece.webp') }}" alt="">
                        </div>
                    </div>
                    <div>
                        <p class="resort-text">
                            No matter if you want a laid-back holiday or an action-packed thrilling vacation in Greece, the
                            country can offer you exactly the kind of tour you want. While the super luxury hotels here and
                            the soothing white sand beaches can offer you a relaxed vacation with your loved ones, the
                            adventure seekers can go indulge in a plethora of exhilarating activities, such as watersports,
                            caving, hiking, cable riding, and food touring.
                        </p>
                    </div>
                </div>

                {{-- Paris --}}
                <div class="row gx-60 gy-30 mb-60 align-items-center">
                    <div class="col-lg-5">
                        <div class="resort-image global-img"><img
                                src="{{ asset('assets/img/destination/europe/paris.webp') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="resort-content">
                            <h3 class="box-title"><a href="resort-details.html">Switzerland</a></h3>

                            <p class="resort-text">
                                Paris, the city of romance, is the most visited place in the world. Toured by more than 20
                                million people, this French capital is home to some of the most iconic structures like the
                                Eiffel Tower, museums like the Louvre, several happening boulevards, and several artistic
                                treasures. People from all over the world visit Paris to feel the magical and amazing vibe
                                that it oozes out and the lovable culture here can win you over with just one trip.
                            </p>
                            <p class="resort-text">
                                It is popularly also called the “Fashion Capital of the World” and it hosts various fashion
                                events throughout the year. The city remains at the forefront of international trends and
                                many established boutiques and shops are a quintessential part of any visit.
                            </p>

                            <div class="resort-btn mt-40">
                                <a href="#" class="th-btn style4 th-icon">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p class="resort-text">
                            Each and every season in Paris brings in an environment of joy here. The year starts with winter
                            and lasts till February. Next followed by Spring, it lasts till May, June welcomes Summer season
                            in Paris and lasts till August. Autumn starts in September and lasts until December.The average
                            temperature of the city ranges from 8-degree Celsius to 25-degree Celsius.
                        </p>
                    </div>
                </div>

                {{-- Rome --}}
                <div class="row gx-60 gy-30 mb-60 align-items-center">
                    <div class="col-lg-7">
                        <div class="resort-content">
                            <h3 class="box-title"><a href="resort-details.html">Greece</a></h3>
                            <p class="resort-text">
                                Mentioned in the world’s most iconic places, Rome is an epitome of beauty and history. Apart
                                from being the capital city of Italy, the city also remains as a memorial to the creative
                                imagination of architecture. Due to the 3000 year old ad hoc urban development, the historic
                                centre of Rome is listed as a World Heritage Site by UNESCO.
                            </p>
                            <p class="resort-text">
                                Situated on the central portion of the Italian peninsula, on the Tiber River about 24 km
                                from the Tyrrhenian Sea. Rome is made up of warm colours and historic architectural styles.
                                The beauty of this place resides significantly in the churches.
                            </p>
                            <div class="resort-btn mt-40"><a href="#" class="th-btn style4 th-icon">Book
                                    Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="resort-image global-img"><img
                                src="{{ asset('assets/img/destination/europe/Rome.jpg') }}" alt="">
                        </div>
                    </div>
                    <div>
                        <p class="resort-text">
                            Rome has a Mediterranean climate. Temperatures can stay around 30 degrees in the daytime, but
                            the nights are usually cooler and more comfortable. In the spring season, Rome has warm weather
                            and summers can be hot and humid. Temperatures in July and August can easily exceed 32 degrees
                            Celsius. Additionally, winter is a really good time to visit. If you want to save money on
                            accommodation, and site tourist attractions without the long lines then plan your vacation in
                            winter.
                        </p>
                    </div>
                </div>

                {{-- Istanbul --}}
                <div class="row gx-60 gy-30 mb-60 align-items-center">
                    <div class="col-lg-5">
                        <div class="resort-image global-img"><img
                                src="{{ asset('assets/img/destination/europe/Istanbul.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="resort-content">
                            <h3 class="box-title"><a href="resort-details.html">Switzerland</a></h3>

                            <p class="resort-text">
                                With 4,00,000 years of human habitation, Istanbul is a melting pot of rich culture and
                                history. The location of the city at the edge of Europe and Asia makes it a beautiful
                                amalgamation of mystic beauty of eastern culture and the tinge of a contemporary carnival.
                                Istanbul has a personality of a storyteller who unfolds its beauty, people, food,
                                architecture and culture one at a time.
                            </p>
                            <p class="resort-text">
                                Istanbul boasts the historical charm of Hagia Sophia, picturesque architecture of the Blue
                                Mosque, splendid shorelines with avant garde restaurants like Ulus 29 and Mikla overlooking
                                impeccable scenic views.
                            </p>

                            <div class="resort-btn mt-40"><a href="#" class="th-btn style4 th-icon">Book
                                    Now</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p class="resort-text">
                            Istanbul tourism is undoubtedly at its peak most times of the year as it is topographically
                            diverse and experiences sub climates in different parts of the city. The best time to visit
                            Istanbul is between the months of March to May and September to November to experience the
                            comfortable temperature. The summer months experience extremely high temperatures with humidity
                            and temperature can go as low as minus 15 degrees during winters.
                        </p>
                    </div>
                </div>

                {{-- London --}}
                <div class="row gx-60 gy-30 mb-60 align-items-center">
                    <div class="col-lg-7">
                        <div class="resort-content">
                            <h3 class="box-title"><a href="resort-details.html">Greece</a></h3>
                            <p class="resort-text">
                                London city is a memoir of cobbled streets and hidden gems, and you’re bound to unravel a
                                new side of it every time you’re over here. It is located in the Southeastern area of Great
                                Britain and has something for everyone, from history and culture to fine food and good
                                times.
                            </p>
                            <p class="resort-text">
                                London is packed with conventional tourist spots, and the best way to explore the city is to
                                discover the lesser-known nooks and crannies. The capital is known for its world-class
                                cuisines, fashion statement, and superb shopping.
                            </p>
                            <div class="resort-btn mt-40"><a href="#" class="th-btn style4 th-icon">Book
                                    Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="resort-image global-img"><img
                                src="{{ asset('assets/img/destination/europe/London.jpg') }}" alt="">
                        </div>
                    </div>
                    <div>
                        <p class="resort-text">
                            There are various art galleries in London that have preserved the rich culture and history of
                            this city. From museums to aquariums to giant shopping centers to world-class hotels and
                            restaurants, you’ll find everything in London to keep you on your toes. London tourism has
                            significantly increased in recent times because of the new avenues it has added in its already
                            diverse historical and cultural scene. you can feel like being in the royal era by visiting
                            Buckingham Palace, and you can recreate the scenes of your favorite movies at Warner Bros
                            studio.
                        </p>
                    </div>
                </div>

                {{-- Norway --}}
                <div class="row gx-60 gy-30 mb-60 align-items-center">
                    <div class="col-lg-5">
                        <div class="resort-image global-img"><img
                                src="{{ asset('assets/img/destination/europe/Norway.webp') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="resort-content">
                            <h3 class="box-title"><a href="resort-details.html">Switzerland</a></h3>

                            <p class="resort-text">
                                Encompassing the mountains, the giant glaciers and the deep sea fjords, Norway is a
                                Scandinavian Country. Being a home to the vikings, Norway has been exhibiting the boldness
                                and determination of the past with its culture and local vibe. Also known as the “land of
                                midnight sun”, Norway is famed for the magical phenomenon of northern lights. The skies of
                                Norway have always been the most attractive part about it.
                            </p>
                            <p class="resort-text">
                                The glistening waves of lights in the midnight in the form of “lights” have attracted flocks
                                of tourists towards it from all over the world. Apart from this, its scenic fjords and
                                phenomenal lakes further make it an even more beautiful country to visit as a tourist.
                            </p>

                            <div class="resort-btn mt-40"><a href="#" class="th-btn style4 th-icon">Book
                                    Now</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p class="resort-text">
                            Norway stays cold most of the time and the winters here are generally bitterly cold. While most
                            parts of the country remain blanketed in snow, you will find many famous places here which will
                            be perfect to visit in winters as well. The months of January and February are dark and the
                            coldest hence make sure that you visit here from April to October.
                        </p>
                    </div>
                </div>


            </div>
        </div>
        <section class="space">
            <div class="container">

                <div class="destination-area6 position-relative overflow-hidden space">
                    <div class="container th-container">
                        <div class="title-area text-center"><span class="sub-title">Our Gallery</span>
                            <h2 class="sec-title">A simply amazing experience</h2>
                        </div>
                        <div class="slider-area">
                            <div class="swiper th-slider destination-slider2 slider-drag-wrap" id="destiSlider1"
                                data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"}},"effect":"coverflow","coverflowEffect":{"rotate":"-17","stretch":"-8","depth":"330","modifier":"1","slideShadows":"false"},"centeredSlides":"true"}'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="destination-box2 gsap-cursor">
                                            <div class="destination-img"><img
                                                    src="{{ asset('assets/img/destination/europe/Switzerland.jpg') }}"
                                                    alt="destination image"> <a
                                                    href="{{ asset('assets/img/destination/europe/Switzerland.jpg') }}"
                                                    class="popup-image">
                                                    <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i>
                                                    </div>
                                                </a></div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="destination-box2 gsap-cursor">
                                            <div class="destination-img"><img
                                                    src="{{ asset('assets/img/destination/europe/Greece.webp') }}"
                                                    alt="destination image"> <a
                                                    href="{{ asset('assets/img/destination/europe/Greece.webp') }}"
                                                    class="popup-image">
                                                    <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i>
                                                    </div>
                                                </a></div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="destination-box2 gsap-cursor">
                                            <div class="destination-img"><img
                                                    src="{{ asset('assets/img/destination/europe/paris.webp') }}"
                                                    alt="destination image"> <a
                                                    href="{{ asset('assets/img/destination/europe/paris.webp') }}"
                                                    class="popup-image">
                                                    <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i>
                                                    </div>
                                                </a></div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="destination-box2 gsap-cursor">
                                            <div class="destination-img"><img
                                                    src="{{ asset('assets/img/destination/europe/Rome.jpg') }}"
                                                    alt="destination image"> <a
                                                    href="{{ asset('assets/img/destination/europe/Rome.jpg') }}"
                                                    class="popup-image">
                                                    <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i>
                                                    </div>
                                                </a></div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="destination-box2 gsap-cursor">
                                            <div class="destination-img"><img
                                                    src="{{ asset('assets/img/destination/europe/Istanbul.jpg') }}"
                                                    alt="destination image"> <a
                                                    href="{{ asset('assets/img/destination/europe/Istanbul.jpg') }}"
                                                    class="popup-image">
                                                    <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i>
                                                    </div>
                                                </a></div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="destination-box2 gsap-cursor">
                                            <div class="destination-img"><img
                                                    src="{{ asset('assets/img/destination/europe/Switzerland.jpg') }}"
                                                    alt="destination image"> <a
                                                    href="{{ asset('assets/img/destination/europe/Switzerland.jpg') }}"
                                                    class="popup-image">
                                                    <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i>
                                                    </div>
                                                </a></div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="destination-box2 gsap-cursor">
                                            <div class="destination-img"><img
                                                    src="{{ asset('assets/img/destination/europe/Greece.webp') }}"
                                                    alt="destination image"> <a
                                                    href="{{ asset('assets/img/destination/europe/Greece.webp') }}"
                                                    class="popup-image">
                                                    <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i>
                                                    </div>
                                                </a></div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="destination-box2 gsap-cursor">
                                            <div class="destination-img"><img
                                                    src="{{ asset('assets/img/destination/europe/paris.webp') }}"
                                                    alt="destination image"> <a
                                                    href="{{ asset('assets/img/destination/europe/paris.webp') }}"
                                                    class="popup-image">
                                                    <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i>
                                                    </div>
                                                </a></div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="destination-box2 gsap-cursor">
                                            <div class="destination-img"><img
                                                    src="{{ asset('assets/img/destination/europe/Rome.jpg') }}"
                                                    alt="destination image"> <a
                                                    href="{{ asset('assets/img/destination/europe/Rome.jpg') }}"
                                                    class="popup-image">
                                                    <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i>
                                                    </div>
                                                </a></div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="destination-box2 gsap-cursor">
                                            <div class="destination-img"><img
                                                    src="{{ asset('assets/img/destination/europe/Istanbul.jpg') }}"
                                                    alt="destination image"> <a
                                                    href="{{ asset('assets/img/destination/europe/Istanbul.jpg') }}"
                                                    class="popup-image">
                                                    <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i>
                                                    </div>
                                                </a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="icon-box mt-60 text-center"><button data-slider-prev="#destiSlider1"
                                    class="slider-arrow style5 default"><img
                                        src="{{ asset('assets/img/icon/right-arrow2.svg') }}" alt=""></button>
                                <button data-slider-next="#destiSlider1" class="slider-arrow style5 default"><img
                                        src="{{ asset('assets/img/icon/left-arrow2.svg') }}" alt=""></button>
                            </div>
                        </div>
                        <div class="shape-mockup shape1 d-none d-xxl-block" data-top="7%" data-right="-9%"><img
                                src="{{ asset('assets/img/shape/shape_1.png') }}" alt="shape"></div>
                        <div class="shape-mockup shape2 d-none d-xl-block" data-top="12%" data-right="-5%"><img
                                src="{{ asset('assets/img/shape/shape_2.png') }}" alt="shape"></div>
                        <div class="shape-mockup shape3 d-none d-xxl-block" data-top="15%" data-right="-9%"><img
                                src="{{ asset('assets/img/shape/shape_3.png') }}" alt="shape"></div>
                        <div class="shape-mockup spin d-none d-xxl-block" data-top="10%" data-left="-12%"><img
                                src="{{ asset('assets/img/shape/shape_2_7.png') }}" alt="shape"></div>
                        <div class="shape-mockup jump d-none d-xxl-block" data-bottom="-5%" data-left="-13%"><img
                                src="{{ asset('assets/img/shape/shape_2_8.png') }}" alt="shape"></div>
                        <div class="shape-mockup movingX d-none d-xxl-block" data-bottom="19%" data-right="-7%"><img
                                src="{{ asset('assets/img/shape/shape_2_9.png') }}" alt="shape"></div>
                    </div>
                </div>
            </div>

        </section>

        <div class="bg-top-center space-top overflow-hidden" data-bg-src="{{ asset('assets/img/bg/contact_bg_3.jpg')}}">
            <div class="container">
                <div class="row gy-4 justify-content-between flex-row-reverse">
                    <div class="col-lg-6">
                        <div class="pt-75 ps-xl-5 ms-xl-5">
                            <div class="title-area mb-10"><span class="sub-title text-white">Get in touch</span>
                                <h2 class="sec-title text-white">Hi there! What can I do for you today?</h2>
                                <p class="text-white mb-0">We’love to hear from you. Our friendly team is always here to
                                    chat</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-form-area2 pe-xl-5">
                            <form action="#" method="POST"
                                class="contact-form2 ajax-contact">
                                <div class="row">
                                    <div class="form-group col-12"><input type="text" class="form-control"
                                            name="name" id="name3" placeholder="First Name"> <img
                                            src="{{ asset('assets/img/icon/user.svg')}}" alt="">
                                    </div>
                                    <div class="form-group col-12"><input type="email" class="form-control"
                                            name="email3" id="email3" placeholder="Your Mail"> <img
                                            src="{{ asset('assets/img/icon/mail.svg')}}" alt="">
                                    </div>
                                    <div class="form-group col-12"><input type="destination" class="form-control"
                                            name="destination3" id="destination3" placeholder="Your destination"> <img
                                            src="{{ asset('assets/img/icon/mail.svg')}}" alt="">
                                    </div>
                                    <div class="form-group col-12"><select name="subject" id="subject"
                                            class="form-select nice-select">
                                            <option value="Select Tour Type" selected="selected" disabled="disabled">
                                                Select
                                                Service Type</option>
                                            <option value="Air Ticketing">Air Ticketing</option>
                                            <option value="Travel Visa">Travel Visa</option>
                                            <option value="Travel Insurance">Travel Insurance</option>
                                            <option value="Hotel Booking">Hotel Booking</option>
                                            <option value="Holiday Packges">Holiday Packges</option>
                                        </select></div>
                                    <div class="form-group col-12">
                                        <textarea name="message" id="message" cols="30" rows="3" class="form-control"
                                            placeholder="Your Message"></textarea> <img src="{{ asset('assets/img/icon/chat.svg')}}" alt="">
                                    </div>
                                </div>
                                <p class="form-messages mb-0 mt-3"></p>
                            </form>
                            <div class="form-btn-wrapp">
                                <div class="form-btn"><button class="th-btn white-btn">Send Message <img
                                            src="assets/img/icon/plane3.svg" alt=""></button></div>
                                <div class="contact-info">
                                    <p class="contact-info_link"><a href="tel:+0123456789">+012 345 6789</a></p>
                                    <div class="contact-info_icon"><a href="tel:+0123456789"><img
                                                src="assets/img/icon/call.svg" alt=""></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
