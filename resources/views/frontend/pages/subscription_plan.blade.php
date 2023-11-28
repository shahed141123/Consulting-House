@extends('frontend.master')
@section('content')
    <style>
        .nav-item .nav-link {
            color: var(--link-color);
        }
    </style>
    <section>
        <div class="section page-banner-section"
            style="background-image: url('https://thepixelcurve.com/html/techwix/techwix/assets/images/bg/page-banner.jpg');">
            <div class="shape-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="944px" height="894px">
                    <defs>
                        <linearGradient id="PSgrad_0" x1="88.295%" x2="0%" y1="0%" y2="46.947%">
                            <stop offset="0%" stop-color="rgb(67,186,255)" stop-opacity="1"></stop>
                            <stop offset="100%" stop-color="rgb(113,65,177)" stop-opacity="1"></stop>
                        </linearGradient>

                    </defs>
                    <path fill-rule="evenodd" fill="rgb(43, 142, 254)"
                        d="M39.612,410.76 L467.344,29.824 C516.51,-13.476 590.638,-9.93 633.938,39.613 L914.192,317.344 C957.492,366.50 953.109,440.637 904.402,483.938 L476.671,864.191 C427.964,907.492 353.376,903.109 310.76,854.402 L29.823,576.670 C-13.477,527.963 -9.94,453.376 39.612,410.76 Z">
                    </path>
                    <path fill="url(#PSgrad_0)"
                        d="M39.612,410.76 L467.344,29.824 C516.51,-13.476 590.638,-9.93 633.938,39.613 L914.192,317.344 C957.492,366.50 953.109,440.637 904.402,483.938 L476.671,864.191 C427.964,907.492 353.376,903.109 310.76,854.402 L29.823,576.670 C-13.477,527.963 -9.94,453.376 39.612,410.76 Z">
                    </path>
                </svg>
            </div>
            <div class="shape-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="726.5px" height="726.5px">
                    <path fill-rule="evenodd" stroke="rgb(255, 255, 255)" stroke-width="1px" stroke-linecap="butt"
                        stroke-linejoin="miter" opacity="0.302" fill="none"
                        d="M28.14,285.269 L325.37,21.217 C358.860,-8.851 410.655,-5.808 440.723,28.14 L704.777,325.36 C734.846,358.859 731.802,410.654 697.979,440.722 L400.955,704.776 C367.132,734.844 315.338,731.802 285.269,697.978 L21.216,400.954 C-8.852,367.132 -5.808,315.337 28.14,285.269 Z">
                    </path>
                </svg>
            </div>
            <div class="shape-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="515px" height="515px">
                    <defs>
                        <linearGradient id="PSgrad_0" x1="0%" x2="89.879%" y1="0%" y2="43.837%">
                            <stop offset="0%" stop-color="rgb(67,186,255)" stop-opacity="1"></stop>
                            <stop offset="100%" stop-color="rgb(113,65,177)" stop-opacity="1"></stop>
                        </linearGradient>

                    </defs>
                    <path fill-rule="evenodd" fill="rgb(43, 142, 254)"
                        d="M19.529,202.280 L230.531,14.698 C254.559,-6.661 291.353,-4.498 312.714,19.528 L500.295,230.531 C521.656,254.558 519.493,291.353 495.466,312.713 L284.463,500.295 C260.436,521.655 223.641,519.492 202.281,495.465 L14.699,284.462 C-6.660,260.435 -4.498,223.640 19.529,202.280 Z">
                    </path>
                    <path fill="url(#PSgrad_0)"
                        d="M19.529,202.280 L230.531,14.698 C254.559,-6.661 291.353,-4.498 312.714,19.528 L500.295,230.531 C521.656,254.558 519.493,291.353 495.466,312.713 L284.463,500.295 C260.436,521.655 223.641,519.492 202.281,495.465 L14.699,284.462 C-6.660,260.435 -4.498,223.640 19.529,202.280 Z">
                    </path>
                </svg>
            </div>
            <div class="shape-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="972.5px" height="970.5px">
                    <path fill-rule="evenodd" stroke="rgb(255, 255, 255)" stroke-width="1px" stroke-linecap="butt"
                        stroke-linejoin="miter" fill="none"
                        d="M38.245,381.102 L435.258,28.158 C480.467,-12.32 549.697,-7.964 589.888,37.244 L942.832,434.257 C983.23,479.466 978.955,548.697 933.746,588.888 L536.733,941.832 C491.524,982.23 422.293,977.955 382.103,932.745 L29.158,535.732 C-11.32,490.523 -6.963,421.293 38.245,381.102 Z">
                    </path>
                </svg>
            </div>
            <div class="container">
                <div class="page-banner-wrap">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Page Banner Content Start -->
                            <div class="page-banner text-center">
                                <h2 class="title">Pricing</h2>
                                <p class="text-white">All Pricing Our Company</p>
                            </div>
                            <!-- Page Banner Content End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="scp-breadcrumb my-3">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Pricing</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <section>
            <div class="container my-5 mt-2">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2>Our Pricing Plan</h2>
                    </div>
                </div>
                <ul class="row offset-3 nav-tabs mb-3 border-0 mt-50" id="ex1" role="tablist">
                    <li class="col-lg-3 nav-item" role="presentation">
                        <a class="nav-link active btn btn-site-1" id="ex1-tab-1" data-bs-toggle="tab" href="#ex1-tabs-1"
                            role="tab" aria-controls="ex1-tabs-1" aria-selected="true">Buy Side Plans</a>
                    </li>
                    <li class="col-lg-3 nav-item" role="presentation">
                        <a class="nav-link btn btn-site-1" id="ex1-tab-2" data-bs-toggle="tab" href="#ex1-tabs-2"
                            role="tab" aria-controls="ex1-tabs-2" aria-selected="false">Sell Side Plans</a>
                    </li>
                </ul>


                <div class="tab-content" id="ex1-content">
                    <div class="tab-pane fade show active" id="ex1-tabs-1" role="tabpanel" aria-labelledby="ex1-tab-1">
                        <div class="container row sme-v3-extra-margin-top">
                            <div class="row d-flex align-items-center">
                                @foreach ($plans as $plan)
                                    <div class="col-lg-3">
                                        <div class="snip1404">
                                            <div class="plan">
                                                <header>
                                                    <h4 class="plan-title">
                                                        {{ $plan->name }}
                                                    </h4>
                                                    <div class="plan-cost">
                                                        @if ($plan->price > 0)
                                                            <span class="plan-price">$ {{ $plan->price }}</span><span
                                                                class="plan-type">/month</span>
                                                        @else
                                                            <strong>Free</strong>
                                                        @endif
                                                    </div>
                                                </header>
                                                <ul class="plan-features">
                                                    {{-- @dd(json_decode($plan->descriptions, true)) --}}
                                                    @php
                                                        $descriptions1 = json_decode($plan->descriptions, true);
                                                        $descriptions = json_decode($descriptions1, true);
                                                        // dd($descriptions);
                                                    @endphp
                                                    @if (!empty($descriptions))
                                                        @foreach ($descriptions as $description)
                                                            <li><i class="ion-checkmark"></i> {{ $description }}</li>
                                                        @endforeach
                                                    @endif
                                                </ul>
                                                <div class="plan-select"><a
                                                        href="{{ route('subscribe.post', $plan->slug) }}">Select Plan</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>

                            <div class="clear"></div>
                            <div class="row mt-30">
                                <div class="col-md-8 offset-2 text-center">
                                    <small class="text-muted sme-v3-center-justify">
                                        <span class="text-danger">*</span>Note:
                                        All prices are inclusive of
                                        taxes. All plans have access to Advisor
                                        Dashboard and the ability to connect with businesses which send you a
                                        proposal without any charges. Paid plans are not auto-renewed.
                                        * Fair Usage Policy Applicable.
                                    </small>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">
                        <p class="text-center">Will be available Soon.</p>
                    </div>

                </div>
            </div>
        </section>
    @endsection
