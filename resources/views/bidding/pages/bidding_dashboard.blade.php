@extends('frontend.master')
@section('content')
    <style>
        .owl-carousel .item {
            font-size: 30px;
            text-align: center;
            padding: 0px 0px;
            line-height: 2;
            font-weight: 700;
            background-color: #eee;
        }
        .owl-carousel .item {
            font-size: 13px;
        }
        .accordion-button.collapsed::before {
            display: none;
        }

        .accordion-button:not(.collapsed)::before {
            display: none;
        }
        .accordion-button:not(.collapsed) {
            background-color: transparent;
            border: 1px solid #001d6bc2;
        }
        .swiper {
            width: 100%;
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .swiper-slide {
            width: 300px;
            height: 400px;
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.2);
            filter: blur(1px);
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            justify-content: end;
            align-items: self-start;
        }

        .swiper-slide-active {
            filter: blur(0px);
        }

        .swiper-pagination-bullet,
        .swiper-pagination-bullet-active {
            background: #fff;
        }

        .swiper-slide span {
            text-transform: uppercase;
            color: #fff;
            background: #1b7402;
            padding: 7px 18px 7px 25px;
            display: inline-block;
            border-radius: 0 20px 20px 0px;
            letter-spacing: 2px;
            font-size: 0.8rem;
            font-family: "Open Sans", sans-serif;
        }

        .swiper-slide--one span {
            background: #62667f;
        }

        .swiper-slide--two span {
            background: #087ac4;
        }

        .swiper-slide--three span {
            background: #b45205;
        }

        .swiper-slide--four span {
            background: #087ac4;
        }

        .swiper-slide h2 {
            color: #fff;
            font-family: "Roboto", sans-serif;
            font-weight: 400;
            font-size: 1.3rem;
            line-height: 1.4;
            margin-bottom: 15px;
            padding: 25px 48px 0 25px;
        }

        .swiper-slide p {
            color: #fff;
            font-family: "Roboto", sans-serif;
            font-weight: 300;
            display: flex;
            align-items: center;
            padding: 0 25px 35px 25px;
        }

        .swiper-slide svg {
            color: #fff;
            width: 22px;
            height: 22px;
            margin-right: 7px;
        }

        .swiper-slide {
            padding: 0px !important;
        }

        .swiper-3d .swiper-slide-shadow-left,
        .swiper-3d .swiper-slide-shadow-right {
            background-image: none;
        }
    </style>

    <!-- Slider start -->
    <section class="slider-area-2 relative">
        <div class="owl-carousel slider-2" id="owl-example">
            <div class="item">
                <div class="silder-imgs bg-cover"
                    style="background-image: url('https://krfbe.twic.pics/library/original/royal-caribbean-icon-of-the-seas-schiff.cmcupsgi.png');">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="slider-contents slider-content-area text-white text-start p-5">
                                    <h4 class="text-white"> Paradise Beach Club...</h4>
                                    <p class="text-white location-title py-1">
                                        <i class="fa-solid fa-location-dot me-2"></i><span>Super Paradise Beach,
                                            Mykonos</span>
                                    </p>
                                    <p class="py-2 text-white mb-2"><span>Auctioning Live</span>
                                        <span class="rounded-pill border border-white p-1 shadow-lg"><i
                                                class="fa-regular fa-clock me-1 "></i> 01:02:26</span>
                                    </p>
                                    <a href="#" class="btn btn-square-borders pt-2">View Auction
                                        <i class="fas fa-long-arrow-alt-right ml-20"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="silder-imgs bg-cover"
                    style="background-image: url('https://www.celebritycruises.com/blog/content/uploads/2021/01/aft-of-a-ship-celebrity-edge-1024x683.jpg');">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="slider-contents slider-content-area text-white text-start p-5">
                                    <h4 class="text-white"> Paradise Beach Club...</h4>
                                    <p class="text-white location-title py-1">
                                        <i class="fa-solid fa-location-dot me-2"></i><span>Super Paradise Beach,
                                            Mykonos</span>
                                    </p>
                                    <p class="py-2 text-white mb-2"><span>Auctioning Live</span>
                                        <span class="rounded-pill border border-white p-1 shadow-lg"><i
                                                class="fa-regular fa-clock me-1 "></i> 01:02:26</span>
                                    </p>
                                    <a href="#" class="btn btn-square-borders pt-2">View Auction
                                        <i class="fas fa-long-arrow-alt-right ml-20"></i>
                                    </a>
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
                    <div class="col-lg-5">
                        <div class="nav-slider d-flex justify-content-start">
                            <a href="#" class="slider-btns slides-left flex-center">
                                <i class="fa-solid fa-arrow-left"></i>
                            </a>
                            <a href="#" class="slider-btns slides-right flex-center ms-2">
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Slider end -->
    <section>
        {{-- Filter Area Start --}}
        <div class="container">
            <div class="row d-flex align-items-center mt-3">
                <div class="col-lg-10">
                    <h3 class="text-uppercase">Live Auctions</h3>
                </div>
                <div class="col-lg-2">
                    <div class="accordion accordion-flush d-flex align-items-center justify-content-end"
                        id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header py-2" id="flush-headingTwo">
                                <button class="accordion-button collapsed filter-btns m-0 p-0" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    <i class="fa-solid fa-filter me-2"></i> Filter
                                </button>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="m-0 p-0">
            <div class="row">
                <div class="col-lg-12">
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body filter-area-input">
                            <div class="row gx-1">
                                <div class="col-sm-2">
                                    <div class="mx-auto text-white text-center">
                                        <label for="" class="text-white text-start">Search</label>
                                        <div class="bg-light rounded shadow-sm">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <button id="button-addon2 p-0" style="padding: 0px !important;"
                                                        type="submit" class="btn btn-link text-warning"><i
                                                            class="fa fa-search"></i></button>
                                                </div>
                                                <input type="search" placeholder="What're you searching for?"
                                                    style="padding: 0px !important;" aria-describedby="button-addon2"
                                                    class="form-control border-0 bg-light">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <label for="" class="text-white text-center">End Date</label>
                                    <input type="date" placeholder="Enter The Date" style="height: 48px; width: 100%; border-radius: 5px;">
                                </div>
                                <div class="col-sm-2">
                                    <label for="" class="text-white text-center">Booking Date</label>
                                    <input type="date" placeholder="Enter The Date" style="height: 48px; width: 100%; border-radius: 5px;">
                                </div>
                                <div class="col-sm-2 text-white text-center">
                                    <label for="" class="text-white mb-2">Price Range</label><br>
                                    <input type="hidden" name="min">
                                    <input type="hidden" name="max">

                                    <label class="text-white">
                                        <span id="min" class="text-danger"></span> <span
                                            id="max"></span></label>
                                    <div id="slider-range"></div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="mx-auto text-white text-center">
                                        <label for="" class="text-white text-center">Location</label>
                                        <div class="bg-light rounded shadow-sm">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <button id="button-addon2 p-0" style="padding: 0px !important;"
                                                        type="submit" class="btn btn-link text-warning"><i
                                                            class="fa fa-search"></i></button>
                                                </div>
                                                <input type="search" placeholder="What're you searching for?"
                                                    style="padding: 0px !important;height: 48px; width: 100%; border-radius: 5px;"
                                                    aria-describedby="button-addon2"
                                                    class="form-control border-0 bg-light">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <label for="" class="text-white text-center">Category</label>
                                    <input type="text" placeholder="Enter Category" style="height: 48px; width: 100%; border-radius: 5px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Product Area Start --}}
        <div class="container">
            <section>
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide swiper-slide--one"
                            style=" background: linear-gradient(to top, #0f2027, #203a4300, #2c536400),
                        url(https://images.unsplash.com/photo-1556206079-747a7a424d3d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80) no-repeat 50% 50% / cover;">
                            <a href="#">
                                <span>Sunbeds</span>
                                <div>
                                    <h2>Enjoy the exotic of sunny Hawaii</h2>
                                    <div class="d-flex justify-content-between">
                                        <p class="py-2 text-white mb-2">Live </p>
                                        <p class="py-2 text-white mb-2"><i class="fa-regular fa-clock me-1 "></i> 01:02:26
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide swiper-slide--two"
                            style="background: linear-gradient(to top, #0f2027, #203a4300, #2c536400),
                        url(https://images.unsplash.com/photo-1571900670723-a317a66e3fb7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=423&q=80) no-repeat 50% 50% / cover;">
                            <a href="#">
                                <span>subtropical</span>
                                <div>
                                    <h2>The Island of Eternal Spring</h2>
                                    <div class="d-flex justify-content-between">
                                        <p class="py-2 text-white mb-2">Live </p>
                                        <p class="py-2 text-white mb-2"><i class="fa-regular fa-clock me-1 "></i> 01:02:26
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="swiper-slide swiper-slide--three"
                            style="background: linear-gradient(to top, #0f2027, #203a4300, #2c536400),
                        url(https://images.unsplash.com/photo-1549144511-f099e773c147?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80) no-repeat 50% 50% / cover;">
                            <a href="#">
                                <span>history</span>
                                <div>
                                    <h2>Awesome Eiffel Tower</h2>
                                    <div class="d-flex justify-content-between">
                                        <p class="py-2 text-white mb-2">Live </p>
                                        <p class="py-2 text-white mb-2"><i class="fa-regular fa-clock me-1 "></i> 01:02:26
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="swiper-slide swiper-slide--four"
                            style="background: linear-gradient(to top, #0f2027, #203a4300, #2c536400),
                        url(https://images.unsplash.com/photo-1650367310179-e1b5b8e453c3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80) no-repeat 50% 50% / cover;">
                            <a href="#">
                                <span>Mayans</span>
                                <div>
                                    <h2>One of the safest states in Mexico</h2>
                                    <div class="d-flex justify-content-between">
                                        <p class="py-2 text-white mb-2">Live </p>
                                        <p class="py-2 text-white mb-2"><i class="fa-regular fa-clock me-1 "></i> 01:02:26
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="swiper-slide swiper-slide--five"
                            style="background: linear-gradient(to top, #0f2027, #203a4300, #2c536400),
                        url(https://images.unsplash.com/photo-1596521864207-13d46b1a0c78?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80) no-repeat 50% 50% / cover;">
                            <a href="#">
                                <span>native</span>
                                <div>
                                    <h2>The most popular yachting destination</h2>
                                    <div class="d-flex justify-content-between">
                                        <p class="py-2 text-white mb-2">Live </p>
                                        <p class="py-2 text-white mb-2"><i class="fa-regular fa-clock me-1 "></i> 01:02:26
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </section>
        </div>
    </section>

    <section>
        {{-- Filter Area Start --}}
        <div class="container">
            <div class="row d-flex align-items-center mt-3">
                <div class="col-lg-10">
                    <h3 class="text-uppercase">Upcoming Auctions</h3>
                </div>
                <div class="col-lg-2">
                    <div class="accordion accordion-flush d-flex align-items-center justify-content-end"
                        id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header py-2" id="flush-headingTwo">
                                <button class="accordion-button collapsed filter-btns m-0 p-0" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    <i class="fa-solid fa-filter me-2"></i> Filter
                                </button>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="m-0 p-0">
            <div class="row">
                <div class="col-lg-12">
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body filter-area-input">
                            <div class="row gx-1">
                                <div class="col-sm-2">
                                    <div class="mx-auto text-white text-center">
                                        <label for="" class="text-white text-start">Search</label>
                                        <div class="bg-light rounded shadow-sm">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <button id="button-addon2 p-0" style="padding: 0px !important;"
                                                        type="submit" class="btn btn-link text-warning"><i
                                                            class="fa fa-search"></i></button>
                                                </div>
                                                <input type="search" placeholder="What're you searching for?"
                                                    style="padding: 0px !important;" aria-describedby="button-addon2"
                                                    class="form-control border-0 bg-light">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <label for="" class="text-white text-center">End Date</label>
                                    <input type="date" placeholder="Enter The Date" style="height: 48px; width: 100%; border-radius: 5px;">
                                </div>
                                <div class="col-sm-2">
                                    <label for="" class="text-white text-center">Booking Date</label>
                                    <input type="date" placeholder="Enter The Date" style="height: 48px; width: 100%; border-radius: 5px;">
                                </div>
                                <div class="col-sm-2 text-white text-center">
                                    <label for="" class="text-white mb-2">Price Range</label><br>
                                    <input type="hidden" name="min">
                                    <input type="hidden" name="max">

                                    <label class="text-white">
                                        <span id="min" class="text-danger"></span> <span
                                            id="max"></span></label>
                                    <div id="slider-range"></div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="mx-auto text-white text-center">
                                        <label for="" class="text-white text-center">Location</label>
                                        <div class="bg-light rounded shadow-sm">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <button id="button-addon2 p-0" style="padding: 0px !important;"
                                                        type="submit" class="btn btn-link text-warning"><i
                                                            class="fa fa-search"></i></button>
                                                </div>
                                                <input type="search" placeholder="What're you searching for?"
                                                    style="padding: 0px !important;height: 48px; width: 100%; border-radius: 5px;"
                                                    aria-describedby="button-addon2"
                                                    class="form-control border-0 bg-light">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <label for="" class="text-white text-center">Category</label>
                                    <input type="text" placeholder="Enter Category" style="height: 48px; width: 100%; border-radius: 5px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Product Area Start --}}
        <div class="container">
            <section>
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide swiper-slide--one"
                            style=" background: linear-gradient(to top, #0f2027, #203a4300, #2c536400),
                        url(https://images.unsplash.com/photo-1556206079-747a7a424d3d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80) no-repeat 50% 50% / cover;">
                            <a href="#">
                                <span>Sunbeds</span>
                                <div>
                                    <h2>Enjoy the exotic of sunny Hawaii</h2>
                                    <div class="d-flex justify-content-between">
                                        <p class="py-2 text-white mb-2">Live </p>
                                        <p class="py-2 text-white mb-2"><i class="fa-regular fa-clock me-1 "></i> 01:02:26
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide swiper-slide--two"
                            style="background: linear-gradient(to top, #0f2027, #203a4300, #2c536400),
                        url(https://images.unsplash.com/photo-1571900670723-a317a66e3fb7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=423&q=80) no-repeat 50% 50% / cover;">
                            <a href="#">
                                <span>subtropical</span>
                                <div>
                                    <h2>The Island of Eternal Spring</h2>
                                    <div class="d-flex justify-content-between">
                                        <p class="py-2 text-white mb-2">Live </p>
                                        <p class="py-2 text-white mb-2"><i class="fa-regular fa-clock me-1 "></i> 01:02:26
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="swiper-slide swiper-slide--three"
                            style="background: linear-gradient(to top, #0f2027, #203a4300, #2c536400),
                        url(https://images.unsplash.com/photo-1549144511-f099e773c147?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80) no-repeat 50% 50% / cover;">
                            <a href="#">
                                <span>history</span>
                                <div>
                                    <h2>Awesome Eiffel Tower</h2>
                                    <div class="d-flex justify-content-between">
                                        <p class="py-2 text-white mb-2">Live </p>
                                        <p class="py-2 text-white mb-2"><i class="fa-regular fa-clock me-1 "></i> 01:02:26
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="swiper-slide swiper-slide--four"
                            style="background: linear-gradient(to top, #0f2027, #203a4300, #2c536400),
                        url(https://images.unsplash.com/photo-1650367310179-e1b5b8e453c3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80) no-repeat 50% 50% / cover;">
                            <a href="#">
                                <span>Mayans</span>
                                <div>
                                    <h2>One of the safest states in Mexico</h2>
                                    <div class="d-flex justify-content-between">
                                        <p class="py-2 text-white mb-2">Live </p>
                                        <p class="py-2 text-white mb-2"><i class="fa-regular fa-clock me-1 "></i> 01:02:26
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="swiper-slide swiper-slide--five"
                            style="background: linear-gradient(to top, #0f2027, #203a4300, #2c536400),
                        url(https://images.unsplash.com/photo-1596521864207-13d46b1a0c78?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80) no-repeat 50% 50% / cover;">
                            <a href="#">
                                <span>native</span>
                                <div>
                                    <h2>The most popular yachting destination</h2>
                                    <div class="d-flex justify-content-between">
                                        <p class="py-2 text-white mb-2">Live </p>
                                        <p class="py-2 text-white mb-2"><i class="fa-regular fa-clock me-1 "></i> 01:02:26
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </section>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-uppercase">Category</h3>
                    <hr>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-lg-6 p-1">
                    <a href="#">
                        <div class="grids">
                            <figure class="effect-lily">
                                <img src="https://tympanus.net/Development/HoverEffectIdeas/img/12.jpg" alt="img12" />
                                <figcaption>
                                    <div>
                                        <h2>Accommodation</h2>
                                        <p>Lily likes to play with crayons and pencils</p>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 p-1">
                    <div class="grids">
                        <figure class="effect-lily">
                            <img src="https://tympanus.net/Development/HoverEffectIdeas/img/12.jpg" alt="img12" />
                            <figcaption>
                                <div>
                                    <h2>Transportation</h2>
                                    <p>Lily likes to play with crayons and pencils</p>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-6 p-1">
                    <div class="grids">
                        <figure class="effect-lily">
                            <img src="https://tympanus.net/Development/HoverEffectIdeas/img/12.jpg" alt="img12" />
                            <figcaption>
                                <div>
                                    <h2>Entertainment</h2>
                                    <p>Lily likes to play with crayons and pencils</p>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-6 p-1">
                    <div class="grids">
                        <figure class="effect-lily">
                            <img src="https://tympanus.net/Development/HoverEffectIdeas/img/12.jpg" alt="img12" />
                            <figcaption>
                                <div>
                                    <h2>Yachting</h2>
                                    <p>Lily likes to play with crayons and pencils</p>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center py-5">
                        <img src="https://i.ibb.co/0mDg7cF/consultent-house.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        var swiper = new Swiper(".swiper", {
            effect: "coverflow",
            grabCursor: false,
            centeredSlides: true,
            slidesPerView: "auto",
            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 100,
                modifier: 2,
                slideShadows: true
            },
            keyboard: {
                enabled: true
            },
            mousewheel: {
                thresholdDelta: 70
            },
            spaceBetween: 60,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true
            }
        });
    </script>
    <script>
        function formatSliderValues(value) {
            if (value == null) return 'Any';
            /* This code formats a number in a human value, by adding separators (forces 2 decimal).
               Ex."12345.67" to "12,345.67"  */
            var formattedNumber = value.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
            return '$' + formattedNumber;
        }

        var values = [0, 100, 200, 500, null];

        $("#slider-range").slider({
            range: true,
            max: values.length - 1,
            values: [values[0], values.length - 1],
            slide: function(event, ui) {
                var min = values[ui.values[0]];
                var max = values[ui.values[1]];
                $("[name=min]").val(min);
                $("[name=max]").val(max);
                $("#min").text(formatSliderValues(min));
                $("#max").text(formatSliderValues(max));
            }
        });

        /* show initial values */
        var min = values[$("#slider-range").slider("values", 0)];
        var max = values[$("#slider-range").slider("values", 1)];
        $("[name=min]").val(min);
        $("[name=max]").val(max);
        $("#min").text(formatSliderValues(min));
        $("#max").text(formatSliderValues(max));


        $(function() {
            $('[data-toggle="tooltip"]').tooltip({
                delay: {
                    "show": 500,
                    "hide": 100
                }
            })
        })
    </script>
@endpush
