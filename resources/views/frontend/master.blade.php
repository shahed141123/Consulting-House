<!DOCTYPE html>
<html lang="en">


<head>
    @include('frontend.partials.head')
    <!-- End CSS files -->
</head>

<body>
    <!-- Preloader start -->
    <div class="loader-page flex-center">
        <img src="{{ asset('frontend/img/loader.gif') }}" alt="">
    </div>
    <!-- Preloader end -->
    <!-- Header start -->
    @include('frontend.partials.header')
    <!-- Header end -->
    <!-- Header end -->

    @yield('content')

    <!-- cta area start -->
    <section class="cta pt-60 pt-md-45 pb-60" style="background-image: url('{{ asset('frontend/img/bg/bg_cta.jpg') }}');"
        data-overlay="9">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 col-lg-5 mb-md-20 text-center text-lg-left">
                    <h3 class="z-5 white f-700 lh-18 wow fadeInLeft">Subscribe Our Newsletter</h3>
                    <p class="white z-5 wow fadeInLeft">Luisque dapibus lacus non pulvinar lobo.</p>
                </div>
                <div class="col-xl-7 col-lg-7 text-center text-lg-right z-5">
                    <form action="#" class="newsform d-flex flex-column flex-sm-row z-5 wow fadeInRight">
                        <input class="form-control input-border mr-20" placeholder="Enter your email" type="email">
                        <a href="#" class="btn btn-square d-flex">
                            subscribe
                            <i class="fas fa-long-arrow-alt-right ml-15"></i>
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- cta area end -->

    <!-- Footer area start -->
    @include('frontend.partials.footer')
    <!-- Footer area end -->
    <!-- ********************* -->
    <!-- Theme skins -->
    <div class="color-theme transition-4">
        <div class="theme-switch">
            <span class="switch">
                <i class="fas fa-sliders-h"></i>
            </span>
        </div>
        <div class="theme-colors transition-4">
            <h4>Theme Skins:</h4>
            <ul class="theme-ul">
                <li>
                    <span class="each-color co1" data-color="css/color.css">
                        <img src="{{ asset('frontend/img/co-1.png') }}" alt="">
                    </span>
                </li>
                <li>
                    <span class="each-color co2" data-color="css/color2.css">
                        <img src="{{ asset('frontend/img/co-2.png') }}" alt="">
                    </span>
                </li>
                <li>
                    <span class="each-color co3" data-color="css/color3.css">
                        <img src="{{ asset('frontend/img/co-3.png') }}" alt="">
                    </span>
                </li>
                <li>
                    <span class="each-color co4" data-color="css/color4.css">
                        <img src="{{ asset('frontend/img/co-4.png') }}" alt="">
                    </span>
                </li>
                <li>
                    <span class="each-color co5" data-color="css/color5.css">
                        <img src="{{ asset('frontend/img/co-5.png') }}" alt="">
                    </span>
                </li>
                <li>
                    <span class="each-color co6" data-color="css/color6.css">
                        <img src="{{ asset('frontend/img/co-6.png') }}" alt="">
                    </span>
                </li>
            </ul>
            <p class="fs-13 "><b>Note: </b>This will not change any image colors (logo, icon colors..etc)</p>
        </div>
    </div>
    <!-- Theme skins -->
    <!-- JS Files -->
    @include('frontend.partials.script')
    <!-- JS Files end -->
</body>

</html>
