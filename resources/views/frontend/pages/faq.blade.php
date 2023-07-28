@extends('frontend.master')
@section('title', 'FAQ')
@section('content')
    <style>
        .accordion-button:not(.collapsed) {
            color: var(--main-color);
            background-color: transparent;
            box-shadow: none;
        }

        .nav-pills-custom .nav-link {
            color: #aaa;
            background: #fff;
            position: relative;
        }

        .nav-pills-custom .nav-link.active {
            color: var(--main-text-color);
            background: #fff;
        }

        .pagination-outer {
            text-align: center;
        }

        .pagination {
            background: linear-gradient(to right, transparent, #fff, #fff, transparent);
            font-family: 'Rubik', sans-serif;
            padding: 0 30px;
            display: inline-flex;
            position: relative;
        }

        .pagination li a.page-link {
            color: var(--main-color);
            background-color: transparent;
            font-size: 22px;
            line-height: 40px;
            height: 50px;
            width: 40px;
            border: none;
            border-radius: 0;
            overflow: hidden;
            position: relative;
            transition: all 0.4s ease 0s;
        }

        .pagination li.active a.page-link,
        .pagination li a.page-link:hover,
        .pagination li.active a.page-link:hover {
            color: #fff;
            background-color: transparent;
            text-shadow: 0 0 10px #000;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        .pagination li a.page-link:before,
        .pagination li a.page-link:after {
            content: '';
            background-color: var(--main-color);
            height: 100%;
            width: 100%;
            position: absolute;
            left: -100%;
            top: 100%;
            z-index: -1;
            -webkit-clip-path: polygon(0 0, 0% 100%, 100% 100%);
            clip-path: polygon(0 0, 0% 100%, 100% 100%);
            transition: all 0.3s ease 0s;
        }

        .pagination li a.page-link:after {
            background-color: var(--main-color);
            left: 100%;
            top: -100%;
            -webkit-clip-path: polygon(100% 0, 0 0, 100% 100%);
            clip-path: polygon(100% 0, 0 0, 100% 100%);
        }

        .pagination li a.page-link:hover:before,
        .pagination li.active a.page-link:before,
        .pagination li a.page-link:hover:after,
        .pagination li.active a.page-link:after {
            left: 0;
            top: 0;
        }

        @media only screen and (max-width: 480px) {
            .pagination {
                display: block;
            }

            .pagination li {
                margin-bottom: 10px;
                display: inline-block;
            }
        }
    </style>
    {{-- Banner Area --}}
    <section class="showcase">
        <img class="img-fluid" src="https://img.freepik.com/premium-photo/male-hand-holding-question-mark-icon-neon-red-blue-purple-background-banner-with-copy-space-place-text_150455-18592.jpg" alt="Picture" style="background-size: container;">
        <div class="overlay">
            <h2>FAQ</h2>
            <p class="mt-3 text-white">
                Our Frequently Asked Question ?
            </p>
        </div>
    </section>
    {{-- Main Content --}}
    <section>
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-3">
                    <div class="card border-0 ">
                        <div class="card-header border-0 p-3">
                            <div class="d-flex justify-content-center">
                                <img class="" width="140px;" src="https://www.labsertchemical.com/image/catalog/FAQ%20Logo.png">
                            </div>
                            <p class="text-one text-center">One destination for all information related to Mergers,
                                Acquisition and Investments.</p>
                        </div>
                        <div class="card-body border">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed p-0 text-one" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                            aria-expanded="false" aria-controls="flush-collapseOne">
                                            For
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body p-0 px-3">
                                            {{-- First Tab --}}
                                            <div class="nav d-flex flex-column nav-pills nav-pills-custom mb-3"
                                                id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                <button class="nav-link  rounded-0 ps-2 text-start p-0 m-0 active"
                                                    id="v-pills-home-tab" data-bs-toggle="pill"
                                                    data-bs-target="#v-pills-home" type="button" role="tab"
                                                    aria-controls="v-pills-home" aria-selected="true">
                                                    <span class="text-one text-capitalize">Business Owners</span>
                                                </button>

                                                <button class="nav-link  rounded-0 ps-2 text-start p-0 m-0"
                                                    id="v-pills-profile-tab" data-bs-toggle="pill"
                                                    data-bs-target="#v-pills-profile" type="button" role="tab"
                                                    aria-controls="v-pills-profile" aria-selected="false">
                                                    <span class="text-one text-capitalize">Financial Advisors</span>
                                                </button>

                                                <button class="nav-link  rounded-0 ps-2 text-start p-0 m-0"
                                                    id="v-pills-messages-tab" data-bs-toggle="pill"
                                                    data-bs-target="#v-pills-messages" type="button" role="tab"
                                                    aria-controls="v-pills-messages" aria-selected="false">
                                                    <span class="text-one text-capitalize">Acquirers & Buyers</span>
                                                </button>

                                                <button class="nav-link  rounded-0 ps-2 text-start p-0 m-0"
                                                    id="v-pills-settings-tab" data-bs-toggle="pill"
                                                    data-bs-target="#v-pills-settings" type="button" role="tab"
                                                    aria-controls="v-pills-settings" aria-selected="false">
                                                    <span class="text-one text-capitalize">Investors</span>
                                                </button>
                                            </div>
                                            {{-- End --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Extra Sidebar Or Accordion --}}
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed p-0 text-one" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                            aria-expanded="false" aria-controls="flush-collapseOne">
                                            Stage
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body p-0 px-3">
                                            {{-- First Tab --}}
                                            <div class="nav d-flex flex-column nav-pills nav-pills-custom mb-3"
                                                id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                <button class="nav-link  rounded-0 ps-2 text-start p-0 m-0 active"
                                                    id="v-pills-home-tab" data-bs-toggle="pill"
                                                    data-bs-target="#v-pills-home" type="button" role="tab"
                                                    aria-controls="v-pills-home" aria-selected="true">
                                                    <span class="text-one text-capitalize">Personal
                                                        information</span>
                                                </button>

                                                <button class="nav-link  rounded-0 ps-2 text-start p-0 m-0"
                                                    id="v-pills-profile-tab" data-bs-toggle="pill"
                                                    data-bs-target="#v-pills-profile" type="button" role="tab"
                                                    aria-controls="v-pills-profile" aria-selected="false">
                                                    <span class="text-one text-capitalize">Bookings</span>
                                                </button>

                                                <button class="nav-link  rounded-0 ps-2 text-start p-0 m-0"
                                                    id="v-pills-messages-tab" data-bs-toggle="pill"
                                                    data-bs-target="#v-pills-messages" type="button" role="tab"
                                                    aria-controls="v-pills-messages" aria-selected="false">
                                                    <span class="text-one text-capitalize">Reviews</span>
                                                </button>

                                                <button class="nav-link  rounded-0 ps-2 text-start p-0 m-0"
                                                    id="v-pills-settings-tab" data-bs-toggle="pill"
                                                    data-bs-target="#v-pills-settings" type="button" role="tab"
                                                    aria-controls="v-pills-settings" aria-selected="false">
                                                    <span class="text-one text-capitalize">Confirm
                                                        booking</span>
                                                </button>
                                            </div>
                                            {{-- End --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <!-- Tabs content -->
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade bg-white show active p-1" id="v-pills-home" role="tabpanel"
                            aria-labelledby="v-pills-home-tab">
                            <div class="card shadow-none border-0">
                                <div class="card-header border-0  d-flex align-items-center justify-content-between p-0">
                                    <div>
                                        <span class="ps-3 fw-bold">Question? & Answers</span>
                                    </div>
                                    <div class="p-2">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ......"
                                                aria-label="Recipient's username">
                                            <div class="input-group-append">
                                                <a class="input-group-text btn  rounded-0 text-white"
                                                    style="background-color: var(--main-bg-color)"><i
                                                        class="fa fa-search"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Content In Table --}}
                            <div class="mb-5">
                                <table class="table">
                                    <thead>
                                    <tbody>
                                        <tr>
                                            <div class="mt-3">
                                                <h6>How does Consultant House promote profiles on social media?</h6>
                                                <p>Promotion on social media would be determined by Consultant House based on
                                                    several
                                                    factors, including but not limited to good quality pictures, valuation
                                                    attractiveness, business legitimacy, etc. If you wish..
                                                    <a href="#" class="text-so-small fw-bold">Continue Reading</a>
                                                </p>
                                            </div>
                                        </tr>
                                        <tr>
                                            <div class="mt-3">
                                                <h6>How does Consultant House promote profiles on social media?</h6>
                                                <p>Promotion on social media would be determined by Consultant House based on
                                                    several
                                                    factors, including but not limited to good quality pictures, valuation
                                                    attractiveness, business legitimacy, etc. If you wish..
                                                    <a href="#" class="text-so-small fw-bold">Continue Reading</a>
                                                </p>
                                            </div>
                                        </tr>
                                        <tr>
                                            <div class="mt-3">
                                                <h6>How does Consultant House promote profiles on social media?</h6>
                                                <p>Promotion on social media would be determined by Consultant House based on
                                                    several
                                                    factors, including but not limited to good quality pictures, valuation
                                                    attractiveness, business legitimacy, etc. If you wish..
                                                    <a href="#" class="text-so-small fw-bold">Continue Reading</a>
                                                </p>
                                            </div>
                                        </tr>
                                    </tbody>
                                </table>
                                {{-- Pagination --}}
                                <div style="margin-top: 3rem">
                                    <nav class="pagination-outer" aria-label="Page navigation">
                                        <ul class="pagination">
                                            <li class="page-item">
                                                <a href="#" class="page-link" aria-label="Previous">
                                                    <span aria-hidden="true">«</span>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item active"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                                            <li class="page-item">
                                                <a href="#" class="page-link" aria-label="Next">
                                                    <span aria-hidden="true">»</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade bg-white p-1" id="v-pills-profile" role="tabpanel"
                            aria-labelledby="v-pills-profile-tab">
                            <div class="card shadow-none border-0">
                                <div class="card-header border-0  d-flex align-items-center justify-content-between p-0">
                                    <div>
                                        <span class="ps-3 fw-bold">Question and Answers</span>
                                    </div>
                                    <div class="p-2">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ......"
                                                aria-label="Recipient's username">
                                            <div class="input-group-append">
                                                <a class="input-group-text btn  rounded-0 text-white"
                                                    style="background-color: var(--main-bg-color)"><i
                                                        class="fa fa-search"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Content In Table --}}
                            <div class="mb-5">
                                <table class="table">
                                    <thead>
                                    <tbody>
                                        <tr>
                                            <div class="mt-3">
                                                <h6>How does Consultant House promote profiles on social media?</h6>
                                                <p>Promotion on social media would be determined by Consultant House based on
                                                    several
                                                    factors, including but not limited to good quality pictures, valuation
                                                    attractiveness, business legitimacy, etc. If you wish..
                                                    <a href="#" class="text-so-small fw-bold">Continue Reading</a>
                                                </p>
                                            </div>
                                        </tr>
                                        <tr>
                                            <div class="mt-3">
                                                <h6>How does Consultant House promote profiles on social media?</h6>
                                                <p>Promotion on social media would be determined by Consultant House based on
                                                    several
                                                    factors, including but not limited to good quality pictures, valuation
                                                    attractiveness, business legitimacy, etc. If you wish..
                                                    <a href="#" class="text-so-small fw-bold">Continue Reading</a>
                                                </p>
                                            </div>
                                        </tr>
                                        <tr>
                                            <div class="mt-3">
                                                <h6>How does Consultant House promote profiles on social media?</h6>
                                                <p>Promotion on social media would be determined by Consultant House based on
                                                    several
                                                    factors, including but not limited to good quality pictures, valuation
                                                    attractiveness, business legitimacy, etc. If you wish..
                                                    <a href="#" class="text-so-small fw-bold">Continue Reading</a>
                                                </p>
                                            </div>
                                        </tr>
                                    </tbody>
                                </table>
                                {{-- Pagination --}}
                                <div style="margin-top: 3rem">
                                    <nav class="pagination-outer" aria-label="Page navigation">
                                        <ul class="pagination">
                                            <li class="page-item">
                                                <a href="#" class="page-link" aria-label="Previous">
                                                    <span aria-hidden="true">«</span>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item active"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                                            <li class="page-item">
                                                <a href="#" class="page-link" aria-label="Next">
                                                    <span aria-hidden="true">»</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade bg-white p-1" id="v-pills-messages" role="tabpanel"
                            aria-labelledby="v-pills-messages-tab">
                            <div class="card shadow-none border-0">
                                <div class="card-header border-0  d-flex align-items-center justify-content-between p-0">
                                    <div>
                                        <span class="ps-3 fw-bold">Question and Answers</span>
                                    </div>
                                    <div class="p-2">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ......"
                                                aria-label="Recipient's username">
                                            <div class="input-group-append">
                                                <a class="input-group-text btn  rounded-0 text-white"
                                                    style="background-color: var(--main-bg-color)"><i
                                                        class="fa fa-search"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Content In Table --}}
                            <div class="mb-5">
                                <table class="table">
                                    <thead>
                                    <tbody>
                                        <tr>
                                            <div class="mt-3">
                                                <h6>How does Consultant House promote profiles on social media?</h6>
                                                <p>Promotion on social media would be determined by Consultant House based on
                                                    several
                                                    factors, including but not limited to good quality pictures, valuation
                                                    attractiveness, business legitimacy, etc. If you wish..
                                                    <a href="#" class="text-so-small fw-bold">Continue Reading</a>
                                                </p>
                                            </div>
                                        </tr>
                                        <tr>
                                            <div class="mt-3">
                                                <h6>How does Consultant House promote profiles on social media?</h6>
                                                <p>Promotion on social media would be determined by Consultant House based on
                                                    several
                                                    factors, including but not limited to good quality pictures, valuation
                                                    attractiveness, business legitimacy, etc. If you wish..
                                                    <a href="#" class="text-so-small fw-bold">Continue Reading</a>
                                                </p>
                                            </div>
                                        </tr>
                                        <tr>
                                            <div class="mt-3">
                                                <h6>How does Consultant House promote profiles on social media?</h6>
                                                <p>Promotion on social media would be determined by Consultant House based on
                                                    several
                                                    factors, including but not limited to good quality pictures, valuation
                                                    attractiveness, business legitimacy, etc. If you wish..
                                                    <a href="#" class="text-so-small fw-bold">Continue Reading</a>
                                                </p>
                                            </div>
                                        </tr>
                                    </tbody>
                                </table>
                                {{-- Pagination --}}
                                <div style="margin-top: 3rem">
                                    <nav class="pagination-outer" aria-label="Page navigation">
                                        <ul class="pagination">
                                            <li class="page-item">
                                                <a href="#" class="page-link" aria-label="Previous">
                                                    <span aria-hidden="true">«</span>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item active"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                                            <li class="page-item">
                                                <a href="#" class="page-link" aria-label="Next">
                                                    <span aria-hidden="true">»</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade bg-white p-1" id="v-pills-settings" role="tabpanel"
                            aria-labelledby="v-pills-settings-tab">
                            <div class="card shadow-none border-0">
                                <div class="card-header border-0  d-flex align-items-center justify-content-between p-0">
                                    <div>
                                        <span class="ps-3 fw-bold">Question and Answers</span>
                                    </div>
                                    <div class="p-2">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ......"
                                                aria-label="Recipient's username">
                                            <div class="input-group-append">
                                                <a class="input-group-text btn  rounded-0 text-white"
                                                    style="background-color: var(--main-bg-color)"><i
                                                        class="fa fa-search"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Content In Table --}}
                            <div class="mb-5">
                                <table class="table">
                                    <thead>
                                    <tbody>
                                        <tr>
                                            <div class="mt-3">
                                                <h6>How does Consultant House promote profiles on social media?</h6>
                                                <p>Promotion on social media would be determined by Consultant House based on
                                                    several
                                                    factors, including but not limited to good quality pictures, valuation
                                                    attractiveness, business legitimacy, etc. If you wish..
                                                    <a href="#" class="text-so-small fw-bold">Continue Reading</a>
                                                </p>
                                            </div>
                                        </tr>
                                        <tr>
                                            <div class="mt-3">
                                                <h6>How does Consultant House promote profiles on social media?</h6>
                                                <p>Promotion on social media would be determined by Consultant House based on
                                                    several
                                                    factors, including but not limited to good quality pictures, valuation
                                                    attractiveness, business legitimacy, etc. If you wish..
                                                    <a href="#" class="text-so-small fw-bold">Continue Reading</a>
                                                </p>
                                            </div>
                                        </tr>
                                        <tr>
                                            <div class="mt-3">
                                                <h6>How does Consultant House promote profiles on social media?</h6>
                                                <p>Promotion on social media would be determined by Consultant House based on
                                                    several
                                                    factors, including but not limited to good quality pictures, valuation
                                                    attractiveness, business legitimacy, etc. If you wish..
                                                    <a href="#" class="text-so-small fw-bold">Continue Reading</a>
                                                </p>
                                            </div>
                                        </tr>
                                    </tbody>
                                </table>
                                {{-- Pagination --}}
                                <div style="margin-top: 3rem">
                                    <nav class="pagination-outer" aria-label="Page navigation">
                                        <ul class="pagination">
                                            <li class="page-item">
                                                <a href="#" class="page-link" aria-label="Previous">
                                                    <span aria-hidden="true">«</span>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item active"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                                            <li class="page-item">
                                                <a href="#" class="page-link" aria-label="Next">
                                                    <span aria-hidden="true">»</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
