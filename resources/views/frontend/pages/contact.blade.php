@extends('frontend.master')
@section('title', 'Contact Us')
@section('content')
    <!-- immer banner start -->
    <section class="inner-banner pt-80 pb-95"
        style="background-image: url({{ asset('frontend/img/banner/inner-banner.jpg') }});" data-overlay="7">
        <div class="container">
            <div class="row z-5 align-items-center">
                <div class="col-md-8 text-center text-md-left">
                    <h1 class="f-700 green">Contact Us</h1>
                    <span class="green-line bg-green d-none d-md-inline-block"></span>
                </div>
                <div class="col-md-4 text-center text-md-right">
                    <nav aria-label="breadcrumb" class="banner-breadcump">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home fs-12 mr-5"></i>Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact us area start -->
    <section class="contact-options pt-55 pb-95">
        <div class="row">
            <div class="col-lg-5 col-sm-12">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="fancy-head text-left text-md-center relative z-5 mb-40 ">
                                <h5 class="line-head mb-15 ">
                                    <span class="line before d-none d-md-block"></span>
                                    Contact us
                                    <span class="line after"></span>
                                </h5>
                                <h1 class="">Contact Details</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row ps-5">
                        <div class="col-lg-12 col-md-6">
                            <div class="d-flex mb-30">
                                <div class="icon-box">
                                    <div class="icon-box-icon">
                                        <i class="fas fa-phone-volume green"></i>
                                    </div>
                                </div>
                                <div class="icon-box-content">
                                    <h5 class="f-700 fs-19 mb-10">Phone</h5>
                                    <p>Phone: (+123) 456-789</p>
                                    <p>Mob: (+123) 987-654</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-6">
                            <div class="d-flex">
                                <div class="icon-box">
                                    <div class="icon-box-icon">
                                        <i class="far fa-envelope green"></i>
                                    </div>
                                </div>
                                <div class="icon-box-content">
                                    <h5 class="f-700 fs-19 mb-10">Email</h5>
                                    <p>Info@example.com</p>
                                    <p>suspport@example.com</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-6">
                            <div class="d-flex mt-30">
                                <div class="icon-box">
                                    <div class="icon-box-icon">
                                        <i class="fas fa-map-marker-alt green"></i>
                                    </div>
                                </div>
                                <div class="icon-box-content">
                                    <h5 class="f-700 fs-19 mb-10">Address</h5>
                                    <p>4221 Melrose Street, Yakima, Washington</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-sm-12">
                <div class="container">
                    <div class="row pe-5 me-3">
                        <div class="col-xl-12">
                            <div class="fancy-head text-center relative z-5 mb-40">
                                <h5 class="line-head mb-15 ">
                                    <span class="line before "></span>
                                    Send us a message
                                    <span class="line after"></span>
                                </h5>
                                <h1 class="mb-5">Get in Touch with Us</h1>
                                <p class="small-p">Pellentesque tempor ornare mal esuada. Mauris vel metus vel urna interdum
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row pe-5">
                        <div class="col-lg-12">
                            <form action="{{ route('contact.store') }}" class="relative z-5 mt-10" method="POST"
                                id="contactForm">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group relative mb-30 mb-sm-20">
                                            <input type="text" class="form-control input-lg input-white shadow-5"
                                                id="name" placeholder="Name (Required)" name="name" required>
                                            <i class="far fa-user transform-v-center"></i>
                                            <div class="text-danger validation-message" id="nameValidation"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group relative mb-30 mb-sm-20">
                                            <input type="email" class="form-control input-lg input-white shadow-5 email-validate"
                                                id="email" placeholder="Email (Required)" name="email" required>
                                            <i class="far fa-envelope transform-v-center"></i>
                                            <div class="text-danger validation-message" id="emailValidation"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group relative mb-30 mb-sm-20">
                                            <input type="text"
                                                class="form-control input-lg input-white shadow-5 phone_number"
                                                id="phone" placeholder="Phone number" name="phone">
                                            <i class="fas fa-mobile-alt transform-v-center"></i>
                                            <div class="text-danger validation-message" id="phoneValidation"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group relative mb-30 mb-sm-20">
                                            <input type="text"
                                                class="form-control input-lg input-white shadow-5 phone_number"
                                                id="phone" placeholder="Address" name="address">
                                            {{-- <i class="fas fa-mobile-alt transform-v-center"></i> --}}
                                            <i class="fa-regular fa-address-book transform-v-center"></i>
                                            <div class="text-danger validation-message" id="phoneValidation"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group relative mb-30 mb-sm-20">
                                            <textarea class="form-control input-white shadow-5" name="message" id="message" cols="30" rows="4"
                                                required placeholder="Your message (Required)"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 text-center mt-30">
                                        <button type="submit" class="btn btn-square blob-small">
                                            SUBMIT<i class="fas fa-long-arrow-alt-right ml-20"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Contact us area end -->
    <!-- Experience Cta start -->
    <section class="experience-cta pt-100 pb-100" style="background-image: url('img/bg/bg-2.jpg');" data-overlay="9">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 z-5 text-center text-lg-left">
                    <div class="exp-cta pr-50 pr-lg-00">
                        <h1 class="white f-700 mb-10">
                            <span class="green">25 Years</span> of Experience in the <span class="green">Industry</span>
                        </h1>
                        <p class="white mb-55 mb-md-30 pr-60 pr-md-00">Quisque enim ipsum, commodo et venenatis rutrum,
                            luctus in enim. Quisque dapibus</p>
                        <a href="#" class="btn btn-square ">Our Services
                            <i class="fas fa-long-arrow-alt-right ml-20"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 mt-md-60">
                    <div class="row no-gutters">
                        <div class="col-sm-6 text-center">
                            <div class="each-count-up shade z-5">
                                <h2 class="fs-40 f-900 green mb-20 mt-5"><span class="counter">3000</span>+</h2>
                                <p class="uppercase white mb-0">Satisfied Customers</p>
                            </div>
                        </div>
                        <div class="col-sm-6 text-center">
                            <div class="each-count-up z-5">
                                <h2 class="fs-40 f-900 green mb-20 mt-5"><span class="counter">250</span>+</h2>
                                <p class="uppercase white mb-0">Awards Winner</p>
                            </div>
                        </div>
                        <div class="col-sm-6 text-center">
                            <div class="each-count-up z-5">
                                <h2 class="fs-40 f-900 green mb-20 mt-5"><span class="counter">350</span>+</h2>
                                <p class="uppercase white mb-0">Professionals</p>
                            </div>
                        </div>
                        <div class="col-sm-6 text-center">
                            <div class="each-count-up z-5 shade">
                                <h2 class="fs-40 f-900 green mb-20 mt-5"><span class="counter">5300</span>+</h2>
                                <p class="uppercase white mb-0">Projects Completed</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Experience Cta end -->

    <!-- Client logos area start -->
    <section class="client-list bg-light-white pt-100 pb-70">
        <div class="container">
            <div class="row ">
                <div class="col-lg-6 col-xl-5 text-center text-lg-left">
                    <div class="clients-left-part">
                        <div class="fancy-head left-al">
                            <h5 class="line-head mb-15">
                                <span class="line before d-lg-none"></span>
                                Our Clients
                                <span class="line after"></span>
                            </h5>
                            <h1 class="mb-15">Trusted by World’s Biggest Brands</h1>
                        </div>
                        <p class="mb-35 pr-45 pr-md-00">Quisque enim ipsum, commodo et venenatis rutrum, luctus in enim.
                            Quisque dapibus lacus non pulvinar lobortis. Cras odio dolor.</p>
                        <a href="#" class="btn btn-square">View all<i
                                class="fas fa-long-arrow-alt-right ml-20"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 mt-md-60 offset-xl-1 offset-lg-0">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="each-logo flex-center transition-4 mb-30">
                                <img src="img/clients/1_blk.png" alt="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="each-logo flex-center transition-4 mb-30">
                                <img src="img/clients/2_blk.png" alt="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="each-logo flex-center transition-4 mb-30">
                                <img src="img/clients/3_blk.png" alt="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="each-logo flex-center transition-4 mb-30">
                                <img src="img/clients/4_blk.png" alt="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="each-logo flex-center transition-4 mb-30">
                                <img src="img/clients/5_blk.png" alt="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="each-logo flex-center transition-4 mb-30">
                                <img src="img/clients/6_blk.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Client logos area end -->

    <!-- cta area start -->
    <section class="cta pt-50 pb-50" style="background-image: url('img/bg/bg_cta.jpg');" data-overlay="9">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-4 col-lg-5 mb-md-20 text-center text-lg-left">
                    <h3 class="z-5 white f-700 lh-18 wow fadeInLeft">What type of challenge are you facing?
                        <span class="green italic">Let’s talk</span>
                    </h3>
                </div>
                <div class="col-xl-8 col-lg-7 text-center text-lg-right z-5">
                    <a href="#"
                        class="btn btn-square-white mr-20 mr-xs-00 d-block d-sm-inline-block mb-xs-15 wow fadeInUp">
                        <i class="fas fa-envelope mr-15"></i>info@example.com
                    </a>
                    <a href="tel:1234567890"
                        class="btn btn-square-green d-block d-sm-inline-block blob-small wow fadeInUp">
                        <i class="fas fa-phone mr-15"></i>+1 234 567 890
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- cta area end -->
@endsection

