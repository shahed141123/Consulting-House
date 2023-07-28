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
