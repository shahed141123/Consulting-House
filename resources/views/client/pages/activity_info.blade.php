@extends('frontend.master')
@section('content')
    <section class="container mt-65">
        <div class="dashboard-v2 row">
            <div class="mobile-sidebar-container floating-panel-container col-md-3 mb-2">
                <div class="mobile-sidebar ">
                    <div class="dashboard-sidebar-wrapper">
                        <div class="quick-links mt-0">
                            <ul class="linkmenu flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <li class="p-0"><a href="/dashboard/"> <i class="fa fa-angle-left"
                                            style="font-size: 10px;"></i>
                                        Back to Dashboard</a></li>
                                <li class="p-0">
                                    <a class="h6 {{ $active_id == 'message' ? 'active' : '' }}" id="v-pills-message-tab"
                                        data-bs-toggle="pill" data-bs-target="#v-pills-message" role="tab"
                                        aria-controls="v-pills-home" aria-selected="true">Messages
                                        <span class="arrow"></span>
                                    </a>
                                </li>
                                <li class="p-0">
                                    <a class="h6 {{ $active_id == 'notifications' ? 'active' : '' }}"
                                        id="v-pills-notifications-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-notifications" role="tab"
                                        aria-controls="v-pills-profile" aria-selected="false">Notifications
                                        <span class="arrow"></span>
                                    </a>
                                </li>
                                <li class="p-0">
                                    <a class="h6 {{ $active_id == 'invoice' ? 'active' : '' }}" id="v-pills-invoice-tab"
                                        data-bs-toggle="pill" data-bs-target="#v-pills-invoice" role="tab"
                                        aria-controls="v-pills-messages" aria-selected="false">Invoice
                                        <span class="arrow"></span>
                                    </a>
                                </li>
                                <li class="p-0">
                                    <a class="h6 {{ $active_id == 'history' ? 'active' : '' }}" id="v-pills-history-tab"
                                        data-bs-toggle="pill" data-bs-target="#v-pills-history" role="tab"
                                        aria-controls="v-pills-settings" aria-selected="false">History
                                        <span class="arrow"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mobile-sidebar-mask"></div>
            </div>

            <div class="col-md-8 no-gutter-mobile">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade {{ $active_id == 'message' ? 'show' : '' }} {{ $active_id == 'message' ? 'active' : '' }}"
                        id="v-pills-message" role="tabpanel" aria-labelledby="v-pills-message-tab">
                        <div class="white-box-wrapper">
                            <div class="white-box">
                                <div class="box-heading">Your Messages</div>
                                <main style="padding: 20px;">
                                    <p style="margin: -10px 0 10px 0; color: #222222; font-size: 13px">
                                        You have no messages in your inbox to show.
                                    </p>

                                </main>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade {{ $active_id == 'notifications' ? 'show' : '' }} {{ $active_id == 'notifications' ? 'active' : '' }}"
                        id="v-pills-notifications" role="tabpanel" aria-labelledby="v-pills-notifications-tab">
                        <div class="white-box-wrapper notification-page" id="dashboard-notifications">
                            <div class="white-box notification-list">
                                <div class="box-heading">Notifications</div>
                                <ul class="notifications">
                                    <li>
                                        <div class="notification-photo col-md-1 col-xs-2">
                                            <div class="photo-container"
                                                style="background-image:url(http://ngenitltd.com/upload/Products/thumbnail/1760147303158297.png)">
                                            </div>
                                        </div>
                                        <div class="notification-content col-md-11 col-xs-10">
                                            <div class="notification-container">
                                                <div class="premium-profile"></div>
                                                <div class="title-container">
                                                    <div class="title col-md-10">
                                                        New Investor recommendation in <b>Recruitment Agencies</b> and
                                                        <b>Asia</b>
                                                    </div>
                                                    <div class="timestamp col-md-2">1&nbsp;week ago</div>
                                                    <div class="clear"></div>
                                                </div>
                                                <div class="message">
                                                    <a style="color: #888;"
                                                        href="/investor/finance-director-aluminium-manufacturer-franchise-investor-in-kuala-lumpur-looking-to-invest-in-business-service-businesses-upto-myr-120-thousand/y3a7u/">
                                                        <span class="single-line">Finance Director, Aluminium Manufacturer,
                                                            Kuala Lumpur, Individual Investor / Buyer</span>
                                                        <br>
                                                        <div class="asking-price">
                                                            Investment Size: BDT 5 lakh - BDT 30 lakh
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
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
                    <div class="tab-pane fade {{ $active_id == 'invoice' ? 'show' : '' }} {{ $active_id == 'invoice' ? 'active' : '' }}"
                        id="v-pills-invoice" role="tabpanel" aria-labelledby="v-pills-invoice-tab">
                        <div class="white-box-wrapper">
                            <div class="white-box">
                                <div class="box-heading">Your Invoices</div>
                                <main style="padding: 20px;">
                                    <p style="margin: -10px 0 10px 0; color: #222222; font-size: 13px">
                                        You have not subscribed to any plans on Consultant House yet.
                                    </p>

                                </main>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade {{ $active_id == 'history' ? 'show' : '' }} {{ $active_id == 'history' ? 'active' : '' }}"
                        id="v-pills-history" role="tabpanel" aria-labelledby="v-pills-history-tab">
                        <div class="white-box-wrapper" id="dashboard-bookmarks">
                            <div class="white-box">
                                <div class="box-heading">
                                    <i class="icon-bookmark" style="color:orange;width:15px;display:inline-block;"></i>
                                    Bookmarks
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
                                    <a class="float-right text-danger fs-13 mt-1" href=""><i
                                            class="mr-1 fa fa-trash"></i>Clear History</a>
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
                </div>
            </div>
        </div>

    </section>
@endsection
