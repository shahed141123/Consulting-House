@extends('frontend.master')
@section('content')
    <style>
        .hidden {
            display: none;
        }

        .nosel {
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }


        .img-enlarged__cont {
            width: 100%;
            height: 0px;
            opacity: 0;
            font-family: Helvetica, sans-serif;
            cursor: zoom-out;
            background: rgba(0, 0, 0, 0.5);
            position: fixed;
            top: 0;
            left: 0;
            z-index: 998;

            transition: opacity 0.3s ease-in-out, height 0.3s ease-in-out;
        }

        .img-enlarged__cont.open {
            height: 100%;
            opacity: 1;

            transition: opacity 0.3s ease-in-out, height 0.3s ease-in-out;
        }

        .img-enlarged {
            max-width: 90%;
            max-height: 80%;
            border: 5px solid #eee;
            display: block;
            margin: auto !important;

            position: relative;
            top: 10%;
            bottom: 10%;
        }

        .img-enlarged__nav.next::after {
            content: ">";
            font-size: 50px;
            font-family: monospace;
            color: #fff;
            position: absolute;
            right: 40%;
            top: 49%;
        }

        .img-enlarged__nav.prev::after {
            content: "<";
            font-size: 50px;
            font-family: monospace;
            color: #fff;
            position: absolute;
            left: 40%;
            top: 49%;
        }


        .gallery img {
            cursor: zoom-in;
        }


        .img-enlarged__nav {
            background: rgba(0, 0, 0, 0.2);
            cursor: pointer;
            z-index: 999;
            text-align: center;
            height: 100%;
            width: 10%;
            vertical-align: middle;
            transition: 0.3s width, 0.2s;
        }

        .img-enlarged__nav:hover {
            background: rgba(0, 0, 0, 0.8);
            width: 11%;
            transition: 0.3s width, 0.2s background;
        }

        .img-enlarged__nav:active {
            width: 12%;
            transition: 0.1s width;
        }

        .img-enlarged__nav span {
            font-size: 25px;
            color: #fff;
            height: 20px;
            display: inline-block;
        }

        .img-enlarged__nav.prev {
            position: absolute;
            top: 0;
            left: 0;
        }

        .img-enlarged__nav.next {
            position: absolute;
            top: 0;
            right: 0;
        }


        .img-enlarged__counter {
            background: rgba(0, 0, 0, 0.5);
            color: #fff;
            font-family: monospace;
            width: 50px;
            text-align: center;
            font-size: 15px;
            padding: 7px 0 7px 0;
            margin: auto !important;
            display: block;

            position: absolute;
            left: 49%;
            bottom: 5%;
        }
    </style>
    {{-- Banner Section --}}
    <section style="margin-top: 2rem;">
        <div class="container">
            <div class="row">
                <div class="scp-breadcrumb my-5 mb-1">
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fa-solid fa-house-chimney"></i> Home</a></li>
                        <li><a href="#"> Businesses</a></li>
                        <li><a href="#"> United Kingdom</a></li>
                        <li><a href="#"> Healthcare</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                {{-- Main Content --}}
                <div class="col-lg-8">
                    <div class="card rounded-0 border-0" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                        <div class="card-header bg-white">
                            <h6>Nursing Home Investment Opportunity in Welshpool, United Kingdom</h6>
                            <p>Healthcare business looking to acquire large 40-bed residential care home for the elderly.
                            </p>
                        </div>
                        {{-- {Product Title Card Start} --}}
                        <div class="card-body p-2 border-bottom border-secoandary" style="background-color: #F0F8F0">
                            <div class="d-flex justify-content-start">
                                <div><i class="fa-solid fa-square-check text-success"></i></div>
                                <div class="text-one ps-2">This Business is on a Premium Plan</div>
                            </div>
                        </div>
                        {{-- {Product Details Card Start} --}}
                        <div class="card-body">
                            {{-- Produict Image --}}
                            <div class="card-body row gx-2">
                                <div class="gallery col-lg-8">
                                    <img data-gallery-index="0"
                                        src="https://66.media.tumblr.com/f7fa83c341feb9591b49c8967d77e999/tumblr_pn2kdw3CY91wnafjio1_1280.jpg" />
                                </div>
                                <div class="gallery col-lg-4">
                                    <img data-gallery-index="1"
                                        src="https://66.media.tumblr.com/220a3e731fefcf2d72f1d3771b8de242/tumblr_pmz38qB4EI1wnafjio3_r1_1280.jpg" />
                                    <img data-gallery-index="2" class="mt-2"
                                        src="https://66.media.tumblr.com/3c3409e328322fee66be4c2f9bff16f7/tumblr_pmprkd38T01wnafjio1_1280.jpg" />
                                </div>
                            </div>
                            {{-- Product Details Area --}}
                            <div class="row my-4">
                                <div class="col-lg-6">
                                    <table class="table table-responsive text-one">
                                        <tbody>
                                            <tr style="background-color: #f7f7f7;">
                                                <td>Established</td>
                                                <td class="text-end"><span href="#" class="why-needed"
                                                        data-toggle="tooltip" title="1-5 year(s)">1-5 year(s)</span></td>
                                            </tr>
                                            <tr style="background-color: #f7f7f7;">
                                                <td>Employees</td>
                                                <td class="text-end"><span href="#" class="why-needed"
                                                        data-toggle="tooltip" title="10-50">10-50</span></td>
                                                </td>
                                            </tr>
                                            <tr style="background-color: #f7f7f7;">
                                                <td>Legal Entity</td>
                                                <td class="text-end"><span href="#" class="why-needed"
                                                        data-toggle="tooltip" title="Public Limited Company">Public
                                                        Limited
                                                        Company</span></td>
                                            </tr>
                                            <tr style="background-color: #f7f7f7;">
                                                <td>Reported Sales <i class="fa-solid fa-circle-info border"
                                                        data-toggle="tooltip" title="Reported Sales"></i></td>
                                                <td class="text-end"><span href="#" class="why-needed"
                                                        data-toggle="tooltip" title="BDT 18 crore">BDT 18 crore</span>
                                                </td>
                                            </tr>
                                            {{-- Duplicate --}}
                                            <tr style="background-color: #f7f7f7;">
                                                <td>Established</td>
                                                <td class="text-end"> <span href="#" class="why-needed"
                                                        data-toggle="tooltip" title="1-5 year(s)">1-5 year(s)</span></td>
                                            </tr>
                                            <tr style="background-color: #f7f7f7;">
                                                <td>Employees</td>
                                                <td class="text-end"><span href="#" class="why-needed"
                                                        data-toggle="tooltip" title="10-50">10-50</span></td>
                                                </td>
                                            </tr>
                                            <tr style="background-color: #f7f7f7;">
                                                <td>Legal Entity</td>
                                                <td class="text-end"><span href="#" class="why-needed"
                                                        data-toggle="tooltip" title="Public Limited Company">Public
                                                        Limited
                                                        Company</span></td>
                                            </tr>
                                            <tr style="background-color: #f7f7f7;">
                                                <td>Reported Sales <i class="fa-solid fa-circle-info border"
                                                        data-toggle="tooltip" title="Reported Sales"></i></td>
                                                <td class="text-end"><span href="#" class="why-needed"
                                                        data-toggle="tooltip" title="BDT 18 crore">BDT 18 crore</span>
                                                </td>
                                            </tr>
                                            {{-- Duplicate --}}
                                            <tr style="background-color: #f7f7f7;">
                                                <td>Established</td>
                                                <td class="text-end"> <span href="#" class="why-needed"
                                                        data-toggle="tooltip" title="1-5 year(s)">1-5 year(s)</span></td>
                                            </tr>
                                            <tr style="background-color: #f7f7f7;">
                                                <td>Employees</td>
                                                <td class="text-end"><span href="#" class="why-needed"
                                                        data-toggle="tooltip" title="10-50">10-50</span></td>
                                                </td>
                                            </tr>
                                            <tr style="background-color: #f7f7f7;">
                                                <td>Legal Entity</td>
                                                <td class="text-end"><span href="#" class="why-needed"
                                                        data-toggle="tooltip" title="Public Limited Company">Public
                                                        Limited Company</span></td>
                                            </tr>
                                            <tr style="background-color: #f7f7f7;">
                                                <td>Reported Sales <i class="fa-solid fa-circle-info border"
                                                        data-toggle="tooltip" title="Reported Sales"></i></td>
                                                <td class="text-end"><span href="#" class="why-needed"
                                                        data-toggle="tooltip" title="BDT 18 crore">BDT 18 crore</span>
                                                </td>
                                            </tr>
                                            <tr style="background-color: #f7f7f7;">
                                                <td>Reported Sales <i class="fa-solid fa-circle-info border"
                                                        data-toggle="tooltip" title="Reported Sales"></i></td>
                                                <td class="text-end"><span href="#" class="why-needed"
                                                        data-toggle="tooltip" title="BDT 18 crore">BDT 18 crore</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-lg-6">
                                    <h5 class="fw-bold">Overall Rating</h5>
                                    <div class="row my-2">
                                        <div class="col-lg-12 d-flex align-items-center">
                                            <div>
                                                <i class="fa-solid fa-star text-warning" style="font-size: 25px;"></i>
                                            </div>
                                            <div class="ms-2">
                                                <span class="rating-number">8.1/10</span> <br>
                                                <a class="view-metrics text-so-small" href="#">Compare with
                                                    industry</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 d-flex align-items-center text-one">
                                            <div class="">
                                                <div>
                                                    <h6 class="text-black pt-1"> Seeking Investment</h6>
                                                </div>
                                                <div class="text-so-small pt-1">
                                                    <span class="currency-label">BDT</span>
                                                    <span class="text-info text-one fw-bold"> 22 crore </span>
                                                    for 50.0% stake
                                                    <span>
                                                        <span style="font-size:10px;">(Native
                                                            Currency: <span itemprop="priceCurrency">GBP</span> <span
                                                                itemprop="price"
                                                                content="1600000.0">1,600,000</span>)</span>
                                                    </span>
                                                </div>
                                                <div class="pt-2" data-original-title="" title="">
                                                    Reason: <span class="reason">Need funds to acquire, together the
                                                        nursing
                                                        home.<br>
                                                        <p class="pt-2 m-0">The current owners are retiring.</p>
                                                    </span>
                                                </div>
                                                <div class="py-1 pt-2">
                                                    <i class="fa-solid fa-circle-check text-success"></i> <span>Includes
                                                        physical assets
                                                        worth</span> <span> BDT</span> <span class="site-text fw-bold">12
                                                        crore</span>
                                                </div>
                                                <div class="py-1">
                                                    <i class="fa-solid fa-circle-check text-success"></i> <span>Includes
                                                        physical assets
                                                        worth</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 d-flex align-items-center text-one">
                                            <div class="">
                                                <div>
                                                    <h6 class="text-black pt-2">Name, Phone, Email</h6>
                                                </div>
                                                <div class="py-1 pt-2">
                                                    <i class="fa-solid fa-clock text-muted"></i> <span>Available after
                                                        connect</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 d-flex align-items-center text-one">
                                            <div class="">
                                                <div>
                                                    <h6 class="text-black pt-1">Business Name</h6>
                                                </div>
                                                <div class="py-1 pt-2">
                                                    <i class="fa-solid fa-clock text-muted"></i> <span>Available after
                                                        connect</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 d-flex align-items-center text-one">
                                            <div>
                                                <div>
                                                    <h6 class="text-black pt-2">User Verification</h6>
                                                </div>
                                                <div class="py-1 pt-2 text-so-small d-flex align-items-center">
                                                    <div data-toggle="tooltip" title="Your Email">
                                                        <i class="fa-solid fa-envelope text-primary"></i>
                                                        <span>Email</span>
                                                    </div>
                                                    <div class="ms-2" data-toggle="tooltip" title="Your Phone">
                                                        <i class="fa-solid fa-phone text-success"></i> <span>Phone</span>
                                                    </div>
                                                    <div class="ms-2" data-toggle="tooltip" title="Your Google">
                                                        <i class="fa-brands fa-google text-danger"></i> <span>Google</span>
                                                    </div>
                                                    <div class="ms-2" data-toggle="tooltip" title="Your LinkedIn">
                                                        <i class="fa-brands fa-linkedin text-muted"></i>
                                                        <span>LinkedIn</span>
                                                    </div>
                                                    <div class="ms-2" data-toggle="tooltip" title="Your Facebook">
                                                        <i class="fa-brands fa-facebook-f text-muted"></i>
                                                        <span>Facebook</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h5> Documents</h5>
                                    <div class="row d-flex align-items-center py-2">
                                        <div class="document-icon col-sm-1">
                                            <img width: 20px; height: 20px;
                                                alt="Registration Certificate of the Nursing Home"
                                                src="https://www.smergers.com/static/images/icons/xpdf.png.pagespeed.ic.nrhSr-H3YN.webp">
                                        </div>
                                        <div class="document-link col-sm-11">
                                            <a class="no-access-popover" href="#"
                                                data-content="Available only after you connect with this business"
                                                rel="noopener" data-original-title="" title=""><i
                                                    class="icon-lock"></i> Registration Certificate of the Nursing Home</a>
                                            <span class="document-size">(193.6&nbsp;KB)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 pt-3">
                                    <h5>Business Overview</h5>
                                    <p>- We own a healthcare business and are looking to buy a nursing home. The details
                                        mentioned are of the nursing home only as the stake will be given in the nursing
                                        home business.</p>
                                    <p>- The nursing home business is growing between 27-30% yearly in terms of revenue.</p>
                                    <p>- Have been rated good with ‘Care In Wales’</p>
                                    <p>- High staff satisfaction rate.</p>
                                </div>
                                <div class="col-lg-12 pt-3">
                                    <h5>Products & Services Overview</h5>
                                    <p>The service provided is for all elderly frail and dementia care in a residential
                                        setting. It currently has a long waitlist as it is popular.</p>
                                </div>
                                <div class="col-lg-12 pt-3">
                                    <h5>Assets Overview</h5>
                                    <p>Fully furnished and equipped 40-bed unit all en-suite + minibus + website.</p>
                                </div>
                            </div>
                        </div>
                        {{-- {Product Details Footer Card End} --}}
                        <div class="card-footer">
                            <i class="text-so-small"><strong>Disclaimer:</strong> Ngen It is a regulated marketplace for
                                connecting
                                business sell sides with
                                investors, buyers, lenders and advisors. Neither Ngen It represents nor guarantees that the
                                information mentioned above is complete or correct. Note that Ngen It is not liable for any
                                loss, damage, costs, claims and expenses whatsoever arising from transacting with any other
                                user from the website. The final responsibility of conducting a thorough due diligence and
                                taking the transaction forward lies with the users. Please read best practices on <a
                                    href="" class="fw-bold site-text">Ngen It</a>.</i>
                        </div>
                    </div>
                </div>
                {{-- Sidebar Area --}}
                <div class="col-lg-4">
                    <div class="card border-0 rounded-0" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                        <div class="card-body p-3" style="padding-bottom: 0px !important;">
                            <div class="contact-form-heading">
                                Contact Business
                                <span class="contact-form-subheading">(One Time Registration)</span>
                                <p style="color: #999; font-size: 13px; text-align: left;">
                                    <img src="https://www.smergers.com/static/images/Nx40xgrowth.png.pagespeed.ic.NqvBrgxLBE.webp"
                                        alt="" height="40" style="float: left; padding: 5px 10px 5px 0;">

                                    <span class="text-so-small text-success">
                                        1 Investor contacted this Business this week.
                                    </span><br>
                                    <span class="text-muted text-so-small">Click below to connect now!</span>
                                </p>
                                <form action="" method="post">
                                    <div class="cotainer">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <span class="text-one">Fill your details below to contact this
                                                    business</span>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row align-row mb-2">
                                            <div class="col-lg-5">
                                                <label class="text-one" for="full-name">Full Name</label>
                                            </div>
                                            <div class="col-lg-7">
                                                <input type="text" name="contact_person" value="DEV - 3 NGEN IT"
                                                    maxlength="100" class="form-control form-control-sm rounded-0"
                                                    required id="id_contact_person">
                                                <div class="info-text text-so-small">Hi DEV, welcome to Ngen It</div>
                                            </div>
                                        </div>
                                        <div class="row align-row mb-2">
                                            <div class="col-lg-5">
                                                <label class="text-one" for="full-name">Your Mobile Number</label>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="row gx-0">
                                                    <div class="col-sm-4">
                                                        <select name="type" data-sm-placeholder="check"
                                                            style="border-radius: 0px"
                                                            class="select2 select2-search-box form-select form-select-sm rounded-0">
                                                            <option value="" disabled selected hidden>+880</option>
                                                            <option value="AL">+901</option>
                                                            <option value="AK">+601</option>
                                                            <option value="AZ">+801</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="contact_person"
                                                            value="DEV - 3 NGEN IT" maxlength="100"
                                                            class="form-control form-control-sm rounded-0" required
                                                            id="id_contact_person">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-row mb-2">
                                            <div class="col-lg-5">
                                                <label class="text-one" for="full-name">You are a(n)</label>
                                            </div>
                                            <div class="col-lg-7">
                                                <select name="type" data-sm-placeholder="check"
                                                    style="border-radius: 0px"
                                                    class="select2 select2-search-box form-select form-select-sm rounded-0">
                                                    <option value="" disabled selected hidden></option>
                                                    <option value="AL">+901</option>
                                                    <option value="AK">+601</option>
                                                    <option value="AZ">+801</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row align-row mb-2">
                                            <div class="col-lg-5">
                                                <label class="text-one" for="full-name">Company You Work At <span
                                                        href="#" class="why-needed" data-toggle="tooltip"
                                                        title="This is button.">Why is this needed?</span></label>
                                            </div>
                                            <div class="col-lg-7">
                                                <input type="text" name="contact_person" value="DEV - 3 NGEN IT"
                                                    maxlength="100" class="form-control form-control-sm rounded-0"
                                                    required id="id_contact_person">
                                            </div>
                                        </div>
                                        <div class="row align-row mb-2">
                                            <div class="col-lg-5">
                                                <label class="text-one" for="full-name">Designation</label>
                                            </div>
                                            <div class="col-lg-7">
                                                <input type="text" name="designation" value="DEV - 3 NGEN IT"
                                                    maxlength="100" class="form-control form-control-sm rounded-0"
                                                    required id="id_contact_person">
                                            </div>
                                        </div>
                                        <div class="row align-row mb-2">
                                            <label class="text-one" for="full-name" class="text-one">Introduce yourself
                                                and leave a message to this business</label>
                                            <div class="m-1 ps-0">
                                                <textarea class="form-control form-controle-sm rounded-0" name="" id="" cols="3"
                                                    rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="row align-row mb-2">
                                            <div class="col-lg-12">
                                                <input type="checkbox" name="accept" required="" id="id_accept">
                                                <span> I accept the <a href="">Terms of Engagement </a></span>
                                            </div>
                                        </div>
                                        <div class="row align-row mb-2">
                                            <div class="col-lg-12 py-2">
                                                <a class="form-submit-button btn btn-site-1 w-100" data-pageno="1"
                                                    href="#">Continue</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="clearfix">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-0 mt-2">
                        <div class="col-lg-12">
                            <div class="d-flex align-items-center justify-content-around">
                                <a href="#" class="text-center footer-buttons-profile p-2">
                                    <i class="fa-solid fa-bookmark"></i>
                                    <span class="bookmark-text">Bookmark</span>
                                </a>
                                <a class="text-center footer-buttons-profile p-2" href="#">
                                    <i class="fa-solid fa-share-nodes"></i> Share
                                </a>
                                <a class="text-center footer-buttons-profile p-2" target="_blank" href="">
                                    <i class="fa-solid fa-download"></i> Download
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="my-5 mt-0">
        <div class="container">
            <div class="row py-3">
                <div class="col-lg-12">
                    <span>You might also be interested in these businesses</span>
                </div>
            </div>
            <div class="swiper-wrapper">
                <!-- Slider main container -->
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide p-0" style="padding:5px; background-color: transparent;">
                            <a href="">
                                <div class="listing-premium-banner" data-plan="PREMIUM"></div>
                                <div class="p-2"
                                    style="border: 1px solid #eee;box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                                    {{-- Image With Title --}}
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <a href="" class="text-one">Medical Equipment Wholesale Company
                                                Investment Opportunity in
                                                Bucharest,</a>
                                            <p class="text-one my-2">Importer and wholesaler of medical equipment from
                                                several
                                                international
                                                manufacturers is seeking a partner. The business imports and sells medical
                                            </p>
                                        </div>
                                    </div>
                                    {{-- Rating Area --}}
                                    <div class="row py-2">
                                        <div class="col-sm-12 d-flex align-items-center" style="font-size: 10px;">
                                            <div><i class="fa-solid fa-star text-warning me-1"></i>5.9</div>
                                            <div><i class="text-danger fa-solid fa-location-dot ms-1 me-1"></i>Bangladesh
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Location Area Start --}}
                                    <div class="row bg-light gx-2">
                                        <div class="col-sm-6 text-start">
                                            <span style="font-size: 10px;">Run Rate Sales</span>
                                        </div>
                                        <div class="col-sm-6 text-end">
                                            <div data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Bangladesh, Afganistan, Pakistan">
                                                <i class="icon-map-marker"></i>
                                                <span style="font-size: 10px;">BDT <strong>120</strong> crore</span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="my-0">
                                    {{-- Location 2 Area Start --}}
                                    <div class="row bg-light gx-2 mb-3">
                                        <div class="col-sm-6 text-start">
                                            <span style="font-size: 10px;">EBITDA Margin</span>
                                        </div>
                                        <div class="col-sm-6 text-end">
                                            <div data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Bangladesh, Afganistan, Pakistan">
                                                <i class="icon-map-marker"></i>
                                                <span style="font-size: 10px;">35%</span>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Price Info And Go --}}
                                    <div class="row gx-0 d-flex align-items-center">
                                        <div class="col-sm-6 ">
                                            <div class="sme-v3-smalltext site-text" class="why-needed"
                                                data-toggle="tooltip" title="1-5 year(s)">Business for Sale </div>
                                            <div class="sme-v3-bolder" style="font-size:1.2em;">
                                                <small class="text-so-small">BDT </small>70 Cr
                                            </div>
                                        </div>
                                        <div class="col-sm-6 text-end px-0" style="border-left:1px solid #ddd;">
                                            <div>
                                                <a href="#" class="rounded-0 btn btn-sm btn-primary border-0"
                                                    style="background-color: var(--button-bg-color);">
                                                    Contact Business
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </a>
                        </div>
                        <!-- Slides -->
                        <div class="swiper-slide p-0">
                            <a href="">
                                <div class="listing-premium-banner" data-plan="PREMIUM"></div>
                                <div class="p-2"
                                    style="border: 1px solid #eee;box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                                    {{-- Image With Title --}}
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <a href="" class="text-one">Medical Equipment Wholesale Company
                                                Investment Opportunity in
                                                Bucharest,</a>
                                            <p class="text-one my-2">Importer and wholesaler of medical equipment from
                                                several
                                                international
                                                manufacturers is seeking a partner. The business imports and sells medical
                                            </p>
                                        </div>
                                    </div>
                                    {{-- Rating Area --}}
                                    <div class="row py-2">
                                        <div class="col-sm-12 d-flex align-items-center" style="font-size: 10px;">
                                            <div><i class="fa-solid fa-star text-warning me-1"></i>5.9</div>
                                            <div><i class="text-danger fa-solid fa-location-dot ms-1 me-1"></i>Bangladesh
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Location Area Start --}}
                                    <div class="row bg-light gx-2">
                                        <div class="col-sm-6 text-start">
                                            <span style="font-size: 10px;" class="why-needed" data-toggle="tooltip"
                                                title="Run Rate Sales">Run Rate Sales</span>
                                        </div>
                                        <div class="col-sm-6 text-end">
                                            <div data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Bangladesh, Afganistan, Pakistan">
                                                <i class="icon-map-marker"></i>
                                                <span style="font-size: 10px;">BDT <strong>120</strong> crore</span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="my-0">
                                    {{-- Location 2 Area Start --}}
                                    <div class="row bg-light gx-2 mb-3">
                                        <div class="col-sm-6 text-start">
                                            <span style="font-size: 10px;" class="why-needed" data-toggle="tooltip"
                                                title="EBITDA Margin">EBITDA Margin</span>
                                        </div>
                                        <div class="col-sm-6 text-end">
                                            <div data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Bangladesh, Afganistan, Pakistan">
                                                <i class="icon-map-marker"></i>
                                                <span style="font-size: 10px;">0%-35%</span>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Price Info And Go --}}
                                    <div class="row gx-0 d-flex align-items-center">
                                        <div class="col-sm-6 ">
                                            <div class="sme-v3-smalltext site-text" class="why-needed"
                                                data-toggle="tooltip" title="1-5 year(s)">Business for Sale </div>
                                            <div class="sme-v3-bolder" style="font-size:1.2em;">
                                                <small class="text-so-small">BDT </small>70 Cr
                                            </div>
                                        </div>
                                        <div class="col-sm-6 text-end px-0" style="border-left:1px solid #ddd;">
                                            <div>
                                                <a href="#" class="rounded-0 btn btn-sm btn-primary border-0"
                                                    style="background-color: var(--button-bg-color);">
                                                    Contact Business
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </a>
                        </div>
                        <!-- Slides -->
                        <div class="swiper-slide p-0">
                            <a href="">
                                <div class="listing-premium-banner" data-plan="PREMIUM"></div>
                                <div class="p-2"
                                    style="border: 1px solid #eee;box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                                    {{-- Image With Title --}}
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <a href="" class="text-one">Medical Equipment Wholesale Company
                                                Investment Opportunity in
                                                Bucharest,</a>
                                            <p class="text-one my-2">Importer and wholesaler of medical equipment from
                                                several
                                                international
                                                manufacturers is seeking a partner. The business imports and sells medical
                                            </p>
                                        </div>
                                    </div>
                                    {{-- Rating Area --}}
                                    <div class="row py-2">
                                        <div class="col-sm-12 d-flex align-items-center" style="font-size: 10px;">
                                            <div><i class="fa-solid fa-star text-warning me-1"></i>5.9</div>
                                            <div><i class="text-danger fa-solid fa-location-dot ms-1 me-1"></i>Bangladesh
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Location Area Start --}}
                                    <div class="row bg-light gx-2">
                                        <div class="col-sm-6 text-start">
                                            <span style="font-size: 10px;">Run Rate Sales</span>
                                        </div>
                                        <div class="col-sm-6 text-end">
                                            <div data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Bangladesh, Afganistan, Pakistan">
                                                <i class="icon-map-marker"></i>
                                                <span style="font-size: 10px;">BDT <strong>120</strong> crore</span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="my-0">
                                    {{-- Location 2 Area Start --}}
                                    <div class="row bg-light gx-2 mb-3">
                                        <div class="col-sm-6 text-start">
                                            <span style="font-size: 10px;">EBITDA Margin</span>
                                        </div>
                                        <div class="col-sm-6 text-end">
                                            <div data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Bangladesh, Afganistan, Pakistan">
                                                <i class="icon-map-marker"></i>
                                                <span style="font-size: 10px;">35%</span>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Price Info And Go --}}
                                    <div class="row gx-0 d-flex align-items-center">
                                        <div class="col-sm-6 ">
                                            <div class="sme-v3-smalltext site-text" class="why-needed"
                                                data-toggle="tooltip" title="1-5 year(s)">Business for Sale </div>
                                            <div class="sme-v3-bolder" style="font-size:1.2em;">
                                                <small class="text-so-small">BDT </small>70 Cr
                                            </div>
                                        </div>
                                        <div class="col-sm-6 text-end px-0" style="border-left:1px solid #ddd;">
                                            <div>
                                                <a href="#" class="rounded-0 btn btn-sm btn-primary border-0"
                                                    style="background-color: var(--button-bg-color);">
                                                    Contact Business
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </a>
                        </div>
                        <!-- Slides -->
                        <div class="swiper-slide p-0">
                            <a href="">
                                <div class="listing-premium-banner" data-plan="PREMIUM"></div>
                                <div class="p-2"
                                    style="border: 1px solid #eee;box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                                    {{-- Image With Title --}}
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <a href="" class="text-one">Medical Equipment Wholesale Company
                                                Investment Opportunity in
                                                Bucharest,</a>
                                            <p class="text-one my-2">Importer and wholesaler of medical equipment from
                                                several
                                                international
                                                manufacturers is seeking a partner. The business imports and sells medical
                                            </p>
                                        </div>
                                    </div>
                                    {{-- Rating Area --}}
                                    <div class="row py-2">
                                        <div class="col-sm-12 d-flex align-items-center" style="font-size: 10px;">
                                            <div><i class="fa-solid fa-star text-warning me-1"></i>5.9</div>
                                            <div><i class="text-danger fa-solid fa-location-dot ms-1 me-1"></i>Bangladesh
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Location Area Start --}}
                                    <div class="row bg-light gx-2">
                                        <div class="col-sm-6 text-start">
                                            <span style="font-size: 10px;">Run Rate Sales</span>
                                        </div>
                                        <div class="col-sm-6 text-end">
                                            <div data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Bangladesh, Afganistan, Pakistan">
                                                <i class="icon-map-marker"></i>
                                                <span style="font-size: 10px;">BDT <strong>120</strong> crore</span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="my-0">
                                    {{-- Location 2 Area Start --}}
                                    <div class="row bg-light gx-2 mb-3">
                                        <div class="col-sm-6 text-start">
                                            <span style="font-size: 10px;">EBITDA Margin</span>
                                        </div>
                                        <div class="col-sm-6 text-end">
                                            <div data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Bangladesh, Afganistan, Pakistan">
                                                <i class="icon-map-marker"></i>
                                                <span style="font-size: 10px;">35%</span>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Price Info And Go --}}
                                    <div class="row gx-0 d-flex align-items-center">
                                        <div class="col-sm-6 ">
                                            <div class="sme-v3-smalltext site-text" class="why-needed"
                                                data-toggle="tooltip" title="1-5 year(s)">Business for Sale </div>
                                            <div class="sme-v3-bolder" style="font-size:1.2em;">
                                                <small class="text-so-small">BDT </small>70 Cr
                                            </div>
                                        </div>
                                        <div class="col-sm-6 text-end px-0" style="border-left:1px solid #ddd;">
                                            <div>
                                                <a href="#" class="rounded-0 btn btn-sm btn-primary border-0"
                                                    style="background-color: var(--button-bg-color);">
                                                    Contact Business
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </a>
                        </div>
                        <!-- Slides -->
                        <div class="swiper-slide p-0">
                            <a href="">
                                <div class="listing-premium-banner" data-plan="PREMIUM"></div>
                                <div class="p-2"
                                    style="border: 1px solid #eee;box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                                    {{-- Image With Title --}}
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <a href="" class="text-one">Medical Equipment Wholesale Company
                                                Investment Opportunity in
                                                Bucharest,</a>
                                            <p class="text-one my-2">Importer and wholesaler of medical equipment from
                                                several
                                                international
                                                manufacturers is seeking a partner. The business imports and sells medical
                                            </p>
                                        </div>
                                    </div>
                                    {{-- Rating Area --}}
                                    <div class="row py-2">
                                        <div class="col-sm-12 d-flex align-items-center" style="font-size: 10px;">
                                            <div><i class="fa-solid fa-star text-warning me-1"></i>5.9</div>
                                            <div><i class="text-danger fa-solid fa-location-dot ms-1 me-1"></i>Bangladesh
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Location Area Start --}}
                                    <div class="row bg-light gx-2">
                                        <div class="col-sm-6 text-start">
                                            <span style="font-size: 10px;">Run Rate Sales</span>
                                        </div>
                                        <div class="col-sm-6 text-end">
                                            <div data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Bangladesh, Afganistan, Pakistan">
                                                <i class="icon-map-marker"></i>
                                                <span style="font-size: 10px;">BDT <strong>120</strong> crore</span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="my-0">
                                    {{-- Location 2 Area Start --}}
                                    <div class="row bg-light gx-2 mb-3">
                                        <div class="col-sm-6 text-start">
                                            <span style="font-size: 10px;">EBITDA Margin</span>
                                        </div>
                                        <div class="col-sm-6 text-end">
                                            <div data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Bangladesh, Afganistan, Pakistan">
                                                <i class="icon-map-marker"></i>
                                                <span style="font-size: 10px;">35%</span>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Price Info And Go --}}
                                    <div class="row gx-0 d-flex align-items-center">
                                        <div class="col-sm-6 ">
                                            <div class="sme-v3-smalltext site-text" class="why-needed"
                                                data-toggle="tooltip" title="1-5 year(s)">Business for Sale </div>
                                            <div class="sme-v3-bolder" style="font-size:1.2em;">
                                                <small class="text-so-small">BDT </small>70 Cr
                                            </div>
                                        </div>
                                        <div class="col-sm-6 text-end px-0" style="border-left:1px solid #ddd;">
                                            <div>
                                                <a href="#" class="rounded-0 btn btn-sm btn-primary border-0"
                                                    style="background-color: var(--button-bg-color);">
                                                    Contact Business
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </a>
                        </div>
                        <!-- Slides -->
                        <div class="swiper-slide p-0">
                            <a href="">
                                <div class="listing-premium-banner" data-plan="PREMIUM"></div>
                                <div class="p-2"
                                    style="border: 1px solid #eee;box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                                    {{-- Image With Title --}}
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <a href="" class="text-one">Medical Equipment Wholesale Company
                                                Investment Opportunity in
                                                Bucharest,</a>
                                            <p class="text-one my-2">Importer and wholesaler of medical equipment from
                                                several
                                                international
                                                manufacturers is seeking a partner. The business imports and sells medical
                                            </p>
                                        </div>
                                    </div>
                                    {{-- Rating Area --}}
                                    <div class="row py-2">
                                        <div class="col-sm-12 d-flex align-items-center" style="font-size: 10px;">
                                            <div><i class="fa-solid fa-star text-warning me-1"></i>5.9</div>
                                            <div><i class="text-danger fa-solid fa-location-dot ms-1 me-1"></i>Bangladesh
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Location Area Start --}}
                                    <div class="row bg-light gx-2">
                                        <div class="col-sm-6 text-start">
                                            <span style="font-size: 10px;">Run Rate Sales</span>
                                        </div>
                                        <div class="col-sm-6 text-end">
                                            <div data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Bangladesh, Afganistan, Pakistan">
                                                <i class="icon-map-marker"></i>
                                                <span style="font-size: 10px;">BDT <strong>120</strong> crore</span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="my-0">
                                    {{-- Location 2 Area Start --}}
                                    <div class="row bg-light gx-2 mb-3">
                                        <div class="col-sm-6 text-start">
                                            <span style="font-size: 10px;">EBITDA Margin</span>
                                        </div>
                                        <div class="col-sm-6 text-end">
                                            <div data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Bangladesh, Afganistan, Pakistan">
                                                <i class="icon-map-marker"></i>
                                                <span style="font-size: 10px;">35%</span>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Price Info And Go --}}
                                    <div class="row gx-0 d-flex align-items-center">
                                        <div class="col-sm-6 ">
                                            <div class="sme-v3-smalltext site-text" class="why-needed"
                                                data-toggle="tooltip" title="1-5 year(s)">Business for Sale </div>
                                            <div class="sme-v3-bolder" style="font-size:1.2em;">
                                                <small class="text-so-small">BDT </small>70 Cr
                                            </div>
                                        </div>
                                        <div class="col-sm-6 text-end px-0" style="border-left:1px solid #ddd;">
                                            <div>
                                                <a href="#" class="rounded-0 btn btn-sm btn-primary border-0"
                                                    style="background-color: var(--button-bg-color);">
                                                    Contact Business
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </a>
                        </div>
                        <!-- Slides -->
                        <div class="swiper-slide p-0">
                            <a href="">
                                <div class="listing-premium-banner" data-plan="PREMIUM"></div>
                                <div class="p-2"
                                    style="border: 1px solid #eee;box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                                    {{-- Image With Title --}}
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <a href="" class="text-one">Medical Equipment Wholesale Company
                                                Investment Opportunity in
                                                Bucharest,</a>
                                            <p class="text-one my-2">Importer and wholesaler of medical equipment from
                                                several
                                                international
                                                manufacturers is seeking a partner. The business imports and sells medical
                                            </p>
                                        </div>
                                    </div>
                                    {{-- Rating Area --}}
                                    <div class="row py-2">
                                        <div class="col-sm-12 d-flex align-items-center" style="font-size: 10px;">
                                            <div><i class="fa-solid fa-star text-warning me-1"></i>5.9</div>
                                            <div><i class="text-danger fa-solid fa-location-dot ms-1 me-1"></i>Bangladesh
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Location Area Start --}}
                                    <div class="row bg-light gx-2">
                                        <div class="col-sm-6 text-start">
                                            <span style="font-size: 10px;">Run Rate Sales</span>
                                        </div>
                                        <div class="col-sm-6 text-end">
                                            <div data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Bangladesh, Afganistan, Pakistan">
                                                <i class="icon-map-marker"></i>
                                                <span style="font-size: 10px;">BDT <strong>120</strong> crore</span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="my-0">
                                    {{-- Location 2 Area Start --}}
                                    <div class="row bg-light gx-2 mb-3">
                                        <div class="col-sm-6 text-start">
                                            <span style="font-size: 10px;">EBITDA Margin</span>
                                        </div>
                                        <div class="col-sm-6 text-end">
                                            <div data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Bangladesh, Afganistan, Pakistan">
                                                <i class="icon-map-marker"></i>
                                                <span style="font-size: 10px;">35%</span>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Price Info And Go --}}
                                    <div class="row gx-0 d-flex align-items-center">
                                        <div class="col-sm-6 ">
                                            <div class="sme-v3-smalltext site-text" class="why-needed"
                                                data-toggle="tooltip" title="1-5 year(s)">Business for Sale </div>
                                            <div class="sme-v3-bolder" style="font-size:1.2em;">
                                                <small class="text-so-small">BDT </small>70 Cr
                                            </div>
                                        </div>
                                        <div class="col-sm-6 text-end px-0" style="border-left:1px solid #ddd;">
                                            <div>
                                                <a href="#" class="rounded-0 btn btn-sm btn-primary border-0"
                                                    style="background-color: var(--button-bg-color);">
                                                    Contact Business
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </a>
                        </div>
                        <!-- Slides -->
                        <div class="swiper-slide p-0">
                            <a href="">
                                <div class="listing-premium-banner" data-plan="PREMIUM"></div>
                                <div class="p-2"
                                    style="border: 1px solid #eee;box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                                    {{-- Image With Title --}}
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <a href="" class="text-one">Medical Equipment Wholesale Company
                                                Investment Opportunity in
                                                Bucharest,</a>
                                            <p class="text-one my-2">Importer and wholesaler of medical equipment from
                                                several
                                                international
                                                manufacturers is seeking a partner. The business imports and sells medical
                                            </p>
                                        </div>
                                    </div>
                                    {{-- Rating Area --}}
                                    <div class="row py-2">
                                        <div class="col-sm-12 d-flex align-items-center" style="font-size: 10px;">
                                            <div><i class="fa-solid fa-star text-warning me-1"></i>5.9</div>
                                            <div><i class="text-danger fa-solid fa-location-dot ms-1 me-1"></i>Bangladesh
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Location Area Start --}}
                                    <div class="row bg-light gx-2">
                                        <div class="col-sm-6 text-start">
                                            <span style="font-size: 10px;">Run Rate Sales</span>
                                        </div>
                                        <div class="col-sm-6 text-end">
                                            <div data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Bangladesh, Afganistan, Pakistan">
                                                <i class="icon-map-marker"></i>
                                                <span style="font-size: 10px;">BDT <strong>120</strong> crore</span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="my-0">
                                    {{-- Location 2 Area Start --}}
                                    <div class="row bg-light gx-2 mb-3">
                                        <div class="col-sm-6 text-start">
                                            <span style="font-size: 10px;">EBITDA Margin</span>
                                        </div>
                                        <div class="col-sm-6 text-end">
                                            <div data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Bangladesh, Afganistan, Pakistan">
                                                <i class="icon-map-marker"></i>
                                                <span style="font-size: 10px;">35%</span>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Price Info And Go --}}
                                    <div class="row gx-0 d-flex align-items-center">
                                        <div class="col-sm-6 ">
                                            <div class="sme-v3-smalltext site-text" class="why-needed"
                                                data-toggle="tooltip" title="1-5 year(s)">Business for Sale </div>
                                            <div class="sme-v3-bolder" style="font-size:1.2em;">
                                                <small class="text-so-small">BDT </small>70 Cr
                                            </div>
                                        </div>
                                        <div class="col-sm-6 text-end px-0" style="border-left:1px solid #ddd;">
                                            <div>
                                                <a href="#" class="rounded-0 btn btn-sm btn-primary border-0"
                                                    style="background-color: var(--button-bg-color);">
                                                    Contact Business
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- If we need pagination -->
                    {{-- <div class="swiper-pagination"></div>  --}}
                </div>
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 4,
            spaceBetween: 1,
            freeMode: true,
            loop: true,
            autoplay: {
                delay: 3000,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: false,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
    <script>
        // Image Enlarger / Lightbox (by iNet / IEVEVO)
        // Licenced under MIT Open Source

        // Enlarges images on click


        var gallery_info = {
                imgs: [],
                currentIndex: 0
            },
            gallery_counter, gallery_buttons;


        function id(id) {
            return document.getElementById(id);
        }


        function displayImg(src) {
            // actually displays the image
            id("enlarged-image").src = src;


            // update counter if applicable
            if (gallery_info.imgs.length > 1) {
                // set the counter
                gallery_counter.innerHTML = (parseInt(gallery_info.currentIndex) + 1) + "/" + gallery_info.imgs.length;

                // show buttons
                for (var i = 0; i < gallery_buttons.length; i++) {
                    gallery_buttons[i].classList.remove("hidden");
                }
            } else {
                // hide buttons if theres only 1 image
                for (var i = 0; i < gallery_buttons.length; i++) {
                    gallery_buttons[i].classList.add("hidden");
                }
            }

        }


        function enlargeImg(srcImg) {

            // store metadata
            if (srcImg.getAttribute("data-gallery-index") != null) {
                // if it's a gallery with multiple linked images
                var allImgs = srcImg.parentNode.getElementsByTagName("img");

                gallery_info.currentIndex = srcImg.getAttribute("data-gallery-index");
                gallery_info.imgs = allImgs;
            } else {
                // if it's a single image
                gallery_info.currentIndex = 0;
                gallery_info.imgs = [srcImg];
            }


            // Actually enlarge the image
            var large_src = srcImg.src;

            // if an alternate SRC is supplied, use this instead
            if (srcImg.getAttribute("data-large-src") != null) {
                large_src = srcImg.getAttribute("data-large-src");
            }

            displayImg(large_src);
            id("enlarged-image").parentNode.classList.add("open");
        }


        function unenlargeImg() {
            // Close
            id("enlarged-image").parentNode.classList.remove("open");

            gallery_counter.innerHTML = "1/1";
        }


        function nextImage() {
            // Loads the next image in line
            var src = "";


            // change index
            if (gallery_info.currentIndex + 1 >= gallery_info.imgs.length) {
                // if at the end of the queue
                gallery_info.currentIndex = 0;
            } else {
                // if not at end of queue
                gallery_info.currentIndex = parseInt(gallery_info.currentIndex) + 1;
            }


            // if alt SRC supplied, use this
            if (gallery_info.imgs[gallery_info.currentIndex].getAttribute("data-large-src") != null) {
                src = gallery_info.imgs[gallery_info.currentIndex].getAttribute("data-large-src");
            }
            // otherwise, use the src from the img tag
            else {
                src = gallery_info.imgs[gallery_info.currentIndex].src;
            }


            // display image
            displayImg(src);
        }


        function prevImage() {
            // Loads the next image in line
            var src = "";


            // change index
            if (gallery_info.currentIndex <= 0) {
                // if at the end of the queue
                gallery_info.currentIndex = gallery_info.imgs.length - 1;
            } else {
                // if not at end of queue
                gallery_info.currentIndex = parseInt(gallery_info.currentIndex) - 1;
            }


            // if alt SRC supplied, use this
            if (gallery_info.imgs[gallery_info.currentIndex].getAttribute("data-large-src") != null) {
                src = gallery_info.imgs[gallery_info.currentIndex].getAttribute("data-large-src");
            }
            // otherwise, use the src from the img tag
            else {
                src = gallery_info.imgs[gallery_info.currentIndex].src;
            }


            // display image
            displayImg(src);
        }


        function initialise() {
            // Set up event listeners
            // In a separate function in case u need to call it after page load
            var galleries = document.getElementsByClassName("gallery");


            for (var x = 0; x < galleries.length; x++) {
                // for each gallery
                var gallery = galleries[x].children;

                for (var i = 0; i < gallery.length; i++) {
                    // for each image, add a click listener
                    if (gallery[i].src != "") {
                        let src = gallery[i].src;

                        gallery[i].onclick = function() {
                            enlargeImg(this);
                        }
                    }

                }
            }

        }


        window.addEventListener("load", function() {

            initialise();


            // Set up big img element
            var el = document.createElement("div"),
                prevBtn = document.createElement("div"),
                nextBtn = document.createElement("div"),
                counter = document.createElement("span");


            // image
            el.innerHTML = "<img class='img-enlarged' id='enlarged-image' />";
            el.classList.add("img-enlarged__cont");
            el.onclick = function() {
                unenlargeImg();
            }


            // prev / next buttons
            prevBtn.innerHTML = "<span></span>";
            prevBtn.classList.add("img-enlarged__nav");
            prevBtn.classList.add("prev");
            prevBtn.onclick = function(event) {
                event.stopPropagation();
                prevImage();
            }

            nextBtn.innerHTML = "<span></span>";
            nextBtn.classList.add("img-enlarged__nav");
            nextBtn.classList.add("next");
            nextBtn.onclick = function(event) {
                event.stopPropagation();
                nextImage();
            }


            // counter
            counter.innerHTML = "1/1";
            counter.classList.add("img-enlarged__counter");
            counter.classList.add("nosel");


            el.appendChild(prevBtn);
            el.appendChild(counter);
            el.appendChild(nextBtn);
            document.body.appendChild(el);

            gallery_counter = counter;
            gallery_buttons = [prevBtn, nextBtn];

        });
    </script>
@endpush
