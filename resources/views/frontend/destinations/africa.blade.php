@extends('frontend.layout.websitemain')
@section('content')
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.jpg') }}" data-aos="fade-down"
        data-aos-delay="100">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Africa Tourism</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Destination</li>
                    <li>Africa</li>
                </ul>
            </div>
        </div>
    </div>

    <section class="space">
        <div class="container">
            <div class="row">
                <div class="tour-page-single">
                    <h2 class="box-title" data-aos="fade-up" data-aos-delay="200">Africa Tourist Places</h2>
                    <div class="row">
                        <div class="col-xxl-6" data-aos="zoom-in" data-aos-delay="300">
                            <div class="slider-area tour-slider1">
                                <div class="swiper th-slider mb-4" id="tourSlider4"
                                    data-slider-options='{"effect":"fade","loop":true,"thumbs":{"swiper":".tour-thumb-slider"},"autoplayDisableOnInteraction":"true"}'>
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="tour-slider-img"><img
                                                    src="{{ asset('assets/img/destination/africa/SouthAfrica.webp') }}"
                                                    alt="South Africa"></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tour-slider-img"><img
                                                    src="{{ asset('assets/img/destination/africa/Mauritius.webp') }}"
                                                    alt="Mauritius"></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tour-slider-img"><img
                                                    src="{{ asset('assets/img/destination/africa/Egypt.webp') }}"
                                                    alt="Egypt"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper th-slider tour-thumb-slider"
                                    data-slider-options='{"effect":"slide","loop":true,"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"}},"autoplayDisableOnInteraction":"true"}'>
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="tour-slider-img"><img
                                                    src="{{ asset('assets/img/destination/africa/SouthAfrica.webp') }}"
                                                    alt="South Africa"></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tour-slider-img"><img
                                                    src="{{ asset('assets/img/destination/africa/Mauritius.webp') }}"
                                                    alt="Mauritius"></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tour-slider-img"><img
                                                    src="{{ asset('assets/img/destination/africa/Egypt.webp') }}"
                                                    alt="Egypt"></div>
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
                                Africa, the land of raw beauty and untamed wilderness, is a continent that promises endless discoveries. From the golden sands of the Sahara to lush savannas, breathtaking mountains, and turquoise coastlines, Africa is home to some of the most diverse landscapes on Earth. Countries like South Africa, Mauritius, Egypt, Kenya, Seychelles, Morocco, Zimbabwe, Madagascar, Namibia, Botswana, Ethiopia, Tanzania, Nigeria, and Uganda each offer their own unique charm, making Africa a dream destination for travelers.
                            </p>
                            <p class="box-text mb-30" data-aos="fade-up" data-aos-delay="600">
                                For adventure seekers, the continent’s famed National Parks and Reserves—such as the Serengeti, Maasai Mara, and Kruger—are havens for thrilling wildlife safaris and a chance to witness the Big Five up close. Nature lovers can explore ancient caves, thundering waterfalls like Victoria Falls, and vast rivers such as the Nile. Meanwhile, history buffs can immerse themselves in the mysteries of Egypt’s pyramids or the cultural heritage of Morocco’s medinas.
                            </p>
                            <p class="box-text mb-30" data-aos="fade-up" data-aos-delay="700">
                                Whether it’s relaxing on the idyllic beaches of Seychelles and Mauritius, trekking through the jungles of Uganda to meet gorillas, or standing in awe of Africa’s grand mountains, the continent offers experiences that are as diverse as they are unforgettable.
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
                                        src="{{ asset('assets/img/destination/africa/SouthAfrica.webp') }}"
                                        alt="South Africa"></div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="#">South Africa</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-aos="fade-up" data-aos-delay="300">
                            <div class="destination-item2 th-ani">
                                <div class="box-img global-img"><img
                                        src="{{ asset('assets/img/destination/africa/Mauritius.webp') }}" alt="Mauritius">
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="#">Mauritius</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-aos="fade-up" data-aos-delay="400">
                            <div class="destination-item2 th-ani">
                                <div class="box-img global-img"><img
                                        src="{{ asset('assets/img/destination/africa/Egypt.webp') }}" alt="Egypt">
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="#">Egypt</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-aos="fade-up" data-aos-delay="500">
                            <div class="destination-item2 th-ani">
                                <div class="box-img global-img"><img
                                        src="{{ asset('assets/img/destination/africa/Kenya.webp') }}" alt="Kenya"></div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="#">Kenya</a></h3>
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

            {{-- South Africa --}}
            <div class="row gx-60 gy-30 mb-60 align-items-center">
                <div class="col-lg-5" data-aos="fade-left" data-aos-delay="3900">
                    <div class="resort-image global-img"><img
                            src="{{ asset('assets/img/destination/africa/SouthAfrica.webp') }}" alt="South Africa"></div>
                </div>
                <div class="col-lg-7">
                    <div class="resort-content" data-aos="fade-right" data-aos-delay="4000">
                        <h3 class="box-title"><a href="#">South Africa</a></h3>
                        <p class="resort-text">South Africa is a land of breathtaking diversity, where natural beauty, rich culture, and thrilling adventures come together seamlessly. From golden coastlines and majestic mountains to vast wildlife reserves and vibrant cities, the country offers something for every type of traveler.</p>
                        <p class="resort-text">Known as a paradise for nature and wildlife lovers, South Africa is home to iconic safaris in Kruger National Park, where you can spot the famous Big Five. Adventure seekers can hike up Table Mountain, explore the dramatic Drakensberg Mountains, or dive into shark-cage experiences along the coast. For those who prefer a laid-back escape, the scenic Garden Route and Cape Winelands offer the perfect blend of relaxation and exploration.</p>
                        <div class="resort-btn mt-40"><a href="{{ route('contactus') }}"
                                class="th-btn style4 th-icon">Book Now</a></div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="4100">
                    <p class="resort-text">Adding to its charm is the incredible cultural diversity reflected in its people, traditions, and world-class cuisines, making every journey here an enriching experience. With well-developed tourist infrastructure and a strong commitment to preserving its natural wonders, South Africa continues to attract visitors from all over the globe year-round.</p>
                    <p class="resort-text">📍 Popular Destinations: Cape Town, Johannesburg, Durban, Kruger National Park, Garden Route, Drakensberg Mountains</p>
                    <p class="resort-text">✨ Highlights: Wildlife safaris, Table Mountain, pristine beaches, wine tours, adventure activities</p>
                </div>
            </div>

            {{-- Mauritius --}}
            <div class="row gx-60 gy-30 mb-60 align-items-center">
                <div class="col-lg-7">
                    <div class="resort-content" data-aos="fade-left" data-aos-delay="4200">
                        <h3 class="box-title"><a href="#">Mauritius</a></h3>
                        <p class="resort-text">Mauritius is an enchanting tropical paradise in the heart of the Indian Ocean, known for its stunning natural beauty and luxurious travel experiences. The island boasts a diverse ecosystem—lush forests, volcanic mountains, cascading waterfalls, vibrant coral reefs, and powdery white-sand beaches lined with swaying palm trees. Whether you’re seeking adventure or pure relaxation, Mauritius offers the perfect balance.</p>
                        <p class="resort-text">With its maritime tropical climate, the weather remains warm and inviting throughout the year. Summers are balmy, while winters are pleasantly cool, making it a year-round destination. The island’s world-class 5-star resorts and beachfront properties add a touch of luxury, ensuring travelers can unwind in style while soaking in the breathtaking surroundings.</p>
                        <div class="resort-btn mt-40"><a href="{{ route('contactus') }}"
                                class="th-btn style4 th-icon">Book Now</a></div>
                    </div>
                </div>
                <div class="col-lg-5" data-aos="fade-right" data-aos-delay="4300">
                    <div class="resort-image global-img"><img
                            src="{{ asset('assets/img/destination/africa/Mauritius.webp') }}" alt="Mauritius"></div>
                </div>
                <div data-aos="fade-up" data-aos-delay="4400">
                    <p class="resort-text">For adventure lovers, Mauritius is a playground of thrilling experiences. Explore the underwater world through scuba diving, snorkeling, or sea walking, or enjoy dolphin and whale-watching tours. On land, adrenaline seekers can go skydiving, trekking, or mountain climbing, while nature enthusiasts can explore tea plantations, national parks, and unique volcanic landscapes.</p>
                    <p class="resort-text">📍 Popular Attractions: Grand Baie, Le Morne Brabant, Chamarel Seven Colored Earth, Île aux Cerfs, Black River Gorges National Park</p>
                    <p class="resort-text">✨ Highlights: Beaches & lagoons, luxury resorts, water sports, cultural diversity, adventure activities</p>
                </div>
            </div>

            {{-- Egypt --}}
            <div class="row gx-60 gy-30 mb-60 align-items-center">
                <div class="col-lg-5" data-aos="fade-left" data-aos-delay="4500">
                    <div class="resort-image global-img"><img
                            src="{{ asset('assets/img/destination/africa/Egypt.webp') }}" alt="Egypt"></div>
                </div>
                <div class="col-lg-7">
                    <div class="resort-content" data-aos="fade-right" data-aos-delay="4600">
                        <h3 class="box-title"><a href="#">Egypt</a></h3>
                        <p class="resort-text">Egypt is one of the most fascinating travel destinations in the world, combining history, culture, and adventure. The country is home to ancient monuments, temples, tombs, vast deserts, the mighty Nile River, and breathtaking treasures of early civilization. Every year, millions of tourists visit Egypt to marvel at its timeless wonders and explore its unique landscapes.</p>
                        <p class="resort-text">But Egypt is not just about pyramids and ruins—there’s something for every kind of traveler. Beach lovers can head to the Sinai or the Red Sea coast to soak up the sun and enjoy water sports such as diving, sailing, and surfing. Adventure seekers can explore the deserts and oases, while archaeology enthusiasts will find Luxor, the “world’s greatest open-air museum,” an absolute delight.</p>
                        <div class="resort-btn mt-40"><a href="{{ route('contactus') }}"
                                class="th-btn style4 th-icon">Book Now</a></div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="4700">
                    <p class="resort-text">For those who love vibrant city life, Cairo, the bustling capital, offers unmatched energy, historic mosques, bazaars, and museums. On the other hand, destinations like Siwa Oasis and Aswan provide a peaceful escape with a slower, traditional lifestyle.</p>
                </div>
            </div>

            {{-- Kenya --}}
            <div class="row gx-60 gy-30 mb-60 align-items-center">
                <div class="col-lg-7">
                    <div class="resort-content" data-aos="fade-left" data-aos-delay="4800">
                        <h3 class="box-title"><a href="#">Kenya</a></h3>
                        <p class="resort-text">Located in the heart of East Africa, Kenya is a land of breathtaking contrasts and incredible biodiversity. Bordered by the Indian Ocean, this enchanting country offers everything from pristine coastlines to vast savannahs teeming with wildlife. It is world-renowned for the Great Wildebeest Migration, one of nature’s most spectacular events, where millions of wildebeests, zebras, and gazelles move across the Maasai Mara in search of greener pastures.</p>
                        <p class="resort-text">For adventure seekers, Kenya is paradise. Mount Kilimanjaro and Mount Kenya provide stunning backdrops for trekking and mountain climbing, while safaris in world-famous reserves like Maasai Mara, Amboseli, and Tsavo allow close encounters with Africa’s “Big Five” – lions, elephants, rhinos, leopards, and buffalo.</p>
                        <div class="resort-btn mt-40"><a href="{{ route('contactus') }}"
                                class="th-btn style4 th-icon">Book Now</a></div>
                    </div>
                </div>
                <div class="col-lg-5" data-aos="fade-right" data-aos-delay="4900">
                    <div class="resort-image global-img"><img src="{{ asset('assets/img/destination/africa/Kenya.webp') }}"
                            alt="Kenya"></div>
                </div>
                <div data-aos="fade-up" data-aos-delay="5000">
                    <p class="resort-text">Beyond the savannah, Kenya’s idyllic coastline is perfect for relaxation, water sports, and exploring coral reefs. For a unique experience, travelers can take a Balloon Safari, floating peacefully above the endless plains, or indulge in world-class golfing in scenic grasslands.</p>
                    <p class="resort-text">Whether it’s adventure, wildlife, or relaxation, Kenya offers a perfect balance of thrill and tranquility, making it a must-visit destination for every traveler.</p>
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
                                                src="{{ asset('assets/img/destination/africa/SouthAfrica.webp') }}"
                                                alt="South Africa">
                                            <a href="{{ asset('assets/img/destination/africa/SouthAfrica.webp') }}"
                                                class="popup-image">
                                                <div class="icon-btn"><i class="fas fa-search-plus"></i></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-aos="fade-up" data-aos-delay="6300">
                                    <div class="destination-box2 gsap-cursor">
                                        <div class="destination-img"><img
                                                src="{{ asset('assets/img/destination/africa/Mauritius.webp') }}"
                                                alt="Mauritius">
                                            <a href="{{ asset('assets/img/destination/africa/Mauritius.webp') }}"
                                                class="popup-image">
                                                <div class="icon-btn"><i class="fas fa-search-plus"></i></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-aos="fade-up" data-aos-delay="6400">
                                    <div class="destination-box2 gsap-cursor">
                                        <div class="destination-img"><img
                                                src="{{ asset('assets/img/destination/africa/Egypt.webp') }}"
                                                alt="Egypt">
                                            <a href="{{ asset('assets/img/destination/africa/Egypt.webp') }}"
                                                class="popup-image">
                                                <div class="icon-btn"><i class="fas fa-search-plus"></i></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-aos="fade-up" data-aos-delay="6500">
                                    <div class="destination-box2 gsap-cursor">
                                        <div class="destination-img"><img
                                                src="{{ asset('assets/img/destination/africa/Kenya.webp') }}"
                                                alt="Kenya">
                                            <a href="{{ asset('assets/img/destination/africa/Kenya.webp') }}"
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
