@extends('layouts.app')

@section('content')
<!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->

<!-- pre loader area start -->
<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <!-- loading content here -->
        </div>
    </div>
</div>
<!-- pre loader area end -->

<!-- back to top start -->
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<!-- back to top end -->

<!-- header area start -->

<!-- header area end -->
<div class="tp-sidebar-menu">
    <button class="sidebar-close"><i class="icon_close"></i></button>
    <div class="side-logo mb-30">
        <a href="index.html"><img src="assets/img/logo/logo-black.png" alt="logo"></a>
    </div>
    <div class="mobile-menu"></div>
    <div class="sidebar-info">
        <h4 class="mb-15">Contact Info</h4>
        <ul class="side_circle">
            <li>27 Division St, New York</li>
            <li><a href="tel:123456789">+1 800 123 456 78</a></li>
            <li><a href="mailto:epora@example.com">epora@example.com</a></li>
        </ul>
        <div class="side-social">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</div>
<div class="body-overlay"></div>

<!-- banner-area -->
<section class="banner-area fix p-relative">
    <div class="banner-bg banner-bg-rainbow" data-background="assets/img/banner/banner-bg-2.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-8">
                    <div class="hero-content hero-content-black">
                        <h2 class="hero-title-black mb-45">@lang('pages/index.OnlineLearningDesigned')
                            <br>@lang('pages/index.ForRealLife')
                        </h2>
                        <div class="hero-btn">
                            <a href="course-list.html" class="tp-btn">@lang('pages/index.AllCourses')</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="banner-shape d-none d-md-block">
                        <img src="assets/img/banner/banner-img-1.png" alt="banner-shape" class="b-shape-3">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner-area-end -->

<!-- feature-area -->
<section class="feature-area pt-115 pb-90 wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".3s">
    <div class="container">
        <div class="row" dir="{{ $langDirection[App::getLocale()] }}">
            <div class="col-lg-12">
                <div class="section-title mb-70">
                    <span class="tp-bline-stitle mb-15">@lang('pages/index.WhatWeOffer')</span>
                    <h2 class="tp-section-title">@lang('pages/index.ForYourFutureLearning')</h2>
                </div>
            </div>
        </div>
        <div class="tp-feature-cn">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="tpfea tp-feature-item text-center mb-30 wow fadeInUp" data-wow-duration=".8s"
                        data-wow-delay=".4s">
                        <div class="tpfea__icon mb-25">
                            <i class="fi fi-rr-paper-plane"></i>
                        </div>
                        <div class="tpfea__text">
                            <h5 class="tpfea__title mb-5">Online Courses</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="tpfea tp-feature-item text-center mb-30 wow fadeInUp" data-wow-duration=".8s"
                        data-wow-delay=".6s">
                        <div class="tpfea__icon mb-25">
                            <i class="fi fi-rr-user"></i>
                        </div>
                        <div class="tpfea__text">
                            <h5 class="tpfea__title mb-5">Expert Trainer</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="tpfea tp-feature-item text-center mb-30 wow fadeInUp" data-wow-duration=".8s"
                        data-wow-delay=".8s">
                        <div class="tpfea__icon mb-25">
                            <i class="fi fi-rr-document"></i>
                        </div>
                        <div class="tpfea__text">
                            <h5 class="tpfea__title mb-5">Get Certificate</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="tpfea tp-feature-item text-center mb-30 wow fadeInUp" data-wow-duration=".8s"
                        data-wow-delay="1s">
                        <div class="tpfea__icon mb-25">
                            <i class="fi fi-rr-calendar"></i>
                        </div>
                        <div class="tpfea__text">
                            <h5 class="tpfea__title mb-5">Life Time Access</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- feature-area-end -->

