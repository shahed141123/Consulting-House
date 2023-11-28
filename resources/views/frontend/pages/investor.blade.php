@extends('frontend.master')
@section('content')
    {{-- Banner Section --}}
    <section>
        <div class="section page-banner-section"
            style="background-image: url('https://assetmonk.com/wp-content/uploads/shutterstock_1886366440-min-1.jpg');">
            <div class="shape-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="944px" height="894px">
                    <defs>
                        <linearGradient id="PSgrad_0" x1="88.295%" x2="0%" y1="0%" y2="46.947%">
                            <stop offset="0%" stop-color="rgb(67,186,255)" stop-opacity="1"></stop>
                            <stop offset="100%" stop-color="rgb(113,65,177)" stop-opacity="1"></stop>
                        </linearGradient>

                    </defs>
                    <path fill-rule="evenodd" fill="rgb(43, 142, 254)"
                        d="M39.612,410.76 L467.344,29.824 C516.51,-13.476 590.638,-9.93 633.938,39.613 L914.192,317.344 C957.492,366.50 953.109,440.637 904.402,483.938 L476.671,864.191 C427.964,907.492 353.376,903.109 310.76,854.402 L29.823,576.670 C-13.477,527.963 -9.94,453.376 39.612,410.76 Z">
                    </path>
                    <path fill="url(#PSgrad_0)"
                        d="M39.612,410.76 L467.344,29.824 C516.51,-13.476 590.638,-9.93 633.938,39.613 L914.192,317.344 C957.492,366.50 953.109,440.637 904.402,483.938 L476.671,864.191 C427.964,907.492 353.376,903.109 310.76,854.402 L29.823,576.670 C-13.477,527.963 -9.94,453.376 39.612,410.76 Z">
                    </path>
                </svg>
            </div>
            <div class="shape-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="726.5px" height="726.5px">
                    <path fill-rule="evenodd" stroke="rgb(255, 255, 255)" stroke-width="1px" stroke-linecap="butt"
                        stroke-linejoin="miter" opacity="0.302" fill="none"
                        d="M28.14,285.269 L325.37,21.217 C358.860,-8.851 410.655,-5.808 440.723,28.14 L704.777,325.36 C734.846,358.859 731.802,410.654 697.979,440.722 L400.955,704.776 C367.132,734.844 315.338,731.802 285.269,697.978 L21.216,400.954 C-8.852,367.132 -5.808,315.337 28.14,285.269 Z">
                    </path>
                </svg>
            </div>
            <div class="shape-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="515px" height="515px">
                    <defs>
                        <linearGradient id="PSgrad_0" x1="0%" x2="89.879%" y1="0%" y2="43.837%">
                            <stop offset="0%" stop-color="rgb(67,186,255)" stop-opacity="1"></stop>
                            <stop offset="100%" stop-color="rgb(113,65,177)" stop-opacity="1"></stop>
                        </linearGradient>

                    </defs>
                    <path fill-rule="evenodd" fill="rgb(43, 142, 254)"
                        d="M19.529,202.280 L230.531,14.698 C254.559,-6.661 291.353,-4.498 312.714,19.528 L500.295,230.531 C521.656,254.558 519.493,291.353 495.466,312.713 L284.463,500.295 C260.436,521.655 223.641,519.492 202.281,495.465 L14.699,284.462 C-6.660,260.435 -4.498,223.640 19.529,202.280 Z">
                    </path>
                    <path fill="url(#PSgrad_0)"
                        d="M19.529,202.280 L230.531,14.698 C254.559,-6.661 291.353,-4.498 312.714,19.528 L500.295,230.531 C521.656,254.558 519.493,291.353 495.466,312.713 L284.463,500.295 C260.436,521.655 223.641,519.492 202.281,495.465 L14.699,284.462 C-6.660,260.435 -4.498,223.640 19.529,202.280 Z">
                    </path>
                </svg>
            </div>
            <div class="shape-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="972.5px" height="970.5px">
                    <path fill-rule="evenodd" stroke="rgb(255, 255, 255)" stroke-width="1px" stroke-linecap="butt"
                        stroke-linejoin="miter" fill="none"
                        d="M38.245,381.102 L435.258,28.158 C480.467,-12.32 549.697,-7.964 589.888,37.244 L942.832,434.257 C983.23,479.466 978.955,548.697 933.746,588.888 L536.733,941.832 C491.524,982.23 422.293,977.955 382.103,932.745 L29.158,535.732 C-11.32,490.523 -6.963,421.293 38.245,381.102 Z">
                    </path>
                </svg>
            </div>
            <div class="container">
                <div class="page-banner-wrap">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Page Banner Content Start -->
                            <div class="page-banner text-center">
                                <h2 class="title">Investor</h2>
                                <p class="text-white">All Investor Our Company</p>
                            </div>
                            <!-- Page Banner Content End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="scp-breadcrumb my-3">
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fa-solid fa-house-chimney"></i> Home</a></li>
                        <li><a href="#">Investor</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row py-3">
                <div class="col-lg-8">
                    <h5>Register Investor Profile</h5>
                    <form action="">
                        <div class="card mt-2 reagister-info shadow-md" style="border-top: 3px solid #186191;">
                            <div class="card-header bg-white">
                                <h6>Confidential Information</h6>
                                <p>Please enter your own details here. Information entered here is not publicly displayed.
                                </p>
                            </div>
                            <div class="card-body py-3">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-1">
                                            <div>
                                                <label for="name">Your Full Name</label>
                                                <input class="form-control form-control-sm" type="text" id="name"
                                                    name="name">
                                                <span>Hi DEV1, welcome to SMERGERS</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-1">
                                            <div>
                                                <label for="name">Enter official emai <i
                                                        style="border-bottom: 1px dashed #eee; font-size: 10px;"
                                                        data-toggle="tooltip" data-placement="top" data-trigger="hover"
                                                        title="Enter a valid official email address to ensure your profile is prioritized and verified faster. Please note that this email address is used only for verification purposes and all email communications will be sent only to your registered email address.">Why
                                                        is this need</i></label>
                                                <input class="form-control form-control-sm" type="text" id="name"
                                                    name="name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-1">
                                            <div>
                                                <label for="name">Mobile Number<i
                                                        style="border-bottom: 1px dashed #eee; font-size: 10px;"
                                                        data-toggle="tooltip" data-placement="top" data-trigger="hover"
                                                        title="Enter a valid official email address to ensure your profile is prioritized and verified faster. Please note that this email address is used only for verification purposes and all email communications will be sent only to your registered email address.">Why
                                                        is this need</i></label>
                                                <div class="row gx-0">
                                                    <div class="col-lg-1">
                                                        <select id="select-state" data-sm-placeholder="check"
                                                            class="select2 select3-search-box form-control form-control-sm custom-select">
                                                            <option value="" disabled selected hidden>+880</option>
                                                            <option value="AL">Alabama</option>
                                                            <option value="AK">Alaska</option>
                                                            <option value="AZ">Arizona</option>
                                                            <option value="AR">Arkansas</option>
                                                            <option value="CA">California</option>
                                                            <option value="CO">Colorado</option>
                                                            <option value="CT">Connecticut</option>
                                                            <option value="DE">Delaware</option>
                                                            <option value="DC">District of Columbia</option>
                                                            <option value="FL">Florida</option>
                                                            <option value="GA">Georgia</option>
                                                            <option value="HI">Hawaii</option>
                                                            <option value="ID">Idaho</option>
                                                            <option value="IL">Illinois</option>
                                                            <option value="IN">Indiana</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-11">
                                                        <input class="form-control form-control-sm" type="text"
                                                            id="name" name="name">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-4 reagister-info shadow-md" style="border-top: 3px solid #186191;">
                            <div class="card-header bg-white">
                                <h6>Your Requirements</h6>
                                <p>Information entered here will be publicly displayed to match you with the right set of
                                    businesses. Fields specifically marked as 'Private' will not be publicly displayed.</p>
                            </div>
                            <div class="card-body py-3">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mt-2 row">
                                            <div class="col-lg-4">
                                                <label for="name">You are interested in<i
                                                        style="border-bottom: 1px dashed #eee; font-size: 10px;"
                                                        data-toggle="tooltip" data-placement="top" data-trigger="hover"
                                                        title="Enter a valid official email address to ensure your profile is prioritized and verified faster. Please note that this email address is used only for verification purposes and all email communications will be sent only to your registered email address.">Why
                                                        is this need</i></label>
                                            </div>
                                            <div class="col-lg-8">
                                                <ul>
                                                    <li><input type="radio" id="age1" name="age"
                                                            value="30">
                                                        <label for="age1">0 - 30</label>
                                                    </li>
                                                    <li><input type="radio" id="age2" name="age"
                                                            value="60">
                                                        <label for="age2">31 - 60</label>
                                                    </li>
                                                    <li> <input type="radio" id="age3" name="age"
                                                            value="100">
                                                        <label for="age3">0 - 80</label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mt-2 row">
                                            <div class="col-lg-4">
                                                <label for="name">You are a(n)<i
                                                        style="border-bottom: 1px dashed #eee; font-size: 10px;"
                                                        data-toggle="tooltip" data-placement="top" data-trigger="hover"
                                                        title="Enter a valid official email address to ensure your profile is prioritized and verified faster. Please note that this email address is used only for verification purposes and all email communications will be sent only to your registered email address.">Why
                                                        is this need</i></label>
                                            </div>
                                            <div class="col-lg-8">
                                                <select name="type" data-sm-placeholder="check"
                                                    class="select2 select2-search-box form-control form-control-sm">
                                                    <option value="" disabled selected hidden>+880</option>
                                                    <option value="AL">Alabama</option>
                                                    <option value="AK">Alaska</option>
                                                    <option value="AZ">Arizona</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="row mt-2">
                                            <div class="col-lg-4">
                                                <label for="name">Select your Industry<i
                                                        style="border-bottom: 1px dashed #eee; font-size: 10px;"
                                                        data-toggle="tooltip" data-placement="top" data-trigger="hover"
                                                        title="Enter a valid official email address to ensure your profile is prioritized and verified faster. Please note that this email address is used only for verification purposes and all email communications will be sent only to your registered email address.">Why
                                                        is this need</i>
                                                </label>
                                            </div>
                                            <div class="col-lg-8">
                                                <select name="type" data-sm-placeholder="check"
                                                    class="select2 select2-search-box form-control form-control-sm">
                                                    <option value="" disabled selected hidden>Select</option>
                                                    <option value="AL">Alabama</option>
                                                    <option value="AK">Alaska</option>
                                                    <option value="AZ">Arizona</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="row mt-2">
                                            <div class="col-lg-4">
                                                <label for="name">Select locations you are interested in<i
                                                        style="border-bottom: 1px dashed #eee; font-size: 10px;"
                                                        data-toggle="tooltip" data-placement="top" data-trigger="hover"
                                                        title="Enter a valid official email address to ensure your profile is prioritized and verified faster. Please note that this email address is used only for verification purposes and all email communications will be sent only to your registered email address.">Why
                                                        is this need</i>
                                                </label>
                                            </div>
                                            <div class="col-lg-8">
                                                <select name="type" data-sm-placeholder="check"
                                                    class="select2 select2-search-box form-control form-control-sm">
                                                    <option value="" disabled selected hidden>Select</option>
                                                    <option value="AL">Alabama</option>
                                                    <option value="AK">Alaska</option>
                                                    <option value="AZ">Arizona</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="row mb-1">
                                            <div class="col-lg-4"><label for="name">Provide your investment range </label></div>
                                            <div class="col-lg-8">
                                                <div class="d-flex align-items-center">
                                                    <input class="form-control form-control-sm" type="text"
                                                        id="name" name="name" placeholder=" Minimun Sq. Ft">

                                                    <span class="mx-2">To</span>
                                                    <input class="form-control form-control-sm" type="text"
                                                        id="name" name="name" placeholder=" Maximum Sq. Ft">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="row mb-2">
                                            <div class="col-lg-4"><label for="name">Your current location</label></div>
                                            <div class="col-lg-8">
                                                <select name="type" data-sm-placeholder="check"
                                                    class="select2 select2-search-box form-control form-control-sm">
                                                    <option value="" disabled selected hidden>Select</option>
                                                    <option value="AL">Alabama</option>
                                                    <option value="AK">Alaska</option>
                                                    <option value="AZ">Arizona</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="row mb-2">
                                            <div class="col-lg-4"><label for="name">Your company</label></div>
                                            <div class="col-lg-8">
                                               <input type="text" id="" class="form-control from-control-sm" name="" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="row mb-2">
                                            <div class="col-lg-4"><label for="name">Your designation</label></div>
                                            <div class="col-lg-8">
                                               <input type="text" id="" class="form-control from-control-sm" name="" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="row mb-2">
                                            <div class="col-lg-4"><label for="name">Company website or LinkedIn profile</label></div>
                                            <div class="col-lg-8">
                                               <input type="text" id="" class="form-control from-control-sm" name="" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="row mb-2">
                                            <div class="col-lg-4"><label for="name">Your company's sector</label></div>
                                            <div class="col-lg-8">
                                               <input type="text" id="" class="form-control from-control-sm" name="" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="row mb-2">
                                            <div class="col-lg-4"><label for="name">Factors you look for in a business</label></div>
                                            <div class="col-lg-8">
                                               <textarea type="text" id="" class="form-control from-control-sm" name="" rows="2" placeholder=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="row mb-2">
                                            <div class="col-lg-4"><label for="name">About your company</label></div>
                                            <div class="col-lg-8">
                                               <textarea type="text" id="" class="form-control from-control-sm" name="" rows="2" placeholder=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-success">
                                On a basic profile, you will be able to connect with 2 businesses for free. To connect with
                                more select a plan below:
                            </div>
                        </div>
                        <div class="card mt-4 reagister-info shadow-md" style="border-top: 3px solid #186191;">
                            <div class="card-header bg-white">
                                <h6>Documents & Proof</h6>
                                <p>Documents help us verify and approve your profile faster. Document names entered here are publicly visible but are accessible only to introduced members.</p>
                            </div>
                            <div class="card-body py-3">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="row mt-2">
                                            <div class="col-lg-4">
                                                <label for="brand_logo">Company Logo </label>
                                            </div>
                                            <div class="col-lg-8">
                                                <input type="file" name="" id="brand_logo"
                                                    placeholder="brand_logo">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="row mt-2">
                                            <div class="col-lg-4">
                                                <label for="brand_logo">Attach Corporate Profile and Terms of Engagement if any</label>
                                            </div>
                                            <div class="col-lg-8">
                                                <input type="file" name="" id="brand_logo"
                                                    placeholder="brand_logo">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="row mt-2">
                                            <div class="col-lg-4">
                                                <label for="brand_logo">Attach proof of business for faster verification </label>
                                            </div>
                                            <div class="col-lg-8">
                                                <input type="file" name="" id="brand_logo"
                                                    placeholder="brand_logo">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="card mt-4 reagister-info shadow-md" style="border-top: 3px solid #186191;">
                            <div class="card-header bg-white">
                                <h6>Select a plan</h6>
                            </div>
                            <div class="card-body py-3">
                                <p class="mb-3">For more introductions select plan</p>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div>
                                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                            <label for="vehicle1" class="fw-bold"> Active Plan <a href=""
                                                    class="text-primary fw-normal">Know More</a> <span
                                                    class="text-success fw-normal">AFN
                                                    21,000
                                                </span></label><br>
                                            <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                                            <label for="vehicle2" class="fw-bold"> Premium Plan <a href=""
                                                    class="text-primary fw-normal">Know More</a> <span
                                                    class="text-success fw-normal">[Recomended]
                                                </span></label><br>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="text-end">
                                            <span class="text-success">AFN 21,000 </span><br>
                                            <span class="text-success">AFN 21,000 </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="detailed" style="display: block;">
                                            <p><i class="fa-solid fa-check ti-check"></i> Speedy profile activation within
                                                1 business day</p>
                                            <p><i class="fa-solid fa-check ti-check"></i> Profile marked as 'Premium' and
                                                gets higher
                                                visibility</p>
                                            <p><i class="fa-solid fa-check ti-check"></i> 25 introduction credits to
                                                connect with businesses
                                                and franchises</p>
                                            <p><i class="fa-solid fa-check ti-check"></i> Connect with businesses which
                                                send you a proposal
                                                for free</p>
                                            <p><i class="fa-solid fa-check ti-check"></i> Access to metrics of all
                                                businesses to evaluate the
                                                opportunity</p>
                                            <p><i class="fa-solid fa-check ti-check"></i> Connect and instantly access
                                                Business Name, if
                                                business has allowed</p>
                                            <p><i class="fa-solid fa-check ti-check"></i> Connect and instantly access
                                                Contact Details, if
                                                business has allowed</p>
                                            <p><i class="fa-solid fa-check ti-check"></i> Quick email support for your
                                                queries</p>
                                            <p><i class="fa-solid fa-check ti-check"></i> Lifetime validity till
                                                introduction credits are
                                                exhausted</p>
                                        </div>
                                    </div>
                                    <div class="my-5 mb-0">
                                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                        <label for="vehicle1"> I accept <a href="">terms of engagement <i
                                                    class="fa-regular fa-circle-check text-success"></i></a></label>
                                    </div>
                                    <div class="text-center">
                                        <button class="text-center">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div style="margin-bottom: 2rem">
                        <h5>Your Profile Status</h5>
                        <div class="container timilene-container">
                            <div class="timeline-block timeline-block-right">
                                <div class="marker active"><i class="fa fa-check active" aria-hidden="true"></i></div>
                                <div class="timeline-content">
                                    <h3>Provide Details</h3>
                                </div>
                            </div>

                            <div class="timeline-block timeline-block-left">
                                <div class="marker active"><i class="fa fa-check active" aria-hidden="true"></i></div>
                                <div class="timeline-content">
                                    <h3> Verification Call</h3>
                                </div>
                            </div>
                            <div class="timeline-block timeline-block-left">
                                <div class="marker "><i class="fa fa-check" aria-hidden="true"></i></div>
                                <div class="timeline-content">
                                    <h3> Approval</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5">
                        <h5>Frequently Asked Questions</h5>
                        {{-- Nested Accordion --}}
                        <div class="accordion mt-3" id="accordionExample">
                            {{-- Nested Item --}}
                            <div class="accordion-item p-1">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed p-2 ps-0 m-0" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="false"
                                        aria-controls="faq1">
                                        What is a franchise profile?
                                    </button>
                                </h2>
                                <div id="faq1" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body p-2">
                                        asdasdasdasdsa
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item p-1">
                                <h2 class="accordion-header" id="headingtwo">
                                    <button class="accordion-button collapsed p-2 ps-0 m-0" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false"
                                        aria-controls="faq2">
                                        What is a franchise profile?
                                    </button>
                                </h2>
                                <div id="faq2" class="accordion-collapse collapse" aria-labelledby="headingtwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body p-2">
                                        asdasdasdasdsa
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item p-1">
                                <h2 class="accordion-header" id="headingthree">
                                    <button class="accordion-button collapsed p-2 ps-0 m-0" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#fa3" aria-expanded="false"
                                        aria-controls="fa3">
                                        What is a franchise profile?
                                    </button>
                                </h2>
                                <div id="fa3" class="accordion-collapse collapse" aria-labelledby="headingthree"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body p-2">
                                        asdasdasdasdsa
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