@push('scripts')
    <script>
        const form = document.getElementById('contactForm');
        const nameInput = document.getElementById('name');
        const emailInput = document.getElementById('email');
        const phoneInput = document.getElementById('phone');

        form.addEventListener('submit', (event) => {
            event.preventDefault();
            validateInputs();
            // If all inputs are valid, you can proceed with form submission
            if (isFormValid()) {
                form.submit();
            }
        });

        nameInput.addEventListener('keyup', () => {
            validateName();
        });

        emailInput.addEventListener('keyup', () => {
            validateEmail();
        });

        phoneInput.addEventListener('keyup', () => {
            validatePhone();
        });

        function validateName() {
            const nameInput = document.getElementById('name');
            const nameValidationMessage = document.getElementById('nameValidation');

            const name = nameInput.value.trim();

            if (name === '') {
                nameValidationMessage.textContent = 'Name is required.';
                nameInput.classList.add('input-error');

            } else if (name.length < 4) {
                nameValidationMessage.textContent = 'Full Name is required.';
                nameInput.classList.add('input-error');
            } else {
                nameValidationMessage.textContent = '';
                nameInput.classList.remove('input-error');
            }
        }

        // function validateEmail() {
        //     const emailInput = document.getElementById('email');
        //     const emailValidationMessage = document.getElementById('emailValidation');

        //     const email = emailInput.value.trim();
        //     const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        //     if (email === '') {
        //         emailValidationMessage.textContent = 'Email is required.';
        //         emailInput.classList.add('input-error');
        //     } else if (!emailRegex.test(email)) {
        //         emailValidationMessage.textContent = 'Invalid email format.';
        //         emailInput.classList.add('input-error');
        //     } else {
        //         emailValidationMessage.textContent = '';
        //         emailInput.classList.remove('input-error');
        //     }
        // }

        function validatePhone() {
            const phoneInput = document.getElementById('phone');
            const phoneValidationMessage = document.getElementById('phoneValidation');

            const phone = phoneInput.value.trim();
            const phoneRegex = /^[0-9+()]*$/; // Modify as needed for your phone number format

            if (phone === '') {
                phoneValidationMessage.textContent = ''; // No error message if field is empty
                phoneInput.classList.remove('input-error');
            } else if (!phoneRegex.test(phone)) {
                phoneValidationMessage.textContent = 'Invalid phone number format.';
                phoneInput.classList.add('input-error');
            } else {
                phoneValidationMessage.textContent = '';
                phoneInput.classList.remove('input-error');
            }
        }



        function validateInputs() {
            validateName();
            validateEmail();
            validatePhone();
            // Add more validations for other fields if needed
        }

        function isFormValid() {
            // Implement logic to check if all fields are valid
        }
    </script>

@endpush