<!-- about-area -->
<section class="tp-about-area pb-70 wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".3s">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xxl-7 col-xl-7 col-lg-6 col-md-12 col-12">
                <div class="tp-about-class p-relative pb-50">
                    <img src="assets/img/about/about-3-bg-01.png" alt="about-img">
                    <div class="tp-about-class-info">
                        <ul>
                            <li><span>235K</span>Worldwide Students</li>
                            <li><span>4.7<i class="fi fi-ss-star"></i></span>Worldwide Review</li>
                            <li><span>3.5K</span>Free Pro Courses</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xxl-5 col-xl-5 col-lg-6 col-md-12 col-12">
                <div class="tp-about-class-content mb-50 ml-75">
                    <div class="section-title mb-35">
                        <span class="tp-bline-stitle mb-15">How To Start</span>
                        <h2 class="tp-section-title mb-25">Explore Thousands of Creative Classes.</h2>
                        <p>Dramatically supply transparent deliverables befoe backward comp internal or
                            "organic" sources.</p>
                    </div>
                    <div class="tp-about-list mb-65">
                        <ul>
                            <li>
                                <i class="fa-light fa-check"></i>Create an E-Pora account
                            </li>
                            <li>
                                <i class="fa-light fa-check"></i>Choose Your Perfect Courses
                            </li>
                            <li>
                                <i class="fa-light fa-check"></i>After Finished Courses, Get Certificate
                            </li>
                        </ul>
                    </div>
                    <div class="tp-about-btn-3">
                        <a href="about.html" class="tp-btn">Explore Courses</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about-area-end -->

<!-- suitable-area -->
<section class="suitable-area pb-90 wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".3s">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12">
                <div class="section-title mb-60">
                    <span class="tp-bline-stitle mb-15">Join With Us</span>
                    <h2 class="tp-section-title">Which One is Suitable For You?</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6">
                <div class="tp-suit mb-30 p-relative">
                    <div class="tp-suit__content">
                        <h4 class="tp-suit__title">Do you want to <span>Learn</span> here?</h4>
                        <p>Dramatically supply transpa deliverables before & you.</p>
                        <div class="tp-suit__btn pt-5">
                            <a href="contact.html" class="tp-border-btn">Join Now</a>
                        </div>
                    </div>
                    <div class="tp-suit__img">
                        <img src="assets/img/bg/suit-bg-01.png" alt="suitable-img">
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="tp-suit mb-30 p-relative">
                    <div class="tp-suit__content">
                        <h4 class="tp-suit__title">Do you want to <span>Teach</span> here?</h4>
                        <p>Dramatically supply transpa deliverables before & you.</p>
                        <div class="tp-suit__btn pt-5">
                            <a href="contact.html" class="tp-border-btn">Join Now</a>
                        </div>
                    </div>
                    <div class="tp-suit__tech">
                        <img src="assets/img/bg/suit-bg-02.png" alt="suitable-img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- suitable-area-end -->

<!-- video-area -->
<section class="video-area pb-120 wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".3s">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12 col-md-12">
                <div class="section-title mb-65">
                    <span class="tp-bline-stitle mb-15">Live Classes</span>
                    <h2 class="tp-section-title mb-20">HD Quality Video, Audio <br> & Live Classes</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="video-bg p-relative text-center">
                    <img src="assets/img/bg/video-bg-2.jpg" alt="video-bg">
                    <div class="video-text video-run-time">
                        <i>Live<span>01:30:08</span></i>
                    </div>
                    <div class="video-shape-area">
                        <img class="video-shape" src="assets/img/about/shape-2-img-2.png" alt="video-shape">
                        <img class="video-shape-2 d-none d-md-block" src="assets/img/about/video-2-shape-2.png"
                            alt="video-shape">
                        <img class="video-shape-3 d-none d-md-block" src="assets/img/about/video-2-shape-1.jpg"
                            alt="video-shape">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- video-area-end -->

