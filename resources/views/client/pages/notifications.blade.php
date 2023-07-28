@extends('frontend.master')
@section('content')
    <section class="mt-65">
        <div class="page-container">
            <main role="main">
                <div class="main-content">
                    <div>
                        <div class="dashboard-v2 row px-3">

                            @include('client.partials.sidebar')

                            <div class="col-md-6 no-gutter-mobile">
                                <div class="white-box-wrapper notification-page" id="dashboard-notifications">
                                    <div class="white-box notification-list">
                                        <div class="box-heading">Notifications</div>
                                        <ul class="notifications">
                                            <li>
                                                <div class="row">
                                                    <div class="notification-photo col-md-1 col-xs-2">
                                                        <div class="photo-container "
                                                            style="background-image:url('https://www.smergers.com/static/images/logo/xregular_sm.png.pagespeed.ic.Sz2Ogi_fjj.webp')">
                                                        </div>
                                                    </div>
                                                    <div class="notification-content col-md-11 col-xs-10">
                                                        <div class="notification-container">
                                                            <div class="premium-profile"></div>
                                                            <div class="title-container">
                                                                <div class="title col-md-10">
                                                                    New Investor recommendation in <b>Recruitment
                                                                        Agencies</b>
                                                                    and <b>Asia</b>
                                                                </div>
                                                                <div class="timestamp col-md-2">6&nbsp;days, 23&nbsp;hours
                                                                    ago
                                                                </div>
                                                                <div class="clear"></div>
                                                            </div>
                                                            <div class="message">
                                                                <a style="color: #888;"
                                                                    href="/investor/finance-director-aluminium-manufacturer-franchise-investor-in-kuala-lumpur-looking-to-invest-in-business-service-businesses-upto-myr-120-thousand/y3a7u/">
                                                                    <span class="single-line">Finance Director, Aluminium
                                                                        Manufacturer, Kuala Lumpur, Individual Investor /
                                                                        Buyer</span>
                                                                    <br>
                                                                    <div class="asking-price">
                                                                        Investment Size:
                                                                        BDT
                                                                        5 lakh
                                                                        -
                                                                        BDT
                                                                        30 lakh
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>

                                            </li>
                                            
                                        </ul>
                                        <div class="clear"></div>
                                        <ul class="pager" style="text-align:center;">
                                            <li class=" disabled ">
                                                <a href="#" class="sme-v3-disabled-link sme-v3-border-radius">
                                                    <i class="ti-angle-double-left"></i> Previous
                                                </a>
                                            </li>
                                            <li class="sme-v3-breathing-space">Page 1 of 1</li>
                                            <li class=" disabled ">
                                                <a href="#" class="sme-v3-disabled-link sme-v3-border-radius">
                                                    Next <i class="ti-angle-double-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="page-footer-rule"></div>
                <div id="id-faqs-wrapper" style="border-top:1px solid #eee;">
                </div>
            </main>

            <div>
            </div>

        </div>
    </section>
@endsection
