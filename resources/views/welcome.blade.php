@extends('layout')

@section('content')
        <!-- slider Area Start-->
        <div class="slider-area ">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-7 col-md-8">
                                <div class="hero__caption">
                                    <span data-animation="fadeInLeft" data-delay=".1s">Optimal Consultant</span>
                                    <h1 data-animation="fadeInLeft" data-delay=".5s" >Welcome To Optiaml</h1>
                                    <p data-animation="fadeInLeft" data-delay=".9s">Optimal is not only a consulting agency but also a tourism and real estate services company.</p>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn" data-animation="fadeInLeft" data-delay="1.1s">
                                        <a href="/" class="btn hero-btn">Our Services</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-7 col-md-8">
                                <div class="hero__caption">
                                    <span data-animation="fadeInLeft" data-delay=".1s">Committed to success</span>
                                    <h1 data-animation="fadeInLeft" data-delay=".5s" >We help to grow your business</h1>
                                    <p data-animation="fadeInLeft" data-delay=".9s">Mollit anim laborum.Dvcuis aute serunt  iruxvfg dhjkolohr indd re voluptate<br> velit esscillumlore eu quife nrulla parihatur.</p>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn" data-animation="fadeInLeft" data-delay="1.1s">
                                        <a href="/  " class="btn hero-btn">Our Services</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!--? Categories Area Start -->
        <div class="categories-area section-padding30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-70">
                            <span>Our Top Services</span>
                            <h2>Our Best Services</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-development"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="/">Consulting</a></h5>
                                <p>We help clients coming from outside Turkey to provide the best advice.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-result"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="/">Tourism</a></h5>
                                <p>Turkey is considered one of the most important tourist places in the world due to the presence of many monuments and tourist areas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-team"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="/">Real Estates</a></h5>
                                <p>When we talk about real estate investment, the first thing that comes to our minds is Turkey for the many advantages that the Turkish government offers to investors.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Area End -->
        <!--? About Area Start-->
        @include('includes.support')
        <!-- About Area End-->
        <!--? Services Ara Start -->
        <div class="services-area section-padding3">
            <div class="container">
                <div class="row">
                    <div class="cl-xl-7 col-lg-8 col-md-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-70">
                            <span>Our Portfolios of cases</span>
                            <h2>Featured Case Study</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-10">
                        <div class="single-services mb-100">
                            <div class="services-img">
                                <img src="assets/img/gallery/services1.png" alt="">
                            </div>
                            <div class="services-caption">
                                <span>Strategy planing</span>
                                <p><a href="#">Within the construction industry as their overdraft</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-10">
                        <div class="single-services mb-100">
                            <div class="services-img">
                                <img src="assets/img/gallery/services2.png" alt="">
                            </div>
                            <div class="services-caption">
                                <span>Strategy planing</span>
                                <p><a href="#">Within the construction industry as their overdraft</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-10">
                        <div class="single-services mb-100">
                            <div class="services-img">
                                <img src="assets/img/gallery/services3.png" alt="">
                            </div>
                            <div class="services-caption">
                                <span>Strategy planing</span>
                                <p><a href="#">Within the construction industry as their overdraft</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-10">
                        <div class="single-services mb-100">
                            <div class="services-img">
                                <img src="assets/img/gallery/services4.png" alt="">
                            </div>
                            <div class="services-caption">
                                <span>Strategy planing</span>
                                <p><a href="#">Within the construction industry as their overdraft</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Ara End -->
        <!--? Testimonial Start -->
        @include('includes.testmonial')
        <!-- Testimonial End -->
        <!-- Want To work -->
        <section class="wantToWork-area w-padding2 section-bg" data-background="assets/img/gallery/section_bg03.jpg">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-7 col-lg-9 col-md-8">
                        <div class="wantToWork-caption wantToWork-caption2">
                            <h2>Are you Searching<br> For a First-Class Consultant?</h2>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4">
                        <a href="#" class="btn btn-black f-right">More About Us</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Want To work End -->
        <!-- Blog Area Start -->
        <div class="home-blog-area section-padding30">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-100">
                            <span>Recent News of us</span>
                            <h2>Our Recent Blog</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="assets/img/gallery/home_blog1.png" alt="">
                                    <ul>
                                        <li>By Admin   -   October 27, 2020</li>
                                    </ul>
                                </div>
                                <div class="blog-cap">
                                    <h3><a href="blog_details.html">16 Easy Ideas to Use in  Everyday</a></h3>
                                    <p>Amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magnua Quis ipsum suspendisse ultrices gra.</p>
                                    <a href="blog_details.html" class="more-btn">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="assets/img/gallery/home_blog2.png" alt="">
                                    <ul>
                                        <li>By Admin   -   October 27, 2020</li>
                                    </ul>
                                </div>
                                <div class="blog-cap">
                                    <h3><a href="blog_details.html">16 Easy Ideas to Use in  Everyday</a></h3>
                                    <p>Amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magnua Quis ipsum suspendisse ultrices gra.</p>
                                    <a href="blog_details.html" class="more-btn">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Area End -->
@endsection
