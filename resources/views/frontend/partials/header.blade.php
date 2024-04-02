<section class="top-header d-none d-md-block">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-4 col-md-4">
                <div class="container">
                    <div class="row">
                        <select class="select2-image rounded-0 form-control form-control-sm w-25 custom-select"
                            data-placeholder="Country..">
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
                                <span><a
                                        href="{{ isset($data['site']->facebook_url) ? $data['site']->facebook_url : '' }}">Facebook</a></span>
                            </div>

                            <div class='social-btn flex-center' id="whatsapp_header">
                                <i class="fa-brands fa-whatsapp" style="font-size: 20px;"></i>
                                <span><a
                                        href="https://wa.me/{{ isset($data['site']->whatsapp_number) ? $data['site']->whatsapp_number : '' }}">{{ isset($data['site']->whatsapp_number) ? $data['site']->whatsapp_number : 'No Number' }}</a></span>
                            </div>

                            <div class='social-btn flex-center' id="email_header">
                                <i class="fa-regular fa-envelope" style="font-size: 20px;"></i>
                                <span>
                                    <a
                                        href="mailto:{{ isset($data['site']->contact_email) ? $data['site']->contact_email : '' }}">
                                        {{ isset($data['site']->contact_email) ? $data['site']->contact_email : '' }}
                                    </a>
                                </span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            {{-- Message Area Start --}}
            <div class="col-lg-4 col-md-4">

                <div class="icon-links icon-links-top d-flex align-items-center">

                    @if (Auth::check())
                        <div class="dropdown show d-none d-md-flex ps-3 pt-00 pb-00 align-items-center">
                            <a href="{{ route('register') }}" class="dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false"
                                style="font-family:proxima_novaregular; padding-top: 2px !important; padding-bottom: 2px !important;">
                                <i class="fa-solid fa-envelope" style="color: #186191;"></i>
                            </a>
                            {{-- Message Area --}}
                            <ul class="dropdown-menu wmin-lg-400 p-0 message-dropdown bg-white border"
                                data-bs-popper="static">
                                <div class="d-flex align-items-center px-1">
                                    <span class="text-small">Messages</span>

                                    <div class="ms-auto">
                                        <a href="#" class="mb-0 text-small">Setting</a>
                                    </div>
                                </div>

                                <div class="dropdown-menu-scrollable m-0">
                                    <a href="#" class="">
                                        <div class="container pt-1 pb-1 message-area"
                                            style="background-color: #eee;
                                        height: 20rem;
                                        overflow: auto;
                                    ">
                                            <div class="row border p-2 mt-1 bg-white"
                                                style="border-radius: 10px; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                                                <div class="col-sm-2 p-0">
                                                    <img src="https://www.smergers.com/static/images/businessimage.jpeg"
                                                        alt=""
                                                        style="border-radius: 4px; width: 50px; height: 45px;">
                                                </div>

                                                <div class="col-sm-10">
                                                    <div class="text-small">
                                                        <p class="" style="font-size: 10px;">
                                                            <i class="fa-solid fa-circle text-gray"></i>
                                                            <span>New Business recommendation: </span>
                                                            <span class="fw-bold text-black"
                                                                style="font-size: 10px;">Newly
                                                                Established Residential
                                                                <span><i
                                                                        class="fa-solid fa-check text-success ms-4"></i></span>
                                                                <br>
                                                                Real Estate Construction Company Investment Opportunity
                                                                in Dhaka, Bangladesh</span> <br>
                                                            <span class="text-primary">
                                                                Residential real estate construction company with 1
                                                                project in hand seeks investment.
                                                            </span>
                                                            <span class="text-gray">
                                                                Financial Investment: AFN 4.2 billion
                                                            </span><br>
                                                        </p>
                                                        <small class="text-gray mt-2">
                                                            2 days, 17 hours ago
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row border p-2 mt-1 bg-white"
                                                style="border-radius: 10px; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                                                <div class="col-sm-2 p-0">
                                                    <img src="https://www.smergers.com/static/images/businessimage.jpeg"
                                                        alt=""
                                                        style="border-radius: 4px; width: 50px; height: 45px;">
                                                </div>

                                                <div class="col-sm-10">
                                                    <div class="text-small">
                                                        <p class="" style="font-size: 10px;">
                                                            <i class="fa-solid fa-circle text-gray"></i>
                                                            <span>New Business recommendation: </span>
                                                            <span class="fw-bold text-black"
                                                                style="font-size: 10px;">Newly
                                                                Established Residential
                                                                <span><i
                                                                        class="fa-solid fa-check text-success ms-4"></i></span>
                                                                <br>
                                                                Real Estate Construction Company Investment Opportunity
                                                                in Dhaka, Bangladesh</span> <br>
                                                            <span class="text-primary">
                                                                Residential real estate construction company with 1
                                                                project in hand seeks investment.
                                                            </span>
                                                            <span class="text-gray">
                                                                Financial Investment: AFN 4.2 billion
                                                            </span><br>
                                                        </p>
                                                        <small class="text-gray mt-2">
                                                            2 days, 17 hours ago
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="d-flex border-top text-small">
                                    <a href="#" class="text-body">
                                        <i class="ph-checks me-1"></i>
                                        See All
                                    </a>
                                    <a href="{{ route('chat') }}" class="text-body ms-auto">
                                        Close
                                        <i class="ph-arrow-circle-right ms-1"></i>
                                    </a>
                                </div>
                            </ul>
                            {{-- Message Area End --}}
                        </div>
                        {{-- Notification Area --}}
                        <div class="dropdown show d-none d-md-flex ps-3 pt-00 pb-00 align-items-center">
                            <a href="{{ route('register') }}" class="dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false"
                                style="font-family:proxima_novaregular; padding-top: 2px !important; padding-bottom: 2px !important;">
                                <i class="fa-solid fa-bell" style="color: #186191;"></i>
                            </a>
                            <ul class="dropdown-menu wmin-lg-400 p-0 message-dropdown bg-white border"
                                data-bs-popper="static">
                                <div class="d-flex align-items-center px-1">
                                    <span class="text-small">Notification</span>

                                    <div class="ms-auto">
                                        <a href="#" class="mb-0 text-small">Setting</a>
                                    </div>
                                </div>

                                <div class="dropdown-menu-scrollable m-0">
                                    <a href="#" class="">
                                        <div class="container pt-1 pb-1 message-area"
                                            style="background-color: #eee; height: 20rem;  overflow: auto;">
                                            <div class="row border p-2 mt-1 bg-white"
                                                style="border-radius: 10px; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                                                <div class="col-sm-2 p-0">
                                                    <img src="https://www.smergers.com/static/images/businessimage.jpeg"
                                                        alt=""
                                                        style="border-radius: 4px; width: 50px; height: 45px;">
                                                </div>

                                                <div class="col-sm-10">
                                                    <div class="text-small">
                                                        <p class="" style="font-size: 10px;">
                                                            <i class="fa-solid fa-circle text-gray"></i>
                                                            <span>New Business recommendation: </span>
                                                            <span class="fw-bold text-black"
                                                                style="font-size: 10px;">Newly
                                                                Established Residential
                                                                <span><i
                                                                        class="fa-solid fa-check text-success ms-4"></i></span>
                                                                <br>
                                                                Real Estate Construction Company Investment Opportunity
                                                                in Dhaka, Bangladesh</span> <br>
                                                            <span class="text-primary">
                                                                Residential real estate construction company with 1
                                                                project in hand seeks investment.
                                                            </span>
                                                            <span class="text-gray">
                                                                Financial Investment: AFN 4.2 billion
                                                            </span><br>
                                                        </p>
                                                        <small class="text-gray mt-2">
                                                            2 days, 17 hours ago
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row border p-2 mt-1 bg-white"
                                                style="border-radius: 10px; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                                                <div class="col-sm-2 p-0">
                                                    <img src="https://www.smergers.com/static/images/businessimage.jpeg"
                                                        alt=""
                                                        style="border-radius: 4px; width: 50px; height: 45px;">
                                                </div>

                                                <div class="col-sm-10">
                                                    <div class="text-small">
                                                        <p class="" style="font-size: 10px;">
                                                            <i class="fa-solid fa-circle text-gray"></i>
                                                            <span>New Business recommendation: </span>
                                                            <span class="fw-bold text-black"
                                                                style="font-size: 10px;">Newly
                                                                Established Residential
                                                                <span><i
                                                                        class="fa-solid fa-check text-success ms-4"></i></span>
                                                                <br>
                                                                Real Estate Construction Company Investment Opportunity
                                                                in Dhaka, Bangladesh</span> <br>
                                                            <span class="text-primary">
                                                                Residential real estate construction company with 1
                                                                project in hand seeks investment.
                                                            </span>
                                                            <span class="text-gray">
                                                                Financial Investment: AFN 4.2 billion
                                                            </span><br>
                                                        </p>
                                                        <small class="text-gray mt-2">
                                                            2 days, 17 hours ago
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="d-flex border-top text-small">
                                    <a href="#" class="text-body">
                                        <i class="ph-checks me-1"></i>
                                        See All
                                    </a>
                                    <a href="{{ route('chat') }}" class="text-body ms-auto">
                                        Close
                                        <i class="ph-arrow-circle-right ms-1"></i>
                                    </a>
                                </div>
                            </ul>
                        </div>
                        {{-- Notification Area End --}}
                        {{-- My Profiles Start --}}
                        <div class="dropdown show d-none d-md-flex ps-3 pt-00 pb-00 align-items-center">
                            <a href="{{ route('register') }}" class="btn-site-1 login-modal-link dropdown-toggle"
                                data-bs-toggle="dropdown" aria-expanded="false"
                                style="background-color: #186191; color: white; font-family:proxima_novaregular; padding-top: 2px !important; padding-bottom: 2px !important;">
                                My Profiles
                            </a>
                            <ul class="dropdown-menu wmin-lg-400 p-0 message-dropdown bg-white border"
                                data-bs-popper="static">
                                <div class="d-flex align-items-center px-1 border-bottom">
                                    <span class="text-one"><i
                                            class="fa-solid fa-triangle-exclamation text-warning ms-1"></i> Incomplete
                                        Profiles</span>
                                </div>

                                <div class="dropdown-menu-scrollable m-0 container p-1 message-area"
                                    style="height: 8rem; overflow: auto;">
                                    <div class="row bg-white gx-1 d-flex align-items-center mt-1"
                                        style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                                        <div class="col-sm-2 p-0">
                                            <img src="https://www.smergers.com/static/images/businessimage.jpeg"
                                                alt="" style="width: 50px; height: 45px;">
                                        </div>

                                        <div class="col-sm-10  p-0">
                                            <div class="text-small pt-1">
                                                <p class="p-0 m-0" style="font-size: 10px;">
                                                    Dev One
                                                </p>
                                                <p class="p-0 m-0" style="font-size: 10px;">
                                                <div class="d-flex justify-between">
                                                    <div class="me-5 fw-bold">NA</div>
                                                    <a class="ms-1" href="#">Intros</a> ·
                                                    <a class="ms-1" href="#">Edit</a> ·
                                                    <a class="ms-1" href="#">Matching Businesses</a>
                                                </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row bg-white gx-1 d-flex align-items-center mt-1"
                                        style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                                        <div class="col-sm-2 p-0">
                                            <img src="https://www.smergers.com/static/images/businessimage.jpeg"
                                                alt="" style="width: 50px; height: 45px;">
                                        </div>

                                        <div class="col-sm-10  p-0">
                                            <div class="text-small pt-1">
                                                <p class="p-0 m-0" style="font-size: 10px;">
                                                    Dewin Bravo
                                                </p>
                                                <p class="p-0 m-0" style="font-size: 10px;">
                                                <div class="d-flex justify-between">
                                                    <div class="me-5 fw-bold">NA</div>
                                                    <a class="ms-1" href="#">Intros</a> ·
                                                    <a class="ms-1" href="#">Edit</a> ·
                                                    <a class="ms-1" href="#">Matching Businesses</a>
                                                </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row bg-white gx-1 d-flex align-items-center mt-1"
                                        style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                                        <div class="col-sm-2 p-0">
                                            <img src="https://www.smergers.com/static/images/businessimage.jpeg"
                                                alt="" style="width: 50px; height: 45px;">
                                        </div>

                                        <div class="col-sm-10  p-0">
                                            <div class="text-small pt-1">
                                                <p class="p-0 m-0" style="font-size: 10px;">
                                                    Dewin Bravo
                                                </p>
                                                <p class="p-0 m-0" style="font-size: 10px;">
                                                <div class="d-flex justify-between">
                                                    <div class="me-5 fw-bold">NA</div>
                                                    <a class="ms-1" href="#">Intros</a> ·
                                                    <a class="ms-1" href="#">Edit</a> ·
                                                    <a class="ms-1" href="#">Matching Businesses</a>
                                                </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center px-1 border-bottom">
                                    <span class="text-one"><i
                                            class="fa-solid fa-square-plus text-success ms-1 me-2"></i>Add
                                        New Profile</span>
                                </div>
                                <div class="dropdown-menu-scrollable m-0 container p-0">
                                    <ul>
                                        @foreach ($data['profile_types'] as $profile_type)
                                            <li class="p-1 px-2 add-new-area"><a
                                                    href="{{ route('add.profile', $profile_type->slug) }}"
                                                    class="text-one">Add
                                                    {{ $profile_type->name }}
                                                    Profile</a>
                                            </li>
                                        @endforeach
                                        <li class="p-1 px-2 add-new-area"><a href="{{ route('add.consultant') }}"
                                                class="text-one">
                                                Add Consultant Profile
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="d-flex border-top text-small">
                                    <a href="#" class="text-body">
                                        <i class="ph-checks me-1"></i>
                                        See All
                                    </a>
                                    <a href="{{ route('chat') }}" class="text-body ms-auto">
                                        Close
                                        <i class="ph-arrow-circle-right ms-1"></i>
                                    </a>
                                </div>
                            </ul>
                        </div>
                        {{-- My Profiles End --}}
                        {{-- Accounts Area Start --}}
                        <div class="dropdown show d-none d-md-flex ps-3 pt-00 pb-00 align-items-center">
                            <a href="{{ route('register') }}" class="" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <div class="profile-image" id="header-round-image"
                                    style="background-image:url('{{ !empty($data['user']->image) ? asset('storage/' . $data['user']->image) : asset('admin/assets/images/no_image.jpg') }}')"
                                    profile-picture-container="">
                                </div>
                            </a>
                            <ul class="dropdown-menu m-1 message-dropdown bg-white border" data-bs-popper="static"
                                style="width: 310px;">
                                <div class="d-flex align-items-center">
                                    <div class="profile-photo" id="header-dropdown-image">
                                        <img src="{{ !empty($data['user']->image) ? asset('storage/' . $data['user']->image) : asset('admin/assets/images/no_image.jpg') }}"
                                            alt="">
                                    </div>
                                    <div class="profile-content mb-2">
                                        <div class="name">
                                            {{ $data['user']->name }}
                                        </div>
                                        <div class="email my-1">{{ $data['user']->email }}</div>
                                        <a href="{{ route('dashboard') }}"
                                            class="btn-site-1 w-75 mx-auto login-modal-link dropdown-toggle">My
                                            Dashboard</a>
                                    </div>
                                </div>
                                <ul class="profile-links">
                                    <li class="p-links">
                                        <a href="{{ route('activity.info', ['id' => 'invoice']) }}">
                                            <div class="link-icon">
                                                <i class="fa-solid fa-credit-card"></i>
                                            </div>
                                            <div class="link-text">Invoices</div>
                                        </a>
                                    </li>
                                    <li class="p-links">
                                        <a href="/dashboard/history/">
                                            <div class="link-icon">
                                                <i class="fa-regular fa-bookmark"></i>
                                            </div>
                                            <div class="link-text">Bookmarks and History</div>
                                        </a>
                                    </li>
                                    <li class="p-links">
                                        <a href="{{ route('activity.info', ['id' => 'message']) }}">
                                            <div class="link-icon">
                                                <i class="fa-regular fa-envelope"></i>
                                            </div>
                                            <div class="link-text">Inbox</div>
                                        </a>
                                    </li>
                                    <li class="p-links">
                                        <a href="{{ route('activity.info', ['id' => 'notifications']) }}">
                                            <div class="link-icon">
                                                <i class="fa-regular fa-bell"></i>
                                            </div>
                                            <div class="link-text">Notifications</div>
                                        </a>
                                    </li>
                                    <li class="p-links">
                                        <a href="/dashboard/settings/">
                                            <div class="link-icon">
                                                <i class="fa-solid fa-gear"></i>
                                            </div>
                                            <div class="link-text">Settings</div>
                                        </a>
                                    </li>
                                    <li class="p-links">
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <a href="javascript:void(0);" title="Logout"
                                                onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                                <div class="link-icon">
                                                    <i class="fa-solid fa-power-off"></i>
                                                </div>
                                                <div class="link-text">Logout</div>
                                            </a>
                                        </form>
                                    </li>
                                </ul>
                            </ul>
                        </div>
                        {{-- Accounts Area End --}}
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
            {{-- Message Area End --}}
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
