@extends('frontend.master')
@section('content')
    <style>
        .mid-text {
            font-size: 14px;
        }

        .breadcrumb ul li {
            font-size: 12px;
        }
    </style>
    {{-- Banner Area --}}
    <section class="showcase">
        <img class="img-fluid" src="https://worldbank.scene7.com/is/image/worldbankprod/Banner-1440x600-1:1440x600"
            alt="Picture" style="background-size: container;">
        <div class="overlay">
            <h2 style="font-size: 45px;">Industry Watch</h2>
            <p class="mt-3 text-white">
                Industry Watch Al Investment Opportunities
            </p>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="scp-breadcrumb my-3">
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Industry Watch</a></li>
                    <li class="active">All</li>
                </ul>
            </div>
            <div class="row my-5">
                <div class="col-lg-3">
                    <h3>Filter By</h3>
                    <hr>
                    {{-- By Industries Radio Button Checkbox --}}
                    <p class="mt-3 p-0 m-0 fw-bold"><i class="fa-solid fa-briefcase me-2"></i>Industries </p>
                    <div class="mt-3 mb-5">

                        @foreach ($industries as $industry)
                            <div class="checkbox-wrapper-42 py-2">
                                <input id="cbx-{{$industry->id}}" type="checkbox" name="industry[]" value="{{$industry->slug}}"/>
                                <label class="cbx" for="cbx-{{$industry->id}}"></label>
                                <label class="lbl" for="cbx-{{$industry->id}}"> {{$industry->name}} <br>
                                    <small>{{$industry->getSectorName()}}</small>
                                </label>
                            </div>
                        @endforeach

                    </div>
                    <hr class="">
                    {{-- By Categories Radio Button Checkbox --}}
                    {{-- <p class="mt-3 p-0 m-0 fw-bold"><i class="fa-solid fa-briefcase me-2"></i>Industries </p>
                    <div class="mt-3 mb-5">
                        <div class="checkbox-wrapper-42">
                            <input id="cbx-11" type="checkbox" />
                            <label class="cbx" for="cbx-11"></label>
                            <label class="lbl" for="cbx-11"> All Transactions</label>
                        </div>

                    </div> --}}
                    {{-- <hr class=""> --}}


                </div>
                <div class="col-lg-9 p-0">
                    <div>
                        <h3>Industry Watch - Research Reports</h3>
                        <p>Industry Research Reports analyzing strategic and economic insights of several industries across
                            the world.</p>
                    </div>
                    <div class="row gx-1 mt-2">
                        @foreach ($industry_watches as $industry_watch)
                            <div class="col-md-4">
                                <div class="sme-v3-shadow-box industry-watch-business-card" style="margin-bottom:20px;">
                                    <a href="{{route('industry-watch.details',$industry_watch->slug)}}">
                                        <div
                                            style="background:url('{{asset('storage/'.$industry_watch->image)}}') no-repeat center center;background-size:cover;width:100%;height:200px">
                                        </div>
                                    </a>
                                    <div class="p-2 sme-v3-h3 sme-v3-border-bottom">
                                        <a href="{{route('industry-watch.details',$industry_watch->slug)}}">{{$industry_watch->title}} </a>
                                    </div>
                                    <p
                                        class=" p-2 sme-v3-smalltext sme-v3-left-justify sme-v3-lighter-text sme-v3-fixed-multiline">
                                        <a style="color:#999;text-decoration:none;" href="{{route('industry-watch.details',$industry_watch->slug)}}">{{$industry_watch->header}}</a>
                                    </p>
                                    <a href="{{route('industry-watch.details',$industry_watch->slug)}}" class="rounded-0 btn-site-1 login-modal-link"
                                        style="background-color: #186191; color: white; font-family:proxima_novaregular; padding-top: 2px !important; padding-bottom: 2px !important;">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        @endforeach
                        <div class="col-md-4">
                            <div class="sme-v3-shadow-box industry-watch-business-card" style="margin-bottom:20px;">
                                <a href="{{route('industry-watch.details',['id'=> 'static_slug'])}}">
                                    <div
                                        style="background:url(https://www.smergers.com/media/sectorpics/xhospital.jpeg.pagespeed.ic.UYXrEzVQEq.webp) no-repeat center center;background-size:cover;width:100%;height:200px">
                                    </div>
                                </a>
                                <div class="p-2 sme-v3-h3 sme-v3-border-bottom">
                                    <a href="{{route('industry-watch.details',['id'=> 'static_slug'])}}">Indian Hospital Industry </a>
                                </div>
                                <p
                                    class=" p-2 sme-v3-smalltext sme-v3-left-justify sme-v3-lighter-text sme-v3-fixed-multiline">
                                    <a style="color:#999;text-decoration:none;" href="">The Indian healthcare
                                        market is expected to reach ₹ 24 lakh crore by 2022...</a>
                                </p>
                                <a href="{{route('industry-watch.details',['id'=> 'static_slug'])}}" class="rounded-0 btn-site-1 login-modal-link"
                                    style="background-color: #186191; color: white; font-family:proxima_novaregular; padding-top: 2px !important; padding-bottom: 2px !important;">
                                    Read More
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    </section>
@endsection
