<section class="top-header d-none d-md-block">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-4 col-md-4">
                <div class="container">
                    <div class="row">
                        <select class="select2-image rounded-0 form-control form-control-sm w-50 custom-select">
                            <option></option>
                            @foreach ($data['countries'] as $country)
                                <option value="{{ $country->short_name }}"
                                    data-img="{{ asset('storage/country_flags/' . $country->flag_img) }}">
                                    {{ $country->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="center-head-top">
                    <div class="contact-head phone flex-center d-none d-sm-flex">
                        <div class='social-links'>
                            <div class='social-btn flex-center' id="twitter">
                                <i class="fa-brands fa-facebook-f" style="font-size: 18px;"></i>
                                <span><a href="http://facebook.com">Facebook</a></span>
                            </div>

                            <div class='social-btn flex-center' id="whatsapp_header">
                                <i class="fa-brands fa-whatsapp" style="font-size: 20px;"></i>
                                <span><a href="https://wa.me/">1258464554554</a></span>
                            </div>

                            <div class='social-btn flex-center' id="email_header">
                                <i class="fa-regular fa-envelope" style="font-size: 20px;"></i>
                                <span><a href="mailto:">info@example.com</a></span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="icon-links icon-links-top d-flex align-items-center">

                    @if (Auth::check())
                        <div class="dropdown show d-none d-md-flex ps-3 pt-00 pb-00 align-items-center">
                            <a href="{{ route('register') }}" class="dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false"
                                style="font-family:proxima_novaregular; padding-top: 2px !important; padding-bottom: 2px !important;">
                                <i class="fa-solid fa-envelope" style="color: #186191;"></i>
                            </a>
                            <ul class="dropdown-menu p-2 message-dropdown">

                                <li>No Messages to Show</li>
                            </ul>
                        </div>
                        <div class="dropdown show d-none d-md-flex ps-3 pt-00 pb-00 align-items-center">
                            <a href="{{ route('register') }}" class="dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false"
                                style="font-family:proxima_novaregular; padding-top: 2px !important; padding-bottom: 2px !important;">
                                <i class="fa-solid fa-bell" style="color: #186191;"></i>
                            </a>
                            <ul class="dropdown-menu p-2 notification-dropdown">

                                @foreach ($data['profile_types'] as $profile_types)
                                    <li><a class="dropdown-item"
                                            href="{{ route('add.profile', $profile_types->slug) }}">Add
                                            {{ $profile_types->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="dropdown show d-none d-md-flex ps-3 pt-00 pb-00 align-items-center">
                            <a href="{{ route('register') }}" class="btn-site-1 login-modal-link dropdown-toggle"
                                data-bs-toggle="dropdown" aria-expanded="false"
                                style="background-color: #186191; color: white; font-family:proxima_novaregular; padding-top: 2px !important; padding-bottom: 2px !important;">
                                My Profiles
                            </a>
                            <ul class="dropdown-menu p-2">
                                <div class="heading stack-toggle border" style="font-size: 12px;">
                                    <div class="icon-container pull-right">
                                        <i class="ti-angle-right"></i>
                                    </div>
                                    <i class="fa-solid fa-plus text-white shadow-sm ms-2"
                                        style="background-color: #5BB75B;"></i>&nbsp; Add New Profile
                                </div>
                                @foreach ($data['profile_types'] as $profile_types)
                                    <li><a class="dropdown-item"
                                            href="{{ route('add.profile', $profile_types->slug) }}">Add
                                            {{ $profile_types->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    @else
                        <div class="dropdown show d-none d-md-flex ps-3 pt-00 pb-00 align-items-center">
                            <a class="dropdown-toggle" href="javascript:void(0);" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                + Add Profile
                            </a>

                            <ul class="dropdown-menu p-0">
                                <div class="heading stack-toggle border p-2 bg-white" style="font-size: 12px;">
                                    <div class="icon-container pull-right">
                                        <i class="ti-angle-right"></i>
                                    </div>
                                    <i class="fa-solid fa-plus text-white shadow-sm ms-2 p-1"
                                        style="background-color: #5BB75B;"></i>&nbsp; Add New Profile
                                </div>
                                @foreach ($data['profile_types'] as $profile_types)
                                    <li class="px-2"><a class="dropdown-item"
                                            href="{{ route('add.profile', $profile_types->slug) }}">Add
                                            {{ $profile_types->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="dropdown show d-none d-md-flex align-items-center ms-3">
                            <a class="" href="{{ route('login') }}" role="button">
                                Login
                            </a>
                        </div>
                        <div class="dropdown show d-none d-md-flex ps-3 pt-00 pb-00 align-items-center">
                            <a href="{{ route('register') }}" class="btn-site-1 login-modal-link"
                                style="background-color: #186191; color: white; font-family:proxima_novaregular; padding-top: 2px !important; padding-bottom: 2px !important;">
                                Register
                            </a>
                        </div>
                    @endif


                </div>
            </div>
        </div>
    </div>
</section>

<div class="container d-lg-none d-md-none">
    <div class="row py-2 d-flex align-items-center">
        <div class="col text-start">
            <button class="btn-site-1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                aria-controls="offcanvasExample">
                <i class="fa-solid fa-bars-staggered"></i>
            </button>

            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
                aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Consultant House</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body" style="background: #ababab;">
                    <nav class="main-menu main-menu-3 white">
                        <ul class="d-flex flex-column">
                            @foreach ($data['menuItems'] as $menuItem)
                                <li style="margin: 0px 0px !important;">
                                    <a class="pt-1 pb-0" href="{{ $menuItem->url }}">
                                        {{ $menuItem->name }} @if ($menuItem->children->count() > 0)
                                            <i class="fas fa-angle-down"></i>
                                        @endif
                                    </a>
                                    @if ($menuItem->children->count() > 0)
                                        <ul class="submenu">
                                            @foreach ($menuItem->children as $child)
                                                <li><a href="{{ $child->url }}">{{ $child->name }}</a></li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Search ......"
                                aria-label="Recipient's username">
                            <div class="input-group-append">
                                <span class="input-group-text" style="font-size: 2rem;"><i
                                        class="fa fa-search"></i></span>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="col text-center">
            <a href="#">
                <img src="https://i.ibb.co/0mDg7cF/consultent-house.png" class="" alt="logo">
            </a>
        </div>
        <div class="col text-end">
            <a href="#" class="text-white user_lgin">
                <i class="fa-solid fa-user"></i></a>
        </div>
    </div>
</div>
<header class="transperant-head header-style-3 transition-4 d-none d-md-block">
    <div class="container">
        <div class="row align-items-center no-gutters">
            <div class="col-lg-2 col-md-5 col-sm-4">
                <div class="logo transition-4">
                    <a href="#">
                        <img src="https://i.ibb.co/0mDg7cF/consultent-house.png" class="transition-4" alt="logo">
                    </a>
                </div>
            </div>
            <div class="col-lg-10 col-md-7 col-sm-8 col-7">
                <div class="icon-links d-flex align-items-center me-md-30">
                    <div class="search-container">
                        <form action="/search" method="get">
                            <input class="search expandright" id="searchright" type="search" name="q"
                                placeholder="Search">
                            <label class="button searchbutton" for="searchright"><span
                                    class="mglass">&#9906;</span></label>
                        </form>
                    </div>
                    <!-- <a href="#" class="btn btn-round d-none d-sm-block blob-small">CONTACT US</a> -->
                </div>
                <div class="menu-links links-type-3 float-left">
                    <nav class="main-menu main-menu-3 white">
                        <ul>
                            @foreach ($data['menuItems'] as $menuItem)
                                <li class="{{ Request::is($menuItem->url) ? 'active' : '' }}">
                                    <a href="{{ $menuItem->url }}">{{ $menuItem->name }} @if ($menuItem->children->count() > 0)
                                            <i class="fas fa-angle-down"></i>
                                        @endif
                                    </a>
                                    @if ($menuItem->children->count() > 0)
                                        <ul class="submenu">
                                            @foreach ($menuItem->children as $child)
                                                <li><a href="{{ $child->url }}">{{ $child->name }}</a></li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-12">
                <div class="mobile-menu-3"></div>
            </div>
        </div>
    </div>

</header>
<!-- The search Modal start -->
<div class="search-popup modal" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form action="#">
                    <div class="form-group relative">
                        <input type="text" class="form-control input-search" id="search"
                            placeholder="Search here...">
                        <i class="fas fa-search transform-v-center"></i>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <i class="fas fa-times close-search-modal" data-dismiss="modal" aria-label="Close"></i>
</div>
<!-- The search Modal end -->