<!-- catrgory-area -->
<section class="tp-category-area bg-bottom grey-bg pt-110 pb-80 wow fadeInUp" data-wow-duration=".8s"
    data-wow-delay=".3s" data-background="assets/img/bg/shape-bg-1.png">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title mb-70">
                    <span class="tp-bline-stitle mb-15">Top Categories</span>
                    <h2 class="tp-section-title">Explore Company Courses</h2>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach ($categoriesData as $category)
            <div class="col-xxl-3 col-lg-4 col-md-6">
                <div class="tp-cat-item mb-40 d-flex align-items-center">
                    <div class="tp-category-icon tp-cat-color mr-15">
                        <span class="cat-design">
                            <img src="assets/{{ $category['icon'] }}" alt="category-img">
                        </span>
                    </div>
                    <div class="tp-cat-content">
                        <h4 class="tp-category-title tp-title-small">
                            <a href="course-grid.html">{{ $category['translation']->name ??
                                $category['default']->name
                                }}</a>
                        </h4>
                        <p>236 Courses</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- catrgory-area-end -->

<!-- course-area -->
<section class="course-area pt-115 pb-100 wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".3s">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center mb-65">
                    <span class="tp-bline-stitle mb-15">Our Courses</span>
                    <h2 class="tp-section-title mb-20">Explore Popular Courses</h2>
                </div>
            </div>
        </div>
        <!-- course-nav-tab-start -->
        <div class="tp-course-nav-tabs">
            <nav>
                <div class="nav d-flex justify-content-center mb-50" id="nav-tab" role="tablist">
                    <button class="tp-course-tab active" id="nav-all-tab" data-bs-toggle="tab" data-bs-target="#nav-all"
                        type="button" role="tab" aria-controls="nav-all-tab" aria-selected="true">All</button>
                    <button class="tp-course-tab" id="nav-design-tab" data-bs-toggle="tab" data-bs-target="#nav-design"
                        type="button" role="tab" aria-controls="nav-design-tab" aria-selected="true">Design</button>
                    <button class="tp-course-tab" id="nav-develop-tab" data-bs-toggle="tab"
                        data-bs-target="#nav-develop" type="button" role="tab" aria-controls="nav-develop"
                        aria-selected="true">Devlopment</button>
                    <button class="tp-course-tab" id="nav-contact-tab" data-bs-toggle="tab"
                        data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact"
                        aria-selected="true">Content Writing</button>
                    <button class="tp-course-tab" id="nav-search-tab" data-bs-toggle="tab" data-bs-target="#nav-search "
                        type="button" role="tab" aria-controls="nav-search" aria-selected="true">Search Engine</button>
                    <button class="tp-course-tab" id="nav-marketing-tab" data-bs-toggle="tab"
                        data-bs-target="#nav-marketing" type="button" role="tab" aria-controls="nav-marketing"
                        aria-selected="false">Marketing</button>
                </div>
            </nav>

            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">
                    <div class="row">
                        @php
                        $currentLocale=session('applocale');
                        $staticTagColor = 'c-color-red'; // Define your static tag color here
                        @endphp
                        @foreach ($coursesData as $course)
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="tpcourse mb-40">
                                <div class="tpcourse__thumb p-relative w-img fix">
                                    <a href="course-details.html"><img src="assets/{{ $course->thumbnail }}"
                                            alt="course-thumb"></a>
                                    <!-- Other content -->
                                </div>
                                <div class="tpcourse__content-2">
                                    <div class="tpcourse__category mb-10">
                                        <ul class="tpcourse__price-list d-flex align-items-center">
                                            @foreach ($course->categories as $courseCategory)
                                            @php
                                            $categotyTranslation=
                                            $courseCategory->translations->where('locale',
                                            $currentLocale)->first();
                                            @endphp
                                            <li><a class="{{ $staticTagColor }}" href="course-details.html">{{
                                                    $categotyTranslation->name?? $courseCategory->name}}</a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <!-- Other content -->
                                    <h4 class="tpcourse__title tp-cours-title-color"><a href="course-details.html">{{
                                            $course->name }}</a></h4>
                                    <!-- Other content -->
                                    <div class="tpcourse__rating d-flex align-items-center justify-content-between">
                                        <div class="tpcourse__rating-icon">
                                            <span>4.7</span>
                                            <i class="fi fi-ss-star"></i>
                                            <i class="fi fi-ss-star"></i>
                                            <i class="fi fi-ss-star"></i>
                                            <i class="fi fi-ss-star"></i>
                                            <i class="fi fi-rs-star"></i>
                                            <p>(125)</p>
                                        </div>
                                        <div class="tpcourse__pricing">
                                            <h5 class="price-title">${{ $course->price }}</h5>
                                        </div>
                                    </div>
                                    <ul class="d-flex align-items-center">
                                        <!-- Meta information -->
                                    </ul>
                                    <!-- Other content -->
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- course-nav-tab-end -->
                <div class="row text-center">
                    <div class="col-lg-12">
                        <div class="course-btn mt-20"><a class="tp-btn" href="course-list.html">Browse All
                                Courses</a>
                        </div>
                    </div>
                </div>
            </div>
