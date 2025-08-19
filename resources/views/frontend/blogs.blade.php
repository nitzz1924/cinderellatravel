@extends('frontend.layout.websitemain')
@section('content')

<div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Blog Lists View</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Blog Lists View</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="th-blog-wrapper space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-lg-7">
                    <div class="th-blog blog-single has-post-thumbnail">
                        <div class="blog-img"><a href="#"><img src="assets/img/blog/blog-s-1-1.jpg"
                                    alt="Blog Image"></a></div>
                        <div class="blog-content">
                            <div class="blog-meta"><a class="author" href="#"><i class="fa-light fa-user"></i>by
                                    David Smith</a> <a href="#"><i class="fa-solid fa-calendar-days"></i>05 May,
                                    2025</a> <a href="#"><img src="assets/img/icon/map.svg" alt="">Tour
                                    Guide</a></div>
                            <h2 class="blog-title"><a href="#">Living sustainability: A day in the life
                                    at realar residence</a></h2>
                            <p class="blog-text">Uniquely pursue emerging experiences before liemerging content.
                                Efficiently underwhelm customer directed total linkage after B2C synergy. Dynamically
                                simplify superior human capital whereas efficient infrastructures generate business
                                web-readiness after wireless outsourcing.</p><a href="#"
                                class="th-btn style4 th-icon">Read More</a>
                        </div>
                    </div>
                    <div class="th-blog blog-single has-post-thumbnail">
                        <div class="blog-img th-slider" data-slider-options='{"effect":"fade"}'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><a href="#"><img
                                            src="assets/img/blog/blog-s-1-2.jpg" alt="Blog Image"></a></div>
                                <div class="swiper-slide"><a href="#"><img
                                            src="assets/img/blog/blog-s-1-4.jpg" alt="Blog Image"></a></div>
                            </div><button class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button>
                            <button class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta"><a class="author" href="#"><i class="fa-light fa-user"></i>by
                                    David Smith</a> <a href="#"><i class="fa-solid fa-calendar-days"></i>05 May,
                                    2025</a> <a href="#"><img src="assets/img/icon/map.svg" alt="">Tour
                                    Guide</a></div>
                            <h2 class="blog-title"><a href="#">Exploring The Green Spaces Of Realar
                                    Residence Harmony with Nature</a></h2>
                            <p class="blog-text">Uniquely pursue emerging experiences before liemerging content.
                                Efficiently underwhelm customer directed total linkage after B2C synergy. Dynamically
                                simplify superior human capital whereas efficient infrastructures generate business
                                web-readiness after wireless outsourcing.</p><a href="#"
                                class="th-btn style4 th-icon">Read More=</a>
                        </div>
                    </div>
                    <div class="th-blog blog-single has-post-thumbnail">
                        <div class="blog-content">
                            <div class="blog-meta"><a class="author" href="#"><i class="fa-light fa-user"></i>by
                                    David Smith</a> <a href="#"><i class="fa-solid fa-calendar-days"></i>05 May,
                                    2025</a> <a href="#"><img src="assets/img/icon/map.svg" alt="">Tour
                                    Guide</a></div>
                            <h2 class="blog-title"><a href="#">Enrich Your Mind Envision Your Future
                                    Education for Success</a></h2>
                            <p class="blog-text">Uniquely pursue emerging experiences before liemerging content.
                                Efficiently underwhelm customer directed total linkage after B2C synergy. Dynamically
                                simplify superior human capital whereas efficient infrastructures generate business
                                web-readiness after wireless outsourcing.</p><a href="#"
                                class="th-btn style4 th-icon">Read More</a>
                        </div>
                    </div>
                    <div class="th-blog blog-single has-post-thumbnail">
                        <div class="blog-img" data-overlay="bg-title" data-opacity="5"><a href="#"><img
                                    src="assets/img/blog/blog-s-1-2.jpg" alt="Blog Image"></a><a
                                href="https://www.youtube.com/watch?v=cQfIUPw72Dk" class="play-btn popup-video"><i
                                    class="fas fa-play"></i></a></div>
                        <div class="blog-content">
                            <div class="blog-meta"><a class="author" href="#"><i class="fa-light fa-user"></i>by
                                    David Smith</a> <a href="#"><i class="fa-solid fa-calendar-days"></i>05 May,
                                    2025</a> <a href="#"><img src="assets/img/icon/map.svg" alt="">Tour
                                    Guide</a></div>
                            <h2 class="blog-title"><a href="#">University class starting soon while the
                                    lovely valley team work</a></h2>
                            <p class="blog-text">Uniquely pursue emerging experiences before liemerging content.
                                Efficiently underwhelm customer directed total linkage after B2C synergy. Dynamically
                                simplify superior human capital whereas efficient infrastructures generate business
                                web-readiness after wireless outsourcing.</p><a href="#"
                                class="th-btn style4 th-icon">Read More</a>
                        </div>
                    </div>
                    <div class="th-pagination">
                        <ul>
                            <li><a class="active" href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a class="next-page" href="#">Next <img src="assets/img/icon/arrow-right4.svg"
                                        alt=""></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-5">
                    <aside class="sidebar-area">
                        <div class="widget widget_search">
                            <form class="search-form"><input type="text" placeholder="Search"> <button type="submit"><i
                                        class="far fa-search"></i></button></form>
                        </div>
                        <div class="widget widget_categories">
                            <h3 class="widget_title">Categories</h3>
                            <ul>
                                <li><a href="#"><img src="assets/img/theme-img/map.svg" alt="">City Tour</a>
                                    <span>(8)</span></li>
                                <li><a href="#"><img src="assets/img/theme-img/map.svg" alt="">Beach Tours</a>
                                    <span>(6)</span></li>
                                <li><a href="#"><img src="assets/img/theme-img/map.svg" alt="">Wildlife
                                        Tours</a> <span>(2)</span></li>
                                <li><a href="#"><img src="assets/img/theme-img/map.svg" alt="">News & Tips</a>
                                    <span>(7)</span></li>
                                <li><a href="#"><img src="assets/img/theme-img/map.svg" alt="">Adventure
                                        Tours</a> <span>(9)</span></li>
                                <li><a href="#"><img src="assets/img/theme-img/map.svg" alt="">Mountain
                                        Tours</a> <span>(10)</span></li>
                            </ul>
                        </div>
                        <div class="widget">
                            <h3 class="widget_title">Recent Posts</h3>
                            <div class="recent-post-wrap">
                                <div class="recent-post">
                                    <div class="media-img"><a href="#"><img
                                                src="assets/img/blog/recent-post-1-1.jpg" alt="Blog Image"></a></div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit"
                                                href="#">Exploring The Green Spaces Of the island
                                                maldives</a></h4>
                                        <div class="recent-post-meta"><a href="#"><i
                                                    class="fa-regular fa-calendar"></i>22/6/ 2025</a></div>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img"><a href="#"><img
                                                src="assets/img/blog/recent-post-1-2.jpg" alt="Blog Image"></a></div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="#">Harmony
                                                With Nature Of Belgium Tour and travle</a></h4>
                                        <div class="recent-post-meta"><a href="#"><i
                                                    class="fa-regular fa-calendar"></i>25/6/ 2025</a></div>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img"><a href="#"><img
                                                src="assets/img/blog/recent-post-1-3.jpg" alt="Blog Image"></a></div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit"
                                                href="#">Exploring The Green Spaces Of Realar
                                                Residence</a></h4>
                                        <div class="recent-post-meta"><a href="#"><i
                                                    class="fa-regular fa-calendar"></i>27/6/ 2025</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget widget_tag_cloud">
                            <h3 class="widget_title">Popular Tags</h3>
                            <div class="tagcloud"><a href="#">Tour</a> <a href="#">Adventure</a> <a
                                    href="#">Rent</a> <a href="#">Innovate</a> <a
                                    href="#">Hotel</a> <a href="#">Modern</a> <a
                                    href="#">Luxury</a> <a href="#">Travel</a></div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>

@endsection