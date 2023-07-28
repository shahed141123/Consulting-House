@extends('frontend.master')
@section('content')
    <section class="container mt-65">
        <div class="dashboard-v2 row">
            <main>
                <div class="main-content">
                    <div class="dashboard-v2 row px-3">

                        @include('client.partials.sidebar')

                        <div class="col-md-8 no-gutter-mobile">
                            <div class="white-box-wrapper">
                                <div class="white-box create-listings-box">
                                    <div>
                                        <div class="box-heading">
                                            <div>
                                                <i class='fas fa-warning-sign' style='color:red;'></i>&nbsp; Attention
                                                Required
                                            </div>
                                            <div class="sub-text">
                                                Some of your profiles are on hold/incomplete and they will not be
                                                visible to businesses and
                                                investors. Please review your profile and provide complete information
                                                to register again.
                                            </div>
                                        </div>
                                        <div class="box-content">
                                            <ul class="incomplete-profiles">
                                                <li class='row'>
                                                    <div class="col-md-7">
                                                        <div class='profile-name'>
                                                            Investor Profile - Bangladesh
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5 complete-profile-buttons">
                                                        <a target="_blank" href="/edit-investor-profile/1y50z/"
                                                            class="btn btn-consultant">Complete
                                                            Profile</a>
                                                        <a target="_blank" href="/delete/InvestorRequirement/275895/"
                                                            class="btn btn-default"><i class="fas fa-trash-alt"></i></a>
                                                    </div>
                                                    <div class="clear"></div>
                                                    <div class="col-md-12">
                                                        <div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 profile-pending-reason"
                                                        style="margin-top:5px;margin-bottom: 5px;">
                                                        <div
                                                            style="background-color: #fce8e6;color:#d9534f;padding:7px 10px;border-radius: 5px;">
                                                            <p>Invalid or Incomplete Details. Please edit your profile
                                                                to provide complete and correct
                                                                information for a second review. Our members are
                                                                unlikely to show interest in an
                                                                incomplete profile.</p>
                                                        </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                    <div class="col-md-12">
                                                        <div class="payment-status">
                                                            <div class="dashboard-note">
                                                                <div class="row">
                                                                    <div class="col-md-8">
                                                                        You are currently on a basic plan. Upgrade to a
                                                                        premium plan to
                                                                        get your profile activated faster and
                                                                        start
                                                                        connecting with businesses.
                                                                    </div>
                                                                    <div class="col-md-4 text-right">
                                                                        <a class="show-upgrade-modal btn btn-consultant btn-sm"
                                                                            href="#" data-objtype="investor"
                                                                            data-id="275895">
                                                                            Upgrade &amp; Connect
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class='row'>
                                                    <div class="col-md-7">
                                                        <div class='profile-name'>
                                                            Company Profile - - Sales Partner Opportunity
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5 complete-profile-buttons">
                                                        <a target="_blank" href="/edit-franchise/yoo0t/"
                                                            class="btn btn-consultant">Complete Profile</a>
                                                        <a target="_blank" href="/delete/Business/211528/"
                                                            class="btn btn-default"><i class="fas fa-trash-alt"></i></a>
                                                    </div>
                                                    <div class="clear"></div>
                                                    <div class="col-md-12">
                                                        <div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 profile-pending-reason"
                                                        style="margin-top:5px;margin-bottom: 5px;">
                                                        <div
                                                            style="background-color: #fce8e6;color:#d9534f;padding:7px 10px;border-radius: 5px;">
                                                            <p>Invalid or Incomplete Details. Please edit your profile
                                                                to provide complete and correct
                                                                information for a second review. Our members are
                                                                unlikely to show interest in an
                                                                incomplete profile.</p>
                                                        </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                    <div class="col-md-12">
                                                        <div class="payment-status">
                                                            <div class="dashboard-note">
                                                                <div class="row">
                                                                    <div class="col-md-8">
                                                                        You are currently on a basic plan. Upgrade to a
                                                                        premium plan to
                                                                        get your profile activated faster and
                                                                        start
                                                                        sending proposals to investors and acquirers.
                                                                    </div>
                                                                    <div class="col-md-4 text-right">
                                                                        <a class="show-upgrade-modal btn btn-consultant btn-sm"
                                                                            href="#" data-objtype="company"
                                                                            data-id="211528">
                                                                            Upgrade &amp; Send Proposal
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class='row'>
                                                    <div class="col-md-7">
                                                        <div class='profile-name'>
                                                            Business Profile -
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5 complete-profile-buttons">
                                                        <a target="_blank" href=""
                                                            class="btn btn-consultant">Complete
                                                            Profile</a>
                                                        <a target="_blank" href="/delete/Business/211529/"
                                                            class="btn btn-default"><i class="fas fa-trash-alt"></i></a>
                                                    </div>
                                                    <div class="clear"></div>
                                                    <div class="col-md-12">
                                                        <div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 profile-pending-reason"
                                                        style="margin-top:5px;margin-bottom: 5px;">
                                                        <div
                                                            style="background-color: #fce8e6;color:#d9534f;padding:7px 10px;border-radius: 5px;">
                                                            <p>Invalid or Incomplete Details. Please edit your profile
                                                                to provide complete and correct
                                                                information for a second review. Our members are
                                                                unlikely to show interest in an
                                                                incomplete profile.</p>
                                                        </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                    <div class="col-md-12">
                                                        <div class="payment-status">
                                                            <div class="dashboard-note">
                                                                <div class="row">
                                                                    <div class="col-md-8">
                                                                        You are currently on a basic plan. Upgrade to a
                                                                        premium plan to
                                                                        get your profile activated faster and
                                                                        start
                                                                        sending proposals to investors and acquirers.
                                                                    </div>
                                                                    <div class="col-md-4 text-right">
                                                                        <a class="show-upgrade-modal btn btn-consultant btn-sm"
                                                                            href="#" data-objtype="business"
                                                                            data-id="211529">
                                                                            Upgrade &amp; Send Proposal
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='white-box-wrapper'>
                                <div class="box-toggle">
                                    <i class="fas fa-plus-sign-alt addicon"></i> &nbsp; Add New Profile
                                </div>
                                <div class="white-box create-listings-box hidden">
                                    <div>
                                        <div class="box-heading">
                                            <div>
                                                Hi DEV1 - NGENIT,
                                            </div>
                                        </div>
                                        <div class="sme-v3-lighter-text sme-v3-thinner-text sme-v3-padded-box-md">
                                            Welcome to SMERGERS, We help you acquire businesses, raise capital for your
                                            company, find
                                            franchise partners, or realize value through a strategic sale. Our global
                                            network of investors and
                                            businesses helps you successfully achieve your strategic objectives.
                                        </div>
                                        <div class="box-content">
                                            <div class="row gems">
                                                <div class="col-xs-3">
                                                    <a target="_blank" href="/create-business-profile" class="gem"
                                                        id='businesses'>
                                                        <i class="fas fa-building"></i>
                                                    </a>
                                                    <br>
                                                    <a target="_blank" href="/create-business-profile">
                                                        Sell your Business<br>
                                                        Find Investors
                                                    </a>
                                                </div>
                                                <div class="col-xs-3">
                                                    <a target="_blank" href="/create-investor-profile" class='gem'
                                                        id='investors'>
                                                        <i class="fas fa-money"></i>
                                                    </a>
                                                    <br>
                                                    <a target="_blank" href="/create-investor-profile">
                                                        Buy a Business<br>
                                                        Invest in a Business
                                                    </a>
                                                </div>
                                                <div class="col-xs-3">
                                                    <a target="_blank" href="/create-franchise-profile/"
                                                        class='gem' id='acquirers'>
                                                        <i class="fas fa-sitemap"></i>
                                                    </a>
                                                    <br>
                                                    <a target="_blank" href="/create-franchise-profile/">
                                                        Franchise your Brand<br>
                                                        Get Distributors
                                                    </a>
                                                </div>
                                                <div class="col-xs-3">
                                                    <a target="_blank" href="/register-as-advisor/" class='gem'
                                                        id='advisors'>
                                                        <i class="fas fa-briefcase"></i>
                                                    </a>
                                                    <br>
                                                    <a target="_blank" href="/register-as-advisor/">
                                                        Register as an Advisor<br>
                                                        or Business Broker
                                                    </a>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="white-box-wrapper" id="dashboard-latest-activity">
                                <div class="white-box feedbox">
                                    <div class="box-heading">
                                        <i class="ti-rss-alt" style='color:orange;'></i> &nbsp; Latest Activity
                                    </div>
                                    <div id="latest-activity-container" class="box-content">
                                        <img class="htmx-indicator"
                                            style="height: 30px; width:100%; margin: 30px auto;"
                                            data-pagespeed-lazy-src="/static/images/loader.svg"
                                            hx-get="/ajax/get-feed-for-user/?offset=0" hx-trigger="revealed"
                                            hx-swap="outerHTML" hx-select=".feeditem, .htmx-indicator"
                                            src="/pagespeed_static/1.JiBnMqyl6S.gif"
                                            onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                            onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="clear"></div>

            </main>

        </div>
    </section>
@endsection
