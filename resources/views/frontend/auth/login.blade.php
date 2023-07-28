@extends('frontend.master')
@section('content')
    <!-- immer banner start -->
    <section class="inner-banner pt-80 pb-95"
        style="background-image: url('{{ asset('frontend/img/banner/inner-banner.jpg') }}');" data-overlay="7">
        <div class="container">
            <div class="row z-5 align-items-center">
                <div class="col-md-8 text-center text-md-left">
                    <h1 class="f-700 green">Login</h1>
                    <span class="green-line bg-green d-none d-md-inline-block"></span>
                </div>
                <div class="col-md-4 text-center text-md-right">
                    <nav aria-label="breadcrumb" class="banner-breadcump">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home fs-12 mr-5"></i>Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Login</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- Login area start -->
    <section class="login pt-100 pb-100">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-xl-7 col-lg-6 d-none d-lg-block">
                    <div class="login-image bg-cover h-100"
                        style="background-image: url('{{ asset('frontend/img/bg/login.jpg') }}');">

                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 ">
                    <div class="form-area bg-light-white">
                        <h2 class="f-700 mb-15">Have an Account?</h2>
                        <p>Quisque enim ipsum, commodo et venenatis rutrum, luctus in enim venenatis.</p>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group relative mb-25 mb-sm-20">
                                <input type="email" class="form-control input-lg input-white shadow-5" id="name" name="email"
                                    placeholder="Enter Your Email address" value="{{ old('email') }}">
                                <i class="far fa-email transform-v-center"></i>
                                @error('email')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group relative mb-20 mb-sm-20">
                                <input type="password" class="form-control input-lg input-white shadow-5" id="pwd" name="password"
                                    placeholder="Password" autocomplete="current-password">
                                <i class="fas fa-eye transform-v-center view-password"></i>
                                @error('password')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group form-check pl-0">
                                <div class="d-flex justify-content-between">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input"
                                            checked="" id="remember_me" name="remember">
                                        <label class="custom-control-label fs-13" for="remember_me"><span
                                                class="label-check">Remember me</span></label>
                                    </div>
                                    <a href="#" class="fs-12 black">Forgot Password?</a>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-square btn-block shadow-4 mt-20">LOGIN</button>
                            <div class="signup-login text-center">
                                <p class="mt-15 fs-13">
                                    New here?<a href="{{ route('register') }}" class="ml-5 mb-0 d-inline-block f-500">Sign up</a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Login area end -->

    <!-- Experience Cta start -->
    <section class="experience-cta pt-100 pb-100" style="background-image: url('img/bg/bg-2.jpg');" data-overlay="9">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 z-5 text-center text-lg-left wow fadeIn">
                    <div class="exp-cta pr-50 pr-lg-00">
                        <h1 class="white f-700 mb-10">
                            <span class="green">25 Years</span> of Experience in the <span class="green">Industry</span>
                        </h1>
                        <p class="white mb-55 mb-md-30 pr-60 pr-md-00">Quisque enim ipsum, commodo et venenatis rutrum,
                            luctus in enim. Quisque dapibus</p>
                        <a href="#" class="btn btn-square blob-small">Contact us
                            <i class="fas fa-long-arrow-alt-right ml-20"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 mt-md-60">
                    <div class="row no-gutters">
                        <div class="col-sm-6 text-center">
                            <div class="each-count-up shade z-5 wow fadeIn" data-wow-delay=".2s">
                                <h2 class="fs-40 f-900 green mb-20 mt-5"><span class="counter">3000</span>+</h2>
                                <p class="uppercase white mb-0">Satisfied Customers</p>
                            </div>
                        </div>
                        <div class="col-sm-6 text-center">
                            <div class="each-count-up z-5 wow fadeIn" data-wow-delay=".4s">
                                <h2 class="fs-40 f-900 green mb-20 mt-5"><span class="counter">250</span>+</h2>
                                <p class="uppercase white mb-0">Awards Winner</p>
                            </div>
                        </div>
                        <div class="col-sm-6 text-center">
                            <div class="each-count-up z-5 wow fadeIn" data-wow-delay=".6s">
                                <h2 class="fs-40 f-900 green mb-20 mt-5"><span class="counter">350</span>+</h2>
                                <p class="uppercase white mb-0">Professionals</p>
                            </div>
                        </div>
                        <div class="col-sm-6 text-center">
                            <div class="each-count-up z-5 shade wow fadeIn" data-wow-delay=".8s">
                                <h2 class="fs-40 f-900 green mb-20 mt-5"><span class="counter">5300</span>+</h2>
                                <p class="uppercase white mb-0">Projects Completed</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Experience Cta end -->

    <!-- Client logos area start -->
    <section class="client-list bg-light-white pt-100 pb-70">
        <div class="container">
            <div class="row ">
                <div class="col-lg-6 col-xl-5 text-center text-lg-left">
                    <div class="clients-left-part">
                        <div class="fancy-head left-al">
                            <h5 class="line-head mb-15">
                                <span class="line before d-lg-none"></span>
                                Our Clients
                                <span class="line after"></span>
                            </h5>
                            <h1 class="mb-15">Trusted by World’s Biggest Brands</h1>
                        </div>
                        <p class="mb-35 pr-45 pr-md-00">Quisque enim ipsum, commodo et venenatis rutrum, luctus in enim.
                            Quisque dapibus lacus non pulvinar lobortis. Cras odio dolor.</p>
                        <a href="#" class="btn btn-square">View all<i
                                class="fas fa-long-arrow-alt-right ml-20"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 mt-md-60 offset-xl-1 offset-lg-0">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="each-logo flex-center transition-4 mb-30">
                                <img src="{{ asset('frontend/img/clients/1_blk.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="each-logo flex-center transition-4 mb-30">
                                <img src="{{ asset('frontend/img/clients/2_blk.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="each-logo flex-center transition-4 mb-30">
                                <img src="{{ asset('frontend/img/clients/3_blk.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="each-logo flex-center transition-4 mb-30">
                                <img src="{{ asset('frontend/img/clients/4_blk.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="each-logo flex-center transition-4 mb-30">
                                <img src="{{ asset('frontend/img/clients/5_blk.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="each-logo flex-center transition-4 mb-30">
                                <img src="{{ asset('frontend/img/clients/6_blk.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Client logos area end -->
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('.view-password').on('click', function() {
                let input = $(this).prev("input[name='password']");
                let icon = $(this).toggleClass('fa-eye fa-eye-slash');

                if (input.attr('type') === 'password') {
                    input.attr('type', 'text');
                } else {
                    input.attr('type', 'password');
                }
            });
        });
    </script>
@endpush