</section>
<!-- course-area-end -->

<!-- choose-area -->
<section class="choose-area pb-70 wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".3s">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-5 col-lg-6 col-md-12">
                <div class="tp-choose-content mb-50">
                    <div class="section-title mb-30">
                        <span class="tp-bline-stitle mb-15">Why Choose Us</span>
                        <h2 class="tp-section-title mb-35">Why You Choose Our
                            E-Pora Online learning</h2>
                        <p>Competently facilitate end-to-end testing procedure before customized applications.
                            Interactively coordinate scalable.</p>
                    </div>
                    <div class="tp-choose-online-list">
                        <ul>
                            <li>
                                <div class="choose-online-item d-flex">
                                    <div class="choose-online-icon">
                                        <i class="fa-light fa-check"></i>
                                    </div>
                                    <div class="choose-online-content">
                                        <h5 class="choose-online-title mb-10">Increasing Your Learning Skills
                                        </h5>
                                        <p>Holisticly parallel task diverse architectures after top-line
                                            applications. Competently facilitate end.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="choose-online-item d-flex">
                                    <div class="choose-online-icon">
                                        <i class="fa-light fa-check"></i>
                                    </div>
                                    <div class="choose-online-content">
                                        <h5 class="choose-online-title mb-10">High Quality Video & Audio Classes
                                        </h5>
                                        <p>Holisticly parallel task diverse architectures after top-line
                                            applications. Competently facilitate end.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="choose-online-item d-flex">
                                    <div class="choose-online-icon">
                                        <i class="fa-light fa-check"></i>
                                    </div>
                                    <div class="choose-online-content">
                                        <h5 class="choose-online-title mb-10">Finish Your Course, Get
                                            Certificate</h5>
                                        <p>Holisticly parallel task diverse architectures after top-line
                                            applications. Competently facilitate end.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-lg-6 col-md-12">
                <div class="tp-choose-img tp-big-bg mb-50">
                    <img src="assets/img/bg/choose-3-bg-01.png" alt="choose-img">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- choose-area-end -->

