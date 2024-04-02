@extends('frontend.master')
@section('content')
    <style>
        .mid-text {
            font-size: 14px;
        }
        .breadcrumb ul li{
            font-size: 12px;
        }
    </style>
    {{-- Banner Area --}}
    <section class="showcase">
        <img class="img-fluid" src="https://worldbank.scene7.com/is/image/worldbankprod/Banner-1440x600-1:1440x600"
            alt="Picture" style="background-size: container;">
        <div class="overlay">
            <h2 style="font-size: 45px;">Industry Watch All Details</h2>
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
                    <li class="active">Details</li>
                </ul>
            </div>
            <div class="row my-5">
                <div class="col-lg-3">
                    <div class="shadow-lg">
                        <img src="https://www.smergers.com/media/sectorpics/xhospital.jpeg.pagespeed.ic.UYXrEzVQEq.webp"
                            class="img-fluid" alt="">
                    </div>
                    <h5 class="pt-3 pb-3">Indian Hospital Industry</h5>
                    <p class="fw-bold text-muted text-one">Market Size</p>
                    <p class="mb-2">INR 4 lakh crore in FY17</p>
                    <div>
                        <p class="text-black text-one" style="font-weight: 600">Annual Growth Rate</p>
                        <span>Growing at 16-17% CAGR annually to reach INR 8.6 lakh crore in FY22</span>
                    </div>
                    <div>
                        <p class="text-black text-one" style="font-weight: 600">Landscape</p>
                        <span>74% of the hospitals in India are privately run. However, 60% of the total number of hospital
                            beds available in the country are owned by public hospitals. 70% of India's healthcare
                            infrastructure is limited to the top 20 cities.</span>
                    </div>
                    <div>
                        <p class="text-black text-one" style="font-weight: 600">Industry Median EV/EBITDA</p>
                        <span>19.8x (ttm)</span>
                    </div>
                    <div>
                        <p class="text-black text-one" style="font-weight: 600">Industry Median EV/Bed</p>
                        <span>INR 90 lakh</span>
                    </div>
                    <div>
                        <p class="text-black text-one" style="font-weight: 600">Industry Median Revenue/Bed</p>
                        <span>INR 32 lakh</span>
                    </div>
                </div>
                <div class="col-lg-9 p-0">
                    <div>
                        <img src="https://www.industrialempathy.com/img/remote/ZiClJf-1920w.jpg" class="img-fluid rounded shadow-lg"alt="">
                        <h5 class="pt-3 pb-1">Indian Hospital Industry</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium minima ut est reprehenderit adipisci eum earum quas voluptatem culpa vero ab enim in voluptates ipsam sed porro doloribus temporibus numquam non, saepe commodi? Aspernatur voluptatibus est aliquid itaque? Consequatur officiis, aperiam laboriosam quibusdam sit ipsum nam? Harum iusto provident debitis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, dolore voluptatum, magnam quia totam beatae eius doloremque provident aspernatur veritatis ab reprehenderit temporibus architecto, aliquid eaque perspiciatis suscipit rerum id. Odit repellendus veniam autem eaque ullam quaerat rerum? Atque veniam, dicta velit enim doloremque dolorem itaque voluptatibus? Incidunt, laborum doloremque?</p>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
