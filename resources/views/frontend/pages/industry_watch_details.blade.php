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

    <section>
        <div class="container">
            <div class="scp-breadcrumb my-3">
                <ul class="breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('all.industry-watch') }}">Industry Watch</a></li>
                    <li class="active">{{ $industry_watch->title }}</li>
                </ul>
            </div>
            <div class="row my-5">
                <div class="col-lg-3 px-3">
                    <div class="shadow-lg">
                        <img src="{{ asset('storage/' . $industry_watch->image) }}" class="img-fluid" alt="">
                    </div>
                    <h5 class="pt-3 pb-3">{{ $industry_watch->title }}</h5>

                    @foreach ($industry_watch_sidebars as $industry_watch_sidebar)
                        <div class="my-1">
                            <p class="text-black text-two" style="font-weight: 600">{{$industry_watch_sidebar->title}}</p>
                            <span>{{$industry_watch_sidebar->value}}</span>
                        </div>
                    @endforeach
                    <div class="row mt-50">
                        <a class="btn-site-1 col-lg-10 mx-3 my-1" href="{{route('custom.filter',$industry_watch->slug)}}">View Business</a>
                        @if (!empty($previous_watch))
                            <a class="btn col-lg-10 mx-3 my-1" href="{{route('industry-watch.details',$previous_watch->slug)}}">{{$previous_watch->title}}</a>
                        @endif
                        @if (!empty($next_watch))
                            <a class="btn col-lg-10 mx-3 my-1" href="{{route('industry-watch.details',$next_watch->slug)}}">{{$next_watch->title}}</a>
                        @endif
                        <a class="btn btn-success col-lg-10 mx-3 my-1" href="{{route('all.industry-watch')}}">Back to Industry Watch</a>


                    </div>
                </div>
                <div class="col-lg-9 p-2 px-4">
                    <div>
                        <h5>{!! $industry_watch->header !!}</h5>
                    </div>
                    <div>
                        <p>{!! $industry_watch->short_description !!}</p>
                    </div>
                    <div>
                        <p>{!! $industry_watch->content !!}</p>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