<!-- testimonial-area -->
<section class="testimonial-area bg-bottom pt-115 pb-90  wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".3s"
    data-background="assets/img/bg/shape-bg-1.png">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center mb-65">
                    <span class="tp-bline-stitle mb-15">Testimonial</span>
                    <h2 class="tp-section-title mb-20">What Our Happy Users Says</h2>
                </div>
            </div>
        </div>
        <div class="testimonial-active-box tp-slide-space-white">
            <div class="tp-test-s-item">
                <div class="tp-testi tp-testi-round p-relative">
                    <div class="tp-testi__ava testi-ava-border d-flex align-items-center mb-20 pb-20">
                        <img src="assets/img/icon/test-avata--1.png" alt="testi-avatar">
                        <div class="tp-testi__avainfo ml-20">
                            <h3 class="tp-testi__title tp-title-meta mt-5">Wade Warren</h3>
                            <i>UX/UI Designer</i>
                        </div>
                    </div>
                    <p>Phosfluorescently aggregate bleeding-edge channels rather than global mindshare.
                        Monotonectally enable enterprise wide strategi theme areas for worldwide initiatives.
                    </p>
                    <div class="tp-testi__rating mb-5">
                        <i class="fi fi-ss-star"></i>
                        <i class="fi fi-ss-star"></i>
                        <i class="fi fi-ss-star"></i>
                        <i class="fi fi-ss-star"></i>
                        <i class="fi fi-rs-star"></i>
                        <span>4.5</span>
                    </div>
                    <div class="testi-quote">
                        <i class="fa-solid fa-quote-right"></i>
                    </div>
                </div>
            </div>
            <div class="tp-test-s-item">
                <div class="tp-testi p-relative">
                    <div class="tp-testi__ava testi-ava-border d-flex align-items-center mb-20 pb-20">
                        <img src="assets/img/icon/testi-avata3-01.png" alt="testi-avatar">
                        <div class="tp-testi__avainfo ml-20">
                            <h3 class="tp-testi__title tp-title-meta mt-5">Dianne Russell</h3>
                            <i>Web Designer</i>
                        </div>
                    </div>
                    <p>Phosfluorescently aggregate bleeding-edge channels rather than global mindshare.
                        Monotonectally enable enterprise wide strategi theme areas for worldwide initiatives.
                    </p>
                    <div class="tp-testi__rating mb-5">
                        <i class="fi fi-ss-star"></i>
                        <i class="fi fi-ss-star"></i>
                        <i class="fi fi-ss-star"></i>
                        <i class="fi fi-ss-star"></i>
                        <i class="fi fi-rs-star"></i>
                        <span>4.5</span>
                    </div>
                    <div class="testi-quote">
                        <i class="fa-solid fa-quote-right"></i>
                    </div>
                </div>
            </div>
            <div class="tp-test-s-item">
                <div class="tp-testi p-relative">
                    <div class="tp-testi__ava testi-ava-border d-flex align-items-center mb-20 pb-20">
                        <img src="assets/img/icon/test-avata--2.png" alt="testi-avatar">
                        <div class="tp-testi__avainfo ml-20">
                            <h3 class="tp-testi__title tp-title-meta mt-5">Courtney Henry</h3>
                            <i>UX/UI Designer</i>
                        </div>
                    </div>
                    <p>Phosfluorescently aggregate bleeding-edge channels rather than global mindshare.
                        Monotonectally enable enterprise wide strategi theme areas for worldwide initiatives.
                    </p>
                    <div class="tp-testi__rating mb-5">
                        <i class="fi fi-ss-star"></i>
                        <i class="fi fi-ss-star"></i>
                        <i class="fi fi-ss-star"></i>
                        <i class="fi fi-ss-star"></i>
                        <i class="fi fi-rs-star"></i>
                        <span>4.5</span>
                    </div>
                    <div class="testi-quote">
                        <i class="fa-solid fa-quote-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- testimonial-area-end -->

<!-- brand-area -->
<section class="brand-area pt-110 wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".3s">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title mb-65 text-center">
                    <span class="tp-bline-stitle mb-15">Our Partners</span>
                    <h2 class="tp-section-title mb-20">Our Key Supporters</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="brand-area tp-brand-active">
                    <div class="brand-item">
                        <a href="#"><img src="assets/img/icon/brand-icon-01.png" alt="brand-logo"></a>
                    </div>
                    <div class="brand-item">
                        <a href="#"><img src="assets/img/icon/brand-icon-02.png" alt="brand-logo"></a>
                    </div>
                    <div class="brand-item">
                        <a href="#"><img src="assets/img/icon/brand-icon-03.png" alt="brand-logo"></a>
                    </div>
                    <div class="brand-item">
                        <a href="#"><img src="assets/img/icon/brand-icon-04.png" alt="brand-logo"></a>
                    </div>
                    <div class="brand-item">
                        <a href="#"><img src="assets/img/icon/brand-icon-05.png" alt="brand-logo"></a>
                    </div>
                    <div class="brand-item">
                        <a href="#"><img src="assets/img/icon/brand-icon-01.png" alt="brand-logo"></a>
                    </div>
                    <div class="brand-item">
                        <a href="#"><img src="assets/img/icon/brand-icon-02.png" alt="brand-logo"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- brand-area-end -->

