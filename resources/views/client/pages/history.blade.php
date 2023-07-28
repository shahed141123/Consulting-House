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
                                <div class="white-box-wrapper" id="dashboard-bookmarks">
                                    <div class="white-box">
                                        <div class="box-heading">
                                            <i class="icon-bookmark"
                                                style="color:orange;width:15px;display:inline-block;"></i> Bookmarks
                                        </div>
                                        <div class="box-content">
                                            <ul class="history-list">
                                                <li style="padding:15px 0px;">
                                                    You have not shortlisted any profiles yet.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="white-box-wrapper" id="dashboard-history">
                                    <div class="white-box">
                                        <div class="box-heading">
                                            History
                                            <a class="float-right text-danger fs-13 mt-1" href=""><i class="mr-1 fa fa-trash"></i>Clear History</a>
                                        </div>
                                        <div class="box-content">
                                            <div class="row feeditem">
                                                <div class="col-md-12">
                                                    <p class="sme-v3-largetext sme-v3-bolder">
                                                        <a href="/franchise/rabson-care-limited/ipzon/?ref=dashboardfeedlist"
                                                            target="_blank" style="color:#4183c4;">
                                                            Rabson Care Limited - Franchise Opportunity
                                                            <span class="sme-v3-smalltext" style="color:#000;">
                                                                Rating: <span class="rank sme-v3-largetext"> <i
                                                                        class="icon-star rating-star"></i> 6.8</span> <span
                                                                    style="">/ 10</span>
                                                            </span>
                                                        </a>
                                                    </p>
                                                    <div class="row photos" style="margin-top:10px; margin-bottom:10px;">
                                                        <div class="col-md-12">
                                                            <div class="sme-v3-fixed-multiline sme-v3-fixed-multiline-3">
                                                                Rabson Care is a hair &amp; skin specialized clinic that
                                                                started operations in 2017. We are the only specialized
                                                                clinic in Chittagong, Bangladesh. Our services for hair
                                                                transplant &amp; laser treatment is world class. We are
                                                                looking to expand our footprint in Bangladesh through
                                                                franchising.
                                                            </div>
                                                            <div class="row" style="margin-top:9px;margin-bottom:5px;">
                                                                <div class="col-sm-6">
                                                                    <b>Run Rate Sales</b>
                                                                    <span class="monthly-sales-info" data-toggle="tooltip"
                                                                        data-placement="top" data-original-title=""
                                                                        title="">
                                                                        <i class="icon-info-sign"></i>
                                                                    </span>
                                                                    <div class="column-row field-value">
                                                                        <span class="currency-symbol">BDT</span>
                                                                        0 - 20 lakh
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <b>Operation Margin</b>
                                                                    <div class="column-row field-value">
                                                                        15%
                                                                    </div>
                                                                </div>
                                                                <div class="clear"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row contact-button-section float-right px-2">
                                                        <div class="col-xs-12 ">
                                                            <a href="/franchise/rabson-care-limited/ipzon/?ref=dashboardfeedlist"
                                                                class="btn btn-yellow btn-less-padding" target="_blank">
                                                                Contact Business
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
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
