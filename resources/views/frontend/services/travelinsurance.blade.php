@extends('frontend.layout.websitemain')
@section('content')
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.jpg') }}" data-aos="fade-down"
        data-aos-delay="100">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Travel Insurance</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Services</li>
                    <li>Travel Insurance</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="space">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-lg-7">
                    <div class="page-single">
                        <div class="service-img" data-aos="zoom-in" data-aos-delay="200">
                            <img src="{{ asset('assets/img/services/travelinsurance.webp') }}" alt="Travel Insurance Image">
                        </div>
                        <div class="page-content d-block" data-aos="fade-up" data-aos-delay="300">
                            <h2 class="box-title mt-3">Travel Insurance</h2>
                            <p class="box-text mb-30">With the increase in travel, one of the important things that
                                travellers need to know about is Travel Insurance. This form of insurance helps cover a
                                whole range of uncertainties and scenarios that can drain out a traveller’s finances. Most
                                countries require mandatory Travel Insurance while applying for a visa. But choosing the
                                right Travel Insurance which covers all the risks of travel is important.</p>

                            <div class="service-inner-img mb-40" data-aos="zoom-in" data-aos-delay="400">
                                <img src="{{ asset('assets/img/services/TravelInsurance2.webp') }}"
                                    alt="Travel Insurance Inner Image">
                            </div>
                            <div data-aos="fade-up" data-aos-delay="425">
                                <p class="box-text mb-30">Travel Insurance is a type of insurance that covers different
                                    risks while travelling. It covers medical expenses, lost luggage, flight cancellations,
                                    and other losses that a traveller can incur while travelling.</p>
                            </div>
                            <div data-aos="fade-up" data-aos-delay="475">
                                <p class="box-text mb-30">Travel Insurance is usually taken from the day of travel till the
                                    time the traveller reaches back to India. Taking Travel Insurance ensures a
                                    comprehensive coverage in case of any emergency in another country. Travel Insurance is
                                    also available for trips taken in the home country of the traveller like Bharat Bhraman
                                    & E Travel, but it is a more popular option for travel abroad.</p>
                            </div>
                            <div class="checklist" data-aos="fade-up" data-aos-delay="500">
                                <h6>Some of the risks covered under Travel Insurance are:</h6>
                                <ul class="list-unstyled mb-2"
                                    style='columns: 2; -webkit-columns: 2; -moz-columns: 2; column-gap: 20px; '>
                                    <li class="mb-2">Personal Accident Cover, which covers:</li>
                                    <li class="mb-2">Insured’s Death</li>
                                    <li class="mb-2">Permanent Total Disability</li>
                                    <li class="mb-2">Dental treatment relief</li>
                                    <li class="mb-2">Emergency evacuation</li>
                                    <li class="mb-2">Repatriation of remains in case of death</li>
                                    <li class="mb-2">Baggage delay</li>
                                    <li class="mb-2">Loss of passport</li>
                                    <li class="mb-2">Hijack</li>
                                    <li class="mb-2">Home burglary</li>
                                    <li class="mb-2">Trip curtailment</li>
                                    <li class="mb-2">Trip cancellation</li>
                                    <li class="mb-2">Missed connection/missed departure</li>
                                    <li class="mb-2">Bounced hotel/airline booking</li>
                                </ul>
                            </div>
                            <div data-aos="fade-up" data-aos-delay="475">
                                <p class="box-text mb-30">There may be more risks covered under individual policies
                                    depending on the requirements of the traveller. The amounts to which these risks are
                                    covered depends on the policy & plan that the traveller opts for. Travel Insurance also
                                    covers additional risks at an additional premium. Some of these risks are specific to
                                    the traveller or the place the person is travelling to.

                                </p>
                            </div>
                            <div data-aos="fade-up" data-aos-delay="475">
                                <h6>Types of Travel Insurance:
                                </h6>
                                <p class="box-text mb-30">There are single trip Travel Insurance policies meant for one
                                    journey. But for frequent travellers who travel abroad on business purposes, there is an
                                    option to buy a multi trip Travel Insurance policy. Some policies last for an entire
                                    year and cover multiple trips to a particular destination. Opting for such policies is
                                    much more cost effective for businessmen and frequent travellers to a particular
                                    destination. We also have student policies which are specially designed for students
                                    going abroad for studies at an affordable premium. The maximum trip length can last from
                                    30, 45 and 60 days.
                                </p>
                            </div>
                            <div data-aos="fade-up" data-aos-delay="475">
                                <p class="box-text mb-30">Another type of travel policy is a group Travel Insurance policy.
                                    A group policy covers 7 or more travellers. These policies are cost effective and offer
                                    similar benefits as single trip Travel Insurance policies. Group Travel Insurance
                                    policies are based on the age of the travellers which means it works out more cost
                                    effective per traveller. Most travel companies opt for group Travel Insurance policies
                                    when they take groups across different countries on tours.


                                </p>
                            </div>
                            <div data-aos="fade-up" data-aos-delay="475">
                                <p class="box-text mb-30">It is easy to pick out a policy once you know the Travel Insurance
                                    definition. While planning your trip abroad, pick out a Travel Insurance policy that
                                    provides exhaustive coverage with a high coverage. It is possible to check the cost of
                                    Travel Insurance on insurance aggregators and pick out the best policy. HDFC Bank offers
                                    a variety of Travel Insurance policies through the bank’s website like Student Travel
                                    Insurance, Domestic, Senior Citizens, Family and even Individual Travel Insurance. You
                                    can easily pick out a policy that suits your need and provides the best value for money.




                                </p>
                            </div>
                        </div>

                        <div class="th-comment-form" data-aos="fade-up" data-aos-delay="600">
                            <div class="row">
                                <h3 class="blog-inner-title h4 mb-2">Contact Us</h3>
                                <p class="mb-25">Reach out to us from our contact form and we will get back to you shortly.
                                </p>
                                <div class="col-md-6 form-group">
                                    <input type="text" placeholder="Full Name*" class="form-control" required>
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="email" placeholder="Your Email*" class="form-control" required>
                                    <i class="far fa-envelope"></i>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="Phone Number"
                                        class="form-control" required>
                                    <i class="far fa-phone"></i>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="text" placeholder="Destination" class="form-control" required>
                                    <i class="far fa-globe"></i>
                                </div>
                                <div class="form-group col-12">
                                    <select name="subject" id="subject" class="form-select nice-select">
                                        <option value="Select Tour Type" selected="selected" disabled="disabled">Select
                                            Service Type</option>
                                        <option value="Travel Insurance">Travel Insurance</option>
                                        <option value="Travel Visa">Travel Visa</option>
                                        <option value="Travel Insurance">Travel Insurance</option>
                                        <option value="Hotel Booking">Hotel Booking</option>
                                        <option value="Holiday Packages">Holiday Packages</option>
                                    </select>
                                </div>
                                <div class="col-12 form-group">
                                    <textarea placeholder="Comment*" class="form-control"></textarea>
                                    <i class="far fa-pencil"></i>
                                </div>
                                <div class="col-12 form-group">
                                    <input type="checkbox" id="html">
                                    <label for="html">Save my name, email, and website in this browser for the next
                                        time
                                        I comment.</label>
                                </div>
                                <div class="col-12 form-group mb-0">
                                    <button class="th-btn">Send Message<img
                                            src="{{ asset('assets/img/icon/plane2.svg') }}" alt="Send Icon"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-5">
                    <aside class="sidebar-area style3" data-aos="fade-left" data-aos-delay="200">
                        <div class="widget widget_categories">
                            <h3 class="widget_title">Destinations</h3>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('assets/img/theme-img/map.svg') }}" alt="Map Icon">
                                        Europe
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('assets/img/theme-img/map.svg') }}" alt="Map Icon">
                                        Asia
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('assets/img/theme-img/map.svg') }}" alt="Map Icon">
                                        Dubai
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('assets/img/theme-img/map.svg') }}" alt="Map Icon">
                                        USA
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('assets/img/theme-img/map.svg') }}" alt="Map Icon">
                                        Canada
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('assets/img/theme-img/map.svg') }}" alt="Map Icon">
                                        Africa
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="widget widget_tag_cloud" data-aos="fade-left" data-aos-delay="300">
                            <h3 class="widget_title">Contact Us</h3>
                           <div class="th-widget-contact">
                                <div class="info-box_text">
                                    <div class="icon"><img src="{{ asset('assets/img/icon/location-dot.svg') }}"
                                            alt="Location Icon"></div>
                                    <div class="details">
                                        <p> 51A Wilkinson road, Freetown, Sierra Leone</p>
                                    </div>
                                </div>
                                <div class="info-box_text">
                                    <div class="icon"><img src="{{ asset('assets/img/icon/envelope.svg') }}"
                                            alt="Email Icon"></div>
                                    <div class="details">
                                        <p><a href="mailto:salesfna@lamairatravel.com"
                                                class="info-box_link">salesfna@lamairatravel.com</a></p>
                                    </div>
                                </div>
                                <div class="info-box_text">
                                    <div class="icon"><img src="{{ asset('assets/img/icon/phone.svg') }}"
                                            alt="Phone Icon"></div>
                                    <div class="details">
                                        <p><a href="tel:+23278676849" class="info-box_link">+23278676849</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
            <div class="shape-mockup shape1 d-none d-xxl-block" data-bottom="35%" data-right="-12%" data-aos="fade-left"
                data-aos-delay="400">
                <img src="{{ asset('assets/img/shape/shape_1.png') }}" alt="Shape 1">
            </div>
            <div class="shape-mockup shape2 d-none d-xl-block" data-bottom="31%" data-right="-8%" data-aos="fade-left"
                data-aos-delay="500">
                <img src="{{ asset('assets/img/shape/shape_2.png') }}" alt="Shape 2">
            </div>
            <div class="shape-mockup shape3 d-none d-xxl-block" data-bottom="33%" data-right="-5%" data-aos="fade-left"
                data-aos-delay="600">
                <img src="{{ asset('assets/img/shape/shape_3.png') }}" alt="Shape 3">
            </div>
        </div>
    </section>
@endsection
