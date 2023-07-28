<!-- Main navbar -->
<div class="navbar navbar-dark navbar-expand-lg navbar-static border-bottom border-bottom-white border-opacity-10">
    <div class="container-fluid">
        <div class="d-flex d-lg-none me-2">
            <button type="button" class="navbar-toggler sidebar-mobile-main-toggle rounded-pill">
                <i class="ph-list"></i>
            </button>
        </div>

        <div class="navbar-brand flex-1 flex-lg-0">
            <a href="{{ route('admin.dashboard') }}" class="d-inline-flex align-items-center">
                <img src="{{ asset('admin/assets/images/consultant_house.png') }}" alt="">
                {{-- <img src="{{ asset('admin/assets/images/consultant_house.png') }}" class="d-none d-sm-inline-block h-16px ms-3" alt=""> --}}
            </a>
        </div>

        <ul class="nav flex-row">
            <li class="nav-item d-lg-none">
                <a href="#navbar_search" class="navbar-nav-link navbar-nav-link-icon rounded-pill"
                    data-bs-toggle="collapse">
                    <i class="ph-magnifying-glass"></i>
                </a>
            </li>


        </ul>

        {{-- <div class="navbar-collapse justify-content-center flex-lg-1 order-2 order-lg-1 collapse" id="navbar_search">
            <div class="navbar-search flex-fill position-relative mt-2 mt-lg-0 mx-lg-3">
                <div class="form-control-feedback form-control-feedback-start flex-grow-1" data-color-theme="dark">
                    <input type="text" class="form-control bg-transparent rounded-pill" placeholder="Search"
                        data-bs-toggle="dropdown">
                    <div class="form-control-feedback-icon">
                        <i class="ph-magnifying-glass"></i>
                    </div>
                    <div class="dropdown-menu w-100" data-color-theme="light">
                        <button type="button" class="dropdown-item">
                            <div class="text-center w-32px me-3">
                                <i class="ph-magnifying-glass"></i>
                            </div>
                            <span>Search <span class="fw-bold">"in"</span> everywhere</span>
                        </button>

                        <div class="dropdown-divider"></div>

                        <div class="dropdown-menu-scrollable-lg">
                            <div class="dropdown-header">
                                Contacts
                                <a href="#" class="float-end">
                                    See all
                                    <i class="ph-arrow-circle-right ms-1"></i>
                                </a>
                            </div>

                            <div class="dropdown-item cursor-pointer">
                                <div class="me-3">
                                    <img src="{{ asset('admin/assets/images/demo/users/face3.jpg ') }}"
                                        class="w-32px h-32px rounded-pill" alt="">
                                </div>

                                <div class="d-flex flex-column flex-grow-1">
                                    <div class="fw-semibold">Christ<mark>in</mark>e Johnson</div>
                                    <span class="fs-sm text-muted">c.johnson@awesomecorp.com</span>
                                </div>

                                <div class="d-inline-flex">
                                    <a href="#" class="text-body ms-2">
                                        <i class="ph-user-circle"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="dropdown-item cursor-pointer">
                                <div class="me-3">
                                    <img src="{{ asset('admin/assets/images/demo/users/face24.jpg ') }}"
                                        class="w-32px h-32px rounded-pill" alt="">
                                </div>

                                <div class="d-flex flex-column flex-grow-1">
                                    <div class="fw-semibold">Cl<mark>in</mark>ton Sparks</div>
                                    <span class="fs-sm text-muted">c.sparks@awesomecorp.com</span>
                                </div>

                                <div class="d-inline-flex">
                                    <a href="#" class="text-body ms-2">
                                        <i class="ph-user-circle"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="dropdown-divider"></div>

                            <div class="dropdown-header">
                                Clients
                                <a href="#" class="float-end">
                                    See all
                                    <i class="ph-arrow-circle-right ms-1"></i>
                                </a>
                            </div>

                            <div class="dropdown-item cursor-pointer">
                                <div class="me-3">
                                    <img src="{{ asset('admin/assets/images/brands/adobe.svg') }}"
                                        class="w-32px h-32px rounded-pill" alt="">
                                </div>

                                <div class="d-flex flex-column flex-grow-1">
                                    <div class="fw-semibold">Adobe <mark>In</mark>c.</div>
                                    <span class="fs-sm text-muted">Enterprise license</span>
                                </div>

                                <div class="d-inline-flex">
                                    <a href="#" class="text-body ms-2">
                                        <i class="ph-briefcase"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="dropdown-item cursor-pointer">
                                <div class="me-3">
                                    <img src="{{ asset('admin/assets/images/brands/holiday-inn.svg') }}"
                                        class="w-32px h-32px rounded-pill" alt="">
                                </div>

                                <div class="d-flex flex-column flex-grow-1">
                                    <div class="fw-semibold">Holiday-<mark>In</mark>n</div>
                                    <span class="fs-sm text-muted">On-premise license</span>
                                </div>

                                <div class="d-inline-flex">
                                    <a href="#" class="text-body ms-2">
                                        <i class="ph-briefcase"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="dropdown-item cursor-pointer">
                                <div class="me-3">
                                    <img src="{{ asset('admin/assets/images/brands/ing.svg') }}"
                                        class="w-32px h-32px rounded-pill" alt="">
                                </div>

                                <div class="d-flex flex-column flex-grow-1">
                                    <div class="fw-semibold"><mark>IN</mark>G Group</div>
                                    <span class="fs-sm text-muted">Perpetual license</span>
                                </div>

                                <div class="d-inline-flex">
                                    <a href="#" class="text-body ms-2">
                                        <i class="ph-briefcase"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="#"
                    class="navbar-nav-link align-items-center justify-content-center w-40px h-32px rounded-pill position-absolute end-0 top-50 translate-middle-y p-0 me-1"
                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <i class="ph-faders-horizontal"></i>
                </a>

                <div class="dropdown-menu w-100 p-3">
                    <div class="d-flex align-items-center mb-3">
                        <h6 class="mb-0">Search options</h6>
                        <a href="#" class="text-body rounded-pill ms-auto">
                            <i class="ph-clock-counter-clockwise"></i>
                        </a>
                    </div>

                    <div class="mb-3">
                        <label class="d-block form-label">Category</label>
                        <label class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input" checked>
                            <span class="form-check-label">Invoices</span>
                        </label>
                        <label class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input">
                            <span class="form-check-label">Files</span>
                        </label>
                        <label class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input">
                            <span class="form-check-label">Users</span>
                        </label>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Addition</label>
                        <div class="input-group">
                            <select class="form-select w-auto flex-grow-0">
                                <option value="1" selected>has</option>
                                <option value="2">has not</option>
                            </select>
                            <input type="text" class="form-control" placeholder="Enter the word(s)">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <div class="input-group">
                            <select class="form-select w-auto flex-grow-0">
                                <option value="1" selected>is</option>
                                <option value="2">is not</option>
                            </select>
                            <select class="form-select">
                                <option value="1" selected>Active</option>
                                <option value="2">Inactive</option>
                                <option value="3">New</option>
                                <option value="4">Expired</option>
                                <option value="5">Pending</option>
                            </select>
                        </div>
                    </div>

                    <div class="d-flex">
                        <button type="button" class="btn btn-light">Reset</button>

                        <div class="ms-auto">
                            <button type="button" class="btn btn-light">Cancel</button>
                            <button type="button" class="btn btn-primary ms-2">Apply</button>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <ul class="nav flex-row justify-content-end order-1 order-lg-2">
            <li class="nav-item nav-item-dropdown-lg dropdown ms-lg-2">
                <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded-pill" data-bs-toggle="dropdown"
                    data-bs-auto-close="outside">
                    <i class="ph-chats"></i>
                    <span
                        class="badge bg-yellow text-black position-absolute top-0 end-0 translate-middle-top zindex-1 rounded-pill mt-1 me-1">8</span>
                </a>

                <div class="dropdown-menu wmin-lg-400 p-0 notification_dropdown">
                    <div class="d-flex align-items-center p-3">
                        <h6 class="mb-0">Messages</h6>
                        <div class="ms-auto">
                            <a href="#" class="text-body">
                                <i class="ph-plus-circle"></i>
                            </a>
                            <a href="#search_messages" class="collapsed text-body ms-2" data-bs-toggle="collapse">
                                <i class="ph-magnifying-glass"></i>
                            </a>
                        </div>
                    </div>

                    <div class="collapse" id="search_messages">
                        <div class="px-3 mb-2">
                            <div class="form-control-feedback form-control-feedback-start">
                                <input type="text" class="form-control" placeholder="Search messages">
                                <div class="form-control-feedback-icon">
                                    <i class="ph-magnifying-glass"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown-menu-scrollable pb-2">
                        <a href="#" class="dropdown-item align-items-start text-wrap py-2">
                            <div class="status-indicator-container me-3">
                                <img src="{{ asset('admin/assets/images/demo/users/face10.jpg ') }}"
                                    class="w-40px h-40px rounded-pill" alt="">
                                <span class="status-indicator bg-warning"></span>
                            </div>

                            <div class="flex-1">
                                <span class="fw-semibold">James Alexander</span>
                                <span class="text-muted float-end fs-sm">04:58</span>
                                <div class="text-muted">who knows, maybe that would be the best thing for me...
                                </div>
                            </div>
                        </a>

                        <a href="#" class="dropdown-item align-items-start text-wrap py-2">
                            <div class="status-indicator-container me-3">
                                <img src="{{ asset('admin/assets/images/demo/users/face3.jpg') }} "
                                    class="w-40px h-40px rounded-pill" alt="">
                                <span class="status-indicator bg-success"></span>
                            </div>

                            <div class="flex-1">
                                <span class="fw-semibold">Margo Baker</span>
                                <span class="text-muted float-end fs-sm">12:16</span>
                                <div class="text-muted">That was something he was unable to do because...</div>
                            </div>
                        </a>

                        <a href="#" class="dropdown-item align-items-start text-wrap py-2">
                            <div class="status-indicator-container me-3">
                                <img src="{{ asset('admin/assets/images/demo/users/face24.jpg ') }}"
                                    class="w-40px h-40px rounded-pill" alt="">
                                <span class="status-indicator bg-success"></span>
                            </div>
                            <div class="flex-1">
                                <span class="fw-semibold">Jeremy Victorino</span>
                                <span class="text-muted float-end fs-sm">22:48</span>
                                <div class="text-muted">But that would be extremely strained and suspicious...</div>
                            </div>
                        </a>

                        <a href="#" class="dropdown-item align-items-start text-wrap py-2">
                            <div class="status-indicator-container me-3">
                                <img src="{{ asset('admin/assets/images/demo/users/face4.jpg ') }}"
                                    class="w-40px h-40px rounded-pill" alt="">
                                <span class="status-indicator bg-grey"></span>
                            </div>
                            <div class="flex-1">
                                <span class="fw-semibold">Beatrix Diaz</span>
                                <span class="text-muted float-end fs-sm">Tue</span>
                                <div class="text-muted">What a strenuous career it is that I've chosen...</div>
                            </div>
                        </a>

                        <a href="#" class="dropdown-item align-items-start text-wrap py-2">
                            <div class="status-indicator-container me-3">
                                <img src="{{ asset('admin/assets/images/demo/users/face25.jpg ') }}"
                                    class="w-40px h-40px rounded-pill" alt="">
                                <span class="status-indicator bg-danger"></span>
                            </div>
                            <div class="flex-1">
                                <span class="fw-semibold">Richard Vango</span>
                                <span class="text-muted float-end fs-sm">Mon</span>
                                <div class="text-muted">Other travelling salesmen live a life of luxury...</div>
                            </div>
                        </a>
                    </div>

                    <div class="d-flex border-top py-2 px-3">
                        <a href="#" class="text-body">
                            <i class="ph-checks me-1"></i>
                            Dismiss all
                        </a>
                        <a href="#" class="text-body ms-auto">
                            View all
                            <i class="ph-arrow-circle-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </li>
            <li class="nav-item nav-item-dropdown-lg dropdown ms-lg-2">
                <a href="#" class="navbar-nav-link align-items-center rounded-pill p-1"
                    data-bs-toggle="dropdown">
                    <div class="status-indicator-container">
                        <img src="{{ asset('admin/assets/images/demo/users/face11.jpg ') }}"
                            class="w-32px h-32px rounded-pill" alt="">
                        <span class="status-indicator bg-success"></span>
                    </div>
                    <span class="d-none d-lg-inline-block mx-lg-2">{{ Auth::guard('admin')->user()->name }}</span>
                </a>

                <div class="dropdown-menu dropdown-menu-end">
                    <a href="#" class="dropdown-item">
                        <i class="ph-user-circle me-2"></i>
                        My profile
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="ph-gear me-2"></i>
                        Account settings
                    </a>
                    <form method="POST" action="{{ route('admin.logout') }}">
                        @csrf
                        <a class="dropdown-item" href="{{ route('admin.logout') }}"
                            onclick="event.preventDefault();
                                   this.closest('form').submit();">
                            <i class="ph-sign-out me-2"></i>
                            {{ __('Logout') }}
                        </a>
                    </form>
                </div>
            </li>
        </ul>
    </div>
</div>
<!-- /main navbar -->
