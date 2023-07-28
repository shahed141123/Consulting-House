@extends('frontend.master')
@section('content')
    <!-- Slider start -->
    <section class="slider-area-2 relative">
        <div class="owl-carousel slider-2">
            <div class="item">
                <div class="silder-img bg-cover"
                    style="background-image: url('{{ asset('frontend/img/banner/banner_3b.jpg') }}');">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7 col-md-8">
                                <div class="slider-content-3 z-10">
                                    <h5 class="line-head">
                                        25 years of experience
                                        <span class="line  after"></span>
                                    </h5>
                                    <h1 class="banner-head-2 banner-head-3 black f-700 mt-15 mb-35 mt-xs-20 mb-xs-30">We
                                        are <span class="green">Uncompetitive</span> in Consulting Solution <span
                                            class="green">Around the world</span>.</h1>
                                    <a href="#" class="btn btn-square-border">Learn More<i
                                            class="fas fa-long-arrow-alt-right ml-20"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="silder-img bg-cover"
                    style="background-image: url('{{ asset('frontend/img/banner/banner_3a.jpg') }}');">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7 col-md-8">
                                <div class="slider-content-3 z-10">
                                    <h5 class="line-head">
                                        1000+ Happy Clients
                                        <span class="line  after"></span>
                                    </h5>
                                    <h1 class="banner-head-2 banner-head-3 black f-700 mt-15 mb-35 mt-xs-20 mb-xs-30">
                                        Let's <span class="green">Make Something Awesome Together</span> with the Right
                                        People.</h1>
                                    <a href="#" class="btn btn-square-border">Learn More<i
                                            class="fas fa-long-arrow-alt-right ml-20"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-control type-3 z-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="dots-slider">

                        </div>
                    </div>
                    <div class="col-lg-6 text-right d-none d-lg-block">
                        <div class="nav-slider d-flex justify-content-end">
                            <a href="#" class="slider-btn slides-left flex-center">
                                <i class="fas fa-chevron-left"></i>
                            </a>
                            <a href="#" class="slider-btn slides-right flex-center">
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Slider end -->

    <!-- About us start -->
    <section class="about-us-3 pt-100 pb-100" style="background-image: url('{{ asset('frontend/img/bg/bg-abt.jpg') }}');"
        data-overlay="9">
        <div class="container">
            <div class="row align-items-xl-center z-5">
                <div class="col-xl-6 col-lg-7 offset-xl-1 offset-lg-0">
                    <div class="text-center text-lg-left wow fadeInLeft">
                        <div class="fancy-head left-al  mb-10">
                            <h5 class="line-head mb-10">
                                <span class="line before d-lg-none"></span>
                                About Us
                                <span class="line  after"></span>
                            </h5>
                            <h1>Our Success Story</h1>
                        </div>
                        <p class="big-p blue">Commodo ullamcorper a lacus vestibulum sed massa tincidunt dui ut ornare
                            lectus sit</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed laoreet quis felis eget
                            consequat. Sed vitae tellus mattis, ornare elit vel, hendrerit erat. Integer commodo dui nec
                            est blandit bibendum. Maecenas lectus lectus, rutrum vel laoreet id, cursus tempor metus.
                            Nulla consectetur, risus in sollicitudin pulvinar...<a href="about-us.html">Read More</a>
                        </p>
                        <div
                            class="video-play-2 mt-30 mb-md-60 d-flex align-items-center justify-content-center justify-content-lg-start">
                            <div class="blob blob-md green mr-20">
                                <a href="https://www.youtube.com/watch?v=qtQgbdmIO30" class="popup-video">
                                    <i class="fas fa-play"></i>
                                </a>
                            </div>
                            <p class="mb-0 f-500 green">WATCH OUR VIDEO</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-4 ">
                    <div class="icon-box icon-box-border d-flex justify-content-center align-items-center  wow fadeInRight">
                        <div class="icon-img mr-20">
                            <img src="{{ asset('frontend/img/feature/icon1.png') }}" alt="Icon">
                        </div>
                        <div class="icon-text">
                            <h5 class="f-700">24/7 Suport Team</h5>
                            <p class="mb-0">Quisque enim ipsumlop</p>
                        </div>
                    </div>
                    <div class="icon-box icon-box-border d-flex justify-content-center align-items-center wow fadeInUp"
                        data-wow-delay=".2s">
                        <div class="icon-img mr-20">
                            <img src="{{ asset('frontend/img/feature/icon2.png') }}" alt="Icon">
                        </div>
                        <div class="icon-text">
                            <h5 class="f-700">Quality Services</h5>
                            <p class="mb-0">Sed ut perspiciatis unde</p>
                        </div>
                    </div>
                    <div class="icon-box icon-box-border mb-0 d-flex justify-content-center  align-items-center wow fadeInUp"
                        data-wow-delay=".4s">
                        <div class="icon-img mr-20">
                            <img src="{{ asset('frontend/img/feature/icon3.png') }}" alt="Icon">
                        </div>
                        <div class="icon-text">
                            <h5 class="f-700">Budget Friendly</h5>
                            <p class="mb-0">Voluptate satium dolore</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About us end -->
    {{-- Info Section Start --}}
    <section class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6 py-5 my-3">
                <h3>Business Valuation Calculator</h3>
                <p class="pt-3 pb-3" style="text-align: justify;">At SMERGERS, we define Business Valuation as a technique
                    used to capture the true value of a business based on similar comparable companies. Our comparable data
                    includes publicly trading companies across all stock exchanges in the world and private transactions of
                    thousands of small businesses on SMERGERS, which makes our valuation estimate as precise as it can get.
                    Curious to know the valuation of your business? Try our simple, yet one of the most effective, online
                    valuation calculators out there for free.</p>
                <div class="">
                    <a class="btn site-bg text-white btn-lg rounded-0" href="#">Try Valuation Tool</a>
                </div>
            </div>
            <div class="col-lg-6 py-5">
                <img alt="Business Valuation Calculator" class="feature-image"
                    src="https://www.smergers.com/static/images/features/xvaluation.png.pagespeed.ic.dYJr-5VXXv.webp;">
            </div>
        </div>
    </section>
    {{-- Info Section End --}}
    <!-- Service start -->
    <section class="service-3 pt-95" data-overlay="9"
        style="background-image: url('{{ asset('frontend/img/bg/bg_blgng.jpg') }}'); padding-bottom: 215px;">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="fancy-head text-center relative z-5 mb-45">
                        <h5 class="line-head mb-15 ">
                            <span class="line before "></span>
                            Our Services
                            <span class="line after"></span>
                        </h5>
                        <h1 class="white">What We Offer for You</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-md-6 text-center">
                    <div class="service-list-3 shadow-2 transition-4 img-lined z-5">
                        <div class="icon-bg-white flex-center z-10">
                            <img src="{{ asset('frontend/img/service/2.png') }}" class="" alt="">
                        </div>
                        <div class="service-text-3 transition-4 mt-15 z-10">
                            <h4 class="f-700 mb-10">Financial Planning</h4>
                            <p class="mb-20">Lorem ipsum dolor sit amet, consectetur</p>
                            <a href="services-details.html" class="btn btn-border-blue mb-30">
                                Readmore<i class="fas fa-long-arrow-alt-right ml-15"></i>
                            </a>
                            <span class="bg-green undeline-3"></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 text-center">
                    <div class="service-list-3 shadow-2 transition-4 img-lined z-5">
                        <div class="icon-bg-white flex-center z-10">
                            <img src="{{ asset('frontend/img/service/1.png') }}" class="" alt="">
                        </div>
                        <div class="service-text-3 transition-4 mt-15 z-10">
                            <h4 class="f-700 mb-10">Investment Planning</h4>
                            <p class="mb-20">Phasellus tristique gravida consequat Nunc </p>
                            <a href="services-details.html" class="btn btn-border-blue mb-30">
                                Readmore<i class="fas fa-long-arrow-alt-right ml-15"></i>
                            </a>
                            <span class="bg-green undeline-3"></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 text-center">
                    <div class="service-list-3 shadow-2 transition-4 img-lined z-5">
                        <div class="icon-bg-white z-10 flex-center">
                            <img src="{{ asset('frontend/img/service/3.png') }}" class="" alt="">
                        </div>
                        <div class="service-text-3 mt-15 z-10">
                            <h4 class="f-700 mb-10">Business Management</h4>
                            <p class="mb-20">Quisque vestibulum, elit eget facilisis luctus</p>
                            <a href="services-details.html" class="btn btn-border-blue mb-30">
                                Readmore<i class="fas fa-long-arrow-alt-right ml-15"></i>
                            </a>
                            <span class="bg-green undeline-3"></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 text-center">
                    <div class="service-list-3 shadow-2 transition-4 img-lined z-5">
                        <div class="icon-bg-white z-10  flex-center">
                            <img src="{{ asset('frontend/img/service/6.png') }}" class="" alt="">
                        </div>
                        <div class="service-text-3 mt-15 z-10">
                            <h4 class="f-700 mb-10">Business Consulting</h4>
                            <p class="mb-20">Donec in rhoncus lorem tincidunt neque</p>
                            <a href="services-details.html" class="btn btn-border-blue mb-30">
                                Readmore<i class="fas fa-long-arrow-alt-right ml-15"></i>
                            </a>
                            <span class="bg-green undeline-3"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service end -->
    {{-- Info 2 Section Start --}}
    <section class="container-fluid" style="background-color: #fafafa;">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 py-5">
                    <img alt="Business Valuation Calculator" class="feature-image"
                        src="https://www.smergers.com/static/images/features/xindustry-watch-min.png.pagespeed.ic.uLVkDwA6Y5.webp">
                </div>
                <div class="col-lg-6 py-5">
                    <h3 class="site-text">Industry Watch</h3>
                    <p class="pt-3" style="text-align: justify;">SMERGERS Industry Watch offers a bird’s eye view of
                        traditional and sunrise sectors which includes Finance, IT, Auto, Media, Engineering, Pharma, Food &
                        Beverage, Healthcare, E-commerce, Internet companies and many other industries that are at an
                        inflection point and transforming the global economy. Our infographics are easy to comprehend as we
                        present you with only the most relevant metrics in a clutter free and visually appealing format.</p>
                    <a class="btn site-bg text-white btn-lg rounded-0 mt-3" href="#">Explore Industry Watch</a>
                </div>
            </div>
        </div>
    </section>
    {{-- Info 2 Section End --}}
    <!-- Request callback start -->
    <section class="callback-area pt-95 pb-85"
        style="background-image: url('{{ asset('frontend/img/banner/banner_1.jpg') }}');" data-overlay="9">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="fancy-head text-center relative z-5 mb-40 wow fadeInDown">
                        <h5 class="line-head mb-15 white">
                            <span class="line before bg-white"></span>
                            Contact Us
                            <span class="line after bg-white"></span>
                        </h5>
                        <h1 class="white">Request a Call Back</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <form action="#" class="relative z-5  wow fadeInUp">
                        <div class="row">
                            <div class="col-xl-10 col-lg-12">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group relative">
                                            <input type="text" class="form-control input-white shadow-2"
                                                id="name" placeholder="Name">
                                            <i class="far fa-user transform-v-center"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group relative">
                                            <input type="email" class="form-control input-white shadow-2"
                                                id="email" placeholder="Email">
                                            <i class="far fa-envelope transform-v-center"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group relative">
                                            <input type="text" class="form-control input-white shadow-2"
                                                id="phone" placeholder="Phone number">
                                            <i class="fas fa-mobile-alt transform-v-center"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-12">
                                <button class="btn btn-blue btn-block request-btn uppercase shadow-2">submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Request callback end -->
    {{-- Slider Start --}}
    <section class="container">
        <div class="row py-5">
            <div class="col-lg-5">
                <h3 class="site-text">Industry Watch</h3>
                <p class="pt-3 pb-3" style="text-align: justify;">SMERGERS Industry Watch offers a bird’s eye view of
                    traditional and sunrise sectors which includes Finance, IT, Auto, Media, Engineering, Pharma, Food &
                    Beverage, Healthcare, E-commerce, Internet companies and many other industries that are at an
                    inflection point and transforming the global economy. Our infographics are easy to comprehend as we
                    present you with only the most relevant metrics in a clutter free and visually appealing format.</p>
                <div class="">
                    <a class="btn site-bg text-white btn-lg rounded-0" href="#">Explore Industry Watch</a>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="container">
                    <div class="swiper-wrapper">
                        <!-- Slider main container -->
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <div class="p-2" style="border: 1px solid #eee;">
                                        {{-- Image With Title --}}
                                        <div class="row gx-0">
                                            <div class="col-sm-2">
                                                <div class="logos me-1"
                                                    style="background-image:url('https://www.smergers.com/static/images/xuserimage.jpg.pagespeed.ic.rO7yBwOGY8.webp')">
                                                </div>
                                            </div>
                                            <div class="col-sm-10">
                                                <div class="ms-2">
                                                    <h6 class="p-0 m-0">
                                                        <a class="site-text" href="#">
                                                            Manager, Hussains
                                                        </a>
                                                    </h6>
                                                    <p class="pt-0 mt-0">Financial Consultant</p>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="my-0">
                                        {{-- Social Icon --}}
                                        <div class="row gx-0">
                                            <div class="col-sm-3">
                                                <a href="" class="py-2 d-flex align-items-center">
                                                    <i class="fa-solid fa-envelope"></i>
                                                    <span class="ms-1" style="font-size: 10px;">Email</span>
                                                </a>
                                            </div>
                                            <div class="col-sm-3">
                                                <a href="" class="py-2 d-flex align-items-center">
                                                    <i class="fa-brands fa-google"></i>
                                                    <span class="ms-1" style="font-size: 10px;">Google</span>
                                                </a>
                                            </div>
                                            <div class="col-sm-3">
                                                <a href="" class="py-2 d-flex align-items-center">
                                                    <i class="fa-brands fa-linkedin"></i>
                                                    <span class="ms-1" style="font-size: 10px;">LinkedIn</span>
                                                </a>
                                            </div>
                                            <div class="col-sm-3">
                                                <a href="" class="py-2 d-flex align-items-center">
                                                    <i class="fa-brands fa-square-facebook"></i>
                                                    <span class="ms-1" style="font-size: 10px;"> Facebook</span>
                                                </a>
                                            </div>
                                        </div>
                                        {{-- Short Description --}}
                                        <div class="row">
                                            <b class="fw-bold" style="font-size: 10px;">Interests: </b>
                                            <span style="font-size: 10px; text-align: justify;"> Our client is looking for
                                                opportunities in the pharmaceuticals, construction, and real estate business
                                                in
                                                Bangladesh. We are open to both startups as well as well-established
                                                businesses.
                                                The business would be profitable and well managed.</span>
                                        </div>
                                        {{-- Rating Area --}}
                                        <div class="row  py-2">
                                            <div class="col-sm-4" style="font-size: 10px;">
                                                <i class="fa-solid fa-star text-warning"></i>
                                                <span>5.9/ <small>10</small></span>
                                            </div>
                                            <div class="col-sm-8 text-end" style="font-size: 10px;">
                                                <i class="text-danger fa-solid fa-location-dot"></i>
                                                <span>Bangladesh</span>
                                            </div>
                                        </div>
                                        {{-- Location Area Start --}}
                                        <div class="row bg-light gx-2">
                                            <div class="col-sm-6 text-start">
                                                <span style="font-size: 10px;">Location</span>
                                            </div>
                                            <div class="col-sm-6 text-end">
                                                <div data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Bangladesh, Afganistan, Pakistan">
                                                    <i class="icon-map-marker"></i>
                                                    <span style="font-size: 10px;">Bangladesh +1 More</span>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="my-0">
                                        {{-- Location 2 Area Start --}}
                                        <div class="row bg-light gx-2 mb-3">
                                            <div class="col-sm-6 text-start">
                                                <span style="font-size: 10px;">Location</span>
                                            </div>
                                            <div class="col-sm-6 text-end">
                                                <div data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Bangladesh, Afganistan, Pakistan">
                                                    <i class="icon-map-marker"></i>
                                                    <span style="font-size: 10px;">Bangladesh +1 More</span>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Price Info And Go --}}
                                        <div class="row gx-0 d-flex align-items-center">
                                            <div class="col-sm-6 ">
                                                <div class="sme-v3-smalltext site-text">Investment Size </div>
                                                <div class="sme-v3-bolder" style="font-size:1.2em;">
                                                    <span class="currency-text">BDT</span>
                                                    1
                                                    -
                                                    10 L
                                                </div>
                                            </div>
                                            <div class="col-sm-6 text-end px-0" style="border-left:1px solid #ddd;">
                                                <div>
                                                    <a href="#" class="rounded-0 btn btn-sm btn-primary border-0"
                                                        style="background-color: var(--button-bg-color);">
                                                        Send Proposal
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <div class="p-2" style="border: 1px solid #eee;">
                                        {{-- Image With Title --}}
                                        <div class="row gx-0">
                                            <div class="col-sm-2">
                                                <div class="logos me-1"
                                                    style="background-image:url('https://www.smergers.com/static/images/xuserimage.jpg.pagespeed.ic.rO7yBwOGY8.webp')">
                                                </div>
                                            </div>
                                            <div class="col-sm-10">
                                                <div class="ms-2">
                                                    <h6 class="p-0 m-0">
                                                        <a class="site-text" href="#">
                                                            Manager, Hussains
                                                        </a>
                                                    </h6>
                                                    <p class="pt-0 mt-0">Financial Consultant</p>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="my-0">
                                        {{-- Social Icon --}}
                                        <div class="row gx-0">
                                            <div class="col-sm-3">
                                                <a href="" class="py-2 d-flex align-items-center">
                                                    <i class="fa-solid fa-envelope"></i>
                                                    <span class="ms-1" style="font-size: 10px;">Email</span>
                                                </a>
                                            </div>
                                            <div class="col-sm-3">
                                                <a href="" class="py-2 d-flex align-items-center">
                                                    <i class="fa-brands fa-google"></i>
                                                    <span class="ms-1" style="font-size: 10px;">Google</span>
                                                </a>
                                            </div>
                                            <div class="col-sm-3">
                                                <a href="" class="py-2 d-flex align-items-center">
                                                    <i class="fa-brands fa-linkedin"></i>
                                                    <span class="ms-1" style="font-size: 10px;">LinkedIn</span>
                                                </a>
                                            </div>
                                            <div class="col-sm-3">
                                                <a href="" class="py-2 d-flex align-items-center">
                                                    <i class="fa-brands fa-square-facebook"></i>
                                                    <span class="ms-1" style="font-size: 10px;"> Facebook</span>
                                                </a>
                                            </div>
                                        </div>
                                        {{-- Short Description --}}
                                        <div class="row">
                                            <b class="fw-bold" style="font-size: 10px;">Interests: </b>
                                            <span style="font-size: 10px; text-align: justify;"> Our client is looking for
                                                opportunities in the pharmaceuticals, construction, and real estate business
                                                in
                                                Bangladesh. We are open to both startups as well as well-established
                                                businesses.
                                                The business would be profitable and well managed.</span>
                                        </div>
                                        {{-- Rating Area --}}
                                        <div class="row  py-2">
                                            <div class="col-sm-4" style="font-size: 10px;">
                                                <i class="fa-solid fa-star text-warning"></i>
                                                <span>5.9/ <small>10</small></span>
                                            </div>
                                            <div class="col-sm-8 text-end" style="font-size: 10px;">
                                                <i class="text-danger fa-solid fa-location-dot"></i>
                                                <span>Bangladesh</span>
                                            </div>
                                        </div>
                                        {{-- Location Area Start --}}
                                        <div class="row bg-light gx-2">
                                            <div class="col-sm-6 text-start">
                                                <span style="font-size: 10px;">Location</span>
                                            </div>
                                            <div class="col-sm-6 text-end">
                                                <div data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Bangladesh, Afganistan, Pakistan">
                                                    <i class="icon-map-marker"></i>
                                                    <span style="font-size: 10px;">Bangladesh +1 More</span>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="my-0">
                                        {{-- Location 2 Area Start --}}
                                        <div class="row bg-light gx-2 mb-3">
                                            <div class="col-sm-6 text-start">
                                                <span style="font-size: 10px;">Location</span>
                                            </div>
                                            <div class="col-sm-6 text-end">
                                                <div data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Bangladesh, Afganistan, Pakistan">
                                                    <i class="icon-map-marker"></i>
                                                    <span style="font-size: 10px;">Bangladesh +1 More</span>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Price Info And Go --}}
                                        <div class="row gx-0 d-flex align-items-center">
                                            <div class="col-sm-6 ">
                                                <div class="sme-v3-smalltext site-text">Investment Size </div>
                                                <div class="sme-v3-bolder" style="font-size:1.2em;">
                                                    <span class="currency-text">BDT</span>
                                                    1
                                                    -
                                                    10 L
                                                </div>
                                            </div>
                                            <div class="col-sm-6 text-end px-0" style="border-left:1px solid #ddd;">
                                                <div>
                                                    <a href="#" class="rounded-0 btn btn-sm btn-primary border-0"
                                                        style="background-color: var(--button-bg-color);">
                                                        Send Proposal
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <div class="p-2" style="border: 1px solid #eee;">
                                        {{-- Image With Title --}}
                                        <div class="row gx-0">
                                            <div class="col-sm-2">
                                                <div class="logos me-1"
                                                    style="background-image:url('https://www.smergers.com/static/images/xuserimage.jpg.pagespeed.ic.rO7yBwOGY8.webp')">
                                                </div>
                                            </div>
                                            <div class="col-sm-10">
                                                <div class="ms-2">
                                                    <h6 class="p-0 m-0">
                                                        <a class="site-text" href="#">
                                                            Manager, Hussains
                                                        </a>
                                                    </h6>
                                                    <p class="pt-0 mt-0">Financial Consultant</p>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="my-0">
                                        {{-- Social Icon --}}
                                        <div class="row gx-0">
                                            <div class="col-sm-3">
                                                <a href="" class="py-2 d-flex align-items-center">
                                                    <i class="fa-solid fa-envelope"></i>
                                                    <span class="ms-1" style="font-size: 10px;">Email</span>
                                                </a>
                                            </div>
                                            <div class="col-sm-3">
                                                <a href="" class="py-2 d-flex align-items-center">
                                                    <i class="fa-brands fa-google"></i>
                                                    <span class="ms-1" style="font-size: 10px;">Google</span>
                                                </a>
                                            </div>
                                            <div class="col-sm-3">
                                                <a href="" class="py-2 d-flex align-items-center">
                                                    <i class="fa-brands fa-linkedin"></i>
                                                    <span class="ms-1" style="font-size: 10px;">LinkedIn</span>
                                                </a>
                                            </div>
                                            <div class="col-sm-3">
                                                <a href="" class="py-2 d-flex align-items-center">
                                                    <i class="fa-brands fa-square-facebook"></i>
                                                    <span class="ms-1" style="font-size: 10px;"> Facebook</span>
                                                </a>
                                            </div>
                                        </div>
                                        {{-- Short Description --}}
                                        <div class="row">
                                            <b class="fw-bold" style="font-size: 10px;">Interests: </b>
                                            <span style="font-size: 10px; text-align: justify;"> Our client is looking for
                                                opportunities in the pharmaceuticals, construction, and real estate business
                                                in
                                                Bangladesh. We are open to both startups as well as well-established
                                                businesses.
                                                The business would be profitable and well managed.</span>
                                        </div>
                                        {{-- Rating Area --}}
                                        <div class="row  py-2">
                                            <div class="col-sm-4" style="font-size: 10px;">
                                                <i class="fa-solid fa-star text-warning"></i>
                                                <span>5.9/ <small>10</small></span>
                                            </div>
                                            <div class="col-sm-8 text-end" style="font-size: 10px;">
                                                <i class="text-danger fa-solid fa-location-dot"></i>
                                                <span>Bangladesh</span>
                                            </div>
                                        </div>
                                        {{-- Location Area Start --}}
                                        <div class="row bg-light gx-2">
                                            <div class="col-sm-6 text-start">
                                                <span style="font-size: 10px;">Location</span>
                                            </div>
                                            <div class="col-sm-6 text-end">
                                                <i class="icon-map-marker"></i>
                                                <span style="font-size: 10px;">Bangladesh +1 More</span>
                                            </div>
                                        </div>
                                        <hr class="my-0">
                                        {{-- Location 2 Area Start --}}
                                        <div class="row bg-light gx-2 mb-3">
                                            <div class="col-sm-6 text-start">
                                                <span style="font-size: 10px;">Location</span>
                                            </div>
                                            <div class="col-sm-6 text-end">
                                                <div data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Bangladesh, Afganistan, Pakistan">
                                                    <i class="icon-map-marker"></i>
                                                    <span style="font-size: 10px;">Bangladesh +1 More</span>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Price Info And Go --}}
                                        <div class="row gx-0 d-flex align-items-center">
                                            <div class="col-sm-6 ">
                                                <div class="sme-v3-smalltext site-text">Investment Size </div>
                                                <div class="sme-v3-bolder" style="font-size:1.2em;">
                                                    <span class="currency-text">BDT</span>
                                                    1
                                                    -
                                                    10 L
                                                </div>
                                            </div>
                                            <div class="col-sm-6 text-end px-0" style="border-left:1px solid #ddd;">
                                                <div>
                                                    <a href="#" class="rounded-0 btn btn-sm btn-primary border-0"
                                                        style="background-color: var(--button-bg-color);">
                                                        Send Proposal
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <div class="p-2" style="border: 1px solid #eee;">
                                        {{-- Image With Title --}}
                                        <div class="row gx-0">
                                            <div class="col-sm-2">
                                                <div class="logos me-1"
                                                    style="background-image:url('https://www.smergers.com/static/images/xuserimage.jpg.pagespeed.ic.rO7yBwOGY8.webp')">
                                                </div>
                                            </div>
                                            <div class="col-sm-10">
                                                <div class="ms-2">
                                                    <h6 class="p-0 m-0">
                                                        <a class="site-text" href="#">
                                                            Manager, Hussains
                                                        </a>
                                                    </h6>
                                                    <p class="pt-0 mt-0">Financial Consultant</p>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="my-0">
                                        {{-- Social Icon --}}
                                        <div class="row gx-0">
                                            <div class="col-sm-3">
                                                <a href="" class="py-2 d-flex align-items-center">
                                                    <i class="fa-solid fa-envelope"></i>
                                                    <span class="ms-1" style="font-size: 10px;">Email</span>
                                                </a>
                                            </div>
                                            <div class="col-sm-3">
                                                <a href="" class="py-2 d-flex align-items-center">
                                                    <i class="fa-brands fa-google"></i>
                                                    <span class="ms-1" style="font-size: 10px;">Google</span>
                                                </a>
                                            </div>
                                            <div class="col-sm-3">
                                                <a href="" class="py-2 d-flex align-items-center">
                                                    <i class="fa-brands fa-linkedin"></i>
                                                    <span class="ms-1" style="font-size: 10px;">LinkedIn</span>
                                                </a>
                                            </div>
                                            <div class="col-sm-3">
                                                <a href="" class="py-2 d-flex align-items-center">
                                                    <i class="fa-brands fa-square-facebook"></i>
                                                    <span class="ms-1" style="font-size: 10px;"> Facebook</span>
                                                </a>
                                            </div>
                                        </div>
                                        {{-- Short Description --}}
                                        <div class="row">
                                            <b class="fw-bold" style="font-size: 10px;">Interests: </b>
                                            <span style="font-size: 10px; text-align: justify;"> Our client is looking for
                                                opportunities in the pharmaceuticals, construction, and real estate business
                                                in
                                                Bangladesh. We are open to both startups as well as well-established
                                                businesses.
                                                The business would be profitable and well managed.</span>
                                        </div>
                                        {{-- Rating Area --}}
                                        <div class="row  py-2">
                                            <div class="col-sm-4" style="font-size: 10px;">
                                                <i class="fa-solid fa-star text-warning"></i>
                                                <span>5.9/ <small>10</small></span>
                                            </div>
                                            <div class="col-sm-8 text-end" style="font-size: 10px;">
                                                <i class="text-danger fa-solid fa-location-dot"></i>
                                                <span>Bangladesh</span>
                                            </div>
                                        </div>
                                        {{-- Location Area Start --}}
                                        <div class="row bg-light gx-2">
                                            <div class="col-sm-6 text-start">
                                                <span style="font-size: 10px;">Location</span>
                                            </div>
                                            <div class="col-sm-6 text-end">
                                                <div data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Bangladesh, Afganistan, Pakistan">
                                                    <i class="icon-map-marker"></i>
                                                    <span style="font-size: 10px;">Bangladesh +1 More</span>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="my-0">
                                        {{-- Location 2 Area Start --}}
                                        <div class="row bg-light gx-2 mb-3">
                                            <div class="col-sm-6 text-start">
                                                <span style="font-size: 10px;">Location</span>
                                            </div>
                                            <div class="col-sm-6 text-end">
                                                <div data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Bangladesh, Afganistan, Pakistan">
                                                    <i class="icon-map-marker"></i>
                                                    <span style="font-size: 10px;">Bangladesh +1 More</span>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Price Info And Go --}}
                                        <div class="row gx-0 d-flex align-items-center">
                                            <div class="col-sm-6 ">
                                                <div class="sme-v3-smalltext site-text">Investment Size </div>
                                                <div class="sme-v3-bolder" style="font-size:1.2em;">
                                                    <span class="currency-text">BDT</span>
                                                    1
                                                    -
                                                    10 L
                                                </div>
                                            </div>
                                            <div class="col-sm-6 text-end px-0" style="border-left:1px solid #ddd;">
                                                <div>
                                                    <a href="#" class="rounded-0 btn btn-sm btn-primary border-0"
                                                        style="background-color: var(--button-bg-color);">
                                                        Send Proposal
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- If we need pagination -->
                            <!--<div class="swiper-pagination"></div> -->
                        </div>
                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Slider End --}}
    <!-- client logos start -->
    <section class="top-clients pt-30 pb-30">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center">
                    <div class="client-count relative bg-navy mb-sm-30">
                        <h2 class="fs-40 white f-700 mb-15">
                            <span class="counter">1000</span>+
                        </h2>
                        <h3 class="fs-23 white f-700">Happy Clients</h3>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="owl-carousel owl-theme logos-slide">
                        <div class="item">
                            <div class="clients-top-each flex-center">
                                <img src="{{ asset('frontend/img/clients/1_blk.png') }}" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="clients-top-each flex-center">
                                <img src="{{ asset('frontend/img/clients/2_blk.png') }}" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="clients-top-each flex-center">
                                <img src="{{ asset('frontend/img/clients/3_blk.png') }}" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="clients-top-each flex-center">
                                <img src="{{ asset('frontend/img/clients/4_blk.png') }}" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="clients-top-each flex-center">
                                <img src="{{ asset('frontend/img/clients/5_blk.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- client logos end -->
@endsection
@push('scripts')
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 2,
            spaceBetween: 0,
            freeMode: true,
            loop: true,
            autoplay: {
                delay: 3000,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
    <script>
        // Get user timezone
        const userTimezone = Intl.DateTimeFormat().resolvedOptions().timeZone;
        console.log("User Timezone:", userTimezone);

        // Get user country
        const userCountry = Intl.DateTimeFormat().resolvedOptions().locale;
        console.log("User Country:", userCountry);

        // Get user currency
        const userCurrency = Intl.NumberFormat().resolvedOptions().currency;
        console.log("User Currency:", userCurrency);
    </script>
@endpush
