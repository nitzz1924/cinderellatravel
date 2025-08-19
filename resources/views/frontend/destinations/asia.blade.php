@extends('frontend.layout.websitemain')
@section('content')
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.jpg') }}" data-aos="fade-down"
        data-aos-delay="100">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Asia Tourism</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Destination</li>
                    <li>Asia</li>
                </ul>
            </div>
        </div>
    </div>

    <section class="space">
        <div class="container">
            <div class="row">
                <div class="tour-page-single">
                    <h2 class="box-title" data-aos="fade-up" data-aos-delay="200">Asia Tourist Places</h2>
                    <div class="row">
                        <div class="col-xxl-6" data-aos="zoom-in" data-aos-delay="300">
                            <div class="slider-area tour-slider1">
                                <div class="swiper th-slider mb-4" id="tourSlider4"
                                    data-slider-options='{"effect":"fade","loop":true,"thumbs":{"swiper":".tour-thumb-slider"},"autoplayDisableOnInteraction":"true"}'>
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="tour-slider-img"><img
                                                    src="{{ asset('assets/img/destination/asia/asia-best-places-to-visit-mount-fuji-japan.jpg') }}"
                                                    alt="Switzerland"></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tour-slider-img"><img
                                                    src="{{ asset('assets/img/destination/asia/asia-best-places-to-visit-dead-sea-israel-city.jpg') }}"
                                                    alt="Greece"></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tour-slider-img"><img
                                                    src="{{ asset('assets/img/destination/asia/asia-best-places-to-visit-phuket-thailand.jpg') }}"
                                                    alt="Paris"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper th-slider tour-thumb-slider"
                                    data-slider-options='{"effect":"slide","loop":true,"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"}},"autoplayDisableOnInteraction":"true"}'>
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="tour-slider-img"><img
                                                    src="{{ asset('assets/img/destination/asia/asia-best-places-to-visit-mount-fuji-japan.jpg') }}"
                                                    alt="Switzerland"></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tour-slider-img"><img
                                                    src="{{ asset('assets/img/destination/asia/asia-best-places-to-visit-dead-sea-israel-city.jpg') }}"
                                                    alt="Greece"></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tour-slider-img"><img
                                                    src="{{ asset('assets/img/destination/asia/asia-best-places-to-visit-phuket-thailand.jpg') }}"
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
                                Asia is the largest continent by both size and population–a diverse, multicultural melting
                                pot of some of the oldest civilizations on earth. There’s so much to see and do in Asia,
                                it’s hard to narrow it down to a shortlist–it could take you months to truly explore just
                                one country.
                            </p>
                            <p class="box-text mb-30" data-aos="fade-up" data-aos-delay="600">
                                For those on a tighter schedule or budget, the secret to discovering the best places to
                                travel in Asia is to see a bit of everything–from the skyscrapers of Hong Kong to the
                                majestic slopes of Mount Fuji and the architectural marvel of places like Angkor Wat in
                                Cambodia.
                            </p>
                            <p class="box-text mb-30" data-aos="fade-up" data-aos-delay="700">
                                Regardless of what you truly want to experience in your travels through Asia, there’s surely
                                a spot somewhere to fill that need. To help you plan the trip of a lifetime, take a look at
                                our list of the best places to visit in Asia.
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
                                        src="{{ asset('assets/img/destination/asia/asia-best-places-to-visit-mount-fuji-japan.jpg') }}"
                                        alt="Mount Fuji, Japan"></div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="#">Mount Fuji, Japan</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-aos="fade-up" data-aos-delay="300">
                            <div class="destination-item2 th-ani">
                                <div class="box-img global-img"><img
                                        src="{{ asset('assets/img/destination/asia/asia-best-places-to-visit-dead-sea-israel-city.jpg') }}" alt="Greece">
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="#">Dead Sea, Israel</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-aos="fade-up" data-aos-delay="400">
                            <div class="destination-item2 th-ani">
                                <div class="box-img global-img"><img
                                        src="{{ asset('assets/img/destination/asia/asia-best-places-to-visit-phuket-thailand.jpg') }}" alt="Paris">
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="#">Phuket, Thailand</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-aos="fade-up" data-aos-delay="500">
                            <div class="destination-item2 th-ani">
                                <div class="box-img global-img"><img
                                        src="{{ asset('assets/img/destination/asia/asia-best-places-to-visit-beijing-china.jpg') }}" alt="Rome"></div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="#">Beijing, China</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-aos="fade-up" data-aos-delay="600">
                            <div class="destination-item2 th-ani">
                                <div class="box-img global-img"><img
                                        src="{{ asset('assets/img/destination/asia/asia-best-places-to-visit-hong-kong.jpg') }}" alt="Istanbul">
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="#">Hong Kong</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-aos="fade-up" data-aos-delay="3500">
                            <div class="destination-item2 th-ani">
                                <div class="box-img global-img"><img
                                        src="{{ asset('assets/img/destination/asia/asia-best-places-to-visit-singapore.jpg') }}" alt="London">
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="#">Singapore</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-aos="fade-up" data-aos-delay="3600">
                            <div class="destination-item2 th-ani">
                                <div class="box-img global-img"><img
                                        src="{{ asset('assets/img/destination/asia/asia-best-places-to-visit-jaipur-india.jpg') }}" alt="Norway">
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="#">Jaipur, India</a></h3>
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
                            src="{{ asset('assets/img/destination/asia/asia-best-places-to-visit-mount-fuji-japan.jpg') }}" alt="Switzerland"></div>
                </div>
                <div class="col-lg-7">
                    <div class="resort-content" data-aos="fade-right" data-aos-delay="4000">
                        <h3 class="box-title"><a href="#">Mount Fuji, Japan</a></h3>
                        <p class="resort-text">Although Mount Fuji is an active stratovolcano, it hasn’t erupted since
                            1708. The stunning snowcapped mountain is one of Japan’s “Three Holy Mountains,” which are
                            traditionally considered to hold a particular power–Mount Fuji has volcanic power.</p>
                        <p class="resort-text">While many visitors come here to just photograph this World Heritage List
                            Cultural Site and well-known symbol of Japan, others arrive for the climbing opportunities.
                            Until the late 19th century, women were not allowed to make their way to the summit (which is
                            still considered a sacred site), so visitors of all ethnicities, genders, and ages now arrive to
                            make up for lost time.</p>
                        <div class="resort-btn mt-40"><a href="{{ route('contactus') }}"
                                class="th-btn style4 th-icon">Book Now</a></div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="4100">
                    <p class="resort-text">There are four possible routes to reach the top of the mountain, and all offer a
                        number of stops along the way in the form of shrines, historical monuments, and even teahouses. You
                        may also want to plan your visit to Japan around the spring cherry blossoms, another popular tourist
                        attraction.</p>
                </div>
            </div>

            {{-- Dead Sea --}}
            <div class="row gx-60 gy-30 mb-60 align-items-center">
                <div class="col-lg-7">
                    <div class="resort-content" data-aos="fade-left" data-aos-delay="4200">
                        <h3 class="box-title"><a href="#">Dead Sea, Israel</a></h3>
                        <p class="resort-text">The dark blue waters of the Dead Sea touch the borders of both Jordan and
                            Israel. Actually a lake despite its name, the Dead Sea sits at the lowest land elevation on
                            Earth–over 430 meters below sea level. With a salt concentration of around 31 percent–almost 10
                            times saltier than the ocean –the Dead Sea is so thick, nothing can sink into it, and everyone
                            who walks into it will naturally float.</p>
                        <p class="resort-text">While the lake is too salty to support aquatic life, there are plenty of
                            animals that call the surrounding desert home–and hikers will run into anything from hares to
                            foxes and leopards when exploring the nature reserves around the Dead Sea.</p>
                        <div class="resort-btn mt-40"><a href="{{ route('contactus') }}"
                                class="th-btn style4 th-icon">Book Now</a></div>
                    </div>
                </div>
                <div class="col-lg-5" data-aos="fade-right" data-aos-delay="4300">
                    <div class="resort-image global-img"><img
                            src="{{ asset('assets/img/destination/asia/asia-best-places-to-visit-dead-sea-israel-city.jpg') }}" alt="Greece"></div>
                </div>
                <div data-aos="fade-up" data-aos-delay="4400">
                    <p class="resort-text">While the coastline around the lake has become a flourishing spa and resort
                        destination, there is also a large influx of religious tourism in the area. Jericho, the city where
                        Jesus is said to have healed blind beggars, is located just minutes northwest of the Dead Sea–and a
                        number of other cities, including the legendary Sodom and Gomorra, as well as Zoar and Admah, are
                        also located in this area. The area boasts some of the oldest inhabited cities in the world.</p>
                </div>
            </div>

            {{-- Phuket --}}
            <div class="row gx-60 gy-30 mb-60 align-items-center">
                <div class="col-lg-5" data-aos="fade-left" data-aos-delay="4500">
                    <div class="resort-image global-img"><img
                            src="{{ asset('assets/img/destination/asia/asia-best-places-to-visit-phuket-thailand.jpg') }}" alt="Paris"></div>
                </div>
                <div class="col-lg-7">
                    <div class="resort-content" data-aos="fade-right" data-aos-delay="4600">
                        <h3 class="box-title"><a href="#">Phuket, Thailand</a></h3>
                        <p class="resort-text">03. Phuket, Thailand
                            Thailand’s biggest island is also a magnet for visitors–and for good reason. Phuket boasts some
                            of the best beaches in the country, with clean, soft, rolling sands and turquoise waters as far
                            as the eye can see. Kata, Hat Karon, and Kamala beaches see a lot of tourists during the high
                            season (November to February) but remain sleepy little villages once the rains arrive.</p>
                        <p class="resort-text">Beautiful coral reefs line up the coastline, offering amazing opportunities
                            for snorkeling and diving but also sea kayaking and island hopping. In between hours of lying
                            under the sun, visitors can head to the white and gold Wat Chalong, the largest and most
                            important Buddhist temple on the island, or climb up a hill to reach the Big Buddha–a
                            45-meter-tall statue covered with Burmese marble.</p>
                        <div class="resort-btn mt-40"><a href="{{ route('contactus') }}"
                                class="th-btn style4 th-icon">Book Now</a></div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="4700">
                    <p class="resort-text">The island is also home to a number of unique festivals. The Ghost Festival
                        during the 7th Chinese lunar month is dedicated to ancestor worship, and it entails releasing
                        lanterns into the ocean to help guide lost souls–a sight to behold. The Vegetarian Festival during
                        the 9th Chinese lunar month is another stunning celebration–which, despite the name, is not so much
                        about food but about purification and putting the body through extreme tests, such as fire walking
                        and hanging from hooks.</p>
                </div>
            </div>

            {{-- Beijing --}}
            <div class="row gx-60 gy-30 mb-60 align-items-center">
                <div class="col-lg-7">
                    <div class="resort-content" data-aos="fade-left" data-aos-delay="4800">
                        <h3 class="box-title"><a href="#">Beijing, China</a></h3>
                        <p class="resort-text">One of the most populous cities in the world, Beijing is also one of the
                            oldest. You can get a peek into that history by walking the hutongs of Beijing, the narrow
                            alleyways lined up with traditional homes and courtyards. China’s capital is home to seven
                            UNESCO World Heritage Sites, including the Imperial Summer Palace and its gardens, the oldest
                            canal in the world, and the Forbidden City–a palace complex that served as the home of China’s
                            emperors for 500 years starting in the 1420s.</p>
                        <p class="resort-text">The Forbidden City–made up of almost 1,000 different buildings–is one of
                            Beijing’s most impressive tourist attractions.The city also offers visitors many unique-looking
                            pagodas and temples, including the 12th-century, eight-sided Tianning Temple, as well as almost
                            150 museums and galleries.</p>
                        <div class="resort-btn mt-40"><a href="{{ route('contactus') }}"
                                class="th-btn style4 th-icon">Book Now</a></div>
                    </div>
                </div>
                <div class="col-lg-5" data-aos="fade-right" data-aos-delay="4900">
                    <div class="resort-image global-img"><img src="{{ asset('assets/img/destination/asia/asia-best-places-to-visit-beijing-china.jpg') }}"
                            alt="Rome"></div>
                </div>
                <div data-aos="fade-up" data-aos-delay="5000">
                    <p class="resort-text">The Military Museum of the Chinese People’s Revolution and the National Art
                        Museum of China have massive collections and are well worth a visit. Several sections of the Great
                        Wall can also be found within Beijing, including the wall’s most visited site, the 80-kilometer-long
                        Badaling section.</p>
                </div>
            </div>

            {{-- Hong Kong --}}
            <div class="row gx-60 gy-30 mb-60 align-items-center">
                <div class="col-lg-5" data-aos="fade-left" data-aos-delay="5100">
                    <div class="resort-image global-img"><img
                            src="{{ asset('assets/img/destination/asia/asia-best-places-to-visit-hong-kong.jpg') }}" alt="Istanbul"></div>
                </div>
                <div class="col-lg-7">
                    <div class="resort-content" data-aos="fade-right" data-aos-delay="5200">
                        <h3 class="box-title"><a href="#">Hong Kong</a></h3>
                        <p class="resort-text">05. Hong Kong
                            Over 7.4 million people from all over the world occupy the small 1,104-square-kilometer island
                            of Hong Kong, making it the third most densely populated place in the world. Despite having one
                            of the world’s highest per capita incomes, income inequality has become one of Hong Kong’s main
                            issues, and lower-income families often live in crowded tenement buildings. </p>
                        <p class="resort-text">The buildings themselves have become tourist attractions, as many are
                            historic structures dating back over a century. Hong Kong is home to a Disneyland park, as well
                            as Ocean Park, an amusement park with rollercoasters, thrill, and water rides.</p>
                        <div class="resort-btn mt-40"><a href="{{ route('contactus') }}"
                                class="th-btn style4 th-icon">Book Now</a></div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="5300">
                    <p class="resort-text">Hong Kong also has the largest number of skyscrapers in the world at 355–an
                        impressive 75 more than the city in second place, New York. A good number of these are located
                        around Victoria Harbor, a popular tourist area with one of the most stunning coastal skylines in
                        Asia. For the best views, visitors can climb to the top of Victoria Peak, HK’s highest hill and home
                        to a leisure and shopping complex with an enclosed viewing terrace looking over the city below.</p>
                </div>
            </div>

            {{-- Singapore --}}
            <div class="row gx-60 gy-30 mb-60 align-items-center">
                <div class="col-lg-7">
                    <div class="resort-content" data-aos="fade-left" data-aos-delay="5400">
                        <h3 class="box-title"><a href="#">Singapore</a></h3>
                        <p class="resort-text">Singapore only gained full independence from the UK and became a sovereign
                            state in 1965, but this brand-new country is now a financial powerhouse and one of the most fun
                            countries to visit in Southeast Asia. Because of its size and location, Singapore doesn’t have a
                            lot of beaches–unless you count the three beaches on Sentosa Island resort, small but with soft
                            white sands and protected lagoons with clean blue waters–but it makes up for it with themed
                            attractions, lush rain forests, and lively coastal fun.
                        </p>
                        <p class="resort-text">From its own Universal Studios park and a 50-meter bungee jump from a tower
                            over the beach to the Marina Bay Sands resort and its rooftop, which includes an infinity pool
                            and a skybridge, Singapore has quickly established itself as a thrilling destination.</p>
                        <div class="resort-btn mt-40"><a href="{{ route('contactus') }}"
                                class="th-btn style4 th-icon">Book Now</a></div>
                    </div>
                </div>
                <div class="col-lg-5" data-aos="fade-right" data-aos-delay="5500">
                    <div class="resort-image global-img"><img
                            src="{{ asset('assets/img/destination/asia/asia-best-places-to-visit-singapore.jpg') }}" alt="London"></div>
                </div>
                <div data-aos="fade-up" data-aos-delay="5600">
                    <p class="resort-text">But this island-state also has plenty to offer in the form of greener
                        entertainment, starting with the magical Gardens by the Bay, a 100-hectare nature park with the
                        largest glass greenhouse in the world, two cooled conservatories, and plenty of artistically
                        designed trees and flower areas. Singapore’s nature-themed Jewel Changi Airport has been recognized
                        as one of the best in the world–it features not only the world’s tallest indoor waterfall, but also
                        an indoor suspension bridge 23 meters up in the air, four slides, and a butterfly garden.</p>
                </div>
            </div>

            {{-- Jaipur --}}
            <div class="row gx-60 gy-30 mb-60 align-items-center">
                <div class="col-lg-5" data-aos="fade-left" data-aos-delay="5700">
                    <div class="resort-image global-img"><img
                            src="{{ asset('assets/img/destination/asia/asia-best-places-to-visit-jaipur-india.jpg') }}" alt="Norway"></div>
                </div>
                <div class="col-lg-7">
                    <div class="resort-content" data-aos="fade-right" data-aos-delay="5800">
                        <h3 class="box-title"><a href="#">Jaipur, India</a></h3>
                        <p class="resort-text">
                            New Delhi and Mumbai might be India’s best-known cities, but Jaipur takes home the “most
                            beautiful” prize. Known as the “pink city” because of the unique color of the stone used to
                            build many of the structures around, Jaipur is also home to a community of artisans. Here,
                            craftsmen produce everything from block printing and blue pottery to shellac work; stone
                            carvings; and Bandhani, the unique art of decorating tie-dye textile by plucking sections of it
                            with the fingernails.</p>
                        <p class="resort-text">Many of the most breathtaking attractions in Jaipur are architectural
                            marvels, including the stunning Jal Mahal palace, which sits in the center of the Man Sagar
                            Lake.</p>
                        <div class="resort-btn mt-40"><a href="{{ route('contactus') }}"
                                class="th-btn style4 th-icon">Book Now</a></div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="5900">
                    <p class="resort-text">Many other monuments and pink structures are located within 10 kilometers of the
                        city, including the ancient temple complex Galtaji, built right into narrow hills and surrounded by
                        sacred kunds (small water pools). The world’s largest stone sundial at Jantar Mantar and the
                        10th-century red sandstone and marble Amer Fort are also just outside the city and attract many
                        visitors.</p>
                </div>
            </div>

            {{-- Kathmandu, Nepal --}}
            <div class="row gx-60 gy-30 mb-60 align-items-center">
                <div class="col-lg-7">
                    <div class="resort-content" data-aos="fade-left" data-aos-delay="5400">
                        <h3 class="box-title"><a href="#">Kathmandu, Nepal</a></h3>
                        <p class="resort-text">08. Kathmandu, Nepal
                            Nepal’s capital and largest city is also known as the “City of Temples.” A melting pot of Hindu
                            and Buddhist religious influences, Kathmandu is full of stupas–including Nepal’s holiest
                            Buddhist site, Boudhanath, a UNESCO World Heritage Site, and Swayambhu, home to holy monkeys and
                            one of the oldest temples in Nepal.
                        </p>
                        <p class="resort-text">Both those looking for a religious experience and camera-toting tourists can
                            find much to appreciate in a city where spirituality touches almost everything. Sitting at an
                            elevation of over 1,400 meters above sea level, Kathmandu is a popular gateway to the Himalayas
                            and to nearby destinations like the Ancient City of Patan.</p>
                        <div class="resort-btn mt-40"><a href="{{ route('contactus') }}"
                                class="th-btn style4 th-icon">Book Now</a></div>
                    </div>
                </div>
                <div class="col-lg-5" data-aos="fade-right" data-aos-delay="5500">
                    <div class="resort-image global-img"><img
                            src="{{ asset('assets/img/destination/asia/asia-best-places-to-visit-kathmandu-nepal.jpg') }}" alt="London"></div>
                </div>
                <div data-aos="fade-up" data-aos-delay="5600">
                    <p class="resort-text">Climbers from all over the world arrive here to set off on their 15-day-long
                        Everest Base Camp trek, but overnight trips around the city are also popular to catch sight of the
                        Himalayas in all their splendor. Even those without a love for adventure can find much to see and do
                        in the capital–from impressive markets to historic monuments to plenty of colorful festivals
                        throughout the year.</p>
                </div>
            </div>

            {{-- Kingdom of Bhutan --}}
            <div class="row gx-60 gy-30 mb-60 align-items-center">
                <div class="col-lg-5" data-aos="fade-left" data-aos-delay="5700">
                    <div class="resort-image global-img"><img
                            src="{{ asset('assets/img/destination/asia/asia-best-places-to-visit-kingdom-of-bhutan.jpg') }}" alt="Norway"></div>
                </div>
                <div class="col-lg-7">
                    <div class="resort-content" data-aos="fade-right" data-aos-delay="5800">
                        <h3 class="box-title"><a href="#">Kingdom of Bhutan</a></h3>
                        <p class="resort-text">Bhutan is a landlocked country surrounded by the Himalayas, Tibet, and parts
                            of India. A nation of steep mountains, green valleys, and swift rivers, Bhutan is home to
                            7,570-meter-tall Gangkhar Puensum, the world’s highest unclimbed mountain.</p>
                        <p class="resort-text">Some of the most beautiful sights in the country are high up, perched on
                            cliffs–Tiger’s Nest Monastery is a good example, set over 3,000 meters up in the mountains and
                            only reachable after a grueling hike. In an effort to protect the biodiversity and historical
                            heritage of the country, free travel throughout the country isn’t allowed. This means all
                            foreign visitors arriving in Bhutan must travel on a pre-paid package tour organized through an
                            approved operator.</p>
                        <div class="resort-btn mt-40"><a href="{{ route('contactus') }}"
                                class="th-btn style4 th-icon">Book Now</a></div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="5900">
                    <p class="resort-text">While some agencies will offer pre-arranged stops, others will work with you to
                        help you see what you’re really interested in–places worth a visit include the fortress and Buddhist
                        monastery ruins of Drukgyal Dzong, the Bumdeling Wildlife Sanctuary (home to the rare black-necked
                        cranes), and a number of dzongs or religious fortresses.</p>
                </div>
            </div>

            {{-- Bagan, Myanmar --}}
            <div class="row gx-60 gy-30 mb-60 align-items-center">
                <div class="col-lg-7">
                    <div class="resort-content" data-aos="fade-left" data-aos-delay="5400">
                        <h3 class="box-title"><a href="#">Bagan, Myanmar</a></h3>
                        <p class="resort-text">An ancient city and one of the top heritage sites in the world, Bagan was
                            once the capital of a powerful kingdom. Today, Bagan and Angkor are the two most important
                            ancient religious sites in Asia, receiving hundreds of thousands of visitors every year. The
                            Bagan Archeological Zone extends over a 41-square-kilometer area and is home to more than 3,000
                            pagodas, stupas, and other religious structures tucked away amid dense forests.
                        </p>
                        <p class="resort-text">Exploring the temples and ruins is a big endeavor and can be done on foot
                            (small sections at a time) or on a rented bike. Shwe Gu Gyi is one of the few temples that can
                            be climbed and offers some of the best views–perfect for photo backgrounds. Otherwise, Nyaung
                            Laphat hill and Sulamani hill are a must-visit to watch the sunrise and sunset over the temples.
                        </p>
                        <div class="resort-btn mt-40"><a href="{{ route('contactus') }}"
                                class="th-btn style4 th-icon">Book Now</a></div>
                    </div>
                </div>
                <div class="col-lg-5" data-aos="fade-right" data-aos-delay="5500">
                    <div class="resort-image global-img"><img
                            src="{{ asset('assets/img/destination/asia/asia-best-places-to-visit-bagan-myanmar.jpg') }}" alt="London"></div>
                </div>
                <div data-aos="fade-up" data-aos-delay="5600">
                    <p class="resort-text">To see Bagan in all its glory, however, you can’t beat taking a hot air balloon
                        ride over the temples. Outside the Archeological Zone, Bagan is famous for its lacquer and sand
                        paintings, both of which you can find at local markets in most villages. Bagan town also has a busy
                        night market and a traditional Burmese market (Mani-Sithu Market), and you can catch a boat tour or
                        a cruise from the town’s central jetty. Thatbyinnyu Pahto temple–the tallest in Bagan at over 200
                        feet–is another must-visit, and so is Gubyaukgyi or the Great Painted Cave Temple with its
                        12th-century frescoes.</p>
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
                                                src="{{ asset('assets/img/destination/asia/asia-best-places-to-visit-mount-fuji-japan.jpg') }}"
                                                alt="Switzerland">
                                            <a href="{{ asset('assets/img/destination/asia/asia-best-places-to-visit-mount-fuji-japan.jpg') }}"
                                                class="popup-image">
                                                <div class="icon-btn"><i class="fas fa-search-plus"></i></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-aos="fade-up" data-aos-delay="6300">
                                    <div class="destination-box2 gsap-cursor">
                                        <div class="destination-img"><img
                                                src="{{ asset('assets/img/destination/asia/asia-best-places-to-visit-dead-sea-israel-city.jpg') }}"
                                                alt="Greece">
                                            <a href="{{ asset('assets/img/destination/asia/asia-best-places-to-visit-dead-sea-israel-city.jpg') }}"
                                                class="popup-image">
                                                <div class="icon-btn"><i class="fas fa-search-plus"></i></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-aos="fade-up" data-aos-delay="6400">
                                    <div class="destination-box2 gsap-cursor">
                                        <div class="destination-img"><img
                                                src="{{ asset('assets/img/destination/asia/asia-best-places-to-visit-phuket-thailand.jpg') }}"
                                                alt="Paris">
                                            <a href="{{ asset('assets/img/destination/asia/asia-best-places-to-visit-phuket-thailand.jpg') }}"
                                                class="popup-image">
                                                <div class="icon-btn"><i class="fas fa-search-plus"></i></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-aos="fade-up" data-aos-delay="6500">
                                    <div class="destination-box2 gsap-cursor">
                                        <div class="destination-img"><img
                                                src="{{ asset('assets/img/destination/asia/asia-best-places-to-visit-beijing-china.jpg') }}"
                                                alt="Rome">
                                            <a href="{{ asset('assets/img/destination/asia/asia-best-places-to-visit-beijing-china.jpg') }}"
                                                class="popup-image">
                                                <div class="icon-btn"><i class="fas fa-search-plus"></i></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-aos="fade-up" data-aos-delay="6600">
                                    <div class="destination-box2 gsap-cursor">
                                        <div class="destination-img"><img
                                                src="{{ asset('assets/img/destination/asia/asia-best-places-to-visit-hong-kong.jpg') }}"
                                                alt="Istanbul">
                                            <a href="{{ asset('assets/img/destination/asia/asia-best-places-to-visit-hong-kong.jpg') }}"
                                                class="popup-image">
                                                <div class="icon-btn"><i class="fas fa-search-plus"></i></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-aos="fade-up" data-aos-delay="6700">
                                    <div class="destination-box2 gsap-cursor">
                                        <div class="destination-img"><img
                                                src="{{ asset('assets/img/destination/asia/asia-best-places-to-visit-singapore.jpg') }}"
                                                alt="London">
                                            <a href="{{ asset('assets/img/destination/asia/asia-best-places-to-visit-singapore.jpg') }}"
                                                class="popup-image">
                                                <div class="icon-btn"><i class="fas fa-search-plus"></i></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-aos="fade-up" data-aos-delay="6800">
                                    <div class="destination-box2 gsap-cursor">
                                        <div class="destination-img"><img
                                                src="{{ asset('assets/img/destination/asia/asia-best-places-to-visit-jaipur-india.jpg') }}"
                                                alt="Norway">
                                            <a href="{{ asset('assets/img/destination/asia/asia-best-places-to-visit-jaipur-india.jpg') }}"
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