<!-- blog-area -->
<section class="blog-area pt-115 pb-110 wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".3s">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center mb-65">
                    <span class="tp-bline-stitle mb-15">Latest Blogs</span>
                    <h2 class="tp-section-title mb-20">Latest Blogs & News</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="tp-blog tp-blog-parent mb-60">
                    <div class="tp-blog__thumb">
                        <div class="fix blog-round">
                            <a href="blog-details.html"><img src="assets/img/blog/blog-thumb-3-01.jpg"
                                    alt="blog-img"></a>
                        </div>
                    </div>
                    <div class="tp-blog__content blog-edu p-relative">
                        <div class="tp-blog__meta-list mb-10">
                            <span><a href="blog-details.html"><i class="fi fi-ss-calendar"></i>21 Jan
                                    2022</a></span>
                            <span><a href="blog-details.html"><i class="fi fi-sr-apps"></i>Education</a></span>
                        </div>
                        <h3 class="tp-blog__title mb-15"><a href="blog-details.html">Educational Technology &
                                Mobile Learning</a></h3>
                        <span><a href="blog-details.html"><i class="fi fi-sr-user"></i>Karim Benzamin</a></span>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="tp-blog tp-blog-parent mb-60">
                    <div class="tp-blog__thumb">
                        <div class="fix blog-round">
                            <a href="blog-details.html"><img src="assets/img/blog/blog-thumb-3-02.jpg"
                                    alt="blog-img"></a>
                        </div>
                    </div>
                    <div class="tp-blog__content blog-edu p-relative">
                        <div class="tp-blog__meta-list mb-10">
                            <span><a href="blog-details.html"><i class="fi fi-ss-calendar"></i>21 Jan
                                    2022</a></span>
                            <span><a href="blog-details.html"><i class="fi fi-sr-apps"></i>Education</a></span>
                        </div>
                        <h3 class="tp-blog__title mb-15"><a href="blog-details.html">Computer Technology &
                                Academic Learning</a></h3>
                        <span><a href="blog-details.html"><i class="fi fi-sr-user"></i>Karim Benzamin</a></span>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="tp-blog tp-blog-parent mb-60">
                    <div class="tp-blog__thumb">
                        <div class="fix blog-round">
                            <a href="blog-details.html"><img src="assets/img/blog/blog-thumb-3-03.jpg"
                                    alt="blog-img"></a>
                        </div>
                    </div>
                    <div class="tp-blog__content blog-edu p-relative">
                        <div class="tp-blog__meta-list mb-10">
                            <span><a href="blog-details.html"><i class="fi fi-ss-calendar"></i>21 Jan
                                    2022</a></span>
                            <span><a href="blog-details.html"><i class="fi fi-sr-apps"></i>Education</a></span>
                        </div>
                        <h3 class="tp-blog__title mb-15"><a href="blog-details.html">Engineering Technology &
                                Fild Work Skill</a></h3>
                        <span><a href="blog-details.html"><i class="fi fi-sr-user"></i>Karim Benzamin</a></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="blog-btn text-center">
                    <a href="blog-masonry.html" class="tp-btn">All Blog</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- blog-area-end -->

<!-- counter-area -->
<section class="tp-counter-area theme-bg pt-90 wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".2s">
    <div class="counter-b-border">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="counter-item mb-70">
                        <div class="counter-item__content counter-white-text">
                            <h4 class="counter-item__title counter-left-title"><span class="counter">276</span>K
                            </h4>
                            <p>Worldwide Students</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="counter-item mb-70">
                        <div class="counter-item__content counter-white-text">
                            <h4 class="counter-item__title counter-left-title"><span class="counter">23</span>+
                            </h4>
                            <p>Years Experience</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="counter-item mb-70">
                        <div class="counter-item__content counter-white-text">
                            <h4 class="counter-item__title counter-left-title"><span class="counter">735</span>+
                            </h4>
                            <p>Professional Courses</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="counter-item mb-70">
                        <div class="counter-item__content counter-white-text">
                            <h4 class="counter-item__title counter-left-title"><span class="counter">4.7</span>K+
                            </h4>
                            <p>Beautiful Review</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- counter-area-end -->

<!-- JS here -->

@endsection
